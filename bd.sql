/*
CREATE TABLE usuario (
	id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    nombre VARCHAR(128) NOT NULL,
    apellido1 VARCHAR(128) NOT NULL,
    apellido2 VARCHAR(128),
    dni VARCHAR(16) UNIQUE NOT NULL,
    email VARCHAR(128) NOT NULL,
    contraseña VARCHAR(64) NOT NULL,
    fecha_nac DATE NOT NULL,
    es_admin BOOLEAN NOT NULL,
    desactivado BOOLEAN NOT NULL
);

CREATE TABLE sucursal (
	id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    nombre VARCHAR(128) NOT NULL,
    direccion VARCHAR(256) NOT NULL,
    latitud FLOAT NOT NULL,
    longitud FLOAT NOT NULL,
    telefono NUMERIC(16)
);

CREATE TABLE marca (
	id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    nombre VARCHAR(64) NOT NULL,
    ruta_img VARCHAR(1024) NOT NULL
);

CREATE TABLE modelo (
	id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    id_marca INT NOT NULL,
    CONSTRAINT id_marca FOREIGN KEY (id_marca) REFERENCES marca(id),
    potencia NUMERIC(3) NOT NULL,
    asientos NUMERIC(2) NOT NULL,
    puertas NUMERIC(2) NOT NULL,
    maletero BOOLEAN NOT NULL,
    traccion VARCHAR(16) NOT NULL,
    modo VARCHAR(16) NOT NULL, #AUTOMATICO O MANUAL
    extras VARCHAR(128)
);

CREATE TABLE vehiculo (
	id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    matricula VARCHAR(16) NOT NULL,
    estado VARCHAR(32),
    id_modelo INT NOT NULL,
    CONSTRAINT id_modelo FOREIGN KEY (id_modelo) REFERENCES modelo(id),
    id_m INT NOT NULL,
    CONSTRAINT id_m FOREIGN KEY (id_m) REFERENCES marca(id),
    km NUMERIC(7) NOT NULL,
    baca BOOL NOT NULL,
    bola BOOL NOT NULL,
    ruta_img VARCHAR(1024),
    tiene_defecto VARCHAR(64),
    motor VARCHAR(32) NOT NULL,
    antiniebla_trasero BOOL NOT NULL,
    capacidad NUMERIC(3) NOT NULL,
    silla_ninos BOOL NOT NULL,
    id_usuario INT NOT NULL,
    CONSTRAINT id_usuario FOREIGN KEY (id_usuario) REFERENCES usuario(id),
    emisiones VARCHAR(3) NOT NULL,
    tipo VARCHAR(64) NOT NULL,
    id_sucursal INT NOT NULL,
    CONSTRAINT id_sucursal FOREIGN KEY (id_sucursal) REFERENCES sucursal(id)
);

CREATE TABLE alquiler (
	id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    id_us INT NOT NULL,
    CONSTRAINT id_us FOREIGN KEY (id_us) REFERENCES usuario(id),
    id_ve INT NOT NULL,
    CONSTRAINT id_ve FOREIGN KEY (id_ve) REFERENCES vehiculo(id),
    fianza NUMERIC(5, 2) NOT NULL,
    metodo_pago VARCHAR(64),
    id_suc_rec INT NOT NULL,
    CONSTRAINT id_suc_rec FOREIGN KEY (id_suc_rec) REFERENCES sucursal(id),
    id_suc_dev INT,
    CONSTRAINT id_suc_dev FOREIGN KEY (id_suc_dev) REFERENCES sucursal(id),
    devuelto BOOLEAN NOT NULL
);
*/
SELECT * FROM usuario WHERE email = "ejemplo@hotmail.com";
SELECT COUNT(email) as count FROM usuario WHERE email = "ejemplo@hotmail.com";
SELECT * FROM usuario WHERE email = 'ejemplo@hotmail.com' LIMIT 1;