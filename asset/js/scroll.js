const titleAbout = document.querySelector(".about_me_title");
const textAbout = document.querySelector(".about_me_text");
const contentVoid = document.querySelector(".content_void");
console.log(contentVoid)

window.addEventListener('scroll', () => {

    let scrollValue = (window.innerHeight + window.scrollY) / document.body.offsetHeight;

    console.log(scrollValue);

    if(scrollValue > 0.45){
        titleAbout.style.opacity ='1';
        titleAbout.style.transform = 'none';

    }
    if(scrollValue > 0.51){
        textAbout.style.opacity ='1';
        textAbout.style.transform = 'none';
    }
    if(scrollValue > 0.45){
        contentVoid.style.opacity = '1';
        contentVoid.style.transform = 'none';
    }
})