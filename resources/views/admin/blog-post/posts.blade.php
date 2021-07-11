@extends('admin.index')
@section('title')Postlar -@endsection
@section('menu-posts') menu-open @endsection
@section('menu-posts-active') active @endsection
@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Blog Gönderileri</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ url('admin') }}">Anasayfa</a></li>
                    <li class="breadcrumb-item active">Blog Gönderileri</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">

    <!-- Default box -->
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-12 col-12 order-2 order-md-1">
                    <div class="row" id="listPost">
                        <div class="col-md-12 col-12">

                            @foreach ($posts as $post)
                            <div class="post">
                                <div class="user-block">
                                    <img class="img-circle img-bordered-sm" src="{{ asset('dist/img/user.jpg') }}"
                                        alt="user image">
                                    <span class="username">
                                        <a href="#">{{ $post->title }}</a>
                                    </span>
                                    <span class="description">Herkese Açık Olarak Paylaşıldı - {{ $post->created_at->format('d/m/Y H:i:s') }}</span>
                                    <span class="description">{{ $post->status }}</span>
                                </div>
                                <p>
                                    {!! $post->description !!}
                                </p>

                                <p class="text-right">
                                    <a class="btn btn-primary btn-sm" href="{{ url('admin/posts/detail/'.$post->id) }}">
                                        <i class="fas fa-pencil-alt"></i>
                                        Düzenle
                                    </a>
                                    <button type="button" class="btn btn-danger btn-sm btnPostDelete" data-id="{{ $post->id }}">
                                        <i class="fas fa-trash"></i>
                                        Sil
                                    </button>
                                </p>
                            </div>
                            @endforeach

                            <div class="d-flex justify-content-end mb-4">
                                {{ $posts->links() }}
                            </div>

                        </div>
                    </div>
                </div>
            </div><!-- /.card-body -->
        </div><!-- /.card -->
</section><!-- /.content -->


@endsection

@section('footer')
<script src="//code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    
    $(function () {
        $('#listPost').on('click', '.btnPostDelete', function () {
            var id = $(this).data('id');
            $.ajaxSetup({  headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')   }  });
            Swal.fire({
                title: 'Paylaşılan gönderiyi kalıcı olarak silmek istediğinizden emin misiniz?',
                text: 'Bu işlem geri alınamaz',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Evet, Sil!',
                cancelButtonText: 'İptal',
                }).then((result) => {
                if (result.isConfirmed) {
                    
                    $.ajax({
                        url: "post/delete/"+id,
                        type: "POST",
                        success: function(data){
                            
                            if(data == true)
                            {
                                Swal.fire(
                                'Silindi!',
                                ' Gönderi silindi.',
                                'success'
                                )
                                setTimeout(() => window.location.reload(false), 2000);
                            }if(data == false)
                            {
                                Swal.fire(
                                'Silinmedi!',
                                ' Gönderi silinmedi.',
                                'error'
                                )
                            }
                        }
                    });
                }
            })
        });
    });
</script>
@endsection