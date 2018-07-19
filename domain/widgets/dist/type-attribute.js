(function ($) {

    'use strict';

    var TYPE_INTEGER = "integer",
        TYPE_NUMBER = "double",
        TYPE_RADIO_BUTTON = "radiobutton",
        TYPE_CHECKBOX = "checkbox";



    var typeAttribute = document.querySelector(".type-attribute"),
        parent = typeAttribute.parentNode,
        nameForm = typeAttribute.getAttribute('data-name-form'),
        nameField = typeAttribute.getAttribute('data-type-name-field');



    typeAttribute.addEventListener("change", function (e) {

        var unitInput = document.createElement('input'),
            textarea = document.createElement('textarea'),
            input = null;

        unitInput.setAttribute('type', 'text');
        unitInput.setAttribute('class', 'form-control type-attribute-data');
        unitInput.setAttribute('aria-required', 'true');
        unitInput.setAttribute('name', nameForm +'['+ nameField +']');

        textarea.setAttribute('rows', '7');
        textarea.setAttribute('class', 'form-control type-attribute-data');
        textarea.setAttribute('aria-required', 'true');
        textarea.setAttribute('name', nameForm +'['+ nameField +']');


        switch (typeAttribute.value) {
            case TYPE_INTEGER:
            case TYPE_NUMBER:
                if (input = parent.querySelector('.type-attribute-data')) {
                    if (input.tagName == "TEXTAREA") {
                        input.parentNode.removeChild(input);
                    } else {
                        break;
                    }
                }
                parent.appendChild(unitInput);
                break;
            case TYPE_RADIO_BUTTON:
            case TYPE_CHECKBOX:
                if (input = parent.querySelector('.type-attribute-data')) {
                    if (input.tagName == "INPUT") {
                        input.parentNode.removeChild(input);
                    } else {
                        break;
                    }
                }
                parent.appendChild(textarea);
                break;
            default:
                if (input = parent.querySelector('.type-attribute-data')) {
                    input.parentNode.removeChild(input);
                }
        }


    });

})(window.jQuery);