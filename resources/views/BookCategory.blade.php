<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <table class="table table-borderd">
            <thead>
                <tr>
                    <th>title</th>
                    <th>image</th>
                    <th>author</th>
                    <th>publisher</th>
                    <th>publication</th>
                    <th>price</th>
                    <th>quantity</th>
                    <th>category_id</th>
                </tr>
            </thead>

            @foreach ($bookCate as $book)
                <tbody>
                    <tr>
                        <td class="book-title">{{ $book->title }}</td>
                        <td><img src="{{ $book->thumbnail }}" width="100"></td>
                        <td class="book-details">Tác giả: {{ $book->author }}</td>
                        <td class="book-details">Nhà xuất bản: {{ $book->publisher }}</td>
                        <td class="book-details">Ngày xuất bản: {{ $book->publication }}</td>
                        <td class="book-details">Giá: {{ $book->price }}</td>
                        <td class="book-details">Số lượng: {{ $book->quantity }}</td>
                        <td class="book-details">Mã loại: {{ $book->name }}</td>
                        <td><a href="/book/{{ $book->id }}">Chi tiet</a></td>
                    </tr>
                </tbody>
            @endforeach
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
</script>
</body>

</html>
