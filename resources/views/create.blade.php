@extends('layouts.mester')
@section('title')
@endsection
@section('content')
<div class="container">
<div class="row justify-content-center" style="margin-top: 70px">
    <div class="col-lg-7 margin-tb">
        <div class="pull-left">
            <h2 c>اظافات اسم جديد</h2>
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
<div class="row mt-5">
    <div class="col-12">
<form action="{{ route('user.store') }}" method="POST">
    @csrf


            <div class="form-group">
                <strong>الاسم:</strong>
                <input type="text" name="first_name" class="form-control" placeholder="Name">
            </div>
        </div>
</div>
        <div class="row mt-3">
            <div class="col-12">
                <button type="submit" class="btn btn-primary form-control">حفط</button>
        </div>
    </div>

</form>
@endsection
