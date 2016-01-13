<!DOCTYPE html>
<html lang="ja">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta charset="utf-8" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body style="color: #222; font-family: system, -apple-system, 'Helvetica Neue', 'Hiragino Sans', 'Hiragino Kaku Gothic ProN', Helvetica, '游ゴシック', Meiryo, sans-serif; font-weight: 200; letter-spacing: 1px;">
<p style="font-size: 0.7em; font-weight: 600; text-align: center;">
    <a href="http://www.ya-man.com/mail-magazine/latest-om.html" style="color: #222;">
        <?php echo nl2br($data['begin_note']) ?>
    </a>
</p>
<br />

<style type="text/css">
    h1,
    h2,
    h3,
    h4,
    h5,
    p,
    br {
        margin: 0;
        padding: 0;
    }
    a,
    a:link,
    a:visited {
        color: #008eb3;
        border: none;
        text-decoration: none;
    }
    a:hover,
    a:active {
        color: #ff086b;
        border: none;
        text-decoration: none;
    }
    a img {
        border: none;
    }
    b,
    em,
    strong {
        font-weight: 600;
    }
    .clearfix:after {
        content: "";
        display: block;
        clear: both;
    }

    /* Constrain email width for small screens */
    @media screen and (min-width: 320px) {
        table.container {
            width: 100% !important;
            max-width: 100% !important;
        }
    }
    @media screen and (min-width: 769px) {
        table.container {
            width: 720px !important;
            margin: 0 auto;
        }
    }
    @media screen and (min-width: 320px)
    and (max-width: 640px) {
        .p-img,
        .r-img {
            float: none !important;
            margin: 1em !important;
        }
        .f-img {
            float: none !important;
        }
        .p-img img,
        .f-img img {
            vertical-align: middle !important;
            width: 99% !important;
            max-width: 100% !important;
            height: auto !important;
        }
        .om-logo {
            text-align: center;
        }
    }
    @media screen and (min-width: 641px) {
        .p-img,
        .r-img {
            float: left !important;
            margin: 0 1em 1em 0 !important;
        }
        .f-img {
            float: left !important;
            margin-right: 1em !important;
        }
        .om-logo {
            text-align: left;
        }
    }

    @media screen and (min-width: 769px) {
        .grid table {
            width: 48%;
            float: left;
        }
        .grid table:first-child {
            margin-right: 4%;
        }
        .grid p.pc-none {
            display: none;
        }
    }
    @media screen and (max-width: 600px) {
        table.banner img {
            width: 99% !important;
            height: auto !important;
        }
    }
</style>


<table class="container" width="600" cellpadding="0" cellspacing="0" align="center" border="0" bgcolor="#fff" style="background-color: #fff;">
<tr>
<td>
<table cellpadding="0" cellspacing="0" border="0" width="99%" align="center">
    <tr>
        <td align="center"><a href="http://www.ya-man.com/"><?php echo $data['email_title']?></a></td>
    </tr>
</table>

<p style="line-height: 1;"><br /></p>

