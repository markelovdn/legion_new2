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
        <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Все спортсмены</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                                    <div class="row"><div class="col-sm-12 col-md-6">
                                            <div class="dt-buttons btn-group flex-wrap">
                                                <button class="btn btn-secondary buttons-copy buttons-html5" tabindex="0" aria-controls="example1" type="button">
                                                    <span>Copy</span></button>
                                                <button class="btn btn-secondary buttons-csv buttons-html5" tabindex="0" aria-controls="example1" type="button">
                                                    <span>CSV</span></button>
                                                <button class="btn btn-secondary buttons-excel buttons-html5" tabindex="0" aria-controls="example1" type="button">
                                                    <span>Excel</span>
                                                </button>
                                                <button class="btn btn-secondary buttons-pdf buttons-html5" tabindex="0" aria-controls="example1" type="button">
                                                    <span>PDF</span>
                                                </button>
                                                <button class="btn btn-secondary buttons-print" tabindex="0" aria-controls="example1" type="button">
                                                    <span>Print</span>
                                                </button>
                                                <div class="btn-group">
                                                    <button class="btn btn-secondary buttons-collection dropdown-toggle buttons-colvis" tabindex="0" aria-controls="example1" type="button" aria-haspopup="true" aria-expanded="false">
                                                        <span>Column visibility</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-6">
                                            <div id="example1_filter" class="dataTables_filter">
                                                <form action="/athlete" method="get">
                                                    @csrf
                                                <label>Search:<input type="search" name="search_field" @if(isset($_GET['search_field'])) value="{{$_GET['search_field']}}" @endif class="form-control form-control-sm" placeholder="" aria-controls="example1"></label>
                                                    <input type="submit">
                                                </form>
                                                <form action="/athlete" method="get">
                                                    @csrf
                                                    <select name="status" id="">
                                                    <option></option>
                                                    <option value="1">Активный</option>
                                                    <option value="2">Не активный</option>
                                                </select>
                                                    <select name="gender" id="">
                                                        <option></option>
                                                        <option value="male">Мужской</option>
                                                        <option value="female">Женский</option>
                                                    </select>
                                                    <input type="submit">
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <table id="example1" class="table table-bordered table-striped dataTable dtr-inline" role="grid">
                                                <thead>
                                                <tr role="row">
                                                    <th class="sorting sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">№</th>
                                                    <th class="sorting" tabindex="1" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Фото</th>
                                                    <th class="sorting" tabindex="2" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">ФИО</th>
                                                    <th class="sorting" tabindex="3" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Дата рождения</th>
                                                </tr>
                                                </thead>
                                                <tbody>
{{--                                                {{dd($athletes)}}--}}
                                                {{$i=1}}
                                                @foreach($athletes as $athlete)
                                                    <tr class="odd">
                                                        <td>{{$i++}}</td>
                                                        <td class="dtr-control sorting_1" tabindex="0">
                                                            <a href="/athlete/{{$athlete->id}}"><img src="/uploads/{{$athlete->photo}}" class="img-circle elevation-2" width="50" height="50"></a>
                                                        </td>
                                                        <td>{{$athlete->secondname}} {{$athlete->firstname}} {{$athlete->patronymic}}</td>
                                                        <td>{{$athlete->dateofbirth}}</td>
                                                    </tr>
                                                @endforeach

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
            </div><!-- /.container-fluid -->
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection

@section('footer')
    @include('layouts.parts.footer')
@endsection
