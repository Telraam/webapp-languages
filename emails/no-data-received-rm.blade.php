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
                        Beste Telramer,<br>
                        <br>
                        Het lijkt of je Telraam op de <strong>{{ $street }}</strong> geen data meer uitstuurt. Wil je dit even bekijken?<br>
                        <br>
                        <a href="https://telraam.net/nl/location/{{ $segmentId }}/{{ $dateFrom }}/{{ $dateTo }}">Detail van uw Telraam kun je hier bekijken.</a><br>
                        <br>
                        Om je verder te helpen, zijn dit alvast enkele mogelijkheden:<br>
                        <ol>
                            <li>Ik zoek het uit op de faq en start met <a href="https://faq-nl.helpspace-docs.io/article/111/mijn-telraam-telt-niet-meer">dit artikel op onze helpdesk</a></li>
                            <li>Ook deze checklist op onze faq is best interessant:
                                <a href="https://faq-nl.helpspace-docs.io/category/21/telraam-v1-probleemoplossing-na-een-succesvolle-installatie">
                                    Problemen na de installatie
                                </a> </li>

                            <li>Ik heb hulp nodig en mail naar <a href="mailto:support@telraam.net">support@telraam.net</a>
                            <li>Ik heb mijn Telraam gekregen en wil hem terugsturen. Ik stuur hiervoor een mail naar <a href="mailto:support@telraam.net">support@telraam.net</a></li>
                            <li>Wil je afmelden dan kun je dit makkelijk doen <a href="{{ url('/') }}/nl/camera-outage-backing/{{ $userToken }}">via het afmeldingsformulier</a></li>

                        </ol>

                    @elseif ($language == 'FR')
                        Chèr(e),<br>
                        <br>
                        Nous avons constaté que votre dispositif Telraam ne transmet plus de comptages.
                        Veuillez y jeter un coup d’œil svp.<br>
                        <br>
                        Ici vous pourriez voir <a href="https://telraam.net/fr/location/{{ $segmentId }}/{{ $dateFrom }}/{{ $dateTo }}">les détails de votre Telraam</a> <br>
                        <br>
                        Pour vous aider, on vous présente quelques solutions:<br>
                        <ol>
                            <li>Je cherche une solution en consultant les articles du FAQ et en
                                commençant avec <a href="https://faq-fr.helpspace-docs.io/article/191/ma-telraam-ne-compte-plus">cet article d’assistance</a>
                            </li>
                            <li>Cette liste de contrôle sur notre faq est également intéressante:
                                <a href="https://faq-fr.helpspace-docs.io/category/32/telraam-v1-resolution-de-problemes-apres-une-installation-reussie">
                                    Problèmes après l'installation
                                </a>
                            </li>
                            <li>J’ai besoin d’aide et j’envoie une message à: <a href="mailto:support@telraam.net">support@telraam.net</a></li>
                            <li>J’ai reçu mon Telraam et je veux le retourner. Pour ça je contacte: <a href="mailto:support@telraam.net">support@telraam.net</a></li>
                            <li>Si vous souhaitez vous désabonner, vous pouvez facilement faire <a href="{{ url('/') }}/fr/camera-outage-backing/{{ $userToken }}">sur le formulaire de désabonnement</a></li>
                        </ol>

                    @else
                        Dear,<br>
                        <br>
                        We noticed your Telraam device is not sending traffic data anymore. Would you like to check it?<br>
                        <br>
                        Details of <a href="https://telraam.net/en/location/{{ $segmentId }}/{{ $dateFrom }}/{{ $dateTo }}">your Telraam you can find here</a> <br>
                        <br>
                        To help you, there are some possibilities:<br>
                        <ol>
                            <li>Consult the FAQ articles, by starting <a href="https://telraam.helpspace-docs.io/article/51/my-telraam-isnt-counting-anymore">with this article</a></li>
                            <li>Also this checklist on our faq is quite interesting:
                                <a href="https://telraam.helpspace-docs.io/category/11/telraam-v1-troubleshooting-after-the-installation-process">Problems after installation</a>
                            </li>
                            <li>In case you need some help contact us: <a href="mailto:support@telraam.net">support@telraam.net</a></li>
                            <li>
                                I have received my Telraam but now would like to return my device. Therefore I contact: <a href="mailto:support@telraam.net">support@telraam.net</a>
                            </li>
                            <li>If you want to unsubscribe you can do so easily <a href="{{ url('/') }}/nl/camera-outage-backing/{{ $userToken }}">via the the unsubscribe form</a></li>
                        </ol>

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