<table width="100%" align="center" cellpadding="0" cellspacing="0">
    <tr>
        <td valign="middle" style="margin: 0; padding: 0; border-top: 1px solid #dcd4cf; border-bottom: 1px solid #dcd4cf; vertical-align: middle;">
            <div class="clearfix" style="margin: 0.5em 0;">
                <?php
                $ext = '';
                $link = '#';
                if (isset($data['hiDpi1']) && isset($data['hiDpi_image_temp'])) {
                    $ext = 'data-toggle="modal" data-target="#myModal"';
                } else {
                    $link = 'http://ymn.cm/mail441';
                } ?>
                <p class="f-img" style="float: left; margin: 0; padding: 0; text-align: center;"  <?php echo $ext ?>>
                    <a href="<?php echo $link ?>">
                        <img src="<?php echo $data['image_temp'] ?>" width="262" height="175" alt="本日のメールマガジンは……" />
                    </a>
                </p>
                <br />
                <p class="om-logo"><img src="http://www.ya-man.com/images/common/onlyminerals-logo@2x.png" width="282" height="24" alt="オンリーミネラル" /></p>
                <h2 style="margin: 1rem; color: #7d554d; font-size: 1.05em; font-weight: 600;"><?php echo $data['begin_word_catch'] ?></h2>
                <p style="margin: 1rem 1rem 0; color: #7d554d; font-size: 0.95em;"> <?php echo nl2br($data['begin_theme_sentence']) ?></p>
            </div>
        </td>
    </tr>
    <tr>
        <td>
            &nbsp;<br />
        </td>
    </tr>
    <tr>
        <td>
            <p><?php echo nl2br($data['greeting_scene']) ?></p>
        </td>
    </tr>
    <tr>
        <td>
            &nbsp;<br />
        </td>
    </tr>
    <?php if (isset($data['emergency_notification'])) { ?>
        <tr>
            <td bgcolor="#fcc" style="color: #222; border: 1px solid #ccc; border-radius: 0.3rem;">
                <div style="margin: 1em;">
                    <h3 style="font-size: 1.4em; font-weight: 400; text-align: center;"><?php echo nl2br($data['announcements_title']) ?></h3>
                    <p><?php echo nl2br($data['announcements_sentence']); ?></p>
                    <br />
                </div>
            </td>
        </tr>
    <?php }?>
    <td>
        &nbsp;<br />
    </td>

    <tr>
        <td bgcolor="f4f4f4" style="color: #222; border: 1px solid #ccc; border-radius: 0.3rem;">
            <div style="margin: 1em;">
                <h3 style="font-size: 1.4em; font-weight: 400; text-align: center;"><?php echo nl2br($data['rewards_title']) ?></h3>
                <p><?php echo nl2br($data['rewards_sentence']); ?></p>
                <p><small style="font-weight: 600;">※ <?php echo $data['rewards_note'] ?></small></p>
                <br />
                <h4 style="font-size: 0.9em; font-weight: 600; text-align: right;"><?php echo nl2br($data['rewards_representation']) ?></h4>
            </div>
        </td>
    </tr>
</table>

<p style="line-height: 1;"><br />
    <br /></p>

<table width="100%" align="center" cellspacing="0">
    <tr>
        <td width="100%" style="border: 1px solid #ff6ea7; border-radius: 0.3rem;">
            <a href="<?php echo $data['rewards_link'] ?>" style="display: block; color: #ff6ea7;">
                <br />
                <h3 style="font-weight: 600; text-align: center;">キャンペーン商品はこちら</h3>
                <br />
            </a>
        </td>
    </tr>
</table>


<p style="line-height: 1;"><br />
    <br />
    <br /></p>
    <?php
    foreach ($data['product'] as $key=> $item) {
        if (isset($item['product_introduction'])) { ?>
            <table width="100%" align="center" cellpadding="0" cellspacing="0"  >
                <tr>
                    <td bgcolor="f4f4f4" style="border: 1px solid #ccc; border-radius: 0.3rem 0.3rem 0 0;">
                        <div style="padding: 0.8em;">
                            <a href="http://ymn.cm/j7137" style="display: block; color: #222;">
                                <h2 style="margin: 0; margin-bottom: 0.2em; padding: 0; font-size: 1.4em; font-weight: 100; line-height: 1.4;"><?php echo nl2br($item['product_description']) ?></h2>
                                <h3 style="margin: 0; padding: 0; font-size: 1.1em; font-weight: 600; line-height: 1.2;">
                                    <?php  echo nl2br($item['product_name'])?>
                                </h3>
                            </a>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="p-description" valign="top" style="border-right: 1px solid #ccc; border-left: 1px solid #ccc;">
                        <div style="margin: 1em;">
                            <?php
                            $link = '#';
                            $data_img ='';
                            $class= '';
                            if (isset($data['hiDpi1'])) {
                                $data_img = $item['product_image_hidpi'];
                                $class= 'image_product';
                            } else {
                                $link = 'http://ymn.cm/j7137';
                            } ?>
                            <p class="p-img <?php echo $class ?>" data-zoom="<?php echo $data_img ?>" style="float: left; margin: 0 1em 1em 0; text-align: center;">
                                <a href="<?php echo $link ?>">
                                    <img src="<?php echo $item['product_image']?>" width="300" height="300" alt="ミネラルプレストアイシャドウ" style="border: 1px solid #ccc; border-radius: 0.3rem;" />
                                </a>
                                <br />
                            </p>
                            <p><b style="color: #666"><?php echo nl2br($item['product_begin_word'] )?></b><br />
                                <br />
                                <?php echo nl2br($item['product_description_item'] )?>
                                <br /><br />
                                <small ><?php echo nl2br($item['product_note']) ?></small></p>
                            <p style="clear: both; font-size: 5%;">&nbsp;</p>
                        </div>
                    </td>
                </tr>
                <?php
                foreach($item['link'] as $key=>$link) {
                    if (isset($link['product_display'])) {
                        ?>
                        <tr>
                            <td style="border: 1px solid #7dcbcc; border-radius: 0 0 0.3rem 0.3rem;">
                                <a href="<?php echo $link['product_link'] ?>" style="display: block; color: #2bcacc;">
                                    <br style="margin: 0; padding: 0;" />
                                    <h4 style="font-size: 1.4em; font-weight: 200; text-align: center;"><?php echo $link['product_word'] ?></h4>
                                    <br style="margin: 0; padding: 0;" /></a>
                            </td>
                        </tr>
                        <?php
                            if ($key < (count($item['link']) - 1)) { ?>
                                <tr>
                                    <td style="border-right: 1px solid #ccc; border-left: 1px solid #ccc;">
                                        &nbsp;<br />
                                    </td>
                                </tr>
                        <?php  }
                        ?>

                    <?php } } ?>
            </table>
            <p style="line-height: 1;"><br />
                <br />
                <br /></p>
        <?php
        }
    } ?>

