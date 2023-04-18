import autocompleteuni  from './autocomplete.js'
import universities from './universities.mjs';
import changeTheme from './theme.js';

document.getElementById('themeToggle').addEventListener('click', () => {
    changeTheme();
});

$(document).ready(() => {
    try {
        const universitySelect = $("#university");
        universitySelect.on("click", () => {
            universities.forEach((item) => {
                const option = $("<option>");
                option.text(item);
                option.val(item);
                
                universitySelect.append(option);
            });
        });
    } catch(error) {
        //Error
    }
    
    $('#university-add-data').autocomplete({
        source: universities
    })
})
