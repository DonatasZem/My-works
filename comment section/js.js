"use strict";
// elements

const nameIpnut = document.getElementById('nameinput');
const textAreaEl = document.querySelector('textarea');
const btn = document.getElementById('post-btn');
const divCommentEl = document.querySelector('.comment-section');
const commentsDiv = document.querySelector('.comments');
// Event listeners
btn.addEventListener('click', createPost);
divCommentEl.addEventListener('click', commDelete);

function createPost(e) {
    // not refreshing page after submit
   e.preventDefault();

if(nameIpnut.value === '' || textAreaEl.value === '') {
    alert('Please fill up fields');
} else {

    ////////////////////
   const div1 = document.createElement('div');
   div1.classList.add('background-color');
   //
   const div2 = document.createElement('div');
   div2.classList.add('comments');
   //
   const icon = document.createElement('i');
   icon.classList.add('fa');
   icon.classList.add('fa-user-circle-o');
   //
   const h4 = document.createElement('h4');
   h4.innerText = nameIpnut.value;
   //
   const p = document.createElement('p');
   p.innerText = textAreaEl.value;
   //
   const createDeleteBtn = document.createElement('button');
   createDeleteBtn.innerText = 'delete';
   createDeleteBtn.classList.add('delete');
   const createRedirectBtn = document.createElement('button');
   createRedirectBtn.innerText = 'change';
   createRedirectBtn.classList.add('change');
   //
   div2.appendChild(icon);
   div2.appendChild(h4);
   div2.appendChild(p);
   //
   div1.appendChild(div2);
   div1.appendChild(createDeleteBtn);
   div1.appendChild(createRedirectBtn);
   //
   divCommentEl.appendChild(div1);
   nameIpnut.value = '';
   textAreaEl.value = '';

}

}

// comments parrent element

function commDelete(e) {
     let target = e.target;
     if(target.classList[0] === 'delete') {
         target.parentElement.remove();
     }

     if(target.classList[0] === 'change') {
        changeComment(target);
     }

     if(target.classList[0] === 'secondPost') {
         changedCommentPost(target);
     }
}

function changeComment(e) {
    const newTextArea = document.createElement('textarea');
        newTextArea.id = 'tekstas';
        e.parentElement.firstChild.appendChild(newTextArea);
        newTextArea.innerText = e.parentElement.firstChild.childNodes[2].innerText;
        const commPostBtn = document.createElement('button');
        commPostBtn.classList.add('secondPost');
        commPostBtn.innerText = 'post';
        e.parentElement.appendChild(commPostBtn);
        e.parentElement.firstChild.childNodes[2].remove();
        e.parentElement.childNodes[1].remove();
        e.parentElement.childNodes[1].remove();
}

function changedCommentPost(e) {
    const tekstasEl = document.getElementById('tekstas');
         const pEl = document.createElement('p');
         pEl.innerText = tekstasEl.value;
        ///////
         const createDeleteBtn = document.createElement('button');
         createDeleteBtn.innerText = 'delete';
         createDeleteBtn.classList.add('delete');
         const createRedirectBtn = document.createElement('button');
         createRedirectBtn.innerText = 'change';
         createRedirectBtn.classList.add('change');
         e.parentElement.appendChild(createDeleteBtn);
         e.parentElement.appendChild(createRedirectBtn);
        ///////
         e.parentElement.firstChild.appendChild(pEl);
         e.parentElement.firstChild.childNodes[2].remove();
         e.parentElement.childNodes[1].remove();
}