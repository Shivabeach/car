//use form to enter budget number for display
//based on Traversy BookList https://www.youtube.com/watch?v=JaMCxVWtW58&t=1548s

class Calc {
	constructor(budget) {
		this.budget = budget;
	}

}

class Cost {
	constructor(product, reason) {
		this.product = product;
		this.reason = reason;
	}
}


class UI {
	static displayCosts() {
		const costs = Store.getCosts();

		costs.forEach((cost) => UI.addExpenseToList(cost));
	}

	static addExpenseToList(cost) {
		const list = document.querySelector('.disp');
		const row = document.createElement('tr');

		row.innerHTML = `
      <td>${cost.product}</td>
      <td>${cost.reason}</td>
      <td><a href="#" class="btn btn-danger btn-sm delete">X</a></td>`;
		list.appendChild(row);
	}

	static deleteBook(el) {
		if (el.classList.contains('delete')) {
			el.parentElement.parentElement.remove();
		}
	}
	static clearFields() {
			document.querySelector('#product').value = '';
			document.querySelector('#reason').value = '';
		}
		//display the budget number
	// static displayBudget() {
	// 	const calced = Store.getBudget();
	// 	document.getElementById("budgetDisplay").innerHTML = "$" + calced;
	// }

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
	static removeBook(product) {
			const costs = Store.getCosts();

			costs.forEach((cost, index) => {
				if (cost.product === product) {
					costs.splice(index, 1);
				}
			});
			localStorage.setItem('costs', JSON.stringify(costs));
		}
		// Retrieve budget
	// static getBudget() {
	// 	let calced;
	// 	if (localStorage.getItem('calced') === "") {
	// 		calced = [];
	// 	} else {
	// 		calced = JSON.parse(localStorage.getItem('calced'));
	// 	}
	// 	return calced;
	// }

} // end of store


// Event display costs onload
document.addEventListener('DOMContentLoaded', UI.displayCosts());
// add costs
document.getElementById('buy').addEventListener('submit', (e) => {
	e.preventDefault();
	const product = document.querySelector('#product').value;
	const reason = document.querySelector('#reason').value;

	if (product === '') {
		alert('Product is not filled')
	} else {
		// showAlert for missing values in form here eventually
		const cost = new Cost(product, reason);
		UI.addExpenseToList(cost); //works
		Store.addCosts(cost);
		UI.clearFields();
	}
})

document.querySelector('.disp').addEventListener('click', (e) => {
	// Remove book from UI
	UI.deleteBook(e.target);
	// Remove book from store
	Store.removeBook(e.target.parentElement.previousElementSibling.textContent);
	// Show success message
	//UI.showAlert('Record Removed', 'success');
});

//enter and display primary budget
// document.getElementById("submit").addEventListener("click", (e) => {
// 	e.preventDefault();
// 	var bud = document.getElementById("budget").value;
// 	const budget = parseFloat(bud);
// 	document.querySelector("#budgetDisplay").innerHTML = "$" + budget;
// 	localStorage.setItem("calced", budget);
// })

