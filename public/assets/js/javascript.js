document.addEventListener('DOMContentLoaded', () => {
    const textSection = document.querySelector('.text-section');
    const images = document.querySelectorAll('.images-section img');

    const observerOptions = {
        threshold: 0.1
    };

    const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                textSection.style.animationPlayState = 'running';
                images.forEach(img => {
                    img.style.animationPlayState = 'running';
                });
                observer.unobserve(entry.target);
            }
        });
    }, observerOptions);

    observer.observe(textSection);

    images.forEach(img => {
        img.style.animationPlayState = 'paused';
    });
    textSection.style.animationPlayState = 'paused';
});
