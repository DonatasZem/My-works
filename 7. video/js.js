"use strict";

// elements

const video = document.querySelector('.video-container');
const btn = document.querySelector('.btn');

btn.addEventListener('click', function() {
    // does not have it
    if(!btn.classList.contains('slide')) {
        btn.classList.add('slide');
        video.pause();
    } else {
        btn.classList.remove('slide');
        video.play();
    }
})

// preloader

const preloder = document.querySelector('.preloader');

window.addEventListener('load', function() {
    preloder.classList.add('hide-preloader');
});