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
                        <li class="breadcrumb-item active"><a href="{{ route('admin.main.index') }}">Главная</a> / <a href="{{ route('house.index') }}">Проекты</a> / Создания проекта</li>
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
                        <div class="modal-info-container d-flex" style="flex-direction: row; justify-content: space-between">
                            <div class="warmest-product-imgs" style="width: 50vw">
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
                                            <tr>
                                                <td>Антресоль</td>
                                                <td>
                                                    <div class="form-group">
                                                        <select name="mezzanine"
                                                                data-placeholder="Выберете дополнительные услуги"
                                                                style="width: 100%;">
                                                            <option value="1" selected>Есть</option>
                                                            <option value="0">Нет</option>
                                                        </select>
                                                    </div>
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
                                                            <input type="number" name="main_price" class="form-control ml-2" placeholder="5500000">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Цена с комуникациями</td>
                                                        <td>
                                                            <input type="number" name="add_price" class="form-control ml-2" placeholder="7750000">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Кредит</td>
                                                        <td>
                                                            <input type="number" name="credit_info" class="form-control ml-2" placeholder="20000">
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
                                            <select name="floor_category_id" class="form-control select2"
                                                    style="width: 100%;">
                                                <option selected="selected" disabled>Выберете категорию (этажность) дома</option>
                                                @foreach($floorCategories as $category)
                                                    <option value="{{ $category->id }}">{{ $category->title }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <select name="material_category_id" class="form-control select2"
                                                    style="width: 100%;">
                                                <option selected="selected" disabled>Выберете категорию (материал) дома</option>
                                                @foreach($materialCategories as $category)
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
                                <textarea  class="form-control" rows="5" name="description">Кровля: профлист С21 (цвет по согласованию), снегозадержатели, включены в стоимость.</textarea>
                            </div>
                        </div>
                        <div class="option-container">
                            <table>
                                <tr>
                                    <td>Артикул</td>
                                    <td>
                                        <input type="text" name="article" class="form-control ml-2" placeholder="123456НШК">
                                    </td>
                                </tr>
                                <tr>
                                    <td>Отделка</td>
                                    <td>
                                        <div class="form-group">
                                            <select name="finishing"
                                                    data-placeholder="Выберете дополнительные услуги"
                                                    style="width: 100%;">
                                                    <option value="1">Есть</option>
                                                    <option value="0">Нет</option>
                                            </select>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Количество спален</td>
                                    <td>
                                        <input type="number" name="number_of_bedrooms" class="form-control ml-2" placeholder="4">
                                    </td>
                                </tr>
                                <tr>
                                    <td>Электричество</td>
                                    <td>
                                        <div class="form-group">
                                            <select name="electricity"
                                                    data-placeholder="Выберете дополнительные услуги"
                                                    style="width: 100%;">
                                                <option value="1">Есть</option>
                                                <option value="0">Нет</option>
                                            </select>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Водоснабжение</td>
                                    <td>
                                        <div class="form-group">
                                            <select name="water"
                                                    data-placeholder="Выберете дополнительные услуги"
                                                    style="width: 100%;">
                                                <option value="1">Есть</option>
                                                <option value="0">Нет</option>
                                            </select>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Газоснабжение</td>
                                    <td>
                                        <div class="form-group">
                                            <select name="gas"
                                                    data-placeholder="Выберете дополнительные услуги"
                                                    style="width: 100%;">
                                                <option value="1">Есть</option>
                                                <option value="0">Нет</option>
                                            </select>
                                        </div>
                                    </td>
                                </tr>
                            </table>
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
