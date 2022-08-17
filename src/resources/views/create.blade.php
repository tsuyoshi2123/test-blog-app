<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">
    <title>create_view</title>
</head>
<body>
    <div class="header-top">
        <h2 class="header-title">BLOG TOP</h2>
    </div>
    <h2 class="create-title">メシ投稿</h2>
    <div class="create-wrapper">
        <div class="create-box">
            <p class="name">名前</p>
            <input type="text" name="" id="create-name">
        </div>
        <div class="create-box">
            <p class="eate">食べたご飯</p>
            <input type="text" name="" id="create-eate">
        </div>
        <div class="create-box">
            <p class="comment">コメント</p>
            <input type="text" name="" id="create-comment">
        </div>
        <div class="create-box">
            <p class="time">日付</p>
            <input type="text" name="" id="create-time">
        </div>
        <div class="btn-box">
            {!! Form::open(['route' => 'blog.index' , 'method' => 'GET']) !!}
                @csrf
                <button type="submit" class="index-btn">戻る</button>
            {!! Form::close() !!}
            {!! Form::open(['route' => 'blog.store']) !!}
                <button type="submit" class="create-btn">作成</button>
            {!! Form::close() !!}
        </div>
    </div>
</body>
</html>