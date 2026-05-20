@extends('emails.layouts.app-branded')
@section('content')

@php
    $faqS2Roi = match(strtolower($language)) {
        'nl' => 'https://faq-nl.telraam.net/article/104/interessegebied-roi-en-roi-selectie-met-telraam-s2',
        'fr' => 'https://faq-fr.telraam.net/article/144/region-dinteret-roi-et-selection-de-roi-avec-telraam-s2',
        default => 'https://faq.telraam.net/article/66/region-of-interest-roi-and-roi-selection-with-telraam-s2',
    };
    $faqS2Data = match(strtolower($language)) {
        'nl' => 'https://faq-nl.telraam.net/article/100/data-performance-en-validatie',
        'fr' => 'https://faq-fr.telraam.net/article/143/performance-et-validation-des-donnees',
        default => 'https://faq.telraam.net/article/15/data-performance-and-validation',
    };
    $faqV1Classification = match(strtolower($language)) {
        'nl' => 'https://faq-nl.telraam.net/article/77/classificatie-voetganger-tweewieler-auto-of-groot-voertuig',
        'fr' => 'https://faq-fr.telraam.net/article/156/classification-et-differentiation-des-differents-types-de-vehicules',
        default => 'https://faq.telraam.net/article/18/how-are-the-different-types-of-road-users-classified-and-differentiated',
    };
    $faqV1Interpret = match(strtolower($language)) {
        'nl' => 'https://faq-nl.telraam.net/article/86/raadplegen-en-interpreteren-van-telraam-gegevens-een-algemeen-overzicht',
        'fr' => 'https://faq-fr.telraam.net/article/158/imprecisions-possibles-avec-telraam',
        default => 'https://faq.telraam.net/article/19/potential-inaccuracies-with-telraam',
    };
    $faqV1Calibration = match(strtolower($language)) {
        'nl' => 'https://faq-nl.telraam.net/article/78/telraam-kalibratie-en-de-verhouding-auto-grote-voertuigen',
        'fr' => 'https://faq-fr.telraam.net/article/159/le-calibrage-de-votre-telraam',
        default => 'https://faq.telraam.net/article/20/telraam-calibration-and-the-ratio-auto-large-vehicles',
    };
@endphp


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
                        Hurray!<br><br>
                        Telraam heeft de eerste datapakketjes van uw camera-opstelling ontvangen!<br>
                        Binnenkort worden de gegevens verwerkt en zichtbaar in uw eigen dashboard, maar ook
                        <a href="{{ url('/') }}/{{ $language }}/location/{{ $instance->street_segment_id }}">op de openbare datapagina</a> van {{ $instance->street_1 }}.
                        <br><br>
                        Hier zijn nog enkele interessante artikelen om te lezen:<br>
                        @if($instance->isVersionTwo())
                            <a href="{{ $faqS2Roi }}">
                                Interessegebied (ROI) en ROI-selectie met Telraam S2
                            </a><br>
                            <a href="{{ $faqS2Data }}">
                                Data performance en validatie
                            </a><br>

                        @else
                            <a href="{{ $faqV1Classification }}">
                                Hoe werkt de classificatie van Telraam?
                            </a><br>
                            <a href="{{ $faqV1Interpret }}">
                                Hoe moet ik de gegevens van Telraam interpreteren?
                            </a><br>
                            <a href="{{ $faqV1Calibration }}">
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
                        @if($instance->isVersionTwo())
                            <a href="{{ $faqS2Roi }}">
                                Région d'intérêt (ROI) et sélection de ROI avec Telraam S2
                            </a><br>
                            <a href="{{ $faqS2Data }}">
                                Performance et validation des données
                            </a><br>
                        @else
                            <a href="{{ $faqV1Classification }}">
                                Comment fonctionne la classification des véhicules avec Telraam ?
                            </a><br>
                            <a href="{{ $faqV1Interpret }}">
                                Comment interpréter les données de la Telraam ?
                            </a><br>
                            <a href="{{ $faqV1Calibration }}">
                                Le calibrage de votre Telraam
                            </a>
                        @endif
                            <br>
                    @elseif ($language == 'de')
                        Hurra!<br><br>
                        Telraam hat die ersten Datenpakete von Ihrem Kamera-Setup erhalten!<br>
                        Bald werden die Daten verarbeitet und in Ihrem eigenen Dashboard sowie
                        <a href="{{ url('/') }}/en/location/{{ $instance->street_segment_id }}">auf der öffentlichen Datenseite</a> von {{ $instance->street_1 }} sichtbar sein.
                        <br><br>
                        Hier sind einige interessante Artikel zum Lesen:<br>
                        @if($instance->isVersionTwo())
                            <a href="{{ $faqS2Roi }}">
                                Interessengebiet (ROI) und ROI-Auswahl mit Telraam S2
                            </a><br>
                            <a href="{{ $faqS2Data }}">
                                Datenleistung und Validierung
                            </a><br>
                        @else
                            <a href="{{ $faqV1Classification }}">
                                Wie funktioniert die Klassifizierung von Telraam?
                            </a><br>
                            <a href="{{ $faqV1Interpret }}">
                                Wie soll ich die Telraam-Daten interpretieren?
                            </a><br>
                            <a href="{{ $faqV1Calibration }}">
                                Telraam-Kalibrierung und das Verhältnis Auto/große Fahrzeuge
                            </a>
                        @endif
                        <br>
                    @elseif ($language == 'es')
                        ¡Hurra!<br><br>
                        ¡Telraam ha recibido los primeros paquetes de datos de su configuración de cámara!<br>
                        Pronto los datos serán procesados y visibles en su propio panel de control, así como
                        <a href="{{ url('/') }}/en/location/{{ $instance->street_segment_id }}">en la página de datos pública</a> de {{ $instance->street_1 }}.
                        <br><br>
                        Aquí hay algunos artículos interesantes para leer:<br>
                        @if($instance->isVersionTwo())
                            <a href="{{ $faqS2Roi }}">
                                Región de interés (ROI) y selección de ROI con Telraam S2
                            </a><br>
                            <a href="{{ $faqS2Data }}">
                                Rendimiento y validación de datos
                            </a><br>
                        @else
                            <a href="{{ $faqV1Classification }}">
                                ¿Cómo funciona la clasificación de Telraam?
                            </a><br>
                            <a href="{{ $faqV1Interpret }}">
                                ¿Cómo debo interpretar los datos de Telraam?
                            </a><br>
                            <a href="{{ $faqV1Calibration }}">
                                Calibración de Telraam y la proporción coche/vehículos grandes
                            </a>
                        @endif
                        <br>
                    @else
                        Hurray!<br><br>
                        Telraam received the first data packages from your camera setup! <br>
                        Soon the data will be processed and visible in your own dashboard as well as on
                        <a href="{{ url('/') }}/{{ $language }}/location/{{ $instance->street_segment_id }}">the public data page</a> from {{ $instance->street_1 }}.
                        <br><br>
                        Here are some more interesting articles to read:<br>
                        @if($instance->isVersionTwo())

                            <a href="{{ $faqS2Roi }}">
                                Region of interest (ROI) and ROI selection with Telraam S2
                            </a><br>
                            <a href="{{ $faqS2Data }}">
                                Data performance and validation
                            </a><br>
                        @else
                            <a href="{{ $faqV1Classification }}">
                                How does the classification of Telraam work?<br>
                            </a>
                            <a href="{{ $faqV1Interpret }}">
                                How should I interpret the Telraam data?<br>
                            </a>
                            <a href="{{ $faqV1Calibration }}">
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
