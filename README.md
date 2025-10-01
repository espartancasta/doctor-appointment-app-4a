<p align="center"> <a href="https://laravel.com" target="_blank"> <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"> </a> </p>
Panel Administrativo con Laravel y Flowbite 🚀

Este proyecto crea una plantilla base para un panel administrativo en Laravel, usando componentes Blade y la librería de UI Flowbite sobre Tailwind CSS.
El objetivo es construir un layout modular y reutilizable para todas las vistas protegidas de la aplicación.

Pasos de la Implementación ✨
1️⃣ Creación del Layout (admin.blade.php)

Para establecer la plantilla base del panel administrativo se hicieron los siguientes pasos:

Se creó un componente Blade llamado AdminLayout.

La vista del componente, admin-layout.blade.php, se movió a la carpeta layouts y se renombró como admin.blade.php para una mejor organización.

Se actualizó la clase del componente para que apunte a la nueva ubicación del archivo Blade.

2️⃣ Integración de Flowbite

Para construir la interfaz del panel:

Se agregó Flowbite como dependencia del proyecto.

El código del navbar (barra superior) y del sidebar (barra lateral) se tomó de la documentación oficial de Flowbite y se separó en archivos independientes dentro de layouts/includes/admin/.

Estos componentes se incluyeron en admin.blade.php usando las directivas de Blade, asegurando que estén en todas las páginas que hereden el layout.

3️⃣ Prueba de Slots e Includes

Para verificar que todo funcionara correctamente:

La vista principal del dashboard usa el layout envolviendo el contenido en <x-admin-layout> y mostrando texto de prueba como “Hola desde Admin”.

Cada página inyecta su contenido dinámicamente en {{ $slot }}, evitando duplicar código.

La vista de perfil de usuario se adaptó para usar AdminLayout, reemplazando <x-app-layout> por <x-admin-layout> para mantener coherencia visual.
