/** @format */

//use form to enter budget number for display
//based on Traversy BookList https://www.youtube.com/watch?v=JaMCxVWtW58&t=1548s
/**
 * @description
 * @author Brad
 * @date 2021-06-10
 * @class Detail
 */
class Detail {
  constructor(product) {
    this.product = product;
  }
}

class UI {
  static displayCosts() {
    const towel = Store.getCosts();
    towel.forEach((detail) => UI.addExpenseToList(detail));
  }

  static addExpenseToList(detail) {
    const list = document.querySelector('.disp');
    const row = document.createElement('tr');

    row.innerHTML = `
			<td>${detail.product}</td>
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
  }
} // End of UI class

class Store {
  // retrieve costs from local storage
  static getCosts() {
    let towel;
    if (localStorage.getItem('towel') === null) {
      towel = [];
    } else {
      towel = JSON.parse(localStorage.getItem('towel'));
    }
    return towel;
  }
  // input added costs into array in local storage
  static addCosts(detail) {
    const towel = Store.getCosts();
    towel.push(detail);
    localStorage.setItem('towel', JSON.stringify(towel));
  }
  // remove costs from array in local storage
  static removeBook(reason) {
    const towel = Store.getCosts();
    towel.forEach((detail, index) => {
      if (detail.product === product) {
        console.log(detail.product);
        towel.splice(index, 1);
      }
    });
    localStorage.setItem('towel', JSON.stringify(towel));
  }
} // end of store

document.addEventListener('DOMContentLoaded', UI.displayCosts());

document.getElementById('buy').addEventListener('submit', (e) => {
  e.preventDefault();
  const product = document.querySelector('#product').value;

  if (product === '') {
    alert('Product is not filled');
  } else {
    // showAlert for missing values in form here eventually
    const detail = new Detail(product);
    UI.addExpenseToList(detail); //works
    Store.addCosts(detail);
    UI.clearFields();
  }
});

document.querySelector('.disp').addEventListener('click', (e) => {
  // Remove book from UI
  UI.deleteBook(e.target);

  // Remove book from store
  Store.removeBook(e.target.parentElement.previousElementSibling.textContent);

  // Show success message
  //UI.showAlert('Book Removed', 'success');
});
