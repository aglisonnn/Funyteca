const loginButton = document.getElementById("login-button")

loginButton.addEventListener("click", (e) => {
    e.preventDefault()

    const email = document.getElementById("email")
    const password = document.getElementById("password")

    if (email.value == '') {
        email.classList.add("errorInput")
    } else {
        email.classList.remove("errorInput")
    }

    if (password.value == '') {
        password.classList.add("errorInput")
    } else {
        password.classList.remove("errorInput")
    }

    if (email.value.indexOf("@") == -1 || email.value.indexOf(".") == -1 || email.value.indexOf(".") + email.value.indexOf("@") == 1) {
        email.classList.add("errorInput")
    } else {
        email.classList.remove("errorInput")
    }

    if (password.value.length <= 5) {
        password.classList.add("errorInput")
    } else {
        password.classList.remove("errorInput")
    }
})