const modalSignup = document.querySelector('#modalSignup');

const modalLogin = document.querySelector('#modalLogin');

const sgnup = document.querySelector('#signupbtn');

const login = document.querySelector('#loginbtn');

const explore = document.querySelector('#exploreform');

sgnup.addEventListener('click', function() {
  modalSignup.style.display = 'block';
  explore.style.display = 'none';
});

login.addEventListener('click', function() {
  modalLogin.style.display = 'block';
  explore.style.display = 'none';
});

window.addEventListener('click', function(event) {
  if (event.target == modalSignup || event.target == modalLogin) {
    event.target.style.display = 'none';
    explore.style.display = 'flex';
  }
});
