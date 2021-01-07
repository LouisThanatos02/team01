@if($errors->any())
    <ul>
        @foreach($errors->all() as $error)
            <table width="100%" bgcolor="#cd5c5c" style="color: midnightblue">
                <tr>
                    <td>
                        <li>{{$error}}</li>
                    </td>
                </tr>
            </table>
        @endforeach
    </ul>

@endif
