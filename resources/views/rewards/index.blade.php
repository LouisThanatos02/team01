@extends('app')
@section('title','獎勵資料')
@section('theme','所有獎勵列表')
@section('body')
    <table  align="center" bgcolor="black" width="100%">
        <tr><td>
            <a style="color: darkturquoise" href="{{route('rewards.create')}}">新增一筆獎勵</a>
            </td></tr>
    </table>
<table class="text-center">
    <tr>
        <td style="color: crimson;">編號</td>
        <td style="color: deepskyblue">獎項</td>
        <td style="color: blueviolet">規則</td>
        <td style="color: steelblue">獎金</td>
        <td style="color: dodgerblue">操作</td>
    </tr>
    @foreach($rewards as $reward)
        <tr>
            <td>{{$reward->id}}</td>
            <td>{{$reward->a_name}}</td>
            <td>{{$reward->rule}}</td>
            <td>{{$reward->money}}</td>
            <td>
                {!! Form::open(['url'=>'rewards/delete/'.$reward->id,'method' => 'delete']) !!}
                <a style="color: deeppink" href="{{route('rewards.show',['id'=>$reward->id])}}">顯示</a>
                <a style="color: brown" href="{{route('rewards.edit',['id'=>$reward->id])}}">編輯</a>
                {!! Form::submit('刪除') !!}
                 <!--<a style="color: red" href="{{route('rewards.delete',['id'=>$reward->id])}}">刪除</a>-->
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
</table>
@endsection
