@extends('admin.layout')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
    Изменить статью
    <small>приятные слова..</small>
    </h1>
</section>

<!-- Main content -->
<section class="content">

    <!-- Default box -->
    <div class="box">
    <div class="box-header with-border">
        <h3 class="box-title">Обновляем</h3>
    </div>
    @include('admin.errors')
    {{Form::open(['route' => ['pricing.update', $item->id], 'method' => 'put'])}}
    <div class="box-body">
        <div class="col-md-6">
        <div class="form-group">
            <label for="exampleInputEmail1">Название</label>
            <input type="text" name="title" class="form-control" id="exampleInputEmail1" placeholder="" value="{{$item->title}}">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Цена</label>
            <input type="text" name="price" class="form-control" id="exampleInputEmail1" placeholder="" value="{{$item->price}}">
        </div>
        {{Form::select('deadline', 
        ['week' => 'week', 'month' => 'month', 'year' => 'year'],
        $item->deadline, 
        ['placeholder' => 'Pick a status', 'class' => 'form-control'])}}
        </div>
        <div class="col-md-12">
        <div class="form-group">
            <label for="exampleInputEmail1">Полный текст</label>
            <textarea name="text" id="" cols="30" rows="10" class="form-control">
                {{$item->text}}
            </textarea>
        </div>
    </div>
    </div>
    <!-- /.box-body -->
    <div class="box-footer">
        <a href="{{route('pricing.index')}}" class="btn btn-default">Назад</a>
        <button class="btn btn-warning pull-right">Изменить</button>
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