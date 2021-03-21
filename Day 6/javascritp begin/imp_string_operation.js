// 5 important string operation

//check equality of 2 strings

let st1 = "javascript";
let st2 = "javascript";
console.log(st1 == st2);

let st3 = new String("javascript");
let st4 = new String("javascript");
console.log(st3 == st4);
// console.log( * st3 == * st4); --> not valid!!

//2. compare two string

let s1 = "A";
let s2 = "B";

console.log(s1.localeCompare(s2));

//3.replace certain word with another
//replace function

let olds = "i hate javascript";
let news = olds.replace("hate", "love");
console.log(news);

//4.accessing character

console.log(olds[0]);

//5.converting string to array using split

console.log(olds.split(" "));
console.log(olds.split(""));