/**
 * For purchasing products. Replacing purch.js
 *
 * @format
 */

'use strict';
let submit = document.getElementById('submit');
let storedData = localStorage.getItem('car');
let shopping = [];

function create() {
  let choco = 'Ceramics';
  if (storedData === null) {
    shopping.push(choco);
    localStorage.setItem('car', JSON.stringify(shopping));
  }
}

function retrieve() {
  const retrieve = localStorage.getItem('car');
  return retrieve;
}

function display() {}

function addToList(needs) {
  shopping.push(needs);
  localStorage.setItem('car', JSON.stringify(shopping));
  console.log(shopping);
}

addEventListener('DOMContentLoaded', () => {
  create();
});

submit.addEventListener('click', (e) => {
  e.preventDefault();
  let product = document.getElementById('product').value;
  addToList(product);
});
