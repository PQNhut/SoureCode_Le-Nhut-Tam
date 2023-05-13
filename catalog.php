<!doctype html>
<html lang="en">
  <head>
  	<?php include 'layout_head.php';?>
    <title>Bán Ốp điện thoại bằng Gỗ</title>
  </head>
  <body>
  	<?php include 'layout_header.php';?>
	
	<div class="container-fluid">
  <h2 class="heading"> latest <span>products</span> </h2>
  <hr>
  <style>
    :root{
      --black:#2c2c54;
      --orange:#ff9f1a;
    }
    section{
      padding:2rem 9%;
    }
    .heading{
      text-align: center;
      text-transform: uppercase;
      font-size: 4rem;
      color:var(--black);
      padding:1rem;
    }
    .heading span{
      text-transform: uppercase;
      color:var(--orange);
    }
  </style>
		<!-- Nội dung chính của PAGE ở đây --> 

    <?php
      // Tham số
      
      include "dbconfig.php";

      $dbconnect = mysqli_connect( $server , 
        $dbUsername , $dbPassword);
      mysqli_select_db( $dbconnect,  $dbName);
      // Truy vấn
      $results = mysqli_query( $dbconnect, "Select * from product");
      while ($row = mysqli_fetch_row($results)) {
      ?>
        <div class="card" style="width: 20rem;">
          <img src="<?=$row[3]?>" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title"><?=$row[1]?></h5>
            <p class="card-text"><?=$row[2]?></p>
            <a href="cart.php" class="btn btn-primary"><?=$row[0]?></a>
          </div>
        </div>
      <?php
      }
    ?>
		
	</div>
<style>
  @import url('https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300&family=Playfair+Display:ital,wght@1,600&display=swap');
h1 {
  text-align: center;
  font-size: 36px;
  color:
}
/* Chỉnh kích thước và căn giữa các thẻ card chứa sản phẩm */
.card {
  background: #F0F8FF;
  width: 50px;
  height: 500px; /* thêm chiều cao cho thẻ card */
  margin: 10px;
  display: inline-block;
  vertical-align: top;
  text-align: center;
  margin: 1.5rem;
  overflow: hidden; /* ẩn đi phần dư thừa của hình ảnh */
}
.card-text{
  position: absolute;
  left: 80px;
  top:400px;
  font-size: 24px;
}

/* Chỉnh kích thước của ảnh sản phẩm trong thẻ card */
.card img {
  height: 300px;
  width: 300px;
  object-fit: cover;
}
/* Chỉnh font size và màu sắc của tên, giá và nút mua sản phẩm */
.card-title {
  font-family: 'Playfair Display', serif;
  text-align: center;
  font-size: 24px;
  color: #333;
}
.btn-primary {
  position: absolute;
  left: 110px;
  top:450px;
  background-color: blue;
  height: 2rem;
  width: 4rem;
  text-align: center;
  border-color: black;
  
}
.card-img-top {
  height: 150px;
  object-fit: cover; /* giữ tỷ lệ của hình ảnh và đầy đủ khung của thẻ */
}
</style>
	<?php include 'layout_footer.php';?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>

