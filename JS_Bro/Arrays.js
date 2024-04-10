let fruits = ['Bananan', 'Apple' , 'Orange'];

fruits[0] = 'Papaya';//replace

// //add the fruit to the list
fruits.push('Mango');
fruits.pop();//remove the fruit from the last

// //add the fruit from the beginning of the list
fruits.unshift('Durian');
fruits.shift();//remove the fruit from the beginning of the list


// // console.log(fruits);
for(var i=0; i<fruits.length; i++){
    console.log(fruits[i]);
}

for(let i=fruits.length - 1; i >= 0; i--){
    console.log(fruits[i]);//print one by one backwords
}

fruits = fruits.sort();
console.log(fruits);

fruits = fruits.sort().reverse();
console.log(fruits);

for(let fruit of fruits){
    console.log(fruit);
}