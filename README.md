<p align="center">
  <a href="https://laravel.com" target="_blank">
    <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo">
  </a>
</p>

# Panel de Administración con Laravel y Flowbite

Este proyecto establece una plantilla base para un panel de administración en *Laravel*, haciendo uso de componentes **Blade** y la librería de UI *Flowbite* sobre Tailwind CSS. La meta es construir una estructura de layout modular y reutilizable para las vistas protegidas de la aplicación.

---

## Pasos de Implementación 🚀

### 1. Creación del Layout (admin.blade.php)

Para generar la plantilla base para las vistas del panel de administración, se siguieron estos pasos:

- **Generación del Componente**: Se utilizó Artisan para crear un nuevo componente Blade llamado AdminLayout con este comando:

```bash
php artisan make:component AdminLayout
