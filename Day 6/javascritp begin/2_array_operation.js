//operations on array

let names = ["john", "peter", "smith", "andy"];
console.log(names[2]);

// loop over an array
//forEach loop/function

names.forEach(function(item, index) {
    console.log(index, "=>", item);

});

//to add the elements of array
// 
let nums = [22, 23, 24, 35];
let sum = 0;
nums.forEach(function(it, i) {
    sum = sum + it;
});
console.log("sum is : ", sum);

//addding elements at the last of the array

names.push("shyam");
console.log(names);

// remove the last element of array

let r = names.pop();
console.log(r);
console.log(names);
console.log(names.pop());

//remove element from first in an array

let r1 = names.shift();
console.log(r1);
console.log(names);

//adding element from first in an array

let r2 = names.unshift("rameshowr");
console.log(r2);
console.log(names);

// checking the index inn an array

let pos = names.indexOf("peter");
console.log(pos);

// removing elements of array from any postion

console.log(names.splice(1, 2));
console.log(names);

// copy an array

let copy = names.slice();
console.log(copy);