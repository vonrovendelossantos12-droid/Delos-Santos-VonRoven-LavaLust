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
            max-width: 600px;
            width: 100%;
            padding: 40px;
        }

        h1 {
            color: #333;
            margin-bottom: 30px;
            text-align: center;
            font-size: 2em;
            border-bottom: 3px solid #667eea;
            padding-bottom: 15px;
        }

        .info-group {
            margin-bottom: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px;
            background: #f8f9fa;
            border-radius: 8px;
            border-left: 4px solid #667eea;
        }

        .info-label {
            font-weight: 600;
            color: #555;
            font-size: 1rem;
        }

        .info-value {
            color: #333;
            font-size: 1rem;
            font-weight: 500;
        }

        .header-section {
            text-align: center;
            margin-bottom: 30px;
        }

        .student-id-badge {
            display: inline-block;
            background: #667eea;
            color: white;
            padding: 8px 16px;
            border-radius: 20px;
            font-size: 0.9rem;
            margin-bottom: 10px;
        }

        .student-name {
            font-size: 1.8em;
            color: #333;
            margin: 10px 0;
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
        <div style="padding: 15px; background: #f8f9fa; margin-bottom: 20px; text-align: center;">
            <a href="<?php echo site_url(''); ?>" style="text-decoration: none; color: #667eea; margin: 0 10px;">Home</a> | 
            <a href="<?php echo site_url('student'); ?>" style="text-decoration: none; color: #667eea; margin: 0 10px;">Student Info</a> | 
            <a href="<?php echo site_url('student/profile'); ?>" style="text-decoration: none; color: #667eea; margin: 0 10px;">Student Profile</a>
        </div>

        <div class="header-section">
            <div class="student-id-badge">ID: <?php echo $student_id; ?></div>
            <h1>Student Information</h1>
            <div class="student-name"><?php echo $name; ?></div>
        </div>

        <div class="info-group">
            <span class="info-label">Student ID:</span>
            <span class="info-value"><?php echo $student_id; ?></span>
        </div>

        <div class="info-group">
            <span class="info-label">Full Name:</span>
            <span class="info-value"><?php echo $name; ?></span>
        </div>

        <div class="info-group">
            <span class="info-label">Course:</span>
            <span class="info-value"><?php echo $course; ?></span>
        </div>

        <div class="info-group">
            <span class="info-label">Year Level:</span>
            <span class="info-value"><?php echo $year; ?></span>
        </div>

        <div class="info-group">
            <span class="info-label">Section:</span>
            <span class="info-value"><?php echo $section; ?></span>
        </div>

        <div class="info-group">
            <span class="info-label">Email:</span>
            <span class="info-value"><?php echo $email; ?></span>
        </div>

        <div class="action-buttons">
            <button class="btn btn-primary" onclick="window.location.href='<?php echo site_url('student/profile'); ?>'">View Profile</button>
            <button class="btn btn-secondary" onclick="window.location.href='<?php echo site_url(''); ?>'">Home</button>
        </div>
    </div>
</body>
</html>
