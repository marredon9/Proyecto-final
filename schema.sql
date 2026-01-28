/*
CREATE TABLE usuario (
	id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    nombre VARCHAR(128) NOT NULL,
    apellido1 VARCHAR(128) NOT NULL,
    apellido2 VARCHAR(128),
    dni VARCHAR(16) UNIQUE NOT NULL,
    email VARCHAR(128) NOT NULL,
    contraseña VARCHAR(64) NOT NULL,
    es_admin BOOLEAN NOT NULL
);

CREATE TABLE sucursal (
	id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    nombre VARCHAR(128) NOT NULL,
    direccion VARCHAR(256) NOT NULL,
    latitud FLOAT NOT NULL,
    longitud FLOAT NOT NULL,
    telefono NUMERIC(16)
);

CREATE TABLE vehiculo (
	id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    matricula VARCHAR(16),
	marca VARCHAR(32),
    modelo VARCHAR(128),
    asientos NUMERIC(2),
    puertas NUMERIC(2),
    maletero BOOLEAN,
    modo VARCHAR(16), #automatico o manual
    extras VARCHAR(128),
    km NUMERIC(7),
    ruta_img VARCHAR(4096),
    capacidad NUMERIC(3), #no queda claro que es esto, preguntar
    emisiones VARCHAR(3), #pegatina
    id_sucursal INT NOT NULL,
    CONSTRAINT id_sucursal FOREIGN KEY (id_sucursal) REFERENCES sucursal(id),
    tipo VARCHAR(8)
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
    devuelto BOOLEAN NOT NULL,
    desde DATE,
    hasta DATE
);
*/