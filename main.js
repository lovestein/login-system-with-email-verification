const loginForm = document.getElementById('loginForm');
const registrationForm = document.getElementById('registrationForm');

function showRegistrationForm() {
    registrationForm.style.display = "";
    loginForm.style.display = "none"
}

function showLoginForm() {
    registrationForm.style.display = "none";
    loginForm.style.display = "";
}

// Hide registration form and display login form by default
document.addEventListener("DOMContentLoaded", function() {
    showLoginForm();
});

function sendVerificaitonCode() { 
    const registrationElements = document.querySelectorAll('.registration');

    registrationElements.forEach(Element => {
        Element.style.display = 'none';
    });

    const verification = document.querySelector('.verification');
    if(verification) {
        verification.style.display = 'none';
    }
}