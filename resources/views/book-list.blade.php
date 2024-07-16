<!DOCTYPE html>
<html>

<head>
    <title>Bookstore</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<style>
    table,
    tr,
    th,
    td {
        border: 1px solid #090101
    }
</style>

<body>
    <h4 class="text-center">8 sản phẩm giá cao nhất </h4>
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
                    <th>Category_id</th>
                    <th></th>
                    <th></th>
                    <th>                            <a class="btn btn-outline-success px-2" href="{{ route('add') }}">Thêm</a>
                    </th>
                </tr>
            </thead>

            @foreach ($books as $book)
                <tbody>
                    <tr>
                        <td >{{ $book->title }}</td>
                        <td><img src="{{ $book->thumbnail }}" width="100"></td>
                        <td class="book-details"> {{ $book->author }}</td>
                        <td class="book-details"> {{ $book->publisher }}</td>
                        <td class="book-details"> {{ $book->publication }}</td>
                        <td class="book-details"> {{ $book->price }}</td>
                        <td class="book-details"> {{ $book->quantity }}</td>
                        <td class="book-details"> {{ $book->categoryName }}</td>
                        <td><a class="btn btn-outline-success px-2" href="/book/{{ $book->id }}">Chi tiet</a></td>
                        <td><a class="btn btn-outline-success px-2"
                                href="/BookCategory/{{ $book->category_id }}">Category</a></td>
                        <td>
                            <a class="btn btn-outline-success px-2" onclick="return confirm('Ban co muon xoa k?')" href="{{route('delete',$book->id)}}">Xoá</a>
                            <a class="btn btn-outline-success px-2" href="{{ route('editform', $book->id) }}">Sửa</a>
                        </td>
                    </tr>
                </tbody>
            @endforeach
        </table>
    </div>
    <h4 class="text-center">8 sản phẩm giá thấp nhất</h4>
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
                    <th>Category_id</th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>

            @foreach ($books as $book)
                <tbody>
                    <tr>
                        <td class="book-title">{{ $book->title }}</td>
                        <td><img src="{{ $book->thumbnail }}" width="100"></td>
                        <td class="book-details"> {{ $book->author }}</td>
                        <td class="book-details"> {{ $book->publisher }}</td>
                        <td class="book-details"> {{ $book->publication }}</td>
                        <td class="book-details"> {{ $book->price }}</td>
                        <td class="book-details"> {{ $book->quantity }}</td>
                        <td class="book-details"> {{ $book->categoryName }}</td>
                        <td><a class="btn btn-outline-success px-2" href="/book/{{ $book->id }}">Chi tiết</a></td>
                        <td><a class="btn btn-outline-success px-2"
                                href="/BookCategory/{{ $book->category_id }}">Category</a></td>
                        <td>
                            <a class="btn btn-primary " onclick="return confirm('Ban co muon xoa k?')" href="{{route('delete',$book->id)}}">Xoá</a>
                            <a class="btn btn-outline-success px-2" href="{{ route('editform', $book->id) }}">Sửa</a>
                        </td>
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
