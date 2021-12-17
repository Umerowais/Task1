@extends('admin.childpage.masterpage')
@section('content')

<form action="/admin/new/{{$data->id}}" method="post">
            @csrf
            <h1>update</h1>
            <input type="text" placeholder="name"  value="{{$data->id}}" disabled>
            <input type="text" placeholder="name" name="title" value="{{$data->title}}">
            <input type="text" placeholder="name" name="heading" value="{{$data->heading}}">
            
            <button type="submit">Modify</button>
        </form>
       
    
        @endsection