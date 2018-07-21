@extends('layouts.app')

@section('content')
<div class="card">
        <div class="card-header">Dashboard</div>
           
        <div class="card-body">
            <form action="{{route('post.store')}}" method="POST">
                {{csrf_field()}}
    
            </form>
        </div>
</div>   
@stop