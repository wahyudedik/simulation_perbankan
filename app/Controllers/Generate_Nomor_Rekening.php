<?php

    function generateAccountNumber($length = 10) {
        $characters = '0123456789';
        $randomString = '';

        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, strlen($characters) - 1)];
        }

        return $randomString;
    }

    function isAccountNumberExists($conn, $accountNumber) {
        $query = "SELECT * FROM cif_simpanan WHERE account_number = '$accountNumber'";
        $result = mysqli_query($conn, $query);

        if (mysqli_num_rows($result) > 0) {
            return true;
            echo "true";
        } else {
            return false;
        }
    }


?>
