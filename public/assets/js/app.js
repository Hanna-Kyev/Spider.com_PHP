"use strict"

const sidebarToggle = document.querySelector('.sidebar-toggle');
const sidebar = document.querySelector('.sidebar');
const closeBtn = document.querySelector('.close-btn');
// console.dir(sidebarToggle);
const countItemsInCart = document.querySelector('.count-items-in-cart');
const cartItems = document.querySelector('.cart-items');
const clearCart = document.querySelector(".clear-cart");
// console.dir(clearCart);

const countWishItems = document.querySelector('.count-wish-items');
const closenBtn = document.querySelector('.closen-btn');
const wish = document.querySelector('.wish');
const wishToggle = document.querySelector('.wish-toggle')
const wishItems = document.querySelector('.wish-items');


sidebarToggle.addEventListener('click', function(){
    // if (!sidebar.classList.contains('show-sidebar')){
    // sidebar.classList.add('show-sidebar');
    // }
    sidebar.classList.toggle('show-sidebar');
});

closeBtn.addEventListener('click', function(){
    // if (!sidebar.classList.contains('show-sidebar')){
    // sidebar.classList.remove('show-sidebar');
    // }
    sidebar.classList.toggle('show-sidebar');
});

let addToCart = document.querySelectorAll('.add-to-cart');

for (let i=0; i<addToCart.length;i++){
    addToCart[i].addEventListener('click', function(){
        countItemsInCart.textContent++;
        
        if (countItemsInCart.textContent>0){
            countItemsInCart.classList.add('notempty');
        } else{
            countItemsInCart.classList.remove('notempty');
        }
    })
};

cartItems.addEventListener('click', function(event){
    if (event.target.classList.contains('fa-caret-right')){
        +event.target.previousElementSibling.innerText++;
    } else if (event.target.classList.contains('fa-caret-left')){
        +event.target.nextElementSibling.innerText--;
    }
    // console.dir(event.target);
})

wishToggle.addEventListener('click', function(){
    wish.classList.toggle('show-wish');
});

closenBtn.addEventListener('click', function(){
    wish.classList.toggle('show-wish');
});

let choose = document.querySelectorAll('.choose');

for (let i = 0; i<choose.length; i++){
    choose[i].addEventListener('click', function(){
        countWishItems.textContent++;
        if (countWishItems.textContent>0){
            countWishItems.classList.add('notempty'); 
        } else{
            countWishItems.classList.remove('notempty');
        }
    })
}

wishItems.addEventListener('click', function(event){
    if (event.target.classList.contains('fa-caret-right')){
        +event.target.previousElementSibling.innerText++;         
    } else if (event.target.classList.contains('fa-caret-left')){
        +event.target.nextElementSibling.innerText--;
    }
    // console.dir(event.target);
})

