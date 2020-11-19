@extends('app')
@section('title','發票資料')
@section('theme','這是預備顯示所有發票資料表單的 view')
@section('body')
<!--<a style="color: deeppink" href="{{route('rewards.index')}}">切換到獎勵的 view</a>-->
<a style="color: gold" href="{{route('receipts.create')}}">新增一筆發票</a>
<table class="text-center">
    <tr>
        <td style="color: crimson">編號</td>
        <td style="color: deepskyblue">期數</td>
        <td style="color: blueviolet">獎項</td>
        <td style="color: steelblue">號碼</td>
        <td style="color: dodgerblue">操作</td>
    </tr>
    @foreach($receipts as $receipt )
        <tr>
            <td>{{$receipt->id}}</td>
            <td>{{substr($receipt->period_name,0,3)}}
            {{substr($receipt->period_name,3)}}</td>
            @foreach($rewards as $reward)
                @if($receipt->a_ID == $reward->id)
                <td>{{$reward->a_name}}</td>
                @endif
            @endforeach
            <td>{{$receipt->number}}</td>
            <td>
                <a style="color: deeppink" href="{{route('receipts.show',['id'=>$receipt->id])}}">顯示</a>
                <a style="color: brown" href="{{route('receipts.edit',['id'=>$receipt->id])}}">編輯</a>
            </td>
        </tr>
    @endforeach
</table>
@endsection
