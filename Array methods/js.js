"use strict";

// elements
const yourArrEl = document.getElementById('your-array');
const inputEl = document.getElementById('creating-array-input');
const resultDiv = document.getElementById('result-div');
const mainPushDiv = document.querySelector('.main-push-div')
const mainPushIpnut = document.getElementById('main-push-div-input');

const nameH4 = document.getElementById('name');
const pEl = document.getElementById('text');


// buttons
const createBtn = document.getElementById('create-btn');
const popBtn = document.getElementById('pop');
const pushBtn = document.getElementById('push');
const shiftBtn = document.getElementById('shift');
const unshiftBtn = document.getElementById('unshift');
const pushBtnDiv = document.getElementById('btn-inside-div-push');
const unshiftBtnDiv = document.getElementById('btn-inside-div-unshift');



//

// cia viska sukuriu 
let array;
let resultArr;
function creatingArray() {
    if(!inputEl.value == '') {
        yourArrEl.innerHTML = '';
        array = inputEl.value.split(',');
        resultArr = inputEl.value.split(',');
        creatingResult();
            for(let i =0; i<array.length; i++) {
                const aEl = document.createElement('a');
                aEl.classList.add('your-array-a');
                const aText = document.createTextNode(array[i]);
                aEl.appendChild(aText);
                yourArrEl.appendChild(aEl);
        }
    } else {
        alert('type something');
    }
}

// sukuriu antra masyva kuris bus atvaizduotas Result :
function creatingResult() {
    resultDiv.innerHTML = '';
        for(let i =0; i<resultArr.length; i++) {
            const aEl = document.createElement('a');
            aEl.classList.add('your-array-a');
            const aText = document.createTextNode(resultArr[i]);
            aEl.appendChild(aText);
            resultDiv.appendChild(aEl);
    }
    arrLength();
}

// funkcija length atvaizduoti
function arrLength() {
    const pLengthEl = document.getElementById('result-length');
    pLengthEl.innerHTML = '';
    const lengthText = document.createTextNode(`Array length: ${resultArr.length}`);
    pLengthEl.appendChild(lengthText);
}

////////////////////////////
function shiftArr() {
    resultArr.shift();
    creatingResult();
}

function popArr() {
    resultArr.pop();
    creatingResult();
}
///////////////////////////

// creating array
createBtn.addEventListener('click', creatingArray);
//pop method
popBtn.addEventListener('click', popArr);
//shift method
shiftBtn.addEventListener('click', shiftArr);
//Opening window with push method
pushBtn.addEventListener('click', function() {
    if(array == undefined) {
        alert('Your array is not created');
    } else {
        unshiftBtnDiv.style.display = 'none';
    pushBtnDiv.style.display = 'inline-block';
    nameH4.innerHTML = '';
    pEl.innerHTML = '';
    const h4Text = document.createTextNode('Push');
    const pText = document.createTextNode('Push method used to......');
    nameH4.appendChild(h4Text);
    pEl.appendChild(pText);
    mainPushDiv.style.display = 'block';
    }
    
});
//Opening window with unshift method
unshiftBtn.addEventListener('click', function() {
    if(array == undefined) {
        alert('Your array is not created');
    } else {
        pushBtnDiv.style.display = 'none';
        unshiftBtnDiv.style.display = 'inline-block';
         nameH4.innerHTML = '';
         pEl.innerHTML = '';
         const h4Text = document.createTextNode('Unshift');
         const pText = document.createTextNode('Unshift method used to......');
         nameH4.appendChild(h4Text);
         pEl.appendChild(pText);
         mainPushDiv.style.display = 'block';
    }
});



pushBtnDiv.addEventListener('click', function() {
    let splitArr = mainPushIpnut.value.split(',');
    resultArr = resultArr.concat(splitArr);
    creatingResult();
    mainPushDiv.style.display = 'none';
    mainPushIpnut.value = '';
});


unshiftBtnDiv.addEventListener('click', function() {
    let splitArr = mainPushIpnut.value.split(',');
    for(let b = splitArr.length - 1; b >= 0; b--) {
           resultArr.unshift(splitArr[b]);
    };
    console.log(resultArr);
    creatingResult();
    mainPushDiv.style.display = 'none';
    mainPushIpnut.value = '';
});

