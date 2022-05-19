<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../assets/style/style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap" rel="stylesheet"> 
    <title>New Contact</title>
</head>
<body>

    <h1>Create new contact</h1>

    <form action="./NewContact.php">

        <!--Name-->
        <label for="NewContact">Name</label>
        <input type="text" id="name" name="name" placeholder="Smith">

        <!--Firstname-->
        <label for="NewContact">First name</label>
        <input type="text" id="firstname" name="firstname" placeholder="John">

        <!--Phone Number-->
        <label for="NewContact">Phone Number</label>
        <input type="tel" id="phone" name="phone" placeholder="0123/456789" pattern="[0-9]{4}-[0-9]{6}" required>

        <!--Email-->
        <label for="email">E-mail</label>
        <input type="email" id="email" name="email" patter=".+@globex\.com" size="30" required placeholder="Email Address">

        <!--Name of the company-->
        <label for="NewContact">Company</label>
        <input type="text" id="company" name="company" placeholder="Company">

        <input type="submit" value="Submit">

    </form>
    
</body>
</html>











<?php

echo 'TEST NEW CONTACT';

?>