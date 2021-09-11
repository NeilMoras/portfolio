window.onload = function load() {
  // var nextButton = document.getElementById("slide-btn1");
  // var prevButton = document.getElementById("slide-btn2");
  //
  // var action = 1;
  //
  // nextButton.onclick = moveNext;
  // prevButton.onclick = movePrev;
  //
  // function moveNext() {
  //
  //   var image1 = document.getElementById("img1");
  //   var image2 = document.getElementById("img2");
  //   var image3 = document.getElementById("img3");
  //   if (action === 1) {
  //     setTimeout(function() {
  //       image1.classList.remove("click2-image1");
  //       image2.classList.remove("click2-image2");
  //       image3.classList.remove("click2-image3");
  //       image1.classList.add("click1-image1");
  //       image2.classList.add("click1-image2");
  //       image3.classList.add("click1-image3");
  //
  //     }, 200);
  //     image1.classList.remove("click1-image1");
  //     image2.classList.remove("click1-image2");
  //     image3.classList.remove("click1-image3");
  //
  //     action = 2;
  //   } else if (action === 2) {
  //     setTimeout(function() {
  //       image1.src = "image/layout-72ppi.png";
  //       image2.src = "image/artboardimage.jpg";
  //       image3.src = "image/lab4.png";
  //       image1.classList.add("click1-image1");
  //       image2.classList.add("click1-image2");;
  //       image3.classList.add("click1-image3");
  //
  //     }, 200);
  //     image1.classList.remove("click1-image1");
  //     image2.classList.remove("click1-image2");
  //     image3.classList.remove("click1-image3");
  //
  //
  //     action = 3;
  //   } else if (action === 3) {
  //
  //     setTimeout(function() {
  //       image1.src = "image/lab4.png";
  //       image2.src = "image/layout-72ppi.png";
  //       image3.src = "image/artboardimage.jpg";
  //       image1.classList.add("click1-image1");
  //       image2.classList.add("click1-image2");
  //       image3.classList.add("click1-image3");
  //
  //     }, 200);
  //     image1.classList.remove("click1-image1");
  //     image2.classList.remove("click1-image2");
  //     image3.classList.remove("click1-image3");
  //     action = 4;
  //   } else {
  //     setTimeout(function() {
  //       image1.src = "image/artboardimage.jpg";
  //       image2.src = "image/lab4.png";
  //       image3.src = "image/layout-72ppi.png";
  //       image1.classList.add("click1-image1");
  //       image2.classList.add("click1-image2");
  //       image3.classList.add("click1-image3");
  //
  //     }, 200);
  //     image1.classList.remove("click1-image1");
  //     image2.classList.remove("click1-image2");
  //     image3.classList.remove("click1-image3");
  //     action = 1;
  //   }
  //
  // }
  //
  //
  // var prev = 0;
  //
  // function movePrev() {
  //
  //   var image1 = document.getElementById("img1");
  //   var image2 = document.getElementById("img2");
  //   var image3 = document.getElementById("img3");
  //   if (prev === 1) {
  //     setTimeout(function() {
  //       image1.classList.remove("click1-image1");
  //       image2.classList.remove("click1-image2");
  //       image3.classList.remove("click1-image3");
  //       image1.classList.add("click2-image1");
  //       image2.classList.add("click2-image2");
  //       image3.classList.add("click2-image3");
  //
  //     }, 100);
  //     image1.classList.remove("click2-image1");
  //     image2.classList.remove("click2-image2");
  //     image3.classList.remove("click2-image3");
  //
  //     prev = 2;
  //   } else if (prev === 2) {
  //     setTimeout(function() {
  //       image1.classList.remove("click1-image1");
  //       image2.classList.remove("click1-image2");
  //       image3.classList.remove("click1-image3");
  //       image1.src = "image/artboardimage.jpg";
  //       image2.src = "image/layout-72ppi.png";
  //       image3.src = "image/lab4.png";
  //       image1.classList.add("click2-image1")
  //       image2.classList.add("click2-image2")
  //       image3.classList.add("click2-image3")
  //
  //     }, 100);
  //     image1.classList.remove("click2-image1");
  //     image2.classList.remove("click2-image2");
  //     image3.classList.remove("click2-image3");
  //
  //
  //     prev = 3;
  //   } else if (prev === 3) {
  //
  //     setTimeout(function() {
  //       image1.src = "image/lab4.png";
  //       image2.src = "image/layout-72ppi.png";
  //       image3.src = "image/artboardimage.jpg";
  //       image1.classList.add("click2-image1");
  //       image2.classList.add("click2-image2");
  //       image3.classList.add("click2-image3");
  //
  //     }, 100);
  //     image1.classList.remove("click2-image1");
  //     image2.classList.remove("click2-image2");
  //     image3.classList.remove("click2-image3");
  //     prev = 4;
  //   } else {
  //     setTimeout(function() {
  //       image1.src = "image/artboardimage.jpg";
  //       image2.src = "image/lab4.png";
  //       image3.src = "image/layout-72ppi.png";
  //       image1.classList.add("click2-image1");
  //       image2.classList.add("click2-image2");
  //       image3.classList.add("click2-image3");
  //
  //     }, 100);
  //     image1.classList.remove("click2-image1");
  //     image2.classList.remove("click2-image2");
  //     image3.classList.remove("click2-image3");
  //     prev = 1;
  //   }
  // }
  //





    var nextButton = document.getElementsByClassName("btn-next");
    var prevButton = document.getElementsByClassName("btn-prev");
    var mobHamBtn = document.getElementById("ham-btn-cta");
    var exit = document.getElementById("mob-exit");
    var nav = document.getElementById("menu");
    mobHamBtn.onclick = navToggle;

    function navToggle() {
      var nav = document.querySelector("nav");
      nav.style.display = "block";
    }

    exit.onclick = exitNav;

    function exitNav() {
      var nav = document.querySelector("nav");
      nav.style.display = "none";
    }


}
