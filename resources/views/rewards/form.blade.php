<div>
    {!! Form::Label('a_name','獎項 : ') !!}
    {!! Form::text('a_name',null) !!}
</div>
<div>
    {!! Form::Label('rule','規則 : ') !!}
    {!! Form::text('rule',null) !!}
</div>
<div>
    {!! Form::Label('money','獎金 : ') !!}
    {!! Form::text('money',null) !!}
</div>
<div>
    <br>{!! Form::submit($buttonText) !!}
</div>



