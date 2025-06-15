let sidebarLinks = document.querySelectorAll('sidebar-link');
sidebarLinks.forEach((link) => {
    link.addEventListener('click', function () {
        this.classList.toggle('active');
    })

});
document.addEventListener('DOMContentLoaded', function() {
    var elements = document.querySelectorAll('.nav-icon');

    elements.forEach((ele) => {
    ele.addEventListener('click', function (event) {
        event.preventDefault();
        event.stopPropagation()
        var dropdown = tjis.closest('.dropdown').querySelector('.dropdown-menu');
        document.querySelectorAll('dropdown-menu').forEach((menu) => {
            if (menu != dropdown) {
                menu.classList('show');
            }
        });
        dropdown.classList.toggle('show');
    })
});

document.addEventListener('click', function () {
    this.documentElement.querySelectorAll('dropdown-menu').forEach((menu) =>{
            menu.classList.remove('show');
    })
});
});







//  document.addEventListener('DOMContentLoaded', function () {
//         const toggleBtn = document.getElementById('toggleSidebar');
//         const sidebar = document.getElementById('sidebar');
//         const content = document.getElementById('content');

//         toggleBtn.addEventListener('click', () => {
//             sidebar.classList.toggle('collapsed');
//             content.classList.toggle('full-width');
//             content.classList.toggle('with-sidebar');
//         });
//     });