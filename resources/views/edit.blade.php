<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <title>Sửa sách</title>
</head>

<body>
    <form action="{{ route('edit', $editbook->id) }}" method="POST">
        @csrf
        @method('PUT')
        <input type="hidden" name="id" class="form-control"  value="{{ $editbook->id }}">
        Title <input type="text" name="title" class="form-control" value="{{ $editbook->title }}"> <br>
        thumbnail <input type="text" name="thumbnail" class="form-control" value="{{ $editbook->thumbnail }}"><br>
        author <input type="text" name="author" class="form-control" value="{{ $editbook->author }}"><br>
        publisher <input type="text" name="publisher" class="form-control" value="{{ $editbook->publisher }}"><br>
        publication <input type="date" name="publication" class="form-control" value="{{ $editbook->publication }}"><br>
        price <input type="number" name="price" class="form-control" value="{{ $editbook->price }}"><br>
        quantity <input type="number" name="quantity" class="form-control" value="{{ $editbook->quantity }}"><br>
        <select class="form-select" name="category_id" value="{{ $editbook->title }}">
            @foreach ($categories as $cate_id)
                <option value="{{ $cate_id->id }}" {{ $cate_id->id == $editbook->category_id ? 'selected' : "" }}>
                    {{ $cate_id->name }}</option>
            @endforeach
        </select>
        <button type="submit" class="btn btn-success">Sửa</button>
    </form>

</body>

</html>