<?php if (isset($data['frame_ranking'])){  ?>
<table width="100%" align="center" cellpadding="0" cellspacing="0">
    <tr>
        <td width="1%" style="border-left: 5px solid #ff6ea7;">&nbsp;</td>
        <td>
            <br />
            <h3 style="font-weight: 400; text-align: left;">今週のランキング</h3>
        </td>
    </tr>
    <tr>
        <td width="1%" style="border-left: 5px solid #ff6ea7;">&nbsp;</td>
        <td>
            <p><?php echo nl2br($data['frame_index']) ?></p>
            <br />
        </td>
    </tr>
</table>

<p style="line-height: 1;"><br />
    <br /></p>
<?php
    foreach ($data['frame'] as $key=> $frame) {
        if ($key == 0) { ?>
            <table width="100%" align="center" cellpadding="0" cellspacing="0">
                <tr>
                    <td bgcolor="f4f4f4" style="border: 1px solid #ccc; border-radius: 0.3rem 0.3rem 0 0;">
                        <div style="padding: 0.8em;">
                            <a href="<?php echo $frame['link_url'] ?>" style="display: block; color: #222;">
                                <h3 style="margin: 0; padding: 0; font-size: 1.1em; font-weight: 600; line-height: 1.2;"><?php echo $frame['product_name'] ?></h3>
                            </a>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="p-description" valign="top" style="border-right: 1px solid #ccc; border-left: 1px solid #ccc;">
                        <div style="margin: 1em;">
                            <?php
                            $link = '#';
                            $data_img ='';
                            $class= '';
                            if (isset($data['hiDpi1'])) {
                                $data_img = $frame['image_hipdi'];
                                $class= 'image_product_frame';
                            } else {
                                $link = $frame['link_url'];
                            } ?>
                            <p class="r-img <?php echo $class ?>" data-zoom="<?php echo $data_img ?>" style="float: left; margin: 0 1em 1em 0; text-align: center;">
                                <a href="<?php echo $link ?>">
                                    <img src="<?php echo $frame['image'] ?>" width="150" height="150" alt="第1位 アクアリフト BBクリーム" style="border: 1px solid #ccc; border-radius: 0.3rem;" />
                                </a>
                            </p>
                            <p> <?php echo $frame['product_description'] ?></p>
                            <br />
                            <p style="clear: both; font-size: 5%;">&nbsp;</p>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td style="border: 1px solid #7dcbcc; border-radius: 0 0 0.3rem 0.3rem;">
                        <a href="<?php echo $frame['link_url'] ?>" style="display: block; color: #2bcacc;"><br style="margin: 0; padding: 0;" /><h4 style="font-size: 1.4em; font-weight: 200; text-align: center;"><?php echo $frame['link_text'] ?></h4><br style="margin: 0; padding: 0;" /></a>
                    </td>
                </tr>
            </table>
            <p style="line-height: 1;"><br />
                <br /></p>
    <?php  } else { ?>
            <?php if ($key == 1 || $key ==3) { echo '<div class="grid clearfix">'; } ?>
                <table width="100%" align="center" cellpadding="0" cellspacing="0">
                    <tr>
                        <td bgcolor="f4f4f4" style="border: 1px solid #ccc; border-radius: 0.3rem 0.3rem 0 0;">
                            <div style="padding: 0.8em;">
                                <a href="<?php echo $frame['link_url'] ?>" style="display: block; color: #222;">
                                    <h3 style="margin: 0; padding: 0; font-size: 1.1em; font-weight: 600; line-height: 1.2;"><?php echo $frame['product_name'] ?></h3>
                                </a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="p-description" valign="top" style="border-right: 1px solid #ccc; border-left: 1px solid #ccc;">
                            <div style="margin: 1em;">
                                <?php
                                $link = '#';
                                $data_img ='';
                                $class= '';
                                if (isset($data['hiDpi1'])) {
                                    $data_img = $frame['image_hipdi'];
                                    $class= 'image_product_frame';
                                } else {
                                    $link = $frame['link_url'];
                                } ?>
                                <p class="r-img <?php echo $class ?>" data-zoom="<?php echo $data_img ?>" style="float: left; margin: 0 1em 1em 0; text-align: center;">
                                    <a href="<?php echo  $link ?>">
                                        <img src="<?php echo $frame['image'] ?>" width="150" height="150" alt="第1位 アクアリフト BBクリーム" style="border: 1px solid #ccc; border-radius: 0.3rem;" />
                                    </a>
                                </p>
                                <p> <?php echo $frame['product_description'] ?></p>
                                <br />
                                <p style="clear: both; font-size: 5%;">&nbsp;</p>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td style="border: 1px solid #7dcbcc; border-radius: 0 0 0.3rem 0.3rem;">
                            <a href="<?php echo $frame['link_url'] ?>" style="display: block; color: #2bcacc;"><br style="margin: 0; padding: 0;" /><h4 style="font-size: 1.4em; font-weight: 200; text-align: center;"><?php echo $frame['link_text'] ?></h4><br style="margin: 0; padding: 0;" /></a>
                        </td>
                    </tr>
                </table>
            <?php if ($key ==1 || $key ==3) { ?>
                <p class="pc-none" style="line-height: 1;"><br />
                    <br /></p>
            <?php } ?>
            <?php if ($key == 2 || $key ==4) { echo ' </div>'; } ?>

    <?php    }
    }
?>
<p class="pc-none" style="line-height: 1;"><br />
    <br /></p>
<?php } ?>
<table align="center" cellspacing="0" class="banner">
<?php foreach ($data['social'] as $social) {
    if (!empty( $social['image_temp'])) {?>
        <tr>
            <td align="center">
                <a href="<?php echo $social['link'] ?>"><img src="<?php echo $social['image_temp'] ?>" alt="ヤーマンダイレクト公式Twitterアカウント" width="600" height="77" /></a>
            </td>
        </tr>
        <tr>
            <td><br /></td>
        </tr>
<?php } } ?>
</table>

