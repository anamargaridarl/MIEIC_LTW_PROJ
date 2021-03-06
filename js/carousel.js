let slideIndex = 1;

function plusSlides(n) {
    showSlides(slideIndex += n);
}

function showSlides(n) {
    let i;
    const slides = document.getElementsByClassName('mySlides');
    if (n > slides.length) {
        slideIndex = 1;
    }
    if (n < 1) {
        slideIndex = slides.length;
    }
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = 'none';
    }
    slides[slideIndex - 1].style.display = 'block';
}

function update(n) {
    plusSlides(n);
}

document.querySelector('.prev').addEventListener('click', () => update(-1));
document.querySelector('.next').addEventListener('click', () => update(1));

showSlides(slideIndex);