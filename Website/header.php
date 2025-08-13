<?php
// File: includes/header.php
$current_page = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE html>
<html lang="am">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>አ.የ.ቁ.ብ ኃ/የተ/ህ/ማ</title>
    <link rel="icon" href="images/favicon.png">
    <link rel="stylesheet" href="css/header.css">
</head>
<body>
    <header class="site-header">
        <div class="header-container">
            <div class="logo-section">
                <a href="index.php" class="logo-link">
                    <img src="images/logo.png" alt="Company Logo" class="logo">
                </a>
                <div class="amharic-text">አሰር የገንዘብ ቁጠባና ብድር ኃ/የተ/ህ/ማህብር</div>
            </div>
            
            <div class="nav-section">
                <div class="menu-toggle" id="menuToggle">☰</div>
                <nav class="main-nav" id="mainNav">
                    <ul>
                        <li><a href="index.php" class="<?php echo $current_page == 'index.php' ? 'active' : ''; ?>">Home</a></li>
                        <li><a href="join.php" class="<?php echo $current_page == 'join.php' ? 'active' : ''; ?>">Join us</a></li>
                        <li><a href="services.php" class="<?php echo $current_page == 'services.php' ? 'active' : ''; ?>">Services</a></li>
                        <li><a href="prerequisites.php" class="<?php echo $current_page == 'prerequisites.php' ? 'active' : ''; ?>">Prerequisites</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <script src="js/header.js"></script>
</body>
</html>