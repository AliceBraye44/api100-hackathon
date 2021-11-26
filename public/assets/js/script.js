
// PARTIE TIMER
function countdown(elementName, minutes, seconds) {
    var element, endTime, hours, mins, msLeft, time;

    function twoDigits(n) {
        return (n <= 9 ? "0" + n : n);
    }

    function updateTimer() {
        msLeft = endTime - (+new Date);
        if (msLeft < 1000) {
            element.innerHTML = " Oops ! Time is up!";
                window.location.href="/resultsloose"
        } else {
            time = new Date(msLeft);
            hours = time.getUTCHours();
            mins = time.getUTCMinutes();
            element.innerHTML = (hours ? hours + ':' + twoDigits(mins) : mins) + ':' + twoDigits(time.getUTCSeconds());
            setTimeout(updateTimer, time.getUTCMilliseconds() + 500);
        }
    }

    element = document.getElementById(elementName);
    endTime = (+new Date) + 1000 * (60 * minutes + seconds) + 500;
    updateTimer();
}
countdown("timer", 0, 2);


// PARTIE POUR TOUT LE MEMORY GAME AVEC LE RETOURNEMENT DES CARTES
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

