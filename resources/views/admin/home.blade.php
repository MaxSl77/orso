@extends('layout.admin')

@section('title', 'Главная')

@section('content')


    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Главная</h1>
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
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3>{{ $adminUser }}</h3>
                            <p>Администраторы</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person"></i>
                        </div>
                        <a href="{{ route('admin.admin_users.index') }}" class="small-box-footer">Все администраторы <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3>{{ $sales }}</h3>
                            <p>Акции</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-receipt"></i>
                        </div>
                        <a href="{{ route('admin.sales.index') }}" class="small-box-footer">Все акции <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-lightblue">
                        <div class="inner">
                            <h3>{{ $equipments }}</h3>
                            <p>Оборудование</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-laptop-medical"></i>
                        </div>
                        <a href="{{ route('admin.equipments.index') }}" class="small-box-footer">Все оборудование <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-gradient-blue">
                        <div class="inner">
                            <h3>{{ $procedureGroups }}</h3>
                            <p>Группы процедур</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-vials"></i>
                        </div>
                        <a href="{{route('admin.procedure-groups.index')}}" class="small-box-footer">Все группы процедур <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-gradient-blue">
                        <div class="inner">
                            <h3>{{ $procedure }}</h3>
                            <p>Процедуры</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-vial"></i>
                        </div>
                        <a href="{{ route('admin.procedures.index') }}" class="small-box-footer">Все процедуры <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>
            <!-- /.row -->
            <!-- Main row -->

            <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
