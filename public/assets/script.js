<<<<<<< HEAD
<<<<<<<< HEAD:public/assets/script.js

const cartes = document.querySelectorAll('.cartes_row1')
cartes.forEach((carte, index) => {
    carte.addEventListener('click', function (){
        fetch('/play_card?id=' + index)
        .then(response => response.json())
        .then(data => console.log(data))
    })
})
========
// const cartes = document.querySelectorAll('.cartes_row1')
// cartes.forEach((carte, index) => {
//     carte.addEventListener('click', function (){
//         console.log("Mon fetch API")
//         fetch('/play_card?id=' + index)
//         .then(response => response.json())
//         .then(data => console.log(data))
//     })
// })
>>>>>>>> e1d538213db6efbf210f662e6d5d62df1c3284dd:src/script.js
=======
const cartes = document.querySelectorAll('.cartes_row1')
cartes.forEach((carte, index) => {
    carte.addEventListener('click', function() {
        fetch('/play_card?id=' + index)
            .then(response => response.json())
            .then(data => console.log(data))
    })
})
>>>>>>> e1d538213db6efbf210f662e6d5d62df1c3284dd
