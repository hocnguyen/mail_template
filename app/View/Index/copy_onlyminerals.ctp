<style type="text/css">
    label .error {
        color: red;
    }
    .btn {
        background-color: #fff;
        border: 3px solid #ff5656;
        border-radius: 5px;
        color: #f33;
        display: block;
        font-weight: bold;
        margin: 0 auto;
        max-width: 200px;
        padding: 5px;
        text-decoration: none;
        float: right;
    }
    .wrapper_btn {
        width: 100%;
        display: table;
        text-align: right;
    }
    .add_product {
        margin-right: 25px;
    }
    .add_social {
        margin-bottom: -25px;
        margin-top: 5px;
    }
    .add_link {
        position: absolute;
        right: 25px;
        top: -62px;
    }
    .remove_link {
        float: left;
    }
    input,textarea {
        font-weight: normal;
    }

</style>
<article>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

<form action="/create_onlyminerals" method="post" id="create_only_mineral">

<!-- 保存用タイトル・配信日時など -->
<section>
    <label id="msg" style="color: blue; text-align: center"></label>
    <p>
        <label>
            <strong>保存用タイトル</strong>
            <input type="text" placeholder="保存用タイトル" value="<?php echo (isset($data['title'])?$data['title']:'') ?>" name="mineral[title]">
        </label>
    </p>
    <p>
        <label>
            <strong>配信日時（画像データ格納先フォルダ名:YYYYMMDD）</strong>
            <input type="text" placeholder="配信日時（画像データ格納先フォルダ名:YYYYMMDD）" value="<?php echo (isset($data['file_name'])?$data['file_name']:'') ?>"  name="mineral[file_name]">
        </label>
    </p>
    <p><label><strong>HiDPI</strong><input type="checkbox" <?php echo (isset($data['hiDpi1'])?'checked':'') ?>  name="mineral[hiDpi1]" >ON</label></p>
</section>

<section id="caution">
    <fieldset>
        <legend>冒頭イメージ画像設定  </legend>
        <p><label><strong>HiDPI</strong><input type="checkbox" <?php echo (isset($data['hiDpi_image_temp'])?'checked':'') ?> name="mineral[hiDpi_image_temp]" >ON</label></p>
        <p>
            <label>
                <strong>通常サイズ</strong>
                <input id="image_temp" type="file">
                <input type="hidden" name="mineral[image_temp]" value="<?php echo (isset($data['image_temp'])?$data['image_temp']:'') ?>">
            </label>
        </p>
        <p>
            <label>
                <strong>HiDPIサイズ</strong>
                <input id="image_temp_large" type="file">
                <input name="mineral[image_temp_large]" type="hidden" value="<?php echo (isset($data['image_temp_large'])?$data['image_temp_large']:'') ?>">
            </label>
        </p>
    </fieldset>
</section>

<!-- メールマガジン冒頭部 -->
<section>
    <p>
        <label>
            <strong>冒頭注記文言</strong>
            <textarea name="mineral[begin_note]"  placeholder="本メールマガジンが正しく表示されない場合はこちらをクリックしてウェブブラウザでご覧ください。"><?php echo (isset($data['begin_note'])?$data['begin_note']:'') ?></textarea>
        </label>
    </p>
    <p>
        <label>
            <strong>メールマガジンタイトル</strong>
            <input name="mineral[email_title]" value="<?php echo (isset($data['email_title'])?$data['email_title']:'') ?>" type="text" placeholder="メールマガジンタイトル">
        </label>
    </p>

    <p>
        <label>
            <strong>冒頭一言キャッチ</strong>
            <textarea name="mineral[begin_word_catch]" placeholder="本日のメールマガジンは…"><?php echo (isset($data['begin_word_catch'])?$data['begin_word_catch']:'') ?></textarea>
        </label>
    </p>

    <p>
        <label>
            <strong>冒頭テーマ文章</strong>
            <textarea name="mineral[begin_theme_sentence]" placeholder="冒頭テーマ文章を入力"><?php echo (isset($data['begin_theme_sentence'])?$data['begin_theme_sentence']:'') ?></textarea>
        </label>
    </p>

    <!-- 緊急告知枠 -->
    <section id="caution">
        <fieldset>
            <legend>緊急告知枠</legend>
            <p><label><strong>緊急告知枠</strong><input name="mineral[emergency_notification]" <?php echo (isset($data['emergency_notification'])?'checked':'') ?> type="checkbox">ON</label></p>
            <p><label><strong>告知タイトル</strong><input name="mineral[announcements_title]" value="<?php echo (isset($data['announcements_title'])?$data['announcements_title']:'') ?>" type="text" placeholder="告知タイトル"></label></p>
            <p><label><strong>告知文</strong><textarea name="mineral[announcements_sentence]" placeholder="告知文を入力"><?php echo (isset($data['announcements_sentence'])?$data['announcements_sentence']:'') ?></textarea></p>
        </fieldset>
    </section>

    <p><label><strong>冒頭挨拶文</strong><textarea name="mineral[greeting_scene]" placeholder="冒頭挨拶文を入力"><?php echo (isset($data['greeting_scene'])?$data['greeting_scene']:'') ?></textarea></p>
