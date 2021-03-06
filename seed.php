<?php
require 'init.php';
query(
    'delete from category'
);
query(
    'alter table category auto_increment=1'
);

$cat = ['Hat', 'Shirt', 'Electronic', 'Drink'];
foreach ($cat as $c) {
    query(
        'insert into category (slug,name) values(?,?)',
        [slug($c), $c]
    );
}
query("delete from product");
query("alter table product auto_increment=1");
$product = [
    ["category_id" => 1, "slug" => slug("name"), "name" => "name", "image" => "image", "description" => "des", "total_qty" => 2, "sale_price" => 200],
    ["category_id" => 1, "slug" => slug("name"), "name" => "name", "image" => "image", "description" => "des", "total_qty" => 2, "sale_price" => 200],
    ["category_id" => 1, "slug" => slug("name"), "name" => "name", "image" => "image", "description" => "des", "total_qty" => 2, "sale_price" => 200],
    ["category_id" => 1, "slug" => slug("name"), "name" => "name", "image" => "image", "description" => "des", "total_qty" => 2, "sale_price" => 200],
    ["category_id" => 1, "slug" => slug("name"), "name" => "name", "image" => "image", "description" => "des", "total_qty" => 2, "sale_price" => 200],
    ["category_id" => 1, "slug" => slug("name"), "name" => "name", "image" => "image", "description" => "des", "total_qty" => 2, "sale_price" => 200],
    ["category_id" => 1, "slug" => slug("name"), "name" => "name", "image" => "image", "description" => "des", "total_qty" => 2, "sale_price" => 200],
    ["category_id" => 1, "slug" => slug("name"), "name" => "name", "image" => "image", "description" => "des", "total_qty" => 2, "sale_price" => 200],
    ["category_id" => 1, "slug" => slug("name"), "name" => "name", "image" => "image", "description" => "des", "total_qty" => 2, "sale_price" => 200],
    ["category_id" => 1, "slug" => slug("name"), "name" => "name", "image" => "image", "description" => "des", "total_qty" => 2, "sale_price" => 200],
    ["category_id" => 1, "slug" => slug("name"), "name" => "name", "image" => "image", "description" => "des", "total_qty" => 2, "sale_price" => 200],
    ["category_id" => 1, "slug" => slug("name"), "name" => "name", "image" => "image", "description" => "des", "total_qty" => 2, "sale_price" => 200]
];
foreach ($product as $p) {
    query(
        "insert into product (category_id,slug,name,image,description,total_qty,sale_price) values 
        ('{$p["category_id"]}','{$p["slug"]}','{$p["name"]}','{$p["image"]}','{$p["description"]}','{$p["total_qty"]}','{$p["sale_price"]}')"
    );
}

echo "success category...";

echo "success product....";