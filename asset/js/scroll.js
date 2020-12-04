const titleAbout = document.querySelector(".about_me_title");
const textAbout = document.querySelector(".about_me_text");
const contentVoid = document.querySelector(".content_void");
const bg = document.querySelector(".home");

window.addEventListener('scroll', () => {

    let scrollValue = (window.innerHeight + window.scrollY) / document.body.offsetHeight;
    console.log(scrollValue);

   //bg.style.backgroundSize = 100 +window.pageYOffset/12 +'%';
    bg.style.opacity = 1 - +window.pageYOffset/900;
    
    if(scrollValue > 0.41){
        textAbout.style.opacity ='1';
        textAbout.style.transform = 'none';
    }
})