let price = document.querySelector("#price");

price.addEventListener('keydown', ()=> {
    let content = price.value.split("");
  content.forEach(element => {
        if(element == ","){
            element = "."
        }
    });
})



// price.forEach(element => {
//     if (element == ",") {
//         return element = "."
//     }
// });