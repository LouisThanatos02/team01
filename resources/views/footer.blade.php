<hr size="4px" width="100%" color="black"/>
<table class="text-center" align="center" bgcolor="gray">
    <tr>
        <td>
            {!! Form::open(['url'=>'receipts','method'=>'GET']) !!}
            {!! Form::submit('到發票',['style' => 'width:100px;height:40px;','class'=>'bt_1']) !!}<br>
            {!! Form::close() !!}
        </td>
        <td>
            <hr width="1px" size="30%" color="black">
        </td>
        <td>
            {!! Form::open(['url'=>'rewards','method'=>'GET']) !!}
            {!! Form::submit('到獎勵',['style' => 'width:100px;height:40px;','class'=>'bt_1']) !!}<br>
            {!! Form::close() !!}
        </td>
    </tr>
</table>
<hr size="4px" width="30%" color="gray"/>
