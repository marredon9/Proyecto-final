document.addEventListener("DOMContentLoaded", function () {

    const form = document.getElementById("registroForm");
    const pass1 = document.getElementById("password1");
    const pass2 = document.getElementById("password2");
    const errorMsg = document.getElementById("error-password");
    const btnLogin = document.getElementById("btn-login");

    form.addEventListener("submit", function (e) {
        if (pass1.value !== pass2.value) {
            e.preventDefault();
            alert("Las contraseñas no coinciden");
            errorMsg.classList.remove("d-none");
        }
    });

    btnLogin.addEventListener("click", function (e) {
        e.preventDefault();
        window.location.href = "IniciosesionUsuario.html";
    });

});