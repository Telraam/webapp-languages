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
                        <strong>Je Telraam op <a href="https://telraam.net/nl/location/{{ $segmentId }}/{{ $dateFrom }}/{{ $dateTo }}"> {{ $street }}</a>
                            is een dag offline en stuurt geen data meer door.</strong><br>
                        <br>
                        Dit is een automatisch bericht om je dit te laten weten, zodat je het verkeer in je straat kan blijven monitoren en tellen.<br>
                        <br>
                        Indien je reeds op de hoogte bent van het probleem en het onder controle hebt, hoef je niet te antwoorden op deze mail.
                        Als je toch hulp nodig hebt om je toestel weer aan het tellen te krijgen, dan kan dat:

                        <ul>
                            <li>Heb je een Telraam v1 toestel, volg de stapsgewijze instructies hier:
                                <a href="https://faq-nl.helpspace-docs.io/article/111/mijn-telraam-telt-niet-meer">“Mijn Telraam telt niet meer”</a>
                            </li>
                            <li>Beschik je over een Telraam S2, lees meer hier:
                                <a href="https://faq-nl.helpspace-docs.io/article/207/probleemoplossing-met-de-s2">“Probleemoplossing met S2”</a>
                            </li>
                            <li>
                                Als je verdere hulp nodig hebt, mail ons dan op <a href="mailto:support@telraam.net">support@telraam.net</a>.
                                Laat ons in dit geval weten welke bovenstaande stappen je reeds hebt geprobeerd.
                            </li>
                        </ul>
                        <br>

                        Bedankt om deel uit te maken van de Telraam community.<br>
                        <br><br>
                        Vriendelijke groeten, <br>
                        Team Telraam <br>

                    @elseif ($language == 'FR')
                        Cher(e) {{ $toFirstname }},<br>
                        <br><br>
                        <strong>Votre Telraam à <a href="https://telraam.net/fr/location/{{ $segmentId }}/{{ $dateFrom }}/{{ $dateTo }}">{{ $street }}</a> est hors
                        ligne depuis un jour et n'envoie aucune donnée.</strong><br>
                        <br>
                        Ceci est un message automatique pour vous informer afin que nous puissions continuer à
                            surveiller et à compter le trafic dans votre rue.<br>
                        <br>
                        Si vous êtes déjà au courant du problème, vous n'avez pas besoin de répondre à ce courrier. Si vous avez besoin d'aide pour que votre appareil compte à nouveau, vous pouvez:

                        <ul>
                            <li>Si vous avez un Telraam v1, vous suivez les instructions ici: <a href="https://faq-fr.helpspace-docs.io/article/191/ma-telraam-ne-compte-plus">"Ma
                                    Telraam ne compte plus".</a></li>
                            <li>Avec un Telraam S2, vous trouvez plus d'infos ici: <a href="https://faq-fr.helpspace-docs.io/article/208/resolution-des-problemes-avec-le-s2">"Résolution des problèmes avec le S2".</a></li>
                            <li>Envoyer un courriel à <a href="mailto:support@telraam.net">support@telraam.net</a> si vous avez besoin d'assistance supplémentaire.
                                Dans ce cas, veuillez nous indiquer lesquelles des étapes vous avez déjà essayées.</li>
                        </ul>
                        <br>

                        Merci pour votre participation dans la communauté Telraam.<br>
                            <br><br>
                        Cordialement,<br>
                        L'équipe Telraam<br>


                    @else
                        Dear {{ $toFirstname }},<br>
                        <br><br>
                        <strong>Your Telraam device for <a href="https://telraam.net/en/location/{{ $segmentId }}/{{ $dateFrom }}/{{ $dateTo }}">{{ $street }}</a> has been
                            offline for a day and has not sent any data.</strong>
                        <br>
                        This is an automated alert to let you know so that we can continue to monitor and count the traffic on your street.<br>
                        <br>
                        You may already know about the issue, so there’s no need to reply to this message if you have it in hand (if you are currently travelling for example),
                        but if you do need any support to get your device counting again, you can:
                        <ul>
                            <li>If you have a Telraam v1 device, follow the step by step instructions here:
                                <a href="https://telraam.helpspace-docs.io/article/51/my-telraam-isnt-counting-anymore">“My Telraam isn't counting anymore“</a>
                            </li>
                            <li>If you have a Telraam S2 device, you can read more here:
                                <a href="https://telraam.helpspace-docs.io/article/206/troubleshooting-with-the-s2">“Troubleshooting with the S2“</a>
                            </li>
                            <li>If you need further support, email us at
                                <a href="mailto:support@telraam.net">support@telraam.net</a> letting us know what
                                steps above you have already tried.</li>
                        </ul>
                        <br>

                        Thank you for being part of the Telraam citizen community.<br>
                        <br><br>
                        Kind regards,<br>
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
