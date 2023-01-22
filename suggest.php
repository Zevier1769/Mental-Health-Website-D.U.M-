<?php
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];

    $phone = $_POST['phone'];
    $email = $_POST['email'];

    $sugg = $_POST['sugg'];

    $conn = new mysqli('localhost','root','','testa');
    if($conn->connect_error){
        die('Connection Failed : '.$conn->connect_error);
    }else{
        $stmt = $conn->prepare("insert into suggestion(firstname, lastname, phone, email, sugg)
        values(?, ?, ?, ?, ?)");
        $stmt->bind_param("ssiss", $firstname, $lastname, $phone, $email, $sugg);
        $stmt->execute();
        echo "Form Submitted Successfully";
        $stmt->close();
        $conn->close();

    }
    

  

?>