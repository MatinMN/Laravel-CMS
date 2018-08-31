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
                <td>edit</td>
                <td>delete</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>  

@stop