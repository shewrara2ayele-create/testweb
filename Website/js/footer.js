document.addEventListener('DOMContentLoaded', function() {
    // Footer interaction scripts
    const footerLinks = document.querySelectorAll('.footer-menu a');
    
    footerLinks.forEach(link => {
        link.addEventListener('mouseenter', function() {
            this.style.opacity = '0.8';
        });
        
        link.addEventListener('mouseleave', function() {
            this.style.opacity = '1';
        });
    });
});