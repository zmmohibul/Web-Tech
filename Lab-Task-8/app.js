const regForm = document.querySelector('#reg-form');
let allClear = false;

const emailPattern = /^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/;
const namePattern = /^[a-zA-Z.]{2,30}$/;
const cellPattern = /^[0-9-+ ]{11,20}$/;
const emailPattern2 = /^(([^<>()[\]{}'^?\\.,!|//#%*-+=&;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?/
const addressPattern = /^[a-zA-Z0-9-.,()# ]{2,30}$/;



const firstName = regForm.elements.firstname;
let firstNameErr = document.querySelector('#firsNameErr');

firstName.addEventListener('input', function () {
    validateInput(firstName.value, namePattern, firstNameErr, 'First Name');
})

firstName.addEventListener('focusout', function () {
    validateIsEmpty(firstName.value, firstNameErr, 'First Name');
})



const lastName = regForm.elements.lastname;
let lastNameErr = document.querySelector('#lastNameErr');

lastName.addEventListener('input', function () {
    validateInput(lastName.value, namePattern, lastNameErr, 'Last Name');
})

lastName.addEventListener('focusout', function () {
    validateIsEmpty(lastName.value, lastNameErr, 'Last Name');
})



const email = regForm.elements.email;
let emailErr = document.querySelector('#emailErr');

email.addEventListener('input', function () {
    validateInput(email.value, emailPattern2, emailErr, 'Email');
})

email.addEventListener('focusout', function () {
    validateIsEmpty(email.value, emailErr, 'Email');
})



const cell = regForm.elements.cell;
let cellErr = document.querySelector('#cellErr');

cell.addEventListener('input', function () {
    validateInput(cell.value, cellPattern, cellErr, 'Cell Phone');
})

cell.addEventListener('focusout', function () {
    validateIsEmpty(cell.value, cellErr, 'Cell Phone');
})



const address = regForm.elements.strAddress;
let addressErr = document.querySelector('#addressErr');

address.addEventListener('input', function () {
    validateInput(address.value, addressPattern, addressErr, 'Street Address');
})

address.addEventListener('focusout', function () {
    validateIsEmpty(address.value, addressErr, 'Street Address');
})



const password = regForm.elements.password;
let passwordErr = document.querySelector('#passwordErr');

password.addEventListener('focusout', function () {
    validateIsEmpty(password.value, passwordErr, 'Password');
})



const confirmPassword = regForm.elements.confirmPassword;
let confirmPassErr = document.querySelector('#confirmPassErr');

confirmPassword.addEventListener('focusout', function () {
    validateIsEmpty(confirmPassword.value, confirmPassErr, 'Confirm Password');
    validatePasswordMatch();
})


confirmPassword.addEventListener('input', function () {
    validatePasswordMatch();
})




function validateInput(input, regxPattern, errSpan, errMsg) {
    if (!input) {
        errSpan.classList.remove("hidden");
        errSpan.innerHTML = `* ${errMsg} Field Must Not Be Empty`
        allClear = false;
    } else if (!regxPattern.test(input)) {
        errSpan.classList.remove("hidden");
        errSpan.innerHTML = `* Invalid ${errMsg} Format`
        allClear = false;
    } else {
        errSpan.classList.add("hidden");
        allClear = true;
    }
}

function validateIsEmpty(input, errSpan, errMsg) {
    if (!input) {
        errSpan.classList.remove("hidden");
        errSpan.innerHTML = `* ${errMsg} Field Must Not Be Empty`;
        allClear = false;
    }
}

function validatePasswordMatch() {
    if (password.value !== confirmPassword.value) {
        passwordErr.innerHTML = confirmPassErr.innerHTML = "* Passwords does not match";
        passwordErr.classList.remove("hidden");
        confirmPassErr.classList.remove("hidden");
    } else {
        passwordErr.classList.add("hidden");
        confirmPassErr.classList.add("hidden");
    }
}

regForm.addEventListener('submit', function (e) {
    e.preventDefault();
})