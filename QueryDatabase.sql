CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL,
    address VARCHAR(100) NOT NULL,
    city VARCHAR(100) NOT NULL,
    state VARCHAR(100) NOT NULL,
    zip VARCHAR(10) NOT NULL,
    phone CHAR(10) NOT NULL,
    access_code VARCHAR(100) NOT NULL,
    expiration_date DATETIME NOT NULL,
    video_access TINYINT(1) DEFAULT 0
);
