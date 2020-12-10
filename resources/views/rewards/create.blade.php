@extends('app')
@section('title','獎勵資料')
@section('theme','新增一筆獎勵資料')
@section('body')


{!! Form::open(['url'=>'rewards/store']) !!}

@include('rewards.form',['buttonText'=>"新增"])

{!! Form::close() !!}
@endsection
