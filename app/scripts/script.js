import autocompleteuni  from './universities.js'
import changeTheme from './theme.js';

document.getElementById('themeToggle').addEventListener('click', () => {
    changeTheme();
});

$(document).ready(() => {
    autocompleteuni();
})