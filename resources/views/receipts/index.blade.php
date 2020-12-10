@extends('app')
@section('title','發票資料')
@section('theme','這是預備顯示所有發票資料表單的 view')
@section('body')
<!--<a style="color: deeppink" href="{{route('rewards.index')}}">切換到獎勵的 view</a>-->
<a style="color: gold" href="{{route('receipts.create')}}">新增一筆發票</a>
<table class="text-center" boarder = "1">
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

                @if($receipt->id>0)
                    {!! Form::open(['url'=>'receipts/upOne/'.$receipt->id,'method' => 'patch','disable' => 'disable']) !!}
                @else
                        {!! Form::open(['url'=>'receipts/upOne/'.$receipt->id,'method' => 'patch']) !!}
                @endif
                        {!! Form::submit('↑') !!}


                    @if($receipt->id>0)
                            {!! Form::open(['url'=>'receipts/downOne/'.$receipt->id,'method' => 'patch','disable' => 'disable']) !!}
                    @else
                            {!! Form::open(['url'=>'receipts/downOne/'.$receipt->id,'method' => 'patch']) !!}
                    @endif

                    {!! Form::submit('↓') !!}
                    {!! Form::close() !!}

            </td>
        </tr>
    @endforeach
</table>
@endsection
