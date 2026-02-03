# Alquiza - Plataforma de Alquiler de Vehículos

**Proyecto Final - Desarrollo de Aplicaciones Web**

**Autores:** Oier Bárcena, Illart Beain, Unax Vizcaíno, Marina Redondo
---

**Alquiza** es una plataforma web completa para la gestión y alquiler de vehículos (coches, motos y furgonetas). El sistema permite a los usuarios registrarse, buscar vehículos disponibles, realizar reservas y gestionar su perfil facilmente. Los administradores tienen acceso a un panel de control para la gestion de vehiculos, usuarios, sucursales y alquileres.

## Requisitos

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

2. **Instalar LAMP Stack**
   ```bash
   sudo apt install apache2 mariadb-server php libapache2-mod-php php-mysql php-mbstring php-curl php-gd php-xml -y
   ```

3. **Configurar Apache**
   ```bash
   sudo a2enmod rewrite
   sudo systemctl restart apache2
   ```

4. **Clonar el repositorio**
   ```bash
   cd /var/www/html
   sudo git clone <URL_DEL_REPOSITORIO> alquiza
   sudo chown -R www-data:www-data alquiza
   ```

5. **Configurar MySQL**
   ```bash
   sudo mysql_secure_installation
   sudo mysql -u root -p < /var/www/html/alquiza/schema.sql
   sudo mysql -u root -p < /var/www/html/alquiza/seed.sql
   ```

6. **Configurar SSL con Let's Encrypt**
   ```bash
   sudo apt install certbot python3-certbot-apache -y
   sudo certbot --apache -d tudominio.com
   ```

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
   ```bash
   sudo systemctl status apache2
   sudo systemctl status mariadb
   ```

2. Acceder vía HTTPS: https://tudominio.com

### Comandos Útiles

```bash
# Reiniciar Apache
sudo systemctl restart apache2

# Ver logs de Apache
sudo tail -f /var/log/apache2/error.log

# Ver logs de MySQL
sudo tail -f /var/log/mysql/error.log

# Verificar estado de servicios
sudo systemctl status apache2 mysql
```

---

## Usuarios de Prueba

### Cuenta de Administrador

- **Email:** ".........."
- **Contraseña:** "......."
- **Rol:** Administrador completo
- **Permisos:** 
  - Gestión de usuarios
  - Gestión de vehículos
  - Gestión de sucursales
  - Gestión de alquileres
  - Acceso al dashboard de administración

### Cuentas de Usuario Regular

#### Usuario 1
- **Email:** "........."
- **Contraseña:** "..........."
- **Rol:** Usuario regular
- **Permisos:**
  - Búsqueda y reserva de vehículos
  - Gestión de perfil personal
  - Historial de alquileres

#### Usuario 2
- **Email:** "........."
- **Contraseña:** "............."
- **Rol:** Usuario regular
- **Permisos:** Mismos que Usuario 1

#### Usuario 3 (Cuenta desactivada)
- **Email:** "..........."
- **Estado:** "........"
- **Propósito:** Probar funcionalidad de desactivación de cuentas


---

## Estructura de Carpetas

Toda la Esctrutura de nuestro proyecto hemos quierido separa el frontend y backend en la carpeta Alquiza, includes entan el navbar y footer, SASS en una carpeta aparte con todos Scss, 
luego img separado por otra carpeta, archivo de JS separado suelto por que es uno y la carpeta de admin con su index separado por que hay se hace todo de añadir coches eliminar etc...

<<<<<<< HEAD
#### Este prototipo no representa el producto final, sino una versión preliminar que nos permite iterar rápidamente, detectar mejoras y alinear la visión del equipo. A medida que el proyecto avance, esta sección se actualizará con nuevas versiones y ajust s.
=======
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

### Importar Base de Datos

```bash
# Método 1: phpMyAdmin (desarrollo)
# Abrir phpMyAdmin → Importar → Seleccionar schema.sql y seed.sql

# Método 2: Línea de comandos (producción)
mysql -u root -p alquiza < schema.sql
mysql -u root -p alquiza < seed.sql
```

---

## 📚 Documentación Adicional

La carpeta [`docs/`](docs/) contiene documentación técnica detallada:

### Manuales Disponibles

1. **[Manual de Instalación en Debian](docs/manual-instalacion-debian.md)**
   - Instalación paso a paso del stack LAMP
   - Configuración de Apache y Virtual Hosts
   - Configuración de SSL/HTTPS con Let's Encrypt
   - Optimización y seguridad del servidor
   - Troubleshooting común

2. **[Manual de Usuario](docs/manual-usuario.md)**
   - Guía de registro e inicio de sesión
   - Búsqueda y filtrado de vehículos
   - Proceso de reserva paso a paso
   - Gestión de perfil
   - Uso del panel de administración (para admins)
   - Preguntas frecuentes

3. **[Decisiones Técnicas](docs/decisiones-tecnicas.md)**
   - Arquitectura del sistema
   - Elección de tecnologías (PHP, MySQL, Apache)
   - Estructura de archivos y organización del código
   - Patrones de diseño implementados
   - Medidas de seguridad:
     - Hashing de contraseñas (SHA-256)
     - Prevención de SQL Injection (PDO preparado)
     - Prevención de XSS
     - Gestión segura de sesiones
     - HTTPS/SSL en producción
   - Consideraciones de rendimiento
   - Escalabilidad y mantenibilidad

---

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

## 🛠️ Tecnologías Utilizadas

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

## 🔐 Seguridad

El proyecto implementa las siguientes medidas de seguridad:

- ✅ **Contraseñas hasheadas** con SHA-256
- ✅ **Prepared Statements (PDO)** para prevenir SQL Injection
- ✅ **Validación de entrada** en cliente y servidor
- ✅ **Sanitización de salida** para prevenir XSS
- ✅ **Gestión segura de sesiones** con tokens
- ✅ **HTTPS/SSL** en producción con certificados Let's Encrypt
- ✅ **Protección contra CSRF** en formularios
- ✅ **Control de acceso basado en roles** (admin/usuario)

---

## 📝 Licencia

Este proyecto es un trabajo académico desarrollado para el curso de Desarrollo de Aplicaciones Web.

**© 2026 - Oier Bárcena, Illart Beain, Unax Vizcaíno, Marina Redondo**

---

## 📞 Contacto y Soporte

Para consultas o soporte:

- **Email del proyecto:** alquiza.soporte@ejemplo.com
- **Issues:** Abrir un issue en el repositorio
- **Documentación:** Ver carpeta `/docs`

---

## 🙏 Agradecimientos

Agradecemos a nuestros profesores y compañeros por el apoyo durante el desarrollo de este proyecto.

---

**Última actualización:** Febrero 2026
>>>>>>> 6ea94c331bd81cb300c913f565d71f3fe55c4ddd

