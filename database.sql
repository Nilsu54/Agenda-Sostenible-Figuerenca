-- Active: 1729870343985@@127.0.0.1@3306@projecte2
select * from usuarios;
insert into usuarios values (1,'usuario1','password1','email1','0','img1','nom1','cognom1');
drop table users;
create table users(
    id int primary key AUTO_INCREMENT,
    username varchar(255) unique,
    password varchar (255),
    email varchar(255) unique,
    tipo boolean, /*0 es admin 1 es usuario normal*/
    img varchar(255), /**/
    name varchar(255),
    surname varchar(255)
);

insert into users values (1,'admin','agendasostenibleadmin494949','email@prueba.com','0','img1','admin','admin');
select * from users;

create table events(    
    id int primary key,
    title varchar(255),
    latitude DECIMAL(10,8),
    longitude DECIMAL(11,8),
    event_description varchar(255),
    event_type varchar(255),
    starting_date DATE,
    duration double,
    starting_hour DATETIME,
    rating int,
    num_visualization int
);
select max(id)+1 from users;
select * from events;