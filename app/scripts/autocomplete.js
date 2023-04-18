import universities from "./universities.mjs";

const autocompleteuni = () => {
    $('#university-add-data').autocomplete({
        source: universities
    })
}

export default autocompleteuni;