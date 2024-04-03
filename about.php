<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Giới Thiệu</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<div class="heading">
   <h3>Giới Thiệu </h3>
   <p> <a href="home.php">Trang Chủ</a> / Giới Thiệu </p>
</div>

<section class="about">

   <div class="flex">

      <div class="image">
         <img src="images/about-img.jpg" alt="">
      </div>

      <div class="content">
         <h3>NHÀ SÁCH TRỰC TUYẾN BOOKSTORE?</h3>
         <p>Nhà sách hay cửa hàng sách hay hiệu sách, tiệm sách là một địa điểm nơi thực hiện các giao dịch mua bán sách. Đây là một điểm bán lẽ của công đoạn phân phối sách trong quá trình xuất bản để những tác phẩm sách đến được với người đọc về bản chất nó cũng là một cửa hàng chuyên kinh doanh về sách.</p>
         <p>Đến với BookStore bạn có thể thoải mái chọn lựa cuốn sách yêu thích của mình mà không mất quá nhiều thời gian.</p>
         <a href="contact.php" class="btn">Liên Hệ Với Chúng Tôi</a>
      </div>

   </div>

</section>

<section class="reviews">

   <h1 class="title">Đánh giá của khách hàng</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/nguyennhatanh1.jpg" alt="">
         <p>Sinh ngày 7 tháng 5 năm 1955 tại Thừa Thiên Huế, là một tác giả nổi tiếng và rất được yêu thích tại Việt Nam. Ông đã viết nhiều tác phẩm thiếu nhi và tiểu thuyết trưởng thành. Dưới đây là một số tác phẩm nổi tiếng khác của tác giả: Mắt biếc, Kính vạn hoa, Cho tôi xin một vé đi tuổi thơ...</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Nguyễn Nhật Ánh</h3>
      </div>

      <div class="box">
         <img src="images/trang-ha.jpg" alt="">
         <p>Sinh ngày 30 tháng 11 năm 1975 tại Hà Nội, là một nhà văn nổi tiếng của Việt Nam. Cô đã gây tiếng vang với tư cách là một trong những bút trưởng tiên phong của Hội bút Hương đầu mùa trên báo Hoa học trò vào những năm đầu thập kỷ 1990. Một số tác phẩm nổi tiếng: Đàn bà 30, Xin Lỗi... </p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Trang Hạ</h3>
      </div>

      <div class="box">
         <img src="images/nguyenphongviet.jpg" alt="">
         <p>Là một nhà văn và nhà thơ nổi tiếng của Việt Nam. Ông là cựu học sinh chuyên Nguyễn Huệ và tốt nghiệp Đại học Ngoại ngữ - Tin học Thành phố Hồ Chí Minh. Từ năm 1998, ông trở thành thành viên của hội bút Vòm me xanh trên báo Mực tím với bút danh Me Quê... </p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Nguyễn Phong Việt</h3>
      </div>

      <div class="box">
         <img src="images/anh-khang.jpg" alt="">
         <p>Anh Khang, là tác giả và MC nổi tiếng, sinh năm 1987 và là cử nhân khoa Báo chí và Truyền thông tại Đại học Khoa học Xã hội và Nhân văn TP.HCM. Ngay từ khi là sinh viên, Anh Khang đã có kinh nghiệm làm người dẫn chương trình (MC).Danh sách tác phẩm: Ngày trôi về phía cũ, Buồn làm sao buông, Trời vẫn còn xanh... </p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Anh Khang</h3>
      </div>

      <div class="box">
         <img src="images/jacklondon.jpg" alt="">
         <p>Được biết đến nhiều hơn với tên Jack London , là một tiểu thuyết gia, nhà báo và nhà hoạt động người Mỹ. Là người đi tiên phong trong lĩnh vực tiểu thuyết thương mại và tạp chí Mỹ, ông là một trong những tác giả người Mỹ đầu tiên trở thành người nổi tiếng quốc tế và kiếm được khối tài sản lớn từ việc viết lách... </p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>John Griffith Chaney</h3>
      </div>

      <div class="box">
         <img src="images/ErnestMillerHemingway.png" alt="">
         <p>Ernest Hemingway (1899 - 1961) là nhà văn, nhà báo người Mỹ. Ông từng tham gia chiến đấu trong Chiến tranh thế giới lần thứ I, sau đó được biết đến qua "Thế hệ đã mất". Ông nhận được giải thưởng báo chí Pulitzer năm 1953 và giải Nobel văn học năm 1954. Những tác phẩm tiêu biểu: Ông già và biển cả, Chuông nguyện hồn ai...</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Miguel De Cervantes</h3>
      </div>

   </div>

</section>

<section class="authors">

   <h1 class="title">MỘT SỐ NHÀ VĂN NỔI TIẾNG</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/tue-nghi1jpg.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-github"></a>
         </div>
         <h3>Tuệ Nghi</h3>
      </div>

      <div class="box">
         <img src="images/NNT.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-github"></a>
         </div>
         <h3>Nguyễn Ngọc Tư</h3>
      </div>

      <div class="box">
         <img src="images/rosie-nguyen.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-github"></a>
         </div>
         <h3>Rosie Nguyễn</h3>
      </div>

      <div class="box">
         <img src="images/iris-cao.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-github"></a>
         </div>
         <h3>Iris Cao</h3>
      </div>

      <div class="box">
         <img src="images/thanhdatduong.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-github"></a>
         </div>
         <h3>Thanh Dat Duong</h3>
      </div>

      <div class="box">
         <img src="images/J.R.R.Tolkien.png" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-github"></a>
         </div>
         <h3>J.R.R.Tolkien</h3>
      </div>

   </div>

</section>







<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>