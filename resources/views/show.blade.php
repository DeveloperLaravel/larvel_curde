@extends('layouts.mester')
@section('title')
@endsection
@section('content')
<div class="container">
<div class="row justify-content-around" style="margin-top: 70px">

        <div class="col-4">
            <a class="btn btn-warning" href="{{ route('user.index') }}"> <i class="fa fa-arrow-right " aria-hidden="true"></i></a>
        </div>
        <div class="col-5">
                <h2> عرض الاسم المختار</h2>
        </div>
        <div class="row justify-content-center">
            <div class="col-7 mt-4">
        <td class="td" style="font-size: 2rem">
            <strong class="m-3">الاسم:</strong>
            {{ $user->first_name }}
        </td>
    </div>

</div>
@endsection
