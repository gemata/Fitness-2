
function validateForm() {
const form = document.getElementById('form');
const email = document.getElementById('email');
const password = document.getElementById('password');
let isValid = true;

form.addEventListener('submit', e => {
    e.preventDefault();

    validateInputs();

});

const setError = (element,message) => {
    const  inputControl = element.parentElement;
    const errorDsiplay = inputControl.querySelector('.error');

    errorDsiplay.innerText = message;
    inputControl.classList.add('error');
    inputControl.classList.remove('success')
}

const setSuccess = element => {
    const inputControl = element.parentElement;
    const errorDsiplay = inputControl.querySelector('.error');

    errorDsiplay.innerText = '';
    inputControl.classList.add('success');
    inputControl.classList.remove('error');
};


const validateInputs = () => {

const emailValue = email.value.trim();
const passwordValue = password.value.trim();


if(emailValue === '') {
    setError(email, 'Email është i nevojshem');


} else {
    setSuccess(email);

}


if(passwordValue.length < 6) {
    setError(password, 'Duhet pasur së paku 6 karaktere')

} else {
    setSuccess(password);
}


};
return isValid;
}