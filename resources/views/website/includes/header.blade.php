<header class="site-header fixed-header">
    <div class="container expanded">
      <div class="header-wrap">
        <div class="header-logo">
          <a href="{{route('home')}}"><img src="{{asset('/')}}website/images/logo.png" alt=""></a>
        </div>
        <div class="header-nav">
            <ul class="main-menu">
              <li class="active"><a href="{{route('home')}}">Home</a></li>
              
              {{-- <li class="nav-item dropdown">
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
            </li> --}}

            <li class="menu-item-has-children "><a href="#">All Blog Category</a>
              <ul class="sub-menu">
                @foreach($categories as $category)
                <li><a href="{{route('blog-category', ['id' => $category->id])}}">{{$category->name}}</a></li>
                @endforeach
              </ul>
            </li>
              
              
               
             
              {{-- <li><a href="{{route('contact')}}">Contact</a></li> --}}
             
            </ul>    
        </div>
        <div class="header-widgets">
          <ul class="right-menu">
            <li class="menu-item menu-mobile-nav">
              <a href="#" class="menu-bar" id="menu-show-mobile-nav">
                <span class="hamburger"></span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </header>