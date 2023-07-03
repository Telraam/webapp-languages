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
                            Hi,<br>
                            <br>
                            Je hebt toegang gekregen tot het Telraam netwerk dashboard zodat je jouw netwerk met Telramen die verkeerstellingen doen, kan opvolgen.
                            Maak een account aan om vervolgens naar het dashboard te gaan:<br>
                            <br>
                            <a href="{{ url('/')}}/nl/register?invite-token={{ $token }}">{{ url('/')}}/nl/register?invite-token={{ $token }}</a><br>
                            <br>
                            Eens je bent aangemeld met je account, heb je toegang tot het netwerk dashboard. Open het dashboard en dan kan je op het dropdown
                            menu klikken (linksboven) en daar je netwerk selecteren.<br>
                            <br>
                            Je kan antwoorden op deze mail indien je extra vragen hebt. Je kan ook
                            steeds <a href="mailto:support@telraam.net">ons support team</a> contacteren.<br>
                            <br>
                            Welkom bij het netwerk,<br>
                            {{ $authUser->firstname }} {{ $authUser->lastname }}<br>
                            <br>

                        @elseif  ($language == 'fr')

                            Bonjour,<br>
                            <br>
                            Vous avez reçu un accès au tableau de bord du réseau Telraam pour surveiller votre réseau d’appareils Telraam en effectuant des comptages de trafic.<br>
                            Accédez à votre tableau de bord du réseau avec le lien suivant:<br>
                            <br>
                            <a href="{{ url('/')}}/fr/register?invite-token={{ $token }}">{{ url('/')}}/fr/register?invite-token={{ $token }}</a><br>
                            <br>
                            Une fois que vous êtes connecté avec votre compte, vous pouvez accéder au tableau de bord du réseau. Ouvrez le tableau de bord, puis cliquez
                            sur le menu déroulant (en haut à gauche) et sélectionnez-y votre réseau.<br>
                            <br>
                            Vous pouvez répondre à cet e-mail si vous avez des questions supplémentaires.
                            Vous pouvez également <a href="mailto:support@telraam.net">contacter notre équipe d'assistance</a>  à tout moment.<br>
                            <br>
                            Bienvenue sur le réseau,<br>
                            {{ $authUser->firstname }} {{ $authUser->lastname }}<br>
                            <br>

                        @else
                            Hi ,<br>
                            <br>
                            You are invited to access the Telraam network dashboard so that you can manage your traffic counting network: {{ $network->name }}.
                            Before you can access this, you will need to set up a user account. Click below to sign-up:<br>
                            <br>
                            <a href="{{ url('/')}}/en/register?invite-token={{ $token }}">{{ url('/')}}/en/register?invite-token={{ $token }}</a><br>
                            <br>
                            Once you are logged in to your account, you will have access to the network dashboard. This dashboard
                            access is available by clicking the drop-down (top left) to select your network and access the dashboard.<br>
                            <br>
                            If you have any questions, you can reply to this email. Alternatively,
                            feel free to contact <a href="mailto:support@telraam.net">our support team</a>.<br>
                            <br>
                            Welcome aboard,<br>
                            {{ $authUser->firstname }} {{ $authUser->lastname }}<br>
                            <br>
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
