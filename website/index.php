<?php include 'header.php'; ?>
<link rel="stylesheet" href="css/index.css">
<script src="js/index.js"></script>
<section class="hero-section">
    <div class="hero-content">
        <div class="hero-text">
            <h1 class="company-name-am">አሰር የገንዘብ ቁጠባና ብድር ኃ/የተ/ህ/ማህበር</h1>
            <p class="company-name-en">ASER SAVING & CREDIT CO-OPERATIVE SOCIETY LLC</p>
            <p class="hero-tagline">ለስኬትዋ በር</p>
            <button class="hero-button">አባል ይሁኑ</button>
        </div>
        <div class="hero-image">
            <img src="images/home-banner.jpg" alt="Company Banner">
        </div>
    </div>
</section>
<!-- Section 2: About -->
<section class="about-section">
    <div class="about-container">
        <div class="about-image">
            <img src="images/about-image.jpg" alt="About Our Company">
        </div>
        <div class="about-content">
            <h2 class="about-title">
                <?php include 'text-content/section2_title.txt'; ?>
            </h2>
            <p class="about-text">
                <?php include 'text-content/section2_text.txt'; ?>
            </p>
        </div>
    </div>
</section>
<!-- Combined Section 3 & 4: Principles & Vision -->
<section class="principles-section">
    <div class="principles-overlay"></div>
    
    <div class="principles-container">
        <!-- Principles Section -->
        <div class="principle-card">
            <div class="principle-image">
                <img src="images/principle-icon.png" alt="Principles Icon">
            </div>
            <div class="principle-content">
                <h2 class="principle-title">
                    <?php include 'text-content/section3_subtitle1.txt'; ?>
                </h2>
                <div class="principle-text">
                    <?php 
                    $lines = file('text-content/section3_text1.txt');
                    foreach ($lines as $line) {
                        echo '<p>'.$line.'</p>';
                    }
                    ?>
                </div>
                <div class="principle-divider"></div>
            </div>
        </div>
        
        <!-- Objectives Section -->
        <div class="principle-card">
            <div class="principle-image">
                <img src="images/objective-icon.png" alt="Objectives Icon">
            </div>
            <div class="principle-content">
                <h2 class="principle-title">
                    <?php include 'text-content/section3_subtitle2.txt'; ?>
                </h2>
                <div class="principle-text">
                    <?php 
                    $lines = file('text-content/section3_text2.txt');
                    foreach ($lines as $line) {
                        echo '<p>'.$line.'</p>';
                    }
                    ?>
                </div>
                <div class="principle-divider"></div>
            </div>
        </div>
        
        <!-- Divider Line -->
        <div class="internal-divider"></div>
        
        <!-- Vision Section -->
        <div class="principle-card reversed">
            <div class="principle-image">
                <img src="images/vision-icon.png" alt="Vision Icon">
            </div>
            <div class="principle-content">
                <h2 class="principle-title">
                    <?php include 'text-content/section4_subtitle1.txt'; ?>
                </h2>
                <div class="principle-text">
                    <?php 
                    $lines = file('text-content/section4_text1.txt');
                    foreach ($lines as $line) {
                        echo '<p>'.$line.'</p>';
                    }
                    ?>
                </div>
                <div class="principle-divider"></div>
            </div>
        </div>
        
        <!-- Values Section -->
        <div class="principle-card reversed">
            <div class="principle-image">
                <img src="images/values-icon.png" alt="Values Icon">
            </div>
            <div class="principle-content">
                <h2 class="principle-title">
                    <?php include 'text-content/section4_subtitle2.txt'; ?>
                </h2>
                <div class="principle-text">
                    <?php 
                    $lines = file('text-content/section4_text2.txt');
                    foreach ($lines as $line) {
                        echo '<p>'.$line.'</p>';
                    }
                    ?>
                </div>
                <div class="principle-divider"></div>
            </div>
        </div>
    </div>
</section>
<!-- Section 5: Loan Services -->
<section class="loan-section">
    <div class="loan-container">
        <div class="section-header">
            <h3 class="service-text">አገልግሎታችን</h3>
            <h2 class="section-title">የብድር መጠን እና ዋስትና</h2>
            <div class="title-line"></div>
        </div>
        
        <div class="loan-columns">
            <!-- Column 1 -->
            <div class="loan-column">
                <div class="loan-card">
                    <div class="loan-amount">
                        &lt;100,000.0 ብር
                    </div>
                </div>
                <ul class="guarantee-list">
                    <li>በወር ደሞዝተኛ ዋስ ፣ በማህበሩ አክስዩን ፣ በሌሎች ማህበራት አሽዩን</li>
                    <li>የብድሩ አላማ በትክክል መገለፅ አለበት</li>
                </ul>
            </div>
            
            <!-- Column 2 -->
            <div class="loan-column">
                <div class="loan-card">
                    <div class="loan-amount">
                        100,000.0 ብር - 400,000.0 ብር
                    </div>
                </div>
                <ul class="guarantee-list">
                    <li>በመኪና ሊብሬ ፣ የቤት ካርታ ፣ በማህበሩ አክስዩን ፣ በሌሎች ማህበራት አክሲዩን</li>
                    <li>የብድሩ አላማ በትክክል መገለፅ አለበት</li>
                </ul>
            </div>
            
            <!-- Column 3 -->
            <div class="loan-column">
                <div class="loan-card">
                    <div class="loan-amount">
                        400,000.0 ብር - 800,000.0 ብር
                    </div>
                </div>
                <ul class="guarantee-list">
                    <li>የቤት ካርታ ፣ በማህበሩ አክስዩን ፣ በሌሎች ማህበራት አክሲዩን</li>
                    <li>የብድሩ አላማ በትክክል መገለፅ አለበት</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<?php include 'footer.php'; ?>
