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
                            <strong>Je Telraam is gestopt met het tellen van verkeer op <a href="https://telraam.net/nl/location/{{ $segmentId }}"> {{ $street }}</a></strong>.<br>
                            <br>
                            We willen je niet overladen met waarschuwingen, dus dit de <strong>laatste automatische melding</strong> met betrekking tot uw Telraam
                            toestel dat offline is.<br>
                            <br>
                            We willen je graag helpen om je toestel weer actief te maken.<br>

                            <br>
                            <h4>Meer hulp nodig met uw toestel?</h4>
                           We delen hier de artikels die je kan gebruiken om je toestel weer actief te krijgen:
                            <li>Met een Telraam v1, klik op deze link om het te lezen:
                            <a href=”{{ $faqV1 }}”>”Mijn Telraam telt niet meer”</a>
                            </li>
                            <li>Beschik je over een Telraam S2, lees meer hier:
                                <a href=”{{ $faqS2 }}”>”Probleemoplossing met S2”</a>
                            </li>
                            </ul>
                            Telt je Telraam niet meer omdat het (herhaaldelijk) van het raam valt. Dan raden we je aan om de meegeleverde tape door dubbelzijdige foamtape te vervangen.<br>
                            <br>
                            <br>
                            Als dit je probleem niet heeft opgelost, mag je ons zeker een bericht sturen zodat we je kunnen helpen. Stuur ons in dit geval een
                            mail naar <a href="mailto:support@telraam.net">support@telraam.net</a> en we zullen je zo snel mogelijk advies geven.<br>
                            <br>

                            <h4>Stoppen met tellen?</h4>
                            De community van Telraam-eigenaren groeit voortdurend, maar we begrijpen dat omstandigheden veranderen en dat
                            niet iedereen die zich aanmeldt, kan blijven tellen.<br>
                            <br>

                            Als je jouw locatie op inactief wilt zetten en onze mails niet meer wilt ontvangen, laat het ons dan weten door
                            <a href="{{ url('/') }}/nl/camera-outage-backing/{{ $userToken }}">dit korte formulier</a> in te vullen.<br>
                            <br>
                            Als we niets van je horen, kan het zijn dat we in bepaalde situaties toch nog rechtstreeks contact met je
                            opnemen om ervoor te zorgen dat we de juiste informatie over jou en je Telraam hebben. We vinden
                            je privacy belangrijk alsook de integriteit van de verkeersprojecten waar we deel van uitmaken, dus we
                            willen er zeker van zijn dat we de beste actie ondernemen voor alle betrokkenen.</a><br>
                            <br>

                            <h4>Dankjewel!</h4>
                            We hopen dat we op je kunnen blijven rekenen bij het verzamelen van de verkeersdata van je straat,
                            maar als je toch besloten hebt om te stoppen met tellen, willen we je hartelijk bedanken voor je betrokkenheid
                            en wensen we je het allerbeste toe.<br>

                            <br><br>
                            Hartelijke groeten, <br>
                            Team Telraam <br>

                        @elseif ($language == 'FR')
                            Cher(e) {{ $toFirstname }},<br>
                            <br><br>
                            <strong>Votre Telraam a cessé de compter le trafic à <a href="https://telraam.net/fr/location/{{ $segmentId }}">{{ $street }}</a>.</strong><br>
                            <br>
                            Nous ne voulons pas vous importuner avec des nombreuses alertes.
                            Ceci est <strong>la dernière alerte automatique</strong> concernant votre dispositif étant hors ligne.<br>
                            <br>
                            Nous aimerions vraiment vous aider à résoudre aucun problème en réactivant votre appareil ou en mettant à jour le profil
                            de votre compte.<br>
                            <br>

                            <h4>Avez-vous besoin d'aide supplémentaire?</h4>

                            Nous vous avons déjà envoyé des liens vers des conseils pour remettre votre appareil en service.
                            Pour votre information, voici le liens:
                            <ul>
                            <li>Si vous avez un Telraam v1, vous suivez les instructions ici: <a href="{{ $faqV1 }}">"Ma
                                    Telraam ne compte plus".</a>
                            </li>
                            <li>Avec un Telraam S2, vous trouvez plus d'infos ici: <a href="{{ $faqS2 }}">"Résolution des problèmes avec le S2".</a><
                            </li>
                            </ul>
                            Est-ce que votre Telraam compte plus parce qu'il tombe de la fenêtre (à plusieurs reprises). Dans ce cas, nous vous conseillons de remplacer le scotch fourni par du ruban mousse double face.<br>
                            <br>
                            Si cela n'a pas résolu votre problème, nous aimerions avoir de vos nouvelles afin de vous aider, et d’améliorer nos
                            documents d'assistance pour autres participants.
                            Dans ce cas, écrivez-nous à <a href="mailto:support@telraam.net">support@telraam.net</a> et nous vous conseillerons
                            autant que possible.<br>
                            <br>

                            <h4>Avez-vous besoin d'aide supplémentaire?</h4>

                            La communauté de Telraam continue à croître, mais nous comprenons que les circonstances peuvent changer et que tous ceux qui
                            s'inscrivent ne peuvent pas toujours continuer à compter le trafic dans leur région.<br>
                            <br>
                            Si vous souhaitez que votre compte soit considéré comme inactif et que vous ne receviez plus nos courriels,
                            faites-le nous savoir en remplissant <a href="{{ url('/') }}/fr/camera-outage-backing/{{ $userToken }}">ce formulaire</a><br>
                            <br>
                            Si nous n'avons reçu aucune réponse de votre part, l'équipe Telraam peut essayer de vous contacter directement pour s'assurer
                            que nous avons vos bonnes coordonnées. Nous sommes soucieux de la confidentialité des données mais aussi de l'intégrité
                            des projets sur lesquels nous travaillons ensemble. Nous voulons donc être sûrs de prendre les meilleures mesures pour tout le monde.<br>
                            <br>

                            <h4>Merci!</h4>

                            Nous espérons pouvoir continuer à compter sur votre soutien pour la collection des données de trafic, mais si
                            vous avez décidé de terminer votre participation, nous vous remercions et vous souhaitons, à vous et à votre communauté,
                            le meilleur pour l'avenir.<br>
                            <br>

                            <br><br>
                            Cordialement,<br>
                            L'équipe Telraam<br>


                        @elseif ($language == 'DE')
                            Liebe(r) {{ $toFirstname }},<br>
                            <br><br>
                            <strong>Ihr Telraam hat aufgehört, den Verkehr auf <a href="https://telraam.net/en/location/{{ $segmentId }}">{{ $street }}</a> zu zählen.</strong><br>
                            <br>
                            Wir möchten Sie nicht mit Benachrichtigungen überhäufen. Dies ist die <strong>letzte automatische Benachrichtigung</strong> bezüglich Ihres
                            Geräts, das offline ist.<br>
                            <br>
                            Wir würden Ihnen wirklich gerne helfen, dieses Problem zu lösen, indem wir Ihr Gerät wieder aktiv machen.<br>
                            <br>

                            <h4>Benötigen Sie mehr Hilfe mit Ihrem Gerät?</h4>

                           Wir haben Ihnen bereits Links mit Anweisungen geschickt, um Ihr Gerät wieder zum Zählen zu bringen. Falls Sie diese benötigen, finden Sie sie hier:
                             <ul>
                                <li>Wenn Sie ein Telraam v1-Gerät haben, folgen Sie den Schritt-für-Schritt-Anweisungen hier:
                                    <a href="{{ $faqV1 }}">"Mein Telraam zählt nicht mehr"</a>
                                </li>
                                <li>Wenn Sie ein Telraam S2-Gerät haben, können Sie hier mehr erfahren:
                                    <a href="{{ $faqS2 }}">"Fehlerbehebung mit dem S2"</a>
                                </li>
                       	        </ul>
                       	        Zählt Ihr Telraam nicht mehr, weil es (wiederholt) vom Fenster fällt? In diesem Fall empfehlen wir, das mitgelieferte Klebeband durch doppelseitiges Schaumstoffklebeband zu ersetzen.<br>
                                <br>
                                Wenn dies Ihr Problem nicht gelöst hat, würden wir wirklich gerne von Ihnen hören. Schreiben Sie uns bitte an <a href="mailto:support@telraam.net">support@telraam.net</a> und wir werden so viel Rat wie möglich geben.<br>
                                <br>
                                <h4>Entschieden, mit dem Zählen aufzuhören?</h4>

                                Die Gemeinschaft der Telraam-Gerätebesitzer wächst ständig, aber wir verstehen, dass sich die Umstände
                                ändern und nicht jeder, der sich anmeldet, den Verkehr in seiner Gegend weiterhin zählen kann.<br>
                                <br>
                                Wenn Sie Ihren Standort als inaktiv setzen und unsere E-Mails nicht mehr erhalten möchten,
                                teilen Sie uns dies bitte mit, indem Sie <a href="{{ url('/') }}/en/camera-outage-backing/{{ $userToken }}">dieses kurze Formular</a> ausfüllen.<br>
                                <br>
                                Wenn wir nichts von Ihnen hören, versucht das Telraam-Team möglicherweise, direkt Kontakt aufzunehmen, um sicherzustellen, dass wir die richtigen Kontaktdaten für Sie und Ihr Gerät haben.
                                Uns liegt Ihre Privatsphäre am Herzen sowie die Integrität der Verkehrsprojekte, an denen wir gemeinsam arbeiten, daher möchten wir sicherstellen,
                                dass wir die beste Maßnahme für alle Beteiligten ergreifen.<br>
                                <br>
                                <h4>Vielen Dank!</h4>
                                Wir hoffen, dass wir weiterhin auf Ihre Unterstützung bei der Verkehrszählung zählen können, aber wenn Sie entschieden haben zu gehen, möchten wir Ihnen für Ihre Beteiligung danken
                                und Ihnen und Ihrer Gemeinschaft alles Gute für die Zukunft wünschen.<br>
                                <br>
                                Mit freundlichen Grüßen,<br>
                                Team Telraam<br>

                        @elseif ($language == 'ES')
                            Estimado/a {{ $toFirstname }},<br>
                            <br><br>
                            <strong>Su Telraam ha dejado de contar el tráfico en <a href="https://telraam.net/en/location/{{ $segmentId }}">{{ $street }}</a>.</strong><br>
                            <br>
                            No queremos molestarle con alertas, por lo que esta es la <strong>última alerta automática</strong> sobre su
                            dispositivo que está offline.<br>
                            <br>
                            Nos gustaría mucho ayudarle a resolver este problema reactivando su dispositivo.<br>
                            <br>

                            <h4>¿Necesita más ayuda con su dispositivo?</h4>

                           Anteriormente le enviamos enlaces con instrucciones para que su dispositivo vuelva a contar. En caso de que los necesite, puede encontrarlos aquí:
                             <ul>
                                <li>Si tiene un dispositivo Telraam v1, siga las instrucciones paso a paso aquí:
                                    <a href="{{ $faqV1 }}">"Mi Telraam ya no cuenta"</a>
                                </li>
                                <li>Si tiene un dispositivo Telraam S2, puede leer más aquí:
                                    <a href="{{ $faqS2 }}">"Solución de problemas con el S2"</a>
                                </li>
                       	        </ul>
                       	        ¿Su Telraam ha dejado de contar porque se cae de la ventana (repetidamente)? En ese caso, le recomendamos reemplazar la cinta adhesiva suministrada por cinta de espuma de doble cara.<br>
                                <br>
                                Si esto no ha resuelto su problema, escríbanos a <a href="mailto:support@telraam.net">support@telraam.net</a> y le daremos el mayor asesoramiento posible.<br>
                                <br>
                                <h4>¿Ha decidido dejar de contar?</h4>

                                La comunidad de usuarios de dispositivos Telraam crece constantemente, pero entendemos que las circunstancias
                                cambian y no todos los que se registran pueden seguir contando el tráfico en su zona.<br>
                                <br>
                                Si desea establecer su ubicación como inactiva y dejar de recibir nuestros correos electrónicos,
                                háganos saber rellenando <a href="{{ url('/') }}/en/camera-outage-backing/{{ $userToken }}">este breve formulario</a>.<br>
                                <br>
                                Si no sabemos nada de usted, el equipo de Telraam puede intentar ponerse en contacto directamente para asegurarse de que tenemos los datos de contacto correctos para usted y su dispositivo.
                                Nos preocupamos por su privacidad y también por la integridad de los proyectos de tráfico en los que trabajamos juntos, por lo que queremos asegurarnos de
                                tomar la mejor medida para todos los involucrados.<br>
                                <br>
                                <h4>¡Gracias!</h4>
                                Esperamos poder seguir contando con su apoyo para recopilar conteos de tráfico, pero si ha decidido irse, queremos agradecerle su participación
                                y desearle a usted y a su comunidad todo lo mejor para el futuro.<br>
                                <br>
                                Atentamente,<br>
                                Team Telraam<br>

                        @else
                            Dear {{ $toFirstname }},<br>
                            <br><br>
                            <strong>Your Telraam has stopped counting traffic for <a href="https://telraam.net/en/location/{{ $segmentId }}">{{ $street }}</a>.</strong><br>
                            <br>
                            We don’t want to pester you with alerts, so this is the <strong>final automated alert</strong> regarding your
                            device being offline.<br>
                            <br>
                            We’d really like to help you resolve this issue by getting your device active again.<br>
                            <br>

                            <h4>Need more help with your device?</h4>

                           We’ve previously sent you links to instructions for getting your device counting again. In case you need themn, you can find them here:
                             <ul>
                            <li>If you have a Telraam v1 device, follow the step by step instructions here:
                                <a href=”{{ $faqV1 }}”>”My Telraam isn't counting anymore”</a>
                            </li>
                            <li>If you have a Telraam S2 device, you can read more here:
                                <a href=”{{ $faqS2 }}”>”Troubleshooting with the S2”</a>
                            </li>
                       	    </ul>
                       	    Does your Telraam no longer count because it falls off the window (repeatedly). If so, we recommend replacing the supplied tape with double-sided foam tape.<br>
                            <br>
                            If this has not resolved your issue, we’d really like to hear from you so we can help you and also improve our
                            support documents for others. If so, please write to us at <a href="mailto:support@telraam.net">support@telraam.net</a> and we will provide as much advice as we can.<br>
                            <br>
                            <h4>Decided to stop counting?</h4>

                            The community of Telraam device hosts is growing all the time, but we understand that circumstances
                            change and not everyone who signs up can continue to count the traffic in their area.<br>
                            <br>
                            If you’d like to set your location as inactive and stop receiving our emails,
                            please let us know by filling in <a href="{{ url('/') }}/en/camera-outage-backing/{{ $userToken }}">this short form </a>.<br>
                            <br>
                            If we do not hear from you, the Telraam team may try to get in touch directly to ensure we have the correct contact details for you and your device.
                            We care for your privacy and also for the integrity of the traffic projects we work on together, so we want to be sure we
                            take the best action for all those involved.<br>
                            <br>
                            <h4>Thank you!</h4>
                            We do hope we can continue to rely on your support to collect traffic counts, but if you have decided to leave we want to thank you for being involved,
                            and wish you and your community all the very best for the future.<br>
                            <br>
                            Warmest regards,<br>
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
