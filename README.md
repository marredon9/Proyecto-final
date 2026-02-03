# Alquiza - Plataforma de Alquiler de Vehículos

**Proyecto Final - Desarrollo de Aplicaciones Web**

# Prototipo de la Página Web del Proyecto
**Autores:** Oier Bárcena, Illart Beain, Unax Vizcaíno, Marina Redondo
---

**Alquiza** es una plataforma web completa para la gestión y alquiler de vehículos (coches, motos y furgonetas). El sistema permite a los usuarios registrarse, buscar vehículos disponibles, realizar reservas y gestionar su perfil facilmente. Los administradores tienen acceso a un panel de control para la gestion de vehiculos, usuarios, sucursales y alquileres.

## Tecnologías Utilizadas
    Desarrollo localmente:
    -Xampp
    -PHP
    -Html, CSS, Bootstrap 5 y SASS
    -JavaScript
    -MySQL
    -GitHub
---

    Para desplegarlo:
    -Debian Nginx
    -Permisos de todo
    -HTTPS

## Instalación

### Primero: Instalar Localmente XAMPP

1. **Descargar e instalar XAMPP**

2. **Clonar el repositorio**
   cd C:\xampp\htdocs

   git clone <https://github.com/marredon9/Proyecto-final.git> Proyecto-final

3. **Configurar la base de datos**
    -Primero hacer la base de datos en MySQL.
    -Hacer un bd.sql con las tablas.
    -Configurar la conexion de la base de datos.

4. **Proyecto**
   - Hacer todo el trabajo PHP, js, etc...

###  Segundo: Instalación Debian

**Pasos resumidos:**

1. **Actualizar el sistema**
   ```bash
   sudo apt update && sudo apt upgrade -y
   ```

2. **Configurar Apache**

3. **Clonar el repositorio**
   ```bash
   cd /var/www/html
   sudo git clone <URL_DEL_REPOSITORIO> alquiza
   sudo chown -R www-data:www-data alquiza
   ```

4. **Configurar MySQL**

---

## Configuración
La configuracion del proyecto asi la hemos hecho:

### Configuración de Base de Datos

```php
<?php
$host = "localhost";
$dbname = "alquiza";
$username = "root";
$password = "root";  

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    ("Error de conexión: " . $e->getMessage());
}
?>
```

### Configuración de PHPs
Planeamos hacer el Frontend Marina, Illart y Oier, y el Backend Unax.

    Saber que hace cada PHP para dividirlos en:
    -Frontend
        -Index, Iniciar Sesion, Registrar ...
    -Backend
        -AlquilarCoche, BorrarAlquiler ...

### Configuración de SASS
Primero hicimos todo en CSS pero al final lo cambiamos a SASS para mejor funcionamiento a la larga.

    Carpeta con los SASS:
    -_variables.scss -Define colores globales
    -_navbar.scss -menú superior
    -_footer.scss -pie página
    -_hero.scss -banner principal
    -_cards.scss -tarjetas vehículos
    -_form.scss -formularios Iniciar Sesion y Registrarse
    -_buttons.scss -todos los botones
    -_section.scss -secciones generales
    -_faq.scss -preguntas frecuentes
    -main-light.scss -tema claro(cookie)
    -main-dark.scss -tema oscuro(cookie)

### Configuración de JavaScript
El javaScript se iba añadiendo mediante cada uno que iria añadiendo su parte del codigo.
Hemos hecho solo un archivo de javaScript y si era poco codigo abajo del PHP lo hemos añadido.
   
    Archivos JS:
    -script.js

---

## Ejecución

### Modo Desarrollo (Local)

1. Iniciar XAMPP Control Panel
2. Arrancar Apache y MySQL
3. Abrir navegador: http://localhost/Proyecto-final/Alquiza/index.php

### Modo Producción (Debian)

1. Verificar que Apache y MySQL estén ejecutándose:
   ```
   sudo systemctl status apache
   sudo systemctl status MySQL
   ```

2. Acceder vía HTTPS: https://alquiza.com


3. Iniciar toda la pagina
---

## Usuarios de Prueba

### Cuenta de Administrador

- **Email:** "ejemplo@hotmail.com"
- **Contraseña:** "......."
- **Rol:** Administrador completo
- **Permisos:** 
  - Gestión de usuarios
  - Gestión de vehículos
  - Gestión de alquileres
  - Acceso al administración

### Cuentas de Usuario Regular

#### Usuario
- **Email:** El gmail que inicies sesion
- **Contraseña:** contraseña que tu quieras
- **Rol:** Usuario normal
- **Permisos:**
  - Búsqueda y reserva de vehículos
  - Gestión de perfil personal de usuario

