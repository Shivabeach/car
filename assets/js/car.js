// check if local storage is null, if not retreive storage getCosts()
//! new function run a forEach on returned local storage
// new function to use the forewach to display the local storage
// review purch.js

let buy = document.querySelector("#buy");
let listing = document.querySelector(".listing");
const car = [];
let storedData = localStorage.getItem("car");
if (storedData !== null) {
	car = JSON.parse(storedData);
}

function purchase() {
	this.product = product;
	this.reason = reason;
}

function init() {
	getStore();
}

function getStore(product, reason) {
	let storedData = localStorage.getItem("car");
	if (storedData !== null) {
		car = JSON.parse(storedData);
	}
	car.forEach(function(stored) {
		return stored;
	});
}

function addToStorage(product, reason) {
	let needs = { product: product, reason: reason };
	car.push(needs);
	localStorage.setItem("car", JSON.stringify(car));
}

addEventListener("DOMContentLoaded", () => {
	init();
});

buy.addEventListener("submit", e => {
	e.preventDefault();
	let product = document.querySelector("#product").value;
	let reason = document.querySelector("#reason").value;
	addToStorage(product, reason);
});
