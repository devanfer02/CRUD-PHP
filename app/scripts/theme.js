const BASEURL = 'http://localhost/basics/MVC-PHP/public';

function setThemeMode(mode) {
    localStorage.setItem('themeMode', mode);
}
  
  // Retrieve the theme mode from localStorage
function getThemeMode() {
    return localStorage.getItem('themeMode');
}

const changeTheme = () => {
    const html = document.querySelector('html');
    const img = document.getElementById('themeToggle');

    if(html.getAttribute('data-bs-theme') === 'dark')
    {
        html.setAttribute('data-bs-theme','light');
        img.setAttribute('src', BASEURL+'/icons/icons8-sun.svg');

    } else 
    {
        html.setAttribute('data-bs-theme','dark'); 
        img.setAttribute('src', BASEURL+'/icons/icons8-dark-mode-24.png');
    }
}

export default changeTheme;