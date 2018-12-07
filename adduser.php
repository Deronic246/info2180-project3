<?php
   include "conn.php";
   
   if ($_SERVER["REQUEST_METHOD"] == "POST") {
       if(isset($_POST["submit"])){
           $fname=$_POST["fname"];
           $lname=$_POST["lname"];
           $pwd=$_POST["pwd"];
           $email=$_POST["email"];
           $tel=$_POST["tel"];
           $ptest="/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[A-Za-z\d]{8,}$/";
           $ttest="/^\d{3}-\d{3}-\d{4}$/";
           $count=0;
           
           if($fname!=""){
               if (protect($fname)!=$fname){
                   echo "Invalid First Name"."<br>"; 
               }
               else{
                   echo "First Name Accepted"."<br>";
                   $count++;
               }
               
           }
           
           else{
               echo "First Name Field is Empty"."<br>";
           }
           
           if($lname!=""){
               if (protect($lname)!=$lname){
                   echo "Invalid Last Name"."<br>";
               }
               else{
                   echo "Last Name Accepted"."<br>";
                   $count++;
               }
           }
           else{
               echo "Last Name Field is Empty"."<br>";
           }
           
           if($pwd!=""){
               
               if (protect($pwd)!=$pwd){
                   echo "Invalid Password"."<br>";
               }
               else{
                   if(preg_match($ptest, $pwd)==1){
                        echo "Password  Accepted"."<br>";
                        $pwd=password_hash($pwd, PASSWORD_DEFAULT);
                        $count++;
                   }
                   
                   else{
                       echo "Password must contain at least one number and one letter, and one capital letter
                        and are at least 8 characters long"."<br>";
                   }
               }
           }
           
           else{
               echo "Password Field is Empty"."<br>";
           }
           
           if($tel!=""){
               
               if (protect($tel)!=$tel){
                   echo "Invalid Telephone Number"."<br>";
               }
               else{
                   if(preg_match($ttest, $tel)==1){
                   
                        echo "Telephone Number Accepted"."<br>";
                        $count++;
                   }
                   else{
                       echo "Telephone number must be in the form of 000-000-0000"."<br>";
                   }
               }
           }
           
            if($email!=""){
               
                if (protect($email)!=$email){
                    echo "Invalid Email"."<br>";
               }
                else{
                    echo "Email Accepted"."<br>";
                    $count++;
                }
            }
           
            if($count==5){
                $sql = "INSERT INTO Users (firstname, lastname, password, telephone, email) VALUES ('$fname', '$lname', '$pwd','$tel','$email')";

                if (mysqli_query($conn, $sql)) {
                    echo "New record created successfully";
                } else {
                    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                }

                mysqli_close($conn);
           }
           
           
       }
   }
   
   else{
       echo "Method is incorrect"."<br>";
   }
   
   function protect($string)
    {
        $n= filter_var($string, FILTER_SANITIZE_STRING); 
        $n1=strip_tags($n);
        return $n1;
    }
?>