<?php

    include 'helper/DB_connection.php';

    if(isset($_POST['action']) && $_POST['action'] == 'subscribe') {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];

        $query = "INSERT INTO subscription (name, email, phone) VALUES ('$name, $email, $phone')";

        $result = query($query);

    }