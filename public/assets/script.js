
const cartes = document.querySelectorAll('.cartes_row1')
cartes.forEach((carte, index) => {
    carte.addEventListener('click', function (){
        fetch('/play_card?id=' + index)
        .then(response => response.json())
        .then(data => console.log(data))
    })
})