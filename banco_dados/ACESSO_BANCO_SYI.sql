CREATE DATABASE SYI;
CREATE USER 'SYI'@'localhost' IDENTIFIED BY 'SYI';
GRANT select, create, update, insert, delete ON *. * TO 'SYI'@'localhost';