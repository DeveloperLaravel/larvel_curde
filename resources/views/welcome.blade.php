@extends('layouts.mester')
@section('title')
@endsection
@section('content')
<div class="container mt-5">
<div class="row justify-content-center">
    <h4 class=" text-center">طريقه الاساسيه التعامل مع الجدوال</h4>

    <div class="col-lg-7 margin-tb">
        <div class="pull-right">
            <a class="btn btn-info" href="{{ route('user.create') }}"> اظافات اسم جديد</a>
        </div>

@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif
    </div>
<table style="margin-top: 70px" class="table table-bordered  text-center">
    <tr>
        <th width="15%">رقم التسلسلي</th>
        <th>الاسم</th>
        <th>عرض</th>
        <th >تعديل</th>
        <th >حذف</th>
    </tr>

    @foreach ($user as $x)
    <tr>
        <td> {{++$i}}</td>
        <td>{{ $x->first_name }}</td>
        <td>
            <a  href="{{ route('user.show',$x->id) }}"><i class="fa fa-eye fa-1x text-success"></i></a>
        </td>
        <td>
            <a class="" href="{{ route('user.edit',$x->id) }}"><i class="fa fa-edit fa-1x text-warning"></i></a>
        </td>
        <td>
            <form action="{{ route('user.destroy',$x->id) }}" method="POST">




                @csrf
                @method('DELETE')
                <button type="submit" style="border: none; background:none"><i class="fa fa-trash text-danger fa-1x"></i>
            </form>
        </td>
    </tr>
    @endforeach
</table>

    </div>
</div>
</div>

@endsection

