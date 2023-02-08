let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  slideIndex += n
  showSlides(slideIndex);
}

function showSlides(n) {
    let slides = document.getElementsByClassName("slide");
    if (n > slides.length) {slideIndex = 1}
    if (n < 1) {slideIndex = slides.length}
    for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
    }
    for (i = 0; i <= 3; i++) {
      console.log(n)
      if (n > slides.length) {n = 1}
      if (n < 1) {n = slides.length}
      slides[n-1].style.display = "block";
      console.log(slides[n-1])
      n++;
    }
}