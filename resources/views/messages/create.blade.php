@extends('layouts.app')

@section('content')

    <h1>メッセージ新規作成ページ</h1>
    
    <!--@if (count($errors) > 0)-->
    <!--    <ul>-->
    <!--        @foreach ($errors->all() as $error)-->
    <!--            <li>{{ $error }}</li>-->
    <!--        @endforeach-->
    <!--    </ul>-->
    <!--@endif-->

    {!! Form::model($message, ['route' => 'messages.store']) !!}

        {!! Form::label('title', 'タイトル:') !!}
        {!! Form::text('title') !!}

        {!! Form::label('content', 'メッセージ:') !!}
        {!! Form::text('content') !!}

        {!! Form::submit('投稿') !!}

    {!! Form::close() !!}

@endsection