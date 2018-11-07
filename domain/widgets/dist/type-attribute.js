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
            formGroup = null,
            divInputField = null;

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
                if (formGroup = parent.querySelector('.form-dynamic-field')) {
                    if (formGroup.lastChild.tagName == "TEXTAREA") {
                        formGroup.parentNode.removeChild(formGroup);
                    } else {
                        break;
                    }
                }
                divInputField = creteFormGroup(unitInput, 'Ед. изм.');
                parent.appendChild(divInputField);
                break;
            case TYPE_RADIO_BUTTON:
            case TYPE_CHECKBOX:
                if (formGroup = parent.querySelector('.form-dynamic-field')) {
                    if (formGroup.lastChild.tagName == "INPUT") {
                        formGroup.parentNode.removeChild(formGroup);
                    } else {
                        break;
                    }
                }
                divInputField = creteFormGroup(textarea);
                parent.appendChild(divInputField);
                break;
            default:
                if (formGroup = parent.querySelector('.form-dynamic-field')) {
                    formGroup.parentNode.removeChild(formGroup);
                }
        }


    });

    function creteFormGroup(input, text) {

        var divInputField = document.createElement('div'),
            label = document.createElement('label');

        divInputField.setAttribute('class', 'form-dynamic-field');

        if ( text !== undefined ) {

            label.textContent = text;
            divInputField.appendChild(label);
        }
        divInputField.appendChild(input);

        return divInputField;
    }

})(window.jQuery);