<div>
    {!! Form::Label('p_name','期數 : ') !!}
    {!! Form::text('p_name',null) !!}
</div>
<div>
    {!! Form::Label('a_id','獎項 : ') !!}
    {!! Form::select('a_id',$reward,$select) !!}
</div>
<div>
    {!! Form::Label('number','號碼 : ') !!}
    {!! Form::text('number',null) !!}
</div>
<div>
    <br>{!! Form::submit($buttonText) !!}
</div>




