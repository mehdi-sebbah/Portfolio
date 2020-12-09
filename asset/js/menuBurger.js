const header = document.querySelector('.header');
const headerMobile = document.querySelector('.header_mobile');
const headerNav = document.querySelector('.nav_header');
const linkHeaderNav = document.querySelectorAll('.nav_header a, .nav_header_mobile a');
const menuBurger = document.querySelector('.menu_burger');
const menuBurgerMobile = document.querySelector('.menu_burger_mobile');
const traitAfter = document.querySelector('.trait::after');
const textBorder = document.querySelector('.p_border_nav');
const sections = document.querySelectorAll('section');
const borderRight = document.querySelector('.border_right');
const borderTop = document.querySelector('.border_top');
const borderBottom = document.querySelector('.border_bottom');
const nameHeader = document.querySelector('.name_header')

menuBurger.addEventListener("mouseover", () => {
    textBorder.style.transform = 'rotate(0deg) translateY(-10px) translateX(-16px)';
    textBorder.style.transition = "0.1s";
    header.style.left = '60px';
    menuBurger.style.right = '20px';

})
menuBurger.addEventListener("mouseout", () => {
    textBorder.style.transform = 'rotate(-90deg) translateX(8px) translateY(-15px)';
    textBorder.style.right = "-70px";
    header.style.left = '40px';
    menuBurger.style.right = '0';
})
menuBurgerMobile.addEventListener("mouseover", () => {


})
menuBurgerMobile.addEventListener("mouseout", () => {

})


menuBurger.addEventListener("click", () => {
    textBorder.classList.toggle("change");
    menuBurger.classList.toggle("change");
    header.classList.toggle("change");
    sections.forEach(section => section.classList.toggle("change"))
    headerNav.classList.toggle("change");
    borderRight.classList.toggle("change");
    borderTop.classList.toggle("change");
    borderBottom.classList.toggle("change");
})

linkHeaderNav.forEach(link => link.addEventListener("click", () => {
    textBorder.classList.remove("change");
    menuBurger.classList.remove("change");
    header.classList.remove("change");
    sections.forEach(section => section.classList.remove("change"))
    headerNav.classList.remove("change");
    borderRight.classList.remove("change");
    borderTop.classList.remove("change");
    borderBottom.classList.remove("change");
}))


sections.forEach(section => section.addEventListener("click", () => {
    textBorder.classList.remove("change");
    menuBurger.classList.remove("change");
    header.classList.remove("change");
    sections.forEach(section => section.classList.remove("change"))
    headerNav.classList.remove("change");
    borderRight.classList.remove("change");
    borderTop.classList.remove("change");
    borderBottom.classList.remove("change");
}))

menuBurgerMobile.addEventListener("click", () => {
    headerMobile.classList.toggle("change");
    menuBurgerMobile.classList.toggle("change");
    nameHeader.classList.toggle("change");
})

linkHeaderNav.forEach(link => link.addEventListener("click", () => {
    headerMobile.classList.remove("change");
    menuBurgerMobile.classList.remove("change");
    nameHeader.classList.remove("change");
}))

window.addEventListener('scroll', () => {
    let scrollValue = (window.innerHeight + window.scrollY) / document.body.offsetHeight;

    if(scrollValue > 0.28){
        textBorder.style.color = 'black';
    }else{
        textBorder.style.color = 'white';

    }
})