</section>

<!-- 特典・期限など特記事項 -->
<section>
    <fieldset>
        <legend>特典・期限など特記事項</legend>
        <p><label><strong>タイトル</strong><input name="mineral[rewards_title]" value="<?php echo (isset($data['rewards_title'])?$data['rewards_title']:'') ?>" type="text" placeholder="タイトル"></label></label></p>
        <p><label><strong>文章</strong><textarea name="mineral[rewards_sentence]" placeholder="文章"><?php echo (isset($data['rewards_sentence'])?$data['rewards_sentence']:'') ?></textarea></p>
        <p><label><strong>注記</strong><input name="mineral[rewards_note]" type="text" value="<?php echo (isset($data['rewards_note'])?$data['rewards_note']:'') ?>" placeholder="注記"></label></p>
        <p><label><strong>期限の表記</strong><textarea name="mineral[rewards_representation]" placeholder="期限の表記"><?php echo (isset($data['rewards_representation'])?$data['rewards_representation']:'') ?></textarea></p>
        <p>
            <label>
                <strong>「キャンペーン商品はこちら」ボタンに設定するリンク先</strong>
                <input name="mineral[rewards_link]" value="<?php echo (isset($data['rewards_link'])?$data['rewards_link']:'') ?>" type="url" placeholder="http:hogehoge.co.jp/">
            </label>
        </p>
    </fieldset>
</section>

