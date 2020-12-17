@extends('app')
@section('title','獎勵資料')
@section('theme','這是修改一筆獎勵表單的 view')
@section('body')
<!--<a href="{{route('rewards.index')}}">回到獎勵的 view</a>-->
@include('message.error_list')
編號 : {{$reward->id}}
{!! Form::model($reward,['method' => 'patch','action'=>['\App\Http\Controllers\RewardsController@update',$reward->id]]) !!}

@include('rewards.form',['buttonText'=>"修改"])

{!! Form::close() !!}
@endsection
