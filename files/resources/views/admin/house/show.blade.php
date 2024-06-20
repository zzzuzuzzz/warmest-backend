@extends('admin.layouts.main')

@section('content')
    <!-- Content Header (Page header) -->
    <link rel="stylesheet" type="text/css" href="{{ asset('styles/css/nav-bar.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('styles/css/modal.css') }}">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Проект дома</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active"><a href="{{ route('admin.main.index') }}">Главная</a> / <a href="{{ route('house.index') }}">Проекты</a> / Просмотр проекта</li>
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
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header d-flex p-3">
                            <div class="mr-3">
                                <a href="{{ route('house.edit', $house->id) }}" class="btn btn-primary">Редактировать</a>
                            </div>
                            <form action="{{ route('house.delete', $house->id) }}" method="post" class="mr-3">
                                @csrf
                                @method('delete')
                                <input type="submit" class="btn btn-danger" value="Удалить">
                            </form>
                            @if($house->is_published)
                                <div class="mr-3">
                                    <a href="{{ route('house.publish', $house->id) }}" class="btn btn-primary">Снять с публикации</a>
                                </div>
                            @else
                                <div class="mr-3">
                                    <a href="{{ route('house.publish', $house->id) }}" class="btn btn-primary">Опубликовать</a>
                                </div>
                            @endif
                        </div>
                        <div class="modal-body">
                            <div class="modal-info-container" style="display: flex; flex-direction: row; justify-content: space-between"">
                                <div style="display: grid; width: fit-content">
                                    <div class="swiper" style="width: 100%">
                                        <!-- Additional required wrapper -->
                                        <div class="swiper-wrapper">
                                            <!-- Slides -->
                                            @foreach($images as $image)
                                                <div class="swiper-slide d-flex justify-content-center align-items-center" style="width: 1030px; margin-right: 100px;">
                                                    <img src="{{ asset('storage/' . $image) }}" style="width: 80%" class="img-fluid">
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
                                    <div class="product-params">
                                        <div class="modal-params-title"><span>{{ $house->title }}</span><span>{{ $house->params_size }}</span><span>м²</span></div>
                                        <div class="product-options" style="font-weight: 300;">
                                            <table>
                                                <tr>
                                                    <td>Проект</td>
                                                    <td>{{ $house->title }}</td>
                                                </tr>
                                                <tr>
                                                    <td>Размер</td>
                                                    <td>{{ $house->params_length }} x {{ $house->params_width }}</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="product-prices-block">
                                        <div class="product-prices-container">
                                            <div class="modal-params-title"><span>Стоимость</span></div>
                                            <div class="product-options">
                                                <div class="option-container"><span class="price-count">{{ $house->main_price }}</span><span
                                                        class="price-count">₽</span></div>
                                                <div class="option-container"><span style="font-weight: 300;">{{ $house->add_price }}</span><span style="font-weight: 300;">₽</span></div><span
                                                    style="font-weight: 300;">с коммуникациями</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-params">
                                        <div class="modal-params-title"><span>Дополнительные опции</span></div>
                                        <div class="product-options" style="font-weight: 300;">
                                            @foreach($addServices as $addService)
                                                <div class="option-container">{{ $addService->title }} — {{ $addService->price }}</div>
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="product-params">
                                        <div class="modal-params-title">
                                            <span>Служебная информация</span>
                                        </div>
                                        <div class="option-container">
                                            <table>
                                                <tr>
                                                    <td>Категория проекта: </td>
                                                    <td>{{ $category->title }}</td>
                                                </tr>
                                                <tr>
                                                    <td>Статус проекта: </td>
                                                    <td>{{ $house->is_published ? 'Опубликован' : 'Не опубликован'}}</td>
                                                </tr>
                                            </table>
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
                                    <p><?php echo $house->description; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
