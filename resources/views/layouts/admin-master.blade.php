<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="{{asset('img/logo/F.png')}}" rel="icon">
  <title>FilmSa Admin Panel</title>
  <link href="{{asset('fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
  <link href="{{asset('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
  <link href="{{asset('css/ruang-admin.min.css')}}" rel="stylesheet">
</head>

<body id="page-top">
  <div id="wrapper">
    <!-- Sidebar -->
    <ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/admin">
        <div class="sidebar-brand-icon">
          <img src="{{asset('img/logo/F.png')}}">
        </div>
        <div class="sidebar-brand-text mx-3">FilmSa-Admin</div>
      </a>
      <hr class="sidebar-divider my-0">
      <li class="nav-item active">
        <a class="nav-link" href="/admin">
          <i class="fa fa-home"></i>
          <span>Anasayfa</span></a>
      </li>
      <hr class="sidebar-divider">
      <div class="sidebar-heading">
        Sayfalar
      </div>
      <li class="nav-item">
        <a class="nav-link" href="/admin-films">
          <i class="fa fa-film "></i>
          <span>Filmler</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/admin-category">
          <i class="fa fa-columns"></i>
          <span>Kategori</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">
          <i class="fa fa-file" ></i>
          <span>İçerik</span>
        </a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePage" aria-expanded="true"
          aria-controls="collapsePage">
          <i class="fa fa-user"></i>
          <span>Kullanıcı</span>
        </a>
        <div id="collapsePage" class="collapse" aria-labelledby="headingPage" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Kullanıcı Düzenle</h6>
            <a class="collapse-item" href="/users-list">Listele</a>
            <a class="collapse-item" href="/users-comment">Yorumlar</a>
          </div>
        </div>
      </li>
      <li class="nav-item">
         <a class="nav-link collapsed" href="/gguncelle/1">
          <i class="fas fa-cogs"></i>
          <span>Ayarlar</span>
        </a>
      </li>
      <hr class="sidebar-divider">
      <div class="version" id="version-ruangadmin"></div>
    </ul>
    <!-- Sidebar -->
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        <!-- TopBar -->
        <nav class="navbar navbar-expand navbar-light bg-navbar topbar mb-4 static-top">
          <button id="sidebarToggleTop" class="btn btn-link rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>
          <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                aria-labelledby="searchDropdown">
                <form class="navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-1 small" placeholder="What do you want to look for?"
                      aria-label="Search" aria-describedby="basic-addon2" style="border-color: #3f51b5;">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>
            
          
            <div class="topbar-divider d-none d-sm-block"></div>
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <img class="img-profile rounded-circle" src="{{asset('img/boy.png')}}" style="max-width: 60px">
                
                <span class="ml-2 d-none d-lg-inline text-white small">{{ Auth::user()->name }}</span>
                
              </a>
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="/pguncelle/1">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profil
                </a>
                
                
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="javascript:void(0);" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Çıkış
                </a>
              </div>
            </li>
          </ul>
        </nav>
        <!-- Topbar -->

        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Yönetim Paneli</h1>
            <ol class="breadcrumb">
             <!-- <li class="breadcrumb-item"><a href="/admin">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Anasayfa</li>-->
            </ol>
          </div>


          <!--Row-->

       @yield('films-table') <!--Filmler Tablo Halinde -->
       @yield('f-update') <!--Film Bilgilerini Güncelle -->
       @yield('f-create') <!--Yeni Film Bilgileri Ekle -->
       @yield('category-table')<!--Kategoriler Tablo Halinde  -->
       @yield('c-update')<!--Kategoriler Bilgilerini Güncelle  -->
       @yield('c-create')<!--Yeni Kategori Ekle  -->
       @yield('users-list')<!--Kullanıcı Listesi -->
       @yield('users-comment')<!-- Kullanıcı Yorumları -->
       @yield('u-update')<!--Kullanıcıları Günceller -->
       @yield('profil')<!--Yönetici Bilgilerini Günceller -->
       @yield('g-ayarlar')<!--Sayfa Ayarlarını Günceller -->

          <!-- Modal Logout -->
          <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelLogout"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabelLogout">Ohh No!</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <p>Çıkmak istediğinize emin misiniz?</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-outline-primary" data-dismiss="modal">İptal</button>
                  <a class="btn btn-outline-primary" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Çıkış') }}</a>
                </div>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
              </div>
            </div>
          </div>

        </div>
        <!---Container Fluid-->
      </div>
      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>copyright &copy; <script> document.write(new Date().getFullYear()); </script> - developed by
              <b><a href="https://indrijunanda.gitlab.io/" target="_blank">indrijunanda</a></b>
            </span>
          </div>
        </div>
      </footer>
      <!-- Footer -->
    </div>
  </div>

  <!-- Scroll to top -->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <script src="{{asset('jquery/jquery.min.js')}}"></script>
  <script src="{{asset('bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('jquery-easing/jquery.easing.min.js')}}"></script>
  <script src="{{asset('js/ruang-admin.min.js')}}"></script>
  <script src="{{asset('chart.js/Chart.min.js')}}"></script>
  <script src="{{asset('js/demo/chart-area-demo.js')}}"></script>  
</body>

</html>