@extends('emails.layouts.app-branded')
@section('content')

<tr>
    <td align="left" valign="top">
        <table border="0" cellpadding="20" cellspacing="0" width="100%" id="emailBody">
            <tr><td><h2>{{ $network->name }}</h2></td></tr>
            <tr>
                <td align="left" valign="top" style="text-align: left">
                    @include('admin.dashboard-network.timeline-users-candidates-mail')
                </td>
            </tr>
        </table>
    </td>
</tr>
@endsection
