window.onload = function load() {
  // alert("Welcome to my Porfolio Website.Work is still in progress but feel free to check it out,Thank you");
  /*Code for creating a sticky header that stays on screen as user scrolls */


  const faders = document.querySelectorAll(".fade-in");
  const sliders = document.querySelectorAll(".slide-in");



  const appearOptions = {
    threshold: 0,
    rootMargin: "0px 0px -250px 0px"
  };

  const appearOnScroll = new IntersectionObserver(function(
    entries,
    appearOnScroll
  ) {
    entries.forEach(entry => {
      if (!entry.isIntersecting) {
        return;
      } else {
        entry.target.classList.add("appear");
        appearOnScroll.unobserve(entry.target);
      }
    });
  },
  appearOptions);

  faders.forEach(fader => {
    appearOnScroll.observe(fader);
  });

  sliders.forEach(slider => {
    appearOnScroll.observe(slider);
  });



  $(".about-img").hover(function(){
    $(this).fadeOut(500,function(){
            $(this).attr("src","image/about-me-self-image-2.jpg");
            $(this).fadeIn(500);
          });
        },  function(){
            $(this).fadeOut(1000, function(){
              $(this).attr("src","image/about-me-self-image.jpg");
              $(this).fadeIn(1000);
            });
        });


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



      var form = document.getElementById("my-form");

      async function handleSubmit(event) {
        event.preventDefault();
        var status = document.getElementById("my-form-status");
        var data = new FormData(event.target);
        let name = document.getElementById("fullname").value;
        let email = document.getElementById("email").value;
        let subject =document.getElementById("subject").value;
        let message = document.getElementById("message").value;

        if(name === "" || name === null || email === "" || email === null || subject === "" || subject === null || message === "" || message === null){
            status.innerHTML = "Please Fill in all Fields";
            status.style.color = "red";
            return false;
            name.focus();
        }
        else{
          fetch(event.target.action, {
            method: form.method,
            body: data,
            headers: {
                'Accept': 'application/json'
            }
          }).then(response => {
              status.style.color = "#12fcd8";
            status.innerHTML = `Thank you ${name} for Contacting me. I will get in touch with you shortly!`;

            form.reset()
          }).catch(error => {
            status.innerHTML = "Oops! There was a problem submitting your form"
          });

      }


    }

      form.addEventListener("submit", handleSubmit)


}
