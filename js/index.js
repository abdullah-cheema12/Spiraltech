// HOW WE START YOUR WORK NEXT BUTTON

const items = document.querySelectorAll('.carousel-item');

document.querySelectorAll('.next-slide').forEach((button, index) => {
    button.addEventListener('click', () => {

        items[index].classList.remove('active');

        let nextIndex = (index + 1) % items.length;

        items[nextIndex].classList.add('active');
    });
});

// APPLY THE ACTIVE CLASS TO THE PAGE YOU ARE AT

document.addEventListener("DOMContentLoaded", function() {
    const navLinks = document.querySelectorAll('.navbar-nav .nav-item .nav-link');
    const currentUrl = window.location.href;

    navLinks.forEach(link => {
        if (link.href === currentUrl) {
            link.parentElement.classList.add('active');
        }
    });
});


// RESIZE THE PADDING OF HOMEPAGE

document.addEventListener("DOMContentLoaded", function() {
    function adjustContentPadding() {
        const navbar = document.querySelector('nav'); // Select the navbar
        const mainContent = document.querySelector('.home-page'); // Select the main content section
        if (navbar && mainContent) {
            const navbarHeight = navbar.offsetHeight;
            mainContent.style.paddingTop = `${navbarHeight}px !important`; // Add the padding with important flag
        }
    }

    // Run the function on load and on window resize
    adjustContentPadding();
    window.addEventListener('resize', adjustContentPadding);
});