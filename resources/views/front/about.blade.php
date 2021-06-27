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

                @foreach ($about as $item)

                <h3>{{ $about->title }}</h3>
                <p>
                    {{ $about->content }}
                </p>
                @endforeach
                <h3>Misyonumuz</h3>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius praesentium recusandae illo eaque
                    architecto error, repellendus iusto reprehenderit, doloribus, minus sunt. Numquam at quae voluptatum
                    in officia voluptas voluptatibus, minus!
                </p>
                <h3>Vizyonumuz</h3>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut consequuntur magnam, excepturi aliquid
                    ex itaque esse est vero natus quae optio aperiam soluta voluptatibus corporis atque iste neque sit
                    tempora!
                </p>
            </div>
        </div>
    </div>
</main>


@endsection