@extends('emails.layouts.app-branded')
@section('content')

<tr>
    <td align="left" valign="top">
        <table border="0" cellpadding="20" cellspacing="0" width="100%" id="emailBody">

            <tr>
                <td align="left" valign="top">


                    {!! __('email-after-stripe-order.addressing') !!} {{ $client->firstname }},<br>
                    <br>
                    {!! __('email-after-stripe-order.body') !!}

                    <br>

                </td>
            </tr>


        </table>
    </td>
</tr>
@endsection
