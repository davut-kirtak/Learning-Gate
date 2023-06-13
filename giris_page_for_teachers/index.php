<?php

    $name = $_POST['name'];
    $surname =$_POST['surname'];
    $email = $_POST['email'];
    $password = $_POST['password'];


    $conn = new mysqli('localhost','root', '','learning_gate');
    if ($conn->connect_error) {
        echo $name;
        die('fail:'.$conn->connect_error);
    }
    else {
        echo $email;
        $stmt = $conn->prepare("insert into teachers (name,surname,email,password)
values (?,?,?,?)");
        $stmt->bind_param("ssss",$name,$surname,$email,$password);
        $execval = $stmt->execute();
        echo $execval;
        echo "Registration successfully...";
        $stmt->close();
        $conn->close();
    }
