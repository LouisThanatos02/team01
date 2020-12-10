@extends('app')
@section('title','發票資料')
@section('theme','顯示單筆發票資料')
@section('body')
<!--<a href="{{route('receipts.index')}}">回到發票的 view</a>-->
@foreach($receipt as $receipt)
編號 : {{$receipt->id}}<br>
期數 : {{$receipt->p_name}}<br>
獎項 : {{$receipt->a_name}}<br>
號碼 : {{$receipt->number}}<br>
@endforeach
@endsection
