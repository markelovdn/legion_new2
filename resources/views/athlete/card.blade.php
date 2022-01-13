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
                                    @if($athlete->photo!=null)
                                        <img class="profile-user-img img-fluid img-circle" src="/uploads/{{$athlete->photo}}" alt="User profile picture">
                                    @else
                                        <img class="profile-user-img img-fluid img-circle" src="/dist/img/no-photo.jpg" alt="User profile picture">
                                    @endif
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

                                <a href="/athlete/editmaininfo/{{$athlete->id}}" class="btn btn-primary btn-block"><b>Редактировать данные</b></a>
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
                                    <li class="nav-item"><a class="nav-link" href="#coaches" data-toggle="tab">Тренеры</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#orgs" data-toggle="tab">Организация</a></li>
                                </ul>
                            </div><!-- /.card-header -->
                            <div class="card-body">
                                <div class="tab-content">
                                    <div class="tab-pane" id="coaches">
                                        <!-- Coach -->
                                        @foreach($athlete->coaches as $coach)
                                            @switch($coach->pivot->coach_type)
                                                @case(1) <strong>Первый тренер:</strong> @break
                                                @case(2) <strong>Второй тренер:</strong> @break
                                                @case(3) <strong>Третий тренер:</strong> @break
                                                @case(4) <strong>Действующий тренер:</strong> @break
                                            @endswitch
                                            {{$coach->secondname}} {{$coach->firstname}} {{$coach->patronymic}} <br>
                                        @endforeach
                                        <a href="/athlete/editcoachinfo/{{$athlete->id}}" class="btn btn-block btn-success col-sm-2">Редактировать</a>
                                        <!-- /.coach -->
                                    </div>
                                    <div class="tab-pane" id="orgs">
                                        <!-- Orgs -->
                                        @foreach($athlete->organizations as $org)
                                            <strong>Организация:</strong> {{$org->fulltitle}}<br>
                                        @endforeach
                                        @foreach($athlete->groups as $group)
                                            <strong>Место занятий:</strong> {{$group->departments->shorttitle}} - {{$group->title}}<br>
                                        @endforeach
                                        <a href="/athlete/editorgsinfo/{{$athlete->id}}" class="btn btn-block btn-success col-sm-2">Редактировать</a>
                                        <!-- /.gorgs -->
                                    </div>
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
