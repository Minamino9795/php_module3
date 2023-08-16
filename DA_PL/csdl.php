
<?php 

// CƠ SỞ DỮ LIỆU WEB BÁN ÁO QUẦN ONLINE:

/* 
***BẢNG SẢN PHẨM (Products):

product_id (Primary Key)
category_id (Foreign Key tham chiếu tới bảng Loại sản phẩm)
name
description
price
stock_quantity
image_url



***BẢNG LOẠI SẢN PHẨM (Categories):

category_id (Primary Key)
name
description


***BẢNG ĐƠN HÀNG (Orders):

order_id (Primary Key)
customer_id (Foreign Key tham chiếu tới bảng Khách hàng)
order_date
total_amount



***BẢNG CHI TIẾT ĐƠN HÀNG (OrderDetails):

order_detail_id (Primary Key)
order_id (Foreign Key tham chiếu tới bảng Đơn hàng)
product_id (Foreign Key tham chiếu tới bảng Sản phẩm)
quantity
subtotal



***BẢNG KHÁCH HÀNG (Customers):

customer_id (Primary Key)
first_name
last_name
email
phone
address



***BẢNG ĐÁNH GIÁ SẢN PHẨM (ProductReviews):

review_id (Primary Key)
product_id (Foreign Key tham chiếu tới bảng Sản phẩm)
customer_id (Foreign Key tham chiếu tới bảng Khách hàng)
rating
review_text
review_date



***BẢNG GIỎ HÀNG (ShoppingCart):

cart_id (Primary Key)
customer_id (Foreign Key tham chiếu tới bảng Khách hàng)
product_id (Foreign Key tham chiếu tới bảng Sản phẩm)
quantity
 */