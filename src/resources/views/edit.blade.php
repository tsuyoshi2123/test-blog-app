<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">
    <title>edit_view</title>
</head>
<body>
    <div class="header-top">
        <h2 class="header-title">BLOG TOP</h2>
    </div>
    <h2 class="create-title">メッシ投稿編集</h2>
    <div class="create-wrapper">
        <div class="create-box @if($errors->has('name')) has-error @endif">
            <div class="create-box-content">
                <p class="name">名前</p>
                {!! Form::input('text', 'name', null, ['id' => 'create-name', 'form' => 'create-new']) !!}
            </div>
            @if($errors->has('name'))
            @foreach($errors->get('name') as $error)
            <p class="error-message">{{ $error }}</p>
            @endforeach
            @endif
        </div>
        <div class="create-box @if($errors->has('food')) has-error @endif">
            <div class="create-box-content">
                <p class="food">食べたご飯</p>
                {!! Form::input('text', 'food', null, ['id' => 'create-name', 'form' => 'create-new']) !!}
            </div>
            @if($errors->has('food'))
            @foreach($errors->get('food') as $error)
            <p class="error-message">{{ $error }}</p>
            @endforeach
            @endif
        </div>
        <div class="create-box @if($errors->has('comment')) has-error @endif">
            <div class="create-box-content">
                <p class="comment">コメント</p>
                {!! Form::input('text', 'comment', null, ['id' => 'create-name', 'form' => 'create-new']) !!}
            </div>
            @if($errors->has('comment'))
            @foreach($errors->get('comment') as $error)
            <p class="error-message">{{ $error }}</p>
            @endforeach
            @endif
        </div>
        <div class="create-box @if($errors->has('time')) has-error @endif">
            <div class="create-box-content">
                <p class="time">日付</p>
                {!! Form::date('day', Carbon::now(), ['id'=>'create-time', 'name' => 'time', 'form' => 'create-new']) !!}
            </div>
            @if($errors->has('time'))
            @foreach($errors->get('time') as $error)
            <p class="error-message">{{ $error }}</p>
            @endforeach
            @endif
        </div>
        <div class="btn-box">
            {!! Form::open(['route' => 'blog.index' , 'method' => 'GET']) !!}
                @csrf
                {!! Form::submit('戻る', ['class' => 'index-btn']) !!}
            {!! Form::close() !!}
            {!! Form::open(['route' => ['blog.update', $blog->id], 'method' => 'PUT', 'id' => 'create-new']) !!}
                {!! Form::submit('更新', ['class' => 'edit-btn']) !!}
            {!! Form::close() !!}
        </div>
    </div>
</body>
</html>