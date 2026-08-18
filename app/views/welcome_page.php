<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #ffffff;
            color: #333;
            padding: 20px;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
        }

        nav {
            margin-bottom: 30px;
            padding-bottom: 20px;
            border-bottom: 1px solid #ddd;
        }

        nav a {
            color: #333;
            text-decoration: none;
            margin-right: 20px;
        }

        nav a:hover {
            text-decoration: underline;
        }

        h1 {
            color: #333;
            margin-bottom: 20px;
            font-size: 32px;
        }

        .welcome-section {
            background-color: #f0f0f0;
            border-left: 4px solid #999;
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 4px;
        }

        .welcome-section p {
            line-height: 1.6;
            color: #555;
        }

        .action-buttons {
            margin-top: 30px;
        }

        button {
            background-color: #999;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 14px;
            margin-right: 10px;
        }

        button:hover {
            background-color: #777;
        }
    </style>
</head>
<body>
    <div class="container">
        <nav>
            <a href="<?= site_url('') ?>">Home</a> | <a href="<?= site_url('student') ?>">Student Info</a>
        </nav>

        <h1>Welcome</h1>

        <div class="welcome-section">
            <p>Welcome to the Student Information System. Click the button below to view student information or use the navigation menu above.</p>
        </div>

        <div class="action-buttons">
            <button onclick="window.location.href='<?= site_url('student') ?>';">View Student Info</button>
        </div>
    </div>
</body>
</html>
