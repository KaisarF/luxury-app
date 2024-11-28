const navbarMenu = document.querySelector('.navbar-menu');

document.querySelector('#hamburger-menu').onclick = (e) => {
    navbarMenu.classList.toggle('active');
    e.preventDefault();
}

const hamburgerMenu = document.querySelector('#hamburger-menu')

document.addEventListener('click',function(e){
    if(!hamburgerMenu.contains(e.target) && !navbarMenu.contains(e.target))
        {
            navbarMenu.classList.remove('active');
        }

});