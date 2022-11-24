const startBtn = document.querySelector('#start')
const screens = document.querySelectorAll('.screen')
const screens1 = document.querySelectorAll('.screen1')
const timeList = document.querySelector('#time-list')
const difficultyList = document.querySelector('#difficulty-list')
const timeEl = document.querySelector('#time')
const board = document.querySelector('#board')
const colors = ['red', 'green', 'blue', 'white', 'purple']
const difficult = 'easy'
let score = 0
let time = 0
let accuracy = 0



startBtn.addEventListener('click', (event) => {
    event.preventDefault()
    screens1[0].classList.add('down')
    screens[0].classList.add('up')
})


timeList.addEventListener('click', event => {
    if (event.target.classList.contains('time-btn')){
       time = parseInt(event.target.getAttribute('data-time'))
       screens[0].classList.add('down')
       screens[1].classList.add('up')
    }
})

difficultyList.addEventListener('click', event => {
        screens[1].classList.add('down')
       startGame()
})

board.addEventListener('click', event =>{
    if (event.target.classList.contains('circle')){
        score++
        event.target.remove()
        createRandomCircle()
    }

    if (event.target.classList.contains('board')){
        accuracy++
       if (document.querySelector(".circle")) {
        document.querySelector(".circle").remove()
        createRandomCircle()
       }
    }
})


function startGame() {
    screens[2].classList.add('up')
    setInterval(decreaseTime, 1000)
    createRandomCircle()
    
    setTime(time)
}

function decreaseTime() {
    if (time === 0) {
        finishGame()
    } else {
        let current = --time
        if (current < 10) {
           current = `0${current}` 
        }
        setTime(current)
    }
 
}

function setTime(value) {
    timeEl.innerHTML = `00:${value}`
}

function finishGame() {
    timeEl.parentNode.classList.add('hide')
    //let totalAccuracy = getAccuracy()
    board.innerHTML = `
        <div class="row">
            <div class="col text-center mb-5">
            <h1>Score: <span class="primary">${score}</span></h1>
            <form action="feltolt.php" method="POST">
                <input type="hidden" id="btnClickedValue" name="btnClickedValue" value="${score}" />
                <button type="submit" value="Elküld" class="btn btn-primary">Submit</button>
            </form>
            </div>
        </div>`
}


function createRandomCircle() {
    const circle = document.createElement('div')
    const size = getRandomNumber(10, 60)
    const {width, height} = board.getBoundingClientRect()
    const x = getRandomNumber(0, width - 2* size)
    const y = getRandomNumber(0, height - 2* size)
    const color = getRandomColor()

    circle.classList.add('circle')
    circle.style.width = `${size}px`
    circle.style.height = `${size}px`
    circle.style.top = `${y}px`
    circle.style.left = `${y}px`
    circle.style.background = color

    board.append(circle)
}

function getRandomNumber(min, max) {
   return Math.ceil(Math.random() * (max-min) + min)
}

function getRandomColor(){
    return colors[Math.floor(Math.random() * colors.length)]
}

function getAccuracy() {
    return (score/(accuracy + score)).toFixed(2)
}

document.getElementById("btnClickedValue").value = score