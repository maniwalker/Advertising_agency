<?php
   // Check if form fields exist and assign their values to variables
   $name = isset($_POST['name']) ? $_POST['name'] : "";
   $mobile = isset($_POST['mobile']) ? $_POST['mobile'] : "";
   $mail = isset($_POST['mail']) ? $_POST['mail'] : "";
   $address = isset($_POST['address']) ? $_POST['address'] : "";
   $newspaper = isset($_POST['newspaper']) ? $_POST['newspaper'] : "";
   $details = isset($_POST['details']) ? $_POST['details'] : "";

   // Database Connection
   $conn = new mysqli('localhost','root','','bookings');
   if($conn->connect_error){
      die('Connection Failed : '.$conn->connect_error );
   } else {
      // Prepare and execute the SQL query
      $stmt = $conn->prepare("INSERT INTO bookings(Full_name,Mobile_number,E_mail,Address_customer,Newspaper,Details) VALUES(?,?,?,?,?,?)");
      $stmt->bind_param("sissss",$name,$mobile,$mail,$address,$newspaper,$details);
      $stmt->execute();
      echo "Your Booking has been successfully completed... Our team will contact you as soon as possible! Thanks for your patience";
      $stmt->close();
      $conn->close();
   }
?>