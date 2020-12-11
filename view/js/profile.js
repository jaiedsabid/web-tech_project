const change_info = document.getElementById('general-info');
const change_pass = document.getElementById('user-password');
const name = document.getElementById('fname');
const email = document.getElementById('email');
const password = document.getElementById('password');
const cpassword = document.getElementById('cpassword');
const warning = document.getElementById('warning');

function validateGeneralInfo() {
    if (name.value == '') {
        warning.innerHTML = 'Please enter your name before submit';
        warning.style.display = 'block';
        setTimeout(() => {
            warning.style.display = 'none';
        }, 5000);
        return false;
    }
    else if (email.value == '') {
        warning.innerHTML = 'Please enter your email before submit';
        warning.style.display = 'block';
        setTimeout(() => {
            warning.style.display = 'none';
        }, 5000);
        return false;
    }
    else { return true; }
}

function validatePasswordForm() {
    if (password.value == '') {
        warning.innerHTML = 'Please enter your password';
        warning.style.display = 'block';
        setTimeout(() => {
            warning.style.display = 'none';
        }, 5000);
        return false;
    }
    else if (cpassword.value == '') {
        warning.innerHTML = 'Please enter confirmation password';
        warning.style.display = 'block';
        setTimeout(() => {
            warning.style.display = 'none';
        }, 5000);
        return false;
    }
    else if (password.value == '' && cpassword.value == '') {
        warning.innerHTML = 'Please enter password and confirmation password before submit';
        warning.style.display = 'block';
        setTimeout(() => {
            warning.style.display = 'none';
        }, 5000);
        return false;
    }

    else { return true; }
}


change_pass.onsubmit = (event) => {
    if (validatePasswordForm() == true) {
        return true;
    }
    else { event.preventDefault(); }
};

change_info.onsubmit = (event) => {
    if (validateGeneralInfo() == true) {
        return true;
    }
    else { event.preventDefault(); }
};

