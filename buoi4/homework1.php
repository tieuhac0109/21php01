//BÀI 1
//Lấy ra danh sách sản phẩm và sắp xếp theo tên tăng dần
	//SELECT categoryName FROM categories
	//ORDER BY categoryName ASC

//Lấy ra danh sách sản phẩm có giá nhỏ hơn $500
	//SELECT categories.categoryID, categories.categoryName, products.productName, products.listPrice
	//FROM products, categories
	//WHERE products.categoryID = categories.categoryID AND products.listPrice < 500

//Lấy ra danh sách đơn hàng (bảng order) được mua vào tháng 5 năm 2014
	//SELECT * FROM orders WHERE YEAR(orders.orderDate) = 2014 AND MONTH(orders.orderDate) = 5
//Sửa tên sản phẩm có chữ chữ “Fe” thành chữ “Good product”
	//UPDATE products SET productName = 'Good product' WHERE productName = 'Fender Stratocaster' OR productName = 'Fender Precision'

//Xóa sản phẩm có giá lớn hơn $800
	//DELETE FROM products WHERE listPrice > 800