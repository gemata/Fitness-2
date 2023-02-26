
function validateForm() {
  
  const username = document.getElementById('username');
  const email = document.getElementById('email');
  const password = document.getElementById('password');
  const password2 = document.getElementById('password2');
  let isValid = true;

  if (username.value.trim() === '') {
    showError(username, 'Emri i përdoruesit është i nevojshëm');
    isValid = false;
  } else {
    showSuccess(username);
  }

  if (email.value.trim() === '') {
    showError(email, 'Email është i nevojshëm');
    isValid = false;
  } else if (!isValidEmail(email.value)) {
    showError(email, 'Email nuk është valid');
    isValid = false;
  } else {
    showSuccess(email);
  }

  function isValidEmail(email) {
    const re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
  }

  if (password.value.trim() === '') {
    showError(password, 'Fjalëkalimi është i nevojshëm');
    isValid = false;
  } else if (password.value.trim().length < 6) {
    showError(password, 'Fjalëkalimi duhet të jetë së paku 6 karaktere');
    isValid = false;
  } else {
    showSuccess(password);
  }

  if (password2.value.trim() === '') {
    showError(password2, 'Konfirmimi i fjalëkalimit është i nevojshëm');
    isValid = false;
  } else if (password2.value.trim() !== password.value.trim()) {
    showError(password2, 'Fjalëkalimet nuk përputhen');
    isValid = false;
  } else {
    showSuccess(password2);
  }
  
  return isValid;
}

