const clickArea = document.querySelector(".click-area");
const displayText = document.querySelector(".display-text");
const displayTitle = document.querySelector(".title");
const scoreElements = document.querySelectorAll(".score");

const scoreHistory = [];


const MINIMUM_MS_TILL_CHANGE = 2000;
const MAXIMUM_MS_TILL_CHANGE = 5000;

let msSinceEpochOnTimeout = 0;
let waitingForClick = false;

let round = 1;
let best = 1000;

let clicks = 0;

let canClick = true;



function play() {

    if(round > 3) {
        
        clickArea.style.backgroundColor = "#0099FF";
        displayText.style.color = "white";
        displayText.style.left = "550px";
        displayText.style.top = "315px";
        displayText.textContent = "Your best score is " + best + " ms";

    }
    else {

            const msTillChange = Math.floor(Math.random() * (MAXIMUM_MS_TILL_CHANGE - MINIMUM_MS_TILL_CHANGE)) + MINIMUM_MS_TILL_CHANGE;

            clickArea.style.backgroundColor = "#ff0000";


            displayText.textContent = "";
            displayTitle.textContent = "";

            setTimeout(() => {

                        if(clicks > round) {
                            console.log("You clicked too much!");
                            displayText.textContent = "You clicked too soon!";
                            displayText.style.position = "absolute";
                            displayText.style.color = "white";
                            displayText.style.left = "550px";
                            displayText.style.top = "315px";
                            clickArea.style.backgroundColor = "#0099FF";
                            canClick = false;
                        
                        
                        }
                        else {
                            msSinceEpochOnTimeout = Date.now();
    
                            clickArea.style.backgroundColor = "#008000";
                            waitingForClick = true;
                            
                        }
    
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


    if(canClick) {

        clicks += 1;
        console.log("clicks: " + clicks);
        console.log("rounds: " + round);
        
        
        if(waitingForClick) {
            const score = Date.now() - msSinceEpochOnTimeout;
    
            waitingForClick = false;
            displayText.textContent = 'Your time was ' + score + ' ms! Click to play again.';
            displayText.style.color = "white";
            displayText.style.position = "absolute";
            displayText.style.left = "450px";
            displayText.style.top = "315px";
            
            clickArea.style.backgroundColor = "#0099FF";
            addScore(score);
            round += 1;
            clicks -= 1;

            if(score < best) {
                best = score;
            }
        }
        else {
            play();
        }

    }

        

});


