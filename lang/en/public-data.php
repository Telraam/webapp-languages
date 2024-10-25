<?php

return [

    'title' => 'Data',
    'sub-title' => 'Get instant insights into your streets’ traffic.<br>
Get car, bike, pedestrian, heavy vehicles counts and more!',

    // pricing box
    'pricing-1-title' => 'Premium subscription <span class="green">€15 <span class="month">/ month</span>',
    'pricing-1-subtitle' => 'Includes the 10 road user classes, 15 minute data resolution, more tools, and better reports',
    'pricing-1-info' => 'Want to install multiple devices? Or get access to data from existing devices?
                            <div style="padding-left: 20px">
                                Consider the <a href="../en/network">Network</a> subscription.
                                It includes a Premium subscription for all owned devices, a rich set of network-management tools,
                                and access to the <a href="../en/data-pool">Data Pool feature</a>.
                            </div>',

    'pricing-2-title' => 'Basic <span class="green">Free for personal use only</span>',
    'pricing-2-subtitle' => 'Limited to the 4 default modes and hourly data.',

    // tab titles
    'tab-1-title' => 'Public page',
    'tab-2-title' => 'Personal dashboard',
    'tab-3-title' => 'Advanced data',

    // tab A public
    'section-public-big-title' => 'Telraam believes in transparency and dialogue. When you set up your device, your traffic data is shared on the public page for your street.',
    'section-public-title' => 'Public page',
    'section-public-info' => 'Navigate to any device on the Telraam map to view public data for that street.
    Every Telraam device offers basic data summaries for the past two weeks.<br><br>
If the device has a premium or network subscription, additional features like flexible date ranges and live traffic are also available to everyone.<br><br>',

    // tab B personal dashboard
    'section-dash-big-title' => 'Export data, access the API, customize date ranges, and explore your data — all in your personal Telraam dashboard.',
    'section-dash-title' => 'Personal dashboard',
    'section-dash-info' => 'Log in to your dashboard to set up your street profile, choose dates, and see your data.
                If you want more details, you can get advanced data with a premium or network subscription.',

    // tab C advanced info
    'section-advanced-big-title' => 'Monitor live traffic in near real-time, detect anomalies, uncover trends, and get your counts across 10 different modes to make informed decisions effortlessly with advanced data.',
    'section-advanced-intro' => 'Premium subscribers get access to count data that has four times higher temporal
    resolution than our basic dataset, and an extended set of road user
    classes when looking at modal shares. This higher resolution also means a much
    reduced delay which enables professional users to follow live traffic data in much more real-time.',

    'section-advanced-block1' => '<strong>15 minute resolution</strong><br>
    <br>
    15 minute temporal resolution for all data products, including count data, typical trend data, and for all analytic,
    visualisation, and export tools and <a href="https://telraam-api.net/">API</a>s.
    <ul class="jump-in">
        <li>Discover, track, and analyse traffic patterns and anomalies with greater clarity.</li>
        <li>Ideal for studying short-lived events (school-street usage, congestions, accidents).</li>
        <li>Live traffic with a much more real-time display (delay of only 15 minutes on device level, compared to a bit
        over an hour for non-subscriber users with only segment level data).</li>
    </ul>
    <br>
    <p><strong>10 different modes</strong><br>
     <br> 
     Traffic counts per direction of travel for 10 different road user classes (non-subscriber users are provided aggregated counts over the four main classes).The differentiated classes are bicycles, buses, cars, light trucks, motorcycles, pedestrians, strollers, tractors, trailers, and trucks.
</p>
     <br>
    ',

    'section-advanced-block2' => '
    <strong>Typical traffic data</strong><br>
    <br>
    Typical traffic is the foundation of many of the analytical tools and data products that we offer to our subscribers.
    As an example, typical data includes the typical (average) counts (and the most likely range) for the expected car traffic for a Monday morning
    between 08:00 and 08:15 based on the last 12 months\' actual traffic - but you can choose a different mode, day of week, time of day, and baseline
    period as you wish. How does this work in practice?
    <ul class="jump-in">
        <li>We provide typical traffic volumes calculated as the average (and standard deviation) of historical traffic counts over
        the periods of a year, a season, and a month leading up to the date of the calculation (referred to as the epoch).</li>
        <li>Each typical product is calculated at regular intervals to provide a continuously growing set of historical
        averages corresponding to various epochs. The data is made available on a quarterly and hourly resolution,
        for each mode, down to each day of the week (including a more general weekday and weekend option too).</li>
    </ul>',


    // the 4 data sections
    'features-title' => 'Advanced Data Reports',

    'features-1-title' => '10 modes',
    'features-1-text' => 'See the data in ten categories like cars, light vehicles, heavy vehicles, buses, bicycles, pedestrians, motorcycles, e-scooters, vans, and strollers. Here, you can also see live or historical traffic data on a segment and see how it compares to expected levels. For example, if current traffic deviates significantly from the average (more than three standard deviations), it’s definitely unusual. Explore whether the issue is temporary, linked to an event, weather, or a change in traffic patterns. Dive in and see what’s happening!',

    'features-2-title' => 'Trends',
    'features-2-text' => 'Monitor how traffic patterns evolve over time. For instance, you can view average Monday traffic for the past year using quarterly averages calculated every two weeks. This rolling average highlights long-term changes while filtering out short-term fluctuations. The 3D histogram is a great tool for detailed insights, but if you prefer, you can use our interactive 2D plot to compare traffic levels for different periods. With options for various modes, weekdays, and intervals, you have plenty of ways to explore the data.',

    'features-3-title' => '15 minute data',
    'features-3-text' => 'Just like the segments tab, but with higher temporal resolution. This is perfect for spotting short-lived events, like the morning rush near schools or a temporary roadblock from an accident. Plus, the data is updated every fifteen minutes, making it ideal for real-time monitoring.',

    'features-4-title' => 'Installations',
    'features-4-text' => ' A road segment may have more than one Telraam sensor installed. In this case the segment page shows the (smartly weighted) average metrics coming from the corresponding installations. With the advanced data you can consult the original data of each individual Telraam installation, which can be useful in many situations, including data validation, separating data coming from different sensor versions (e.g., Telraam V1 and S2 devices on the same segment), or simply to consult the data of your own device.',


    // 3 extra features
    'extra-features-1-title' => 'Street sheet',
    'extra-features-1-text' => 'This Excel-format summary, which you can download, provides a comprehensive overview for a device or segment, complete with insights, calculations, and raw data for further analysis. Whether you are an expert or a beginner, these reports help you review data, spot trends, and identify anomalies. The sheet breaks down modal splits, typical daily and weekly traffic patterns, and speed trends into easy-to-digest information.  It’s perfect to share with others when explaining something about the data.Download an example here.',

    'extra-features-2-title' => 'Advanced APIs',
    'extra-features-2-text' => 'Get access to exclusive, professional <a href="https://telraam-api.net/">API</a> end-points:
    <ul class="jump-in">
        <li>Integrate custom data connections into anything ranging from personalised dashboards to a full integration
        with Business Intelligence (BI) data systems.</li>
        <li>Custom data rate limits to enable more regular data refreshing, or access to a selected set of segments and
        time periods.</li>
        <li>Enhanced public endpoints with the 15 minute resolution and the 10 traffic modes (subject to Telraam S2 availability
        for the given segment) where possible.</li>
        <li>Additional endpoints exclusively for premium subscribers, such as 5 km/h resolution speed histograms
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
