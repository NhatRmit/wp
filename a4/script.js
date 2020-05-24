function nameFunction() {
    console.log("AAA")
    var x = document.getElementById("custname").value;
    if (x == "") {
        alert("Name must be filled");
    }
}

function Order() {
    console.log("Order clicked");
    alert("Your order");
}

//Movie Title

function moviePanelACT(book,synopsisACT) {
    var x = document.createElement("INPUT");
    x.setAttribute("type", "hidden");
    document.body.appendChild(x);
    document.getElementById(book).innerHTML = document.getElementById(synopsisACT).innerHTML;

}

function moviePanelRMC(book,synopsisRMC) {
    var x = document.createElement("INPUT");
    x.setAttribute("type", "hidden");
    document.body.appendChild(x);
    document.getElementById(book).innerHTML = document.getElementById(synopsisRMC).innerHTML;
}

function moviePanelANM(book,synopsisANM) {
    var x = document.createElement("INPUT");
    x.setAttribute("type", "hidden");
    document.body.appendChild(x);
    document.getElementById(book).innerHTML = document.getElementById(synopsisANM).innerHTML;
}

function moviePanelAHF(book,synopsisAHF) {
    var x = document.createElement("INPUT");
    x.setAttribute("type", "hidden");
    document.body.appendChild(x);
    document.getElementById(book).innerHTML = document.getElementById(synopsisAHF).innerHTML;
}

//Movie Day

// function movieMON() {
//     var y = document.createElement("INPUT");
//     y.setAttribute("type", "hidden");
//     document.body.appendChild(y);
//     document.getElementById("demo1").innerHTML = "MON";
// }

// function movieTUE() {
//     var y = document.createElement("INPUT");
//     y.setAttribute("type", "hidden");
//     document.body.appendChild(y);
//     document.getElementById("demo1").innerHTML = "TUE";
// }

// function movieWED() {
//     var y = document.createElement("INPUT");
//     y.setAttribute("type", "hidden");
//     document.body.appendChild(y);
//     document.getElementById("demo1").innerHTML = "WED";
// }

// function movieTHU() {
//     var y = document.createElement("INPUT");
//     y.setAttribute("type", "hidden");
//     document.body.appendChild(y);
//     document.getElementById("demo1").innerHTML = "THU";
// }

// function movieFRI() {
//     var y = document.createElement("INPUT");
//     y.setAttribute("type", "hidden");
//     document.body.appendChild(y);
//     document.getElementById("demo1").innerHTML = "FRI";
// }

// function movieSAT() {
//     var y = document.createElement("INPUT");
//     y.setAttribute("type", "hidden");
//     document.body.appendChild(y);
//     document.getElementById("demo1").innerHTML = "SAT";
// }

// function movieSUN() {
//     var y = document.createElement("INPUT");
//     y.setAttribute("type", "hidden");
//     document.body.appendChild(y);
//     document.getElementById("demo1").innerHTML = "SUN";
// }

//Movie Time

// function movieT12() {
//     var y = document.createElement("INPUT");
//     y.setAttribute("type", "hidden");
//     document.body.appendChild(y);
//     document.getElementById("demo2").innerHTML = "T12";
// }

// function movieT15() {
//     var y = document.createElement("INPUT");
//     y.setAttribute("type", "hidden");
//     document.body.appendChild(y);
//     document.getElementById("demo2").innerHTML = "T15";
// }

// function movieT18() {
//     var y = document.createElement("INPUT");
//     y.setAttribute("type", "hidden");
//     document.body.appendChild(y);
//     document.getElementById("demo2").innerHTML = "T18";
// }

// function movieT21() {
//     var y = document.createElement("INPUT");
//     y.setAttribute("type", "hidden");
//     document.body.appendChild(y);
//     document.getElementById("demo2").innerHTML = "T21";
// }

//Full Prices

// var flag
// var dis = 0;
// var prices = {
//     full: { STA: 19.80, STP: 17.50, STC: 15.30, FCA: 30.00, FCP: 27.00, FCC: 24.00 }
// };

// function Priceupdate(){

//     var sta = document.getElementById("seats-STA").value;
//     var stp = document.getElementById("seats-STP").value;
//     var stc = document.getElementById("seats-STC").value;
//     var fca = document.getElementById("seats-FCA").value;
//     var fcp = document.getElementById("seats-FCP").value;
//     var fcc = document.getElementById("seats-FCC").value;

//     if(isNaN(sta))
//         sta = 0;
//     if(isNaN(stp))
//         stp = 0;
//     if(isNaN(stc))
//         stc = 0;
//     if(isNaN(fca))
//         fca = 0;
//     if(isNaN(fcp))
//         fcp = 0;
//     if(isNaN(fcc))
//         fcc = 0;
//     if(flag==1)
//         dis=0.2;
//     else
//         dis = 0;
//     var total = document.getElementById("total");
//     var price = (1-dis)*(sta * prices.full.STA+ stp * prices.full.STP+ stc * prices.full.STC + fca * prices.full.FCA + fcp * prices.full.FCP + fcc * prices.full.FCC);
//     total.innerHTML = "total: $" + price.toFixed(2);
// }
// function discount(){
//     flag =1;
//     document.getElementById("discount").innerHTML= "* Discount 20% on weekday *";
// }
// function nondiscount(){
//     flag = 0;
//     document.getElementById("discount").innerHTML= "";
// }


$(document).ready(function(){
  $('body').scrollspy({target: ".navbar", offset: 50});   
});








