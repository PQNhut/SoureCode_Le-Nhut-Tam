<?php
// Start the session
session_start();
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
    <?=(isset($_SESSION["username"])?$_SESSION["username"]:"");?>   
		<!-- Nội dung chính của PAGE ở đây --> 
    <div class="container">
            <div id="slide">
                <div class="item" style="background-image: url(2.jpg);">
                    <div class="content">
                        <div class="name">Phone case</div>
                        <div class="des">It's so beautiful, you don't buy it in vain</div>
                    </div>
                </div>
                <div class="item" style="background-image: url(3.jpg);">
                    <div class="content">
                        <div class="name">Phone case</div>
                        <div class="des">It's so beautiful, you don't buy it in vain</div>    
                    </div>
                </div>
                <div class="item" style="background-image: url(4.jpg);">
                    <div class="content">
                        <div class="name">Phone case</div>
                        <div class="des">It's so beautiful, you don't buy it in vain</div>
                    </div>
                </div>
                <div class="item" style="background-image: url(5.jpg);">
                    <div class="content">
                        <div class="name">Phone case</div>
                        <div class="des">It's so beautiful, you don't buy it in vain</div>  
                    </div>
                </div>
                <div class="item" style="background-image: url(6.jpg);">
                    <div class="content">
                        <div class="name">Phone case</i></div>
                        <div class="des">It's so beautiful, you don't buy it in vain</div>
                    </div>
                </div>
                <div class="item" style="background-image: url(picture9.jpg);">
                    <div class="content">
                        <div class="name">Phone case</div>
                        <div class="des">It's so beautiful, you don't buy it in vain</div>
                    </div>
                </div>
                <div class="item" style="background-image: url(picture10.jpg);">
                    <div class="content">
                        <div class="name">Phone case</div>
                        <div class="des">It's so beautiful, you don't buy it in vain</div>
                    </div>
                </div>
                <div class="item" style="background-image: url(picture11.jpg);">
                    <div class="content">
                        <div class="name">Phone case</div>
                        <div class="des">It's so beautiful, you don't buy it in vain</div>
                    </div>
                </div></div>
            <div class="buttons">
                <button id="prev"><i class="fa-solid fa-angle-left"></i></button>
                <button id="next"><i class="fa-solid fa-angle-right"></i></button>
            </div>
        </div>
        <style>
            .container{
                position: absolute;
                left: 50%;
                top: 60%;
                transform: translate(-50%,-50%);
                width:1000px;
                height:600px;
                padding:50px;
                background-color: #f5f5f5;
                box-shadow: 0 30px 50px #dbdbdb;
            }
            #slide{
                width:max-content;
                margin-top:50px;
            }
            .item{
                width:200px;
                height:300px;
                background-position: 50% 50%;
                display: inline-block;
                transition: 0.5s;
                background-size: cover;
                position: absolute;
                z-index: 1;
                top:50%;
                transform: translate(0,-50%);
                border-radius: 20px;
                box-shadow:  0 30px 50px #505050;
            }
            .item:nth-child(1), .item:nth-child(2){
                left:0;
                top:0;
                transform: translate(0,0);
                border-radius: 0;
                width:100%;
                height:100%;
                box-shadow: none;
            }
            .item:nth-child(3){
                left:50%;
            }
            .item:nth-child(4){
                left:calc(50% + 220px);
            }
            .item:nth-child(5){
                left:calc(50% + 440px);
            }
            .item:nth-child(n+6){
                left:calc(50% + 660px);
                opacity: 0;
            }
            .item .content{
                background-color: #f5f5f58b;
                border-radius: 20px;
                position: absolute;
                top:50%;
                left:100px;
                width:300px;
                text-align: left;
                padding:0;
                color:#000000;
                transform: translate(0,-50%);
                display: none;
                font-family: Georgia;
            }
            .item:nth-child(2) .content{
                display: block;
                z-index: 11111;
            }
            .item .name{
                text-align: center;
                font-size: 40px;
                transform: 20px;
                font-weight: bold;
                opacity: 0;
                animation:showcontent 1s ease-in-out 1 forwards
            }
            .item .des{
                text-align: center;
                font-size: 24px;
                margin:20px 0;
                opacity: 0;
                animation:showcontent 1s ease-in-out 0.3s 1 forwards
            }
            @keyframes showcontent{
                from{
                    opacity: 0;transform: translate(0,100px);
                    filter:blur(33px);
                }to{
                    opacity: 1;
                    transform: translate(0,0);
                    filter:blur(0);
                }
            }
            .buttons{
                position: absolute;
                bottom: 30px;
                z-index: 222222;
                text-align: center;
                width:100%;
            }
            .buttons button{
                width:100px;
                height:50px;
                border:1px solid #555;
                transition: 0.5s;
            }
            .buttons button:hover{
                background-color: #FFFACD;
            }
        </style>
        <section class="service">
            <div class="box-container">
                <div class="box">
                    <i class="fas fa-shipping-fast"></i>
                    <h3>Fast delivery</h3>
                    <p>You just need to place an order and we will deliver it to you as quickly as possible => within 3 days</p>
                </div>
                <div class="box">
                    <i class="fas fa-undo"></i>
                    <h3>10 days replacements</h3>
                    <p>Within the specified number of days, if the product is damaged, it will be exchanged for free</p>
                </div>
                <div class="box">
                    <i class="fas fa-headset"></i>
                    <h3>24/7 support</h3>
                    <p>Do not worry. We have very good customer service, just call or text and we will be there.</p>
                </div>
            </div>
        </section>
        <style>
            .service .box-container{
                position: absolute;
                top: 800px;
                height:250px;
                padding:50px;
                display: flex;
                flex-wrap: wrap;
                gap:1.5rem;
                background:#f9f9f9;
                border:.1rem solid rgba(0,0,0,.1);
                
                padding:2rem;
            }
            .service .box-container .box{
                text-align: center;
                flex:1 1 10rem
            }
            .service .box-container .box i{
                font-size: 3rem;
                color:var(--orange);
            }
            .service .box-container .box h3{
                font-size: 2rem;
                color:var(--black);
                padding-top: 1rem;
            }
            .service .box-container .box p{
                font-size: 1rem;
                color:#666;
                padding:1rem 0;
            }
        </style>
		
	</div>
    <script>
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" 
        crossorigin="anonymous"
        document.getElementById('next').onclick = function()
        {
            let lists = document.querySelectorAll('.item');
            document.getElementById('slide').appendChild(lists[0]);
        }
        document.getElementById('prev').onclick = function()
        {
            let lists = document.querySelectorAll('.item');
            document.getElementById('slide').prepend(lists[lists.length - 1]);
        }
    </script>

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

  </body>
</html>