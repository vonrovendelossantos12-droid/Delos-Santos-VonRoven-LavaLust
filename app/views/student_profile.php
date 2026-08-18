<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Profile</title>
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
            max-width: 700px;
            width: 100%;
            overflow: hidden;
        }

        .profile-header {
            background: #e0e0e0;
            color: #333;
            padding: 30px;
            text-align: center;
        }

        .profile-avatar {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            background: white;
            margin: 0 auto 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2.5em;
            color: #333;
            border: 2px solid #ccc;
        }

        .profile-name {
            font-size: 1.5em;
            margin-bottom: 5px;
            font-weight: bold;
        }

        .profile-id {
            font-size: 0.85em;
            opacity: 0.9;
        }

        .profile-content {
            padding: 40px;
        }

        .section {
            margin-bottom: 30px;
        }

        .section-title {
            font-size: 1.1em;
            color: #333;
            font-weight: bold;
            margin-bottom: 12px;
            border-bottom: 1px solid #999;
            padding-bottom: 8px;
        }

        .profile-item {
            display: grid;
            grid-template-columns: 140px 1fr;
            margin-bottom: 10px;
            padding: 8px 0;
        }

        .profile-label {
            font-weight: 600;
            color: #666;
        }

        .profile-value {
            color: #333;
        }

        .academic-info {
            background: #f0f0f0;
            padding: 15px;
            border-radius: 3px;
            margin-bottom: 15px;
        }

        .contact-info {
            background: #f0f0f0;
            padding: 15px;
            border-radius: 3px;
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
        <div style="padding: 15px; background: #f8f9fa; text-align: center;">
            <a href="<?= site_url('') ?>" style="text-decoration: none; color: #333; margin: 0 10px;">Home</a> | 
            <a href="<?= site_url('student') ?>" style="text-decoration: none; color: #333; margin: 0 10px;">Student Info</a> | 
            <a href="<?= site_url('student/profile') ?>" style="text-decoration: none; color: #333; margin: 0 10px;">Student Profile</a>
        </div>

        <div class="profile-header">
            <div class="profile-avatar">👤</div>
            <div class="profile-name"><?php echo $name ?? 'N/A'; ?></div>
            <div class="profile-id">Student ID: <?php echo $student_id ?? 'N/A'; ?></div>
        </div>

        <div class="profile-content">
            <div class="section">
                <div class="section-title">Academic Information</div>
                <div class="academic-info">
                    <div class="profile-item">
                        <span class="profile-label">Course:</span>
                        <span class="profile-value"><?php echo $course ?? 'N/A'; ?></span>
                    </div>
                    <div class="profile-item">
                        <span class="profile-label">Year Level:</span>
                        <span class="profile-value"><?php echo $year ?? 'N/A'; ?></span>
                    </div>
                    <div class="profile-item">
                        <span class="profile-label">Section:</span>
                        <span class="profile-value"><?php echo $section ?? 'N/A'; ?></span>
                    </div>
                </div>
            </div>

            <div class="section">
                <div class="section-title">Contact Information</div>
                <div class="contact-info">
                    <div class="profile-item">
                        <span class="profile-label">Email:</span>
                        <span class="profile-value"><?php echo $email ?? 'N/A'; ?></span>
                    </div>
                    <div class="profile-item">
                        <span class="profile-label">Phone:</span>
                        <span class="profile-value"><?php echo $phone ?? 'N/A'; ?></span>
                    </div>
                    <div class="profile-item">
                        <span class="profile-label">Address:</span>
                        <span class="profile-value"><?php echo $address ?? 'N/A'; ?></span>
                    </div>
                </div>
            </div>

            <div class="action-buttons">
                <button class="btn btn-primary" onclick="window.location.href='<?= site_url('student') ?>'">Back to Info</button>
                <button class="btn btn-secondary" onclick="window.location.href='<?= site_url('') ?>'">Home</button>
            </div>
        </div>
    </div>
</body>
</html>
