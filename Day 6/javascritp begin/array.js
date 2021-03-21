// arrays


let arr = [1, 2, 3, 4, 5];
console.log(arr);
console.log(typeof arr);

// accessing elements of array
console.log(arr[2]);

//2. using constructor

let names = new Array("sarbendra", "sigdel", "aayush", "sajan");
console.log(names);
console.log(names[3]);
// to add elements at runntime
names.push("hello!!");
names.push("aryan");

// how to find size of array

console.log("size of array is", names.length);

//type of array is not fixed

let ar = ["a", "b", "c", ["abc ", "xyz"]];
console.log(ar[3][0]);
console.log(typeof ar);