<?php

$elements = array(
    'box-block',
    'choosePr',
    'about-us',
    'parallaxPr',
    'featurePr',
    'teamPr',
    'chartPr',
    'contactPr',
    'clientPr',
    'PricingPr',
    'titlePr',
	'ourproduct',
    'gmapPr',
    'features',
    'blogPr'
);
foreach ($elements as $element) {
    include($element . '/' . $element . '.php');
}
?>
