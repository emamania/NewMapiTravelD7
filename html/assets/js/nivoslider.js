/* SLIDER => https://www.youtube.com/watch?v=TnKbhklesJY */

let emaSlider = document.querySelector(".emaslider");
let emaSliderItem = document.querySelectorAll(".emaslider-items");
let contador = 1;

let width = emaSliderItem[0].clientWidth;
let intervalo = 3000;

window.addEventListener("resize", function(){
    width = emaSliderItem[0].clientWidth;
});

setInterval(function(){
    emasliderS();
}, intervalo);

function emasliderS() {
    emaSlider.style.transform = "translate("+( - width * contador)+"px)";
    //emaSlider.style.transition = "transform .5s";
    contador++;
    if(contador == emaSliderItem.length) {
        setTimeout(function(){
            emaSlider.style.transform = "translate(0px)";
            //emaSlider.style.transition = "transform .3s";
            contador = 1;
        },1500);

    }
}
// Next/previous controls
function emaplusSlides(n) {
    emasliderS();
};

/** ------------------
 *  
 * Slider con botones
 * 
 * ===================
*/

var slides = document.getElementsByClassName("mySlides");
var slideIndex = 1;

showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
    showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
    showSlides(slideIndex = n);
}


function showSlides(n) {
    var i;
    //var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    if (n > slides.length) {slideIndex = 1} 
    if (n < 1) {slideIndex = slides.length}
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none"; 
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block"; 
    dots[slideIndex-1].className += " active";
}