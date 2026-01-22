console.log("Script.js LOADED correctly"); // GLOBAL DEBUG LOG

document.addEventListener('DOMContentLoaded', () => {

    // LOGIC 1: Hamburger Menu
    const hamburgerBtn = document.querySelector('.hamburger-btn');
    const navWrapper = document.querySelector('.nav-wrapper');

    if (hamburgerBtn && navWrapper) {
        hamburgerBtn.addEventListener('click', () => {
            hamburgerBtn.classList.toggle('active');
            navWrapper.classList.toggle('active');
        });
    }

    // LOGIC 2: Modals (Generic Helper)
    function setupModal(triggerId, modalId) {
        const link = document.getElementById(triggerId);
        const modal = document.getElementById(modalId);

        if (link && modal) {
            // Find the specific close button INSIDE this modal
            const closeBtn = modal.querySelector(".close-modal");

            link.addEventListener('click', (e) => {
                e.preventDefault();
                modal.style.display = "block";
                document.body.style.overflow = "hidden";
            });

            if (closeBtn) {
                closeBtn.addEventListener('click', () => {
                    modal.style.display = "none";
                    document.body.style.overflow = "auto";
                });
            }

            window.addEventListener('click', (event) => {
                if (event.target == modal) {
                    modal.style.display = "none";
                    document.body.style.overflow = "auto";
                }
            });
        }
    }

    // Initialize Modals
    setupModal("terms-link", "terms-modal");
    setupModal("privacy-link", "privacy-modal");
    setupModal("faq-link", "faq-modal");

    // LOGIC 4: FAQ Accordion Toggle
    const faqItems = document.querySelectorAll('.faq-item');
    if (faqItems) {
        faqItems.forEach(item => {
            const questionBtn = item.querySelector('.faq-question');
            questionBtn.addEventListener('click', () => {
                // Toggle current
                item.classList.toggle('active');
            });
        });
    }

    // LOGIC 5: Transition Video & Redirect
    const transitionOverlay = document.getElementById('transition-overlay');
    const transitionVideo = document.getElementById('transition-video');
    // Buttons that trigger the transition (Participa, Login, CTA)
    const triggerButtons = [
        document.querySelector('.cta-btn-parallelogram'), // Floating CTA
        document.querySelector('.login-btn-wrapper a'),   // Header Login
        // Add specific IDs/Selectors for "Participa" menu links if needed
    ];

    if (transitionOverlay && transitionVideo) {
        // Function to play transition
        function playTransition(e) {
            e.preventDefault();
            transitionOverlay.style.display = "flex";
            transitionVideo.play();
        }

        // Attach to buttons
        triggerButtons.forEach(btn => {
            if (btn) btn.addEventListener('click', playTransition);
        });

        // Redirect on End
        transitionVideo.addEventListener('ended', () => {
            window.location.href = 'login.php';
        });
    }

    // LOGIC 3: Curtain Reveal Animation (Scroll)
    const heroLeftCol = document.querySelector('.hero-column.left-column');
    const heroRightCol = document.querySelector('.hero-column.right-column');
    const videoText = document.querySelector('.video-text-group');

    console.log("Curtain Elements Check:", { heroLeftCol, heroRightCol }); // DEBUG

    if (heroLeftCol && heroRightCol) {
        window.addEventListener('scroll', () => {
            const scrollY = window.scrollY;
            const windowHeight = window.innerHeight;

            // ANIMATION TIMING
            const triggerPoint = windowHeight * 0.1;

            // Calculate Progress (0 to 1)
            let rawProgress = scrollY / triggerPoint;
            let progress = Math.max(0, Math.min(1, rawProgress));

            // Ease Out Quad
            const ease = 1 - Math.pow(1 - progress, 3);

            // Left: -100 to 0
            const leftOffset = -100 + (ease * 100);
            // Right: 100 to 0
            const rightOffset = 100 - (ease * 100);

            heroLeftCol.style.transform = `translateX(${leftOffset}%)`;
            heroRightCol.style.transform = `translateX(${rightOffset}%)`;

            // Fade text
            if (videoText) {
                videoText.style.opacity = `${1 - ease}`;
                videoText.style.transform = `translateY(-${40 + (ease * 20)}%)`;
            }
        });
    }
});