---

## Estructura de Carpetas

Toda la Esctrutura de nuestro proyecto hemos quierido separa el frontend y backend en la carpeta Alquiza, includes entan el navbar y footer, SASS en una carpeta aparte con todos Scss, 
luego img separado por otra carpeta, archivo de JS separado suelto por que es uno y la carpeta de admin con su index separado por que hay se hace todo de añadir coches eliminar etc...

### Descripción de Carpetas Principales

- **Alquiza/**: Contiene toda la interfaz de usuario (frontend) y las páginas públicas
    img/ - Imágenes y recursos visuales
    includes/ - Componentes reutilizables (navbar, footer)
    sass/ - Archivos de estilos SCSS

- **xampp/**: Contiene la lógica del servidor (backend) y el panel de administración
    admin/ - Panel de administración
    include/ - Archivos de configuración (db.php, debug.php, sesionUsuario.php)

- **docs/**: Documentación técnica y manuales
    manual-instalacion-debian.md - Guía de instalación en Debian
    manual-usuario.md - Manual de usuario (flujo de uso)
    decisiones-tecnicas.md - Decisiones técnicas (servidor, estructura, seguridad)
    evidencias-despliegue/ - Capturas, configuración, logs, videos

- **sass/**: Archivos de estilos SCSS
- **includes/**: Componentes reutilizables (navbar, footer, etc.)

```
Proyecto-final/
│
├── Alquiza/                          # Frontend de la aplicación
│   ├── index.php                     # Página principal
│   ├── IniciarSesion.php            # Página de login
│   ├── Registrarse.php              # Página de registro
│   ├── buscar.php                   # Búsqueda de vehículos
│   ├── coches.php                   # Listado de coches
│   ├── motos.php                    # Listado de motos
│   ├── furgonetas.php               # Listado de furgonetas
│   ├── reservar.php                 # Sistema de reservas
│   ├── Desactivar.php               # Desactivar cuenta
│   ├── contacto.php                 # Página de contacto
│   ├── NuestrasSucursales.php       # Mapa de sucursales
│   ├── PreguntasFrecuentes.php      # FAQ
│   │
│   ├── includes/                    # Componentes reutilizables
│   │   ├── navbar.php               # Barra de navegación
│   │   └── footer.php               # Pie de página
│   │
│   ├── sass/                        # Estilos SCSS
│   │   ├── _variables.scss          # Variables de diseño
│   │   ├── _navbar.scss             # Estilos de navegación
│   │   ├── _footer.scss             # Estilos de footer
│   │   ├── _hero.scss               # Sección hero
│   │   ├── _cards.scss              # Tarjetas de vehículos
│   │   ├── _form.scss               # Formularios
│   │   ├── _buttons.scss            # Botones
│   │   ├── _section.scss            # Secciones
│   │   ├── _faq.scss                # FAQ
│   │   ├── main-light.scss          # Tema claro
│   │   ├── main-light.css           # CSS compilado (tema claro)
│   │   ├── main-dark.scss           # Tema oscuro
│   │   └── main-dark.css            # CSS compilado (tema oscuro)
│   │
│   ├── img/                         # Imágenes y recursos
│   │   └── ibiza.avif               # Ejemplo de imagen
│   │
│   ├── script.js                    # JavaScript del frontend
│   │
│   └── [páginas legales]            # Información legal
│       ├── Informacion_legal.php
│       ├── TerminosCondiciones.php
│       ├── PoliticaPrivacidad.php
│       ├── PoliticaCookies.php
│       ├── PoliticasDaños.php
│       ├── PoliticasDeposito.php
│       ├── MencionesLegales.php
│       └── SitesMaps.php
│
├── xampp/                           # Backend y lógica de negocio
│   ├── index.php                    # Dashboard principal
│   ├── login.php                    # Lógica de login
│   ├── registro.php                 # Lógica de registro
│   ├── iniciarSesion.php            # Procesamiento de login
│   ├── registrarUsuario.php         # Procesamiento de registro
│   ├── sesionUsuario.php            # Gestión de sesiones
│   ├── miPerfil.php                 # Perfil de usuario
│   ├── cerrarSesion.php             # Cerrar sesión
│   ├── desactivarMiCuenta.php       # Desactivar cuenta
│   ├── include.php                  # Includes generales
│   │
│   ├── admin/                       # Panel de administración
│   │   ├── index.php                # Dashboard admin
│   │   └── include.php              # Includes admin
│   │
│   └── include/                     # Archivos de configuración
│       ├── db.php                   # Conexión a base de datos
│       ├── debug.php                # Utilidades de debug
│       └── sesionUsuario.php        # Gestión de sesiones
│
├── docs/                            # Documentación del proyecto
│   ├── manual-instalacion-debian.md # Guía de instalación en Debian
│   ├── manual-usuario.md            # Manual de usuario
│   ├── decisiones-tecnicas.md       # Decisiones técnicas y arquitectura
│   └── evidencias-despliegue/       # Capturas y videos
│       ├── capturas/                # Screenshots
│       └── videos/                  # Videos demostrativos
│
├── bd.sql                           # Script SQL original
├── schema.sql                       # Estructura de base de datos
├── seed.sql                         # Datos de prueba
├── README.md                        # Este archivo
└── .git/                            # Control de versiones Git
```

---

## Base de Datos

### Esquema de Base de Datos

La base de datos `alquiza` consta de las siguientes tablas:

#### Tabla: `usuario`
Almacena información de usuarios registrados (clientes y administradores).

| Campo | Tipo | Descripción |
|-------|------|-------------|
| id | INT (PK, AI) | ID único del usuario |
| nombre | VARCHAR(128) | Nombre del usuario |
| apellido1 | VARCHAR(128) | Primer apellido |
| apellido2 | VARCHAR(128) | Segundo apellido (opcional) |
| dni | VARCHAR(16) | DNI único |
| email | VARCHAR(128) | Email único |
| contraseña | VARCHAR(64) | Contraseña hasheada |
| fecha_nac | DATE | Fecha de nacimiento |
| es_admin | BOOLEAN | Indica si es administrador |
| desactivado | BOOLEAN | Indica si la cuenta está desactivada |

#### Tabla: `sucursal`
Almacena información de las sucursales de alquiler.

| Campo | Tipo | Descripción |
|-------|------|-------------|
| id | INT (PK, AI) | ID único de la sucursal |
| nombre | VARCHAR(128) | Nombre de la sucursal |
| direccion | VARCHAR(256) | Dirección completa |
| latitud | FLOAT | Coordenada de latitud |
| longitud | FLOAT | Coordenada de longitud |
| telefono | NUMERIC(16) | Teléfono de contacto |

#### Tabla: `marca`
Almacena las marcas de vehículos.

| Campo | Tipo | Descripción |
|-------|------|-------------|
| id | INT (PK, AI) | ID único de la marca |
| nombre | VARCHAR(64) | Nombre de la marca |
| ruta_img | VARCHAR(1024) | Ruta de la imagen del logo |

#### Tabla: `modelo`
Almacena los modelos de vehículos.

| Campo | Tipo | Descripción |
|-------|------|-------------|
| id | INT (PK, AI) | ID único del modelo |
| id_marca | INT (FK) | Referencia a la marca |
| potencia | NUMERIC(3) | Potencia en CV |
| asientos | NUMERIC(2) | Número de asientos |
| puertas | NUMERIC(2) | Número de puertas |
| maletero | BOOLEAN | Tiene maletero |
| traccion | VARCHAR(16) | Tipo de tracción |
| modo | VARCHAR(16) | Manual o automático |
| extras | VARCHAR(128) | Extras incluidos |

#### Tabla: `vehiculo`
Almacena información de cada vehículo individual.

| Campo | Tipo | Descripción |
|-------|------|-------------|
| id | INT (PK, AI) | ID único del vehículo |
| matricula | VARCHAR(16) | Matrícula única |
| estado | VARCHAR(32) | Estado actual (disponible, alquilado) |
| id_modelo | INT (FK) | Referencia al modelo |
| id_m | INT (FK) | Referencia a la marca |
| km | NUMERIC(7) | Kilómetros recorridos |
| baca | BOOL | Tiene baca |
| bola | BOOL | Tiene bola de remolque |
| ruta_img | VARCHAR(1024) | Ruta de imagen del vehículo |
| tiene_defecto | VARCHAR(64) | Descripción de defectos |
| motor | VARCHAR(32) | Tipo de motor |
| antiniebla_trasero | BOOL | Tiene antiniebla trasero |
| capacidad | NUMERIC(3) | Capacidad de carga (para furgonetas) |
| silla_ninos | BOOL | Tiene silla para niños |
| id_usuario | INT (FK) | Usuario que lo gestionó |
| emisiones | VARCHAR(3) | Etiqueta de emisiones |
| tipo | VARCHAR(64) | Tipo: coche, moto, furgoneta |
| id_sucursal | INT (FK) | Sucursal donde se encuentra |

#### Tabla: `alquiler`
Almacena información de los alquileres realizados.

| Campo | Tipo | Descripción |
|-------|------|-------------|
| id | INT (PK, AI) | ID único del alquiler |
| id_us | INT (FK) | Referencia al usuario |
| id_ve | INT (FK) | Referencia al vehículo |
| fianza | NUMERIC(5,2) | Monto de la fianza |
| metodo_pago | VARCHAR(64) | Método de pago utilizado |
| id_suc_rec | INT (FK) | Sucursal de recogida |
| id_suc_dev | INT (FK) | Sucursal de devolución |
| devuelto | BOOLEAN | Indica si fue devuelto |

### Scripts SQL

- **`schema.sql`**: Contiene la estructura completa de la base de datos (CREATE TABLE)
- **`seed.sql`**: Contiene datos de prueba (INSERT INTO)


## 📸 Evidencias de Despliegue

### Ubicación de Evidencias

Las evidencias de despliegue se encuentran en la carpeta: **`docs/evidencias-despliegue/`**

### Capturas de Pantalla

📁 **`docs/evidencias-despliegue/capturas/`**

Incluye capturas de pantalla que demuestran:

1. **`01-https-certificado.png`** - Acceso HTTPS con certificado SSL válido
2. **`02-login-exitoso.png`** - Inicio de sesión exitoso
3. **`03-dashboard-admin.png`** - Panel de administración
4. **`04-crud-vehiculos.png`** - Operaciones CRUD de vehículos
5. **`05-crud-usuarios.png`** - Gestión de usuarios
6. **`06-lista-alquileres.png`** - Listado de alquileres
7. **`07-configuracion-apache.png`** - Configuración de Apache
8. **`08-logs-sistema.png`** - Logs del sistema
9. **`09-base-datos.png`** - Base de datos configurada
10. **`10-responsive-mobile.png`** - Vista responsive en móvil

### Videos Demostrativos

📁 **`docs/evidencias-despliegue/videos/`**

Videos cortos (2-5 minutos) que muestran:

1. **`demo-completa.mp4`** - Demo completa del sistema funcionando
   - Acceso HTTPS
   - Registro de usuario
   - Login
   - Búsqueda de vehículos
   - Reserva de vehículo
   - Panel de administración
   - CRUD de entidades

2. **`instalacion-debian.mp4`** - Proceso de instalación en Debian
   - Instalación del stack LAMP
   - Configuración de SSL
   - Importación de base de datos

### Logs y Configuración

📁 **`docs/evidencias-despliegue/logs/`**

Archivos de log sanitizados (sin información sensible):

- **`apache-access.log`** - Registro de accesos HTTP
- **`apache-error.log`** - Registro de errores de Apache
- **`mysql-error.log`** - Registro de errores de MySQL
- **`php-error.log`** - Registro de errores de PHP

📁 **`docs/evidencias-despliegue/configuracion/`**

Archivos de configuración (sanitizados):

- **`apache-site.conf`** - Configuración del Virtual Host de Apache
- **`php.ini`** - Configuración de PHP
- **`my.cnf`** - Configuración de MySQL

### Formato de Evidencias

- **Imágenes:** PNG o JPG, resolución mínima 1920x1080
- **Videos:** MP4, H.264, resolución 1080p, máximo 5 minutos
- **Logs:** Archivos de texto plano (.log o .txt)

**⚠️ Nota:** Todas las evidencias han sido sanitizadas para no exponer información sensible (contraseñas, tokens, IPs privadas, etc.)

---

## Tecnologías Utilizadas

### Backend
- **PHP 7.4+** - Lenguaje de programación del servidor
- **MySQL/MariaDB** - Sistema de gestión de base de datos
- **PDO** - Capa de abstracción de base de datos

### Frontend
- **HTML5** - Estructura de páginas
- **CSS3 / SCSS** - Estilos y diseño
- **JavaScript (Vanilla)** - Interactividad del cliente
- **Bootstrap 5** (si se usa) - Framework CSS

### Servidor
- **Apache 2.4** - Servidor web
- **Debian 11** - Sistema operativo de producción
- **Let's Encrypt** - Certificados SSL/TLS

### Control de Versiones
- **Git** - Sistema de control de versiones
- **GitHub/GitLab** - Repositorio remoto

### Herramientas de Desarrollo
- **XAMPP** - Entorno de desarrollo local
- **phpMyAdmin** - Gestión de base de datos
- **VSCode** - Editor de código
- **SASS** - Preprocesador CSS

---

## Conclusion
Alquiza es una plataforma para el alquiler y gestión de vehículos, desarrollada con las tecnologías ya mencionadas. El proyecto se separo claramente frontend y backend, facilitando el proyecti. Incluye documentación, evidencias de despliegue y una base de datos bien estructurada. Su diseño sencillo y su facilidad hace que la pagina sea muy bonita y sencilla.


---

**Última actualización:** Febrero 2026
