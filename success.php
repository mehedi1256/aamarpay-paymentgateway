<?php

if($_SERVER['REQUEST_METHOD']=="POST"){

    /* echo $paystatus= "Payment is " . $_POST['pay_status'] . "<br/>";
    echo $amount="Amount is " . $_POST['amount'] . "Taka"; */
    
    //you can get all parameter from post request
    print_r("<pre>");
    print_r($_POST);
}
?>