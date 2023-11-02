<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Laravel Encrypt Database Fields Example - Shouts.dev</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-5">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Laravel Encrypt Database Fields Example - Shouts.dev</h2>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <form method="post" action="{{ route('products.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label>Name</label>
            <input type="text" name="name" class="form-control" />
        </div>
        <div class="form-group">
            <label>Code</label>
            <input type="text" name="code" class="form-control" />
        </div>
        <div class="form-group">
            <label>Details</label>
            <textarea id="summernote" class="form-control" name="detail"></textarea>
        </div>
        <div class="form-group mt-3 mb-3">
            <button type="submit" class="btn btn-success btn-block">Submit</button>
        </div>
    </form>

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Code</th>
            <th>Details</th>
        </tr>
        @foreach ($products as $k => $product)
            <tr>
                <td>{{ ++$k }}</td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->code }}</td>
                <td>{{ $product->detail }}</td>
            </tr>
        @endforeach
    </table>

</div>

</body>
</html>
