<?php

require('../../config.php');

$siteurl = required_param('url', PARAM_URL);
$siteid  = required_param('siteid', PARAM_TEXT);

try {
    if ($site = $DB->get_record('hub_site_directory', array('url'=>$siteurl, 'secret'=>$siteid))) {
        echo 1;
    }
} catch (Exception $ex) {
    // do nothing
}

echo 0;
