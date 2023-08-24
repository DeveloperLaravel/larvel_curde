@extends('layouts.mester')
@section('title')
@endsection
@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-lg-7 margin-tb">
            <div class="pull-left">
            <h2>تعديل اسم </h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-warning" href="{{ route('user.index') }}"> <i class="fa fa-arrow-right"></i></a>
        </div>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('user.update',$user->id) }}" method="POST">
    @csrf
    @method('PUT')

     <div class="row mt-5">
            <div class="form-group">
                <strong>الاسم:</strong>
                <input type="text" name="first_name" value="{{ $user->first_name }}" class="form-control" placeholder="Name">
        <div class="row mt-3">
            <div class="col-12">
          <button type="submit" class="btn btn-primary form-control">حفط</button>
        </div>
    </div>

</form>
@endsection
