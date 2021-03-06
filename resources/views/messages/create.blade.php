@extends('layouts.app')

@section('content')
    <h1>メッセージ新規作成ページ</h1>
    
    {!! Form::model($message, ['route' => 'messages.store']) !!}

        {!! Form::label('title', 'タイトル:') !!}
        {!! Form::text('title') !!}
        {!! Form::label('content', 'メッセージ:') !!}
        {!! Form::text('content') !!}
        {!! Form::label('status', 'ステータス:') !!}
        {!! Form::text('status') !!}
        
        {!! Form::submit('投稿') !!}

    {!! Form::close() !!}
@endsection