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
            <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
                <th>ID</th>
                <th>name</th>
                <th>phone</th>
                <th>email</th>
                <th>status</th>
                <th>Действия</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($subscribers as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->name}}</td>
                <td>{{$item->phone}}</td>
                <td>{{$item->email}}</td>
                <td>{{$item->getFreight()}}</td>
                <td>
                    {{Form::open(['route' => ['subscribers.destroy', $item->id], 'method' => 'DELETE'])}} 
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