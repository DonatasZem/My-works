"use strict";

const months = ['sausio', 'vasario', 'kovo', 'balandžio', 'gegužės', 'birželio', 'liepos', 'rugpjūčio', 'rugsėjo', 'spalio', 'lapkričio', 'gruodžio'];
const days = ['sekmadienis','pirmadienis', 'antradienis', 'trečiadienis', 'ketvirtadienis', 'penktadienis', 'šeštadienis'];

const mainDiv = document.querySelector('.main');
const dateDiv = document.querySelector('.date');
const loginDiv = document.querySelector('.login');
const inputEl = document.querySelector('.pass');
const btn = document.querySelector('button');
const passError = document.querySelector('.alert');

function creatingHTML() {
    let a = '';
    for(let i =0; i<=5; i++) {
        a = a + `<h1>Hello world!</h1>`;
    }
    const div = document.createElement('div');
    div.innerHTML = a;
    document.body.appendChild(div);
}

function hello() {

    const date = new Date();
    const day = date.getDate(); //Returns the day of the month (1–31) for the specified date according to local time
    const weekDay = date.getDay(); //Returns the day of the week (0–6) for the specified date according to local time.
    const month = date.getMonth(); //Returns the month (0–11) in the specified date according to local time.
    const hours = date.getHours(); //Returns the hour (0–23) in the specified date according to local time.
    let minutes = date.getMinutes(); //Returns the minutes (0–59) in the specified date according to local time.

    if(minutes <= 9) {
        minutes = '0' + minutes;
    }

    
    
    dateDiv.innerHTML = `
    <h4>${hours}:${minutes}</h4>
    <p>${months[month]} ${day} d., ${days[weekDay]}</p>
    `;

}

setInterval(hello, 1000);

mainDiv.addEventListener('click', function() {
    dateDiv.style.display = 'none';
    mainDiv.classList.add('blur');
    setTimeout(function() {
        loginDiv.style.display = 'block';
    }, 1000);
});

btn.addEventListener('click', function() {
    if(inputEl.value === 'admin') {
        loginDiv.style.display = 'none';
        mainDiv.style.height = 0+'vh';
        setTimeout(creatingHTML, 1000);
    } else {
        inputEl.value = '';
        passError.innerHTML = `<p class="error">incorrect password</p>`;
    }
});




