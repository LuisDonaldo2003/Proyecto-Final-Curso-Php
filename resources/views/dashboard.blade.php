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
        }

        .header {
            background: white;
            padding: 20px 30px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
            position: sticky;
            top: 0;
            z-index: 100;
        }

        .header-content {
            max-width: 1400px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .app-logo {
            font-size: 1.5rem;
            font-weight: 700;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .header-title {
            font-size: 1.5rem;
            font-weight: 600;
            color: #2d3748;
        }

        .header-actions {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .user-profile {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 8px 15px;
            background: #f7fafc;
            border-radius: 10px;
            border: 1px solid #e2e8f0;
        }

        .profile-avatar {
            width: 36px;
            height: 36px;
            border-radius: 50%;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: 600;
        }

        .profile-name {
            font-weight: 500;
            color: #2d3748;
            font-size: 0.95rem;
        }

        .logout-btn {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 8px;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s ease;
            font-family: 'Inter', sans-serif;
            font-size: 0.95rem;
        }

        .logout-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(102, 126, 234, 0.3);
        }

        .main-content {
            padding: 40px 30px;
            max-width: 1400px;
            margin: 0 auto;
        }

        .dashboard-card {
            background: white;
            border-radius: 20px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.1);
            padding: 50px;
            text-align: center;
            animation: fadeIn 0.8s ease-out;
            border: 1px solid #e2e8f0;
            position: relative;
            overflow: hidden;
        }

        .dashboard-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 5px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }

        .welcome-icon {
            font-size: 4rem;
            margin-bottom: 20px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            animation: float 3s ease-in-out infinite;
        }

        .welcome-title {
            font-size: 2.5rem;
            font-weight: 700;
            color: #2d3748;
            margin-bottom: 15px;
        }

        .welcome-text {
            font-size: 1.25rem;
            color: #718096;
            line-height: 1.6;
            max-width: 600px;
            margin: 0 auto 30px;
        }

        .user-info {
            background: linear-gradient(135deg, rgba(102, 126, 234, 0.1) 0%, rgba(118, 75, 162, 0.1) 100%);
            padding: 20px;
            border-radius: 12px;
            margin: 30px auto;
            max-width: 500px;
            border: 1px solid rgba(102, 126, 234, 0.2);
        }

        .info-item {
            display: flex;
            justify-content: space-between;
            padding: 12px 0;
            border-bottom: 1px solid rgba(102, 126, 234, 0.1);
        }

        .info-item:last-child {
            border-bottom: none;
        }

        .info-label {
            font-weight: 500;
            color: #4a5568;
        }

        .info-value {
            font-weight: 600;
            color: #667eea;
        }

        .quick-links {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-top: 40px;
            flex-wrap: wrap;
        }

        .quick-link {
            background: white;
            border: 2px solid #e2e8f0;
            padding: 15px 30px;
            border-radius: 12px;
            text-decoration: none;
            color: #4a5568;
            font-weight: 500;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .quick-link:hover {
            border-color: #667eea;
            color: #667eea;
            transform: translateY(-3px);
            box-shadow: 0 10px 25px rgba(102, 126, 234, 0.1);
        }

        .link-icon {
            font-size: 1.2rem;
        }

        .footer {
            text-align: center;
            margin-top: 60px;
            padding-top: 20px;
            border-top: 1px solid #e2e8f0;
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
            font-size: 0.75rem;
        }

        .footer-link:hover {
            color: #667eea;
        }

        /* Animations */
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

        /* Responsive */
        @media (max-width: 768px) {
            .header-content {
                flex-direction: column;
                gap: 15px;
                text-align: center;
            }
            
            .header-actions {
                width: 100%;
                justify-content: center;
            }
            
            .main-content {
                padding: 20px;
            }
            
            .dashboard-card {
                padding: 30px 20px;
            }
            
            .welcome-title {
                font-size: 2rem;
            }
            
            .welcome-text {
                font-size: 1.125rem;
            }
            
            .quick-links {
                flex-direction: column;
                align-items: center;
            }
            
            .quick-link {
                width: 100%;
                max-width: 300px;
                justify-content: center;
            }
        }

        @media (max-width: 480px) {
            .header {
                padding: 15px 20px;
            }
            
            .user-profile {
                padding: 6px 12px;
            }
            
            .profile-name {
                display: none;
            }
            
            .welcome-icon {
                font-size: 3rem;
            }
            
            .welcome-title {
                font-size: 1.75rem;
            }
            
            .welcome-text {
                font-size: 1rem;
            }
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header class="header">
        <div class="header-content">
            <div class="app-logo">{{ config('app.name', 'Laravel') }}</div>
            <div class="header-title">Dashboard</div>
            <div class="header-actions">
                <div class="user-profile">
                    <div class="profile-avatar">
                        {{ strtoupper(substr(Auth::user()->name, 0, 1)) }}
                    </div>
                    <div class="profile-name">{{ Auth::user()->name }}</div>
                </div>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="logout-btn">
                        Cerrar Sesión
                    </button>
                </form>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main class="main-content">
        <div class="dashboard-card">
            <div class="welcome-icon">🎉</div>
            <h1 class="welcome-title">¡Has iniciado sesión correctamente!</h1>
            <p class="welcome-text">
                Bienvenido a tu panel de control. Aquí puedes gestionar tu cuenta 
                y acceder a todas las funcionalidades disponibles en esta versión preliminar.
            </p>
            
            <div class="user-info">
                <div class="info-item">
                    <span class="info-label">Nombre:</span>
                    <span class="info-value">{{ Auth::user()->name }}</span>
                </div>
                <div class="info-item">
                    <span class="info-label">Email:</span>
                    <span class="info-value">{{ Auth::user()->email }}</span>
                </div>
                <div class="info-item">
                    <span class="info-label">Último acceso:</span>
                    <span class="info-value">{{ now()->format('d/m/Y H:i') }}</span>
                </div>
            </div>
        </div>

        <div class="footer">
            <p>© {{ date('Y') }} {{ config('app.name', 'Laravel') }}. Todos los derechos reservados.</p>
            <div class="footer-links">
                <a href="#" class="footer-link">Versión preliminar • Realizado por Luis Donado López Martínez</a>
            </div>
        </div>
    </main>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Dynamic greeting based on time of day
            const welcomeTitle = document.querySelector('.welcome-title');
            const welcomeIcon = document.querySelector('.welcome-icon');
            const hour = new Date().getHours();
            
            let greeting = '¡Has iniciado sesión correctamente!';
            let icon = '🎉';
            
            if (hour < 12) {
                greeting = '¡Buenos días! Has iniciado sesión';
                icon = '☀️';
            } else if (hour < 18) {
                greeting = '¡Buenas tardes! Has iniciado sesión';
                icon = '🌤️';
            } else {
                greeting = '¡Buenas noches! Has iniciado sesión';
                icon = '🌙';
            }
            
            welcomeTitle.textContent = greeting;
            welcomeIcon.textContent = icon;
            
            // Add hover effects to quick links
            const quickLinks = document.querySelectorAll('.quick-link');
            quickLinks.forEach(link => {
                link.addEventListener('mouseenter', function() {
                    this.style.transform = 'translateY(-3px)';
                });
                
                link.addEventListener('mouseleave', function() {
                    this.style.transform = 'translateY(0)';
                });
            });
            
            // Smooth animation for card
            const dashboardCard = document.querySelector('.dashboard-card');
            dashboardCard.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-5px)';
            });
            
            dashboardCard.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0)';
            });
            
            // Update time every minute
            function updateTime() {
                const timeElement = document.querySelector('.info-item:nth-child(3) .info-value');
                if (timeElement) {
                    const now = new Date();
                    timeElement.textContent = now.toLocaleDateString('es-ES', {
                        day: '2-digit',
                        month: '2-digit',
                        year: 'numeric',
                        hour: '2-digit',
                        minute: '2-digit'
                    });
                }
            }
            
            // Update time initially and every minute
            updateTime();
            setInterval(updateTime, 60000);
        });
    </script>
</body>
</html>