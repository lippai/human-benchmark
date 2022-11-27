const typingText1 = document.querySelector(".innertext1");
const inpField1 = document.querySelector(".input-field1");
const typingText2 = document.querySelector(".innertext2");
const inpField2 = document.querySelector(".input-field2");
const typingText3 = document.querySelector(".innertext3");
const inpField3 = document.querySelector(".input-field3");
const typingText4 = document.querySelector(".innertext4");
const inpField4 = document.querySelector(".input-field4");
let text1="Főldiekkel játszó Égi tűnemény, Istenségnek látszó Csalfa, vak Remény! Kit teremt magának A boldogtalan, S mint védangyalának, Bókol úntalan. Síma száddal mit kecsegtetsz? Mért nevetsz felém? Kétes kedvet mért csepegtetsz Még most is belém? Csak maradj magadnak! Biztatóm valál; Hittem szép szavadnak: Mégis megcsalál.";
let text2="Kertem nárcisokkal Végig űltetéd; Csörgő patakokkal Fáim éltetéd; Rám ezer virággal Szórtad a tavaszt S égi boldogsággal Fűszerezted azt. Gondolatim minden reggel, Mint a fürge méh, Repkedtek a friss meleggel Rózsáim felé. Egy híjját esmértem Örömimnek még: Lilla szívét kértem; S megadá az ég.";
let text3="Jaj, de friss rózsáim Elhervadtanak; Forrásim, zőld fáim Kiszáradtanak; Tavaszom, vígságom Téli búra vált; Régi jó világom Méltatlanra szállt. Óh! csak Lillát hagytad volna Csak magát nekem: Most panaszra nem hajolna Gyászos énekem. Karja közt a búkat elfelejteném, S a gyöngykoszorúkat Nem irígyleném.";
let text4="Hagyj el, óh Reménység! Hagyj el engemet; Mert ez a keménység Úgyis eltemet. Érzem: e kétségbe Volt erőm elhágy, Fáradt lelkem égbe, Testem főldbe vágy. Nékem már a rét hímetlen, A mező kisűlt, A zengő liget kietlen, A nap éjre dűlt. Bájoló lágy trillák! Tarka képzetek! Kedv! Remények! Lillák! Isten véletek! ";

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

{
    var text4array = text4.split("");
    text4array.forEach(span => {
        let spanTag4 = `<span>${span}</span>`;
        typingText4.innerHTML += spanTag4;
      });
    
    let charIndex4 = 0;
    
    function initTyping4(){
    const characters4 = typingText4.querySelectorAll("span");
    let typedChar4 = inpField4.value.split("")[charIndex4];
    
    if (typedChar4 == null){
        charIndex4--;
        characters4[charIndex4].classList.remove("incorrect", "correct");
      } else{
        if (characters4[charIndex4].innerText === typedChar4) {
          characters4[charIndex4].classList.add("correct");
        }
        else{
          characters4[charIndex4].classList.add("incorrect");
        }
        charIndex4++;
      }
    }
    inpField4.addEventListener("input", initTyping4);
}