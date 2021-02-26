"use strict"

let wishItem = document.createElement('div');
wishItem.className = "wish-item";

let picture = document.createElement('div');
let imgFluid = document.createElement('img');
let productName = document.createElement('div');
let prices = document.createElement('div');

// let productText = document.createTextNode('Stephen King');
productName.innerText = 'Stephen King';
productName.className = 'product-name';
// productName.appendChild(productName);

prices.innerText = '222';

imgFluid.setAttribute('src',"book images/24.JPG");
imgFluid.setAttribute('alt',"Clifford Simak");
imgFluid.className = "img-fluid w-100";

picture.appendChild(imgFluid);
wishItem.appendChild(picture);
wishItem.appendChild(productName);
wishItem.appendChild(prices);

document.querySelector('.wish-items').appendChild(wishItem);
// console.log(wishItem);
let parent = document.querySelector('.wish-item');
parent.querySelector('.product-name').insertAdjacentHTML('beforeend', '<div class="add-btn text-right"><a href="#" class="reset-anchor m-auto"><i class="fas fa-cart-plus"></i></a></div>');