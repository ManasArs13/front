import js_beautify, { js } from "js-beautify";

document.addEventListener('DOMContentLoaded', function () {
    const preElement = document.getElementById('json-data');

    if (preElement) {
        const inputElement = document.getElementById('json_input');

        const options = {
            indent_size: 2,
            space_in_empty_paren: true
        }

        const arr = preElement.innerHTML;
        preElement.innerHTML = js_beautify(arr, options);
        inputElement.innerHTML = js_beautify(arr, options);
    }
});
