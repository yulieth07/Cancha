CREATE DATABASE BORCELLE; 
USE BORCELLE; 

DROP DATABASE BORCELLE;

DELIMITER //
CREATE TABLE ROL(
id_rol INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
nom_person VARCHAR(200) NOT NULL, 
rol VARCHAR(50) NOT NULL
);
//

DELIMITER //
CREATE TABLE EMPLEADO(
id_emple INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
nom_emple VARCHAR(200) NOT NULL,
telefono_emple VARCHAR(20) NOT NULL, 
correo_emple VARCHAR(200) NOT NULL, 
direccion_emple VARCHAR(300) NOT NULL,
rh_emple VARCHAR(20),
fecha_nacim_emple DATE NOT NULL, 
fecha_ingreso_emple DATE NOT NULL,
salario_emple FLOAT NOT NULL, 
usuario_emple VARCHAR(200) NOT NULL,
contraseña_emple VARCHAR(200) NOT NULL,
id_rol_fk_id_emple INT NOT NULL, 
CONSTRAINT id_rol_fk_id_emple FOREIGN KEY (id_rol_fk_id_emple) REFERENCES ROL (id_rol)
);
//

DELIMITER //
CREATE TABLE CLIENTE(
id_clien INT PRIMARY KEY NOT NULL,
nom_clien VARCHAR(200) NOT NULL, 
telefono_clien VARCHAR(20) NOT NULL, 
correo_clien VARCHAR(200) NOT NULL, 
usuario_clien VARCHAR(200) NOT NULL, 
contraseña_clien VARCHAR(200) NOT NULL,
id_rol_fk_id_clien INT NOT NULL, 
CONSTRAINT id_rol_fk_id_clien FOREIGN KEY (id_rol_fk_id_clien) REFERENCES ROL (id_rol)
);
//

DELIMITER //
CREATE TABLE ALQUILER(
id_alquiler INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
ciudad VARCHAR(200) NOT NULL,
deporte VARCHAR(200) NOT NULL,
fecha_alquiler DATE NOT NULL,
horas TIME NOT NULL, 
precio FLOAT NOT NULL, 
entrenador VARCHAR(200) NOT NULL, 
material_deportivo VARCHAR(500) NOT NULL,
id_clien_fk_id_alquiler INT NOT NULL,
CONSTRAINT id_clien_fk_id_alquiler FOREIGN KEY (id_clien_fk_id_alquiler) REFERENCES CLIENTE (id_clien)
);
//

DELIMITER //
CREATE TABLE INSCRIPCION (
id_inscrip INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
nom_alumno VARCHAR(200) NOT NULL, 
tel_alumno VARCHAR(20) NOT NULL,
tel_acudiente VARCHAR(20) NOT NULL, 
eps VARCHAR(100) NOT NULL, 
tipo_identificacion VARCHAR(100) NOT NULL,
num_identificacion VARCHAR(100) NOT NULL, 
dir_alumno VARCHAR(200) NOT NULL, 
id_clien_fk_id_inscrip INT NOT NULL, 
CONSTRAINT id_clien_fk_id_inscrip FOREIGN KEY (id_clien_fk_id_inscrip) REFERENCES CLIENTE (id_clien)
);
//

CREATE TABLE FACTURA_ALQUILER(
id_fact_alquiler INT PRIMARY KEY AUTO_INCREMENT NOT NULL, 
fecha_fact_alquiler DATE NOT NULL, 
total_fact_alquiler FLOAT NOT NULL, 
metodo_pago VARCHAR(100) NOT NULL,
estado_fact_alquiler VARCHAR(100) NOT NULL,
id_emple_fk_id_fact_alquiler INT NOT NULL, 
CONSTRAINT id_emple_fk_id_fact_alquiler FOREIGN KEY (id_emple_fk_id_fact_alquiler) REFERENCES EMPLEADO (id_emple),
id_clien_fk_fact_alquiler INT NOT NULL,
CONSTRAINT id_clien_fk_id_fact_alquiler FOREIGN KEY (id_clien_fk_id_fact_alquiler) REFERENCES CLIENTE (id_clien)
);
//

DELIMITER //
CREATE TABLE FACTURA_INSCRIPCION(
id_fact_inscrip INT PRIMARY KEY AUTO_INCREMENT NOT NULL, 
fecha_fact_inscrip DATE NOT NULL, 
total_fact_inscrip FLOAT NOT NULL, 
metodo_pago_fact_inscrip VARCHAR(100) NOT NULL, 
estado_fact_inscip VARCHAR(50) NOT NULL, 
id_clien_fk_id_fact_inscrip INT NOT NULL,
CONSTRAINT id_clien_fk_id_fact_inscrip FOREIGN KEY (id_clien_fk_id_fact_inscrip) REFERENCES CLIENTE (id_clien),
id_emple_fk_id_fact_inscrip INT NOT NULL,
CONSTRAINT id_emple_fk_id_fact_inscrip FOREIGN KEY (id_emple_fk_id_fact_inscrip) REFERENCES EMPLEADO (id_emple)
);
//