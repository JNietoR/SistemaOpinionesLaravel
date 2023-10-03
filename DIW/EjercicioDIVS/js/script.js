var isSignUp = true; 

function toggleLogin() {
    var emailLabel = document.getElementById("email-label");
    var emailInput = document.getElementById("email");
    var submitButton = document.querySelector("input[type='submit']");
    var enlaceRegistrado = document.querySelector(".registrado");

    if (isSignUp) {
        // Cambiar a Login
        emailLabel.style.display = "none";
        emailInput.style.display = "none";
        submitButton.value = "SIGN IN";
        enlaceRegistrado.textContent = "¿No tienes cuenta?";
    } else {
        // Cambiar a Registro
        emailLabel.style.display = "flex"; // Mostrar el label de email
        emailInput.style.display = "flex"; // Mostrar el input de email
        submitButton.value = "SIGN UP"; // Cambiar contenido del boton submit
        enlaceRegistrado.textContent = "¿Ya estás registrado?"; 
    }
    
    // Invierte la variable que trackea si estas en login o registro
    isSignUp = !isSignUp;
}