<section>
    <?php
        foreach ($data['product'] as $key=> $product ) { ?>
            <div class="wrapper_product product1">
                <fieldset>
                    <legend class="legend">商品紹介枠：<?php echo ($key+1) ?></legend>
                    <p><label><strong class="title_strong">商品紹介枠：<?php echo ($key+1) ?></strong><input name="mineral[product][<?php echo $key ?>][product_introduction]" <?php echo (isset($product['product_introduction'])?'checked':'') ?> type="checkbox">ON</label></p>
                    <p><label><strong>商品説明（1行）</strong><input  value="<?php echo (isset($product['product_description'])?$product['product_description']:'') ?>" name="mineral[product][<?php echo $key ?>][product_description]" type="text" placeholder="商品説明（1行）"></label></label></p>
                    <p><label><strong>商品名（複数行可）</strong><textarea name="mineral[product][<?php echo $key ?>][product_name]" placeholder="商品名（複数行可）"><?php echo (isset($product['product_name'])?$product['product_name']:'') ?></textarea></p>
                    <p>
                        <label>
                            <strong>商品画像</strong>
                            <input class="product_image" type="file" data-rand="<?php echo $key ?>">
                            <input name="mineral[product][<?php echo $key ?>][product_image]" value="<?php echo (isset($product['product_image'])?$product['product_image']:'') ?>" type="hidden">
                        </label>
                    </p>
                    <p>
                        <label>
                            <strong>商品画像（HiDPI）</strong>
                            <span>※HiDPI設定OFF時は入力不要。</span><br />
                            <input class="product_image_hidpi" type="file" data-rand="<?php echo $key ?>">
                            <input name="mineral[product][<?php echo $key ?>][product_image_hidpi]" value="<?php echo (isset($product['product_image_hidpi'])?$product['product_image_hidpi']:'') ?>" type="hidden">
                        </label>
                    </p>
                    <p><label><strong>冒頭一言（1行）</strong><input name="mineral[product][<?php echo $key ?>][product_begin_word]" value="<?php echo (isset($product['product_begin_word'])?$product['product_begin_word']:'') ?>" type="text" placeholder="冒頭一言（1行）"></label></label></p>
                    <p><label><strong>商品説明</strong><span>※改行可。太字は&lt;b&gt;〜&lt;/b&gt;で囲む。</span><br /><textarea name="mineral[product][<?php echo $key ?>][product_description_item]" placeholder="商品説明"><?php echo (isset($product['product_description_item'])?$product['product_description_item']:'') ?></textarea></p>
                    <p><label><strong>注記文言（1行）</strong><input name="mineral[product][<?php echo $key ?>][product_note]"  value="<?php echo (isset($product['product_note'])?$product['product_note']:'') ?>" type="text" placeholder="注記文言（1行）"></label></p>
                </fieldset>
                <?php foreach ($product['link'] as $key_link => $link ) {
                $alphabet = array('0'=>'a','1'=>'b','2'=>'c','3'=>'d','4'=>'e');
                if ($key_link ==0) echo '<div class="wrapper_link"> ';    ?>
                        <fieldset>
                        <legend>商品へのリンク：<?php echo $alphabet[$key] ?></legend>
                        <p><label><strong>商品へのリンク：<?php echo $alphabet[$key] ?></strong><input name="mineral[product][<?php echo $key ?>][link][<?php echo $key_link ?>][product_display]" <?php echo (isset($link['product_display'])?'checked':'') ?> type="checkbox">ON</label></p>
                        <p><label><strong>文言</strong><input name="mineral[product][<?php echo $key ?>][link][<?php echo $key_link ?>][product_word]" value="<?php echo (isset($link['product_word'])?$link['product_word']:'') ?>" type="text" placeholder="いますぐ購入"></label></label></p>
                        <p><label class="custom_link_<?php echo $key ?>" style="margin-bottom: 3em"><strong>リンク先</strong><input value="<?php echo (isset($link['product_link'])?$link['product_link']:'') ?>" name="mineral[product][<?php echo $key ?>][link][<?php echo $key_link ?>][product_link]" type="url" placeholder="http:hogehoge.co.jp/"></label></p>
                    </fieldset>
                <?php  if ($key_link == (count($product['link']) +1 ))  { ?>
                        </div>
                        <p class="wrapper_btn" style="position: relative"><button type="button" data-rand="<?php echo $alphabet[$key+1] ?>" data-number="<?php echo count($data['product']) ?>" data-product="<?php echo $key ?>" class="btn add_link rand1">商品リンク枠追加ボタン</button></p>
                <?php     } } ?>
            </div>
    <?php    } ?>

    <p class="wrapper_btn"><button type="button" class="btn add_product">商品枠追加ボタン</button></p>
