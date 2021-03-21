// for-in loop



let st1 = {
    name: "sarbendra sigdel",
    phone: 960672399,
    address: "thankot",
};

// console.log(st1);

for (let k in st1) {
    console.log(`${k}=>${st1[k]}`);
}

let ar = ["abc", "xyz", "efg"];

for (var i in ar) {
    console.log(ar[i]);
}


//for of loop

let arr = ["john", "smith", "sigdel"];


for (let item of arr) {
    console.log(item);
}