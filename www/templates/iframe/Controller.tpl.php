<?php
$is_audio = false;
if (isset($context->output[0]) && $context->output[0] instanceof UNL_MediaHub_Media) {
    $is_audio = !$context->output[0]->isVideo();
}
?>
<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Test</title>
    <script src="<?php echo UNL_MediaHub_Controller::getURL(); ?>templates/iframe/js/vendor/jquery.js?v=<?php echo UNL_MediaHub_Controller::getVersion() ?>"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r76/three.js"></script>
    <?php if ($is_audio): ?>
        <link href="<?php echo UNL_MediaHub_Controller::getURL(); ?>templates/iframe/js/vendor/videojs.wavesurfer.min.css" rel="stylesheet">
        <link href="<?php echo UNL_MediaHub_Controller::getURL(); ?>templates/iframe/css/font-awesome.min.css" rel="stylesheet">
    <?php endif; ?>
    <link href="<?php echo UNL_MediaHub_Controller::getURL(); ?>templates/iframe/js/vendor/video-js.css" rel="stylesheet">
    <script src="<?php echo UNL_MediaHub_Controller::getURL(); ?>templates/iframe/js/vendor/video.js"></script>
    <?php if ($is_audio): ?>
        <script src="<?php echo UNL_MediaHub_Controller::getURL(); ?>templates/iframe/js/vendor/wavesurfer.min.js"></script>
        <script src="<?php echo UNL_MediaHub_Controller::getURL(); ?>templates/iframe/js/vendor/videojs.wavesurfer.min.js"></script>
    <?php endif; ?>
    <script src="<?php echo UNL_MediaHub_Controller::getURL(); ?>templates/iframe/js/vendor/videojs-panorama.v5.js"></script>
    <link href="<?php echo UNL_MediaHub_Controller::getURL(); ?>templates/iframe/js/vendor/videojs-panorama.min.css" rel="stylesheet">
    <script src="<?php echo UNL_MediaHub_Controller::getURL(); ?>templates/iframe/js/vendor/videojs-mediahub.js"></script>
    <!-- <script src="<?php echo UNL_MediaHub_Controller::getURL(); ?>templates/iframe/js/vendor/videojs-captions-toggle.js"></script> -->
    <link rel="stylesheet" href="<?php echo UNL_MediaHub_Controller::toAgnosticURL(UNL_MediaHub_Controller::$url); ?>templates/iframe/css/iframe.css?v=<?php echo UNL_MediaHub_Controller::getVersion() ?>" />
    
    <style>
        html, body {
            margin: 0px;
            height: 100%;
            background-color: #000;
        }
    </style>
</head>
<body>
    <?php echo $savvy->render($context->output); ?>
</body>
</html>
