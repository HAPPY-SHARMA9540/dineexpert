// ---------------Hero Banner---------------
let index = 0;
const slides = document.querySelector(".slides");
const totalSlides = document.querySelectorAll(".slide").length;

document.querySelector(".next").addEventListener("click", () => {
    index++;
    if (index >= totalSlides) index = 0;
    updateSlide();
});

document.querySelector(".prev").addEventListener("click", () => {
    index--;
    if (index < 0) index = totalSlides - 1;
    updateSlide();
});

function updateSlide() {
    slides.style.transform = `translateX(-${index * 100}%)`;
}

// Auto Slide
setInterval(() => {
    index++;
    if (index >= totalSlides) index = 0;
    updateSlide();
}, 4000);





// document.querySelectorAll('a[href^="#"]').forEach(anchor => {
//     anchor.addEventListener('click', function(e) {
//         e.preventDefault();

//         const target = document.querySelector(this.getAttribute('href'));
//         target.scrollIntoView({
//             behavior: 'smooth',
//             block: 'center'  
//         });
//     });
// });