</section>
<!-- ランキング枠 -->
<section>
    <fieldset>
        <legend>ランキング枠</legend>
        <p><label><strong>ランキング枠</strong><input name="mineral[frame_ranking]"  <?php echo (isset($data['frame_ranking'])?'checked':'') ?> type="checkbox">ON</label></p>
        <p><label><strong>ランキング日付（1行）</strong><input name="mineral[frame_index]" value="<?php echo (isset($link['frame_index'])?$link['frame_index']:'') ?>" type="text" placeholder="ランキング日付（1行）"></label></label></p>
        <!-- ランキング 第1位 -->
        <div class="wrapper_frame">
            <?php foreach($data['frame'] as $key=> $frame) { ?>
            <fieldset >
                <legend>ランキング 第<?php echo ($key+1) ?>位</legend>
                <p><label><strong>第1位：商品名</strong><input name="mineral[frame][<?php echo $key ?>][product_name]" value="<?php echo (isset($frame['product_name'])?$frame['product_name']:'') ?>" type="text" placeholder="第1位：商品名"></label></p>
                <p>
                    <label>
                        <strong>第1位：商品画像</strong>
                        <input type="file" class="image_frame" data-rand="<?php echo $key ?>">
                        <input type="hidden" name="mineral[frame][<?php echo $key ?>][image]" value="<?php echo (isset($link['product_word'])?$link['product_word']:'') ?>">
                    </label>
                </p>
                <p>
                    <label>
                        <strong>第1位：商品画像（HiDPI）</strong>
                        <span>※HiDPI設定OFF時は入力不要。</span><br />
                        <input type="file" class="image_frame_hipdi" data-rand="<?php echo $key ?>">
                        <input type="hidden" name="mineral[frame][<?php echo $key ?>][image_hipdi]" value="<?php echo (isset($link['image_hipdi'])?$link['image_hipdi']:'') ?>" >
                    </label>
                </p>
                <p>
                    <label>
                        <strong>第1位：商品説明</strong>
                        <span>※改行可</span><br />
                        <textarea placeholder="第1位：商品説明" name="mineral[frame][<?php echo $key ?>][product_description]"><?php echo (isset($link['product_description'])?$link['product_description']:'') ?></textarea>
                    </label>
                </p>
                <h3>商品へのリンク</h3>
                <p><label><strong>文言</strong><input value="<?php echo (isset($link['link_text'])?$link['link_text']:'') ?>" name="mineral[frame][<?php echo $key ?>][link_text]" type="text" placeholder="いますぐ購入"></label></label></p>
                <p><label><strong>リンク先</strong><input type="url" name="mineral[frame][<?php echo $key ?>][link_url]" value="<?php echo (isset($link['link_url'])?$link['link_url']:'') ?>" placeholder="http:hogehoge.co.jp/"></label></p>
            </fieldset>
            <?php } ?>
        </div>
        <p class="wrapper_btn"><button type="button" class="btn add_frame">ランキング枠追</button></p>
    </fieldset>
</section>

<section id="caution">
    <p class="wrapper_btn"><button type="button" class="btn add_social">臨時枠追加</button></p>
    <div class="wrapper_social">
        <?php foreach($data['social'] as $key=> $social) {}?>
        <fieldset>
            <legend>SNS等リンク設定 </legend>
            <p><label><strong>臨時枠①</strong><input type="checkbox" <?php echo (isset($data['hiDpi1'])?'checked':'') ?> name="mineral[social][<?php echo $key ?>][hiDpi1]" >ON</label></p>
            <label>画像（通常サイズ 横1200px x 縦154px、HiDPIサイズ　横2400px x 縦308px)</label>

            <p>
                <label>
                    <strong>通常サイズ</strong>
                    <input class="image_social" type="file" data-rand="<?php echo $key ?>">
                    <input type="hidden" name="mineral[social][<?php echo $key ?>][image_temp]" value="<?php echo (isset($link['image_temp'])?$link['image_temp']:'') ?>">
                </label>
            </p>
            <p>
                <label>
                    <strong>HiDPIサイズ</strong>
                    <input class="image_social_large" type="file" data-rand="<?php echo $key ?>">
                    <input name="mineral[social][<?php echo $key ?>][image_temp_large]" type="hidden" value="<?php echo (isset($link['image_temp_large'])?$link['image_temp_large']:'') ?>">
                </label>
            </p>
            <p>
                <label>
                    <strong>リンク先</strong>
                    <input name="mineral[social][<?php echo $key ?>][link]" value="<?php echo (isset($link['link'])?$link['link']:'') ?>" type="url" placeholder="http://hogehoge.co.jp/">
                </label>
            </p>
        </fieldset>
    </div>
</section>

