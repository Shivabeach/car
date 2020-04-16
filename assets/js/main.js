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
	const needs = [];
	const product = document.getElementById('product').value;

	needs.push(need);
	localStorage.setItem('needs', JSON.stringify(needs));
	addExpenseToList(needs);
});


// function loadParts() {
// 	let needs;
// 	if (localStorage.getItem('needs') === null) {
// 		needs = [];
// 	} else {
// 		needs = JSON.parse(localStorage.getItem('needs'));
// 	}
// 	addExpenseToList(needs);
// 	// removed let from needs and moved it to the top. This one works
// }



function addExpenseToList(needs) {
	const list = document.querySelector('.disp');
	const row = document.createElement('tr');
	if (localStorage.getItem('needs') === null) {
		needs = [];
	} else {
		needs = JSON.parse(localStorage.getItem('needs'));
	}
	row.innerHTML = `
      <td>${tweed.needs}</td>
      <td><a href="#" class="btn btn-danger btn-sm delete">X</a></td>`;
	list.appendChild(row);
}
