var prices = {
    p1: 18.5,
    p2: 3.5
};

function plus(whichID) {
    console.log('plus button click');
    var whichQty = document.getElementById(whichID + "-qty");
    var whichSubtotal = document.getElementById(whichID + "-subtotal");
    whichQty.value = Number(whichQty.value) + 1;
    var price = whichQty.value * prices[whichID];
    console.log(whichQty.getAttribute("name")+' quantity is: ' + whichQty.value);
    console.log(whichSubtotal.getAttribute("name")+ ' is: $' + price);
    whichSubtotal.innerHTML = "Total: $" + price.toFixed(2);
}
function minus(whichID) {
    console.log('minus button click');
    var whichQty = document.getElementById(whichID + "-qty");
    var whichSubtotal = document.getElementById(whichID + "-subtotal");
    if(whichQty.value > 0){
        whichQty.value = Number(whichQty.value) - 1;
    }
    var price = whichQty.value * prices[whichID];
    console.log(whichQty.getAttribute("name") + ' quantity is: ' + whichQty.value);
    console.log(whichSubtotal.getAttribute("name") + ' is: $' + price);
    whichSubtotal.innerHTML = "Total: $" + price.toFixed(2);
} 

function updateQuantity(whichID) {
    console.log('upd Quantity function');
    var whichQty = document.getElementById(whichID + "-qty");
    var whichSubtotal = document.getElementById(whichID + "-subtotal");
    var price = whichQty.value * prices[whichID];
    console.log(whichQty.getAttribute("name") + ' quantity is: ' + whichQty.value);
    console.log(whichSubtotal.getAttribute("name") + ' is: $' + price);
    whichSubtotal.innerHTML = "Total: $" + price.toFixed(2);
}