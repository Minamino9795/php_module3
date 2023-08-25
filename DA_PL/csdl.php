
<?php 

// CƠ SỞ DỮ LIỆU WEB BÁN ÁO QUẦN ONLINE:

/* 
***BẢNG SẢN PHẨM (Products):

product_id (Khóa chính) - INT
product_name - VARCHAR
category_id (Khóa ngoại đến bảng Categories) - INT
price - DECIMAL
stock_quantity - INT
image_url - VARCHAR


***BẢNG LOẠI SẢN PHẨM (Categories):

category_id (Khóa chính) - INT
category_name - VARCHAR
description - TEXT


***BẢNG ĐƠN HÀNG (Orders):

order_id (Khóa chính) - INT
customer_id (Khóa ngoại đến bảng Customers) - INT
order_date - DATE
total_amount - DECIMAL



***BẢNG CHI TIẾT ĐƠN HÀNG (OrderDetails):

order_detail_id (Khóa chính) - INT
order_id (Khóa ngoại đến bảng Orders) - INT
product_id (Khóa ngoại đến bảng Products) - INT
quantity - INT
item_price - DECIMAL



***BẢNG KHÁCH HÀNG (Customers):

customer_id (Khóa chính) - INT
first_name - VARCHAR
last_name - VARCHAR
email - VARCHAR
phone_number - VARCHAR
address - TEXT


***BẢNG ĐÁNH GIÁ SẢN PHẨM (ProductReviews):
review_id (Khóa chính) - INT
product_id (Khóa ngoại đến bảng Products) - INT
customer_id (Khóa ngoại đến bảng Customers) - INT
rating - INT
review_text - TEXT
review_date - DATE


***BẢNG GIỎ HÀNG (ShoppingCart):

cart_id (Khóa chính) - INT
customer_id (Khóa ngoại đến bảng Customers) - INT
product_id (Khóa ngoại đến bảng Products) - INT
quantity - INT
added_date - DATE

 */