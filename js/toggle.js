document.getElementById('toggle-dark-mode').addEventListener('click', () => {
    const body = document.body;
    const icon = document.getElementById('dark-mode-icon');

    body.classList.toggle('dark-mode');
    body.classList.toggle('light-mode');

    // Toggle icon based on mode
    if (body.classList.contains('dark-mode')) {
        icon.setAttribute('src', 'assets/brightness-high-fill.svg'); // Sun icon
    } else {
        icon.setAttribute('src', 'assets/moon-stars-fill.svg'); // Moon icon
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
