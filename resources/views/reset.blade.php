<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>HRD - Reset Password</title>

    <!-- ===== CSS ===== -->
    <link rel="stylesheet" href="{{ asset('css/auth.css') }}">
</head>

<body>
    <article>
        <!-- Hospital Header -->
        <div class="hospital-header">
            <div class="hospital-logo">HRD</div>
            <h1 class="hospital-name">Health Reach Diagnostics</h1>
            <p class="hospital-subtitle">Management System</p>
        </div>


        <!-- Error/Success Messages -->
        <div id="errorMessage" class="message error-message"></div>
        <div id="successMessage" class="message success-message"></div>

        <!-- Reset Password Form -->
        <form id="resetForm" class="reset-form">
            @csrf
            <h2 class="form-title">Reset Password</h2>
            <div class="form-group">
                <label class="form-label" for="resetEmail">Email Address</label>
                <input type="email" id="resetEmail" class="form-input" placeholder="Enter your email address" required>
            </div>

            <button type="submit" class="login-btn">Send Reset Link</button>

            <div class="back-to-login">
                <a href="/">Back to Login</a>
            </div>

        </form>
    </article>

    <script src="{{ asset('js/auth.js') }}"></script>
</body>

</html>