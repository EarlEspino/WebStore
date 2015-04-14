create table `product` (
  id int auto_increment primary key not null,
  name varchar(255) unique not null, 
  category_id int not null, 
  price real not null,
  description text not null,
  image varchar(255) not null
);
