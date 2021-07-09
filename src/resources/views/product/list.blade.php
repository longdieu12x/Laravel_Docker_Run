@extends('layouts.app')
@section('content')
    <script type="application/javascript">
        var categories = JSON.parse('@json($categories)');
        console.log(categories);
    </script>
    <div>
        <product-list></product-list>
    </div>
@endsection
