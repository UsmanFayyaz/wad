var AccountDetails=[{
    AccountTitle:'usman ',
    AvailibleBalance:6876748,
    AccountCurrency:'PKR',
    IBAN:"pk78723947329842769"
}];


document.getElementById("title").innerHTML=AccountDetails[0].AccountTitle;
document.getElementById("balance").innerHTML=AccountDetails[0].AvailibleBalance;
document.getElementById("currency").innerHTML=AccountDetails[0].AccountCurrency;
document.getElementById("IBAN").innerHTML=AccountDetails[0].IBAN;

document.getElementById("withdraw").addEventListener("keyup", withdraw);


var withd=document.getElementById("withdraw");

function withdraw() {
    var temp=withd.value;
    document.getElementById("balance").innerHTML=AccountDetails[0].AvailibleBalance-temp;

}

document.getElementById("deposit").addEventListener("keyup", deposit);

var deposi=document.getElementById("deposit");

function deposit() {
    var temp=deposi.value;
    var s=parseInt(temp);
    document.getElementById("balance").innerHTML=AccountDetails[0].AvailibleBalance+s;
}