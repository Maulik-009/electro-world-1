var cart = [];

function addToCart(name, price) {
  cart.push({ name: name, price: price });
  updateCart();
}

function removeItem(index) {
  cart.splice(index, 1);
  updateCart();
}

function getTotalPrice() {
  var totalPrice = 0;
  for (var i = 0; i < cart.length; i++) {
    totalPrice += cart[i].price;
  }
  return totalPrice;
}

function updateCart() {
  var cartItems = document.getElementById('cart-items');
  var cartTotal = document.getElementById('cart-total');
  cartItems.innerHTML = '';
  for (var i = 0; i < cart.length; i++) {
    var row = document.createElement('tr');
    var nameCell = document.createElement('td');
    var priceCell = document.createElement('td');
    var removeCell = document.createElement('td');
    var removeButton = document.createElement('button');
    nameCell.innerHTML = cart[i].name;
    priceCell.innerHTML = '$' + cart[i].price.toFixed(2);
    removeButton.innerHTML = 'Remove';
    removeButton.onclick = (function(index) {
      return function() {
        removeItem(index);
      };
    })(i);
    removeCell.appendChild(removeButton);
    row.appendChild(nameCell);
    row.appendChild(priceCell);
    row.appendChild(removeCell);
    cartItems.appendChild(row);
  }
  cartTotal.innerHTML = '$' + getTotalPrice().toFixed(2);
}
