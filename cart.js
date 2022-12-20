let carts = document.querySelectorAll('.add-cart');

let products = [
    {
        photo:"box1.jpg",
        name: 'Cosmetic',
        price: 15,
        inCart: 1
    },
    {
        photo:"box2.jpg",
        name: 'Gift box',
        price: 30,
        inCart: 1
    },
    {
        photo:"box3.jpg",
        name:'Red pack',
        price: 25,
        inCart: 1
    }
    {
        photo:"box4.jpg",
        name:'Mystery box',
        price: 17,
        inCart: 1
    }
];

for (let i = 0; i < carts.length; i++) {
    carts[i].addEventListener('click', () => {
        cartNumbers(products[i]);
        totalCost(products[i])
    })
}

function onLoadCartNumbers() {
    let productNumbers = localStorage.getItem('cartNumbers');

    if (productNumbers) {
        document.querySelector('.cart span').textContent = productNumbers;
    }
}

function cartNumbers(product) {
    let productNumbers = localStorage.getItem('cartNumbers');

    productNumbers = parseInt(productNumbers);

    if (productNumbers) {
        localStorage.setItem('cartNumbers', productNumbers + 1);
        document.querySelector('.cart span').textContent = productNumbers + 1;
    } else {
        localStorage.setItem('cartNumbers', 1);
        document.querySelector('.cart span').textContent = 1;
    }
    setItems(product);
}
function setItems(product) {
    let cartItems = localStorage.getItem('productsInCart');
    cartItems = JSON.parse(cartItems);

    if (cartItems != null) {
        if (cartItems[product.tag] == undefined) {
            cartItems = {
                ...cartItems,
                [product.tag]: product
            }
        }
        cartItems[product.tag].inCart += 1
    } else {
        product.inCart = 1;
        cartItems = {
            [product.tag]: product
        }
    }
    localStorage.setItem("productsInCart", JSON.stringify(cartItems));
}

function totalCost(product) {
    let cartCost = localStorage.getItem('totalCost');
    cartCost = parseInt(cartCost);
    console.log("My cartCost is", cartCost);
    console.log(typeof cartCost);
    if (cartCost != null) {
        localStorage.setItem("totalCost", cartCost + product.price);
    } else {
        localStorage.setItem("totalCost", product.price);
    }
}
function displayCart(){
    let cartItems = localStorage.getItem("productsInCart");
    cartItems = JSON.parseInt(cartItems);
    let productContainer = document.querySelector(".products");
}
console.log(cartItems);
if(cartItems && productContainer)

onLoadCartNumbers();
displayCart();