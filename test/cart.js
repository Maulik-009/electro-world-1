var cart = new Cart();

// Add items to cart here

document.getElementById('cart-count').innerHTML = cart.getTotalItems();
document.getElementById('cart-total').innerHTML = '$' + cart.getTotalPrice().toFixed(2);

function Cart() {
    this.items = [];
  }
  
  Cart.prototype.addItem = function(item) {
    this.items.push(item);
  };
  
  Cart.prototype.removeItem = function(item) {
    var index = this.items.indexOf(item);
    if (index > -1) {
      this.items.splice(index, 1);
    }
  };
  
  Cart.prototype.getTotalPrice = function() {
    var totalPrice = 0;
    for (var i = 0; i < this.items.length; i++) {
      totalPrice += this.items[i].price;
    }
    return totalPrice;
  };
  
  Cart.prototype.getTotalItems = function() {
    return this.items.length;
  };

  var cart = new Cart();

        cart.addItem({ name: 'iPhone', price: 999 });
        cart.addItem({ name: 'MacBook Pro', price: 1999 });

        console.log(cart.getTotalItems()); // Output: 2
        console.log(cart.getTotalPrice()); // Output: 2998

        Cart.prototype.addItem = function(item) {
            this.items.push(item);
            var table = document.getElementById('cart-table');
            var row = table.insertRow(-1);
            var nameCell = row.insertCell(0);
            var priceCell = row.insertCell(1);
            nameCell.innerHTML = item.name;
            priceCell.innerHTML = '$' + item.price.toFixed(2);
            };

            Cart.prototype.addItem = function(item) {
                this.items.push(item);
                var button = document.createElement('button');
                button.innerHTML = 'Add to cart';
                button.onclick = function() {
                  cart.addItem(item);
                  updateCart();
                };
                document.getElementById('add-to-cart').appendChild(button);
              };

              Cart.prototype.addItem = function(item) {
                this.items.push(item);
                var button = document.createElement('button');
                button.innerHTML = 'Add to cart';
                button.onclick = function() {
                  cart.addItem(item);
                  updateCart();
                };
                document.getElementById('add-to-cart').appendChild(button);
              };
              
              Cart.prototype.addItem = function(item) {
                this.items.push(item);
                var table = document.getElementById('cart-table');
                var row = table.insertRow(-1);
                var nameCell = row.insertCell(0);
                var priceCell = row.insertCell(1);
                nameCell.innerHTML = item.name;
                priceCell.innerHTML = '$' + item.price.toFixed(2);
              };