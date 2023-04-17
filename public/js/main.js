const profilMenu = document.querySelector('.profil')
const profil =  document.querySelector('.prBtn')

profil.addEventListener('click', ()=>{
    profilMenu.classList.toggle('hidden')
    profil.children[2].classList.toggle('fa-angle-down')
    profil.children[2].classList.toggle('fa-angle-up')

})