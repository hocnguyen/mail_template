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
        <title>Dashboard</title>
        <link rel="stylesheet" type="text/css" href="<?php echo $this->webroot ?>css/normalize.css" media="all">
        <link rel="stylesheet" type="text/css" href="<?php echo $this->webroot ?>css/formhack.css" media="all">
        <link rel="stylesheet" type="text/css" href="<?php echo $this->webroot ?>css/style.css" media="all">
    </head>

    <body >
        <?php echo $this->fetch('content'); ?>
    </body>
</html>
