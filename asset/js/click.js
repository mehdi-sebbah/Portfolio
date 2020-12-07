const arrow_up = document.querySelector('.arrow_up');

//EVENT ARROW UP FOR SCROLL AT THE HOME PAGE

arrow_up.addEventListener('click', () => {
    window.scrollTo({
        top: 0,
        left:0,
        behavior: "smooth",
    })
})
