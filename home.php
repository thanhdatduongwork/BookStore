<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

if(isset($_POST['add_to_cart'])){

   $product_name = $_POST['product_name'];
   $product_price = $_POST['product_price'];
   $product_image = $_POST['product_image'];
   $product_quantity = $_POST['product_quantity'];

   $check_cart_numbers = mysqli_query($conn, "SELECT * FROM `cart` WHERE name = '$product_name' AND user_id = '$user_id'") or die('query failed');

   if(mysqli_num_rows($check_cart_numbers) > 0){
      $message[] = 'Đã được thêm vào giỏ hàng!';
   }else{
      mysqli_query($conn, "INSERT INTO `cart`(user_id, name, price, quantity, image) VALUES('$user_id', '$product_name', '$product_price', '$product_quantity', '$product_image')") or die('query failed');
      $message[] = 'Sản phẩm được thêm vào giỏ hàng!';
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>trang chủ</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<section class="home">

   <div class="content">
      <h3>Sách được lựa chọn và gửi trực tiếp đến cửa nhà của bạn.</h3>
      <!-- <p>Nhà sách trực tuyến là một dịch vụ mua sách qua mạng internet, cho phép người dùng xem và mua sách từ các trang web hoặc ứng dụng di động. Đây là một hình thức mua sắm sách tiện lợi và phổ biến ngày nay, giúp người dùng tiết kiệm thời gian và có nhiều lựa chọn từ các tác phẩm trong các thể loại khác nhau.</p> -->
      <a href="about.php" class="white-btn">Khám Phá</a>
   </div>

</section>

<section class="products">

   <h1 class="title">SẢN PHẨM MỚI NHẤT</h1>

   <div class="box-container">

      <?php  
         $select_products = mysqli_query($conn, "SELECT * FROM `products` LIMIT 6") or die('query failed');
         if(mysqli_num_rows($select_products) > 0){
            while($fetch_products = mysqli_fetch_assoc($select_products)){
      ?>
     <form action="" method="post" class="box">
      <img class="image" src="uploaded_img/<?php echo $fetch_products['image']; ?>" alt="">
      <div class="name"><?php echo $fetch_products['name']; ?></div>
      <div class="price"><?php echo $fetch_products['price']; ?>.000 VNĐ</div>
      <input type="number" min="1" name="product_quantity" value="1" class="qty">
      <input type="hidden" name="product_name" value="<?php echo $fetch_products['name']; ?>">
      <input type="hidden" name="product_price" value="<?php echo $fetch_products['price']; ?>">
      <input type="hidden" name="product_image" value="<?php echo $fetch_products['image']; ?>">
      <input type="submit" value="Thêm Vào Giỏ Hàng" name="add_to_cart" class="btn">
     </form>
      <?php
         }
      }else{
         echo '<p class="empty">Chưa có sản phẩm nào được thêm vào!!</p>';
      }
      ?>
   </div>

   <div class="load-more" style="margin-top: 2rem; text-align:center">
      <a href="shop.php" class="option-btn">Xem Thêm</a>
   </div>

</section>

<section class="about">

   <div class="flex">

      <div class="image">
         <img src="images/about-img.jpg" alt="">
      </div>

      <div class="content">
         <h3>NHÀ SÁCH TRỰC TUYẾN BOOKSTORE</h3>
         <p>Ngoài việc mua sách mới, nhiều nhà sách trực tuyến cũng cung cấp các dịch vụ mua sách cũ, sách bãi, hoặc sách điện tử (eBook). Người dùng có thể tìm kiếm sách cũ hoặc sách giảm giá với giá rẻ hơn so với sách mới.</p>
         <a href="about.php" class="btn">xem thêm</a>
      </div>

   </div>

</section>

<section class="home-contact">

   <div class="content">
      <h3>Hãy góp ý cho chúng tôi?</h3>
      <p>Đóng góp những ý tưởng hay những điều không phù với với các bạn. Chúng tôi sẽ lắng nghe là có những chỉnh sửa phù hợp nhất...</p>
      <a href="contact.php" class="white-btn">Liên Hệ Với Chúng Tôi</a>
   </div>

</section>





<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>