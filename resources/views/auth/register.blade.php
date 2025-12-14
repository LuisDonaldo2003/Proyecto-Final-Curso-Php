<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Crear Cuenta</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700&display=swap" rel="stylesheet" />

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        .register-container {
            width: 100%;
            max-width: 480px;
            background: white;
            border-radius: 20px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            animation: slideUp 0.6s ease-out;
        }

        .register-header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            padding: 50px 40px 40px;
            text-align: center;
            color: white;
        }

        .register-title {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 10px;
        }

        .register-subtitle {
            font-size: 1.125rem;
            opacity: 0.9;
            font-weight: 400;
        }

        .register-content {
            padding: 40px;
        }

        .form-group {
            margin-bottom: 25px;
            position: relative;
        }

        .form-label {
            display: block;
            font-size: 0.875rem;
            font-weight: 600;
            color: #4a5568;
            margin-bottom: 8px;
        }

        .form-input {
            width: 100%;
            padding: 16px 20px;
            border: 2px solid #e2e8f0;
            border-radius: 12px;
            font-size: 1rem;
            transition: all 0.3s ease;
            font-family: 'Inter', sans-serif;
        }

        .form-input:focus {
            outline: none;
            border-color: #667eea;
            box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.1);
        }

        .form-input::placeholder {
            color: #a0aec0;
        }

        .password-toggle {
            position: absolute;
            right: 15px;
            top: 42px;
            background: none;
            border: none;
            color: #718096;
            cursor: pointer;
            padding: 5px;
            transition: color 0.3s ease;
        }

        .password-toggle:hover {
            color: #667eea;
        }

        .password-strength {
            margin-top: 8px;
            height: 4px;
            border-radius: 2px;
            background: #e2e8f0;
            overflow: hidden;
        }

        .password-strength-meter {
            height: 100%;
            width: 0%;
            transition: all 0.3s ease;
            border-radius: 2px;
        }

        .strength-0 { width: 20%; background: #f56565; }
        .strength-1 { width: 40%; background: #ed8936; }
        .strength-2 { width: 60%; background: #ecc94b; }
        .strength-3 { width: 80%; background: #48bb78; }
        .strength-4 { width: 100%; background: #38a169; }

        .password-hint {
            font-size: 0.75rem;
            color: #718096;
            margin-top: 4px;
        }

        .error-message {
            color: #f56565;
            font-size: 0.875rem;
            margin-top: 6px;
        }

        .success-message {
            color: #38a169;
            font-size: 0.875rem;
            margin-top: 6px;
        }

        .terms-conditions {
            margin: 25px 0;
            padding: 15px;
            background: #f7fafc;
            border-radius: 10px;
            border-left: 4px solid #667eea;
        }

        .terms-checkbox {
            display: flex;
            align-items: flex-start;
            gap: 10px;
        }

        .terms-checkbox input {
            margin-top: 3px;
            width: 18px;
            height: 18px;
            border-radius: 4px;
            border: 2px solid #cbd5e0;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .terms-checkbox input:checked {
            background-color: #667eea;
            border-color: #667eea;
        }

        .terms-label {
            font-size: 0.875rem;
            color: #4a5568;
            line-height: 1.5;
        }

        .terms-link {
            color: #667eea;
            text-decoration: none;
            font-weight: 500;
        }

        .terms-link:hover {
            text-decoration: underline;
        }

        .register-button {
            width: 100%;
            padding: 18px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            border: none;
            border-radius: 12px;
            font-size: 1.125rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            font-family: 'Inter', sans-serif;
            margin: 25px 0;
        }

        .register-button:hover:not(:disabled) {
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(102, 126, 234, 0.3);
        }

        .register-button:disabled {
            opacity: 0.5;
            cursor: not-allowed;
        }

        .divider {
            display: flex;
            align-items: center;
            margin: 30px 0;
            color: #a0aec0;
        }

        .divider::before,
        .divider::after {
            content: '';
            flex: 1;
            height: 1px;
            background: #e2e8f0;
        }

        .divider span {
            padding: 0 15px;
            font-size: 0.875rem;
        }

        /* Google Button Styles */
        .google-auth-section {
            text-align: center;
        }

        .google-title {
            color: #4a5568;
            font-size: 1rem;
            margin-bottom: 20px;
            font-weight: 500;
        }

        .btn-google {
            background: white;
            color: #5f6368;
            border: 1px solid #dadce0;
            padding: 16px 24px;
            border-radius: 12px;
            font-weight: 500;
            text-decoration: none;
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            gap: 12px;
            font-size: 1rem;
            width: 100%;
            justify-content: center;
            cursor: pointer;
        }

        .btn-google:hover {
            background: #f8f9fa;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            transform: translateY(-2px);
            border-color: #d2e3fc;
        }

        .google-icon {
            width: 20px;
            height: 20px;
        }

        .login-link {
            text-align: center;
            margin-top: 30px;
            color: #718096;
            font-size: 0.875rem;
        }

        .login-link a {
            color: #667eea;
            text-decoration: none;
            font-weight: 600;
            margin-left: 5px;
            transition: color 0.3s ease;
        }

        .login-link a:hover {
            color: #764ba2;
            text-decoration: underline;
        }

        .footer {
            text-align: center;
            margin-top: 40px;
            padding-top: 20px;
            border-top: 1px solid #e2e8f0;
            color: #a0aec0;
            font-size: 0.875rem;
        }

        .footer p {
            margin-bottom: 10px;
        }

        .footer-links {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-top: 10px;
        }

        .footer-link {
            color: #718096;
            text-decoration: none;
            transition: color 0.3s ease;
            font-size: 0.75rem;
        }

        .footer-link:hover {
            color: #667eea;
        }

        /* Progress Steps */
        .progress-steps {
            display: flex;
            justify-content: space-between;
            margin: 30px 0;
            position: relative;
        }

        .progress-steps::before {
            content: '';
            position: absolute;
            top: 15px;
            left: 0;
            right: 0;
            height: 2px;
            background: #e2e8f0;
            z-index: 1;
        }

        .step {
            position: relative;
            z-index: 2;
            text-align: center;
        }

        .step-circle {
            width: 30px;
            height: 30px;
            border-radius: 50%;
            background: white;
            border: 2px solid #e2e8f0;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 8px;
            font-size: 0.875rem;
            font-weight: 600;
            color: #a0aec0;
            transition: all 0.3s ease;
        }

        .step.active .step-circle {
            background: #667eea;
            border-color: #667eea;
            color: white;
        }

        .step-label {
            font-size: 0.75rem;
            color: #a0aec0;
            transition: color 0.3s ease;
        }

        .step.active .step-label {
            color: #667eea;
            font-weight: 600;
        }

        /* Animations */
        @keyframes slideUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes float {
            0%, 100% {
                transform: translateY(0);
            }
            50% {
                transform: translateY(-10px);
            }
        }

        .floating {
            animation: float 3s ease-in-out infinite;
        }

        /* Responsive */
        @media (max-width: 640px) {
            .register-container {
                max-width: 100%;
            }
            
            .register-header {
                padding: 40px 30px 30px;
            }
            
            .register-content {
                padding: 30px;
            }
            
            .register-title {
                font-size: 2rem;
            }
            
            .progress-steps {
                margin: 20px 0;
            }
            
            .step-label {
                font-size: 0.7rem;
            }
        }

        @media (max-width: 480px) {
            .register-header {
                padding: 30px 20px 20px;
            }
            
            .register-content {
                padding: 20px;
            }
            
            .register-title {
                font-size: 1.75rem;
            }
            
            .form-input, .register-button, .btn-google {
                padding: 14px 18px;
            }
            
            .terms-conditions {
                padding: 12px;
            }
        }
    </style>
</head>
<body>
    <div class="register-container">
        <div class="register-header floating">
            <h1 class="register-title">¡Comienza Ahora!</h1>
            <p class="register-subtitle">Crea tu cuenta en solo unos pasos</p>
        </div>
        
        <div class="register-content">
            <!-- Progress Steps -->
            <div class="progress-steps">
                <div class="step active" data-step="1">
                    <div class="step-circle">1</div>
                    <div class="step-label">Información</div>
                </div>
                <div class="step" data-step="2">
                    <div class="step-circle">2</div>
                    <div class="step-label">Cuenta</div>
                </div>
                <div class="step" data-step="3">
                    <div class="step-circle">3</div>
                    <div class="step-label">Confirmar</div>
                </div>
            </div>
            
            @if ($errors->any())
                <div style="background: #fed7d7; color: #c53030; padding: 12px; border-radius: 8px; margin-bottom: 20px; font-size: 0.875rem;">
                    @foreach ($errors->all() as $error)
                        <p>{{ $error }}</p>
                    @endforeach
                </div>
            @endif
            
            <form method="POST" action="{{ route('register') }}" id="registerForm">
                @csrf

                <!-- Name -->
                <div class="form-group">
                    <label for="name" class="form-label">Nombre Completo</label>
                    <input id="name" 
                           class="form-input" 
                           type="text" 
                           name="name" 
                           value="{{ old('name') }}" 
                           required 
                           autofocus 
                           autocomplete="name"
                           placeholder="Juan Pérez">
                    @if ($errors->has('name'))
                        <span class="error-message">{{ $errors->first('name') }}</span>
                    @endif
                </div>

                <!-- Email Address -->
                <div class="form-group">
                    <label for="email" class="form-label">Correo Electrónico</label>
                    <input id="email" 
                           class="form-input" 
                           type="email" 
                           name="email" 
                           value="{{ old('email') }}" 
                           required 
                           autocomplete="email"
                           placeholder="tu@email.com">
                    @if ($errors->has('email'))
                        <span class="error-message">{{ $errors->first('email') }}</span>
                    @endif
                </div>

                <!-- Password -->
                <div class="form-group">
                    <label for="password" class="form-label">Contraseña</label>
                    <input id="password" 
                           class="form-input"
                           type="password"
                           name="password"
                           required 
                           autocomplete="new-password"
                           placeholder="••••••••"
                           minlength="8">
                    <button type="button" class="password-toggle" data-target="password">
                        👀
                    </button>
                    <div class="password-strength">
                        <div class="password-strength-meter" id="passwordStrength"></div>
                    </div>
                    <div class="password-hint">
                        Mínimo 8 caracteres, incluyendo mayúsculas, minúsculas y números
                    </div>
                    @if ($errors->has('password'))
                        <span class="error-message">{{ $errors->first('password') }}</span>
                    @endif
                </div>

                <!-- Confirm Password -->
                <div class="form-group">
                    <label for="password_confirmation" class="form-label">Confirmar Contraseña</label>
                    <input id="password_confirmation" 
                           class="form-input"
                           type="password"
                           name="password_confirmation" 
                           required 
                           autocomplete="new-password"
                           placeholder="••••••••">
                    <button type="button" class="password-toggle" data-target="password_confirmation">
                        👀
                    </button>
                    <div id="passwordMatch" class="password-hint"></div>
                    @if ($errors->has('password_confirmation'))
                        <span class="error-message">{{ $errors->first('password_confirmation') }}</span>
                    @endif
                </div>

                <!-- Terms and Conditions -->
                <div class="terms-conditions">
                    <label class="terms-checkbox">
                        <input type="checkbox" name="terms" id="terms" required>
                        <span class="terms-label">
                            Acepto los <a href="#" class="terms-link">Términos de Servicio</a> y la 
                            <a href="#" class="terms-link">Política de Privacidad</a>. Entiendo que mi información 
                            será procesada de acuerdo con estas políticas.
                        </span>
                    </label>
                </div>

                <button type="submit" class="register-button" id="submitButton" disabled>
                    Crear Cuenta
                </button>
            </form>

            <!-- Divider -->
            <div class="divider">
                <span>O regístrate con</span>
            </div>

            <!-- Google Auth -->
            <div class="google-auth-section">
                <div class="google-title">Acceso rápido con Google</div>
                <a href="/auth/google/redirect" class="btn-google">
                    <svg class="google-icon" viewBox="0 0 24 24" width="24" height="24">
                        <path fill="#4285F4" d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z"/>
                        <path fill="#34A853" d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z"/>
                        <path fill="#FBBC05" d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z"/>
                        <path fill="#EA4335" d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z"/>
                    </svg>
                    Registrarse con Google
                </a>
            </div>

            <!-- Login Link -->
            <div class="login-link">
                ¿Ya tienes una cuenta?
                <a href="{{ route('login') }}">Inicia sesión aquí</a>
            </div>

            <!-- Footer -->
            <div class="footer">
                <p>© {{ date('Y') }} {{ config('app.name', 'Laravel') }}. Todos los derechos reservados.</p>
                <div class="footer-links">
                    <a href="#" class="footer-link">Términos</a>
                    <a href="#" class="footer-link">Privacidad</a>
                    <a href="#" class="footer-link">Contacto</a>
                    <a href="#" class="footer-link">Ayuda</a>
                </div>
                <p style="margin-top: 15px; font-size: 0.75rem; color: #cbd5e0;">
                    Realizado por Luis Donado López Martínez
                </p>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Password toggle functionality
            const passwordToggles = document.querySelectorAll('.password-toggle');
            passwordToggles.forEach(toggle => {
                toggle.addEventListener('click', function() {
                    const targetId = this.getAttribute('data-target');
                    const targetInput = document.getElementById(targetId);
                    const isPassword = targetInput.type === 'password';
                    
                    targetInput.type = isPassword ? 'text' : 'password';
                    this.textContent = isPassword ? '🙈' : '👀';
                });
            });

            // Password strength checker
            const passwordInput = document.getElementById('password');
            const passwordStrength = document.getElementById('passwordStrength');
            const confirmPasswordInput = document.getElementById('password_confirmation');
            const passwordMatch = document.getElementById('passwordMatch');
            const submitButton = document.getElementById('submitButton');
            const termsCheckbox = document.getElementById('terms');

            function checkPasswordStrength(password) {
                let strength = 0;
                
                if (password.length >= 8) strength++;
                if (/[A-Z]/.test(password)) strength++;
                if (/[a-z]/.test(password)) strength++;
                if (/[0-9]/.test(password)) strength++;
                if (/[^A-Za-z0-9]/.test(password)) strength++;
                
                return Math.min(strength, 4);
            }

            function updateSubmitButton() {
                const password = passwordInput.value;
                const confirmPassword = confirmPasswordInput.value;
                const termsAccepted = termsCheckbox.checked;
                const strength = checkPasswordStrength(password);
                
                const isPasswordValid = password.length >= 8 && strength >= 2;
                const doPasswordsMatch = password === confirmPassword && password !== '';
                
                // Update strength meter
                passwordStrength.className = 'password-strength-meter';
                if (password) {
                    passwordStrength.classList.add(`strength-${strength}`);
                }
                
                // Update match message
                if (confirmPassword) {
                    if (doPasswordsMatch) {
                        passwordMatch.textContent = '✓ Las contraseñas coinciden';
                        passwordMatch.className = 'success-message';
                    } else {
                        passwordMatch.textContent = '✗ Las contraseñas no coinciden';
                        passwordMatch.className = 'error-message';
                    }
                } else {
                    passwordMatch.textContent = '';
                }
                
                // Update progress steps
                updateProgressSteps(password, confirmPassword);
                
                // Enable/disable submit button
                submitButton.disabled = !(isPasswordValid && doPasswordsMatch && termsAccepted);
            }

            function updateProgressSteps(password, confirmPassword) {
                const steps = document.querySelectorAll('.step');
                
                // Step 1 - Always active
                steps[0].classList.add('active');
                
                // Step 2 - Active if password is valid
                const isPasswordValid = password.length >= 8 && checkPasswordStrength(password) >= 2;
                if (isPasswordValid) {
                    steps[1].classList.add('active');
                } else {
                    steps[1].classList.remove('active');
                }
                
                // Step 3 - Active if passwords match and terms are accepted
                const doPasswordsMatch = password === confirmPassword && password !== '';
                const termsAccepted = termsCheckbox.checked;
                if (doPasswordsMatch && termsAccepted) {
                    steps[2].classList.add('active');
                } else {
                    steps[2].classList.remove('active');
                }
            }

            // Event listeners
            passwordInput.addEventListener('input', updateSubmitButton);
            confirmPasswordInput.addEventListener('input', updateSubmitButton);
            termsCheckbox.addEventListener('change', updateSubmitButton);

            // Form validation feedback
            const formInputs = document.querySelectorAll('.form-input');
            formInputs.forEach(input => {
                input.addEventListener('focus', function() {
                    this.parentElement.querySelector('.form-label').style.color = '#667eea';
                });
                
                input.addEventListener('blur', function() {
                    if (!this.value) {
                        this.parentElement.querySelector('.form-label').style.color = '#4a5568';
                    }
                });
            });

            // Terms checkbox styling
            termsCheckbox.addEventListener('change', function() {
                if (this.checked) {
                    this.style.backgroundColor = '#667eea';
                    this.style.borderColor = '#667eea';
                } else {
                    this.style.backgroundColor = '';
                    this.style.borderColor = '#cbd5e0';
                }
            });

            // Dynamic greeting based on time of day
            const registerTitle = document.querySelector('.register-title');
            const hour = new Date().getHours();
            let greeting = '¡Comienza Ahora!';
            
            if (hour < 12) {
                greeting = '¡Buen día! Comienza ahora';
            } else if (hour < 18) {
                greeting = '¡Buenas tardes! Comienza ahora';
            } else {
                greeting = '¡Buenas noches! Comienza ahora';
            }
            
            registerTitle.textContent = greeting;

            // Initialize
            updateSubmitButton();
        });
    </script>
</body>
</html>