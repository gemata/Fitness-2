const form=document.getElementById('form');
const username=document.getElementById('username');
const email=document.getElementById('email');
const password=document.getElementById('password');
const password2=document.getElementById('password2');


//Show input error message

function showError(input,message){
    const formControl=input.parentElement;
    formControl.className='form-control error';
    const small=formControl.querySelector('small');
    small.innerText=message;
}

function showSuccess(input){
    const formControl=input.parentElement;
    formControl.className='form-control success';
    
}

//Email

function isValidEmail(email)
{
    const re= /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
}





form.addEventListener('submit',function(e){
    e.preventDefault();

    if(username.value===''){
        showError(username,'Emri i përdouesit është i nevojshëm');
    }
    else{
        showSuccess(username);
    }
    if(email.value===''){
        showError(email,'Email është i nevojshëm');
    }else if(!isValidEmail(email.value)){
        showError(email,'Email nuk është valid');
    }
    else{
        showSuccess(email);
    }

    if(password.value.length <6){
        showError(password,'Duhet pasur së paku 6 karaktere');
        
    }
    else{
        showSuccess(password);
    }
    if(password2.value===''){
        showError(password2,'Konfimimi është i nevojshëm');
    } else if (password2.value !==  password.value) {
        showError(password2, "Fjalkalimet nuk përputhen");
    }else{
        showSuccess(password2);
    }
}
);



