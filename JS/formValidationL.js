const form = document.getElementById('form');
const username = document.getElementById('username');
const password = document.getElementById('password');

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

const usernameValue = username.value.trim();
const passwordValue = password.value.trim();


if(usernameValue === '') {
    setError(username, 'Emri i përdoruesit është i nevojshem');


} else {
    setSuccess(username);

}


if(passwordValue.length < 6) {
    setError(password, 'Duhet pasur së paku 6 karaktere')

} else {
    setSuccess(password);
}


};