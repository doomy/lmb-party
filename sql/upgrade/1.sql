CREATE TABLE IF NOT EXISTS t_local (
    id INT NOT NULL AUTO_INCREMENT,
    lang VARCHAR(2) NOT NULL,
    str_id VARCHAR(100) NOT NULL,
    text TEXT,
    PRIMARY KEY(id)
    );
