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

                    @if($user->firstname)
                        {!! __('email-network-credits-low.addressing') !!} {{ $user->firstname }},
                    @endif
                    <br><br>
                    {!! __('email-network-credits-low.body') !!}
                    <br>

                    {!! __('email-network-credits-low.body-network-manager-is') !!}
                    <a href="mailto:{{ $network->telraamManager->email }}">
                        {{ $network->telraamManager->firstname }}
                        {{ $network->telraamManager->lastname }}
                    </a>.
                    {!! __('email-network-credits-low.body-credits-are-at') !!}
                        <a href="{{ url('/') }}/en/admin/{{ $network->slug }}/network-config/edit">{{ $network->credits_left }}</a>
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
