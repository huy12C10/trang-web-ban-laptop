<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="css/FAQs.css">
    <link rel="stylesheet" type="text/css" href="css/style2.css">
    <title>Document</title>
    <style>
       .menu {
        background:#024443;
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 10px;
        text-align: center;
    }
    .menu a {
        text-decoration: none;
        color: #fff;
        margin: 0 20px;
        font-size: 18px;
        
    }
    .menu a:hover {
        
        text-decoration: underline;
        
    }
    .search-container {
        border:3px solid #050505;   
        background: #fff;
        height: 30px;
        border-radius: 30px;
        padding: 10px 20px;
        display: flex;
        justify-content: center;
        align-items: center;
        cursor: pointer;
        transition: 0.8s;
        
        
    }
    .search-container:hover > .search-input {
        width: 400px;
    }
    .search-container .search-input {
        background: transparent;
        border: none;
        
        width: 0px;
        font-weight: 500;
        font-size: 16px;
        transition: 0.8s;
    }
    .search-container .search-btn .fas {
        color: #5cbdbb;
    }

    .login-link {
    transition: background-color 0.3s ease, color 0.3s ease;
}

.login-link:hover {
    background-color: #5cbdbb;
    color: #fff;
}
* {box-sizing: border-box}
body {font-family: Verdana, sans-serif; margin:0}
.mySlides {display: none}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  animation-name: fade;
  animation-duration: 1.5s;
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
}
    
   
    </style>
</head>
<body>
  <div class=" size">
    

    <div class="menu-vertical">
    <nav> 
        
        <div class="menu">
            <ul>
                <!-- <li><img src="images (1)/images/download (1).png" alt=""></li> -->
                <li>
                    <a href="dangki.php" target="_self" class="login-link">Đăng Nhập</a>
                </li>
                <li><a href="index.php">Trang chủ</a></li>
                <li><a href="sanpham.php">Sản phẩm</a>
                <li><a href="FAQs.php">Event</a></li>
               
            </ul>
            <div class="search-container">
                <input type="text" name="search" placeholder="Search..." class="search-input">
                <a href="#" class="search-btn">
                    <i class="fas fa-search"></i>
                </a>
            </div>

    </nav>
</div>
  <header>
    <div class="event" id="events" >
        <h2 class="title">Upcoming Events</h2>

        <div class="event-hero" style="position: relative; ">
          

          <div class="event-text">
            <h2  class="badge" > Thử Thách Cuối Tuần | Ngày 6/9/2023 </h2>
             <h1 class="event-title">Trải nghiệm laptop mới nhất </h1>
  
             
              <p>1. Laptop Asus ROG Strix Gaming G513IE-HN246W R7 4800H</p>
              <p>2. Laptop Lenovo Gaming Legion 5 15ARH7 R7 6800H</p>
              <p>3. Laptop Acer Predator Gaming Helios PH315-54-99S6 i9 11900H</p>
              <p>4. Laptop MSI Gaming Katana 15 B13VFK-676VN i7 13620H</p>
              <p>5. MacBook Pro 14 inch M2 Pro 2023 10CPU 16GPU 16GB/512GB</p>
              <h4>Điền thông tin</h4>
              
              
              <form>
                <label for="name">Tên:</label>
                <input type="text" id="name" name="name" required><br><br>
            
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required><br><br>
            
                <!-- Thêm các trường thông tin thanh toán khác tại đây -->
            
                <button type="submit">Xác nhận thanh toán</button>
            </form>
            <script>
                const decrementButton = document.getElementById("decrement");
                const incrementButton = document.getElementById("increment");
                const quantityInput = document.getElementById("quantity");
            
                decrementButton.addEventListener("click", () => {
                    quantityInput.stepDown();
                });
            
                incrementButton.addEventListener("click", () => {
                    quantityInput.stepUp();
                });
            </script>
                
          </div>
        </header>
  <footer class="contact2">
    <div class="contact" id="contact" style="padding-bottom: 10px !important;">
      <div class="contact-list contact-address"  >
        <h5><span><i class="fa fa-map-marker w3-xlarge w3-text-light-grey"></i></span>Địa chỉ</h5>
        <p> Địa chỉ: 10 đường số 3, cư xá Lữ Gia, P.15, Q.11, TP.HCM</p>
        <p> Địa chỉ: 10 đường số 3, cư xá Lữ Gia, P.15, Q.11, TP.HCM</p>
        <p>Địa chỉ: 10 đường số 3, cư xá Lữ Gia, P.15, Q.11, TP.HCM </p>
      </div>
      <div class="contact-list">
        <h5><span><i class="fa fa-envelope w3-xlarge w3-text-light-grey"></i></span>Nhập email để cập nhật thông tin hàng tuần</h5>
        <div class="email-contact">
          <input placeholder="Email"  type="email" style="margin: 8px 0px !important;"/>
          
          <button class="w3-btn w3-red w3-round " style="width: 100px; padding:3px 10px !important">Đăng kí</button>
        </div>
  
      </div>
      <div class="contact-list" >
        <h5><span><i class="fa fa-phone w3-xlarge w3-text-light-grey"></i></span>Điện Thoại</h5>
        <p>Điện thoại: 0921.77.77.77 - 0922.77.77.77</p>
        <p>Điện thoại: 0921.88.88.88 - 0922.88.88.88</p>
  </footer>
</body>
</html>