<?php include 'header.php'; ?>
<link rel="stylesheet" href="css/services.css">
<main class="services-container">
    <h1 class="services-title">Services</h1>
    
    <!-- Savings Types Section -->
    <section class="service-section">
        <div class="service-content">
            <div class="service-image">
                <img src="images/sec1.jpg" alt="Savings Types">
            </div>
            <div class="service-text">
                <h2 class="service-subtitle">የቁጠባ አይነቶች</h2>
                <ul class="service-list">
                    <?php 
                    $lines = file('text-content/services_savings_types.txt');
                    foreach ($lines as $line) {
                        echo '<li>' . htmlspecialchars(trim($line)) . '</li>';
                    }
                    ?>
                </ul>
            </div>
        </div>
    </section>
    
    <div class="section-divider"></div>
    
    <!-- Loan Service Section -->
    <section class="service-section">
        <div class="service-content">
            <div class="service-image">
                <img src="images/sec2.jpg" alt="Loan Service">
            </div>
            <div class="service-text">
                <h2 class="service-subtitle">የብድር አገልግሎት</h2>
                <ul class="service-list">
                    <?php 
                    $lines = file('text-content/services_loan_service.txt');
                    foreach ($lines as $line) {
                        echo '<li>' . htmlspecialchars(trim($line)) . '</li>';
                    }
                    ?>
                </ul>
            </div>
        </div>
    </section>
    
    <div class="section-divider"></div>
    
    <!-- Loan Guarantee Types Section -->
    <section class="service-section">
        <div class="service-content">
            <div class="service-image">
                <img src="images/sec3.jpg" alt="Loan Guarantee Types">
            </div>
            <div class="service-text">
                <h2 class="service-subtitle">የብድር ዋስትና አይነቶች</h2>
                <ul class="service-list">
                    <?php 
                    $lines = file('text-content/services_loan_guarantee.txt');
                    foreach ($lines as $line) {
                        echo '<li>' . htmlspecialchars(trim($line)) . '</li>';
                    }
                    ?>
                </ul>
            </div>
        </div>
    </section>
    
    <div class="section-divider"></div>
    
    <!-- Loan Provision Section -->
    <section class="service-section">
        <div class="service-content">
            <div class="service-image">
                <img src="images/sec4.jpg" alt="Loan Provision">
            </div>
            <div class="service-text">
                <h2 class="service-subtitle">የብድር አሰጣጥ</h2>
                <ul class="service-list">
                    <?php 
                    $lines = file('text-content/services_loan_provision.txt');
                    foreach ($lines as $line) {
                        echo '<li>' . htmlspecialchars(trim($line)) . '</li>';
                    }
                    ?>
                </ul>
            </div>
        </div>
    </section>
</main>
<?php include 'footer.php'; ?>