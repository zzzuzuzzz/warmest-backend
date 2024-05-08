@extends('admin.layouts.main')

@section('content')
    <link rel="stylesheet" type="text/css" href="{{ asset('styles/css/nav-bar.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('styles/css/modal.css') }}">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Добавить проект дома</h1>
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
                <form action="{{ route('house.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('post')
                    <div class="modal-body">
                        <div class="modal-info-container" style="flex-direction: row;">
                            <div style="display: grid; width: 60vw">
                                <div class="custom-file">
                                    <input name="images[]" multiple type="file" class="custom-file-input"
                                           id="exampleInputFile">
                                    <label class="custom-file-label" for="exampleInputFile">Выберете одну или несколько фотографий проекта</label>
                                    <div class="previewBlock mt-2"></div>
                                </div>
                            </div>
                            <div class="product-info-block">
                                <div class="product-params" style="gap: 0">
                                    <div class="product-options" style="font-weight: 300;">
                                        <table>
                                            <tr>
                                                <td>Название</td>
                                                <td>
                                                    <input type="text" name="title" class="form-control ml-2" placeholder="Бейкер РУФ">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Площадь</td>
                                                <td>
                                                    <input type="text" name="params_size" class="form-control ml-2" placeholder="172">
                                                </td>
                                                <td><span class="ml-2">м²</span></td>
                                            </tr>
                                            <tr>
                                                <td>Этажность</td>
                                                <td>
                                                    <input type="text" name="params_floors" class="form-control ml-2" placeholder="2">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Длина</td>
                                                <td>
                                                    <input type="text" name="params_length" class="form-control ml-2" placeholder="14.6">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Ширина</td>
                                                <td>
                                                    <input type="text" name="params_width" class="form-control ml-2" placeholder="5.6">
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                                <div class="product-prices-block">
                                    <div class="product-prices-container">
                                        <div class="modal-params-title">
                                            <span>Стоимость</span>
                                        </div>
                                        <div class="product-options">
                                            <div class="option-container">
                                                <table>
                                                    <tr>
                                                        <td>Основная цена</td>
                                                        <td>
                                                            <input type="text" name="main_price" class="form-control ml-2" placeholder="5 500 000">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Цена с комуникациями</td>
                                                        <td>
                                                            <input type="text" name="add_price" class="form-control ml-2" placeholder="7 750 000">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Кредит</td>
                                                        <td>
                                                            <input type="text" name="credit_info" class="form-control ml-2" placeholder="От 20 000 ₽/м">
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-params" style="">
                                    <div class="modal-params-title">
                                        <span>Дополнительные опции</span>
                                    </div>
                                    <div class="product-options" style="font-weight: 300;">
                                        <div class="form-group">
                                            <select name="category_id" class="form-control select2"
                                                    style="width: 100%;">
                                                <option selected="selected" disabled>Выберете категорию дома</option>
                                                @foreach($categories as $category)
                                                    <option value="{{ $category->id }}">{{ $category->title }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <select class="add_services_ids" name="add_services_ids[]"
                                                    multiple="multiple"
                                                    data-placeholder="Выберете дополнительные услуги"
                                                    style="width: 100%;">
                                                @foreach($addServices as $addService)
                                                    <option
                                                        value="{{ $addService->id }}">{{ $addService->title }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-characters">
                            <div class="font-weight-bold">
                                <div style="font-size: 25px">Все
                                    <span style="color: var(--warmest-orange);">характеристики</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <textarea id="summernote" class="form-control" rows="20" name="description">Кровля: профлист С21 (цвет по согласованию), снегозадержатели, включены в стоимость. Стропильная конструкция: из строганной доски 35х190 мм., шаг 58-59 см. Обрешетка: строганная доска 20х90 мм., шаг 30-40 см. (подрешетник монтируется через контр рейку из обрезной доски 40х40 мм). Вентиляционные шахты: 2 точки (с грибками на крыши). Чердачное помещение со стороны фронтонов устанавливаются вентиляционные решетки. Утепление крыши: плитный утеплитель 200 мм. Rockwool-лайт баттс скандик.
                                </textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" value="Добавить">
                        </div>
                    </div>
                </form>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
