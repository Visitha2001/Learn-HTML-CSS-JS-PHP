let numbers  = [1 ,2 ,3 ,4 ,5 ,6 ,7 , 8, 9, 10];
console.log(...numbers);

let name = "Visitha Nirmal";
console.log(...name);//spread the name into chars

let indeses  = [1 ,2 ,3 ,4 ,5 ,6 ,7 , 8, 9, 10];
let maximum = Math.max(...indeses);
console.log(maximum);//spread and get maximum

let class1 = ['visitha', 'nirmal', 'rajapaksha'];
let class2 = ['chamod', 'jasintha', 'Heshan', 'bandara', 'mullegama'];
class1.push(...class2);
console.log(class1);//push array of spreded strings into an array(output an array of names)
console.log(...class1);//push array of spreded strings into an array of spreded strings(output just names)