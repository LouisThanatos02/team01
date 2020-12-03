@extends('app')
@section('title','獎勵資料')
@section('theme','這是修改一筆獎勵表單的 view')
@section('body')
<!--<a href="{{route('rewards.index')}}">回到獎勵的 view</a>-->
編號 : {{$id}}
{!! Form::open(['url'=>'rewards/update/'.$id,'method' => 'patch']) !!}

{!! Form::Label('name','獎項 : ') !!}
{!! Form::text('name',$a_name) !!}<br>
{!! Form::Label('rule','規則 : ') !!}
{!! Form::text('rule',$rule) !!}<br>
{!! Form::Label('money','獎金 : ') !!}
{!! Form::text('money',$money) !!}<br><br>
{!! Form::submit('修改') !!}<br>

{!! Form::close() !!}
@endsection
