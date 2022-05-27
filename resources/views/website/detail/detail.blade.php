@extends('master.front.master')

@section('body')
<section class="medium-gap single-post">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="single-posts">
            <div class="row">
              <div class="col-lg-12">
                <div class="single-post">
                  <div class="post-image">
                    <div class="meta-category">
                      <span>{{ $blog->category->name ?? ''}}</span>
                    </div>
                    <img src="{{asset($blog->image) }}" alt="">
                  </div>
                  <div class="down-content">
                    <h4>{{ $blog->main_title }}</h4>
                    <ul class="post-info">
                      <li><a href="#">{{ \Carbon\Carbon::parse($blog->created_at)->format(' M d ,Y')}}</a></li>
                      <li><a href="#">{{ $blog->author->name ?? ''}}</a></li>
                      {{-- <li><a href="#">3 Comments</a></li> --}}
                    </ul>
                    <p class="first-paragraph">{!! $blog->long_description !!} </p>
                    <div class="row">
                      <div class="col-lg-12 col-md-12 ">
                        <div class="tags d-flex justify-content-center">
                          <ul class="tags">
                            <li><i class="fa fa-tag"></i></li>
                            @foreach($categories as $category)
                            <li><a href="{{route('blog-category', ['id' => $category->id])}}">{{$category->name}}</a></li>
                            @endforeach
                            
                          </ul>
                        </div>
                      </div>
                      {{-- <div class="col-lg-5 col-md-6">
                        <ul class="share-post">
                          <li><i class="fa fa-share-alt"></i></li>
                          <li><a href="#">Facebook</a>,</li>
                          <li><a href="#">Twitter</a>,</li>
                          <li><a href="#">Pinterest</a></li>
                        </ul>
                      </div> --}}
                    </div>
                  </div>
                </div>
              </div>
              {{-- <div class="col-lg-12">
                <div class="about-author">
                  <div class="author-image">
                    <img src="{{asset('/')}}website/images/about-author.jpg" alt="">
                  </div>
                  <div class="right-content">
                    <h6>Shareen Robertson</h6>
                    <p>Franzen tumeric sriracha and quinoa goard next level. Cold-pressed kinfolk cronut shoreditch freegan kistrater selfies.</p>
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
                <ul class="post-nav">
                  <li><a href="#">Prev Post</a></li>
                  <li><a href="#">Next Post</a></li>
                </ul>
              </div>--}}
              {{-- <div class="col-lg-12">
                <div class="widget-post comments">
                  <div class="widget-header">
                    <h4>3 Comments</h4>
                  </div>
                  <div class="widget-content">
                    <ul class="comments">
                      <li>
                        <div class="comment-author-image">
                          <img src="{{asset('/')}}website/images/comment-author-01.jpg" alt="">
                        </div>
                        <div class="right-content">
                          <h6>Robert Imeri <span>January 10, 2020</span></h6>
                          <a href="#" class="reply-button">Reply</a>
                          <p>Franzen tumeric sriracha and quinoa goard next level. Cold-pressed kinfolk cronut short ditch freegan kistrater selfies.</p>
                        </div>
                      </li>
                      <li class="replied">
                        <div class="comment-author-image">
                          <img src="{{asset('/')}}website/images/comment-author-03.jpg" alt="">
                        </div>
                        <div class="right-content">
                          <h6>Kate Luise <span>January 11, 2020</span></h6>
                          <a href="#" class="reply-button">Reply</a>
                          <p>Franzen tumeric sriracha and quinoa goard next level. Cold-pressed kinfolk cronut short ditch freegan kistrater selfies.</p>
                        </div>
                      </li>
                      <li>
                        <div class="comment-author-image">
                          <img src="{{asset('/')}}website/images/comment-author-02.jpg" alt="">
                        </div>
                        <div class="right-content">
                          <h6>Antonio Matters <span>January 09, 2020</span></h6>
                          <a href="#" class="reply-button">Reply</a>
                          <p>Franzen tumeric sriracha and quinoa goard next level. Cold-pressed kinfolk cronut short ditch freegan kistrater selfies.</p>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
              </div> --}}
               {{-- <div class="col-lg-12">
                <div class="widget-post leave-comment">
                  <div class="widget-header">
                    @if(Session::get('user_id'))
                    <h4>Leave a comment</h4>
                  </div>
                  <div class="widget-content">
                    <div class="contact-form">
                      <form id="contact" action="#" method="post">
                        <div class="row">
                          <div class="col-lg-6 col-md-12 col-sm-12">
                            <fieldset>
                              <input name="name" type="text" class="form-control" id="name" placeholder="Your name..." required="">
                            </fieldset>
                          </div>
                          <div class="col-lg-6 col-md-12 col-sm-12">
                            <fieldset>
                              <input name="email" type="text" class="form-control" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your email..." required="">
                            </fieldset>
                          </div>
                          <div class="col-lg-12">
                            <fieldset>
                              <textarea name="message" rows="6" class="form-control" id="message" placeholder="Your comment..." required=""></textarea>
                            </fieldset>
                          </div>
                          <div class="col-lg-12">
                            <fieldset>
                              <button type="submit" id="form-submit" class="filled-button">Post Comment</button>
                            </fieldset>
                          </div>
                        </div>
                      </form>
                      @else
                      <h4>For Comment Please <a href="{{route('user-login', ['id' => $blog->id])}}">Login </a></h4>
                      @endif
                    </div>
                  </div>
                </div>
              </div> --}}
            </div>
          </div>
        </div>
        {{-- <div class="col-lg-4">
          <div class="main-sidebar right-sidebar">
            <div class="row">
              <div class="col-lg-12">
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
              </div>
              <div class="col-lg-12">
                <div class="widget-sidebar latest-posts">
                  <div class="widget-header">
                    <h4>Latest Posts</h4>
                  </div>
                  <div class="widget-content">
                    <ul class="latest-post-list">
                      <li>
                        <a href="single-standard-post.html">
                          <div class="left-image">
                            <img src="{{asset('/')}}website/images/latest-post-sidebar-01.jpg" alt="">
                            <span>9</span>
                          </div>
                          <div class="right-content">
                            <h6>croix flannel thundercats chicken</h6>
                            <span>January 14, 2020</span>
                          </div>
                        </a>
                      </li>
                      <li>
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
                      </li>
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
                      <li><a href="#">Lifestyle <span>(12)</span></a></li>
                      <li><a href="#">Fashion <span>(9)</span></a></li>
                      <li><a href="#">Beauty <span>(7)</span></a></li>
                      <li><a href="#">Nature <span>(19)</span></a></li>
                      <li><a href="#">Nightlife <span>(4)</span></a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-lg-12">
                <div class="widget-sidebar tags-cloud">
                  <div class="widget-header">
                    <h4>Tags Cloud</h4>
                  </div>
                  <div class="widget-content">
                    <ul class="tags">
                      <li><a href="#">lifestyle</a></li>
                      <li><a href="#">beauty</a></li>
                      <li><a href="#">fashion</a></li>
                      <li><a href="#">js</a></li>
                      <li><a href="#">psd</a></li>
                      <li><a href="#">brand</a></li>
                      <li><a href="#">wordpress</a></li>
                      <li><a href="#">css</a></li>
                      <li><a href="#">nature</a></li>
                      <li><a href="#">inspiration</a></li>
                      <li><a href="#">motivation</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div> --}}
      </div>
    </div>
  </section>
@endsection