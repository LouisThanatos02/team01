<table align="center">
    <tr>
        <td>
            <table align="left" width="100%">
                <tr>
                    <td>
                        {!! Form::Label('p_name','期數 : ') !!}
                        {!! Form::text('p_name',null) !!}
                    </td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td>
            <table align="left" >
                <tr >
                    <td>
                        {!! Form::Label('a_id','獎項 : ') !!}
                    </td>
                    <td>
                        {!! Form::select('a_id',$reward,$select,) !!}
                    </td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td>
            <table align="left" width="100%">
                <tr>
                    <td>
                    {!! Form::Label('number','號碼 : ') !!}
                    {!! Form::text('number',null) !!}
                    </td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td>
            {!! Form::submit($buttonText) !!}
        </td>
    </tr>
</table>




