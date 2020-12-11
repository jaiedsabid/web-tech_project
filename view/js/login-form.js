// Login Form
const loginForm = document.getElementById('login');

function validateLogin() {
    const username = document.getElementById('username');
    const password = document.getElementById('password');
    const warningMessage = document.getElementById('error-message');

    if (username.value == '') {
        warningMessage.innerHTML = 'Please enter your username';
        warningMessage.style.display = 'block';
        setTimeout(() => {
            warningMessage.style.display = 'none';
        }, 7000)
        return false;
    }
    else if (password.value == '') {
        warningMessage.innerHTML = 'Please enter your password';
        warningMessage.style.display = 'block';
        setTimeout(() => {
            warningMessage.style.display = 'none';
        }, 7000)
        return false;
    }
    else { return true; }
}

loginForm.onsubmit = (e) => {
    if (validateLogin() == true) {
        return true;
    }
    else { e.preventDefault(); }
};