const clickArea = document.querySelector(".click-area");
const displayText = document.querySelector(".display-text");
const displayTitle = document.querySelector(".title");
const scoreElements = document.querySelectorAll(".score");

const scoreHistory = [];


const MINIMUM_MS_TILL_CHANGE = 3000;
const MAXIMUM_MS_TILL_CHANGE = 10000;

let msSinceEpochOnTimeout = 0;
let waitingForClick = false;

let round = 0;
let average = 0;

function play() {

    if(round == 5) {
        
        average = scoreHistory.reduce((a, b) => a + b, 0) / scoreHistory.length;
        clickArea.style.backgroundColor = "#0099FF";
        displayText.textContent = "Your average score is " + Math.floor(average) + " ms";

    }
    else {
        const msTillChange = Math.floor(Math.random() * (MAXIMUM_MS_TILL_CHANGE - MINIMUM_MS_TILL_CHANGE)) + MINIMUM_MS_TILL_CHANGE;

    clickArea.style.backgroundColor = "#ff0000";


    displayText.textContent = "";
    displayTitle.textContent = "";

        setTimeout(() => {

            msSinceEpochOnTimeout = Date.now();
    
            clickArea.style.backgroundColor = "#008000";
            waitingForClick = true;
    
        }, msTillChange);
    }
        
}


function addScore(score) {
    // add score to array at index 0
    scoreHistory.unshift(score);


    for(let i = 0; i < Math.min(scoreHistory.length, 5); i++) {
        const score = scoreHistory[i];

        scoreElements[i].textContent = score + ' ms';
    }
}

clickArea.addEventListener("click", () => {


    
        if(waitingForClick) {
            const score = Date.now() - msSinceEpochOnTimeout;
    
            waitingForClick = false;
            displayText.textContent = 'Your time was ' + score + ' ms! Click to play again.';
            clickArea.style.backgroundColor = "#0099FF";
            round += 1;
            console.log(round);
            addScore(score);
        }
        else {
            play();
        }

});