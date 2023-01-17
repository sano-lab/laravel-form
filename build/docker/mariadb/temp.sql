CREATE USER 'sano'@'localhost' IDENTIFIED BY '123qwe';
--GRANT ALL ON *.* TO 'sano'@'localhost';
SHOW GRANTS FOR 'sano'@'localhost';

-- テーブル操作用ユーザ --
CREATE USER 'qa'@'localhost' IDENTIFIED BY '123qwe';
--GRANT SELECT ON *.* TO 'qa'@'localhost';
--GRANT SELECT, INSERT ON PETA_DB.accounts TO 'qa'@'localhost';

CREATE DATABASE PETA_DB CHARACTER SET utf8mb4 COLLATE utf8mb4_bin;

-- ユーザテーブル --
CREATE TABLE PETA_DB.inquiries (
    id BIGINT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    name VARCHAR(32) NOT NULL,
    email VARCHAR(256) NOT NULL,
    message VARCHAR(1024) NOT NULL,
    ip_addr VARCHAR(39) NOT NULL,
    created_at TIMESTAMP NULL
);