<table width="100%" align="center" cellpadding="0" cellspacing="0">
    <tr>
        <td style="border: 3px solid #ff6685;">
            <div style="margin: 0.6em;">
                <h5 style="margin: 0 0 1em 0; padding: 0; font-size: 1em; font-weight: 400;">ご注意事項</h5>
                <ul style="margin: 0 0 0 1.5em; padding: 0;  color: #444; font-size: 0.8em;">
                    <?php
                        if (isset($data['note1_display'])) {
                            echo "<li>".$data['note1']."</li>";
                        }
                        if (isset($data['note2_display'])) {
                            echo "<li>".$data['note2']."</li>";
                        }
                        if (isset($data['note3_display'])) {
                            $note3 = str_replace('#CampaignNumber',$data['note3_1'],$data['note3']);
                            $note3 = str_replace('#CampaignPeriod',$data['note3_2'],$note3);
                            echo "<li>".$note3."</li>";
                        }
                        if (isset($data['note4_display'])) {
                            echo "<li>".$data['note4']."</li>";
                        }
                        if (isset($data['note5_display'])) {
                            echo "<li>".$data['note5']."</li>";
                        }
                        if (isset($data['note6_display'])) {
                            echo "<li>".$data['note6']."</li>";
                        }

                    ?>

                </ul>
            </div>
        </td>
    </tr>
