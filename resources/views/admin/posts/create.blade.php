@extends('layouts.app')

@section('content')
<div class="card">
        <div class="card-header">Dashboard</div>
           
        <div class="card-body">
            <form action="{{route('post.store')}}" method="POST">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="title"> Title </label>
                    <input type="text" name="title" class="form-control" id="title"/>
                </div>
                <div class="form-group">
                    <label for="cover"> Cover Image </label>
                    <input type="file" name="cover" class="form-control" id="cover"/>
                </div>
                <div class="form-group">
                    <label for="content"> Content </label>
                    <textarea name="content" id="content" cols="5" rows="5" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <div class="text-center">
                        <button type="submit" class="btn btn-success">Create Post</button>
                    </div>
                </div>
            </form>
        </div>
</div>   
@stop