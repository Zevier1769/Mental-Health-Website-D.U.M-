<?php
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $country = $_POST['country'];
    $state = $_POST['state'];
    $city = $_POST['city'];
    $zip = $_POST['zip'];
    $phelp = $_POST['phelp'];

    $conn = new mysqli('localhost','root','','testa');
    if($conn->connect_error){
        die('Connection Failed : '.$conn->connect_error);
    }else{
        $stmt = $conn->prepare("insert into prohelp(firstname, lastname, age, gender, phone, email, country, state, city, zip, phelp)
        values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssisissssis", $firstname, $lastname, $age, $gender, $phone, $email, $country, $state, $city, $zip, $phelp);
        $stmt->execute();
        echo "Form Submitted Successfully";
        $stmt->close();
        $conn->close();

    }
    

  

?>