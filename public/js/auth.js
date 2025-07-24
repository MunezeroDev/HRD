function initPasswordToggle() {
    const toggleButton = document.querySelector('.password-toggle');
    const passwordInput = document.getElementById('password');
    const showIcon = document.querySelector('.view');
    const hideIcon = document.querySelector('.hide');

    if (!toggleButton || !passwordInput || !showIcon || !hideIcon) return;

    toggleButton.addEventListener('click', () => {
        const isHidden = passwordInput.type === 'password';
        passwordInput.type = isHidden ? 'text' : 'password';
        showIcon.style.display = isHidden ? 'none' : 'inline';
        hideIcon.style.display = isHidden ? 'inline' : 'none';
    });
}

function showMessage(type, text) {
    const errorBox = document.getElementById('errorMessage');
    const successBox = document.getElementById('successMessage');

    if (!errorBox || !successBox) return;

    const isError = type === 'error';
    const targetBox = isError ? errorBox : successBox;
    const otherBox = isError ? successBox : errorBox;

    targetBox.textContent = text;
    targetBox.style.display = 'block';
    otherBox.style.display = 'none';

    setTimeout(() => {
        targetBox.style.display = 'none';
    }, 5000);
}

function initLoginForm() {
    const loginForm = document.getElementById('loginForm');
    if (!loginForm) return;

    loginForm.addEventListener('submit', e => {
        e.preventDefault();

        const email = document.getElementById('email')?.value.trim();
        const password = document.getElementById('password')?.value.trim();

        if (email === 'admin@hospital.com' && password === 'admin123') {
            showMessage('success', 'Login successful! Redirecting...');
            setTimeout(() => window.location.href = '/home', 2000);
        } else {
            showMessage('error', 'Invalid email or password. Please try again.');
        }
    });
}

function initResetForm() {
    const resetForm = document.getElementById('resetForm');
    if (!resetForm) return;

    resetForm.addEventListener('submit', e => {
        e.preventDefault();

        const email = document.getElementById('resetEmail')?.value.trim();

        if (email) {
            showMessage('success', 'Password reset link sent to your email.');
            setTimeout(() => window.location.href = '/login', 3000);
        } else {
            showMessage('error', 'Please enter a valid email address.');
        }
    });
}

initPasswordToggle();
initLoginForm();
initResetForm();
