USE mysql;
UPDATE user SET password=PASSWORD('') WHERE User='root' AND Host='localhost';
CREATE USER 'ussr_rust_db_user'@'localhost' IDENTIFIED BY '';
FLUSH PRIVILEGES;

