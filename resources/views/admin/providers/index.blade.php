@extends('admin.layout')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
    Blank page
    <small>it all starts here</small>
    </h1>
    <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="#">Examples</a></li>
    <li class="active">Blank page</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">

    <!-- Default box -->
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Листинг сущности</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <div class="form-group">
            <a href="{{route('providers.create')}}" class="btn btn-success">Добавить</a>
            </div>
            <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
                <th>ID</th>
                <th>Название</th>
                <th>Текст</th>
                <th>Картинка</th>
                <th>Действия</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($providers as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->title}}
                </td>
                <td>{{$item->description}}</td>
                <td>
                <img src="{{$item->getImage()}}" alt="" width="100">
                </td>
                <td><a href="{{route('providers.edit', $item->id)}}" class="fa fa-pencil"></a> 
                    {{Form::open(['route' => ['providers.destroy', $item->id], 'method' => 'DELETE'])}} 
                    <button onclick="return confirm('are u sure?')" type="submit" class="delete">
                        <a class="fa fa-remove"></a>
                    </button>
                    {{Form::close()}}
                </td>
            </tr> 
            @endforeach

            </tfoot>
            </table>
        </div>
        <!-- /.box-body -->
        </div>
    <!-- /.box -->

</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection