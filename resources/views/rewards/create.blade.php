@extends('app')
@section('title','獎勵資料')
@section('theme','這是新增一筆獎勵表單的 view')
@section('body')
<!--{{route('rewards.index')}}">回到獎勵的 view</a>-->
<table class="text-center">
    <tr>
        <td>編號</td>
        <td>獎項</td>
        <td>規則</td>
        <td>獎金</td>
    </tr>
    <tr>
        <td>{{$id}}</td>
        <td>{{$a_name}}</td>
        <td>{{$rule}}</td>
        <td>{{$money}}</td>
    </tr>
</table>
@endsection
