const login = document.getElementsByName('login')[0]
const password = document.getElementsByName('password')[0]
const error = document.querySelector('.error')
document.querySelector("button").addEventListener("click", event =>{
    alert(login.value)
    if (login.value === "" || password.value === "") {error.innerHTML = "Поля не заполнены"; event.preventDefault();}
})
const slider = document.querySelector('.slider');
const prevButton = document.querySelector('.prev-button');
const nextButton = document.querySelector('.next-button');
const slides = Array.from(slider.querySelectorAll('img'));
const slideCount = slides.length;
let slideIndex = 0;

prevButton.addEventListener('click', () => {
  slideIndex = (slideIndex - 1 + slideCount) % slideCount;
  slide();
});

nextButton.addEventListener('click', () => {
  slideIndex = (slideIndex + 1) % slideCount;
  slide();
});

const slide = () => {
  const imageWidth = slider.clientWidth;
  const slideOffset = -slideIndex * imageWidth;
  slider.style.transform = `translateX(${slideOffset}px)`;
}

window.addEventListener('load', () => {
  slide();
});