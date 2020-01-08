<?php
require 'Entity/TableEntity.php';

class TableModel {

    function InsertTableRecord(TableEntity $table)
    {
        require 'credentials.php';
        $con = mysqli_connect($host, $user, $password, $database) or die("Cant connect");
        mysqli_select_db($con,$database) or die ("Database not found");
        $query = sprintf("INSERT INTO tablebook(Title,FName,LName,Email,Phone,Tbltyp,time,date,status)VALUES('%s','%s','%s','%s','%s','%s','%s','%s','%s')",
                mysqli_real_escape_string($con, $table->Title),
                mysqli_real_escape_string($con, $table->FName),
                mysqli_real_escape_string($con, $table->LName),
                mysqli_real_escape_string($con, $table->Email),
                mysqli_real_escape_string($con, $table->Phone),
                mysqli_real_escape_string($con, $table->Tbltyp),
                mysqli_real_escape_string($con, $table->time),
                mysqli_real_escape_string($con, $table->date),
                mysqli_real_escape_string($con, $table->status));
        if(mysqli_query($con, $query))
        {
            echo "<script type='text/javascript'> alert('Your Booking application has been sent')</script>";
            mysqli_close($con);
        }
        else
        {
            echo "<script type='text/javascript'> alert('Error adding user in database')</script>";
        }
    }
}
