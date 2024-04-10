let count = 0;

document.getElementById("btnInc").onclick = function() {
    count -= 1;
    document.getElementById("DisC").innerHTML = count;
}
document.getElementById("btnRes").onclick = function() {
    count = 0;
    document.getElementById("DisC").innerHTML = count;
}
document.getElementById("btnDec").onclick = function() {
    count += 1;
    document.getElementById("DisC").innerHTML = count;
}