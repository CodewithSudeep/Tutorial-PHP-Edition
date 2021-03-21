//function

// tradiational method of creating function

function sar() {

    console.log("hello world");
    console.log("how are you?");
}

sar();
sar();

//function to sum of 2 numbers with arguments or parameter 

function sum(a, b) {

    let c = a + b;
    return c;
}
let s = sum(2, 4);
console.log(s);


//arrow function new type of function

const tocelcius = (fahrenheit) => {
    let result = (5 / 9) * (fahrenheit - 32);
    return result;
};
let c = tocelcius(108);
console.log(c);