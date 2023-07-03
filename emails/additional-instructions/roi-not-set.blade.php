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


                    {!! __('email-roi.addressing') !!} {{ $user->firstname }},<br>
                    <br>
                    {!! __('email-roi.body') !!}
                    <br><br>
                    <div class="text-center">
                        <a href="https://telraam.net/{{ $locale }}/admin/{!! $network->slug!!}/camera-images/roi" class="button big">
                            {!! __('email-roi.button') !!}
                        </a>
                    </div>

                    <br><br>
                    {!! __('email-roi.body-2') !!}
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
