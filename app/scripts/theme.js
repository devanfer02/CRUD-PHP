const BASEURL = 'http://localhost/basics/MVC-PHP/public';

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