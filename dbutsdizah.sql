CREATE TABLE tb_user (
    user_id INT(11) NOT NULL AUTO_INCREMENT,
    user_name VARCHAR(50) NOT NULL,
    user_password VARCHAR(256) NOT NULL,
    PRIMARY KEY(user_id),
    UNIQUE KEY(user_name)
);

CREATE TABLE category (
cat_id int(11) NOT NULL AUTO_INCREMENT,
cat_name varchar(100) NOT NULL,
cat_text varchar(100) NOT NULL,
PRIMARY KEY (cat_id)
);

CREATE TABLE post (
post_id int(11) NOT NULL AUTO_INCREMENT,
post_date date NOT NULL,
slug varchar(100) NOT NULL,
post_title varchar(100) NOT NULL,
text_post text NOT NULL,
post_cat_id int(11) NOT NULL,
PRIMARY KEY (post_id),
FOREIGN KEY (post_cat_id)
REFERENCES category (cat_id)
);

CREATE TABLE photos (
photos_id int(11) NOT NULL AUTO_INCREMENT,
photos_dates date NOT NULL,
photos_title varchar(100) NOT NULL,
photos_text text NOT NULL,
photos_post_id int(11) NOT NULL,
PRIMARY KEY (photos_id),
FOREIGN KEY (photos_post_id)
REFERENCES post (post_id)
);

CREATE TABLE album (
 album_id int(11) NOT NULL AUTO_INCREMENT,
 album_name varchar(100) NOT NULL,
 album_text varchar(100) NOT NULL,
 album_photos_id int(11) NOT NULL,
 PRIMARY KEY (album_id),
 FOREIGN KEY (album_photos_id)
REFERENCES photos (photos_id)
 );
