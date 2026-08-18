<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Information</title>
    <link rel="shortcut icon" href="data:image/x-icon;," type="image/x-icon">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #f5f5f5;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }

        .container {
            background: white;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            width: 100%;
            padding: 30px;
        }

        h1 {
            color: #333;
            margin-bottom: 20px;
            text-align: center;
            font-size: 1.8em;
            border-bottom: 1px solid #999;
            padding-bottom: 10px;
        }

        .info-group {
            margin-bottom: 15px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px;
            background: #f0f0f0;
            border-radius: 3px;
        }

        .info-label {
            font-weight: bold;
            color: #333;
            font-size: 0.95rem;
        }

        .info-value {
            color: #333;
            font-size: 0.95rem;
        }

        .header-section {
            text-align: center;
            margin-bottom: 30px;
        }

        .student-id-badge {
            display: inline-block;
            background: #ddd;
            color: #333;
            padding: 5px 10px;
            border-radius: 3px;
            font-size: 0.85rem;
            margin-bottom: 10px;
        }

        .student-name {
            font-size: 1.5em;
            color: #333;
            margin: 8px 0;
        }

        .action-buttons {
            margin-top: 30px;
            display: flex;
            gap: 10px;
            justify-content: center;
        }

        .btn {
            padding: 10px 20px;
            border: none;
            border-radius: 6px;
            font-size: 1rem;
            cursor: pointer;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-block;
        }

        .btn-primary {
            background: #ccc;
            color: #333;
        }

        .btn-primary:hover {
            background: #bbb;
        }

        .btn-secondary {
            background: #e0e0e0;
            color: #333;
        }

        .btn-secondary:hover {
            background: #d0d0d0;
            transform: translateY(-2px);
        }
    </style>
</head>
<body>
    <div class="container">
        <div style="padding: 15px; background: #f8f9fa; margin-bottom: 20px; text-align: center;">
            <a href="<?= site_url('') ?>" style="text-decoration: none; color: #333; margin: 0 10px;">Home</a> | 
            <a href="<?= site_url('student') ?>" style="text-decoration: none; color: #333; margin: 0 10px;">Student Info</a>
        </div>

        <div class="header-section">
            <div class="student-id-badge">ID: <?php echo $student_id ?? 'N/A'; ?></div>
            <h1>Student Information</h1>
            <div class="student-name"><?php echo $name ?? 'N/A'; ?></div>
        </div>

        <div class="info-group">
            <span class="info-label">Student ID:</span>
            <span class="info-value"><?php echo $student_id ?? 'N/A'; ?></span>
        </div>

        <div class="info-group">
            <span class="info-label">Full Name:</span>
            <span class="info-value"><?php echo $name ?? 'N/A'; ?></span>
        </div>

        <div class="info-group">
            <span class="info-label">Course:</span>
            <span class="info-value"><?php echo $course ?? 'N/A'; ?></span>
        </div>

        <div class="info-group">
            <span class="info-label">Year Level:</span>
            <span class="info-value"><?php echo $year ?? 'N/A'; ?></span>
        </div>

        <div class="info-group">
            <span class="info-label">Section:</span>
            <span class="info-value"><?php echo $section ?? 'N/A'; ?></span>
        </div>

        <div class="info-group">
            <span class="info-label">Email:</span>
            <span class="info-value"><?php echo $email ?? 'N/A'; ?></span>
        </div>

        <div class="action-buttons">
            <button class="btn btn-secondary" onclick="window.location.href='<?= site_url('') ?>'">Home</button>
        </div>
    </div>
</body>
</html>
