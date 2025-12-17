USE BORCELLE_SIMPLE;

DELIMITER //
CREATE PROCEDURE sp_usuario_delete(IN p_id INT)
BEGIN
 DELETE FROM usuario WHERE id_usuario=p_id;
END //
DELIMITER ;

DELIMITER //
CREATE PROCEDURE sp_alquiler_delete(IN p_id INT)
BEGIN
 DELETE FROM alquiler WHERE id_alquiler=p_id;
END //
DELIMITER ;

DELIMITER //
CREATE PROCEDURE sp_factura_delete(IN p_id INT)
BEGIN
 DELETE FROM factura WHERE id_factura=p_id;
END //
DELIMITER ;