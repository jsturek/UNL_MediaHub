<?php
require_once 'UNL/Autoload.php';
require_once dirname(__FILE__).'/../config.inc.php';

$mediahub = new UNL_MediaHub();

$options = array('filter' => new UNL_MediaHub_MediaList_Filter_NoContentType(),
                 'limit'  => 100);
$list = new UNL_MediaHub_MediaList($options);
$list->run();
if (count($list->items)) {
    echo count($list->items).' media missing content types found.'.PHP_EOL;
    foreach ($list->items as $media) {
        $media->setContentType();
        $media->save();
    }
}
?>
