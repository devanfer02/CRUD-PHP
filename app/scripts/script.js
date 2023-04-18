import { autocompleteuni, universities}  from './universities.js'
import changeTheme from './theme.js';

document.getElementById('themeToggle').addEventListener('click', () => {
    changeTheme();
});

const universitySelect = document.getElementById('university');

universities.forEach(function(item) {
    const option = document.createElement('option');
    option.text = item;
    option.value = item;
    universitySelect.appendChild(option);
})

$(document).ready(() => {
    autocompleteuni();
});