<?php
// Start the session
session_start();
if (isset($_SESSION["status"]) && ($_SESSION["status"] == "LogedIn"))
{
    header("Location: index.php");
    exit;
}
?>
<!doctype html>
<html lang="en">
  <head>
  	<?php include 'layout_head.php';?>
    <title>Bán Ốp điện thoại bằng Gỗ</title>
  </head>
  <body>
  	<?php include 'layout_header.php';?>
	<div class="container-fluid">
        <h1><b><i> Login </i></b> </h1>
		<!-- Nội dung chính của PAGE ở đây --> 

        <form method="POST" >
            <div class="mb-3 row">
                <label for="username" class="col-sm-2 "><h4>Account</h4></label>
                <div class="col-sm-10">
                    <input type="text" id="username" name="username" >
                </div>
            </div>
            <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-2 col-form-label"><h4>Password</h4></label>
                <div class="col-sm-10">
                    <input type="password" id="inputPassword"  name="inputPassword">
                </div>
            </div>

            <div class="col-12">
                <button type="submit" class="btn btn-primary">Log in</button>
            </div>
        </form>
	</div>
    <style>
        h1{
            color: #00F5FF;
        }

    </style>

    <?php 
        include "./dbconfig.php";

        if (isset($_POST["username"]) && isset($_POST["inputPassword"])) {


            $querySTM = "Select * from account where "
            . "username='" . $_POST["username"]  . "'"
            . " and password='" . $_POST["inputPassword"] . "'";

            echo "<br> ". $querySTM;

            
            $results = mysqli_query( $dbconnect, $querySTM);



            $row = mysqli_fetch_row($results);

            
            /////////
            if ($row) {
                echo "Bạn đã đăng nhập thành công";
                $_SESSION["user"] = $row[0];
                $_SESSION["username"] = $row[1];
                $_SESSION["status"] = "LogedIn";
                header("Location: /");
                exit;
            } else {
                echo "Đăng nhập lại đi !!!";
            }
        }
    ?> 

	<?php include 'layout_footer.php';?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>