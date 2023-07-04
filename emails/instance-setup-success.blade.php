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
                <a align="left" valign="top">
                    @if ($language == 'nl')
                        Hurray!<br><br>
                        Telraam heeft de eerste datapakketjes van uw camera-opstelling ontvangen!<br>
                        Binnenkort worden de gegevens verwerkt en zichtbaar in uw eigen dashboard, maar ook
                        <a href="{{ url('/') }}/{{ $language }}/location/{{ $instance->street_segment_id }}">op de openbare datapagina</a> van {{ $instance->street_1 }}.
                        <br><br>
                        Hier zijn nog enkele interessante artikelen om te lezen:<br>
                        @if($instance->hardware_version == "2")
                            <a href="https://faq-nl.helpspace-docs.io/article/104/interessegebied-roi-en-roi-selectie-met-telraam-s2">
                                Interessegebied (ROI) en ROI-selectie met Telraam S2
                            </a><br>
                            <a href="https://faq-nl.helpspace-docs.io/article/100/data-performance-en-validatie">
                                Data performance en validatie
                            </a><br>

                        @else
                            <a href="https://faq-nl.helpspace-docs.io/article/77/classificatie-voetganger-tweewieler-auto-of-groot-voertuig">
                                Hoe werkt de classificatie van Telraam?
                            </a><br>
                            <a href="https://faq-nl.helpspace-docs.io/article/86/raadplegen-en-interpreteren-van-telraam-gegevens-een-algemeen-overzicht">
                                Hoe moet ik de gegevens van Telraam interpreteren?
                            </a><br>
                            <a href="https://faq-nl.helpspace-docs.io/article/78/telraam-kalibratie-en-de-verhouding-auto-grote-voertuigen">
                                Telraam calibration and the ratio auto/large vehicles
                            </a>
                        @endif
                        <br>
                    @elseif ($language == 'fr')
                        Hourra!<br><br>
                        Telraam a reçu les premiers paquets de données de votre caméra!<br>
                        Bientôt, les données seront traitées et visibles dans votre propre tableau de bord ainsi que
                        <a href="{{ url('/') }}/{{ $language }}/location/{{ $instance->street_segment_id }}">sur la page de données publiques</a> de la {{ $instance->street_1 }}.
                        <br><br>
                        Voici quelques autres articles intéressants à lire:<br>
                        @if($instance->hardware_version == "2")
                            <a href="https://faq-fr.helpspace-docs.io/article/144/region-dinteret-roi-et-selection-de-roi-avec-telraam-s2">
                                Région d'intérêt (ROI) et sélection de ROI avec Telraam S2
                            </a><br>
                            <a href="https://faq-fr.helpspace-docs.io/article/143/performance-et-validation-des-donnees">
                                Performance et validation des données
                            </a><br>
                        @else
                            <a href="https://faq-fr.helpspace-docs.io/article/156/classification-et-differentiation-des-differents-types-de-vehicules">
                                Comment fonctionne la classification des véhicules avec Telraam ?
                            </a><br>
                            <a href="https://faq-fr.helpspace-docs.io/article/158/imprecisions-possibles-avec-telraam">
                                Comment interpréter les données de la Telraam ?
                            </a><br>
                            <a href="https://faq-fr.helpspace-docs.io/article/159/le-calibrage-de-votre-telraam">
                                Le calibrage de votre Telraam
                            </a>
                        @endif
                            <br>
                    @else
                        Hurray!<br><br>
                        Telraam received the first data packages from your camera setup! <br>
                        Soon the data will be processed and visible in your own dashboard as well as on
                        <a href="{{ url('/') }}/{{ $language }}/location/{{ $instance->street_segment_id }}">the public data page</a> from {{ $instance->street_1 }}.
                        <br><br>
                        @if($instance->hardware_version == "2")
                            <a href="https://telraam.helpspace-docs.io/article/66/region-of-interest-roi-and-roi-selection-with-telraam-s2">
                                Region of interest (ROI) and ROI selection with Telraam S2
                            </a><br>
                            <a href="https://telraam.helpspace-docs.io/article/15/data-performance-and-validation">
                                Data performance and validation
                            </a><br>
                        @else
                            Here are some more interesting articles to read:<br>
                            <a href="https://telraam.helpspace-docs.io/article/18/how-are-the-different-types-of-road-users-classified-and-differentiated">
                                How does the classification of Telraam work?<br>
                            </a>
                            <a href="https://telraam.helpspace-docs.io/article/19/potential-inaccuracies-with-telraam">
                                How should I interpret the Telraam data?<br>
                            </a>
                            <a href="https://telraam.helpspace-docs.io/article/20/telraam-calibration-and-the-ratio-auto-large-vehicles">
                                Telraam calibration and the ratio car/large vehicles.
                                <br>
                            </a>
                        @endif
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