<!-- ご注意事項 -->
<section>
    <fieldset>
        <legend>ご注意事項</legend>
        <p><label><strong>臨時追記事項.1</strong><input <?php echo (isset($data['note1_display'])?'checked':'') ?> name="mineral[note1_display]" type="checkbox">ON</label></p>
        <p><label><input type="text" name="mineral[note1]" value="<?php echo (isset($link['link'])?$link['note1']:'') ?>" placeholder="臨時追記事項.1"></label></label></p>
        <p><label><strong>臨時追記事項.2</strong><input <?php echo (isset($data['note2_display'])?'checked':'') ?> name="mineral[note2_display]" type="checkbox">ON</label></p>
        <p><label><input type="text" name="mineral[note2]" value="<?php echo (isset($link['link'])?$link['note2']:'') ?>" placeholder="臨時追記事項.2"></label></label></p>
        <p><label><strong>臨時追記事項.3</strong><input <?php echo (isset($data['note3_display'])?'checked':'') ?> name="mineral[note3_display]" type="checkbox">ON</label></p>
        <p><label><input type="text" name="mineral[note3]" value="<?php echo (isset($link['link'])?$link['note3']:'') ?>" placeholder="臨時追記事項.3"></label></label></p>
        <p><label><strong>キャンペーン番号</strong><input value="<?php echo (isset($link['link'])?$link['note3_1']:'') ?>" name="mineral[note3_1]" type="text" placeholder="キャンペーン番号"></label></label></p>
        <p><label><strong>キャンペーン有効期限</strong><input value="<?php echo (isset($link['link'])?$link['note3_2']:'') ?>" name="mineral[note3_2]" type="text" placeholder="キャンペーン有効期限"></label></label></p>
        <p><label><strong>臨時追記事項.4</strong><input <?php echo (isset($data['note4_display'])?'checked':'') ?> name="mineral[note4_display]" type="checkbox">ON</label></p>
        <p><label><input type="text" name="mineral[note4]" value="<?php echo (isset($link['link'])?$link['note4']:'') ?>" placeholder="臨時追記事項.4"></label></label></p>
        <p><label><strong>臨時追記事項.5</strong><input <?php echo (isset($data['note5_display'])?'checked':'') ?> name="mineral[note5_display]" type="checkbox">ON</label></p>
        <p><label><input type="text" name="mineral[note5]" value="<?php echo (isset($link['link'])?$link['note5']:'') ?>" placeholder="臨時追記事項.5"></label></label></p>
        <p><label><strong>臨時追記事項.6</strong><input <?php echo (isset($data['note6_display'])?'checked':'') ?> name="mineral[note6_display]" type="checkbox">ON</label></p>
        <p><label><input type="text" name="mineral[note6]" value="<?php echo (isset($link['link'])?$link['note6']:'') ?>" placeholder="臨時追記事項.6"></label></label></p>
    </fieldset>
</section>



<!-- 送信ボタンなど -->
<div id="submit-btn">
    <input type="button" value="プレビュー" id="preview">
    <input type="button" value="保存" id="draft">
    <input type="submit" value="HTML生成">
</div>

<!-- 内容クリア・削除 -->
<div id="del-btn">
    <input type="button" id="clear" value="内容クリア">
    <input type="button" id="delete" value="削除">
</div>

</form>

<!-- トップページへ戻る -->
<p id="btn-return"><a href="#" onclick="window.history.go(-1); return false;" title="トップページへ戻る">トップページへ戻る</a></p>

