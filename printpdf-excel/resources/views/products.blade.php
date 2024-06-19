<!DOCTYPE html>

<html>

<head>

    <title>TP Excel </title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

     

<div class="container">

    <div class="card bg-light mt-3">

        <div class="card-header">

TP EXCELL IMPORT Export
        </div>

        <div class="card-body">

            <form action="{{ route('products.import') }}" method="POST" enctype="multipart/form-data">

                @csrf

                <input type="file" name="file" class="form-control">

                <br>

                <button class="btn btn-success">Import User Data</button>

            </form>

  

            <table class="table table-bordered mt-3">

                <tr>

                    <th colspan="3">

                        List Of Products

                        <a class="btn btn-warning float-end" href="{{ route('products.export') }}">Export User Data</a>

                    </th>

                </tr>

                <tr>

                    <th>ID</th>

                    <th>Name</th>

                    <th>Description</th>

                </tr>

                @foreach($products as $product)

                <tr>

                    <td>{{ $product->id }}</td>

                    <td>{{ $product->name }}</td>

                    <td>{{ $product->description }}</td>

                </tr>

                @endforeach

            </table>

  

        </div>

    </div>

</div>

     

</body>

</html>