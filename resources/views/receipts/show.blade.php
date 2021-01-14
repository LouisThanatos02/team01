@extends('app')
@section('title','發票資料')
@section('theme','顯示單筆發票資料')
@section('body')
<!--<a href="{{route('receipts.index')}}">回到發票的 view</a>-->
{{--@foreach($receipts as $receipt)--}}
編號 : {{$receipts->id}}<br>
期數 : {{$receipts->period_name}}<br>
獎項 : {{$receipts->reward->a_name}}<br>
號碼 : {{$receipts->number}}<br>
{{--@endforeach--}}
@endsection
