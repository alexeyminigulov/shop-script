(function ($) {

    'use strict';

    var addButton = document.querySelector('.add-dynamic-field-btn'),
        originInputTpl = addButton.parentNode.querySelector(".main-select-input").cloneNode(true),
        formFieldGroup = addButton.parentNode,
        currentNumberElement = 0;


    addButton.addEventListener("click", function (e) {

        var inputElement = createSelect();

        var divInput = createDiv({"class": "col-lg-10"});
        divInput.appendChild(inputElement);


        var removeBtn = createRemoveBtn();
        var divBtn = createDiv({"class": "col-lg-2"});
        divBtn.appendChild(removeBtn);


        var divMain = createDiv({"class": "row dynamic-row", "style": "margin-top: 2px"});
        divMain.appendChild(divInput);
        divMain.appendChild(divBtn);

        addButton.parentNode.insertBefore(divMain, addButton);

        function createSelect() {

            var inputElement = originInputTpl.cloneNode(true);
            currentNumberElement++;
            inputElement.setAttribute("id", inputElement.getAttribute("data-id") + "-" + currentNumberElement);
            inputElement.setAttribute("name", inputElement.getAttribute("data-name") + "[" + currentNumberElement + "]");
            inputElement.classList.remove("main-select-input");
            inputElement.value = 1;

            return inputElement;
        }

        function createRemoveBtn() {

            var removeBtn = document.createElement("button");
            removeBtn.textContent = "x";
            removeBtn.setAttribute("class", "remove-btn btn btn-danger");

            return removeBtn;
        }

        function createDiv(objAttributes) {

            var div = document.createElement("div");
            for (var attribute in objAttributes) {
                div.setAttribute(attribute, objAttributes[attribute]);
            }
            return div;
        }
    });


    formFieldGroup.addEventListener("click", function (e) {

        var target = e.target;
        if (!target.classList.contains("remove-btn")) {
            return;
        }
        formFieldGroup.removeChild(target.closest(".dynamic-row"));
    });

})(window.jQuery);