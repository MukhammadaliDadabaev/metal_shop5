@extends('admin.layouts.admin')
@section('content')
   <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Teg qo'shish </h1><span>👇</span>
                </div><!-- /.colДобавление категории -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ url('/admin/tag') }}">Home</a></li>
                        <li class="breadcrumb-item active">Boshqaruv paneli v1</li>
                    </ol>
                </div><!-- /.colDashboard -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
               <div class="col-12">
                   <form action="{{ route('admin.tag.store') }}" method="POST" class="">
                       @csrf
                       <div class="form-group">
                           <input type="text" class="form-control" name="title" placeholder="Tag nomi">
                           @error('title')
                                <div class="text-danger">To`ldirish shartbr 👆<br> {{ $message }}</div>
                           @enderror
                       </div>
                       <input type="submit" class="btn btn-primary" value="Qo'shish">
                       <a class="btn btn-outline-success" href="{{ route('admin.tag.index') }}"><i class="fas fa-backward"></i></a>
                   </form>
                </div>
                <!-- ./colНазвание категории -->
            </div>

        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
