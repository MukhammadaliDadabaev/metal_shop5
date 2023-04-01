@extends('admin.layouts.admin')
@section('content')
 <!-- Content Header (Page header) -->
   <!-- Main content -->
    <section class="content-header">
        <div class="container-fluid">
            <h1 class="m-0">Ranglarni yangilash</h1>
            <!-- Small boxes (Stat box) -->
            <div class="row mt-2">
               <div class="col-12">
                   <form action="{{ route('admin.color.update', $color) }}" method="POST" class="">
                       @csrf
                       @method('PATCH')
                       <div class="form-group">
                           <input type="text" class="form-control" name="title" placeholder="Rang turi" value="{{ $color->title }}">
                           @error('title')
                                <div class="text-danger">To`ldirish shartbr 👆<br> {{ $message }}</div>
                           @enderror
                       </div>
                       <input type="submit" class="btn btn-primary" value="Tasdiqlash">
                       <a class="btn btn-outline-dark" href="{{ route('admin.color.index') }}"><i class="fas fa-backward"></i></a>
                   </form>
                </div>
                <!-- ./colНазвание категории -->
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
