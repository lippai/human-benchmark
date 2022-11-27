const typingText1 = document.querySelector(".innertext1");
const inpField1 = document.querySelector(".input-field1");
const typingText2 = document.querySelector(".innertext2");
const inpField2 = document.querySelector(".input-field2");
const typingText3 = document.querySelector(".innertext3");
const inpField3 = document.querySelector(".input-field3");
const typingText4 = document.querySelector(".innertext4");
const inpField4 = document.querySelector(".input-field4");
let text1=`Ej, mi a kő! tyúkanyó, kend
A szobában lakik itt bent?
Lám, csak jó az isten, jót ád,
Hogy fölvitte a kend dolgát!
Itt szaladgál föl és alá,
Még a ládára is fölszáll,
Eszébe jut, kotkodácsol,
S nem verik ki a szobából.`;
let text2= 
`Dehogy verik, dehogy verik!
Mint a galambot etetik,
Válogat a kendermagban,
A kiskirály sem él jobban.
Ezért aztán, tyúkanyó, hát
Jól megbecsűlje kend magát,
Iparkodjék, ne legyen ám
Tojás szűkében az anyám.`;
let text3=`Morzsa kutyánk, hegyezd füled,
Hadd beszélek mostan veled,
Régi cseléd vagy a háznál,
Mindig emberűl szolgáltál,
Ezután is jó légy, Morzsa,
Kedvet ne kapj a tyúkhusra,
Élj a tyúkkal barátságba'...
Anyám egyetlen jószága.`;
function show_hide(){
    var x1 = document.getElementById("Display1")
    var x2 = document.getElementById("Display2")
    var x3 = document.getElementById("Display3")
    var x4 = document.getElementById("Display4")

    if(x1.style.display==="none")
    {
        x1.style.display="block";
        x2.style.display="block";
        x3.style.display="block";
        x4.style.display="block";
    }
    else
    {
        x1.style.display="none"
        x2.style.display="none";
        x3.style.display="none";
        x4.style.display="none";
    }
}

{
    var text1array = text1.split("");
    text1array.forEach(span => {
        let spanTag1 = `<span>${span}</span>`;
        typingText1.innerHTML += spanTag1;
      });
    
    let charIndex1 = 0;
    
    function initTyping1(){
    const characters1 = typingText1.querySelectorAll("span");
    let typedChar1 = inpField1.value.split("")[charIndex1];
    
    if (typedChar1 == null){
        charIndex1--;
        characters1[charIndex1].classList.remove("incorrect", "correct");
      } else{
        if (characters1[charIndex1].innerText === typedChar1) {
          characters1[charIndex1].classList.add("correct");
        }
        else{
          characters1[charIndex1].classList.add("incorrect");
        }
        charIndex1++;
      }
    }
    inpField1.addEventListener("input", initTyping1);
}

{
    var text2array = text2.split("");
    text2array.forEach(span => {
        let spanTag2 = `<span>${span}</span>`;
        typingText2.innerHTML += spanTag2;
      });
    
    let charIndex2 = 0;
    
    function initTyping2(){
    const characters2 = typingText2.querySelectorAll("span");
    let typedChar2 = inpField2.value.split("")[charIndex2];
    
    if (typedChar2 == null){
        charIndex2--;
        characters2[charIndex2].classList.remove("incorrect", "correct");
      } else{
        if (characters2[charIndex2].innerText === typedChar2) {
          characters2[charIndex2].classList.add("correct");
        }
        else{
          characters2[charIndex2].classList.add("incorrect");
        }
        charIndex2++;
      }
    }
    inpField2.addEventListener("input", initTyping2);
}

{
    var text3array = text3.split("");
    text3array.forEach(span => {
        let spanTag3 = `<span>${span}</span>`;
        typingText3.innerHTML += spanTag3;
      });
    
    let charIndex3 = 0;
    
    function initTyping3(){
    const characters3 = typingText3.querySelectorAll("span");
    let typedChar3 = inpField3.value.split("")[charIndex3];
    
    if (typedChar3 == null){
        charIndex3--;
        characters3[charIndex3].classList.remove("incorrect", "correct");
      } else{
        if (characters3[charIndex3].innerText === typedChar3) {
          characters3[charIndex3].classList.add("correct");
        }
        else{
          characters3[charIndex3].classList.add("incorrect");
        }
        charIndex3++;
      }
    }
    inpField3.addEventListener("input", initTyping3);
}