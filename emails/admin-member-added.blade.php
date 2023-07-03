@extends('emails.layouts.app-branded')
@section('content')


<tr>
    <td align="left" valign="top">
        <table border="0" cellpadding="10" cellspacing="0" width="100%" id="emailBody">

            @if ($network->image_logo !== '' && $network->image_logo !== NULL)
                <tr>
                    <td align="center" valign="top">
                          <img src="{{ url('/') }}/uploads/network-small/{{ $network->image_logo }}" style="width:180px !important">
                    </td>
                </tr>
            @endif

            <tr>
                <td align="left" valign="top">
                        @if ($language == 'nl')
                            Hi {{ $user->firstname }},<br>
                            <br>
                            Je hebt toegang gekregen tot het Telraam netwerk dashboard zodat je jouw netwerk met Telramen die verkeerstellingen doen, kan opvolgen.<br>
                            Ga naar jouw netwerk dashboard met de volgende link:<br>
                            <br>
                            <a href="{{ url('/')}}/en/admin/{{ $network->slug }}/dashboard-network">{{ url('/')}}/en/admin/{{ $network->slug }}/dashboard-network</a><br>
                            <br>
                            Deze toegang is beschikbaar door middel van je bestaande user account. Wanneer je ingelogd bent en je dashboard hebt geopend,
                             kan je op het dropdown menu klikken (linksboven) en daar je netwerk selecteren. <br>
                            <br>
                        Je kan antwoorden op deze mail indien je extra vragen hebt. Je kan ook steeds ons <a href="mailto:support@telraam.net">support team</a> contacteren.<br>
                            <br>
                            Welkom bij het netwerk,<br>
                            Team Telraam<br>

                        @elseif  ($language == 'fr')

                            Bonjour {{ $user->firstname }},<br>
                            <br>
                            Vous avez reçu un accès au tableau de bord du réseau Telraam pour surveiller votre réseau d’appareils Telraam en effectuant des comptages de trafic.<br>
                            Accédez à votre tableau de bord du réseau avec le lien suivant:<br>
                            <br>
                            <a href="{{ url('/')}}/en/admin/{{ $network->slug }}/dashboard-network">{{ url('/')}}/en/admin/{{ $network->slug }}/dashboard-network</a><br>
                            <br>
                            Cet accès est disponible via votre compte utilisateur existant. Une fois que vous vous êtes connecté et que vous avez ouvert votre tableau de bord,
                            vous pouvez cliquer sur le menu déroulant (en haut à gauche) et y sélectionner votre réseau.<br>
                            <br>
                        Vous pouvez répondre à cet e-mail si vous avez des questions supplémentaires. Vous pouvez également contacter notre <a href="mailto:support@telraam.net">équipe d'assistance</a> à tout moment.<br>
                            <br>
                            Bienvenue sur le réseau,<br>
                            L’équippe Telraam<br>

                        @else
                            Hi {{ $user->firstname }},<br>
                            <br>
                            You are invited to access the Telraam network dashboard so that you can manage your traffic counting network: {{ $network->name }}.
                            Use the link below to visit your network dashboard:<br>
                            <br>
                            <a href="{{ url('/')}}/en/admin/{{ $network->slug }}/dashboard-network">{{ url('/')}}/en/admin/{{ $network->slug }}/dashboard-network</a><br>
                            <br>
                            This dashboard access is available through your existing user account. Once you are logged in and open the dashboard, you can click the
                            drop-down (top left) to select your network and access the dashboard.<br>
                            <br>
                        If you have any questions, you can reply to this email. Alternatively, feel free to contact our <a href="mailto:support@telraam.net">support team</a>.  <br>
                            <br>
                            Welcome aboard,<br>
                            Team Telraam<br>
                        @endif

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
