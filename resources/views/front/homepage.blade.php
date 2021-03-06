@extends('front.index')
@section('content')

<!-- Page Header-->
<header class="masthead" style="background-image: url('assets/img/home-bg.jpg')">
    <div class="container position-relative px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <div class="site-heading">
                    <h1>Clean Blog</h1>
                    <span class="subheading">A Blog Theme by Start Bootstrap</span>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Main Content-->
<div class="container px-4 px-lg-5">
    <div class="row gx-4 gx-lg-5 justify-content-center">
        <div class="col-md-10 col-lg-8 col-xl-7">

            @foreach ($posts as $post)
            <!-- Post preview-->
            <div class="post-preview">
                <a href="{{ url('post/'.$post->url) }}">
                    <h2 class="post-title">{{ $post->title }}</h2>
                    <h3 class="post-subtitle">{{ $post->description }}</h3>
                </a>
                <p class="post-meta">
                    Bu gönderi 
                    <a href="#!">{{ $post->user->name }}</a> adlı kişi tarafından
                    {{ \Carbon\Carbon::parse($post->created_at)->format('d/m/Y H:i:s') }} tarihte paylaşıldı.
                </p>
            </div>
            <!-- Divider-->
            @endforeach
            
            <!-- Pager-->
            <div class="d-flex justify-content-end mb-4">
                <span class="btn btn-primary text-uppercase">
                    {{ $posts->links() }}
                </span>
            </div>
        </div>
    </div>
</div>

@endsection