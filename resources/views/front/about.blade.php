@extends('front.index')
@section('title')Hakkımızda - @endsection

@section('content')


<!-- Page Header-->
<header class="masthead" style="background-image: url('assets/img/about-bg.jpg')">
    <div class="container position-relative px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <div class="page-heading">
                    <h1>Hakkımızda</h1>
                    <span class="subheading">Bu benim işim.</span>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Main Content-->
<main class="mb-4">
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">

                @foreach ($about as $about)

                <h3>{{ $about->title }}</h3>
                <p>
                    {{ $about->content }}
                </p>
                @endforeach
            </div>
        </div>
    </div>
</main>


@endsection