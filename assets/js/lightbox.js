document.addEventListener('DOMContentLoaded', () => {
    const lightbox = document.getElementById('lightbox-modal');
    const lightboxImg = document.getElementById('lightbox-image');
    const closeBtn = document.getElementById('lightbox-close');
    const triggers = document.querySelectorAll('.lightbox-trigger');

    if (!lightbox || !lightboxImg || !closeBtn) return;

    function openLightbox(url) {
        lightboxImg.src = url;
        lightbox.classList.remove('hidden');
        document.body.classList.add('overflow-hidden'); // Prevent background scrolling
    }

    function closeLightbox() {
        lightbox.classList.add('hidden');
        document.body.classList.remove('overflow-hidden');
        setTimeout(() => {
            lightboxImg.src = ''; // Clear source prevents flashing old image on next open
        }, 300);
    }

    triggers.forEach(trigger => {
        trigger.addEventListener('click', (e) => {
            // If the trigger is a link, prevent navigation
            // If it's a div, the click bubbles up
            e.preventDefault(); 
            const url = trigger.getAttribute('data-full-url');
            if (url) {
                openLightbox(url);
            }
        });
    });

    closeBtn.addEventListener('click', closeLightbox);

    // Close on click outside image
    lightbox.addEventListener('click', (e) => {
        if (e.target === lightbox) {
            closeLightbox();
        }
    });

    // Close on Escape key
    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape' && !lightbox.classList.contains('hidden')) {
            closeLightbox();
        }
    });
});
