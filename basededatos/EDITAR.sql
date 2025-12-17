USE BORCELLE_SIMPLE;

DELIMITER //
CREATE PROCEDURE sp_usuario_update(
 IN p_id INT,
 IN p_nombre VARCHAR(150),
 IN p_telefono VARCHAR(20),
 IN p_correo VARCHAR(150)
)
BEGIN
 UPDATE usuario
 SET nombre=p_nombre,
     telefono=p_telefono,
     correo=p_correo
 WHERE id_usuario=p_id;
END //
DELIMITER ;

DELIMITER //
CREATE PROCEDURE sp_alquiler_update(
 IN p_id INT,
 IN p_fecha DATE,
 IN p_horas INT,
 IN p_precio FLOAT
)
BEGIN
 UPDATE alquiler
 SET fecha=p_fecha,
     horas=p_horas,
     precio=p_precio
 WHERE id_alquiler=p_id;
END //
DELIMITER ;

DELIMITER //
CREATE PROCEDURE sp_factura_update(
 IN p_id INT,
 IN p_estado VARCHAR(50)
)
BEGIN
 UPDATE factura
 SET estado=p_estado
 WHERE id_factura=p_id;
END //
DELIMITER ;