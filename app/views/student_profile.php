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
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }

        .container {
            background: white;
            border-radius: 12px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.2);
            max-width: 700px;
            width: 100%;
            overflow: hidden;
        }

        .profile-header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 40px;
            text-align: center;
        }

        .profile-avatar {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            background: white;
            margin: 0 auto 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 3em;
            color: #667eea;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }

        .profile-name {
            font-size: 2em;
            margin-bottom: 5px;
            font-weight: bold;
        }

        .profile-id {
            font-size: 0.9em;
            opacity: 0.9;
        }

        .profile-content {
            padding: 40px;
        }

        .section {
            margin-bottom: 30px;
        }

        .section-title {
            font-size: 1.3em;
            color: #667eea;
            font-weight: 600;
            margin-bottom: 15px;
            border-bottom: 2px solid #e0e0e0;
            padding-bottom: 10px;
        }

        .profile-item {
            display: grid;
            grid-template-columns: 150px 1fr;
            margin-bottom: 12px;
            padding: 10px 0;
        }

        .profile-label {
            font-weight: 600;
            color: #555;
        }

        .profile-value {
            color: #333;
        }

        .academic-info {
            background: #f8f9fa;
            padding: 20px;
            border-radius: 8px;
            margin-bottom: 20px;
        }

        .contact-info {
            background: #f0f4ff;
            padding: 20px;
            border-radius: 8px;
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
            background: #667eea;
            color: white;
        }

        .btn-primary:hover {
            background: #5568d3;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(102, 126, 234, 0.4);
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
            <a href="<?php echo site_url(''); ?>" style="text-decoration: none; color: #667eea; margin: 0 10px;">Home</a> | 
            <a href="<?php echo site_url('student'); ?>" style="text-decoration: none; color: #667eea; margin: 0 10px;">Student Info</a> | 
            <a href="<?php echo site_url('student/profile'); ?>" style="text-decoration: none; color: #667eea; margin: 0 10px;">Student Profile</a>
        </div>

        <div class="profile-header">
            <div class="profile-avatar">👤</div>
            <div class="profile-name"><?php echo $name; ?></div>
            <div class="profile-id">Student ID: <?php echo $student_id; ?></div>
        </div>

        <div class="profile-content">
            <div class="section">
                <div class="section-title">Academic Information</div>
                <div class="academic-info">
                    <div class="profile-item">
                        <span class="profile-label">Course:</span>
                        <span class="profile-value"><?php echo $course; ?></span>
                    </div>
                    <div class="profile-item">
                        <span class="profile-label">Year Level:</span>
                        <span class="profile-value"><?php echo $year; ?></span>
                    </div>
                    <div class="profile-item">
                        <span class="profile-label">Section:</span>
                        <span class="profile-value"><?php echo $section; ?></span>
                    </div>
                </div>
            </div>

            <div class="section">
                <div class="section-title">Contact Information</div>
                <div class="contact-info">
                    <div class="profile-item">
                        <span class="profile-label">Email:</span>
                        <span class="profile-value"><?php echo $email; ?></span>
                    </div>
                    <div class="profile-item">
                        <span class="profile-label">Phone:</span>
                        <span class="profile-value"><?php echo $phone; ?></span>
                    </div>
                    <div class="profile-item">
                        <span class="profile-label">Address:</span>
                        <span class="profile-value"><?php echo $address; ?></span>
                    </div>
                </div>
            </div>

            <div class="action-buttons">
                <button class="btn btn-primary" onclick="window.location.href='<?php echo site_url('student'); ?>'">Back to Info</button>
                <button class="btn btn-secondary" onclick="window.location.href='<?php echo site_url(''); ?>'">Home</button>
            </div>
        </div>
    </div>
</body>
</html>
