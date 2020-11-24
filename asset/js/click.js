const textSkills = document.querySelector(".text_skills");
const btnSkill = document.querySelector("#btn_skills");
const skills = document.querySelectorAll(".skills ul li");
function changeSkills(skill){
    skill.style.opacity = '1';
    skill.style.transform = 'none';
}

btnSkill.addEventListener('click', (e) => {
    textSkills.style.opacity = '1';
    textSkills.style.transform = 'none';
    skills.forEach(changeSkills);
})