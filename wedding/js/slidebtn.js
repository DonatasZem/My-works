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