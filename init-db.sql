CREATE DATABASE IF NOT EXISTS flowers1;
USE flowers1;

CREATE TABLE IF NOT EXISTS flori (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nume VARCHAR(50),
    culoare VARCHAR(50),
    marime VARCHAR(50),
    pret DECIMAL(10,2)
);

CREATE TABLE IF NOT EXISTS flori_actiuni (
    id INT AUTO_INCREMENT PRIMARY KEY,
    flori_id INT,
    action VARCHAR(50),
    timestamp TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

DELIMITER //

CREATE PROCEDURE insert_flori(
    IN nume VARCHAR(50),
    IN culoare VARCHAR(50),
    IN marime VARCHAR(50),
    IN pret DECIMAL(10,2)
)
BEGIN
    INSERT INTO flori (nume, culoare, marime, pret) VALUES (nume, culoare, marime, pret);
END //

CREATE PROCEDURE update_flori(
    IN old_nume VARCHAR(50),
    IN new_nume VARCHAR(50)
)
BEGIN
    UPDATE flori SET nume = new_nume WHERE nume = old_nume;
END //

CREATE PROCEDURE delete_flori(
    IN nume VARCHAR(50)
)
BEGIN
    DELETE FROM flori WHERE nume = nume;
END //

CREATE TRIGGER after_insert_flori
AFTER INSERT ON flori
FOR EACH ROW
BEGIN
    INSERT INTO flori_actiuni (flori_id, action) VALUES (NEW.id, 'INSERT');
END //

CREATE TRIGGER after_update_flori
AFTER UPDATE ON flori
FOR EACH ROW
BEGIN
    INSERT INTO flori_actiuni (flori_id, action) VALUES (NEW.id, 'UPDATE');
END //

CREATE TRIGGER after_delete_flori
AFTER DELETE ON flori
FOR EACH ROW
BEGIN
    INSERT INTO flori_actiuni (flori_id, action) VALUES (OLD.id, 'DELETE');
END //

DELIMITER ;
