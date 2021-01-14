@extends('app')
@section('title','獎勵資料')
@section('theme','這是顯示一筆獎勵表單的 view')
@section('body')

    編號 : {{$reward->id}}<br>
    獎項 : {{$reward->a_name}}<br>
    規則 : {{$reward->rule}}<br>
    獎金 : {{$reward->money}}<br>
    <table class="text-center"  border="1" >
        <tr>
            <td style="color: crimson">編號</td>
            <td style="color: deepskyblue">期數</td>
            <td style="color: steelblue">號碼</td>
        </tr>
        @foreach($receipts as $receipt)
            <tr>
                <td>{{$receipt->id}}</td>
                <td>{{substr($receipt->period_name,0,3)}}｜{{substr($receipt->period_name,3)}}</td>
                <td>{{$receipt->number}}</td>
            </tr>
    @endforeach
    </table>
@endsection
