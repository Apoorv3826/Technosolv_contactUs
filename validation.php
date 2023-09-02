<?php
if($_POST){
    $full_name = $_POST["name"];
    $phone_number = $_POST["phone"];
    $email = $_POST["email"];
    $subject = $_POST["subj"];
    $message = $_POST["msg"];

    if(empty($full_name) || empty($phone_number) || empty($email) || empty($subject) || empty($message)){
        die("please fill in all the fields");
    }

    if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        die("Inavlid email address");
    }

    if(!preg_match("/^[0-9]{10}$/"), $phone_number){
        die("Invalid phone number");
    }

    //connection 

    $conn = mysqli_connect("localhost", "root", "password", "mydb");

    $query = "INSERT INTO contact (name, phone, email,subj, msg) values ('$full_name', '$phone_number', '$email', '$subject', '$message')";

    $result = mysqli_query($conn, $query);

    if($result){
        mail("owner@company.com", "New Contact form submission");
    }

    mysqli_close($conn);
}
?>