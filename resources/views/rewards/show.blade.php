@extends('app')
@section('title','獎勵資料')
@section('theme','這是顯示一筆獎勵表單的 view')
@section('body')

    編號 : {{$reward->id}}<br>
    獎項 : {{$reward->a_name}}<br>
    規則 : {{$reward->rule}}<br>
    獎金 : {{$reward->money}}<br>

@endsection
