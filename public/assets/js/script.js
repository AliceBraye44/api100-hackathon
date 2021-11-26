const cartes = document.querySelectorAll('.memory-card');

let hasFlippedCard = false;
let lockBoard = false;
let firstCard, secondCard;

cartes.forEach(card => card.addEventListener('click', flipCard));

function flipCard() {
    if (lockBoard) return;
    if (this === firstCard) return;

    this.classList.add('flip');

    if (!hasFlippedCard) {
        hasFlippedCard = true;
        firstCard = this;
        fetch('/play_card?id=' + this.id)

        return;
    }

    secondCard = this;
    fetch('/play_card?id=' + this.id)
        .then(response => response.json())
        .then(data => {
            console.log(data.win);
            data.win ? disableCards() : unflipCards();
            if (data.winTheGame) {
                window.location.href="/results"
            }
        })

}

function disableCards() {
    firstCard.removeEventListener('click', flipCard);
    secondCard.removeEventListener('click', flipCard);

    resetBoard();
}

function unflipCards() {
    lockBoard = true;

    setTimeout(() => {
        firstCard.classList.remove('flip');
        secondCard.classList.remove('flip');

        resetBoard();
        //firstCard.classList.remove('flip');
        //secondCard.classList.remove('flip');

        //resetBoard();
    }, 1500);
}

function resetBoard() {
    [hasFlippedCard, lockBoard] = [false, false];
    [firstCard, secondCard] = [null, null];
}
