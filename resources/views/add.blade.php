<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Thêm sách</title>
</head>

<body>
    <form action="{{ route('create') }}" method="POST">
        @csrf
        Title <input type="text" name="title" id=""   class="form-control"> <br>
        thumbnail <input type="text" name="thumbnail" id="" class="form-control"><br>
        author <input type="text" name="author" id="" class="form-control"><br>
        publisher <input type="text" name="publisher" id="" class="form-control"><br>
        publication <input type="date" name="publication" id="" class="form-control"><br>
        price <input type="number" name="price" id=""class="form-control"><br>
        quantity <input type="number" name="quantity" id="" class="form-control"><br>
        <select name="category_id" id="" class="form-select">
            <option value="0">Chọn</option>
            @foreach ($categories as $cate_id)
            <option value="{{ $cate_id->id }}">{{$cate_id->name}}</option>
            @endforeach
        </select> <br>
        
            <button type="submit" class="btn btn-primary ">Thêm</button>

        
    </form>

</body>

</html>
