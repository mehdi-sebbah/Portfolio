const form = document.querySelector('.contact_form');
//MODAL
const modalContainer = document.querySelector('#modal_container');
const modal = document.querySelector('.modal');
const textModal = document.querySelector('#text_modal');
const titleModal = document.querySelector('#title_modal');
const closeModal = document.querySelector('#close_modal');

form.addEventListener('submit', (e) => {
    e.preventDefault();
    let formData = new FormData(form);

    fetch('contact.php', {
        method: "POST",
        body: formData,
    })
    .then(response => response.json())
    .then(data => {
        titleModal.innerHTML = data.title;
        textModal.innerHTML = data.message;
        modal.classList.add('open')
        modalContainer.classList.add('open');
    })
})

closeModal.addEventListener('click', () => {
    modalContainer.classList.remove('open');
})
