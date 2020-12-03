@extends('app')
@section('title','獎勵資料')
@section('theme','這是顯示一筆獎勵表單的 view')
@section('body')
    <!--<a href="{{route('rewards.index')}}">回到獎勵的 view</a>-->
    編號 : {{$id}}<br>
    獎項 : {{$a_name}}<br>
    規則 : {{$rule}}<br>
    獎金 : {{$money}}<br>

@endsection
