@extends('common')
@section('content')
        <h2 class="create-title">メッシ投稿</h2>
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
            {!! Form::open(['route' => 'blog.store', "id" => "create-new"]) !!}
                {!! Form::submit('作成', ['class' => 'create-btn']) !!}
            {!! Form::close() !!}
        </div>
    </div>
@endsection