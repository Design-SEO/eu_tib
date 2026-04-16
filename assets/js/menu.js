document.addEventListener('DOMContentLoaded', () => {
    const menuBtn = document.querySelector('.header-btn-collapse-nav[data-bs-target=".header-nav-main nav"]');
    const menuElement = document.querySelector('nav.collapse');

    menuBtn.addEventListener('click', () => {
        menuElement.classList.toggle('show');
    })
})