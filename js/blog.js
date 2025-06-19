// Initialize Wow.js for animations
new WOW().init();

// Blog item hover effects
document.addEventListener('DOMContentLoaded', function () {
    const blogItems = document.querySelectorAll('.blog-item');

    blogItems.forEach(item => {
        item.addEventListener('mouseenter', function () {
            this.querySelector('.blog-img img').style.transform = 'scale(1.1)';
            this.querySelector('.blog-date').style.bottom = '20px';
        });

        item.addEventListener('mouseleave', function () {
            this.querySelector('.blog-img img').style.transform = 'scale(1)';
            this.querySelector('.blog-date').style.bottom = '5px';
        });
    });
});