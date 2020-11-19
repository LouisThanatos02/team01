@extends('app')
@section('title','發票資料')
@section('theme','這是修改一筆發票資料表單的 view')
@section('body')
<!--<a href="{{route('receipts.index')}}">回到發票的 view</a>-->
<table class="text-center">
    <tr>
        <td>編號</td>
        <td>期數</td>
        <td>獎項</td>
        <td>號碼</td>
    </tr>
    <tr>
        <td>{{$id}}</td>
        <td>{{$period_name}}</td>
        <td>{{$a_ID}}</td>
        <td>{{$number}}</td>
    </tr>
</table>
@endsection
