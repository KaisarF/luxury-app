<nav class="navbar" >
        
    <a href="#" class="navbar-logo">
        <img src="image/logo.svg" >
    </a>
    
    <div class="navbar-menu">  
        <a href="/" class="{{ Request::is('/') ? 'glow' : '' }}" >beranda</a>
        <a href="/about-us" class="{{ Request::is('about-us') ? 'glow' : ''}}"  >mengapa kami?</a>
        <a href="#" >tentang kami</a>
        <a href="#" >carakerja</a>
        <a href="#" >FAQ</a>
        
    </div>
    <div class="navbar-extra">
        <a href="#" id="hamburger-menu" > <img src="image/hamburger-menu.svg" alt=""> </a>
    </div>
</nav>
@push('script')
    
<script>
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
</script>

@endpush