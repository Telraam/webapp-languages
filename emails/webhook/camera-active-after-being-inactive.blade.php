@extends('emails.layouts.app-branded')
@section('content')

<tr>
    <td align="left" valign="top">
        <table border="0" cellpadding="20" cellspacing="0" width="100%" id="emailBody">

            @if ($network->image_logo !== '' && $network->image_logo !== NULL)
                <tr>
                    <td align="center" valign="top">
                        <img src="{{ url('/') }}/uploads/network-small/{{ $network->image_logo }}" style="width:180px !important">
                    </td>
                </tr>
            @endif

            <tr>
                <td align="left" valign="top">

                    @if ($language == 'NL')
                        Beste {{ $toFirstname }},<br>
                        <br><br>
                        <strong>Je Telraam stuurt weer teldata door en deze zullen dadelijk weer te zien zijn in
                        <a href="https://telraam.net/nl/location/{{ $segmentId }}/{{ $dateFrom }}/{{ $dateTo }}"> je dashboard</a></strong>.<br>
                        <br>
                        Je kreeg recent een bericht van ons met de melding dat er een probleem was met (de verbinding van) je toestel.
                        We zijn blij om mee te delen dat dit probleem opgelost lijkt.<br>
                        <br>
                        Indien je zelf actie hebt ondernomen, is dit een bevestiging dat het succesvol was. Het kan ook zijn dat het
                        probleem zich vanzelf heeft opgelost en dan is er geen verdere actie nodig van jou.<br>
                        <br>
                        Indien dit regelmatig gebeurt, laat ons iets weten zodat we kunnen kijken of er structurele oplossingen nodig zijn.<br>
                        <br>
                        Nogmaals bedankt voor je deelname en inzet.<br>
                        <br><br>
                        Het allerbeste en veel telplezier! <br>
                        Team Telraam <br>

                    @elseif ($language == 'FR')
                        Cher(e) {{ $toFirstname }},<br>
                        <br><br>
                        <strong>Votre Telraam nous envoie des données de comptage et celles-ci seront bientôt disponibles
                        <a href="https://telraam.net/fr/location/{{ $segmentId }}/{{ $dateFrom }}/{{ $dateTo }}"> sur votre tableau de bord</a></strong>.<br>
                        <br>
                        Nous vous avons récemment contacté pour vous informer qu'il y avait un problème avec la connexion de votre appareil.
                        Nous sommes très heureux de vous informer que ce problème semble être résolu.<br>
                        <br>
                        Si vous avez pris des mesures pour l’arregler, nous voulions confirmer que cela a réussi. Si le problème
                        s'est résolu automatiquement après une brève coupure, vous n'avez pas besoin d’agir pour l'instant.<br>
                        <br>
                        Si cela se produit régulièrement, veuillez nous contacter afin que nous puissions vous aider avec des
                        mesures que vous pourriez prendre.<br>
                        <br><br>
                        Merci pour votre participation et vos efforts,<br>
                        L'équipe Telraam<br>


                    @else
                        Dear {{ $toFirstname }},<br>
                        <br><br>
                        <strong>Your Telraam device is sending traffic count data again and this will shortly be available on your
                        <a href="https://telraam.net/en/location/{{ $segmentId }}/{{ $dateFrom }}/{{ $dateTo }}">dashboard</a> </strong>. <br>
                        <br>
                        We recently contacted to let you know that there appeared to be an issue with your device’s connection,
                        and we’re very happy to let you know that this appears to be resolved.<br>
                        <br>
                        If you took action, we wanted to confirm that this was successful. If it resolved itself
                        automatically after a brief outage, then there’s no need for further action from you at this time.<br>
                        <br>
                        If this should happen regularly, please get in touch with us so we can talk you through any steps you
                        might be able to take.<br>
                        <br>
                        Thank you again for your participation and your effort,<br>
                        <br><br>
                        All the very best and happy counting!<br>
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
