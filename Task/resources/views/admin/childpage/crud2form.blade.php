@extends('admin.childpage.masterpage3')
@section('content')
<form action="/admin/set" method="post">
            @csrf
            <h1>Create crud1</h1>
            <input type="text" placeholder="title" name="title">
            <input type="text" placeholder="heading" name="heading">
            <button type="submit">Create</button>
        </form>
@endsection