let burger = document.getElementById('burger');
let categories = document.getElementById('nav2');

burger.addEventListener('click', function(){
    categories.classList.toggle("show");
});