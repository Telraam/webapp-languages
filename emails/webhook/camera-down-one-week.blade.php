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
                        <strong>Je Telraam op <a href="https://telraam.net/nl/location/{{ $segmentId }}/{{ $dateFrom }}/{{ $dateTo }}"> {{ $street }}</a> is
                        al een week offline en we hebben geen teldata meer ontvangen.</strong><br>
                        <br>
                        Dit is een automatisch bericht om je dit te laten weten, zodat je het verkeer in je straat kan blijven monitoren en tellen.<br>
                        <br>
                        Het is belangrijk om volledige tellingen te hebben zodat het beeld van het verkeer in je straat
                        zo nauwkeurig mogelijk is. We willen graag met jou blijven meetellen. Heb je even tijd om dit
                        het probleem met je Telraam op te lossen?<br>
                        <br>

                        We hebben een artikel gepubliceerd met een eenvoudige stapsgewijze instructie om je te helpen
                        je toestel weer aan het tellen te krijgen. Klik op deze link om het te lezen:
                        <a href="https://faq-nl.helpspace-docs.io/article/111/mijn-telraam-telt-niet-meer">
                                    “Mijn Telraam telt niet meer”</a><br>
                        <br>
                        Indien je er nog steeds niet in slaagt om het probleem op te lossen, stuur ons een mail
                        op <a href="mailto:support@telraam.net">support@telraam.net</a> en we zullen ons uiterste best doen om je te helpen.<br>
                        <br>
                        Let op: dit is een geautomatiseerde opvolg e-mail, dus je hoeft dit bericht niet te beantwoorden.<br>
                        <br>
                        Dankjewel om jouw raam te laten meetellen.<br>
                        <br><br>
                        Vriendelijke groeten, <br>
                        Team Telraam <br>

                    @elseif ($language == 'FR')
                        Cher(e) {{ $toFirstname }},<br>
                        <br><br>
                        <strong>Votre Telraam à <a href="https://telraam.net/fr/location/{{ $segmentId }}/{{ $dateFrom }}/{{ $dateTo }}">{{ $street }}</a>
                        est hors ligne depuis une semaine et nous n'avons reçu aucune donnée.</strong><br>
                        <br>
                        Il est important de disposer de comptages complets afin que l'image du trafic dans votre rue soit aussi précise que
                        possible. Nous aimerions continuer à compter avec vous. Avez-vous du temps pour résoudre ce problème?<br>
                        <br>
                        Nous avons publié un article avec des instructions pour vous aider à réactiver votre appareil. Cliquez sur ce lien pour le lire:
                        <a href="https://faq-fr.helpspace-docs.io/article/191/ma-telraam-ne-compte-plus">
                            "Ma Telraam ne compte plus".</a><br>
                        <br>
                        Si vous ne parvenez toujours pas à résoudre le problème, envoyez-nous un courriel à <a href="mailto:support@telraam.net">support@telraam.net</a>
                        et nous ferons de notre mieux pour vous aider.<br>
                        <br>
                        Veuillez noter qu'il s'agit d'un courriel de suivi automatisé, vous n'êtes donc pas obligé de répondre à ce message.<br>
                        <br>
                        Merci de faire en sorte que votre fenêtre compte.<br>
                        <br><br>
                        Cordialement,<br>
                        L'équipe Telraam<br>


                    @else
                        Dear {{ $toFirstname }},<br>
                        <br><br>
                        <strong>Your Telraam on <a href="https://telraam.net/en/location/{{ $segmentId }}/{{ $dateFrom }}/{{ $dateTo }}">{{ $street }}</a>
                        has been offline for a week and we have not received any traffic counts.</strong><br>

                        <br>
                        It’s important to have complete counts so the picture of traffic on your street is as accurate as possible.
                        We would love to keep counting with you. Do you have time to resolve the issue with your Telraam?<br>
                        <br>
                        We have published an article with simple step by step instructions to help you get your device counting again. Click on this link to read it:
                        <a href="https://telraam.helpspace-docs.io/article/51/my-telraam-isnt-counting-anymore">“My Telraam isn't counting anymore“</a><br>
                        <br>
                        If you are still unable to resolve the issue, then please email us: <a href="mailto:support@telraam.net">support@telraam.net</a>
                        and we will do our best to help you.<br>
                        <br>
                        Please note: This is an automated follow-up email, so there’s no need to reply to this message.<br>
                        <br>
                        Thank you for making your window count.<br>
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
