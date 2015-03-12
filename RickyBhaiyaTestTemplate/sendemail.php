<?php
	include_once 'db_connect.php';
	header('Content-type: application/json');
	$status = array(
		'type'=>'success',
		'message'=>'Thank you for contact us. As early as possible  we will contact you '
	);

    $name = @trim(stripslashes($_POST['name'])); 
    $email = @trim(stripslashes($_POST['email'])); 
    $subject = @trim(stripslashes($_POST['subject'])); 
    $message = @trim(stripslashes($_POST['message'])); 

    $email_from = $email;
    $email_to = 'email@email.com';//replace with your email

    $body = 'Name: ' . $name . "\n\n" . 'Email: ' . $email . "\n\n" . 'Subject: ' . $subject . "\n\n" . 'Message: ' . $message;

    $success = @mail($email_to, $subject, $body, 'From: <'.$email_from.'>');

    echo json_encode($status);
	
    $sql = "SELECT * FROM employeeinfo";
//     $result = FETCH_ARRAY($sql);
//     die;
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
    	// output data of each row
    	while($row = $result->fetch_assoc()) {
    		echo "Id: " . $row["id"]. " - EmployeeId: " . $row["empid"]. " " ."Age: " . $row["age"]. "Name: " . $row["name"]. "<br>";
    	}
    } else {
    	echo "0 results";
    }
    $conn->close();