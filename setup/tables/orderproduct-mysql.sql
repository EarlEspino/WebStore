create table `orderproduct` (
  id integer auto_increment primary key not null,
  order_id integer not null,
  product_id integer not null,
  quantity integer not null default 0,
  price real not null default 0,
  key(order_id),
  key(product_id),
  unique(order_id,product_id)
);
