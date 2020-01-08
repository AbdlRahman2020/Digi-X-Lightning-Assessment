<?php
require 'Entity/ContactEntity.php';

class ContactModel {

    function InsertContact(ContactEntity $contact)
    {
        require 'credentials.php';
        $con = mysqli_connect($host, $user, $password, $database) or die("Cant connect");
        mysqli_select_db($con,$database) or die ("Database not found");
        $query = sprintf("INSERT INTO `contact`(fullname, phoneno, email,approval)VALUES('%s','%s','%s','%s')",
                mysqli_real_escape_string($con,$contact->fullname),
                mysqli_real_escape_string($con,$contact->phoneno),
                mysqli_real_escape_string($con,$contact->email),
                mysqli_real_escape_string($con,$contact->approval));
        if(mysqli_query($con, $query))
        {
            echo "<script type='text/javascript'> alert('Newsletter subscription request sent')</script>";
            mysqli_close($con);
        }
        else
        {
            echo "<script type='text/javascript'> alert('Something might not right')</script>";
        }
    }
}
