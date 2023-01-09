<?php

session_start();

require_once '../../includes/config.php';

require_once '../../externalLibraries/vendor/autoload.php';

extract($_POST);

if (isset($submit)) {
    $insert = "UPDATE expenses SET exp_date = ?, amount= ? , item = ?, type = ?, description = ?, recurring = ?";

        $stmt = $con->prepare($insert);

        $stmt->bind_param('sissss', $date, $amount, $item, $expense_type, $description, $occurence);
        if ($stmt->execute()) {
            echo "Successfully updated expense";
             exit();
         } else {
             //redirect back to the signin.php page
           echo "system_error";
             exit();
         }
}