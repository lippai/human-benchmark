const typingText = document.querySelector(".innertext");
const inpField = document.querySelector(".input-field");
const timeTag = document.querySelector(".timer");
const timeText = document.getElementById("timetext");
const wpmTag = document.getElementById("wpm");
const gameMessage = document.getElementById("score")

function randomParag(){
  let rand = Math.floor(Math.random() * paragrapsh.length);
  paragrapsh[rand].split("").forEach(span => {
    let spanTag = `<span>${span}</span>`;
    typingText.innerHTML += spanTag;
  });
  document.addEventListener("keydown", () => inpField.focus());
} 

let charIndex = 0;
let correct = 0;
let mistake = 0;
let wpm = 0;
let score;

function initTyping(){

  const characters = typingText.querySelectorAll("span");
  let typedChar = inpField.value.split("")[charIndex];
  if(charIndex < characters.length - 1 && timeLeft > 0){
    if(!isTyping){
      timer = setInterval(initTimer, 1000);
      isTyping = true;
    }
    if (typedChar == null){
      charIndex--;
      characters[charIndex].classList.remove("incorrect", "correct");
    } else{
      if (characters[charIndex].innerText === typedChar) {
        characters[charIndex].classList.add("correct");
        correct++;
        console.log("correct");
      }
      else{
        mistake++;
        console.log(mistake);
        characters[charIndex].classList.add("incorrect");
        console.log("incorrect");
      }
      charIndex++;
    }
    wpm = wpm < 0 || !wpm || wpm === Infinity ? 0 : wpm;
    wpm = Math.round((((charIndex - mistake) / 5) / (maxTime - timeLeft))*60);
    wpmTag.innerText = wpm;
  } else{
    
    clearInterval(timer);
    score = wpm;
    console.log(score);
    gameMessage.style.display = "block";
    //document.getElementById("typing").value = "5";
  }
  
}

randomParag();
inpField.addEventListener("input", initTyping);

var isTyping = false;
let timer,
maxTime = 30,
timeLeft = maxTime;



function initTimer(){
  if(timeLeft > 0){
    timeLeft--;
    timeText.innerText = timeLeft;
  } else{
    clearInterval(timer);
    gameMessage.style.display = "block";
    document.getElementById("typing").value = wpm.toString();
  }
}











