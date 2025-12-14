## Descripción del proyecto

Este repositorio contiene una aplicación web construida sobre Laravel (v12) diseñada como base funcional y visual para proyectos modernos. La codebase sigue las convenciones de Laravel y agrupa componentes y mejoras pensadas tanto para desarrollo educativo como para despliegues reales.

La aplicación integra varias piezas clave que facilitan la autenticación, el flujo frontend y la experiencia de usuario:

- **Scaffolding y autenticación:** se incluye soporte para scaffolding de autenticación (referencias a `laravel/breeze` en dependencias de desarrollo) que permite generar rápidamente rutas, vistas y controladores de auth.
- **OAuth con Google (Socialite):** integra `laravel/socialite` y contiene las variables de entorno para Google OAuth (`GOOGLE_CLIENT_ID`, `GOOGLE_CLIENT_SECRET`, `GOOGLE_REDIRECT`) para permitir inicio de sesión mediante Google. Las vistas muestran botones y rutas (`/auth/google/redirect`) que inician el flujo OAuth.
- **Frontend moderno:** utiliza Vite y estilos modernos (referencias a `vite.config.js`, `tailwind.config.js` y `resources/css/app.css`). Las vistas principales usan la tipografía Inter y estilos personalizados con gradientes, animaciones y diseño responsive.

### Mejoras y vistas destacadas

- **`welcome.blade.php`:** la página de bienvenida fue rediseñada con un enfoque visual moderno: título destacado con gradiente, mensaje dinámico (saludo según la hora), botones claros para acceso al dashboard o login/registro, y una sección específica para autenticación rápida con Google. También incorpora pequeñas animaciones y efectos de interacción con JavaScript para mejorar la experiencia.

- **`resources/views/auth/login.blade.php`:** la vista de login se refactorizó para ofrecer una tarjeta limpia con header en gradiente, inputs con estados de foco, manejo visual de errores, checkbox de "Recordarme", enlaces para recuperación de contraseña y registro, y el botón "Continuar con Google" que conecta con Socialite.

- **UX y accesibilidad:** ambas vistas contienen mejoras de usabilidad (foco claro, tamaños y contrastes adecuados, diseño responsive) y comportamientos interactivos mínimos sin depender de librerías JavaScript pesadas.

### Herramientas y pruebas

La codebase incluye utilidades y dependencias orientadas al desarrollo y la calidad:

- `laravel/sanctum` para API auth cuando sea necesario.
- `laravel/socialite` para proveedores OAuth.
- `laravel/breeze` en dev para scaffolding de auth si se desea regenerar vistas.
- Suite de pruebas con Pest/PHPUnit preparada en `tests/`.

### Arquitectura y estructura

El proyecto mantiene la estructura estándar de Laravel: rutas en `routes/`, controladores en `app/Http/Controllers/`, modelos en `app/Models/`, migraciones en `database/migrations/`, vistas en `resources/views/` y pruebas en `tests/`. Los scripts de `composer.json` incluyen comandos útiles para tareas comunes de desarrollo.

### Notas internas

- El archivo de entorno contiene variables relevantes para OAuth (Google) y configuración de drivers (sesión, cache, colas) que facilitan pruebas locales y despliegues.
- Las vistas actuales usan CSS y JS inline/ligero para mantener el bundle simple; se puede migrar totalmente a Tailwind/Vite según preferencias del equipo.

### Contribuciones y extensión

El proyecto está preparado para extenderse con nuevas integraciones (más proveedores OAuth, APIs, módulos) y para adaptar el scaffold de auth (usar Breeze o implementar UI personalizada). Quienes colaboren deben priorizar pruebas y mantener la coherencia en estilos y accesibilidad.

---

Trabajo realizado por Luis Donaldo López Martínez