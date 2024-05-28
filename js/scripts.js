document.addEventListener('DOMContentLoaded', function () {
    const mainNav = document.getElementById('mainNav');
    if (mainNav) {
        new bootstrap.Collapse(mainNav, {
            toggle: false
        });
    }

    const navbarToggler = document.querySelector('.navbar-toggler');
    navbarToggler.addEventListener('click', function () {
        const navbarResponsive = document.getElementById('navbarResponsive');
        new bootstrap.Collapse(navbarResponsive, {
            toggle: true
        });
    });

    const sliders = document.querySelectorAll('.project-image-slider');
    sliders.forEach(slider => {
        let isDown = false;
        let startX;
        let scrollLeft;

        slider.addEventListener('mousedown', (e) => {
            isDown = true;
            startX = e.pageX - slider.offsetLeft;
            scrollLeft = slider.scrollLeft;
        });

        slider.addEventListener('mouseleave', () => {
            isDown = false;
        });

        slider.addEventListener('mouseup', () => {
            isDown = false;
        });

        slider.addEventListener('mousemove', (e) => {
            if (!isDown) return;
            e.preventDefault();
            const x = e.pageX - slider.offsetLeft;
            const walk = (x - startX) * 3; // scroll-fast
            slider.scrollLeft = scrollLeft - walk;
        });
    });
});
document.addEventListener('DOMContentLoaded', function () {
    // Fade in the welcome message
    const welcomeMessage = document.getElementById('welcomeMessage');
    const nameSubtitle = document.getElementById('nameSubtitle');
    const discoverButton = document.querySelector('.btn-primary');

    setTimeout(() => {
        welcomeMessage.style.opacity = 1;
    }, 500); // Delay to start animation

    setTimeout(() => {
        nameSubtitle.style.transform = 'translateX(0)';
    }, 1000); // Delay to start sliding in the subtitle

    setTimeout(() => {
        discoverButton.style.opacity = 1;
    }, 1500); // Delay to fade in the button
});
