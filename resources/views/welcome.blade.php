<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>

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

        .welcome-container {
            width: 100%;
            max-width: 800px;
            text-align: center;
            animation: fadeIn 0.8s ease-out;
        }

        .welcome-title {
            font-size: 4.5rem;
            font-weight: 800;
            color: #2d3748;
            margin-bottom: 20px;
            line-height: 1.1;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .app-name {
            font-size: 2.5rem;
            font-weight: 600;
            color: #4a5568;
            margin-bottom: 40px;
        }

        .welcome-message {
            font-size: 1.25rem;
            color: #718096;
            line-height: 1.6;
            max-width: 600px;
            margin: 0 auto 50px;
        }

        .action-buttons {
            display: flex;
            gap: 20px;
            justify-content: center;
            margin-bottom: 30px;
            flex-wrap: wrap;
        }

        .btn {
            padding: 18px 36px;
            border-radius: 12px;
            font-weight: 600;
            text-decoration: none;
            transition: all 0.3s ease;
            border: none;
            font-size: 1.125rem;
            cursor: pointer;
            display: inline-flex;
            align-items: center;
            gap: 12px;
            min-width: 200px;
            justify-content: center;
        }

        .btn-primary {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            box-shadow: 0 4px 15px rgba(102, 126, 234, 0.3);
        }

        .btn-primary:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(102, 126, 234, 0.4);
        }

        .btn-outline {
            background: white;
            color: #667eea;
            border: 2px solid #667eea;
        }

        .btn-outline:hover {
            background: #667eea;
            color: white;
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(102, 126, 234, 0.2);
        }

        .btn-icon {
            width: 24px;
            height: 24px;
        }

        /* Google Button Styles */
        .google-auth-section {
            margin-top: 40px;
            padding: 30px;
            background: white;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
            display: inline-block;
            max-width: 400px;
        }

        .google-title {
            color: #4a5568;
            font-size: 1.125rem;
            margin-bottom: 20px;
            font-weight: 500;
        }

        .btn-google {
            background: white;
            color: #5f6368;
            border: 1px solid #dadce0;
            padding: 14px 24px;
            border-radius: 8px;
            font-weight: 500;
            text-decoration: none;
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            gap: 12px;
            font-size: 1rem;
            width: 100%;
            justify-content: center;
        }

        .btn-google:hover {
            background: #f8f9fa;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            transform: translateY(-2px);
            border-color: #d2e3fc;
        }

        .google-icon {
            width: 20px;
            height: 20px;
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

        .welcome-footer {
            margin-top: 60px;
            color: #a0aec0;
            font-size: 0.875rem;
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
        }

        .footer-link:hover {
            color: #667eea;
        }

        @keyframes fadeIn {
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

        @media (max-width: 768px) {
            .welcome-title {
                font-size: 3.5rem;
            }
            
            .app-name {
                font-size: 2rem;
            }
            
            .welcome-message {
                font-size: 1.125rem;
                padding: 0 20px;
            }
            
            .action-buttons {
                flex-direction: column;
                align-items: center;
            }
            
            .btn {
                width: 100%;
                max-width: 300px;
            }

            .google-auth-section {
                width: 100%;
                max-width: 300px;
            }
        }

        @media (max-width: 480px) {
            .welcome-title {
                font-size: 2.8rem;
            }
            
            .app-name {
                font-size: 1.75rem;
            }
            
            .welcome-message {
                font-size: 1rem;
            }
            
            .btn {
                padding: 16px 24px;
                font-size: 1rem;
            }

            .google-auth-section {
                padding: 20px;
            }
        }
    </style>
</head>
<body>
    <div class="welcome-container">
        <div class="floating">
            <h1 class="welcome-title">¡Bienvenidos!</h1>
        </div>
        
        <p class="welcome-message">
            Estas experimentando una versión preliminar de la aplicación. Algunas funcionalidades pueden no estar disponibles o ser inestables. Agradecemos tu comprensión mientras trabajamos para mejorar la experiencia.
        </p>
        
        <div class="action-buttons">
            @if (Route::has('login'))
                @auth
                    <a href="{{ url('/dashboard') }}" class="btn btn-primary">
                        <svg class="btn-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"/>
                        </svg>
                        Continuar al Dashboard
                    </a>
                @else
                    <a href="{{ route('login') }}" class="btn btn-primary">
                        <svg class="btn-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"/>
                        </svg>
                        Iniciar Sesión
                    </a>
                    
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="btn btn-outline">
                            <svg class="btn-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"/>
                            </svg>
                            Registrarse
                        </a>
                    @endif
                @endauth
            @endif
        </div>

        <!-- Divider -->
        <div class="divider">
            <span>O continúa con</span>
        </div>

        <!-- Google Auth Section -->
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
        
        <div class="welcome-footer">
            <p>© {{ date('Y') }} {{ config('app.name', 'Laravel') }}. Todos los derechos reservados.</p>
            <div class="footer-links">
                <a href="https://github.com/LuisDonaldo2003" class="footer-link">Realizado por Luis Donaldo López Martínez</a>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Add hover effects to all buttons
            const buttons = document.querySelectorAll('.btn, .btn-google');
            buttons.forEach(btn => {
                btn.addEventListener('mouseenter', function() {
                    this.style.transform = 'translateY(-3px)';
                });
                btn.addEventListener('mouseleave', function() {
                    this.style.transform = 'translateY(0)';
                });
            });

            // Add greeting based on time of day
            const welcomeTitle = document.querySelector('.welcome-title');
            const hour = new Date().getHours();
            let greeting = '¡Bienvenidos!';
            
            if (hour < 12) {
                greeting = '¡Buenos días!';
            } else if (hour < 18) {
                greeting = '¡Buenas tardes!';
            } else {
                greeting = '¡Buenas noches!';
            }
            
            welcomeTitle.textContent = greeting;

            
        });
    </script>
</body>
</html>