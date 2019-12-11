/* eslint-disable require-jsdoc */
const sgnPass = document.querySelector('#sgnup_pass');
const loginPass = document.querySelector('#login_pass');
const showSgn = document.querySelector('#show_sgn');
const showLogin = document.querySelector('#show_lgn');
showSgn.addEventListener('click', function() {
  if (sgnPass.type == 'password') {
    sgnPass.type = 'text';
  } else {
    sgnPass.type = 'password';
  }
});

showLogin.addEventListener('click', function() {
  if (loginPass.type == 'password') {
    loginPass.type = 'text';
  } else {
    loginPass.type = 'password';
  }
});
