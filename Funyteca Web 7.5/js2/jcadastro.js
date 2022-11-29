const continueButton = document.getElementById("continue-button")

continueButton.addEventListener("click", (e) => {
    e.preventDefault()

    const email = document.getElementById("email")
    const password = document.getElementById("password")
    const confirmPassword = document.getElementById("Confirmpassword")
    const nome = document.getElementById("nome")

    const emailValue = email.value.trim()
    const passwordValue = password.value.trim()
    const confirmPasswordValue = confirmPassword.value.trim()
    const nomeUser = nome.value.trim()

    if (emailValue == '') {
        email.classList.add("errorInput")
    } else {
        email.classList.remove("errorInput")
    }

    if (passwordValue == '' || passwordValue.length <= 5) {
        password.classList.add("errorInput")
    } else {
        password.classList.remove("errorInput")
    }

    if (confirmPasswordValue == '' || passwordValue != confirmPasswordValue) {
        confirmPassword.classList.add("errorInput")
    } else {
        confirmPassword.classList.remove("errorInput")
    }

    if (emailValue.indexOf("@") == -1 || emailValue.indexOf(".") == -1 || emailValue.indexOf(".") + emailValue.indexOf("@") == 1) {
        email.classList.add("errorInput")
    } else {
        email.classList.remove("errorInput")
    }

    if (nomeUser == '') {
        nome.classList.add("errorInput")
    } else {
        nome.classList.remove("errorInput")
    }

})