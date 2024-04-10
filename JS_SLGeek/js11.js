function addNumbers() {
    //take input as integer with(parseInt).
    //if ther are float numbers we can use "parseFloat".
    let firstnumber = parseInt(document.getElementById("fNum").value);
    let secondnumber = parseInt(document.getElementById("sNum").value);
    let answer = firstnumber + secondnumber;
    document.getElementById("finalanswer").innerHTML = "Answe is " + answer;
}