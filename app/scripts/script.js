import autocompleteuni  from './autocomplete.js'
import universities from './universities.mjs';
import changeTheme from './theme.js';

document.getElementById('themeToggle').addEventListener('click', () => {
    changeTheme();
});

$(document).ready(() => {
    try {
        const universitySelect = $("#university");
        const options = universities.map(item => `<option value="${item}">${item}</option>`).join('');
        universitySelect.append(options);
    } catch(error) {
        console.log({error});
    }
    
    $('#university-add-data').autocomplete({
        source: universities
    })
})
