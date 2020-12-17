@extends('app')
@section('title','發票資料')
@section('theme','新增一筆發票資料')
@section('body')

{!! Form::open(['url'=>'receipts/store']) !!}

@include('receipts.form',['buttonText'=>'新增','select' => null])

{!! Form::close() !!}
@endsection
