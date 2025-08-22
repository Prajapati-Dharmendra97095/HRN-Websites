// Vanilla JavaScript for the Animated Heading
document.addEventListener('DOMContentLoaded', () => {
    const animatedHeadings = document.querySelectorAll('.animated-text');
    let delay = 0;

    animatedHeadings.forEach(heading => {
        const text = heading.textContent.trim();
        heading.textContent = ''; // Clear the text to replace with animated letters

        const letters = text.split('');
        
        letters.forEach((letter, index) => {
            const span = document.createElement('span');
            span.textContent = letter === ' ' ? '\u00A0' : letter;
            span.classList.add('letter-anim');
            span.style.animationDelay = `${delay + index * 70}ms`;
            heading.appendChild(span);
        });

        // Add a bit more delay for the next heading
        delay += letters.length * 50 ; // Original delay logic
    });
    

    // Custom CSS for the letter animation
//     const styleSheet = document.createElement("style");
//     styleSheet.type = "text/css";
//     styleSheet.innerText = `
//         .letter-anim {
//             display: inline-block;
//             opacity: 0;
//             animation: letter-in 0.5s forwards;
//             position: relative;
//         }

//         @keyframes letter-in {
//             0% {
//                 opacity: 0;
//                 transform: translateY(20px) scale(0.8);
//             }
//             100% {
//                 opacity: 1;
//                 transform: translateY(0) scale(1);
//             }
//         }
//     `;
//     document.head.appendChild(styleSheet);
});

// Vanilla JavaScript for the Image Zoom effect
// document.addEventListener('DOMContentLoaded', () => {
//     const image = document.querySelector('.hero-image');
//     if (!image) return;

//     let scale = 1;
//     let direction = 1;
//     const minScale = 1;
//     const maxScale = 1.1;
//     const duration = 20000; // 20 seconds, as in the original component
//     const step = (maxScale - minScale) / (duration / 16); // Approximately 60 frames per second

//     function animate() {
//         if (direction === 1) {
//             scale += step;
//             if (scale >= maxScale) {
//                 scale = maxScale;
//                 direction = -1;
//             }
//         } else {
//             scale -= step;
//             if (scale <= minScale) {
//                 scale = minScale;
//                 direction = 1;
//             }
//         }
//         image.style.transform = `scale(${scale})`;
//         requestAnimationFrame(animate);
//     }

//     animate();
// });