</article>
<script type="text/javascript">
    $(document).ready(function(){
        $("#create_only_mineral").validate({
            rules: {
                'mineral[title]': "required",
                'mineral[file_name]': {
                    required: true,
                    datetime: true
                }
            }
        });
        $.validator.addMethod(
            "datetime",
            function(value, element, regexp) {
                var date_regex = /^[0-9]{4}[0-1][0-9][0-3][0-9]$/ ;
                return date_regex.test(value);
            },
            "Please check your format date ."
        );

        $("#image_temp").on('change',function(){
            if ( this.files && this.files[0] ) {
                var FR = new FileReader();
                FR.onload = function(e) {
                    $('input[name="mineral[image_temp]"]').val(e.target.result );
                };
                FR.readAsDataURL(this.files[0]);
            }
        });
        $("#image_temp_large").on('change',function(){
            if ( this.files && this.files[0] ) {
                var FR = new FileReader();
                FR.onload = function(e) {
                    $('input[name="mineral[image_temp_large]"]').val(e.target.result );
                };
                FR.readAsDataURL(this.files[0]);
            }
        });

        $(document).on('change','.product_image',function(){
            var rand = $(this).data('rand');
            if ( this.files && this.files[0] ) {
                var FR = new FileReader();
                FR.onload = function(e) {
                    $('input[name="mineral[product]['+rand+'][product_image]"]').val(e.target.result );
                };
                FR.readAsDataURL(this.files[0]);
            }
        });

        $(document).on('change','.product_image_hidpi',function(){
            var rand = $(this).data('rand');
            if ( this.files && this.files[0] ) {
                var FR = new FileReader();
                FR.onload = function(e) {
                    $('input[name="mineral[product]['+rand+'][product_image_hidpi]"]').val(e.target.result );
                };
                FR.readAsDataURL(this.files[0]);
            }
        });

        $(document).on('change','.image_frame',function(){
            var rand = $(this).data('rand');
            if ( this.files && this.files[0] ) {
                var FR = new FileReader();
                FR.onload = function(e) {
                    $('input[name="mineral[frame]['+rand+'][image]"]').val(e.target.result );
                };
                FR.readAsDataURL(this.files[0]);
            }
        });

        $(document).on('change','.image_frame_hipdi',function(){
            var rand = $(this).data('rand');
            if ( this.files && this.files[0] ) {
                var FR = new FileReader();
                FR.onload = function(e) {
                    $('input[name="mineral[frame]['+rand+'][image_hipdi]"]').val(e.target.result );
                };
                FR.readAsDataURL(this.files[0]);
            }
        });

        $(document).on('change','.image_social',function(){
            var rand = $(this).data('rand');
            if ( this.files && this.files[0] ) {
                var FR = new FileReader();
                FR.onload = function(e) {
                    $('input[name="mineral[social]['+rand+'][image_temp]"]').val(e.target.result );
                };
                FR.readAsDataURL(this.files[0]);
            }
        });

        $(document).on('change','.image_social_large',function(){
            var rand = $(this).data('rand');
            if ( this.files && this.files[0] ) {
                var FR = new FileReader();
                FR.onload = function(e) {
                    $('input[name="mineral[social]['+rand+'][image_temp_large]"]').val(e.target.result );
                };
                FR.readAsDataURL(this.files[0]);
            }
        });

        $(document).on('click','.remove_link',function(){
            $(this).closest('fieldset').remove();
        });

        $(document).on('click','.add_link',function(){
            var rand = $(this).data('rand');
            var number = $(this).data('number');
            var product = $(this).data('product');
            var count_wrapper = parseInt($(this).closest('.wrapper_product').find('.wrapper_link fieldset').length);
            if (count_wrapper < 5) {
                var html = '<fieldset> <legend>商品へのリンク：'+rand+'</legend>';
                html+= '<p><label><strong>商品へのリンク：'+rand+'</strong><input name="mineral[product]['+product+'][link]['+number+'][product_display]" type="checkbox">ON</label></p>';
                html+= '<p><label><strong>文言</strong><input name="mineral[product]['+product+'][link]['+number+'][product_word]" type="text" placeholder="いますぐ購入"></label></label></p>';
                html+= '<p><label class="custom_link_'+number+'" style="margin-bottom: 3em"><strong>リンク先</strong><input name="mineral[product]['+product+'][link]['+number+'][product_link]" type="url" placeholder="http:hogehoge.co.jp/"></label></p>';
                html+= '<button type="button"  class="btn remove_link "> 削除</button></fieldset> ';
                $(this).parent().prev().append(html);
                $(this).data('number',(number+1));
                var next_leter = rand.substring(0,rand.length-1)+String.fromCharCode(rand.charCodeAt(rand.length-1)+1);
                $(this).data('rand',next_leter);
            }

        });
        // event add frame
        $('.add_frame').click(function(){
            var number = parseInt($('.wrapper_frame fieldset').length);
            if (number <= 4) {
                var html = '<fieldset ><legend>ランキング 第'+(number+1)+'位</legend><p><label><strong>第'+(number+1)+'位：商品名</strong>';
                html+= '<input name="mineral[frame]['+number+'][product_name]" type="text" placeholder="第'+(number+1)+'位：商品名"></label></p>';
                html+= '<p><label> <strong>第1位：商品画像</strong><input type="file" class="image_frame" data-rand="'+number+'">';
                html+= '<input type="hidden" name="mineral[frame]['+number+'][image]" value="">';
                html+= '</label></p><p><label><strong>第1位：商品画像（HiDPI）</strong><span>※HiDPI設定OFF時は入力不要。</span><br />';
                html+= '<input type="file" class="image_frame_hipdi" data-rand="'+number+'" >';
                html+= '<input type="hidden" name="mineral[frame]['+number+'][image_hipdi]" >';
                html+= '</label></p><p><label><strong>第1位：商品説明</strong><span>※改行可</span><br />';
                html+= '<textarea placeholder="第1位：商品説明" name="mineral[frame]['+number+'][product_description]"></textarea>';
                html+= '</label></p><h3>商品へのリンク</h3><p><label><strong>文言</strong>';
                html+= '<input name="mineral[frame]['+number+'][link_text]" type="text" placeholder="いますぐ購入"></label></label>';
                html+= '</p><p><label><strong>リンク先</strong><input type="url" name="mineral[frame]['+number+'][link_url]" placeholder="http:hogehoge.co.jp/"></label></p></fieldset>';
                $('.wrapper_frame').append(html);
            }

        });
        // event add social
        $('.add_social').click(function(){
            var real_number = parseInt($('.wrapper_social fieldset').length);
            if (real_number <=2) {
                if (real_number ==1) {
                    var text = '臨時枠②';
                } else {
                    var text = '臨時枠③';
                }
                var html = '<fieldset id="social_'+real_number+'"><legend>SNS等リンク設定 </legend>';
                html+= '<p><label><strong>'+text+'</strong><input type="checkbox" name="mineral[social]['+real_number+'][hiDpi1]" >ON</label></p>';
                html+= '<label>画像（通常サイズ 横1200px x 縦154px、HiDPIサイズ　横2400px x 縦308px)</label>';
                html+= '<p><label><strong>通常サイズ</strong><input class="image_social" type="file" data-rand="'+real_number+'">';
                html+= '<input type="hidden" name="mineral[social]['+real_number+'][image_temp]" value="">';
                html+= '</label></p><p><label><strong>HiDPIサイズ</strong><input data-rand="'+real_number+'" class="image_social_large" type="file">';
                html+= '<input name="mineral[social]['+real_number+'][image_temp_large]" type="hidden"> </label>';
                html+= '</p><p><label><strong>リンク先</strong><input name="mineral[social]['+real_number+'][link]" type="url" placeholder="http://hogehoge.co.jp/">';
                html+= '</label></p></fieldset>';
                $('.wrapper_social').append(html);
                window.location.hash = 'social_'+real_number;
            }

        });

        // event add product
        $('.add_product').click(function(){
            var count_wrapper = parseInt($('.wrapper_product').length);
            if (count_wrapper <=9 ) {
                var real_product = count_wrapper + 1;
                var html = '<div id="product'+real_product+'" class="wrapper_product product'+real_product+'">';
                html+= '<fieldset><legend class="legend">商品紹介枠：'+real_product+'</legend>';
                html+= '<p><label><strong class="title_strong">商品紹介枠：'+real_product+'</strong><input name="mineral[product]['+count_wrapper+'][product_introduction]" type="checkbox">ON</label></p>';
                html+= '<p><label><strong>商品説明（1行）</strong><input  name="mineral[product]['+count_wrapper+'][product_description]" type="text" placeholder="商品説明（1行）"></label></label></p>';
                html+= '<p><label><strong>商品名（複数行可）</strong><textarea name="mineral[product]['+count_wrapper+'][product_name]" placeholder="商品名（複数行可）"></textarea></p>';
                html+= '<p> <label><strong>商品画像</strong><input data-rand="1" class="product_image" type="file">';
                html+= '<input name="mineral[product]['+count_wrapper+'][product_image]" type="hidden"> </label></p><p><label>';
                html+= '<strong>商品画像（HiDPI）</strong><span>※HiDPI設定OFF時は入力不要。</span><br />';
                html+= '<input class="product_image_hidpi" type="file" data-rand="'+count_wrapper+'"> <input name="mineral[product]['+count_wrapper+'][product_image_hidpi]" type="hidden">';
                html+= '</label> </p><p><label><strong>冒頭一言（1行）</strong><input name="mineral[product]['+count_wrapper+'][product_begin_word]" type="text" placeholder="冒頭一言（1行）"></label></label></p>';
                html+= '<p><label><strong>商品説明</strong><span>※改行可。太字は&lt;b&gt;〜&lt;/b&gt;で囲む。</span><br />';
                html+= '<textarea name="mineral[product]['+count_wrapper+'][product_description_item]" placeholder="商品説明"></textarea></p>';
                html+= '<p><label><strong>注記文言（1行）</strong><input name="mineral[product]['+count_wrapper+'][product_note]"  type="text" placeholder="注記文言（1行）"></label></p>';
                html+= '</fieldset> <div class="wrapper_link"> <fieldset><legend>商品へのリンク：a</legend><p><label><strong>商品へのリンク：a</strong>';
                html+= '<input name="mineral[product]['+count_wrapper+'][link][0][product_display]" type="checkbox">ON</label></p>';
                html+= '<p><label><strong>文言</strong><input name="mineral[product]['+count_wrapper+'][link][0][product_word]" type="text" placeholder="いますぐ購入"></label></label></p>';
                html+= '<p><label style="margin-bottom: 3em"><strong>リンク先</strong><input name="mineral[product]['+count_wrapper+'][link][0][product_link]" type="url" placeholder="http:hogehoge.co.jp/"></label></p>';
                html+= '</fieldset></div><p class="wrapper_btn" style="position: relative"><button type="button" data-rand="b" data-number="1" data-product="'+count_wrapper+'" class="btn add_link ">商品リンク枠追加ボタン</button></p></div>';

                $(this).parent().before(html);
            }
        });

        // event save draft html
        $('#draft').click(function(){
            if ($('form').valid()){
                var data = $('form').serialize();
                $.ajax({
                    url: 'index/save_draft',
                    data:data,
                    processData: false,
                    type: 'POST',
                    success: function(data){
                        $('#msg').html('Save draft successfull');
                        setTimeout(function(){$('#msg').html('');},3000);
                    }
                });
            }
            window.scrollTo(0, 0);

        });

        $('#clear').click(function(){
            $('#clearData').modal('show');
        });

        $('#delete').click(function(){
            $('#deleteData').modal('show');
        });

        $('#yes_clear').click(function(){
            document.getElementById("create_only_mineral").reset();
            $('#clearData').modal('hide');
        });

        $('#yes_delete').click(function(){
            window.location.href = '/onlyminerals'
        });

        $('#preview').click(function(){
            if ($('form').valid()) {
                $('form').attr('target','_blank');
                $('form').attr('action','/index/preview');
                $('form').submit();
                $('form').removeAttr('target');
                $('form').attr('action','/create_onlyminerals');
            }
            window.scrollTo(0, 0);
        });
    });
</script>

<!-- Modal confirm  -->
<div class="modal fade" id="clearData" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Warning</h4>
            </div>
            <div class="modal-body">
                <p>作成中内容を保存されていません。本当にクリアしてもよろしいでしょうか。</p>
            </div>
            <div class="modal-footer">
                <div  class="btn btn-default" data-dismiss="modal">いいえ</div>
                <div style="margin-right: 10px" id="yes_clear" class="btn btn-primary">はい</div>
            </div>
        </div>
    </div>
</div>

<!-- Modal confirm  -->
<div class="modal fade" id="deleteData" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Warning</h4>
            </div>
            <div class="modal-body">
                <p>作成中内容を保存されていません。本当に削除してもよろしいでしょうか</p>
            </div>
            <div class="modal-footer">
                <div  class="btn btn-default" data-dismiss="modal">いいえ</div>
                <div style="margin-right: 10px" id="yes_delete" class="btn btn-primary">はい</div>
            </div>
        </div>
    </div>
</div>