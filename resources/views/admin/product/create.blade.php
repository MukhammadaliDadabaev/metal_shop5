@extends('admin.layouts.admin')
@section('content')
   <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Mahsulot qo'shish </h1>
                </div><!-- /.colДобавление категории -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ url('/admin/product') }}">Home</a></li>
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
                   <form action="{{ route('admin.product.store') }}" method="POST" enctype="multipart/form-data">
                       @csrf
                       <div class="form-group">
                           <label for="title1">Title</label>
                           <input type="text" class="form-control" name="title" id="title1" placeholder="Title">
                           @error('title')
                                <div class="text-danger">To`ldirish shartbr 👆<br> {{ $message }}</div>
                           @enderror
                       </div>

                       <div class="form-group">
                           <label for="desc1">Description</label>
                           <input type="text" class="form-control" name="description" id="desc1" value="{{ old('description') }}"
                                  placeholder="Description">
                           @error('description')
                           <div class="text-danger">To`ldirish shartbr 👆<br> {{ $message }}</div>
                           @enderror
                       </div>

                       <div class="form-group">
                           <label for="content1">Content</label>
                           <textarea class="form-control" name="content" cols="15" rows="3" id="content1" placeholder="Content"></textarea>
                           @error('content')
                           <div class="text-danger">To`ldirish shartbr 👆<br> {{ $message }}</div>
                           @enderror
                       </div>

                       <div class="form-group">
                           <label for="price1">Narx</label>
                           <input type="number" class="form-control" name="price" id="price1" value="{{ old('price') }}"
                                  placeholder="Summa">
                           @error('price')
                           <div class="text-danger">To`ldirish shartbr 👆<br> {{ $message }}</div>
                           @enderror
                       </div>

                       <div class="form-group">
                           <label for="count1">Count</label>
                           <input type="number" class="form-control" name="count" id="count1" value="{{ old('count') }}"
                                  placeholder="Count..,.">
                           @error('count')
                           <div class="text-danger">To`ldirish shartbr 👆<br> {{ $message }}</div>
                           @enderror
                       </div>

                       <div class="form-group">
                           <label for="exampleInputFile">Fayl yuklash</label>
                           <div class="input-group">
                               <div class="custom-file">
                                   <input type="file" name="preview_image" class="custom-file-input" id="exampleInputFile">
                                   <label class="custom-file-label" for="exampleInputFile">Tanglang</label>
                               </div>
                               <div class="input-group-append">
                                   <span class="input-group-text">Yuklash</span>
                               </div>
                           </div>
                       </div>

                       <div class="form-group">
                           <label for="cate_id">Toifa turlari</label>
                           <select name="category_id" class="form-control select2" id="cate_id" style="width: 100%;">
                               <option selected="selected">Kategoriy tanlang</option>
                              @foreach($categories as $category)
                                   <option value="{{ $category->id }}">{{ $category->title }}</option>
                              @endforeach
                           </select>
                       </div>

                       <div class="form-group">
                           <label for="tag1">Tag</label>
                           <select name="tags" class="tags" multiple="multiple" data-placeholder="Tag tanlang" id="tag1" style="width: 100%;">
                               @foreach($tags as $tag)
                                   <option value="{{ $tag->id }}">{{ $tag->title }}</option>
                               @endforeach
                          </select>
                       </div>

                       <div class="form-group">
                           <label for="color1">Rang</label>
                           <select name="colors[]" class="colors" multiple="multiple" data-placeholder="Rang tanlang" id="color1" style="width: 100%;">
                               @foreach($colors as $color)
                                   <option value="{{ $color->id }}">{{ $color->title }}</option>
                               @endforeach
                          </select>
                       </div>

                      <input type="submit" class="btn btn-primary" value="Qo'shish">
                       <a class="btn btn-outline-success" href="{{ route('admin.product.index') }}"><i class="fas fa-backward"></i></a>
                   </form>
                </div>
                <!-- ./colНазвание категории -->
            </div>

        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
