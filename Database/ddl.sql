CREATE DATABASE memory_game;
USE memory_game;

CREATE TABLE players (
	id int auto_increment primary key not null,
    username varchar(100)
);

CREATE TABLE record (
	id int auto_increment primary key not null,
    id_player int not null,
    time_record varchar(60) not null,
    tentativas int not null,
    foreign key (id_player) references Players (id)
);