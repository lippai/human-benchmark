
const clickArea = document.querySelector(".click-area");
const start = document.getElementById("start");
const displayText = document.querySelector(".display-text");
const displayText2 = document.querySelector(".display-text2");
const displayTitle = document.querySelector(".title");
const lvText = document.querySelector(".level-text");
const textinp = document.getElementById("input");
const submit = document.getElementById("submitBtn");
const next = document.getElementById("nextBtn");
const restart = document.getElementById("restartBtn");
const save = document.getElementById("saveBtn");



let answer = 0;
let number = 0;
let seconds = 2.0;
let level = 1;


start.addEventListener("click", () => {

    console.log("clicked");
    displayText.textContent = "";
    displayTitle.textContent = "";
    start.style.visibility = "hidden";
   // textinp.style.visibility = "visible";
   // submit.style.visibility = "visible";
   // lvText.textContent = "Level " + level;
    
    
    play();
})


submit.addEventListener("click", () => {

    answer = textinp.value;
    
    if(answer == number) {
        
        correctAnswer();
      
    }
    else {
        incorrectAnswer();
    }
})


next.addEventListener("click", () => {
    textinp.value = "";
    play();
})

restart.addEventListener("click", () => {
    seconds = 2.0;
    level = 1;
    textinp.value = "";
    clickArea.style.backgroundColor = "rgb(13, 186, 230)";
    restart.style.visibility = "hidden";
    save.style.visibility = "hidden";
    para.innerHTML="";
    play();

})



async function play() {


    lvText.style.visibility = "hidden";
    //submit.style.visibility = "hidden";
    //textinp.style.visibility = "hidden";
    displayText2.style.visibility = "hidden";
    next.style.visibility = "hidden";

    let numberText = "";

    for(let i = 0; i < level; i++) {
        numberText += (Math.floor(Math.random() * 10)).toString();
    }

    number = Number(numberText);
    displayText.textContent = number.toString();
    displayText.style.fontSize = "36px";
    console.log(number);

    await sleep(seconds);

    console.log("slept");

    
    askNumber();
 
}

async function sleep(secs) {
    return new Promise(resolve => setTimeout(resolve, secs * 1000));
}

function askNumber() {
    displayText.style.fontSize = "24px";
    displayText.textContent = "What was the number?";
    submit.style.visibility = "visible";
    textinp.style.visibility = "visible";

}

function correctAnswer() {
    submit.style.visibility = "hidden";
    textinp.style.visibility = "hidden";
    lvText.style.visibility = "visible";
    displayText2.style.visibility = "visible";
    next.style.visibility = "visible";
    lvText.textContent = "Level " + level;

    displayText.textContent = "Number: " + number;
    displayText2.textContent = "Your answer: " + answer;

    next.style.visibility = "visible";

    level += 1;
    seconds += 0.5;

    console.log("Correct answer");
}

function incorrectAnswer() {

    submit.style.visibility = "hidden";
    textinp.style.visibility = "hidden";
    displayText2.style.visibility = "visible";
    lvText.textContent = "Level " + level;

    displayText.textContent = "Number: " + number;
    displayText2.textContent = "Your answer: " + answer;

    restart.style.visibility = "visible";
    save.style.visibility = "visible";

    clickArea.style.backgroundColor = "#c11a2a";

    addElement();

    console.log("Incorrect answer");


}

function addElement() {

    // create a new div element
    const para = document.createElement("p");
  
    // and give it some content
    para.innerHTML =`<form action="feltolt.php" method="POST">
    <input type="hidden" id="btnClickedValue" name="number" value="${level-1}" />
    <button type="submit" value="Elküld" class="btn btn-primary">Submit</button>
    </form>`;
  
    // Append to another element:
    document.getElementById("text").appendChild(para);
  }