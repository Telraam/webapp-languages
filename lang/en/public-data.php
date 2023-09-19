<?php

return [

    'title' => 'Data',
    'sub-title' => 'Professional applications require advanced data products. Dig deeper with the Telraam Data subscription,
    and unlock the full potential of the Telraam S2 device: gain access to segment and device level counts on a finer temporal resolution,
    more modes of traffic, advanced APIs, and a broad set of visualisations and analytic tools.',

    // pricing box
    'pricing-1-title' => 'Data subscription <span class="green">€15 <span class="month">/ month</span>',
    'pricing-1-subtitle' => 'Includes the 10 road user classes, 15 minute data resolution, more tools, and better reports',
    'pricing-1-info' => '(Multiple) devices in your neighborhood as an organisation or city?
                            <div style="padding-left: 20px">
                                Consider the <a href="../professionals">Network</a> instead.
                                This includes a Data subscription for all devices, and a rich set of network-management tools.
                            </div>',

    'pricing-2-title' => 'Basic data <span class="green">Free for personal use only</span>',
    'pricing-2-subtitle' => 'Limited to the 4 default modes and hourly data.',

    // tab titles
    'tab-1-title' => 'Data subscription',
    'tab-2-title' => 'Basic data',

    // info
    'section-1-title' => 'More detail',
    'section-1-intro' => 'Data subscribers get access to count data that has four times higher temporal
    resolution than our basic dataset, and an extended set of road user
    classes when looking at modal shares. This higher resolution also means a much
    reduced delay which enables professional users to follow live traffic data much more real-time.',
    
    'section-1-block1' => '<strong>15 minute resolution</strong><br>
    <br>
    15 minute temporal resolution for all data products, including count data, typical trend data, and for all analytic,
    visualisation, and export tools and APIs.
    <ul class="jump-in">
        <li>Discover, track, and analyse traffic patterns and anomalies with greater clarity.</li>
        <li>Ideal for studying short-lived events (school-street usage, congestions, accidents).</li>
        <li>Live traffic with a much more real-time display (delay of only 15 minutes on device level, compared to a bit
        over an hour for non-subscriber users with only segment level data).</li>
    </ul>
    <br>
    <p><strong>10 different modes</strong><br>
     <br>
     Traffic counts per direction of travel for 10 different road user classes (non-subscriber users are
     provided aggregated counts over the four main classes).<br>
     The differentiated classes are bicycles, buses, cars, light trucks, motorcycles, pedestrians, strollers, tractors,
     trailers, and trucks.</p>
     <br>
    ',

    'section-1-block2' => '
    <strong>Typical traffic data</strong><br>
    <br>
    Typical traffic is the foundation of many of the analytical tools and data products that we offer to our subscribers.
    As an example, typicala data includes the typical (average) counts (and the most likely range) for the expected car traffic for a Monday morning
    between 08:00 and 08:15 based on the last 12 months\' actual traffic - but you can choose a different mode, day of week, time of day, and baseline
    period as you wish. How does this work in practice?
    <ul class="jump-in">
        <li>We provide typical traffic volumes calculated as the average (and standard deviation) of historical traffic counts over
        the periods of a year, a season, and a month leading up to the date of the calculation (referred to as the epoch).</li>
        <li>Each typical product is calculated at regular intervals to provide a continuously growing set of historical
        averages corresponding to various epochs. The data is made available on a quarterly and hourly resolution,
        for each mode, down to each day of the week (including a more general weekday and weekend option too).</li>
    </ul>',

    'section-2-title' => 'More tools, better insights, and complete control',

    'section-2-intro-text' => 'Benefit from the experience of the team behind Telraam. Get access to a
     range of advanced, purpose-made tools to explore and understand your data, facilitating and accelerating
      your research.<br>
      <br>
      The Data subscription includes access to the Data dashboard, the Advanced APIs, the Street sheets,
       and other custom data export options.',


    // the 4 data sections
    'features-title' => 'Data dashboard',

    'features-1-title' => 'Segments',
    'features-1-text' => 'Monitor live or historical traffic (and the overall modal split) on a segment and compare it to the expected levels to identify atypical traffic.<br> For example: if the live traffic is outside
    of the interval that is defined by the average plus and minus three times the standard deviation of the histrorical traffic, that means that the observed traffic
    is unexpected compared to the average of the past month, season, or year, depending on the used typical data product. Is the anomaly short lived or long-term,
    is it caused by a special event, weather, or a change in the circulation plan? Go and explore!',

    'features-2-title' => 'Trends',
    'features-2-text' => 'Monitor the evolution of traffic trends over time. For example you can visualise
    the average Monday\'s car traffic over the past year, using seasonal (quarterly) averages that were calculated every two weeks,
    providing a rolling average traffic pattern over time. Looking at rolling averages helps to filter out short lived anomalies while bringing
    long-term changes into the spotlight. The 3D histogram is a very powerful visualisation tool, but if you just want to compare the traffic levels of a
    few selected epochs to eachoter, you can use our traditional interactive 2D plot for that. With the number of modes, weekdays, typical intervals, and calculation
    epochs available, the options are very broad.',

    'features-3-title' => '15 minute data',
    'features-3-text' => 'Similar to the Segments tab, but here you can monitor data with a higher temporal resolution. Some effects are very short-lived,
    for example the morning rush near schools, or a temporary road block caused by an accident. Quarterly live data is also much more real time, as new datapoints
    are added evey fifteen minutes, which is great for real-time applications.',

    'features-4-title' => 'Installations',
    'features-4-text' => 'A road segment may have more than one Telraam sensor installed. In this case the segment page shows the (smartly weighted)
    average metrics coming from the corresponding installations (also known as Telraam instances). As a Data subscriber you can consult the original data
    of each individual Telraam instance, which can be useful in many situations, including data validation, separating data coming from different sensor versions
    (e.g., Telraam V1 and S2 devices on the same segment), or simply to consult the data of your own device.',




    // 3 extra features
    'extra-features-1-title' => 'Street sheet',
    'extra-features-1-text' => 'Our popular on-demand data product is also part of the data subscription. We provide
    a compact, in-depth Excel-format summary for a device or segment, including insights, calculations,
    and raw data for further review or analysis.<br>
These reports give all users, experts and non-experts alike, a review of the data from a device or segment
in order to help identify trends and anomalies. The sheet provides easy-to-digest information on
modal splits, typical traffic patterns (for days and weeks), and also speed patterns.',

    'extra-features-2-title' => 'Advanced APIs',
    'extra-features-2-text' => 'Get access to exclusive, professional API end-points:
    <ul class="jump-in">
        <li>Integrate custom data connections into anything ranging from personalised dashboards to a full integration
        with Business Intelligence (BI) data systems.</li>
        <li>Custom data rate limits to enable more regular data refreshing, or access to a selected set of segments and
        time periods.</li>
        <li>Enhanced public endpoints with the 15 minute resolution and the 10 traffic modes (subject to Telraam S2 availability
        for the given segment) where possible.</li>
        <li>Additional endpoints exclusively for data subscribers, such as 5 km/h resolution speed histograms
         and additional typical-traffic-derived data.</li>
        <li>Potential for custom integrations and endpoints by agreement or collaboration with the Telraam Team.</li>
    </ul>',

    'extra-features-3-title' => 'Raw data export',
    'extra-features-3-text' => 'Download raw count data (in spreadsheets or as CSV files) to carry out more custom analyses.
    <ul class="jump-in">
        <li>The data export tool allows organisations that do not have large data lakes or BI systems to export,
        repurpose and personalise reports from one or even multiple devices.</li>
<li>The data exports include charts, calculations, typical values, and raw data from the device.
<li>Adapt the reports to include items of particular relevance to your street: modal shift patterns, speed changes before or after interventions, traffic volumes over time, and more.
</li>
</ul>',


];
