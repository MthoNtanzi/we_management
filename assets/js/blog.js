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

document.addEventListener('DOMContentLoaded', function() {
    // Share buttons functionality
    const shareButtons = document.querySelectorAll('.blog-post-share a');
    shareButtons.forEach(button => {
        button.addEventListener('click', function(e) {
            e.preventDefault();
            const url = this.getAttribute('data-url');
            const title = this.getAttribute('data-title');
            const media = this.getAttribute('data-media') || '';

            if (this.classList.contains('facebook')) {
                window.open(`https://www.facebook.com/sharer/sharer.php?u=${encodeURIComponent(url)}`, 'facebook-share-dialog', 'width=626,height=436');
            } else if (this.classList.contains('twitter')) {
                window.open(`https://twitter.com/intent/tweet?text=${encodeURIComponent(title)}&url=${encodeURIComponent(url)}`, 'twitter-share-dialog', 'width=626,height=436');
            } else if (this.classList.contains('linkedin')) {
                window.open(`https://www.linkedin.com/shareArticle?mini=true&url=${encodeURIComponent(url)}&title=${encodeURIComponent(title)}`, 'linkedin-share-dialog', 'width=626,height=436');
            } else if (this.classList.contains('pinterest')) {
                window.open(`https://pinterest.com/pin/create/button/?url=${encodeURIComponent(url)}&media=${encodeURIComponent(media)}&description=${encodeURIComponent(title)}`, 'pinterest-share-dialog', 'width=626,height=436');
            }
        });
    });
});
