@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard SIAKAD SD/MI</h1>
@stop

@section('content')

<div class="row">

    <div class="col-md-3">
        <x-adminlte-small-box
            title="0"
            text="Siswa"
            icon="fas fa-user-graduate"
            theme="primary"/>
    </div>

    <div class="col-md-3">
        <x-adminlte-small-box
            title="0"
            text="Guru"
            icon="fas fa-chalkboard-teacher"
            theme="success"/>
    </div>

    <div class="col-md-3">
        <x-adminlte-small-box
            title="0"
            text="Kelas"
            icon="fas fa-school"
            theme="warning"/>
    </div>

    <div class="col-md-3">
        <x-adminlte-small-box
            title="0"
            text="Mapel"
            icon="fas fa-book"
            theme="danger"/>
    </div>

</div>

@stop