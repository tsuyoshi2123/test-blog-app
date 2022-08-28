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
    <h2 class="create-title">メッシ投稿</h2>
    <div class="create-wrapper">
        <div class="create-box">
            <p class="name">名前</p>
            {!! Form::input('text', 'name', null, ['id' => 'create-name', 'form' => 'create-new']) !!}
        </div>
        <div class="create-box">
            <p class="eate">食べたご飯</p>
            {!! Form::input('text', 'food', null, ['id' => 'create-eate', 'form' => 'create-new']) !!}
        </div>
        <div class="create-box">
            <p class="comment">コメント</p>
            {!! Form::input('text', 'comment', null, ['id' => 'create-comment', 'form' => 'create-new']) !!}
        </div>
        <div class="create-box">
            <p class="time">日付</p>
            {!! Form::date('day', Carbon::now(), ['id'=>'create-time', 'name' => 'time', 'form' => 'create-new']) !!}
        </div>
        <div class="btn-box">
            {!! Form::open(['route' => 'blog.index' , 'method' => 'GET']) !!}
                @csrf
                {!! Form::submit('戻る', ['class' => 'index-btn']) !!}
            {!! Form::close() !!}
            {!! Form::open(['route' => 'blog.store', "id" => "create-new"]) !!}
                {!! Form::submit('作成', ['class' => 'create-btn']) !!}
            {!! Form::close() !!}
        </div>
    </div>
</body>
</html>