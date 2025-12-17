USE BORCELLE_SIMPLE;

DELIMITER //
CREATE PROCEDURE sp_usuario_select()
BEGIN
 SELECT * FROM usuario;
END //
DELIMITER ;

DELIMITER //
CREATE PROCEDURE sp_alquiler_select()
BEGIN
 SELECT a.*, u.nombre
 FROM alquiler a
 JOIN usuario u ON a.id_cliente = u.id_usuario;
END //
DELIMITER ;

DELIMITER //
CREATE PROCEDURE sp_factura_select()
BEGIN
 SELECT f.*, u.nombre
 FROM factura f
 JOIN usuario u ON f.id_usuario = u.id_usuario;
END //
DELIMITER ;