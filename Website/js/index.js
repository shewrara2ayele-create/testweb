document.addEventListener('DOMContentLoaded', function() {
    // Hero button hover effect
    const heroButton = document.querySelector('.hero-button');
    
    if (heroButton) {
        heroButton.addEventListener('mouseenter', function() {
            this.style.backgroundColor = 'rgba(255, 253, 246, 0.1)';
        });
        
        heroButton.addEventListener('mouseleave', function() {
            this.style.backgroundColor = 'transparent';
        });
        
        // Fixed button click action
        heroButton.addEventListener('click', function() {
            window.location.href = 'join.php';
        });
    }
    
    // Performance optimization for principles section
    const principlesSection = document.querySelector('.principles-section');
    if (principlesSection) {
        // Force GPU acceleration
        principlesSection.style.transform = 'translate3d(0,0,0)';
        principlesSection.style.willChange = 'transform';
    }
    
    // Add loaded class to vision and values titles
    setTimeout(function() {
        const visionTitle = document.querySelector('.principle-card.reversed:nth-child(4) .principle-title');
        const valuesTitle = document.querySelector('.principle-card.reversed:nth-child(5) .principle-title');
        
        if (visionTitle) visionTitle.classList.add('loaded');
        if (valuesTitle) valuesTitle.classList.add('loaded');
    }, 100);
});