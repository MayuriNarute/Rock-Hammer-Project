<?php
//connect the database
include 'connction.php';
 
//get the payment details from payment page
 
if(isset($_POST['payment_id']) && isset($_POST['amount']) && isset($_POST['name']))
{
    $paymentId = $_POST['payment_id'];
    $amount = $_POST['amount'];
    $name = $_POST['name'];
 
    //insert data into database
    $sql="INSERT INTO razorpay_payment(name,amount,payment_status,payment_id)VALUES('$name','$amount','paid','$paymentId')";
    $stmt=$db->prepare($sql);
    $stmt->execute();
}
?>