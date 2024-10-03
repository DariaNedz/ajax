<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);

    $validCredentials = ["username" => "user123", "password" => "pass456"];

    if (empty($username) || empty($password)) {
        echo "Missing data";
    } else {
        if ($username === $validCredentials["username"] && $password === $validCredentials["password"]) {
            echo "Login successful!";
        } else {
            http_response_code(401);
        }
    }
}
