# Gestor ADSO v01 — Proyecto Integrador ABP

Proyecto base desarrollado con el framework Laravel y PHP para el seguimiento y gestión de procesos del programa Análisis y Desarrollo de Software (ADSO) - SENA Regional Antioquia (CTMA).

---

## 1. Entorno de Desarrollo y Versiones Reales
Valores técnicos comprobados y registrados en el equipo local:

- **Sistema Operativo:** Windows 11
- **Intérprete PHP:** 8.2.12 (CLI ubicado en `C:\xampp\php\php.exe`)
- **Gestor de Dependencias:** Composer 2.10.3
- **Framework:** Laravel 12.69.3
- **Motor de Base de Datos:** MariaDB / MySQL (XAMPP Control Panel v3.3.0 en puerto 3306)
- **Control de Versiones:** Git 2.55.0.windows.3
- **Editor de Código:** Visual Studio Code 1.140.0

---

## 2. Requisitos Previos y Configuración de PHP
1. Disponer de XAMPP con los servicios de **Apache** y **MySQL** activos.
2. Comprobar en el archivo `C:\xampp\php\php.ini` que se encuentren habilitadas las siguientes extensiones requeridas por Laravel:
   - `fileinfo`
   - `mbstring`
   - `openssl`
   - `pdo_mysql`
   - `zip`

---

## 3. Pasos de Instalación y Puesta en Marcha

### Paso 1: Obtener el proyecto
Clonar el repositorio desde GitHub o abrir la carpeta raíz:
```bash
git clone [https://github.com/delos-10/gestor-adso.git](https://github.com/delos-10/gestor-adso.git)
cd gestor-adso