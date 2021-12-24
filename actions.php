<?php

    include 'helper/DB_connection.php';

    if(isset($_POST['action']) && $_POST['action'] == 'subscribe') {
        $email = $_POST['email'];

        $query = "INSERT INTO subscription (name, email, phone) VALUES ('$name, $email, $phone')";

        $result = query($query);

    }