@extends('admin.layouts.admin')
@section('content')
    <!-- Content Header (Page header) -->
    <!-- Main content -->
    <section class="content-header">
        <div class="container-fluid">
            <h1 class="m-0">Ma'lumotni yangilash</h1>
            <!-- Small boxes (Stat box) -->
            <div class="row mt-2">
                <div class="col-12">
                    <form action="{{ route('admin.user.update', $user) }}" method="POST" class="">
                        @csrf
                        @method('PATCH')
                        <div class="form-group">
                            <input type="text" class="form-control" name="name" value="{{ $user->name ?? old('name') }}"
                                   placeholder="Name">
                            @error('title')
                            <div class="text-danger">To`ldirish shartbr 👆<br> {{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="surname"
                                   value="{{ $user->surname ?? old('surname') }}" placeholder="Familya">
                            @error('surname')
                            <div class="text-danger">To`ldirish shartbr 👆<br> {{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control" name="patronymic"
                                   value="{{ $user->patronymic ?? old('patronymic') }}" placeholder="Patronymic">
                            @error('patronymic')
                            <div class="text-danger">To`ldirish shartbr 👆<br> {{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control" name="age" value="{{ $user->age ?? old('age') }}"
                                   placeholder="Age">
                            @error('age')
                            <div class="text-danger">To`ldirish shartbr 👆<br> {{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control" name="address"
                                   value="{{ $user->address ?? old('address') }}" placeholder="Address">
                            @error('address')
                            <div class="text-danger">To`ldirish shartbr 👆<br> {{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <select name="gender" class="custom-select form-control-border" id="exampleSelectBorder">
                                <option disabled selected>Pol</option>
                                <option {{ $user->gender == 1 || old('gender') == 1 ? ' selected' : '' }} value="1">
                                    Erkak
                                </option>
                                <option {{ $user->gender == 2 || old('gender') == 2 ? ' selected' : '' }} value="2">
                                    Ayol
                                </option>
                            </select>
                        </div>
                        <input type="submit" class="btn btn-primary" value="Tasdiqlash">
                        <a class="btn btn-outline-dark" href="{{ route('admin.user.index') }}"><i
                                class="fas fa-backward"></i></a>
                    </form>
                </div>
                <!-- ./colНазвание категории -->
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
