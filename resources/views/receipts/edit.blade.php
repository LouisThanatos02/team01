@extends('app')
@section('title','發票資料')
@section('theme','這是修改一筆發票資料表單的 view')
@section('body')
<!--<a href="{{route('receipts.index')}}">回到發票的 view</a>-->
編號 : {{$receipt->id}}
{!! Form::open(['url'=>'receipts/update/'.$receipt->id,'method' => 'patch']) !!}
{!! Form::Label('p_name','期數 : ') !!}
{!! Form::text('p_name',$receipt->period_name) !!}<br>
{!! Form::Label('a_id','獎項 : ') !!}
{!! Form::select('a_id',$reward,['value'=>$receipt->a_ID]) !!}<br>
{!! Form::Label('number','號碼 : ') !!}
{!! Form::text('number',$receipt->number) !!}<br><br>
{!! Form::submit('修改') !!}
{!! Form::close() !!}

@endsection
