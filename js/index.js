window.onload = function load() {


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
