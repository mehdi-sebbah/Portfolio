const titleAbout = document.querySelector(".about_me_title");
const textAbout = document.querySelector(".about_me_text");
const contentVoid = document.querySelector(".content_void");
const bg = document.querySelector(".home");
const skills = document.querySelectorAll(".skill");


window.addEventListener('scroll', () => {

    let scrollValue = (window.innerHeight + window.scrollY) / document.body.offsetHeight;
    
    console.log(scrollValue);

    bg.style.opacity = 1 - +window.pageYOffset/900;
    
    if(scrollValue > 0.31){
        textAbout.style.opacity ='1';
        textAbout.style.transform = 'none';
    }

    if(scrollValue > 0.48){
        for(let skill of skills){
            skill.style.opacity = '1';
            skill.style.transform = 'none';
        }
    }

    window.addEventListener('scroll',() => {
        if(scrollValue < 0.36){
            arrow_up.style.opacity ='0';
            arrow_up.style.transition = '0.5s'
        }else if(scrollValue > 0.36){
            arrow_up.style.opacity = '1';
            arrow_up.style.transition = '0.5s'
        }
    })
})