@extends('master.front.master')

@section('body')
<section class="medium-gap single-post">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 offset-lg-2">
          <div class="single-posts">
            <div class="row">
            
              <div class="col-lg-12">
                <div class="single-post">
                  <div class="post-image">
                    <div class="meta-category">
                      <span>{{$category->name}}</span>
                    </div>
                    <img src="{{asset($category->image)}}" alt="">
                  </div>
                  
                </div>
              </div>
              
              
            </div>
          </div>
        </div>
      </div>
    </div>

    <section class="medium-gap standard-home masonry-home">
        <div class="container">
          <div class="row">
            <div class="col-lg-8">
              <div class="standard-posts">
                <div class="row masonry-layout normal-col-gap">
                  
                  <div class="col-lg-6 masonry-item motivation">
                    @foreach($blogs as $blog)
                    <div class="standard-post masonry-post">
                      <div class="post-image">
                        <a href="single-standard-post.html"><img src="{{asset($blog->image)}}" alt=""></a>
                      </div>
                      <div class="down-content">
                        <a href="{{route('blog-detail',['id'=>$blog->id])}}"><h4>{{$blog->main_title}}</h4></a>
                        <ul class="post-info">
                          <li><a href="#">{{ \Carbon\Carbon::parse($blog->created_at)->format(' M d ,Y')}}</a></li>
                          <li><a href="#">{{ $blog->author->name ?? ''}}</a></li>
                        </ul>
                        <p>{!! $blog->long_description !!}</p>
                      </div>
                    </div>
                    @endforeach

                    {{$blogs->links()}}
                  </div>
                 
                  
                  {{-- <div class="col-lg-12 masonry-item">
                    <ul class="pagination">
                      <li><a href="#">1</a></li>
                      <li class="active"><a href="#">2</a></li>
                      <li><a href="#">3</a></li>
                      <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                    </ul>
                  </div> --}}
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="main-sidebar right-sidebar">
                <div class="row">
                  {{-- <div class="col-lg-12">
                    <div class="widget-sidebar about-me">
                      <div class="widget-header">
                        <h4>About Me</h4>
                      </div>
                      <div class="widget-content">
                        <img src="{{asset('/')}}website/images/about-me-sidebar.jpg" alt="">
                        <p>Franzen tumeric sriracha and quinoa goard next level cold-pressed kinfolk.</p>
                        <h6>Shareen Robertson</h6>
                        <ul class="social-icons">
                          <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                          <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                          <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                          <li><a href="#"><i class="fa fa-rss"></i></a></li>
                          <li><a href="#"><i class="fa fa-behance"></i></a></li>
                        </ul>
                      </div>
                    </div>
                  </div> --}}
                  {{-- <div class="col-lg-12">
                    <div class="widget-sidebar promo-post">
                      <div class="widget-header">
                        <h4>Promo Post</h4>
                      </div>
                      <div class="widget-content">
                        <div class="promo-image">
                          <img src="{{asset('/')}}website/images/promo-image-sidebar.jpg" alt="">
                          <div class="inner-content">
                            <p>Franzen tumeric sriracha and quinoa next level kinfolk cronut.</p>
                            <div class="normal-white-button">
                              <a href="#">Read More</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="widget-sidebar instagram-posts">
                      <div class="widget-header">
                        <h4>Instagram</h4>
                      </div>
                      <div class="widget-content">
                        <div class="instagram-item left-item first-row">
                          <img src="{{asset('/')}}website/images/instagram-sidebar-01.jpg" alt="">
                        </div>
                        <div class="instagram-item first-row">
                          <img src="{{asset('/')}}website/images/instagram-sidebar-02.jpg" alt="">
                        </div>
                        <div class="instagram-item left-item">
                          <img src="{{asset('/')}}website/images/instagram-sidebar-03.jpg" alt="">
                        </div>
                        <div class="instagram-item">
                          <img src="{{asset('/')}}website/images/instagram-sidebar-04.jpg" alt="">
                        </div>
                      </div>
                    </div>
                  </div> --}}
                  <div class="col-lg-12">
                    <div class="widget-sidebar latest-posts">
                      <div class="widget-header">
                        <h4>Latest Posts</h4>
                      </div>
                      <div class="widget-content">
                        <ul class="latest-post-list">
                          @foreach($blogs as $blog)
                          <li>
                          <a href="single-standard-post.html">
                              <div class="left-image">
                                <img src="{{asset($blog->image)}}" alt="">
                                <span>9</span>
                              </div>
                              <div class="right-content">
                                <h6>{{$blog->main_title}}</h6>
                                <span>{{ \Carbon\Carbon::parse($blog->created_at)->format(' M d ,Y')}}</span>
                              </div>
                            </a>
                           
                          </li>
                          @endforeach
                        </ul>
                      </div>
                     
                          {{-- <li>
                            <a href="single-standard-post.html">
                              <div class="left-image">
                                <img src="{{asset('/')}}website/images/latest-post-sidebar-02.jpg" alt="">
                                <span>3</span>
                              </div>
                              <div class="right-content">
                                <h6>The Ultimate Women Guide Latest Fashion</h6>
                                <span>January 12, 2020</span>
                              </div>
                            </a>
                          </li>
                          <li>
                            <a href="single-standard-post.html">
                              <div class="left-image">
                                <img src="{{asset('/')}}website/images/latest-post-sidebar-03.jpg" alt="">
                                <span>7</span>
                              </div>
                              <div class="right-content">
                                <h6>wayfarers man braid marfa typewriter</h6>
                                <span>January 10, 2020</span>
                              </div>
                            </a>
                          </li> --}}
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="widget-sidebar categories">
                      <div class="widget-header">
                        <h4>Categories</h4>
                      </div>
                      <div class="widget-content">
                        <ul class="categories">
                          @foreach($categories as $category)
                          <li><a href="{{route('blog-category', ['id' => $category->id])}}">{{$category->name}}</a></li>
                          @endforeach
                        </ul>
                      </div>
                    </div>
                  </div>
                  {{-- <div class="col-lg-12">
                    <div class="widget-sidebar tags-cloud">
                      <div class="widget-header">
                        <h4>Tags Cloud</h4>
                      </div>
                      <div class="widget-content">
                        <ul class="tags">
                          @foreach($categories as $category)
                          <li><a href="{{route('blog-category', ['id' => $category->id])}}">{{$category->name}}<span>(12)</span></a></li>
                          @endforeach
                        </ul>
                      </div>
                    </div>
                  </div> --}}
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
  </section>
  
@endsection