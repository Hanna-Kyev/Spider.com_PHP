"use strict"

// let obj = {
//     name: "Hello",
//     last_name: "World"

// };

// // function myF(){
// //     h1.style.fontSize = "4rem";
// // }

// document.body.style.backgroundColor = "green";
// document.body.style.color = "white";
// // let h1 = document.getElementById("head1");
// let h1 = document.getElementsByTagName("h1")[0];
// h1.onclick = function(){
//     h1.style.fontSize = "4rem";
// };
// // h1.style.fontSize = "4rem";
// // console.dir(h1);
// let div = document.getElementsByTagName('div');
// div[0].style.color="yellow";
// console.dir(document.body);


// let x = 12;
// let y = 22;
// let o ='+';

// function calc(x,y,o){
//     if (o == '+'){
//         return x+y;
//     }   else if(o=='-'){
//         return x-y;
//     }   else if(o=='*'){
//         return x*y;
//     }   else if(o=='/'){
//         return x/y;
//     }   else{
//         return "Error"
//     }
// }

// console.log(calc(33442,888888,'/'));

const listDesire = document.getElementById('listDesire');
let choose = document.querySelector('.choose');
choose.onclick = function(){
    let curVal = listDesire.textContent;
    listDesire.textContent = +(curVal) + 1;
    // console.dir(listDesire);
}