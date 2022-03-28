const sideMenu = document.querySelector("aside");
const menuBtn = document.querySelector("#menu-btn");
const closeBtn = document.querySelector("#close-btn");
const themeToggler = document.querySelector(".theme-toggler")

// show sidebar
menuBtn.addEventListener('click', () => {
    sideMenu.style.display = 'block'; 
    sideMenu.style.animationName = 'showMenu';   
})

// close sidebar
closeBtn.addEventListener('click', () => {
    // sideMenu.style.display = 'none';
    sideMenu.style.animationName = 'hideMenu';   
})

// change theme
themeToggler.addEventListener('click', () => {
    document.body.classList.toggle('dark-theme-variables');
    themeToggler.querySelector('span:nth-child(1)').classList.toggle('active');
    themeToggler.querySelector('span:nth-child(2)').classList.toggle('active');
})