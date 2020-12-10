@extends('app')
@section('title','發票資料')
@section('theme','新增一筆發票資料')
@section('body')
<!--<a href="{{route('receipts.index')}}">回到發票的 view</a>-->
{!! Form::open(['url'=>'receipts/store']) !!}

{!! Form::Label('p_name','期數 : ') !!}
{!! Form::text('p_name',null) !!}<br>
{!! Form::Label('a_id','獎項 : ') !!}
{!! Form::select('a_id',$reward) !!}<br>
{!! Form::Label('number','號碼 : ') !!}
{!! Form::text('number',null) !!}<br><br>
{!! Form::submit('新增') !!}<br>

{!! Form::close() !!}
@endsection
