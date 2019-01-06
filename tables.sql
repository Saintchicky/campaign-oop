

CREATE TABLE campaigns(
id INT NOT NULL AUTO_INCREMENT,
title VARCHAR(100) NOT NULL,
created_at TIMESTAMP NOT NULL,
CONSTRAINT pk_id_campaigns PRIMARY KEY (id)
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

CREATE TABLE question_answers(
id INT NOT NULL AUTO_INCREMENT,
question VARCHAR(255) NOT NULL,
answer VARCHAR(255) NOT NULL,
score VARCHAR(255) NOT NULL,
created_at TIMESTAMP NOT NULL,
id_campaign INT(11),
CONSTRAINT pk_id_questions_answers PRIMARY KEY (id),
FOREIGN KEY (id_campaign) REFERENCES campaigns(id)
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

CREATE TABLE results(
id INT NOT NULL AUTO_INCREMENT,
result INT(11) NOT NULL,
created_at TIMESTAMP NOT NULL,
id_campaign INT(11),
CONSTRAINT pk_id_results PRIMARY KEY (id),
FOREIGN KEY (id_campaign) REFERENCES campaigns(id)
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;