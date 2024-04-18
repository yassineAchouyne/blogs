@extends('layouts.app')

@section('content')
<style>
    .text-box {
        height: auto;
        margin: 20px;
        overflow: hidden;
        display: -webkit-box;
        -webkit-line-clamp: 3;
        -webkit-box-orient: vertical;
        line-height: 1.5;
    }
</style>
<div class="main-banner header-text">
    <div class="container-fluid">
        <div class="owl-banner owl-carousel">
            @foreach($articles as $article)
            <div class="item">
                <img src="{{$article->image}}" alt="" style="height:375px">
                <div class="item-content">
                    <div class="main-content">
                        <div class="meta-category">
                            <span>{{$article->tag}}</span>
                        </div>
                        <a href="{{route('articles.show',['id'=>$article->id])}}">
                            <h4>{{$article->title}}</h4>
                        </a>
                        <ul class="post-info">
                            <li><a href="#">Admin</a></li>
                            <li><a href="#">{{Carbon\Carbon::parse($article->date)->format('F j, Y');}}</a></li>
                            <li><a href="#">00 Comments</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</div>





<section class="blog-posts">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="all-blog-posts">
                    <div class="row">
                        @foreach($articles as $article)
                        <div class="col-lg-12">
                            <div class="blog-post">
                                <div class="blog-thumb">
                                    <img src="{{$article->image}}" alt="">
                                </div>
                                <div class="down-content">
                                    <span>{{$article->tag}}</span>
                                    <a href="{{route('articles.show',['id'=>$article->id])}}">
                                        <h4>{{$article->title}}</h4>
                                    </a>
                                    <ul class="post-info">
                                        <li><a href="#">Admin</a></li>
                                        <li><a href="#">{{Carbon\Carbon::parse($article->date)->format('F j, Y');}}</a></li>
                                        <li><a href="#">00 Comments</a></li>
                                    </ul>
                                    <p class="text-box">{!!$article->content!!}</p>
                                    <div class="post-options">
                                        <div class="row">
                                            <div class="col-6">
                                                <ul class="post-tags">
                                                    <li><i class="fa fa-tags"></i></li>
                                                    <li>{{$article->keyword}}</li>
                                                </ul>
                                            </div>
                                            <div class="col-6">
                                                <ul class="post-share">
                                                    <li><i class="fa fa-share-alt"></i></li>
                                                    <li><a href="#">Facebook</a>,</li>
                                                    <li><a href="#"> Twitter</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach

                        <div class="col-lg-12">
                            <div class="main-button">
                                <a href="{{route('articles.all')}}">View All Posts</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="sidebar">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="sidebar-item search">
                                <form id="search_form" name="gs" method="GET" action="#">
                                    <input type="text" name="q" class="searchText" placeholder="type to search..." autocomplete="on">
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="sidebar-item recent-posts">
                                <div class="sidebar-heading">
                                    <h2>Recent Posts</h2>
                                </div>
                                <div class="content">
                                    <ul>
                                        @foreach($resarticles as $article)

                                        <li><a href="{{route('articles.show',['id'=>$article->id])}}">
                                                <h5>{{$article->title}}</h5>
                                                <span>{{Carbon\Carbon::parse($article->date)->format('F j, Y');}}</span>
                                            </a></li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="sidebar-item categories">
                                <div class="sidebar-heading">
                                    <h2>Categories</h2>
                                </div>
                                <div class="content">
                                    <ul>
                                        @foreach($categories as $categorie)

                                        <li><a href="#">- {{$categorie->title}}</a></li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="col-lg-12">
                            <div class="sidebar-item tags">
                                <div class="sidebar-heading">
                                    <h2>Tag Clouds</h2>
                                </div>
                                <div class="content">
                                    <ul>
                                        <li><a href="#">Lifestyle</a></li>
                                        <li><a href="#">Creative</a></li>
                                        <li><a href="#">HTML5</a></li>
                                        <li><a href="#">Inspiration</a></li>
                                        <li><a href="#">Motivation</a></li>
                                        <li><a href="#">PSD</a></li>
                                        <li><a href="#">Responsive</a></li>
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