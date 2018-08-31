@extends('layouts.app')

@section('content')

    @if(count($errors) > 0)
        <ul class="list-group">
            @foreach($errors->all() as $error)
                <li class="list-group-item text-danger">
                    {{$error}}
                </li>
            @endforeach
        </ul>

    @endif

<div class="card">
        <div class="card-header">Dashboard</div>
           
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