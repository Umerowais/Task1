@extends('admin.masterpage2')
@section('content')

<form action="/admin/update/{{$data->id}}" method="post">
            @csrf
            <h1>update</h1>
            <input type="text" placeholder="name"  value="{{$data->id}}" disabled>
            <input type="text" placeholder="name" name="name" value="{{$data->name}}">
            
            <button type="submit">Edits</button>
        </form>
       
    
        @endsection