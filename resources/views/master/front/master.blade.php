<!DOCTYPE html>
<html lang="en">
  
<head>
    @include('website.includes.meta')
    <title>@yield('title')</title>

    <!-- Fonts -->
   @include('website.includes.fonts')

    @include('website.includes.css')
  </head>
  <body>

    @include('website.includes.preloader')

    <!-- Mobile Menu -->
    <div class="mobile-nav-wrapper">
      <div class="mobile-menu-inner">
        <ul class="mobile-menu">
          <li class="has-sub"><a href="#">Home <i class="sub-icon fa fa-angle-down"></i></a>
            
          </li>
          
          <li class="nav-item dropdown">
            <a href="" class="nav-link dropdown-toggle" data-toggle="dropdown">All Blog Category</a>
            <ul class="dropdown-menu">
                @foreach($categories as $category)
                    <li class="">
                        <a class="dropdown-item" href="{{route('blog-category', ['id' => $category->id])}}">
                            {{$category->name}}
                        </a>
                    </li>
                @endforeach
            </ul>
        </li>
          
          
          <li><a href="pages-contact-me-v2.html">Contact</a></li>
        </ul>
      </div>
    </div>
    <div class="mobile-menu-overlay"></div>

    <section class="above-header">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 align-self-center">
            <ul class="social-icons">
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
              <li><a href="#"><i class="fa fa-behance"></i></a></li>
            </ul>
          </div>
          <div class="col-lg-4 align-self-center">
            <div class="logo">
              <a href="{{route('home')}}"><img src="{{asset('/')}}website/images/logo.png" alt=""></a>
            </div>
          </div>
          <div class="col-lg-4 align-self-center">
            <ul class="search-item">
              <li class="menu-item menu-search">
                <a href="#search" id="menu-search-btn">
                  <i class="icon_search"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <!-- Header -->
   @include('website.includes.header')
    <!-- /Header -->

    <!-- change class -->
    <div class="change-class"></div>

    @include('website.includes.search')


    @yield('body')
    
    @include('website.includes.footer')
    <a href="#" class="go-top"><i class="fa fa-angle-up"></i></a>

   @include('website.includes.scripts')

  </body>

</html>
