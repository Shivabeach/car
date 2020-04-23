//use form to enter budget number for display
//based on Traversy BookList https://www.youtube.com/watch?v=JaMCxVWtW58&t=1548s

class Cost {
	constructor(product, reason) {
		this.product = product;
		this.reason = reason;
	}
}

class UI {
	static displayCosts() {
		const costs = Store.getCosts();
		costs.forEach(cost => UI.addExpenseToList(cost));
	}

	static addExpenseToList(cost) {
		const list = document.querySelector('.disp');
		const row = document.createElement('tr');

		row.innerHTML = `
      <td>${cost.product}</td>
      <td>${cost.reason}</td>
      <td><a href="#" class="btn delete">X</a></td>`;
		list.appendChild(row);
	}

	static deleteBook(el) {
		if (el.classList.contains('delete')) {
			el.parentElement.parentElement.remove();
		}
	}

	static showAlert(message, className) {
    const div = document.createElement('div');
    div.className = `alert alert-${className}`;
    div.appendChild(document.createTextNode(message));
    const container = document.querySelector('.container--main');
    const form = document.querySelector('.disp');
    container.insertBefore(div, form);

    // Vanish in 3 seconds
    setTimeout(() => document.querySelector('.alert').remove(), 3000);
  }

	static clearFields() {
		document.querySelector('#product').value = '';
		document.querySelector('#reason').value = '';
	}

} // End of UI class

class Store {
	// retrieve costs from local storage
	static getCosts() {
		let costs;
		if (localStorage.getItem('costs') === null) {
			costs = [];
		} else {
			costs = JSON.parse(localStorage.getItem('costs'));
		}
		return costs;
	}
	// input added costs into array in local storage
	static addCosts(cost) {
		const costs = Store.getCosts();
		costs.push(cost);
		localStorage.setItem('costs', JSON.stringify(costs));
	}
	// remove costs from array in local storage
	static removeBook(reason) {
		const costs = Store.getCosts();
		costs.forEach((cost, index) => {
			if (cost.reason === reason) {
				costs.splice(index, 1);
			}
		});
		localStorage.setItem('costs', JSON.stringify(costs));
	}
} // end of store


document.addEventListener('DOMContentLoaded', UI.displayCosts());

document.getElementById('buy').addEventListener('submit', e => {
	e.preventDefault();
	const product = document.querySelector('#product').value;
	const reason = document.querySelector('#reason').value;

	if (product === '') {
		alert('Product is not filled');
	} else {
		// showAlert for missing values in form here eventually
		const cost = new Cost(product, reason);
		UI.addExpenseToList(cost); //works
		Store.addCosts(cost);
		UI.clearFields();
	}
});

document.querySelector('.disp').addEventListener('click', e => {
	// Remove book from UI
	UI.deleteBook(e.target);

	// Remove book from store
	Store.removeBook(e.target.parentElement.previousElementSibling.textContent);

	// Show success message
	//UI.showAlert('Book Removed', 'success');
});

