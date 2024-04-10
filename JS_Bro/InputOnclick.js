let a;
let b;
let c;

document.getElementById("btnSub").onclick = function() {
    a = document.getElementById("num1").value;
    a = Number(a);

    b = document.getElementById("num2").value;
    b = Number(b);

    c = a + b;

    document.getElementById("Ans").innerHTML = "Answer : " + c;
}