</table>


<p style="line-height: 1;"><br />
    <br />
    <br /></p>


<table width="100%" align="center" cellpadding="0" cellspacing="0" class="banner">
    <tr>
        <td align="center">
            <a href="http://www.onlyminerals.jp/"><img src="http://www.ya-man.com/images/mail_magazine/common/2015/onlyminerals-jp@2x.png" alt="オンリーミネラル 公式ブランドサイト" width="600" height="77" /></a>
        </td>
    </tr>
</table>


<p style="line-height: 1;"><br />
    <br />
    <br /></p>


<table width="100%" align="center" cellpadding="0" cellspacing="0">
    <tr>
        <td><p>最後までご覧いただき、まことにありがとうございます。<br />
                今後ともヤーマン製品をご愛顧いただきますよう、よろしくお願い申し上げます。</p></td>
    </tr>
</table>


<p style="line-height: 1;"><br />
    <br /></p>


<table width="100%" align="center" cellpadding="0" cellspacing="0">
    <tr bgcolor="#f4f4f4">
        <td colspan="3" style="border: 1px solid #ccc; border-radius: 0.2rem;">
            <p style="margin: 1em; font-size: 0.85em;">この電子メールの発信元アドレスは配信専用です。本メールへの返信は確認できませんのでご了承ください。<br />
                本メールマガジンは電子メール配信をご希望いただいたヤーマンダイレクト会員のみなさまへお送りしています。<br />
                <br />
                ご不要の場合はマイページにログインしていただき、【お客さま情報の変更】より電子メール配信を解除してください。なお、配信解除のタイミングによっては数回程度配信が続く場合があります。あらかじめご了承ください。<br />
                <a href="https://www.ya-man.com/shop/index.php/module/Default/action/KaiinMenu">※マイページはこちらから</a> | <a href="http://www.ya-man.com/contact/y-direct.php">※ご意見・お問い合わせはこちらから</a><br />
                <br />
                新商品や会員限定ページも充実!<br />
                ヤーマンダイレクト<span style="letter-spacing: normal;">━━━</span> <a href="http://www.ya-man.com/">http://www.ya-man.com/</a><br />
                <br />
                【ヤーマン 公式直販サイト】ヤーマンダイレクト<br />
                運営 : ヤーマン株式会社 <br />
                〒135-0016 東京都江東区東陽2-4-2 新宮ビル</p>
        </td>
    </tr>
    <tr>
        <td colspan="3" style="color:#666; font-size: 70%;"><p style="margin-top: 2.5em;">Copyright &copy; YA-MAN Ltd. All rights reserved.</p></td>
    </tr>
</table>

<p style="line-height: 1;"><br />
    <br /></p>

</td>
</tr>
</table><!-- /main-container -->

<?php
if (isset($data['hiDpi1']) && isset($data['hiDpi_image_temp'])) {  ?>
    <!-- Modal image temp  -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <img style="width: 100%" src="<?php echo $data['image_temp_large'] ?>">
                </div>
            </div>
        </div>
    </div>
<?php }
?>
<!-- Modal image product  -->
<div class="modal fade" id="imgProduct" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">

            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function(){
        $(document).on('click','.image_product',function(){
            var data_img = $(this).data('zoom');
            var img = '<img style="width: 100%" src="'+data_img+'">';
            $('#imgProduct .modal-body').html(img);
            $('#imgProduct').modal('show')
        });

        $(document).on('click','.image_product_frame',function(){
            var data_img = $(this).data('zoom');
            var img = '<img style="width: 100%" src="'+data_img+'">';
            $('#imgProduct .modal-body').html(img);
            $('#imgProduct').modal('show')
        })
    })
</script>
</body>

</html>