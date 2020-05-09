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

function movieT9(){
    var y = document.createElement("INPUT");
    y.setAttribute("type", "hidden");
    document.body.appendChild(y);
    document.getElementById("demo2").innerHTML = "Time 9:00";
}
function movieT12() {
    var y = document.createElement("INPUT");
    y.setAttribute("type", "hidden");
    document.body.appendChild(y);
    document.getElementById("demo2").innerHTML = "Time 12:00";
}

function movieT15() {
    var y = document.createElement("INPUT");
    y.setAttribute("type", "hidden");
    document.body.appendChild(y);
    document.getElementById("demo2").innerHTML = "Time 15:00";
}

function movieT18() {
    var y = document.createElement("INPUT");
    y.setAttribute("type", "hidden");
    document.body.appendChild(y);
    document.getElementById("demo2").innerHTML = "Time 18:00";
}

function movieT21() {
    var y = document.createElement("INPUT");
    y.setAttribute("type", "hidden");
    document.body.appendChild(y);
    document.getElementById("demo2").innerHTML = "Time 21:00";
}

//Full Prices

var prices = {
    full: { STA: 19.80, STP: 17.50, STC: 15.30, FCA: 30.00, FCP: 27.00, FCC: 24.00 }
};

var flag
var dis = 0;
var prices = {
    full: { STA: 19.80, STP: 17.50, STC: 15.30, FCA: 30.00, FCP: 27.00, FCC: 24.00 }
};

function Priceupdate(){

    var sta = document.getElementById("seats-STA").value;
    var stp = document.getElementById("seats-STP").value;
    var stc = document.getElementById("seats-STC").value;
    var fca = document.getElementById("seats-FCA").value;
    var fcp = document.getElementById("seats-FCP").value;
    var fcc = document.getElementById("seats-FCC").value;

    if(isNaN(sta))
        sta = 0;
    if(isNaN(stp))
        stp = 0;
    if(isNaN(stc))
        stc = 0;
    if(isNaN(fca))
        fca = 0;
    if(isNaN(fcp))
        fcp = 0;
    if(isNaN(fcc))
        fcc = 0;
    if(flag==1)
        dis=0.2;
    else
        dis = 0;
    var Subtotal = document.getElementById("subtotal");
    var price = (1-dis)*(sta * prices.full.STA+ stp * prices.full.STP+ stc * prices.full.STC + fca * prices.full.FCA + fcp * prices.full.FCP + fcc * prices.full.FCC);
    Subtotal.innerHTML = "Subtotal: $" + price.toFixed(2);
}
function discount(){
    flag =1;
    document.getElementById("discount").innerHTML= "* Discount 20% on weekday *";
}
function nondiscount(){
    flag = 0;
    document.getElementById("discount").innerHTML= "";
}











