create table portf (
  portf0id int not null auto_increment primary key,
  portf0desc varchar(255) not null,
  portf0func varchar(255) not null,
  portf0tech varchar(255) not null,
  portf0url varchar(255) not null unique,
  portf1img varchar(255) not null,
  portf2img varchar(255) not null,
  portf3img varchar(255) not null,
  portf0del boolean default 0,
  portf0created datetime not null,
  portf0approved datetime,
  portf0modified datetime
);

INSERT INTO portf (portf0id, portf0desc, portf0func, portf0tech, portf0url, portf1img, portf2img, portf3img, portf0created, portf0approved, portf0modified) VALUES (NULL, 'test', 'test', 'test', 'https://auneeds.com', 'img0portf/geo.png', 'img0portf/icon.png', 'img0portf/map.png', sysdate(), sysdate(), NULL);

-- create table users (
--   id int not null auto_increment primary key,
--   email varchar(255) not null unique,
--   password varchar(255),
--   miner varchar(255) not null,
--   zindex int not null,
--   radius int not null,
--   lat double not null,
--   lng double not null,
--   phash varchar(255) not null unique,
--   chash varchar(255) not null unique,
--   created datetime not null,
--   approved datetime not null,
--   modified datetime not null
-- );
-- desc users;

-- create table needs_user (
--   id int not null auto_increment primary key,
--   username varchar(255) not null,
--   userhash varchar(255) not null,
--   givetake varchar(255) not null,
--   category varchar(255) not null,
--   detail varchar(255) not null,
--   resolved datetime,
--   del boolean default 0,
--   fname varchar(255),
--   drights int(10) default 0,
--   created datetime not null
-- );
-- desc needs_user;

-- INSERT INTO users (created) VALUES (sysdate());

-- SELECT * FROM gs_an_table where name = '鈴木';
-- SELECT * FROM gs_an_table where name LIKE '鈴%'


-- INSERT INTO needs_user (username, userhash, givetake, category, detail, created) VALUES ('datankia@gmail.com', '2b548d1410bac61e43b64180013b3b8c8f3d74080ce386bbb32b4336c9c2aad4', 'もらう', 'もの', 'テレビ', sysdate());

-- create table biz0account (
--   id int not null auto_increment primary key,
--   username varchar(255) not null unique,
--   pw varchar(255) not null,
--   displayname varchar(255) not null,
--   bizname varchar(255) not null,
--   bizurl varchar(255) not null,
--   created datetime not null,
--   modified datetime not null,
--   token varchar(255) not null,
--   del int(1) default 0
-- );
-- desc biz0account;
-- -- lastlogin datetime not null,

-- create table biz0bc (
--   id int not null auto_increment primary key,
--   created varchar(255) not null,
--   miner varchar(255) not null,
--   lat double not null,
--   lng double not null,
--   radius int(5) not null,
--   nonce int(11) not null,
--   phash varchar(255) not null unique,
--   chash varchar(255) not null unique,
--   dlevel int(3) not null,
--   registered datetime not null,
--   modified datetime not null,
--   bizuser varchar(255) default 0
-- );

-- created, miner, lat, lng, radius, nonce, phash, chash, dlevel, registered, modified

-- INSERT INTO biz0bc (phash, chash, lat, lng, radius, nonce, miner, created, entried, modified, dlevel) VALUES("0", chash, lat, lng, radius, nonce, "datankia@gmail.com", "", sysdate(), sysdate(), 2);