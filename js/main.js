let dropdown = document.querySelectorAll('.a-advice__dropdown');
let hideText = document.querySelectorAll('.a-advice__hide-container');

dropdown.forEach(function (item) { 
    item.addEventListener('click', function () {  
        hideText.classList.toggle('display-none');
    })
 })