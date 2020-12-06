const header = document.querySelector('.header');
const headerNav = document.querySelector('.nav_header');
const menuBurger = document.querySelector('.menu_burger');
const traitAfter = document.querySelector('.trait::after');
const textBorder = document.querySelector('.p_border_nav');
const sections = document.querySelectorAll('section');
console.log(menuBurger)


menuBurger.addEventListener("mouseover", () => {
    textBorder.style.transform = 'rotate(0deg) translateY(-10px) translateX(-16px)';
    textBorder.style.transition = "0.1s";
    header.style.transform = 'translateX(-90%)';
    menuBurger.style.right = '3%';
})
menuBurger.addEventListener("mouseout", () => {
    textBorder.style.transform = 'rotate(-90deg) translateX(8px) translateY(-15px)';
    textBorder.style.right = "-70px";
   header.style.transform = 'translateX(-93%)';
    menuBurger.style.right = '0';
})

menuBurger.addEventListener("click", () => {
    textBorder.classList.toggle("change");
    menuBurger.classList.toggle("change");
    header.classList.toggle("change");
    sections.forEach(section => section.classList.toggle("change"))
    headerNav.classList.toggle("change");
})

window.addEventListener('scroll', () => {
    let scrollValue = (window.innerHeight + window.scrollY) / document.body.offsetHeight;

    if(scrollValue > 0.28){
        textBorder.style.color = 'black';
    }else{
        textBorder.style.color = 'white';

    }
})