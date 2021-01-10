"use strict";
console.log("Hello");

// buves masyvas let photosName = ["img_1.jpg","img_2.jpg","img_3.jpg"];


let myDiv = document.querySelector(".container-photo"); // pasigaunu elementa
// lightbox elementai
let k = 0;
const lightbox = document.querySelector(".lightbox");
const lightbox_img = document.querySelector("#lightbox-img");
const exit = document.getElementById("exit-from-lightbox");
const right_arrow = document.getElementById("right-arrow");
const left_arrow = document.getElementById("left-arrow");

     for(let i=1; i<=6; i++) {
        let div = document.createElement("div"); // sukuriu div elementa
        let divBefore = document.createElement("div");
        div.className = "photo-div"; // pridedu className savo div
        let img = document.createElement("img"); // sukuriu elementa
       // let icon = document.createElement("i"); // sukuriu i elementa
       // icon.className = "fa"; // uzdedu class
        img.setAttribute("id", i); // img priskiriu id
        img.src = "imgs/img_"+i+".jpg"; // img scr priskiriu pavadinima
       // div.appendChild(icon); // i div ikeliu icon elementa
        div.appendChild(img); // div ikeliu img
        div.appendChild(divBefore);
        myDiv.appendChild(div); // i div ikeliu div

        div.addEventListener("mouseover", function() {
         // icon.classList.add("fa-search"); // priskiriu class i elementui
         // icon.classList.add("size"); // priskiriu class i elementui
          divBefore.classList.add("divas-mano");
          img.classList.add("img-font-size");
        })

        div.addEventListener("mouseout", function() {
          // icon.classList.remove("fa-search"); // nuimu class i elementui
          // icon.classList.remove("size"); // nuimu class i elementui
           divBefore.classList.remove("divas-mano");
           img.classList.remove("img-font-size");
        })

        div.addEventListener('click', function() {
          document.body.style.overflow = "hidden";
          lightbox.style.display = "block";
          lightbox_img.src = img.src;
          k = i;
        })
     } /// end for loop

     // nuotraukos krenta i prieki
     right_arrow.addEventListener('click', function() {
      k++;
      if(k >= 7) {
       k = 1;
        lightbox_img.src = "imgs/img_"+k+".jpg";
      }
      lightbox_img.src = "imgs/img_"+k+".jpg";
      console.log(k);
    })
    // nutraukos krenta atgal
    left_arrow.addEventListener('click', function() {
      k--;
      if(k <= 0){
        k = 7;
        lightbox_img.src = "imgs/img_"+k+".jpg";
        k--;
      }
      lightbox_img.src = "imgs/img_"+k+".jpg";
      console.log(k);
    })
    // iseinu is lighbox
     exit.addEventListener('click', function() {
      document.body.style.overflow = "auto";
      lightbox.style.display = "none";
     })


     ////// phone tablet btn
     const slide_btn = document.getElementById("phone-tablet-btn");
     const slide = document.querySelector(".phone-button-slide");
     const closing_slide = document.querySelector(".exit-slide");

     slide_btn.addEventListener('click', function() {
      slide.style.right = "0";
   })

   closing_slide.addEventListener('click', function() {
     slide.style.right = "-35%";
   })

     
