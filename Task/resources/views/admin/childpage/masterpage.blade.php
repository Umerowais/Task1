<!DOCTYPE html>
<html lang="en">
<head>
    @include('admin.Layout.head')
</head>
<body>
    <header>
    @include('admin.Layout.navbar')
</header>
@include('admin.Layout.sidebar')

 @yield('content')

<footer>
 @include('admin.Layout.footer')
</footer>
 @include('admin.Layout.scripts')
 <script>
  $(document).ready( function () {
    $('.datatable').DataTable();
} );
</script>
 
</body>
</html>