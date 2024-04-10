function addNumbers() {
    let firstnumber = document.getElementById("fNum").value;
    let secondnumber = document.getElementById("sNum").value;
    let answer = firstnumber + " " + secondnumber;
    document.getElementById("finalanswer").innerHTML = "Answe is " + answer;
}