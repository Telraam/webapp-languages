@extends('emails.layouts.app-branded')
@section('content')



    <tr>
        <td align="left" valign="top">
            <table border="0" cellpadding="10" cellspacing="0" width="100%" id="emailBody">

                <tr>
                    <td align="left" valign="top">
                        {!! $body !!}
                    </td>
                </tr>

            </table>
        </td>
    </tr>

@endsection
