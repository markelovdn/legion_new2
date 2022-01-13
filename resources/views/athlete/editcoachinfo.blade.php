@extends('layouts.dashboard')

@section('header')
    @include('layouts.parts.header')
@endsection

@section('navbar')
    @include('layouts.parts.navbar')
@endsection

@section('sidebar')
    @include('layouts.parts.sidebar')
@endsection

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Dashboard</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard v1</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3">

                        <!-- Profile Image -->
                        <div class="card card-primary card-outline">
                            <div class="card-body box-profile">
                                <div class="text-center">
                                    <img class="profile-user-img img-fluid img-circle" src="/uploads/{{$athlete->photo}}" alt="User profile picture">
                                </div>

                                <h3 class="profile-username text-center">{{$athlete->secondname}} {{$athlete->firstname}} {{$athlete->patronymic}}</h3>

                                <p class="text-muted text-center">{{$athlete->dateofbirth}}</p>

                                <ul class="list-group list-group-unbordered mb-3">
                                    <li class="list-group-item">
                                        @if($athlete->status==0)
                                        <b>Статус</b> <a class="float-right"><i class="fas fa-times-circle"></i></a>
                                        @else
                                            <b>Статус</b> <a class="float-right"><i class="far fa-check-circle"></i></a>
                                        @endif
                                    </li>
                                    <li class="list-group-item">
                                        @if($athlete->gender=='male')
                                            <b>Пол</b> <a class="float-right"><i class="fas fa-male"></i></a>
                                        @else
                                            <b>Пол</b> <a class="float-right"><i class="fas fa-female"></i></a>
                                        @endif
                                    </li>
                                </ul>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->

                    </div>
                    <!-- /.col -->
                    <div class="col-md-9">
                        <div class="card">
                            <div class="card-header p-2">
                                <ul class="nav nav-pills">
                                    <li class="nav-item"><a class="nav-link active" href="#settings" data-toggle="tab">Тренеры</a></li>
                                </ul>
                            </div><!-- /.card-header -->
                            <div class="card-body">
                                <div class="tab-content">
                                    <div class="tab-pane active" id="settings">
                                        <form action="/athlete/updatecoachinfo" method="post" class="form-horizontal" _lpchecked="1" enctype="multipart/form-data">
                                            @csrf
                                            <input type="text" name="id" value="{{$athlete->id}}" >
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Первый тренер</label>
                                                <div class="col-sm-9">
                                                    <select class="form-control" name="coach1" id="">
                                                        <option selected value=""></option>
                                                        @foreach($coaches as $coach)
                                                                <option
                                                                    @if($coach->coach_type==1 && $coach->athlete_id == $athlete->id) selected @endif
                                                                value="{{$coach->id}}">{{$coach->secondname}} {{$coach->firstname}} {{$coach->patronymic}}
                                                                </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <label class="col-sm-3 col-form-label">Второй тренер</label>
                                                <div class="col-sm-9">
                                                    <select class="form-control" name="coach2" id="">
                                                        <option value=""></option>
                                                        @foreach($coaches as $coach)
                                                        <option
                                                            @if($coach->coach_type==2 && $coach->athlete_id == $athlete->id) selected @endif
                                                                value="{{$coach->id}}">{{$coach->secondname}} {{$coach->firstname}} {{$coach->patronymic}}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <label class="col-sm-3 col-form-label">Третий тренер</label>
                                                <div class="col-sm-9">
                                                    <select class="form-control" name="coach3" id="">
                                                        <option value=""></option>
                                                        @foreach($coaches as $coach)
                                                            <option
                                                                @if($coach->coach_type==3 && $coach->athlete_id == $athlete->id) selected @endif
                                                                value="{{$coach->id}}">{{$coach->secondname}} {{$coach->firstname}} {{$coach->patronymic}}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <label class="col-sm-3 col-form-label">Действующий тренер</label>
                                                <div class="col-sm-9">
                                                    <select class="form-control" name="coach4" id="">
                                                        <option value=""></option>
                                                        @foreach($coaches as $coach)
                                                            <option
                                                                @if($coach->coach_type==4 && $coach->athlete_id == $athlete->id) selected @endif
                                                                value="{{$coach->id}}">{{$coach->secondname}} {{$coach->firstname}} {{$coach->patronymic}}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-sm-10">
                                                    <button type="submit" class="btn btn-danger">Изменить</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- /.tab-pane -->
                                </div>
                                <!-- /.tab-content -->
                            </div><!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection

@section('footer')
    @include('layouts.parts.footer')
@endsection
