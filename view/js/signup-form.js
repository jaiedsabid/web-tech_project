// Signup Form
const form = document.getElementById('signup');

function validateSignupForm() {
    const fullName = document.getElementById('full-name');
    const email = document.getElementById('user-email');
    const userName = document.getElementById('username');
    const password = document.getElementById('password');
    const cpassword = document.getElementById('cpassword');
    const dob = document.getElementById('dob');
    const userType = document.getElementById('usertype');
    const proImg = document.getElementById('FileUpload');
    const warningMessage = document.getElementById('message');

    if (fullName.value == '') {
        warningMessage.innerHTML = 'Please enter your full name <br>';
        warningMessage.style.display = 'block';
        setTimeout(() => {
            warningMessage.style.display = 'none';
        }, 7000)
        return false;
    }
    else if (email.value == '') {
        warningMessage.innerHTML = 'Please enter your email correctly <br>';
        warningMessage.style.display = 'block';
        setTimeout(() => {
            warningMessage.style.display = 'none';
        }, 7000)
        return false;
    }
    else if (userName.value == '') {
        warningMessage.innerHTML = 'Please enter your username <br>';
        warningMessage.style.display = 'block';
        setTimeout(() => {
            warningMessage.style.display = 'none';
        }, 7000)
        return false;
    }
    else if (password.value == '') {
        warningMessage.innerHTML = 'Please enter your password <br>';
        warningMessage.style.display = 'block';
        setTimeout(() => {
            warningMessage.style.display = 'none';
        }, 7000)
        return false;
    }
    else if (cpassword.value == '') {
        warningMessage.innerHTML = 'Password don\'t match. Enter password correctly <br>';
        warningMessage.style.display = 'block';
        setTimeout(() => {
            warningMessage.style.display = 'none';
        }, 7000)
        return false;
    }
    else if (dob.value == '') {
        warningMessage.innerHTML = 'Please enter your date of birth <br>';
        warningMessage.style.display = 'block';
        setTimeout(() => {
            warningMessage.style.display = 'none';
        }, 7000)
        return false;
    }
    else if (userType.value == '') {
        warningMessage.innerHTML = 'Please select your user type <br>';
        warningMessage.style.display = 'block';
        setTimeout(() => {
            warningMessage.style.display = 'none';
        }, 7000)
        return false;
    }
    else if (proImg.value == '') {
        warningMessage.innerHTML = 'Please choose a profile picture <br>';
        warningMessage.style.display = 'block';
        setTimeout(() => {
            warningMessage.style.display = 'none';
        }, 7000)
        return false;
    }

    else { return true; }
}

form.onsubmit = (e) => {
    if (validateSignupForm() == true) {
        return true;
    }
    else { e.preventDefault(); }
};