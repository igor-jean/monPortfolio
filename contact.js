document.getElementById('contact-form').addEventListener('submit', function(event) {
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