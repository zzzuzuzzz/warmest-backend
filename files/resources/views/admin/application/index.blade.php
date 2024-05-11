@extends('admin.layouts.main')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Заявки</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active"><a href="{{ route('admin.main.index') }}">Главная</a> / Заявки</li>
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
            <div class="card card-primary card-outline">
                <div class="card-header">
                    <h3 class="card-title">Заявки</h3>
                </div>
                <div class="card-body p-0">
                    <div class="mailbox-controls">
                        <!--      <div class="float-right">-->
                        <!--        1-50/200-->
                        <!--        <div class="btn-group">-->
                        <!--          <button type="button" class="btn btn-default btn-sm">-->
                        <!--            <i class="fas fa-chevron-left"></i>-->
                        <!--          </button>-->
                        <!--          <button type="button" class="btn btn-default btn-sm">-->
                        <!--            <i class="fas fa-chevron-right"></i>-->
                        <!--          </button>-->
                        <!--        </div>-->
                        <!--        &lt;!&ndash; /.btn-group &ndash;&gt;-->
                        <!--      </div>-->
                        <!-- /.float-right -->
                    </div>
                    <div class="table-responsive mailbox-messages">
                        <table class="table table-hover table-striped">
                            <tbody>
                            <tr>
                                <th>Имя заявителя</th>
                                <th>Email заявителя</th>
                            </tr>
                            @foreach($applications as $application)
                                    <tr style="
                                    @if($application->viewed == 'false')
                                        background-color: rgba(255,0,0,0.19);
                                    @endif
                                    ">
                                        <td class="mailbox-name"><a href="{{ route('application.show', $application->id) }}">{{ $application->name }}</a></td>
                                        <td class="mailbox-name">{{ $application->email }}</td>
                                    </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
