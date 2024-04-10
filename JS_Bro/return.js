let area;
let width;
let height;

width = window.prompt("Enter a width:");
height = window.prompt("Enter a height:");

area = getArea(width, height);

function getArea(width, height){
    // let res = width * height;
    // return res;

    return (width * height);
    //shortn
}

console.log("The area is : " + area);