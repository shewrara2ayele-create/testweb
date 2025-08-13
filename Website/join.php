<?php include 'header.php'; ?>
<link rel="stylesheet" href="css/join.css">
<main class="join-container">
    <h1 class="join-title">Join Us</h1>
    
    <div class="join-banner">
        <img src="images/join-banner.jpg" alt="Join Us Banner" class="banner-image">
        <div class="banner-text">አባል ይሁኑ</div>
    </div>
    
    <div class="join-content">
        <div class="join-section">
            <h2 class="section-subtitle">አባል ለመሆን መሟላት ያለባቸው ሰነዶች</h2>
            <ol class="requirements-list">
                <?php 
                $requirements = file('text-content/join_requirements.txt');
                foreach ($requirements as $requirement) {
                    echo '<li>' . htmlspecialchars(trim($requirement)) . '</li>';
                }
                ?>
            </ol>
        </div>
        
        <div class="section-divider"></div>
        
        <div class="join-section">
            <h2 class="section-subtitle">የአንድ እጣ/ሼር/ ዋጋ 500.00 ብር ሲሆን አባል ለመሆን ዝቅተኛ የአክሲዩን መገዛት ያለበት</h2>
            <ul class="shares-list">
                <?php 
                $shares = file('text-content/join_shares.txt');
                foreach ($shares as $share) {
                    echo '<li>' . htmlspecialchars(trim($share)) . '</li>';
                }
                ?>
            </ul>
        </div>
    </div>
</main>
<?php include 'footer.php'; ?>