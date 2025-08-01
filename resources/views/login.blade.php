<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JagoanOsisKu</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            height: 100vh;
            overflow: hidden;
        }

        .container {
            display: flex;
            height: 100vh;
        }

        .left-section {
            flex: 1;
            background: linear-gradient(135deg, #722F37 0%, #8B1538 50%, #6A1B9A 100%);
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 2rem;
            position: relative;
            overflow: hidden;
        }

        .left-section::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(255,255,255,0.1) 0%, transparent 60%);
            animation: float 12s ease-in-out infinite;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0px) rotate(0deg); }
            50% { transform: translateY(-15px) rotate(180deg); }
        }

        .logo-container {
            position: relative;
            z-index: 2;
            text-align: center;
            margin-bottom: 2rem;
        }

        .logo {
            width: 140px;
            height: 140px;
            margin-bottom: 1.8rem;
            border-radius: 24px;
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.4);
            transition: all 0.3s ease;
            border: 3px solid rgba(255, 255, 255, 0.15);
        }

        .logo:hover {
            transform: scale(1.05) translateY(-3px);
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.5);
        }

        .welcome-text {
            color: #FFFFFF;
            margin-bottom: 1.5rem;
        }

        .welcome-text h1 {
            font-size: 2.8rem;
            font-weight: 700;
            margin-bottom: 0.8rem;
            text-shadow: 0 3px 15px rgba(0, 0, 0, 0.4);
            background: linear-gradient(135deg, #FFFFFF 0%, #E1BEE7 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .welcome-text p {
            font-size: 1.2rem;
            font-weight: 400;
            opacity: 0.95;
            line-height: 1.6;
            text-shadow: 0 2px 8px rgba(0, 0, 0, 0.3);
            color: #F3E5F5;
        }

        .school-info {
            color: #E1BEE7;
            text-align: center;
            font-size: 1rem;
            opacity: 0.9;
            margin-top: 2rem;
            font-weight: 500;
        }

        .right-section {
            flex: 1;
            background: linear-gradient(135deg, #FAFAFA 0%, #F5F5F5 100%);
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 2rem;
        }

        .login-form {
            width: 100%;
            max-width: 420px;
            padding: 2.5rem;
            background: #FFFFFF;
            border-radius: 20px;
            box-shadow: 0 20px 60px rgba(114, 47, 55, 0.15);
            border: 1px solid rgba(139, 21, 56, 0.08);
        }

        .form-header {
            text-align: center;
            margin-bottom: 2.5rem;
        }

        .form-header h2 {
            color: #722F37;
            font-size: 2rem;
            font-weight: 600;
            margin-bottom: 0.5rem;
        }

        .form-header p {
            color: #8B1538;
            font-size: 1rem;
            opacity: 0.8;
        }

        .form-group {
            margin-bottom: 1.8rem;
        }

        .form-group label {
            display: block;
            color: #722F37;
            font-weight: 600;
            margin-bottom: 0.7rem;
            font-size: 0.95rem;
        }

        .input-container {
            position: relative;
        }

        .form-control {
            width: 100%;
            padding: 1rem 1.2rem;
            border: 2px solid #E8E8E8;
            border-radius: 12px;
            font-size: 1rem;
            transition: all 0.3s ease;
            background: #FAFAFA;
            color: #2C3E50; /* Changed to elegant dark blue-gray */
            font-weight: 500;
        }

        .form-control:focus {
            outline: none;
            border-color: #8B1538;
            background: #FFFFFF;
            box-shadow: 0 0 0 3px rgba(139, 21, 56, 0.1);
            transform: translateY(-1px);
        }

        .form-control::placeholder {
            color: #95A5A6; /* Changed to elegant light gray */
            font-weight: 400;
        }

        .password-toggle {
            position: absolute;
            right: 1.2rem;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
            color: #8B1538;
            transition: color 0.3s ease;
            font-size: 1.1rem;
        }

        .password-toggle:hover {
            color: #6A1B9A;
        }

        .form-options {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 2rem;
            font-size: 0.9rem;
        }

        .checkbox-container {
            display: flex;
            align-items: center;
            color: #722F37;
        }

        .checkbox-container input[type="checkbox"] {
            margin-right: 0.7rem;
            accent-color: #8B1538;
            transform: scale(1.1);
        }

        .forgot-password {
            color: #6A1B9A;
            text-decoration: none;
            font-weight: 500;
            transition: all 0.3s ease;
        }

        .forgot-password:hover {
            color: #8B1538;
            text-decoration: underline;
        }

        .login-btn {
            width: 100%;
            background: linear-gradient(135deg, #8B1538 0%, #6A1B9A 100%);
            color: #FFFFFF;
            border: none;
            padding: 1.1rem 1.2rem;
            border-radius: 12px;
            font-size: 1.1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 8px 25px rgba(139, 21, 56, 0.3);
        }

        .login-btn:hover {
            background: linear-gradient(135deg, #722F37 0%, #8B1538 100%);
            transform: translateY(-2px);
            box-shadow: 0 12px 30px rgba(139, 21, 56, 0.4);
        }

        .login-btn:active {
            transform: translateY(0);
        }

        .login-btn:disabled {
            opacity: 0.7;
            cursor: not-allowed;
            transform: none;
        }

        .error-message {
            color: #D32F2F;
            font-size: 0.85rem;
            margin-top: 0.5rem;
            display: none;
        }

        .success-message {
            color: #388E3C;
            font-size: 0.85rem;
            margin-top: 0.5rem;
            display: none;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .container {
                flex-direction: column;
            }

            .left-section {
                flex: 0 0 40%;
                padding: 1.5rem;
            }

            .welcome-text h1 {
                font-size: 2.2rem;
            }

            .logo {
                width: 110px;
                height: 110px;
            }

            .right-section {
                flex: 1;
                padding: 1.5rem;
            }

            .login-form {
                padding: 2rem;
            }
        }

        @media (max-width: 480px) {
            .left-section {
                flex: 0 0 35%;
                padding: 1rem;
            }

            .welcome-text h1 {
                font-size: 1.8rem;
            }

            .welcome-text p {
                font-size: 1rem;
            }

            .logo {
                width: 90px;
                height: 90px;
            }

            .login-form {
                padding: 1.5rem;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="left-section">
            <div class="logo-container">
                <img src="https://hebbkx1anhila5yf.public.blob.vercel-storage.com/JagoanOsisKu-Logo-g4qM5G6FACDLLrdoHI8wE889sfveYX.png" alt="JagoanOsisKu Logo" class="logo">
                <div class="welcome-text">
                    <h1>Welcome to JagoanOsisKu!</h1>
                    <p>Selamat datang di website pemilihan<br>Ketua OSIS Dipta Baskara</p>
                </div>
            </div>
            <div class="school-info">
                <p><strong>Osis Dipta Baskara</strong><br>SMK Negeri 1 Probolinggo</p>
            </div>
        </div>

        <div class="right-section">
            <form class="login-form" id="loginForm">
                <div class="form-header">
                    <h2>Masuk ke Akun</h2>
                    <p>Silakan masuk untuk melanjutkan pemilihan</p>
                </div>

                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username" class="form-control" placeholder="Masukkan username Anda" required>
                    <div class="error-message" id="usernameError">Username harus diisi</div>
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <div class="input-container">
                        <input type="password" id="password" name="password" class="form-control" placeholder="Masukkan password Anda" required>
                        <i id="togglePassword"></i>
                    </div>
                    <div class="error-message" id="passwordError">Password harus diisi</div>
                </div>

                <div class="form-options">
                    <div class="checkbox-container">
                        <input type="checkbox" id="remember" name="remember">
                        <label for="remember">Ingat saya</label>
                    </div>
                    <a href="#" class="forgot-password">Lupa password?</a>
                </div>

                <button type="submit" class="login-btn">
                    <i class="fas fa-sign-in-alt" style="margin-right: 0.5rem;"></i>
                    Masuk
                </button>

                <div class="success-message" id="successMessage">Login berhasil! Mengalihkan...</div>
            </form>
        </div>
    </div>

    <script>
        // Password toggle functionality - FIXED
        const togglePassword = document.getElementById('togglePassword');
        const passwordInput = document.getElementById('password');

        togglePassword.addEventListener('click', function() {
            const isPassword = passwordInput.getAttribute('type') === 'password';

            // Toggle input type
            passwordInput.setAttribute('type', isPassword ? 'text' : 'password');

            // Toggle icon classes properly
            if (isPassword) {
                // Show password -> use eye-slash icon
                this.classList.remove('fa-eye');
                this.classList.add('fa-eye-slash');
            } else {
                // Hide password -> use eye icon
                this.classList.remove('fa-eye-slash');
                this.classList.add('fa-eye');
            }
        });

        // Form validation and submission
        const loginForm = document.getElementById('loginForm');
        const usernameInput = document.getElementById('username');
        const usernameError = document.getElementById('usernameError');
        const passwordError = document.getElementById('passwordError');
        const successMessage = document.getElementById('successMessage');

        // Real-time validation
        usernameInput.addEventListener('blur', validateUsername);
        passwordInput.addEventListener('blur', validatePassword);

        function validateUsername() {
            const username = usernameInput.value.trim();
            if (username === '') {
                showError(usernameInput, usernameError, 'Username harus diisi');
                return false;
            } else if (username.length < 3) {
                showError(usernameInput, usernameError, 'Username minimal 3 karakter');
                return false;
            } else {
                hideError(usernameInput, usernameError);
                return true;
            }
        }

        function validatePassword() {
            const password = passwordInput.value;
            if (password === '') {
                showError(passwordInput, passwordError, 'Password harus diisi');
                return false;
            } else if (password.length < 6) {
                showError(passwordInput, passwordError, 'Password minimal 6 karakter');
                return false;
            } else {
                hideError(passwordInput, passwordError);
                return true;
            }
        }

        function showError(input, errorElement, message) {
            input.style.borderColor = '#D32F2F';
            errorElement.textContent = message;
            errorElement.style.display = 'block';
        }

        function hideError(input, errorElement) {
            input.style.borderColor = '#E8E8E8';
            errorElement.style.display = 'none';
        }

        // Form submission
        loginForm.addEventListener('submit', function(e) {
            e.preventDefault();

            const isUsernameValid = validateUsername();
            const isPasswordValid = validatePassword();

            if (isUsernameValid && isPasswordValid) {
                // Simulate login process
                const loginBtn = document.querySelector('.login-btn');
                loginBtn.innerHTML = '<i class="fas fa-spinner fa-spin" style="margin-right: 0.5rem;"></i>Memproses...';
                loginBtn.disabled = true;

                setTimeout(() => {
                    successMessage.style.display = 'block';
                    setTimeout(() => {
                        // Redirect to dashboard or voting page
                        alert('Login berhasil! Anda akan diarahkan ke halaman pemilihan.');
                        // window.location.href = 'dashboard.html';
                    }, 1500);
                }, 2000);
            }
        });

        // Add smooth focus effects
        const formControls = document.querySelectorAll('.form-control');
        formControls.forEach(control => {
            control.addEventListener('focus', function() {
                this.parentElement.style.transform = 'scale(1.01)';
            });

            control.addEventListener('blur', function() {
                this.parentElement.style.transform = 'scale(1)';
            });
        });

        // Add loading animation on page load
        window.addEventListener('load', function() {
            document.body.style.opacity = '0';
            document.body.style.transition = 'opacity 0.6s ease';
            setTimeout(() => {
                document.body.style.opacity = '1';
            }, 100);
        });
    </script>
</body>
</html>
