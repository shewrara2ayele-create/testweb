// File: js/header.js
document.addEventListener('DOMContentLoaded', function() {
    // Mobile menu functionality
    const menuToggle = document.getElementById('menuToggle');
    const mainNav = document.getElementById('mainNav');
    
    if (menuToggle && mainNav) {
        menuToggle.addEventListener('click', function() {
            mainNav.classList.toggle('active');
            this.textContent = mainNav.classList.contains('active') ? '✕' : '☰';
        });
    }
    
    // Close mobile menu when clicking outside
    document.addEventListener('click', function(event) {
        if (mainNav && mainNav.classList.contains('active') && 
            !event.target.closest('.nav-section') && 
            !event.target.closest('.main-nav')) {
            mainNav.classList.remove('active');
            if (menuToggle) menuToggle.textContent = '☰';
        }
    });
    
    // Close mobile menu when clicking a nav link
    const navLinks = document.querySelectorAll('.main-nav a');
    navLinks.forEach(link => {
        link.addEventListener('click', function() {
            if (mainNav && mainNav.classList.contains('active')) {
                mainNav.classList.remove('active');
                if (menuToggle) menuToggle.textContent = '☰';
            }
        });
    });
    
    // Handle window resize
    window.addEventListener('resize', function() {
        if (window.innerWidth > 900 && mainNav && mainNav.classList.contains('active')) {
            mainNav.classList.remove('active');
            if (menuToggle) menuToggle.textContent = '☰';
        }
    });
});