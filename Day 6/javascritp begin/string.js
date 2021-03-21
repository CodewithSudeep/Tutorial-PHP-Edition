let message = 'hello world i am sarbendra';
let msg = "sarbendra";
let mess = new String('sigdel');
console.log(message);
console.log(msg);
console.log(mess);
console.log(typeof message);
let sig = `my
name
is 
khan`;
console.log(sig);
let a = 12;
let b = 16;
let c = a + b;
console.log("the sum of  " + a + " and " + b + " is " + c);
console.log(`the sum of ${a} and ${b} is ${c}`);
// length
let len = sig.length;
console.log("length", len);
// OR
console.log(sig.length);
// concat
let ans = message.concat(" ",
    sig);
console.log(ans);
// charAt
let ch = sig.charAt(12);
console.log(ch);
// indexOf
let index = sig.indexOf("m");
console.log(index);

//lastindexof
let opp = sig.lastIndexOf("k");
console.log(opp);

//.touppercase and tolowercase
// let upper = sig.toUpperCase();
// console.log(upper);
console.log(sig.toLowerCase());

//substring

let sub = sig.substring(2, 6);
console.log(sub);


//startsWith
console.log(sig.startsWith("sar"));


//endswith

console.log(sig.endsWith("o"));

//split

let sp = message.split(" ");
console.log(typeof sp);

console.log(sp);
console.log(sp[0]);
console.log(sp[4]);

//trim
let s2 = "  sar   ";
console.log(s2.trim());
console.log(s2);