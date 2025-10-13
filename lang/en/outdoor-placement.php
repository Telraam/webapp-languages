<?php

return [

    'title' => 'Outdoor placement tool',
    'subtitle' => 'Positioning your Telraam S2 Outdoor',

    'near-side' => 'Distance pole to street',
    'width-street' => 'Width street',
    'mount-height' => 'Height of the device',


    // 1. near side
    'val-block-1-title' => 'Near side',
    'val-block-1-info' => 'Can my Telraam S2 Outdoor detect objects on the near side?',

    'val-block-1-good-title' => 'Distance is at least 2 m AND the angle to the nearest side of the monitoring area is at least 20° ',
    'val-block-1-good-info' => 'All objects on the near side are in field of view and are recognizable.',

    'val-block-1-poor-title' => 'Distance is 1 to 2 meters OR the angle to the nearest side of the monitoring area is 10° to 20°',
    'val-block-1-poor-info' => 'You may miss some objects on the near side.',

    'val-block-1-bad-title' => 'Distance is less than 1 m OR the angle to the nearest side of the monitoring area is less than 10°',
    'val-block-1-bad-info' => 'You will miss most objects on the near side..',

    // 2. blocking view
    'val-block-2-title' => 'Blocking view',
    'val-block-2-info' => 'Is there risk of objects on the near side blocking objects on the far side?',

    'val-block-2-good-title' => 'The angle to the centre of the road is 30° to 60°',
    'val-block-2-good-info' => 'Very little risk of objects on the near side blocking objects on the far side.',

    'val-block-2-poor-title' => 'The angle to the centre of the road is > 60° or < 30',
    'val-block-2-poor-info' => 'Busy traffic in the lanes closer to the Telraam S2 Outdoor may prevent accurate counting of objects on the farther lanes, bike paths, and walkways.',

    // 3. far side
    'val-block-3-title' => 'Far side',
    'val-block-3-info' => 'Will my Telraam S2 Outdoor see all objects on the far side?',

    'val-block-3-good-title' => 'Objects are within 25 m',
    'val-block-3-good-info' => 'All objects will big enough to be detected by Telraam.',

    'val-block-3-poor-title' => 'Objects are between 25 m and 40 m',
    'val-block-3-poor-info' => 'You may miss some objects on the far side, especially smaller objects like pedestrians.',

    'val-block-3-bad-title' => 'Objects are beyond 40 m ',
    'val-block-3-bad-info' => 'objects on the far side will be too small and most likely will not be detected.',

    // 4. far side
    'val-block-4-title' => 'Height device',
    'val-block-4-info' => 'Is my Telraam S2 Outdoor installed high enough to prevent vandalism?',

    'val-block-4-good-title' => 'Installation is above 3 m',
    'val-block-4-good-info' => 'Well out of reach; this height requires deliberate action and equipment for vandals to remove/break the unit.',

    'val-block-4-bad-title' => 'Installation is below 3 m',
    'val-block-4-bad-info' => ' Too low, your Telraam S2 Outdoor could be easily vandalized.',

    // warning
    'warning' => "Not all warnings are deal-breakers. Evaluate each one based on what matters most for your traffic counting goals."


];
