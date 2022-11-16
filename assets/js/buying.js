/**
 * /*
 * New purchasing js file
 *
 * @format
 */

'use strict';
const buy = document.querySelector('#buy');
let purchase = [];
let storedData = localStorage.getItem('purchase');
if (storedData !== null) {
  purchase = JSON.parse(storedData);
}

function addToStorage(product, reason) {
  let needs = { product: product, reason: reason };
  purchase.push(needs);
  localStorage.setItem('purchase', JSON.stringify(purchase));
  display();
}

function display() {
  const list = document.querySelector('.disp');
  const row = document.createElement('tr');

  row.innerHTML = `
    <td>${costs.product}</td>
    <td>${costs.reason}</td>
    <td><a href="#" class="btn delete">X</a></td>`;
  list.appendChild(row);
}

buy.addEventListener('submit', (e) => {
  e.preventDefault();
  let product = document.querySelector('#product').value;
  let reason = document.querySelector('#reason').value;
  addToStorage(product, reason);
});
