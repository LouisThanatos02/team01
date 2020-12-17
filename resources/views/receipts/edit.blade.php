@extends('app')
@section('title','發票資料')
@section('theme','修改一筆發票資料')
@section('body')
    @foreach($receipt as $receipt)
    編號 : {{$receipt->id}}
{!! Form::model($receipt,['method' => 'patch','action'=>['\App\Http\Controllers\ReceiptsController@update',$receipt->id]]) !!}
    @include('receipts.form',['buttonText'=>'修改','select' => $receipt->a_ID ])
{!! Form::close() !!}
    @endforeach

@endsection
