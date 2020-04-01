const buy = document.getElementById('buy');


// function getParts() {
// 	let needs;
// 	if (localStorage.getItem('needs') === null) {
// 		needs = [];
// 	} else {
// 		needs = JSON.parse(localStorage.getItem('needs'));
// 	}
// 	console.log(needs);
// }

buy.addEventListener('submit', function(e) {
	e.preventDefault();
	const need = document.getElementById('product').value;

	const needs = [];
	needs.push(need);
	localStorage.setItem('needs', JSON.stringify(needs));
	addExpenseToList(needs);

});


function loadParts() {
	if (localStorage.getItem('needs') === null) {
		needs = [];
	} else {
		needs = JSON.parse(localStorage.getItem('needs'));
	}
	return needs;
}



function addExpenseToList(needs) {
	const list = document.querySelector('.disp');
	const row = document.createElement('tr');

	row.innerHTML = `
      <td>${product}</td>
      <td><a href="#" class="btn btn-danger btn-sm delete">X</a></td>`;
	list.appendChild(row);
}
