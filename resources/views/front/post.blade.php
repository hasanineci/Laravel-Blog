@extends('front.index')
@section('title')Gönderiler - @endsection

@section('content')


<!-- Page Header-->
<header class="masthead" style="background-image: url('assets/img/post-bg.jpg')">
    <div class="container position-relative px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <div class="post-heading">
                    <h1>{{ $post->title }}</h1>
                    <h2 class="subheading">{{ $post->description }}</h2>
                    <span class="meta">
                        Bu gönderi 
                        <a href="#!">{{ $post->user->name }}</a> adlı kişi tarafından
                        {{ \Carbon\Carbon::parse($post->created_at)->format('d/m/Y H:i:s') }} tarihte paylaşıldı.
                    </span>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Post Content-->
<article class="mb-4">
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                {!! $post->content !!}
            </div>
        </div>
    </div>
</article>


@endsection