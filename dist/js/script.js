console.log('Script is loaded');
document.getElementById('button-mobile').addEventListener('click', function() {
    console.log('fsd');
    const nav = document.getElementById('mobile-nav');
    nav.classList.toggle('hidden'); // Toggles the 'hidden' class
});

document.getElementById('logged-in').addEventListener('click', function() {
    console.log('login');
    const nav = document.getElementById('login-nav');
    nav.classList.toggle('hidden'); // Toggles the 'hidden' class
});

// Products array in JavaScript
const products = [
{
    "image": "./dist/img/1.jpeg",
    "alt": "Classic Chronograph",
    "title": "Classic Chronograph",
    "price": "$4,999"
},
{
    "image": "./dist/img/2.jpeg",
    "alt": "Elegant Automatic",
    "title": "Elegant Automatic",
    "price": "$6,499"
},
{
    "image": "./dist/img/3.jpeg",
    "alt": "Sport Edition",
    "title": "Sport Edition",
    "price": "$3,999"
},
{
    "image": "./dist/img/4.jpeg",
    "alt": "Minimalist Series",
    "title": "Minimalist Series",
    "price": "$2,999"
},
{
    "image": "./dist/img/1.jpeg",
    "alt": "Diver Pro",
    "title": "Diver Pro",
    "price": "$5,499"
},
{
    "image": "./dist/img/2.jpeg",
    "alt": "Heritage Collection",
    "title": "Heritage Collection",
    "price": "$7,999"
}
];

// console.log(products);
// Open modal function
function openModal(index) {
    const product = products[index];
    document.getElementById('modalImage').src = product.image;
    document.getElementById('modalImage').alt = product.alt;
    document.getElementById('modalTitle').textContent = product.title;
    document.getElementById('modalPrice').textContent = product.price;
    
    // Show the modal
    document.getElementById('productModal').classList.remove('hidden');
}

// Close modal function
function closeModal() {
    document.getElementById('productModal').classList.add('hidden');
}