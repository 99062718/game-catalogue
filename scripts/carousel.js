carousel = document.getElementById("carouselImgs");
let slideIndex = 0;
plusSlides(1, 4);

function plusSlides(n, amount = 1) {
  if (amount == 1 && n == 1) {carousel.firstElementChild.remove();}
  if (amount == 1 && n == -1) {carousel.lastElementChild.remove();}

  for (i = 0; i < amount; i++) {
    if (slideIndex == imgList.length) {slideIndex = 0}
    if (slideIndex < 0) {slideIndex = imgList.length - 1}
    showSlides(n);
    slideIndex += n
  }
}

function showSlides(n) {
  divElem = document.createElement("div");
  divElem.classList.add("slide");
  imgElem = document.createElement("img");
  divElem.appendChild(imgElem);

  if (n == 1) {carousel.appendChild(divElem);}
  if (n == -1) {carousel.insertBefore(divElem, carousel.firstElementChild);}

  imgElem.src = "img/" + gameId + "/carousel/" + imgList[slideIndex];
}