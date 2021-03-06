@extends('layouts.app')

@section('content')

@include('admin.includes.errors')

<div class="card">
        <div class="card-header">Add new category</div>
           
        <div class="card-body">
            <form action="{{route('category.store')}}" method="POST" >
                {{csrf_field()}}
                <div class="form-group">
                    <label for="name"> Name </label>
                    <input type="text" name="name" class="form-control" id="name"/>
                </div>

                <div class="form-group">
                    <div class="text-center">
                        <button type="submit" class="btn btn-success">Create Category</button>
                    </div>
                </div>
            </form>
        </div>
</div>   
@stop