
<div class="container-fluid container-xl d-flex align-items-center justify-content-between">

    <a href="index.html" class="logo d-flex align-items-center">
      <!-- Uncomment the line below if you also wish to use an image logo -->
      <!-- <img src="assets/img/logo.png" alt=""> -->
      <h1>NEWS SITE</h1>
    </a>

    <nav id="navbar" class="navbar">
      <ul>
        <li><a href="">Trang Chủ</a></li>
        <li><a href="">Bài Viết</a></li>
        <li class="dropdown"><a href=""><span>Danh Mục</span> <i
              class="bi bi-chevron-down dropdown-indicator"></i></a>
          <ul>
            @foreach ($loaitin as $item)
            <li><a href="#">{{$item->cate_name}}</a></li>
            @endforeach
          </ul>
        </li>

        <li><a href="">Về Chúng Tôi</a></li>
        <li><a href="">Liên Hệ</a></li>
      </ul>
    </nav><!-- .navbar -->

    <div class="position-relative">

      <a href="">Đăng Kí |</a>
      <a href="">Đăng Nhập</a>
      <a href="#" class="mx-2 js-search-open"><span class="bi-search"></span></a>
      <i class="bi bi-list mobile-nav-toggle"></i>

      <!-- ======= Search Form ======= -->
      <div class="search-form-wrap js-search-form-wrap">
        <form action="" class="search-form">
          <span class="icon bi-search"></span>
          <input type="text" placeholder="Search" class="form-control">
          <button class="btn js-search-close"><span class=""></span></button>
        </form>
      </div><!-- End Search Form -->

    </div>

  </div>
