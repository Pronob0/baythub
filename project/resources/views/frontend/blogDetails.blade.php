@extends('layouts.front')

@push('css')

@endpush

@section('content')

<!-- ============================ Page Title Start================================== -->
<div class="page-title">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                
                <h2 class="ipt-title">Blog Detail</h2>
                <span class="ipn-subtitle">See Our Latest Articles & News</span>
                
            </div>
        </div>
    </div>
</div>
<!-- ============================ Page Title End ================================== -->

<!-- ============================ Agency List Start ================================== -->
<section>
			
    <div class="container">
    
        <!-- row Start -->
        <div class="row">
        
            <!-- Blog Detail -->
            <div class="col-lg-8 col-md-12 col-sm-12 col-12">
                <div class="blog-details single-post-item format-standard">
                    <div class="post-details">
                    
                        <div class="post-featured-img">
                            <img class="img-fluid" src="{{ getPhoto($blog->photo) }}" alt="">
                        </div>
                        
                        <div class="post-top-meta">
                            <ul class="meta-comment-tag">
                                <li><a href="#"><span class="icons"><i class="ti-user"></i></span>by Admin</a></li>
                                <li><a href="#"><span class="icons"><i class="ti-eye"></i></span>{{ $blog->views }} Views</a></li>
                            </ul>
                        </div>
                        <h2 class="post-title">{{ $blog->title }}</h2>
                        <p>
                            @php
                                echo $blog->description;
                            @endphp
                        </p>
                        <div class="post-bottom-meta">
                            
                            <div class="post-share">
                                <h4 class="pbm-title">Social Share</h4>
                                <!-- AddToAny BEGIN -->
                                <div class="a2a_kit a2a_kit_size_32 a2a_default_style">
                                    <a class="a2a_dd" href="https://www.addtoany.com/share"></a>
                                    <a class="a2a_button_facebook"></a>
                                    <a class="a2a_button_whatsapp"></a>
                                    <a class="a2a_button_linkedin"></a>
                                    <a class="a2a_button_telegram"></a>
                                    <a class="a2a_button_google_gmail"></a>
                                    <a class="a2a_button_wechat"></a>
                                    <a class="a2a_button_x"></a>
                                    <a class="a2a_button_twitter"></a>
                                </div>
                                    <script async src="https://static.addtoany.com/menu/page.js"></script>
                                    <!-- AddToAny END -->
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Author Detail -->
                
                
                <!-- Blog Comment -->
                <div class="single-widgets widget_search">
                    <h4 class="title">Comments</h4>
                    <div id="disqus_thread"></div>


                </div>
                
                
                
            </div>
            
            <!-- Single blog Grid -->
            <div class="col-lg-4 col-md-12 col-sm-12 col-12">
                
                <!-- Searchbard -->
                <div class="single-widgets widget_search">
                    <h4 class="title">Search</h4>
                    <form action="{{ route('blog') }}" class="sidebar-search-form" method="GET">
                        <input type="search" name="search" placeholder="Search..">
                        <button type="submit"><i class="ti-search"></i></button>
                    </form>
                </div>

                <!-- Categories -->
                <div class="single-widgets widget_category">
                    <h4 class="title">Categories</h4>
                    <ul>
                        @foreach ($blogcategory as $category)
                        <li><a href="{{ route('blog.category', $category->id) }}">{{ $category->name }} <span>{{ $category->blogs->count() }}</span></a></li>
                        @endforeach
                        
                        
                    </ul>
                </div>
                
                <!-- Trending Posts -->
                <div class="single-widgets widget_thumb_post">
                    <h4 class="title">Trending Posts</h4>
                    <ul>
                        @foreach ($trendings as $item)
                        <li>
                            <span class="left">
                                <img src="{{ getPhoto($item->photo) }}" alt="" class="">
                            </span>
                            <span class="right">
                                <a class="feed-title" href="{{ route('blog.details',$item->id) }}">{{ $item->title }}</a> 
                                <span class="post-date"><i class="ti-calendar"></i> 
                                    {{ Carbon\Carbon::parse($item->created_at)->format('d M, Y') }}
                                
                                </span>
                            </span>
                        </li>
                            
                        @endforeach

                    </ul>
                </div>
                
                <!-- Tags Cloud -->
                <div class="single-widgets widget_tags">
                    <h4 class="title">Tags Cloud</h4>
                    <ul>
                        <li><a href="#">Lifestyle</a></li>
                        <li><a href="#">Travel</a></li>
                        <li><a href="#">Fashion</a></li>
                        <li><a href="#">Branding</a></li>
                        <li><a href="#">Music</a></li>
                    </ul>
                </div>
                
            </div>
            
        </div>
        <!-- /row -->					
        
    </div>
            
</section>
<!-- ============================ Agency List End ================================== -->





@endsection

@push('js')
<script>
    (function() { // DON'T EDIT BELOW THIS LINE
    var d = document, s = d.createElement('script');
    s.src = 'https://baythub-com.disqus.com/embed.js';
    s.setAttribute('data-timestamp', +new Date());
    (d.head || d.body).appendChild(s);
    })();
</script>

@endpush