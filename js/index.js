window.onload = function load() {
  /*Code for creating a sticky header that stays on screen as user scrolls */
      window.onscroll = function () { myFunction() };

      var header = document.getElementById("header");

      var sticky = header.offsetTop;
      console.log(sticky);
      function myFunction() {
          if (window.pageYOffset > sticky) {
              header.classList.add("sticky");
          } else {
              header.classList.remove("sticky");
          }
      }


    var mobHamBtn = document.getElementById("ham-btn-cta");
    var exit = document.getElementById("mob-exit");
    // var nav = document.getElementById("menu");
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
