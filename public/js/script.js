



function Menu(e) {
    let list = document.querySelector('ul');
    
    e.name === 'menu' ? (e.name = "close",list.classList.add('top-[80px]') ,list.classList.add('opacity-100') ) :( e.name = "menu" ,list.classList.remove('top-[80px]'),list.classList.remove('opacity-100'))
}

var slideIndex =1;
showSlides(slideIndex);

function plusSlides(n) {
    showSlides(slideIndex += n);
}

function currentSlide(n) {
    showSlides(slideIndex = n);
}

function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("mySlides")
    var dots = document.getElementsByClassName("dot");
    if (n > slides.length) { slideIndex = 1}
    if (n < 1) {slideIndex = slides.length}
    for ( i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active","");
    }
    slides[slideIndex - 1].style.display = "block";
    dots[slideIndex - 1].className += "active"
}

//auto slide

var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none"
        }
        slideIndex++;
        if (slideIndex > slides.length) {
            slideIndex = 1 
        }
        slides[slideIndex -1].style.display = "block";
        setTimeout(showSlides, 5000);
    }

