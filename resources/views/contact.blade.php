@extends('layouts.app')
@section('title-block') contact @endsection
@section('content')
<h1>contact</h1>

{{-- @if($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
    </ul>
</div>
@endif --}}

<form action="/contact/submit" method="POST">
{{-- @csrf --}}
{{@csrf_field()}}
    <div class="form-group">
        <label for="name" >Введите имя: </label>
        <input type="text" name="name" placeholder="введите имя" id="name" class="form-control">
    </div>
    <div class="form-group">
        <label for="email" >Email: </label>
        <input type="text" name="email" placeholder="введите email" id="email" class="form-control">
    </div>    <div class="form-group">
        <label for="subject" >Тема сообщения: </label>
        <input type="text" name="subject" placeholder="введите тему сообщения" id="subject" class="form-control">
    </div>    <div class="form-group">
        <label for="message" >Сообщение: </label>
        <textarea name="message" id="message" class="form-control" placeholder="Введите сообщение"></textarea>
    </div>

<button type="submit" class="btn btn-success">Отправить</button>
</form>





@endsection
