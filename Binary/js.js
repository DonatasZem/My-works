'use strict';

const bntContainer = document.querySelector('.btn-container');
const btns = document.querySelector('.btn-container').querySelectorAll('button');
const pEl = document.querySelector('p');
const textEl = document.querySelector('.text');
const textarea = document.querySelector('textarea');
const encodeBtn = document.querySelector('.encode');
const decodeBtn = document.querySelector('.decode');

const binary = [
    {
        code: '01000001',
        letter: 'A'
    },
    {
        code: '01000010',
        letter: 'B'
    },
    {
        code: '01000011',
        letter: 'C'
    },
    {
        code: '01000100',
        letter: 'D'
    },
    {
        code: '01000101',
        letter: 'E'
    },
    {
        code: '01000110',
        letter: 'F'
    },
    {
        code: '01000111',
        letter: 'G'
    },
    {
        code: '01001000',
        letter: 'H'
    },
    {
        code: '01001001',
        letter: 'I'
    },
    {
        code: '01001010',
        letter: 'J'
    },
    {
        code: '01001011',
        letter: 'K'
    },
    {
        code: '01001100',
        letter: 'L'
    },
    {
        code: '01001101',
        letter: 'M'
    },
    {
        code: '01001110',
        letter: 'N'
    },
    {
        code: '01001111',
        letter: 'O'
    },
    {
        code: '01010000',
        letter: 'P'
    },
    {
        code: '01010001',
        letter: 'Q'
    },
    {
        code: '01010010',
        letter: 'R'
    },
    {
        code: '01010011',
        letter: 'S'
    },
    {
        code: '01010100',
        letter: 'T'
    },
    {
        code: '01010101',
        letter: 'U'
    },
    {
        code: '01010110',
        letter: 'V'
    },
    {
        code: '01010111',
        letter: 'W'
    },
    {
        code: '01011000',
        letter: 'X'
    },
    {
        code: '01011001',
        letter: 'Y'
    },
    {
        code: '01011010',
        letter: 'Z'
    },
    {
        code: '01100001',
        letter: 'a'
    },
    {
        code: '01100010',
        letter: 'b'
    },
    {
        code: '01100011',
        letter: 'c'
    },
    {
        code: '01100100',
        letter: 'd'
    },
    {
        code: '01100101',
        letter: 'e'
    },
    {
        code: '01100110',
        letter: 'f'
    },
    {
        code: '01100111',
        letter: 'g'
    },
    {
        code: '01101000',
        letter: 'h'
    },
    {
        code: '01101001',
        letter: 'i'
    },
    {
        code: '01101010',
        letter: 'j'
    },
    {
        code: '01101011',
        letter: 'k'
    },
    {
        code: '01101100',
        letter: 'l'
    },
    {
        code: '01101101',
        letter: 'm'
    },
    {
        code: '01101110',
        letter: 'n'
    },
    {
        code: '01101111',
        letter: 'o'
    },
    {
        code: '01110000',
        letter: 'p'
    },
    {
        code: '01110001',
        letter: 'q'
    },
    {
        code: '01110010',
        letter: 'r'
    },
    {
        code: '01110011',
        letter: 's'
    },
    {
        code: '01110100',
        letter: 't'
    },
    {
        code: '01110101',
        letter: 'u'
    },
    {
        code: '01110110',
        letter: 'v'
    },
    {
        code: '01110111',
        letter: 'w'
    },
    {
        code: '01111000',
        letter: 'x'
    },
    {
        code: '01111001',
        letter: 'y'
    },
    {
        code: '01111010',
        letter: 'z'
    },
    {
        code: '00100001',
        letter: '!'
    },
    {
        code: '00100010',
        letter: '"'
    },
    {
        code: '00100011',
        letter: '#'
    },
    {
        code: '00100100',
        letter: '$'
    },
    {
        code: '00100101',
        letter: '%'
    },
    {
        code: '00100110',
        letter: '&'
    },
    {
        code: '00100111',
        letter: `'`
    },
    {
        code: '00101000',
        letter: '('
    },
    {
        code: '00101001',
        letter: ')'
    },
    {
        code: '00101010',
        letter: '*'
    },
    {
        code: '00101011',
        letter: '+'
    },
    {
        code: '00101100',
        letter: ','
    },
    {
        code: '00101101',
        letter: '-'
    },
    {
        code: '00101110',
        letter: '.'
    },
    {
        code: '00101111',
        letter: '/'
    },
    {
        code: '00110000',
        letter: '0'
    },
    {
        code: '00110001',
        letter: '1'
    },
    {
        code: '00110010',
        letter: '2'
    },
    {
        code: '00110011',
        letter: '3'
    },
    {
        code: '00110100',
        letter: '4'
    },
    {
        code: '00110101',
        letter: '5'
    },
    {
        code: '00110110',
        letter: '6'
    },
    {
        code: '00110111',
        letter: '7'
    },
    {
        code: '00111000',
        letter: '8'
    },
    {
        code: '00111001',
        letter: '9'
    },
    {
        code: '00111111',
        letter: '?'
    },
    {
        code: '01000000',
        letter: '@'
    },
    {
        code: '01011111',
        letter: '_'
    },
    {
        code: '00100000',
        letter: ` `
    }

];


class App {
    static textToBinary() {
        if(textarea.value !== '') {
            let text = [];
            let a = textarea.value.split('');
            for(let i =0; i <a.length; i++) {
                binary.find(num => {
                    if(a[i] === num.letter) {
                        text.push(num.code);
                    }
                })
            }
    
            textEl.innerHTML = text.join(' ');
        } else {
            alert('Type something');
        }
    }
    
    static binaryToText(){
        if(textarea.value !== '') {
            let text = [];
            let a = textarea.value.split(' ');
             for(let i =0; i <a.length; i++) {
                 binary.find(num => {
                     if(a[i] === num.code) {
                         text.push(num.letter);
                     }
                 })
             }
    
             textEl.innerHTML = text.join('');
        } else {
            alert('Type something');
        }
    }
}

bntContainer.addEventListener('click', function(e) {
        btns.forEach((btn) => {
            if(btn.classList.value === 'active') {
                btn.classList.remove('active');
                btn.classList.add('notActive');
                pEl.innerHTML = 'Text to binary';
                encodeBtn.style.display = 'block';
                decodeBtn.style.display = 'none';
                textarea.value = '';
                textEl.innerHTML = '';
            } else {
                btn.classList.remove('notActive');
                btn.classList.add('active');
                pEl.innerHTML = 'Binary to text';
                encodeBtn.style.display = 'none';
                decodeBtn.style.display = 'block';
                textarea.value = '';
                textEl.innerHTML = '';
            }
        });
})

encodeBtn.addEventListener('click', App.textToBinary);
decodeBtn.addEventListener('click', App.binaryToText);


