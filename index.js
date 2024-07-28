const nav = document.querySelector("nav")
const header = document.querySelector("header")
const sticky = header.offsetHeight - nav.offsetHeight - 12

window.onscroll = () => {
    if(window.scrollY > sticky){
        nav.classList.add("nav-background")
    } else {
        nav.classList.remove("nav-background")
    }

}

document.getElementById('contact').addEventListener('submit', function(event) {
    const nom = document.getElementById('nom').value;
    const email = document.getElementById('email').value;
    const message = document.getElementById('message').value;
    const chk = document.getElementById('chk').checked;
    const error = document.querySelector('.msg-error-fixed')

    if (!nom || !email || !message || !chk) {
      event.preventDefault();
      error.style.display = "inline"
      setTimeout(() => {
          error.style.display = "none"
      }, "4000");

    }
  });