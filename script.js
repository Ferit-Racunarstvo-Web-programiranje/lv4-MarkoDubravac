function createFruit(item) {
  let itemElement = document.createElement("div");
  itemElement.classList.add("item");
  itemElement.id = item.id.toString();
  itemElement.innerHTML = `
            <img src="${item.image}.jpg" style="height: 200px; alt="${
    item.name
  }">
            <h2>${item.name}</h2>
            <p>$${item.price}</p>
            <br><br>
            <form action="product.php" method="post">
              <button class="add-to-cart-btn" type="submit" name="id" value="${
                item.id - 1
              }">Open Fruit Page</button>
            </form>
              `;
  document.querySelector(".items-grid").appendChild(itemElement);
}

function createCartItem(item) {
  let itemElement = document.createElement("div");
  itemElement.classList.add("cart-item");
  itemElement.id = item.id.toString();
  itemElement.innerHTML = `
        <img src="${item.image}" alt="${
    item.name
  }" class="fruit-image" style="height: 200px; margin-right: 40px" >
        <div>
            <h2 style="text-align:center; margin: 0.5em 0;">${item.name}</h2>

            <div>
                <form action="updateCart.php" method="post">
                    <div style="justify-content:center;">
                        <p>Quantity: </p>
                        <input id="quantity-input" type="number" name="quantity" min="0" value="${
                          item.quantity
                        }"></input>
                    </div>
                    <button class="update-btn" type="submit" name="id" value="${
                      item.id - 1
                    }" id="qUpdate">Update to New Quantity</button>
                </form>
                <div>
                    <p>Price Per Item: $${item.price}</p>
                    <p id="total-price">Total Price: $${(
                      item.price * item.quantity
                    ).toFixed(2)}</p>
                </div>

            </div>

            <form action="updateCart.php" method="post">
                <input type="hidden" name="quantity" value="0"></input>
                <button class="remove-from-cart-btn" type="submit" name="id" value="${
                  item.id - 1
                }">Remove</button>
            </form>
        </div>
    `;
  document.querySelector(".cart-grid").appendChild(itemElement);
}
