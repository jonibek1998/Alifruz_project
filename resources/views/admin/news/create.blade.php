@extends('admin.layout')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
    Добавить статью
    <small>приятные слова..</small>
    </h1>
</section>

<!-- Main content -->
<section class="content">

    <!-- Default box -->
    <div class="box">
    <div class="box-header with-border">
        <h3 class="box-title">Добавляем</h3>
    </div>
    @include('admin.errors')
    {{Form::open(['route' => ['news.store'], 'files' => true])}}
    <div class="box-body">
        <div class="col-md-6">
        <div class="form-group">
            <label for="exampleInputEmail1">Назнавание</label>
            <input type="text" name="title" class="form-control" id="exampleInputEmail1" placeholder="">
        </div>
        
        <div class="form-group">
            <label for="exampleInputFile">Картинка</label>
            <input type="file" name="image" id="exampleInputFile">

        </div>
        </div>
        <div class="col-md-12">
        <div class="form-group">
            <label for="exampleInputEmail1">Описание</label>
            <textarea name="description" id="" cols="30" rows="5" class="form-control"></textarea>
        </div>
    </div>
        <div class="col-md-12">
        <div class="form-group">
            <label for="exampleInputEmail1">Полный текст</label>
            <textarea name="content" id="" cols="30" rows="10" class="form-control"></textarea>
        </div>
    </div>
    </div>
    <!-- /.box-body -->
    <div class="box-footer">
        <a href="{{route('news.index')}}" class="btn btn-default">Назад</a>
        <button class="btn btn-success pull-right">Добавить</button>
    </div>
    <!-- /.box-footer-->
    {{Form::close()}}
    </div>
    <!-- /.box -->

</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper --> 
@endsection