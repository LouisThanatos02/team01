@extends('app')
@section('title','發票資料')
@section('theme','修改一筆發票資料')
@section('body')
<!--<a href="{{route('receipts.index')}}">回到發票的 view</a>-->
編號 : {{$receipt->id}}
{!! Form::model($receipt,['method' => 'patch','action'=>['\App\Http\Controllers\ReceiptsController@update',$receipt->id]]) !!}
    @include('receipts.form',['buttonText'=>'修改',])
{!! Form::close() !!}

@endsection
