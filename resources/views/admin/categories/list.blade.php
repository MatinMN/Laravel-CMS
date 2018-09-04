@extends('layouts.app')


@section('content')

<div class="card">
    <div class="card-header">Dashboard</div>
           
    <div class="card-body">
        <table class="table table-hover">
            <thead>
                <tr>
                <th scope="col">Category name</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
                </tr>
            </thead>
            <tbody>
            @foreach($categories as $category)
                <tr>
                <td>{{$category->name}}</td>
                <td><a href="{{route('category.edit',['id'=>$category->id])}}" class="btn btn-info btn-cs">Edit </a></td>
                <td><a href="{{route('category.delete',['id'=>$category->id])}}" class="btn btn-danger btn-cs">X</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>  

@stop