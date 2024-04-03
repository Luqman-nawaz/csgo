// document.addEventListener('click', function (event) {
//     var dropdowns = document.querySelectorAll('.custom-select .select-items');
//     var target = event.target;

//     // Check if the clicked element is not part of any dropdown and is not the select-selected element
//     if (!target.classList.contains('select-selected')) {
//         dropdowns.forEach(function (dropdown) {
//             if (!dropdown.contains(target)) {
//                 dropdown.classList.remove('show');
//                 setTimeout(function () {
//                     dropdown.style.display = "none";
//                 }, 300);
//             }
//         });
//     }
// });

// function openSelect(dropdown) {
//     var x = dropdown.querySelector(".select-items");
//     var isOpen = x.classList.toggle("show");
//     if (!isOpen) {
//         setTimeout(function () {
//             x.style.display = "none";
//         }, 300);
//     } else {
//         x.style.display = "block";
//     }
// }


// function updateSelected(element) {
//     var select = element.closest('.custom-select').querySelector('select');
//     var selectedText = select.options[select.selectedIndex].text;
//     element.closest('.custom-select').querySelector('.select-selected').textContent = selectedText;
//     var x = element.closest('.select-items');
//     x.classList.remove("show");
//     setTimeout(function () {
//         x.style.display = "none";
//     }, 300);
// }



// function selectOption(option) {
//     var selectedOption = option.textContent;
//     var selectBox = option.closest('.custom-select');
//     var selectedSpan = selectBox.querySelector('.select-selected span');
//     selectedSpan.textContent = selectedOption;

//     // Get the value of the data-img attribute of the selected option
//     var imgName = option.getAttribute('data-img');
//     // Get the corresponding image element
//     var imgElement = selectBox.closest('.boosting-option-inner-container').querySelector('#rankImage1');
//     // Update the image source
//     imgElement.src = "./assets/images/rankImgs/" + imgName + ".png";
// }

// function selectOption2(option) {
//     var selectedOption = option.textContent;
//     var selectBox = option.closest('.custom-select');
//     var selectedSpan = selectBox.querySelector('.select-selected span');
//     selectedSpan.textContent = selectedOption;

//     // Get the value of the data-img attribute of the selected option
//     var imgName = option.getAttribute('data-img');
//     // Get the corresponding image element
//     var imgElement = selectBox.closest('.boosting-option-inner-container').querySelector('#rankImage2');
//     // Update the image source
//     imgElement.src = "./assets/images/rankImgs/" + imgName + ".png";
// }


document.addEventListener('click', function (event) {
    var dropdowns = document.querySelectorAll('.custom-select .select-items');
    var target = event.target;

    // Check if the clicked element is not part of any dropdown
    if (!target.classList.contains('select-items')) {
        dropdowns.forEach(function (dropdown) {
            if (!dropdown.contains(target)) {
                dropdown.classList.remove('show');
                setTimeout(function () {
                    dropdown.style.display = "none";
                }, 300);
            }
        });
    }
});

function updateSelected(element) {
    var selectedText = element.options[element.selectedIndex].text;
    var selectBox = element.closest('.custom-select');
    selectBox.querySelector('label').textContent = selectedText;

    // Get the value of the data-img attribute of the selected option
    var imgName = element.value;
    // Get the corresponding image element
    var imgElement = selectBox.closest('.boosting-option-inner-container').querySelector('#rankImage1');
    // Update the image source
    imgElement.src = "./assets/images/rankImgs/" + imgName + ".png";
}
