CREATE DATABASE IF NOT EXISTS form_oop;

CREATE TABLE form_oop.campaigns(
id INT NOT NULL AUTO_INCREMENT,
title VARCHAR(100) NOT NULL,
created_at TIMESTAMP NOT NULL,
CONSTRAINT pk_id_campaigns PRIMARY KEY (id)
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

CREATE TABLE form_oop.question_answers(
id INT NOT NULL AUTO_INCREMENT,
question VARCHAR(255) NOT NULL,
answer VARCHAR(255) NOT NULL,
score VARCHAR(255) NOT NULL,
created_at TIMESTAMP NOT NULL,
id_campaign INT(11),
CONSTRAINT pk_id_questions_answers PRIMARY KEY (id),
FOREIGN KEY (id_campaign) REFERENCES campaigns(id)
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

CREATE TABLE form_oop.results(
id INT NOT NULL AUTO_INCREMENT,
result INT(11) NOT NULL,
created_at TIMESTAMP NOT NULL,
id_campaign INT(11),
CONSTRAINT pk_id_results PRIMARY KEY (id),
FOREIGN KEY (id_campaign) REFERENCES campaigns(id)
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

CREATE TABLE form_oop.users(
id INT NOT NULL AUTO_INCREMENT,
username VARCHAR(255) NOT NULL,
email VARCHAR(255) NOT NULL,
pass VARCHAR(255) NOT NULL,
save_date TIMESTAMP NOT NULL,
CONSTRAINT pk_id_users PRIMARY KEY (id)
)ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;


AlTER TABLE form_oop.campaigns
  ADD id_user INT(11);

AlTER TABLE form_oop.campaigns
ADD FOREIGN KEY (id_user) REFERENCES users(id);

AlTER TABLE form_oop.question_answers
  ADD id_user INT(11);

AlTER TABLE form_oop.question_answers
ADD FOREIGN KEY (id_user) REFERENCES users(id);

AlTER TABLE form_oop.results
  ADD id_user INT(11);

AlTER TABLE form_oop.results
ADD FOREIGN KEY (id_user) REFERENCES users(id);

