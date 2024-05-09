@extends('admin.layouts.main')

@section('content')
    <!-- Content Header (Page header) -->
    <link rel="stylesheet" type="text/css" href="{{ asset('styles/css/nav-bar.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('styles/css/modal.css') }}">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Редактировать проект</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active"><a href="{{ route('admin.main.index') }}">Главная</a> / <a href="{{ route('house.index') }}">Проекты</a> / Редактирование проекта</li>
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
                    <div class="modal-body">
                        <div class="modal-info-container" style="display: flex; flex-direction: row; justify-content: space-between">
                            <div style="display: grid; width: fit-content;">
                                <div class="custom-file">
                                    <input name="images[]" multiple type="file" class="custom-file-input"
                                           id="exampleInputFile">
                                    <label class="custom-file-label" for="exampleInputFile">Выберете одну или
                                        несколько фотографий проекта</label>
                                </div>
                                <div class="previewBlock mt-2"></div>
                                <label>
                                    <input class="btn btn-danger deleteIMG" type="checkbox" name="deleteImg" value="deleteImg">
                                    Удалить ранее выбранные фотографии
                                </label>
                                <div class="swiper" style="width: 100%">
                                    <!-- Additional required wrapper -->
                                    <div class="swiper-wrapper">
                                        <!-- Slides -->
                                        @foreach($imageHouseList as $ihl)
                                            <div class="swiper-slide d-flex justify-content-center align-items-center" style="width: 1030px; margin-right: 100px;">
                                                <img src="{{ asset('storage/' . $ihl) }}" style="width: 80%" class="img-fluid">
                                            </div>
                                        @endforeach
                                    </div>
                                    <div class="swiper-pagination"></div>

                                    <!-- If we need navigation buttons -->
                                    <div class="swiper-button-prev"></div>
                                    <div class="swiper-button-next"></div>
                                </div>
                            </div>
                            <div class="product-info-block" style="max-width: 400px">
                                <div class="product-params" style="gap: 0">
                                    <div class="product-options" style="font-weight: 300;">
                                        <table>
                                            <tr>
                                                <td>Название</td>
                                                <td>
                                                    <input value="{{ $house->title }}" type="text" name="title" class="form-control ml-2" placeholder="Бейкер РУФ">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Площадь</td>
                                                <td>
                                                    <input value="{{ $house->params_size }}" type="text" name="params_size" class="form-control ml-2" placeholder="172">
                                                </td>
                                                <td><span class="ml-2">м²</span></td>
                                            </tr>
                                            <tr>
                                                <td>Этажность</td>
                                                <td>
                                                    <input value="{{ $house->params_floors }}" type="text" name="params_floors" class="form-control ml-2" placeholder="2">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Длина</td>
                                                <td>
                                                    <input value="{{ $house->params_length }}" type="text" name="params_length" class="form-control ml-2" placeholder="14.6">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Ширина</td>
                                                <td>
                                                    <input value="{{ $house->params_width }}" type="text" name="params_width" class="form-control ml-2" placeholder="5.6">
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
                                                            <input value="{{ $house->main_price }}" type="text" name="main_price" class="form-control ml-2" placeholder="5 500 000">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Цена с комуникациями</td>
                                                        <td>
                                                            <input value="{{ $house->add_price }}" type="text" name="add_price" class="form-control ml-2" placeholder="7 750 000">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Кредит</td>
                                                        <td>
                                                            <input value="{{ $house->credit_info }}" type="text" name="credit_info" class="form-control ml-2" placeholder="От 20 000 ₽/м">
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
                                                @foreach($categories as $category)
                                                    @if($category->id == $house->category_id)
                                                        <option selected
                                                                value="{{ $category->id }}">{{ $category->title }}</option>
                                                    @else
                                                        <option
                                                            value="{{ $category->id }}">{{ $category->title }}</option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <select class="add_services_ids" name="add_services_ids[]"
                                                    multiple="multiple"
                                                    data-placeholder="Выберете дополнительные услуги"
                                                    style="width: 100%;">
                                                @foreach($addServices as $addService)
                                                    @if(in_array($addService->id, $addServiceHousesList))
                                                        <option selected
                                                            value="{{ $addService->id }}">{{ $addService->title }}</option>
                                                    @else
                                                        <option value="{{ $addService->id }}">{{ $addService->title }}</option>
                                                    @endif
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
                                <textarea id="summernote" class="form-control" rows="20" name="description"><?php echo $house->description; ?>
                                </textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" value="Редактировать">
                        </div>
                    </div>
                </form>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
