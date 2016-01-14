<?php

/**
 *
 * Layout default for administrator
 *
 * @package       app.View.Layout
 * @author        UTC.HocNV
 */

?>
<!DOCTYPE html>
<!--[if lt IE 7 ]> <html class="ie6"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie7"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie8"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html class=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>ONLY MINERALS メールマガジン生成システム</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo $this->webroot ?>css/normalize.css" media="all">
        <link rel="stylesheet" type="text/css" href="<?php echo $this->webroot ?>css/formhack.css" media="all">
        <link rel="stylesheet" type="text/css" href="<?php echo $this->webroot ?>css/style.css" media="all">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js" ></script>
        <script src="<?php echo $this->webroot ?>js/jquery.validate.min.js" ></script>
        <script src="<?php echo $this->webroot ?>js/messages_ja.js" ></script>
    </head>

    <body  >
        <?php echo $this->element('header'); ?>
        <?php echo $this->fetch('content'); ?>
        <?php  echo $this->element('footer'); ?>
    </body>
</html>
