@extends('emails.layouts.app-branded')
@section('content')

<tr>
    <td align="left" valign="top">
        <table border="0" cellpadding="20" cellspacing="0" width="100%" id="emailBody">

            @if ($network->image_logo !== '' && $network->image_logo !== NULL)
                <tr>
                    <td align="center" valign="top">
                        <img src="{!! url('/')!!}/uploads/network-small/{{ $network->image_logo }}" style="width:180px !important">
                    </td>
                </tr>
            @endif

            <tr>
                <td align="left" valign="top">

                    {!! __('email-outboard.addressing') !!},<br>
                    <br>
                    {!! __('email-outboard.body-1') !!}
                    {!! __('email-outboard.body-2a') !!} {{ $mac }}
                    {!! __('email-outboard.body-2b') !!} {{ $user->firstname }}  {{ $user->lastname }}. <br>
                    <br>
                    {!! __('email-outboard.body-3') !!}<br>
                    <div class="text-center">
                        <a href="{{ url('/') }}/{{ $locale }}/camera-outage-backing/{{ $user->token }}" class="button big" style="background: #1B8C63" >
                            {!! __('email-outboard.button') !!}
                        </a>
                    </div>

                    <br><br>
                    {!! __('email-outboard.body-4') !!} <a href="{{ $network->default_email_address }}">{{ $network->default_email_address }}</a><br>
                    <br>
                    {!! __('email-outboard.body-5') !!}<br>
                    <br>

                </td>
            </tr>

            @if ($network->name !== '' && $network->name !== NULL && $network->id !== 7)
                <tr><td>&nbsp;</td></tr>
                <tr style="text-align: center;">
                    <td style="margin-top: 5px; border-top: 1px solid #CCC; font-size: 12px; text-align: center; text-align: center;">{{ $network->name }}</td>
                </tr>
            @endif

        </table>
    </td>
</tr>
@endsection
