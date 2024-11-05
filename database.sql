-- Active: 1729870343985@@127.0.0.1@3306@projecte2
select * from usuarios;
insert into usuarios values (1,'usuario1','password1','email1','0','img1','nom1','cognom1');
drop table users;
/*taula usuaris*/
create table users(
    id int primary key AUTO_INCREMENT,
    username varchar(255) unique,
    password varchar (255),
    email varchar(255) unique,
    role varchar(255) default "usuari",
    img varchar(255),/**/
    name varchar(255),
    surname varchar(255)
);

insert into users values (1,'admin','agendasostenibleadmin494949','email@prueba.com','admin','img1','admin','admin');
select * from users;
drop table events;
/*taula esdeveniments*/

create table events(    
    id int primary key AUTO_INCREMENT,
    title varchar(255),
    latitude DECIMAL(10,8),
    longitude DECIMAL(11,8),
    event_description varchar(255),
    event_type varchar(255),
    starting_date DATE,
    duration double,
    starting_hour VARCHAR(255),
    rating int,
    num_visualization int
);
/*taula consells*/
drop table tips;
create table tips(
    id int primary key AUTO_INCREMENT,
    title varchar (255),
    explanatory_text varchar(255),
    description varchar(255),
    tags varchar(255)
);

/*taula anuncis*/
drop table advertisements;
create table advertisements(
    id int primary key AUTO_INCREMENT,
    title varchar(255),
    description varchar(255),
    state varchar(255),
    category varchar(255)
);
select * from advertisements;
drop table comments;
create table comments (
    id int primary key AUTO_INCREMENT,
    content VARCHAR(255),
    state varchar(255),
    id_event int,
    id_user int,
    constraint fk_id_event foreign key (id_event) references events (id),
    constraint fk_id_user foreign key (id_user) references users (id)
);
select * from comments;

create table images(
    id int primary key AUTO_INCREMENT,
    url VARCHAR(255),
    id_event int,
    id_ad int,
    constraint fk_event_id foreign key (id_event) references events (id),
    constraint fk_id_ad foreign key (id_ad) references advertisements (id)
);
create table user_event(
    id_event int,
    id_user int,
    fav boolean,
    constraint fk_id_event_user foreign key (id_event) references events (id),
    constraint fk_id_user_event foreign key (id_user) references users (id)
);

create table user_ad(
    id_ad int,
    id_user int,
    constraint fk_id_ad_user foreign key (id_ad) references advertisements (id),
    constraint fk_id_user_ad foreign key (id_user) references users (id)
);


create table user_tip(
    id_tip int,
    id_user int,
    fav boolean,
    constraint fk_id_tip_user foreign key (id_tip) references tips (id),
    constraint fk_id_user_ti foreign key (id_user) references users (id)
);