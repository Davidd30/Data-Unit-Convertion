function convert() {
    let con_input = document.getElementById("con_input").value;
    let From = document.getElementById("From").value;
    let To = document.getElementById("To").value;
    let output;
    let bybytes = 0;

    if(From=="bit") bybytes = con_input / 8;
    else if(From=="byte") bybytes = con_input;
    else if(From=="kbyte") bybytes = con_input*1024;
    else if(From=="mbyte") bybytes = con_input*1024*1024;
    else if(From=="gbyte") bybytes = con_input*1024*1024*1024;

    if(To=="bit") output = bybytes * 8;
    else if(To=="byte")  output = bybytes;
    else if(To=="kbyte") output = bybytes / 1024;
    else if(To=="mbyte") output = bybytes / 1024 / 1024;
    else if(To=="gbyte") output = bybytes / 1024 / 1024 / 1024;

    document.getElementById("outputValue").value = output;
}
function Thank(){
    alert("Thanks For your Message, We will contact you ASAP !");
}