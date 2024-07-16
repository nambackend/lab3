<!DOCTYPE html>
<html>
<head>
    <title>Chi Tiết Sách</title>
    <style>
        .book-detail-container {
            border: 1px solid #ddd;
            padding: 10px;
            margin-bottom: 10px;
            background-color: #f9f9f9;
        }
        .book-detail-container img {
            max-width: 100px;
            height: auto;
        }
        .book-detail-title {
            font-weight: bold;
            font-size: 1.2em;
        }
        .book-detail {
            margin-bottom: 5px;
        }
    </style>
</head>
<body>
    <div class="book-detail-container">
        <p class="book-detail-title">{{$bookDetail->title}}</p>    
        <p><img src="{{$bookDetail->thumbnail}}" alt=""></p>    
        <p class="book-detail">Tác giả: {{$bookDetail->author}}</p>    
        <p class="book-detail">Nhà xuất bản: {{$bookDetail->publisher}}</p>    
        <p class="book-detail">Ngày xuất bản: {{$bookDetail->publication}}</p>    
        <p class="book-detail">Giá: {{$bookDetail->price}}</p>    
        <p class="book-detail">Số lượng: {{$bookDetail->quantity}}</p>    
        <p class="book-detail">Mã loại: {{$bookDetail->category_id}}</p>    
    </div>
</body>
</html>