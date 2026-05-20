@extends('emails.layouts.app-branded')
@section('content')

@php
    $faqV1 = match(strtoupper($language)) {
        'NL' => 'https://faq-nl.telraam.net/article/111/mijn-telraam-telt-niet-meer',
        'FR' => 'https://faq-fr.telraam.net/article/191/ma-telraam-ne-compte-plus',
        default => 'https://faq.telraam.net/article/51/my-telraam-isnt-counting-anymore',
    };
    $faqS2 = match(strtoupper($language)) {
        'NL' => 'https://faq-nl.telraam.net/article/207/probleemoplossing-met-de-s2',
        'FR' => 'https://faq-fr.telraam.net/article/208/resolution-des-problemes-avec-le-s2',
        default => 'https://faq.telraam.net/article/206/troubleshooting-with-the-s2',
    };
@endphp

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
                <td align="left" valign="top" style="text-align: left">

                    @if ($language == 'NL')
                        Beste {{ $toFirstname }},<br>
                        <br><br>
                        <strong>Je Telraam op <a href="https://telraam.net/nl/location/{{ $segmentId }}"> {{ $street }}</a>
                            is een dag offline en stuurt geen data meer door.</strong><br>
                        <br>
                        Dit is een automatisch bericht om je dit te laten weten, zodat je het verkeer in je straat kan blijven monitoren en tellen.<br>
                        <br>
                        Indien je reeds op de hoogte bent van het probleem en het onder controle hebt, hoef je niet te antwoorden op deze mail.
                        Als je toch hulp nodig hebt om je toestel weer aan het tellen te krijgen, dan kan dat:

                        <ul>
                            <li>Heb je een Telraam v1 toestel, volg de stapsgewijze instructies hier:
                                <a href=”{{ $faqV1 }}”>”Mijn Telraam telt niet meer”</a>
                            </li>
                            <li>Beschik je over een Telraam S2, lees meer hier:
                                <a href=”{{ $faqS2 }}”>”Probleemoplossing met S2”</a>
                            </li>
                            <li>
                                Als je verdere hulp nodig hebt, mail ons dan op <a href="mailto:support@telraam.net">support@telraam.net</a>.
                                Laat ons in dit geval weten welke bovenstaande stappen je reeds hebt geprobeerd.
                            </li>
                        </ul>
                        Telt je Telraam niet meer omdat het (herhaaldelijk) van het raam valt. Dan raden we je aan om de meegeleverde tape door dubbelzijdige foamtape te vervangen.<br>
                        <br>

                        Bedankt om deel uit te maken van de Telraam community.<br>
                        <br><br>
                        Vriendelijke groeten, <br>
                        Team Telraam <br>

                    @elseif ($language == 'FR')
                        Cher(e) {{ $toFirstname }},<br>
                        <br><br>
                        <strong>Votre Telraam à <a href="https://telraam.net/fr/location/{{ $segmentId }}">{{ $street }}</a> est hors
                        ligne depuis un jour et n'envoie aucune donnée.</strong><br>
                        <br>
                        Ceci est un message automatique pour vous informer afin que nous puissions continuer à
                            surveiller et à compter le trafic dans votre rue.<br>
                        <br>
                        Si vous êtes déjà au courant du problème, vous n'avez pas besoin de répondre à ce courrier. Si vous avez besoin d'aide pour que votre appareil compte à nouveau, vous pouvez:

                        <ul>
                            <li>Si vous avez un Telraam v1, vous suivez les instructions ici: <a href="{{ $faqV1 }}">"Ma
                                    Telraam ne compte plus".</a></li>
                            <li>Avec un Telraam S2, vous trouvez plus d'infos ici: <a href="{{ $faqS2 }}">"Résolution des problèmes avec le S2".</a></li>
                            <li>Envoyer un courriel à <a href="mailto:support@telraam.net">support@telraam.net</a> si vous avez besoin d'assistance supplémentaire.
                                Dans ce cas, veuillez nous indiquer lesquelles des étapes vous avez déjà essayées.</li>
                        </ul>
                         Est-ce que votre Telraam compte plus parce qu'il tombe de la fenêtre (à plusieurs reprises). Dans ce cas, nous vous conseillons de remplacer le scotch fourni par du ruban mousse double face.<br>
                        <br>

                        Merci pour votre participation dans la communauté Telraam.<br>
                            <br><br>
                        Cordialement,<br>
                        L'équipe Telraam<br>


                    @elseif ($language == 'DE')
                        Liebe(r) {{ $toFirstname }},<br>
                        <br><br>
                        <strong>Ihr Telraam-Gerät für <a href="https://telraam.net/en/location/{{ $segmentId }}">{{ $street }}</a> ist seit einem Tag offline und hat keine Daten gesendet.</strong>
                        <br>
                        Dies ist eine automatische Benachrichtigung, damit wir den Verkehr in Ihrer Straße weiterhin überwachen und zählen können.<br>
                        <br>
                        Möglicherweise sind Sie bereits über das Problem informiert, daher müssen Sie diese Nachricht nicht beantworten, wenn Sie es unter Kontrolle haben (z.B. wenn Sie gerade verreist sind),
                        aber wenn Sie Unterstützung benötigen, um Ihr Gerät wieder zum Zählen zu bringen, können Sie:
                        <ul>
                            <li>Wenn Sie ein Telraam v1-Gerät haben, folgen Sie den Schritt-für-Schritt-Anweisungen hier:
                                <a href="{{ $faqV1 }}">"Mein Telraam zählt nicht mehr"</a>
                            </li>
                            <li>Wenn Sie ein Telraam S2-Gerät haben, können Sie hier mehr erfahren:
                                <a href="{{ $faqS2 }}">"Fehlerbehebung mit dem S2"</a>
                            </li>
                            <li>Wenn Sie weitere Unterstützung benötigen, senden Sie uns eine E-Mail an
                                <a href="mailto:support@telraam.net">support@telraam.net</a> und teilen Sie uns mit,
                                welche der oben genannten Schritte Sie bereits versucht haben.</li>
                        </ul>
                        Zählt Ihr Telraam nicht mehr, weil es (wiederholt) vom Fenster fällt? In diesem Fall empfehlen wir, das mitgelieferte Klebeband durch doppelseitiges Schaumstoffklebeband zu ersetzen.<br>
                        <br>

                        Vielen Dank, dass Sie Teil der Telraam-Gemeinschaft sind.<br>
                        <br><br>
                        Mit freundlichen Grüßen,<br>
                        Team Telraam<br>

                    @elseif ($language == 'ES')
                        Estimado/a {{ $toFirstname }},<br>
                        <br><br>
                        <strong>Su dispositivo Telraam para <a href="https://telraam.net/en/location/{{ $segmentId }}">{{ $street }}</a> ha estado
                            offline durante un día y no ha enviado ningún dato.</strong>
                        <br>
                        Esta es una alerta automática para informarle de que podamos continuar monitorizando y contando el tráfico en su calle.<br>
                        <br>
                        Es posible que ya sepa del problema, por lo que no es necesario que responda a este mensaje si lo tiene bajo control (por ejemplo, si está de viaje),
                        pero si necesita ayuda para que su dispositivo vuelva a contar, puede:
                        <ul>
                            <li>Si tiene un dispositivo Telraam v1, siga las instrucciones paso a paso aquí:
                                <a href="{{ $faqV1 }}">"Mi Telraam ya no cuenta"</a>
                            </li>
                            <li>Si tiene un dispositivo Telraam S2, puede leer más aquí:
                                <a href="{{ $faqS2 }}">"Solución de problemas con el S2"</a>
                            </li>
                            <li>Si necesita más ayuda, escríbanos a
                                <a href="mailto:support@telraam.net">support@telraam.net</a> indicando qué
                                pasos de los anteriores ya ha intentado.</li>
                        </ul>
                        ¿Su Telraam ha dejado de contar porque se cae de la ventana (repetidamente)? En ese caso, le recomendamos reemplazar la cinta adhesiva suministrada por cinta de espuma de doble cara.<br>
                        <br>

                        Gracias por ser parte de la comunidad Telraam.<br>
                        <br><br>
                        Atentamente,<br>
                        Team Telraam<br>

                    @else
                        Dear {{ $toFirstname }},<br>
                        <br><br>
                        <strong>Your Telraam device for <a href="https://telraam.net/en/location/{{ $segmentId }}">{{ $street }}</a> has been
                            offline for a day and has not sent any data.</strong>
                        <br>
                        This is an automated alert to let you know so that we can continue to monitor and count the traffic on your street.<br>
                        <br>
                        You may already know about the issue, so there’s no need to reply to this message if you have it in hand (if you are currently travelling for example),
                        but if you do need any support to get your device counting again, you can:
                        <ul>
                            <li>If you have a Telraam v1 device, follow the step by step instructions here:
                                <a href=”{{ $faqV1 }}”>”My Telraam isn't counting anymore”</a>
                            </li>
                            <li>If you have a Telraam S2 device, you can read more here:
                                <a href=”{{ $faqS2 }}”>”Troubleshooting with the S2”</a>
                            </li>
                            <li>If you need further support, email us at
                                <a href="mailto:support@telraam.net">support@telraam.net</a> letting us know what
                                steps above you have already tried.</li>
                        </ul>
                        Does your Telraam no longer count because it falls off the window (repeatedly). If so, we recommend replacing the supplied tape with double-sided foam tape.<br>
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
