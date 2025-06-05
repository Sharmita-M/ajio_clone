let sidebarLinks = document.querySelectorAll('sidebar-link')

sidebarLinks.forEach((link) => {
    link.addEventListener('click', function(){
        this.classList.toggle('active');
    })

});