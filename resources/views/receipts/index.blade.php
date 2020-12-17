@extends('app')
@section('title','發票資料')
@section('theme','所有發票資料')
@section('body')
<a style="color: gold" href="{{route('receipts.create')}}">新增一筆發票</a>
{!! Form::open(['url'=>'receipts/Search','method' => 'POST']) !!}
{!! Form::Label('p_name','期數 : ') !!}
{!! Form::select('p_name',$p_name,$selectP) !!}
<br/>
{!! Form::Label('a_name','獎項 : ') !!}
{!! Form::select('a_name',$a_name,$selectAid) !!}
{!! Form::submit('查詢') !!}
{!! Form::close() !!}
<table class="text-center"  border="1" >
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
            <td>{{substr($receipt->p_name,0,3)}}｜{{substr($receipt->p_name,3)}}</td>
            <td>{{$receipt->a_name}}</td>
            <td>{{$receipt->number}}</td>

            <td>
                {!! Form::open(['url'=>'receipts/delete/'.$receipt->id,'method' => 'delete']) !!}
                <a style="color: deeppink" href="{{route('receipts.show',['id'=>$receipt->id])}}">顯示</a>
                <a style="color: brown" href="{{route('receipts.edit',['id'=>$receipt->id])}}">編輯</a>
                {!! Form::submit('刪除') !!}
                {!! Form::close() !!}
            </td>
            <!--<td>
                {!! Form::open(['url'=>'receipts/upOne/'.$receipt->id,'method' => 'patch']) !!}
                @if($receipt->id==0)
                    {!! Form::submit('↑',['disabled'=>'disabled'])!!}
                @else
                    {!! Form::submit('↑') !!}
                @endif
                    {!! Form::close() !!}

                {!! Form::open(['url'=>'receipts/downOne/'.$receipt->id,'method' => 'patch']) !!}
                @if($receipt->id == $lestID)
                    {!! Form::submit('↓',['disabled'=>'disabled']) !!}
                @else
                    {!! Form::submit('↓') !!}
                @endif
                    {!! Form::close() !!}
            </td>-->
        </tr>
    @endforeach

</table>
@endsection
