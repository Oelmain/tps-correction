<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.16/tailwind.min.css" integrity="sha512-h+jxHd1kXOv1UbYfS8+kZXRwACrzoi2Lvc4hHa4Jbb4xGd7yXHlGgYzq3KjMkVt+ZABsTynT7iC2Q1yV7skacQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>{{$title}}</title>
</head>

<body>
    <h1>
        {{$title}}
    </h1>

    <img src="https://upload.wikimedia.org/wikipedia/en/4/44/Kids_See_Ghosts_Cover.png" alt="haha" class="w-24" >
    <!-- <img class= "w-24" src="{{public_path('storage\images\logo.png')}}" alt=""> -->
    <table border="1" class="table" >
        <th>Id</th>
        <th>Name</th>
        <th>Description</th>
        @foreach($products as $product)

        <tr>
            <td>
                {{ $product->id }}

            </td>

            <td>
                {{$product -> name}}
            </td>
            <td>
                {{$product -> description}}
            </td>
        </tr>
        @endforeach

    </table>
</body>

</html>