@extends('layouts.app')
@section('title-block') Обновление записи @endsection
@section('content')
<h1>Обновление записи</h1>


<form action="{{route('contact-update-submit',$data->id)}}" method="POST">
{{-- @csrf --}}
{{@csrf_field()}}
    <div class="form-group">
        <label for="name" >Введите имя: </label>
    <input type="text" name="name" value="{{$data->name}}" placeholder="введите имя" id="name" class="form-control">
    </div>
    <div class="form-group">
        <label for="email" >Email: </label>
        <input type="text" name="email" value="{{$data->email}}" placeholder="введите email" id="email" class="form-control">
    </div>    <div class="form-group">
        <label for="subject" >Тема сообщения: </label>
        <input type="text" name="subject" value="{{$data->subject}}" placeholder="введите тему сообщения" id="subject" class="form-control">
    </div>    <div class="form-group">
        <label for="message" >Сообщение: </label>
        <textarea name="message" id="message"  class="form-control" placeholder="Введите сообщение">{{$data->message}}</textarea>
    </div>

<button type="submit" class="btn btn-success">Обновить</button>
</form>





@endsection
