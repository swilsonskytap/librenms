<?php

$rrd_filename = rrd_name($device['hostname'], 'pf_fragmented');

$ds = 'fragmented';

$colour_area = 'ff6600';
$colour_line = 'ff9933';

$colour_area_max = '9999cc';

$graph_max = 1;

$unit_text = 'Fragmented';

require 'includes/graphs/generic_simplex.inc.php';
