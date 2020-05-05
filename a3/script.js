function nameFunction() {
    console.log("AAA")
    var x = document.getElementById("name").value;
    if (x == "") {
        alert("Name must be filled");
    }
}

function Order() {
    console.log("Order clicked");
    alert("Your order");
}

//Movie Title

function moviePanelACT() {
    var x = document.createElement("INPUT");
    x.setAttribute("type", "hidden");
    document.body.appendChild(x);
    document.getElementById("demo").innerHTML = "Avengers";
}

function moviePanelRMC() {
    var x = document.createElement("INPUT");
    x.setAttribute("type", "hidden");
    document.body.appendChild(x);
    document.getElementById("demo").innerHTML = "Wedding";
}

function moviePanelANM() {
    var x = document.createElement("INPUT");
    x.setAttribute("type", "hidden");
    document.body.appendChild(x);
    document.getElementById("demo").innerHTML = "Dumbo";
}

function moviePanelAHF() {
    var x = document.createElement("INPUT");
    x.setAttribute("type", "hidden");
    document.body.appendChild(x);
    document.getElementById("demo").innerHTML = "Prince";
}

//Movie Day

function movieMON() {
    var y = document.createElement("INPUT");
    y.setAttribute("type", "hidden");
    document.body.appendChild(y);
    document.getElementById("demo1").innerHTML = "MON";
}

function movieTUE() {
    var y = document.createElement("INPUT");
    y.setAttribute("type", "hidden");
    document.body.appendChild(y);
    document.getElementById("demo1").innerHTML = "TUE";
}

function movieWED() {
    var y = document.createElement("INPUT");
    y.setAttribute("type", "hidden");
    document.body.appendChild(y);
    document.getElementById("demo1").innerHTML = "WED";
}

function movieTHU() {
    var y = document.createElement("INPUT");
    y.setAttribute("type", "hidden");
    document.body.appendChild(y);
    document.getElementById("demo1").innerHTML = "THU";
}

function movieFRI() {
    var y = document.createElement("INPUT");
    y.setAttribute("type", "hidden");
    document.body.appendChild(y);
    document.getElementById("demo1").innerHTML = "FRI";
}

function movieSAT() {
    var y = document.createElement("INPUT");
    y.setAttribute("type", "hidden");
    document.body.appendChild(y);
    document.getElementById("demo1").innerHTML = "SAT";
}

function movieSUN() {
    var y = document.createElement("INPUT");
    y.setAttribute("type", "hidden");
    document.body.appendChild(y);
    document.getElementById("demo1").innerHTML = "SUN";
}

//Movie Time

function movieT12() {
    var y = document.createElement("INPUT");
    y.setAttribute("type", "hidden");
    document.body.appendChild(y);
    document.getElementById("demo2").innerHTML = "T12";
}

function movieT15() {
    var y = document.createElement("INPUT");
    y.setAttribute("type", "hidden");
    document.body.appendChild(y);
    document.getElementById("demo2").innerHTML = "T15";
}

function movieT18() {
    var y = document.createElement("INPUT");
    y.setAttribute("type", "hidden");
    document.body.appendChild(y);
    document.getElementById("demo2").innerHTML = "T18";
}

function movieT21() {
    var y = document.createElement("INPUT");
    y.setAttribute("type", "hidden");
    document.body.appendChild(y);
    document.getElementById("demo2").innerHTML = "T21";
}

//Full Prices

var prices = {
    full: { STA: 19.80, STP: 17.50, STC: 15.30, FCA: 30.00, FCP: 27.00, FCC: 24.00 }
};

function STA() {
    var Qty = document.getElementById("seats-STA");
    var Subtotal = document.getElementById("subtotal");
    var price = Qty.value * prices.full.STA;
    Subtotal.innerHTML = "Subtotal: $" + price.toFixed(2);
}

function STP() {
    var Qty = document.getElementById("seats-STP");
    var Subtotal = document.getElementById("subtotal");
    var price = Qty.value * prices.full.STP;
    Subtotal.innerHTML = "Subtotal: $" + price.toFixed(2);
}

function STC() {
    var Qty = document.getElementById("seats-STC");
    var Subtotal = document.getElementById("subtotal");
    var price = Qty.value * prices.full.STC;
    Subtotal.innerHTML = "Subtotal: $" + price.toFixed(2);
}

function FCA() {
    var Qty = document.getElementById("seats-FCA");
    var Subtotal = document.getElementById("subtotal");
    var price = Qty.value * prices.full.FCA;
    Subtotal.innerHTML = "Subtotal: $" + price.toFixed(2);
}

function FCP() {
    var Qty = document.getElementById("seats-FCP");
    var Subtotal = document.getElementById("subtotal");
    var price = Qty.value * prices.full.FCP;
    Subtotal.innerHTML = "Subtotal: $" + price.toFixed(2);
}

function FCC() {
    var Qty = document.getElementById("seats-FCC");
    var Subtotal = document.getElementById("subtotal");
    var price = Qty.value * prices.full.FCC;
    Subtotal.innerHTML = "Subtotal: $" + price.toFixed(2);
}










