function togglePassword() {
    const toggleButton = document.querySelector('.password-toggle');
    const passwordInput = document.getElementById('password');
    const showPassIcon = document.querySelector('.view');
    const hidePassIcon = document.querySelector('.hide');

    toggleButton.addEventListener('click', () => {
        const isPassword = passwordInput.type === 'password';
        passwordInput.type = isPassword ? 'text' : 'password';

        showPassIcon.style.display = isPassword ? 'none' : 'inline';
        hidePassIcon.style.display = isPassword ? 'inline' : 'none';
    });
}
togglePassword();

function showMessage(type, message) {
    const errorDiv = document.getElementById('errorMessage');
    const successDiv = document.getElementById('successMessage');

    if (type === 'error') {
        errorDiv.textContent = message;
        errorDiv.style.display = 'block';
        successDiv.style.display = 'none';

        setTimeout(() => {
            errorDiv.style.display = 'none';
        }, 5000);
    } else if (type === 'success') {
        successDiv.textContent = message;
        successDiv.style.display = 'block';
        errorDiv.style.display = 'none';

        setTimeout(() => {
            successDiv.style.display = 'none';
        }, 5000);
    }
}

document.getElementById('loginForm').addEventListener('submit', (e) => {
    e.preventDefault();

    const email = document.getElementById('email').value.trim();
    const password = document.getElementById('password').value.trim();

    // Illustrative Logins 
    if (email === 'admin@hospital.com' && password === 'admin123') {
        showMessage('success', 'Login successful! Redirecting to dashboard...');
        setTimeout(() => {
            //kinda overide php routing 
            window.location.href = '/home';

        }, 2000);
    } else {
        showMessage('error', 'Invalid email/username or password. Please try again.');
    }
});

document.getElementById('resetForm').addEventListener('submit', function (e) {
    e.preventDefault();

    const email = document.getElementById('resetEmail').value;

    //Illustration 
    if (email) {
        showMessage('success', 'Password reset link has been sent to your email address.');
        setTimeout(() => {
            window.location.href = '/login';
        }, 3000);
    } else {
        showMessage('error', 'Please enter a valid email address..');
    }
});
