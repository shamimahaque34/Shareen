@extends('master.front.master')


@section('title')
Shareen - Personal Blog Template
@endsection

@section('body')

<div class="main-banner">
  <div class="container expanded">
   
      <div class="owl-big-banner owl-carousel">
        @foreach($recent_blogs as $recent_blog)
        <div class="item">
          <div class="overlay"></div>
          <img src="{{asset($recent_blog->image)}}" alt="" >
          <div class="item-content">
            <div class="main-content">
              <div class="meta-category">
                <span>{{ $recent_blog->category->name ?? ''}}</span>
              </div>
              <a href="{{route('blog-detail',['id'=>$recent_blog->id])}}"><h4>{{$recent_blog->main_title}}</h4></a>
              <ul class="post-info">
                <li><a href="#">{{ \Carbon\Carbon::parse($recent_blog->created_at)->format(' M d ,Y')}}</a></li>
                {{-- <li><a href="#">6 Comments</a></li> --}}
              </ul>
            </div>
          </div>
        </div>
        @endforeach
       
        {{-- <div class="item">
          <div class="overlay"></div>
          <img src="{{asset('/')}}website/images/big-banner-02.jpg" alt="">
          <div class="item-content">
            <div class="main-content">
              <div class="meta-category">
                <span>Lifestyle</span>
              </div>
              <a href="single-standard-post.html"><h4>mumblecore <em>pressed</em> hashtag</h4></a>
              <ul class="post-info">
                <li><a href="#">January 10, 2020</a></li>
                <li><a href="#">3 Comments</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="overlay"></div>
          <img src="{{asset('/')}}website/images/big-banner-03.jpg" alt="">
          <div class="item-content">
            <div class="main-content">
              <div class="meta-category">
                <span>Beauty</span>
              </div>
              <a href="single-standard-post.html"><h4>iceland <em>franzen</em> asymmetrical</h4></a>
              <ul class="post-info">
                <li><a href="#">January 10, 2020</a></li>
                <li><a href="#">5 Comments</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="overlay"></div>
          <img src="{{asset('/')}}website/images/big-banner-04.jpg" alt="">
          <div class="item-content">
            <div class="main-content">
              <div class="meta-category">
                <span>Nature</span>
              </div>
              <a href="single-standard-post.html"><h4>locavore <em>actually</em> vexillologist</h4></a>
              <ul class="post-info">
                <li><a href="#">January 10, 2020</a></li>
                <li><a href="#">8 Comments</a></li>
              </ul>
            </div>
          </div>
        </div> --}}
      </div>
      
    </div>
  </div>

  

  <section class="medium-gap standard-home">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <div class="standard-posts">
            <div class="row">
              @foreach($recent_blogs as $recent_blog)
              <div class="col-lg-12">
                <div class="standard-post">
                  <div class="post-image">
                    <a href="{{route('blog-detail',['id'=>$recent_blog->id])}}"><img src="{{asset($recent_blog->image)}}" alt="" height="150" width="200"></a>
                  </div>
                  <div class="down-content">
                    <div class="meta-category">
                      <span>{{ $recent_blog->category->name ?? ''}}</span>
                    </div>
                    <a href="{{route('blog-detail',['id'=>$recent_blog->id])}}"><h4>{{$recent_blog->main_title}}</h4></a>
                    <ul class="post-info">
                      <li><a href="#">{{ \Carbon\Carbon::parse($recent_blog->created_at)->format(' M d ,Y')}}</a></li>
                      <li><a href="#">{{ $recent_blog->author->name ?? ''}}</a></li>
                    </ul>
                    <p>{{$recent_blog->short_description}}</p>
                    {{-- <div class="row">
                      <div class="col-lg-6 col-md-6">
                        <div class="comments-info">
                          <i class="fa fa-comment-o"></i>
                          <span>8 comments</span>
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6">
                        <ul class="share-post">
                          <li><i class="fa fa-share-alt"></i></li>
                          <li><a href="#">Facebook</a>,</li>
                          <li><a href="#">Twitter</a>,</li>
                          <li><a href="#">Pinterest</a></li>
                        </ul>
                      </div>
                    </div> --}}
                  </div>
                </div>
              </div>
              @endforeach
              {{-- <div class="col-lg-12">
                <div class="standard-post">
                  <div class="post-image">
                    <a href="single-standard-post.html"><img src="{{asset('/')}}website/images/standard-post-image-02.jpg" alt=""></a>
                  </div>
                  <div class="down-content">
                    <div class="meta-category">
                      <span>Fashion</span>
                    </div>
                    <a href="single-standard-post.html"><h4>The Ultimate <em>Women’s Bag</em> Guide Latest Fashion <em>Trends</em></h4></a>
                    <ul class="post-info">
                      <li><a href="#">January 10, 2020</a></li>
                      <li><a href="#">Admin</a></li>
                    </ul>
                    <p>Bushwick fam PBRB master cleanse post-ironic. Craft beer ethical tbh forage, four loko fam fanny pack synth. Kombucha craft beer PBRB etsy, YOLO franzen tumeric leggings sriracha fam quinoa godard next level. Cold-pressed kinfolk cronut.</p>
                    <div class="row">
                      <div class="col-lg-6 col-md-6">
                        <div class="comments-info">
                          <i class="fa fa-comment-o"></i>
                          <span>8 comments</span>
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6">
                        <ul class="share-post">
                          <li><i class="fa fa-share-alt"></i></li>
                          <li><a href="#">Facebook</a>,</li>
                          <li><a href="#">Twitter</a>,</li>
                          <li><a href="#">Pinterest</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-12">
                <div class="standard-post">
                  <div class="post-image">
                    <a href="single-standard-post.html"><img src="{{asset('/')}}website/images/standard-post-image-03.jpg" alt=""></a>
                  </div>
                  <div class="down-content">
                    <div class="meta-category">
                      <span>Beauty</span>
                    </div>
                    <a href="single-standard-post.html"><h4><em>helvetica</em> skateboard semiotics <em>tumeric shorts</em> drinking</h4></a>
                    <ul class="post-info">
                      <li><a href="#">January 10, 2020</a></li>
                      <li><a href="#">Admin</a></li>
                    </ul>
                    <p>Bushwick fam PBRB master cleanse post-ironic. Craft beer ethical tbh forage, four loko fam fanny pack synth. Kombucha craft beer PBRB etsy, YOLO franzen tumeric leggings sriracha fam quinoa godard next level. Cold-pressed kinfolk cronut.</p>
                    <div class="row">
                      <div class="col-lg-6 col-md-6">
                        <div class="comments-info">
                          <i class="fa fa-comment-o"></i>
                          <span>8 comments</span>
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6">
                        <ul class="share-post">
                          <li><i class="fa fa-share-alt"></i></li>
                          <li><a href="#">Facebook</a>,</li>
                          <li><a href="#">Twitter</a>,</li>
                          <li><a href="#">Pinterest</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-12">
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
              </div>
              <div class="col-lg-12">
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
                      @foreach($recent_blogs as $recent_blog)
                      <li>
                        <a href="single-standard-post.html">
                          <div class="left-image">
                            <img src="{{asset($recent_blog->image)}}" alt="">
                            <span>9</span>
                          </div>
                          <div class="right-content">
                            <h6>{{$recent_blog->main_title}}</h6>
                            <span>{{ \Carbon\Carbon::parse($recent_blog->created_at)->format(' M d ,Y')}}</span>
                          </div>
                        </a>
                      </li>
                      @endforeach
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
                  <div class="widget-content mx-auto">
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
@endsection