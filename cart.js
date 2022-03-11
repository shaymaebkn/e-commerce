let section = document.getElementById('section1');
let next = document.getElementById('next_button');

next.addEventListener('click', function(){
    section.innerHTML = `
        <div class="cart_list">
            <li>Cart</li>
            <li>Details</li>
            <li>Confirmation</li>
        </div>
        <div class="cart_title">
            <h1>Details :</h1>
        </div>
        <div class="container">
            <div class="pay_with">
                <inpu type="radio" checked>
            </div>
        </div>
    `;
});