let carts = document.querySelectorAll('.add-cart');

let products = {
            name: document.querySelector('.name').textContent,
            price: document.querySelector('.price').textContent,
            description: document.querySelector('.description').textContent,
            inCart: 0
        }

// function getProductInfo(product){
//     let productInfo = {
//         name: product.querySelector('.name').textContent,
//         price: product.querySelector('.price').textContent,
//         description: product.querySelector('.description').textContent,
//         inCart: 0
//     }
// }

// let products = [
//     {
//         name: 'Wedding',
//         price: 458,
//         description: 'Wedding for 50 people at the beach',
//         inCart: 0
//     },
//     {
//         name: 'Birthday',
//         price: 1763,
//         description: 'Birthday party for kids with 100 people',
//         inCart: 0
//     },
//     {
//         name: 'Dinner',
//         price: 100,
//         description: 'Dinner for 2',
//         inCart: 0
//     },
//     {
//         name: 'Training',
//         price: 9587,
//         description: 'Training for corporation',
//         inCart: 0
//     },
//     {
//         name: 'Dinner for one Person',
//         price: 58,
//         description: 'Home Alone',
//         inCart: 0
//     }
// ]

for (let i = 0; i < carts.length; i++) {
    carts[i].addEventListener('click', () => {
        cartNumbers(products[i]);
    })
}


function onLoadCartNumbers() {
    let productNumbers = localStorage.getItem('cartNumbers');

    if (productNumbers) {
        document.querySelector('.cart span').textContent = productNumbers;

    }

}


// saving
function cartNumbers(products) {
    productNumbers = localStorage.getItem('cartNumbers');

    productNumbers = parseInt(productNumbers);

    if (productNumbers) {
        localStorage.setItem('cartNumbers', productNumbers + 1);
        document.querySelector('.cart span').textContent = productNumbers + 1;

    } else {
        localStorage.setItem('cartNumbers', 1);
        document.querySelector('.cart span').textContent = 1;
    }
    setItems(products);
}

function setItems(products) {
    let cartItems = localStorage.getItem('productsInCart');
    cartItems = JSON.parse(cartItems);

    products.inCart = 1;


if (cartItems != null) {

if(cartItems[product.name] == undefined){
cartItems = {
...cartItems,
[products.name]: products
}
}
cartItems[products.name].inCart += 1;
} else {
products.inCart = 1;
cartItems = {
[products.name]: products
}
}
localStorage.setItem('products In Cart', JSON.stringify(cartItems));
}

onLoadCartNumbers();

