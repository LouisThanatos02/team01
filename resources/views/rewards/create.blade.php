@extends('app')
@section('title','獎勵資料')
@section('theme','新增一筆獎勵資料')
@section('body')
<!--{{route('rewards.index')}}">回到獎勵的 view</a>-->

{!! Form::open(['url'=>'rewards/store']) !!}

{!! Form::Label('name','獎項 : ') !!}
{!! Form::text('name',null) !!}<br>
{!! Form::Label('rule','規則 : ') !!}
{!! Form::text('rule',null) !!}<br>
{!! Form::Label('money','獎金 : ') !!}
{!! Form::text('money',null) !!}<br><br>
{!! Form::submit('新增') !!}<br>

{!! Form::close() !!}
@endsection
