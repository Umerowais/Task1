@extends('admin.childpage.masterpage3')
@section('content')
<form action="/admin/set" method="post" enctype="multipart/form-data">
            @csrf
            <h1>Create crud1</h1>
            @if ($message = Session::get('error'))
            <div class="alert alert-danger alert-block">
                <strong>{{ $message }}</strong>
            </div>
            @endif
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
</div>
            @endif
            <input type="text" placeholder="title" name="title">
            
            <input type="text" placeholder="heading" name="heading">
            <input type="file" placeholder="image" name="image">
            <button type="submit">Create</button>
        </form>
@endsection