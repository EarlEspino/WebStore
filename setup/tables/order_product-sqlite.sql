create table `order_product` (
  id integer primary key not null,
  order_id integer key not null,
  product_id integer key not null,
  quantity integer not null default 0,
  price real not null default 0,
  unique(order_id,product_id)
);
