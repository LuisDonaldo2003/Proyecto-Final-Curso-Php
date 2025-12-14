<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Iniciar Sesión</title>

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

        .login-container {
            width: 100%;
            max-width: 480px;
            background: white;
            border-radius: 20px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            animation: slideUp 0.6s ease-out;
        }

        .login-header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            padding: 50px 40px 40px;
            text-align: center;
            color: white;
        }

        .login-title {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 10px;
        }

        .login-subtitle {
            font-size: 1.125rem;
            opacity: 0.9;
            font-weight: 400;
        }

        .login-content {
            padding: 40px;
        }

        .form-group {
            margin-bottom: 25px;
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

        .error-message {
            color: #f56565;
            font-size: 0.875rem;
            margin-top: 6px;
        }

        .remember-forgot {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
        }

        .remember-me {
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .remember-checkbox {
            width: 18px;
            height: 18px;
            border-radius: 4px;
            border: 2px solid #cbd5e0;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .remember-checkbox:checked {
            background-color: #667eea;
            border-color: #667eea;
        }

        .remember-label {
            font-size: 0.875rem;
            color: #4a5568;
            cursor: pointer;
        }

        .forgot-link {
            font-size: 0.875rem;
            color: #667eea;
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s ease;
        }

        .forgot-link:hover {
            color: #764ba2;
            text-decoration: underline;
        }

        .login-button {
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
            margin-bottom: 25px;
        }

        .login-button:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(102, 126, 234, 0.3);
        }

        .login-button:active {
            transform: translateY(0);
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

        .register-link {
            text-align: center;
            margin-top: 30px;
            color: #718096;
            font-size: 0.875rem;
        }

        .register-link a {
            color: #667eea;
            text-decoration: none;
            font-weight: 600;
            margin-left: 5px;
            transition: color 0.3s ease;
        }

        .register-link a:hover {
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
            .login-container {
                max-width: 100%;
            }
            
            .login-header {
                padding: 40px 30px 30px;
            }
            
            .login-content {
                padding: 30px;
            }
            
            .login-title {
                font-size: 2rem;
            }
            
            .remember-forgot {
                flex-direction: column;
                align-items: flex-start;
                gap: 15px;
            }
            
            .forgot-link {
                align-self: flex-start;
            }
        }

        @media (max-width: 480px) {
            .login-header {
                padding: 30px 20px 20px;
            }
            
            .login-content {
                padding: 20px;
            }
            
            .login-title {
                font-size: 1.75rem;
            }
            
            .form-input, .login-button, .btn-google {
                padding: 14px 18px;
            }
        }
    </style>
</head>
<body>
    <div class="login-container">
        <div class="login-header floating">
            <h1 class="login-title">¡Hola de nuevo!</h1>
            <p class="login-subtitle">Ingresa a tu cuenta para continuar</p>
        </div>
        
        <div class="login-content">
            <!-- Session Status -->
            @if (session('status'))
                <div style="background: #48bb78; color: white; padding: 12px; border-radius: 8px; margin-bottom: 20px; font-size: 0.875rem;">
                    {{ session('status') }}
                </div>
            @endif
            
            @if ($errors->any())
                <div style="background: #fed7d7; color: #c53030; padding: 12px; border-radius: 8px; margin-bottom: 20px; font-size: 0.875rem;">
                    @foreach ($errors->all() as $error)
                        <p>{{ $error }}</p>
                    @endforeach
                </div>
            @endif
            
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <!-- Email Address -->
                <div class="form-group">
                    <label for="email" class="form-label">Correo Electrónico</label>
                    <input id="email" 
                           class="form-input" 
                           type="email" 
                           name="email" 
                           value="{{ old('email') }}" 
                           required 
                           autofocus 
                           autocomplete="username"
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
                           autocomplete="current-password"
                           placeholder="••••••••">
                    @if ($errors->has('password'))
                        <span class="error-message">{{ $errors->first('password') }}</span>
                    @endif
                </div>

                <!-- Remember Me & Forgot Password -->
                <div class="remember-forgot">
                    <label class="remember-me">
                        <input id="remember_me" 
                               type="checkbox" 
                               class="remember-checkbox" 
                               name="remember">
                        <span class="remember-label">Recordarme</span>
                    </label>
                    
                    @if (Route::has('password.request'))
                        <a class="forgot-link" href="{{ route('password.request') }}">
                            ¿Olvidaste tu contraseña?
                        </a>
                    @endif
                </div>

                <button type="submit" class="login-button">
                    Iniciar Sesión
                </button>
            </form>

            <!-- Divider -->
            <div class="divider">
                <span>O continúa con</span>
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
                    Continuar con Google
                </a>
            </div>

            <!-- Register Link -->
            <div class="register-link">
                ¿No tienes una cuenta?
                @if (Route::has('register'))
                    <a href="{{ route('register') }}">Regístrate aquí</a>
                @endif
            </div>

            <!-- Footer -->
            <div class="footer">
                <p>© {{ date('Y') }} {{ config('app.name', 'Laravel') }}. Todos los derechos reservados.</p>
                <p style="margin-top: 15px; font-size: 0.75rem; color: #cbd5e0;">
                    Realizado por Luis Donado López Martínez
                </p>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Dynamic greeting based on time of day
            const loginTitle = document.querySelector('.login-title');
            const hour = new Date().getHours();
            let greeting = '¡Hola de nuevo!';
            
            if (hour < 12) {
                greeting = '¡Buenos días!';
            } else if (hour < 18) {
                greeting = '¡Buenas tardes!';
            } else {
                greeting = '¡Buenas noches!';
            }
            
            loginTitle.textContent = greeting;

            // Add hover effect to Google button
            const googleBtn = document.querySelector('.btn-google');
            googleBtn.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-3px)';
            });
            googleBtn.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0)';
            });

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

            // Checkbox styling
            const checkbox = document.getElementById('remember_me');
            checkbox.addEventListener('change', function() {
                if (this.checked) {
                    this.style.backgroundColor = '#667eea';
                    this.style.borderColor = '#667eea';
                } else {
                    this.style.backgroundColor = '';
                    this.style.borderColor = '#cbd5e0';
                }
            });
        });
    </script>
</body>
</html>