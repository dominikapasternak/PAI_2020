CREATE TABLE Role(
    role int(11) NOT NULL AUTO_INCREMENT,
    name varchar(22) NOT NULL,
    PRIMARY KEY (role)
);
INSERT INTO Role (role, name) VALUES (1, 'admin'), (2, 'user');

CREATE TABLE Users(
    id int(11) NOT NULL AUTO_INCREMENT,
    email varchar(50) NOT NULL,
    password varchar(50) NOT NULL,
    name varchar(22) NOT NULL,
    surname varchar(22) NOT NULL,
    role int(11) NOT NULL,
    PRIMARY KEY (id),
    KEY FK_RolesOrder (role),
    CONSTRAINT FK_RolesOrder FOREIGN KEY (role) REFERENCES Role(role)
)AUTO_INCREMENT=1;
INSERT INTO Users (id, email, password, name, surname, role) VALUES (1, 'admin@admin.pl', 'beer', 'admin', 'admin', 1);

CREATE TABLE Genre(
    id_genre int(11),
    name varchar(22),
    PRIMARY KEY (id_genre)
);
INSERT INTO Genre (id_genre, name) VALUES (1, 'Horror'), (2, 'Thriller'), (3, 'Comedy'), (4, 'Adventure'), (5, 'Action'), (6, 'Animated'), (7, 'Romance'), (8, 'Science Fiction'), (9, 'Drama');

CREATE TABLE Country(
    id_country int(11),
    id_genre int(11),
    name varchar(22),
    PRIMARY KEY (id_country),
    KEY ID_Genre(id_genre),
    CONSTRAINT ID_Genre FOREIGN KEY (id_genre) REFERENCES Genre(id_genre)
);
INSERT INTO Country (id_country, id_genre, name) VALUES (1, 1, 'USA'), (2, 1, 'France'), (3, 3, 'Great Britain'), (4, 4, 'Poland'), (5, 4, 'Germany'), (6, 4, 'Chinese'), (7, 1, 'Brasilian');

CREATE TABLE Movie(
    id_movie int(11),
    name varchar(42),
    id_country int(11),
    PRIMARY KEY (id_movie),
    KEY ID_Country(id_country),
    CONSTRAINT ID_Country FOREIGN KEY(id_country) REFERENCES Country(id_country)
);
INSERT INTO Movie (id_movie, name, id_country) VALUES (1, 'Star Wars', 1), (2, 'Lord of the Rings', 1), (3, 'Godfather', 1), (4, 'The Shawshank Redemption', 1), (5, 'American History X', 4), (6, 'Baltic Storm', 5), (7, 'Baywatch', 1);

CREATE TABLE Rating(
    id_star int(11) NOT NULL AUTO_INCREMENT,
    id_movie int(11) NOT NULL,
    id int(11) NOT NULL,
    rating int(11) NOT NULL,
    PRIMARY KEY (id_star),
    KEY ID_Movie (id_movie),
    CONSTRAINT ID_Movie FOREIGN KEY (id_movie) REFERENCES Movie(id_movie),
    KEY id (id),
    CONSTRAINT id FOREIGN KEY (id) REFERENCES Users(id)
)AUTO_INCREMENT=1;
INSERT INTO Rating (id_star, id_movie, id, rating) VALUES (1, 1, 1, 5);
