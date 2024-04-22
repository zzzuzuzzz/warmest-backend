@extends('admin.layouts.main')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Редактировать категорию</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active"><a href="{{ route('admin.main.index') }}">Главная</a></li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div>
                <form action="{{ route('house.update', $house->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('patch')
                    <div class="form-group">
                        <input type="text" value="{{ $house->title }}" name="title" class="form-control" placeholder="Название проекта">
                    </div>
                    <div class="form-group">
                        <input type="text" value="{{ $house->description }}" name="description" class="form-control" placeholder="Описание">
                    </div>
                    <div class="form-group">
                        <input type="text" name="content" value="{{ $house->content }}" class="form-control" placeholder="Контент">
                    </div>
                    <div class="form-group">
                        <input type="text" value="{{ $house->main_price }}" name="main_price" class="form-control" placeholder="Основная цена">
                    </div>
                    <div class="form-group">
                        <input type="text" value="{{ $house->add_price }}" name="add_price" class="form-control" placeholder="Цена с комуникациями">
                    </div>
                    <div class="form-group">
                        <select class="add_services_ids" name="add_services_ids[]" multiple="multiple" data-placeholder="Выберете дополнительные услуги" style="width: 100%;">
                            @foreach($addServices as $addService)
                                <option value="{{ $addService->id }}">{{ $addService->title }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <select name="category_id" class="form-control select2" style="width: 100%;">
                            <option selected="selected" disabled>Выберете категорию</option>
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->title }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="custom-file">
                                <input name="preview_image" type="file" class="custom-file-input" id="exampleInputFile">
                                <label class="custom-file-label" for="exampleInputFile">Выберете файл</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="Редактировать">
                    </div>
                </form>
                <img src="{{ asset('storage/' . $house->preview_image) }}" alt="Картинка" width="100%">
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
