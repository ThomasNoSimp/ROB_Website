document.addEventListener('DOMContentLoaded', () => {
    const themeChanger = document.querySelector('.theme-changer');
    const themeChangerIcon = document.querySelector('.theme-changer-icon');

    themeChanger.addEventListener('click', () => {
        if (themeChangerIcon.className.includes('fa-sun')) {
            themeChangerIcon.classList.remove('fa-sun');
            themeChangerIcon.classList.add('fa-moon');
            document.body.classList.remove('bg-dark');
            document.body.classList.add('bg-light');
        }
        else if (themeChangerIcon.className.includes('fa-moon')) {
            themeChangerIcon.classList.remove('fa-moon');
            themeChangerIcon.classList.add('fa-sun');
            document.body.classList.remove('bg-light');
            document.body.classList.add('bg-dark');
        }
    })
})