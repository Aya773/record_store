const containers = document.querySelectorAll(".slider");
let index = 0;

function showSlides() {
    containers.forEach(container => {
        const slides = container.querySelectorAll("img");
        
       
        slides.forEach(slide => slide.style.display = "none");
        
        
        if (slides[index % slides.length]) {
            slides[index % slides.length].style.display = "block";
        }
    });
}

function nextSlide() {
    index++;
   
    const totalSlides = containers[0].querySelectorAll("img").length;
    if (index >= totalSlides) {
        index = 0;
    }
    showSlides();
}


showSlides();
setInterval(nextSlide, 2000);