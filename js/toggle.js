document.getElementById('toggle-dark-mode').addEventListener('click', () => {
    const body = document.body;
    const icon = document.getElementById('dark-mode-icon');
    const navbar = document.querySelector('.navbar');

    body.classList.toggle('dark-mode');
    body.classList.toggle('light-mode');

    // Toggle the visibility of the moon and sun icons
    if (body.classList.contains('dark-mode')) {
        icon.setAttribute('src', 'assets/brightness-high-fill.svg');

        navbar.classList.add('navbar-dark', 'bg-dark');  // Dark navbar
        navbar.classList.remove('navbar-light', 'bg-white');  // Light navbar
    } 
    else {
        icon.setAttribute('src', 'assets/moon-stars-fill.svg');

        navbar.classList.add('navbar-light', 'bg-white');  // Light navbar
        navbar.classList.remove('navbar-dark', 'bg-dark');  // Dark navbar
    }
});

// Fade-in Effect
document.addEventListener('DOMContentLoaded', () => {
    const elements = document.querySelectorAll('.fade-in');
    elements.forEach((el) => {
        const observer = new IntersectionObserver((entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    el.classList.add('visible');
                }
            });
        });
        observer.observe(el);
    });
});
