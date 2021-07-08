<?php
    if (isset($_POST['email']) && isset($_POST['pass'])) {
        $email = trim($_POST['email']);
        $pass  = $_POST['pass'];

        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            // ... more code

            $json = ['status' => 'ok', 'message' => 'Your account with email ' . $email . ' has been created.', 'error' => ''];
        }
        else {
            $json = ['status' => 'error', 'message' => '', 'error' => 'Invalid email format.'];
        }
    }
    else {
        $json = ['status' => 'error', 'message' => '', 'error' => 'There is no data to process.'];
    }

    echo json_encode($json);
?>