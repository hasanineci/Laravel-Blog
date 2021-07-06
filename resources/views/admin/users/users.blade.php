@extends('admin.index')
@section('title')Kullanıcılar - @endsection
@section('menu-users-active') active @endsection

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Kullanıcılar</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ url('admin') }}">Anasayfa</a></li>
                    <li class="breadcrumb-item active">Kullanıcılar</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">

    <!-- Default box -->
    <div class="card card-solid">
        <div class="card-header">
            <a href="{{ url('admin/yeni-Kullanici') }}" type="button" class="btn btn-primary">
                Yeni Kullanıcı
            </a>
        </div>
        <div class="card-body pb-0">
            <div class="row" id="listUser">
                @foreach ($user as $user)
                <div class="col-12 col-sm-6 col-md-6 d-flex align-items-stretch flex-column">
                    <div class="card bg-light d-flex flex-fill">
                        <div class="card-header text-muted border-bottom-0">
                            {{ $user->jobs}}
                        </div>
                        <div class="card-body pt-0">
                            <div class="row">
                                <div class="col-7">
                                    <h2 class="lead"><b>{{ $user->name}}</b></h2>
                                    <p class="text-muted text-sm">
                                        <b>Hakkımda: </b> {{ $user->about}}
                                    </p>
                                    <ul class="ml-4 mb-0 fa-ul text-muted">
                                        <li class="small">
                                            <span class="fa-li">
                                                <i class="fas fa-lg fa-building"></i>
                                            </span>
                                            <b>Adres:</b> {{ $user->address}}
                                        </li>
                                        <li class="small">
                                            <span class="fa-li">
                                                <i class="fas fa-lg fa-phone"></i>
                                            </span>
                                            <b> Telefon:</b> {{ $user->phone}}
                                        </li>
                                        <li class="small">
                                            <span class="fa-li">
                                                <i class="fas fa-lg fa-at"></i>
                                            </span>
                                            <b>Email:</b> {{ $user->email}}
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-5 text-center">
                                    <img src="{{ asset('dist/img/user.jpg') }}" alt="user-avatar"
                                        class="img-circle img-fluid">
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="text-right">
                                <a class="btn btn-dark btn-sm p-2" style="width: 85px;"
                                    href="{{ url('admin/users/detail/'.$user->id) }}"><i
                                        class="fas fa-pencil-alt"></i>&nbsp; Düzenle
                                </a>
                                <button type="button" class="btn btn-danger btndelete" style="width: 85px;" data-name="{{ $user->name }}"
                                    data-id="{{ $user->id }}"><i class="fas fa-trash"></i> &nbsp; Sil
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div><!-- /.card-body -->
    </div><!-- /.card -->
</section> <!-- /.content -->


@endsection

@section('footer')
<script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    
    $(function () {
        $('#listUser').on('click', '.btndelete', function () {
            var id = $(this).data('id');
            var name = $(this).data('name');
            $.ajaxSetup({
                headers:
                {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            Swal.fire({
                title: 'Kullanıcıyı kalıcı olarak silmek istediğinizden emin misiniz?',
                text: 'Bu işlem geri alınamaz',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Evet, Sil!',
                cancelButtonText: 'İptal',
                }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire(
                    'Silindi!',
                    name+' Kullanıcısı silindi.',
                    'success'
                    )
                    $.ajax({
                        url: "users/delete/"+id,
                        type: "POST",
                        success: function(data){
                            if(data == true)
                            {
                                setTimeout(() => window.location.reload(false), 3000);
                            }
                        }
                    });
                }
            })
        });
    });



</script>
@endsection