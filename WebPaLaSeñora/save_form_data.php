<!-- Intento de Envio de formulaio **NO FUNCIONAL** -->

<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $name = $_POST['name'];
    $lastname = $_POST['lastname'];
    $selectedProduct = $_POST['product'];
    $deliveryComments = $_POST['txtmsg'];
    $email = $_POST['email'];

    echo "Name: " . $name . "<br>";
    echo "Last Name: " . $lastname . "<br>";
    echo "Selected Product: " . $selectedProduct . "<br>";
    echo "Delivery Comments: " . $deliveryComments . "<br>";
    echo "Email: " . $email . "<br>";
}
?>