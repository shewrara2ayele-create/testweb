<?php include 'header.php'; ?>
<link rel="stylesheet" href="css/prerequisites.css">
<main class="prerequisites-container">
    <h1 class="prerequisites-title">Prerequisites</h1>
    
    <div class="prerequisites-section">
        <h2 class="section-subtitle">ለብድር ጥያቄ መሟላት ያለባቸው ሰነዶች</h2>
        <ol class="requirements-list">
            <?php 
            $requirements = file('text-content/prerequisites_loan_requirements.txt');
            $in_nested_list = false;
            
            foreach ($requirements as $line) {
                $clean_line = trim($line);
                
                if (strpos($clean_line, '**') === 0) {
                    // Nested list item
                    if (!$in_nested_list) {
                        echo '<ul class="nested-list">';
                        $in_nested_list = true;
                    }
                    echo '<li>' . htmlspecialchars(trim(substr($clean_line, 2))) . '</li>';
                } else {
                    // Main list item
                    if ($in_nested_list) {
                        echo '</ul>';
                        $in_nested_list = false;
                    }
                    echo '<li>' . htmlspecialchars($clean_line) . '</li>';
                }
            }
            
            // Close any open nested list
            if ($in_nested_list) {
                echo '</ul>';
            }
            ?>
        </ol>
    </div>
    
    <div class="section-divider"></div>
    
    <div class="prerequisites-section">
        <h2 class="section-subtitle">የሚጠየቀው ብድር ለንግድ ከሆነ</h2>
        <ul class="business-list">
            <?php 
            $business = file('text-content/prerequisites_business_loan.txt');
            foreach ($business as $line) {
                echo '<li>' . htmlspecialchars(trim($line)) . '</li>';
            }
            ?>
        </ul>
    </div>
</main>
<?php include 'footer.php'; ?>
