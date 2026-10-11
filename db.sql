create database php2;
use php2;
create table users (id int primary key auto_increment,name  varchar(50),email varchar(50),phone int,username varchar(50),password varchar(255));

select * from users;
create table products(product_id int primary key auto_increment,product_name varchar(50),category varchar(50),price varchar(50),quantity int,brand varchar(50),description varchar(50));
alter table products add constraint fkey foreign key (product_id) references users(id);
select * from products;
