let section = document.getElementById('section1');
let next = document.getElementById('next_button');

document.getElementsByName('test').addEventListener

next.addEventListener('click', function(){
    section.innerHTML = `
        <div class="cart_list">
            <li>Cart</li>
            <li>Details</li>
            <li>Confirmation</li>
        </div>
        <div class="cart_title">
            <h1>Confirmation :</h1>
        </div>
        <div class="container">
            <div class="subtotal">
                <p>Subtotal</p>
                <p></p>
                <p></p>
            </div>
        </div>
    `;
});
