<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">
    <title>index_view</title>
</head>
<body>
    <div class="header-top">
        <h2 class="header-title">BLOG APP</h2>
        <a href="blog/create" class="header-eate">記録作成</a>
    </div>

    <div class="index-wrapper">
        <h3 class="index-title">飯記録</h3>
        <div class="index-content">
            <div class="index-content-columns">
                <p>ID</p>
                <p>名前</p>
                <p>食べたご飯</p>
                <p>コメント</p>
                <p>日付</p>
            </div>
            @foreach ($hoge as $item)
                <div class="index-column-values">
                    <p class="index-column-values-id">{{ $item['id'] }}</p>
                    <p class="index-column-values-name">{{ $item['name'] }}</p>
                    <p class="index-column-values-food">{{ $item['food'] }}</p>
                    <p class="index-column-values-comment">{{ $item['comment'] }}</p>
                    <p class="index-column-values-time">{{ $item['time'] }}</p>
                    <a class="index-column-values-edit" href="{{ route('blog.edit', $item['id']) }}">編集</a>
                    {!! Form::open(['route' => ['blog.destroy', $item['id']], 'method' => 'DELETE', 'class' => 'delete']) !!}
                        {!! Form::button('削除', ['type' => 'submit', 'class' => 'delete-btn']) !!}
                    {!! Form::close() !!}
                </div>
            @endforeach
        </div>
    </div>
</body>
</html>