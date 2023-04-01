@extends('admin.layouts.admin')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">User qo'shish </h1><span>👇</span>
                </div><!-- /.colДобавление категории -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ url('/admin/user') }}">Home</a></li>
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
                    <form action="{{ route('admin.user.store') }}" method="POST" class="">
                        @csrf
                        <div class="form-group">
                            <input type="text" class="form-control" name="name" value="{{ old('name') }}"
                                   placeholder="Name">
                            @error('name')
                            <div class="text-danger">To`ldirish shartbr 👆<br> {{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <input type="email" class="form-control" name="email" value="{{ old('email') }}"
                                   placeholder="Enter email">
                            @error('email')
                            <div class="text-danger">To`ldirish shartbr 👆<br> {{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control" name="password" value="{{ old('password') }}"
                                   placeholder="Password">
                            @error('password')
                            <div class="text-danger">To`ldirish shartbr 👆<br> {{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control" name="password_confirmation"
                                   value="{{ old('password_confirmation') }}" placeholder="Password_confirmation">
                            @error('password_confirmation')
                            <div class="text-danger">To`ldirish shartbr 👆<br> {{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control" name="surname" value="{{ old('surname') }}"
                                   placeholder="Familya">
                            @error('surname')
                            <div class="text-danger">To`ldirish shartbr 👆<br> {{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control" name="patronymic" value="{{ old('patronymic') }}"
                                   placeholder="Patronymic">
                            @error('patronymic')
                            <div class="text-danger">To`ldirish shartbr 👆<br> {{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control" name="age" value="{{ old('age') }}"
                                   placeholder="Age">
                            @error('age')
                            <div class="text-danger">To`ldirish shartbr 👆<br> {{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control" name="address" value="{{ old('address') }}"
                                   placeholder="Address">
                            @error('address')
                            <div class="text-danger">To`ldirish shartbr 👆<br> {{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <select name="gender" class="custom-select form-control-border" id="exampleSelectBorder">
                                <option disabled selected>Pol</option>
                                <option {{ old('gender') == 1 ? ' selected' : '' }} value="1">Erkak</option>
                                <option {{ old('gender') == 2 ? ' selected' : '' }} value="2">Ayol</option>
                            </select>
                        </div>

                        <input type="submit" class="btn btn-primary" value="Qo'shish">
                        <a class="btn btn-outline-success" href="{{ route('admin.user.index') }}"><i
                                class="fas fa-backward"></i></a>
                    </form>

                </div>
                <!-- ./colНазвание категории -->
            </div>

        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
