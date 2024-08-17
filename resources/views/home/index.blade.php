<!DOCTYPE html>
<html lang="en">
    <head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="assets/css/style.css">
<link rel="stylesheet" href="style.css">
<title>Title</title>
</head>
<body>
    


<div class="container mb-2 mt-2">
    <nav class="navbar navbar-expand-lg navbar-light bg-info ">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{url('/')}}">الشعار</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
       
       
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            الادارة المدرسية
          </a>
          <ul class="dropdown-menu text-center" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">معيار التخطيط</a></li>
            <li><a class="dropdown-item" href="#">معيار قيادة العملية التعليمية</a></li>
            <li><a class="dropdown-item" href="#">معيار  المجتمع المدرسي</a></li>
            <li><a class="dropdown-item" href="#">معيار التطوير المدرسي</a></li>


          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            التعليم والتعلم
        </a>
          <ul class="dropdown-menu text-center" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">معيار  بناء خبرات التعلم</a></li>
            <li><a class="dropdown-item" href="#">معيار تقويم التعلم</a></li>
            


          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            نواتج التعلم
          </a>
          <ul class="dropdown-menu text-center" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">التحصيل التعليمي</a></li>
            <li><a class="dropdown-item" href="#">التطور الشخصي والصحي والاجتماعي</a></li>
          


          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            البيئة المدرسية
          </a>
          <ul class="dropdown-menu text-center" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">المبنى المدرسي</a></li>
            <li><a class="dropdown-item" href="#">الأمن والسلامة</a></li>
          
          

          </ul>
         
         
          
        </li>

           
      </ul>
     
    </div>
  </div>
</nav>
    <div class="content">
    <div class="box">
        <img src="edu1.jpg" alt="">
        <p>مرحبا بكم<br>
            وزارة التعليم<br>
          ادارة تعليم....<br>
          اسم المدرسة <br>
            المنطقة الادارية
        </p>
      
        
        
    </div>
</div>
<h2 class="text-center alert alert-primary mb-2 mt-2">ملفات التقويم المدرسي</h2>

<div class="main">
    <div class="a">
        <img src="img.jpg" class="im" alt="">
        <p>الادارة المدرسية</p>
    </div>
    <div class="b">
    <img src="img.jpg" class="im" alt="">
    <p>التعليم والتعلم</p>

    </div>
    <div class="c">
    <img src="img.jpg" class="im" alt="">
    <p>نواتج التعلم</p>

    </div>
    <div class="d">
    <img src="img.jpg" class="im" alt="">
    <p>البيئة المدرسية</p>

    </div>
</div>
<h2 class="text-center alert alert-primary mb-3 mt-3">
    الإدارة المدرسية
</h2>
<div class="main_d">
    <div class="a">
        <img src="img.jpg" class="im" alt="">
        <a href="{{url('plan')}}">معيار التخطيط</a>
    </div>
    <div class="b">
    <img src="img.jpg" class="im" alt="">

        <a href="{{ url('view')}}">معيار قيادة العملية التعليمية</a>
    </div>
    <div class="c">
    <img src="img.jpg" class="im" alt="">

        <a href="{{ url('society')}}">معيار المجتمع المدرسي</a>
    </div>
    <div class="d">
    <img src="img.jpg" class="im" alt="">

        <a href="{{ url('improve')}}">معيار التطوير</a>
    </div>
</div>
<h2 class="text-center alert alert-primary mb-3 mt-3">
    التعليم والتعلم
</h2>
<div class="main_c">
    <div class="a">
        <img src="img.jpg" class="im1" alt="">
        <a href="{{ url('expert')}}">معيار بناء خبرات التعلم</a>
    </div>
    <div class="b">
    <img src="img.jpg" class="im1" alt="">

        <a href="{{ url('edu')}}">معيار تقويم التعلم</a>
    </div>
  
</div>

<h2 class="text-center alert alert-danger mb-3 mt-3">
    نواتج التعلم 
</h2>
<div class="main_g">
    <div class="a">
        <img src="img.jpg" class="im1" alt="">
        <a href="{{ url('ment')}}">التحصيل التعليمي</a>
    </div>
    <div class="b">
    <img src="img.jpg" class="im1" alt="">

        <a href="{{ url('develop')}}">التطور الشخصي والصحي والاجتماعي</a>
    </div>
  
</div>
<h2 class="text-center alert alert-warning mb-3 mt-3">
    البيئة المدرسية
</h2>
<div class="main_t">
    <div class="a">
        <img src="img.jpg" class="im1" alt="">
        <a href="{{ url('build')}}">المبنى المدرسي</a>
    </div>
    <div class="b">
    <img src="img.jpg" class="im1" alt="">

        <a href="{{ url('security')}}">الأمن والسلامة</a>
    </div>
  
</div>
</div>
    


        
</div>
    <footer class="footer">
     <div class="container">
      <div class="row">
        <div class="footer-col">
          <h4>التقويم المدرسي</h4>
          <ul>
            <li><a href="#">الادارة المدرسية</a></li>
            <li><a href="#">التعليم والتعلم</a></li>
            <li><a href="#">نواتج التعلم</a></li>
            <li><a href="#">البيئة المدرسية</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h4>نسعد بماسعدتك</h4>
          <ul>
            <li><a href="#">التعليمات</a></li>
            <li><a href="#">عن الموقع</a></li>
            <li><a href="#">خدماتنا</a></li>
            <li><a href="#">أعمالنا</a></li>
            <li><a href="#">الدفع</a></li>
          </ul>
        </div>
      
        <div class="footer-col">
          <h4>تابعنا</h4>
          <div class="social-links">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="https://wa.me/?text=966551849863" target="_blank"><i class="fab fa-whatsapp"></i></a>
            <a href="#"><i class="fab fa-linkedin-in"></i></a>
          </div>
        </div>

      </div>
      <h2>  تصميم وبرمجةالمعلم/ فهد المزروعي جميع الحقوق محفوظه</h2>

     </div>
  </footer>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>

</body>
</html>
