const unitPrice = 1000;

const quantityInput = document.getElementById("quantity");

const totalPriceInput = document.getElementById("totalPrice");


quantityInput.addEventListener("input", function () {

    let quantity = Number(quantityInput.value);

    if (quantity < 0) {
        quantity = 0;
        quantityInput.value = 0;
    }

    let totalPrice = unitPrice * quantity;

    totalPriceInput.value = totalPrice;

    if (totalPrice > 1000) {
        alert("Congratulations! You are eligible for a gift coupon.");
    }

});