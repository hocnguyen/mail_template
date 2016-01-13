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

</style>
<article>

<form action="" method="post" id="create_only_mineral">

<!-- 保存用タイトル・配信日時など -->
<section>
    <label id="msg" style="color: blue; text-align: center"></label>
    <p>
        <label>
            <strong>保存用タイトル</strong>
            <input type="text" placeholder="保存用タイトル" name="mineral[title]">
        </label>
    </p>
    <p>
        <label>
            <strong>配信日時（画像データ格納先フォルダ名:YYYYMMDD）</strong>
            <input type="text" placeholder="配信日時（画像データ格納先フォルダ名:YYYYMMDD）" name="mineral[file_name]">
        </label>
    </p>
    <p><label><strong>HiDPI</strong><input type="checkbox" name="mineral[hiDpi1]" >ON</label></p>
</section>

<section id="caution">
    <fieldset>
        <legend>冒頭イメージ画像設定  </legend>
        <p><label><strong>HiDPI</strong><input type="checkbox" name="mineral[hiDpi_image_temp]" >ON</label></p>
        <p>
            <label>
                <strong>通常サイズ</strong>
                <input id="image_temp" type="file">
                <input type="hidden" name="mineral[image_temp]" value="">
            </label>
        </p>
        <p>
            <label>
                <strong>HiDPIサイズ</strong>
                <input id="image_temp_large" type="file">
                <input name="mineral[image_temp_large]" type="hidden">
            </label>
        </p>
    </fieldset>
</section>

<!-- メールマガジン冒頭部 -->
<section>
    <p>
        <label>
            <strong>冒頭注記文言</strong>
            <textarea name="mineral[begin_note]" placeholder="本メールマガジンが正しく表示されない場合はこちらをクリックしてウェブブラウザでご覧ください。"></textarea>
        </label>
    </p>
    <p>
        <label>
            <strong>メールマガジンタイトル</strong>
            <input name="mineral[email_title]" type="text" placeholder="メールマガジンタイトル">
        </label>
    </p>

    <p>
        <label>
            <strong>冒頭一言キャッチ</strong>
            <textarea name="mineral[begin_word_catch]" placeholder="本日のメールマガジンは…"></textarea>
        </label>
    </p>

    <p>
        <label>
            <strong>冒頭テーマ文章</strong>
            <textarea name="mineral[begin_theme_sentence]" placeholder="冒頭テーマ文章を入力"></textarea>
        </label>
    </p>

    <!-- 緊急告知枠 -->
    <section id="caution">
        <fieldset>
            <legend>緊急告知枠</legend>
            <p><label><strong>緊急告知枠</strong><input name="mineral[emergency_notification]" type="checkbox">ON</label></p>
            <p><label><strong>告知タイトル</strong><input name="mineral[announcements_title]" type="text" placeholder="告知タイトル"></label></p>
            <p><label><strong>告知文</strong><textarea name="mineral[announcements_sentence]" placeholder="告知文を入力"></textarea></p>
        </fieldset>
    </section>

    <p><label><strong>冒頭挨拶文</strong><textarea name="mineral[greeting_scene]" placeholder="冒頭挨拶文を入力"></textarea></p>
</section>

<!-- 特典・期限など特記事項 -->
<section>
    <fieldset>
        <legend>特典・期限など特記事項</legend>
        <p><label><strong>タイトル</strong><input name="mineral[rewards_title]" type="text" placeholder="タイトル"></label></label></p>
        <p><label><strong>文章</strong><textarea name="mineral[rewards_sentence]" placeholder="文章"></textarea></p>
        <p><label><strong>注記</strong><input name="mineral[rewards_note]" type="text" placeholder="注記"></label></p>
        <p><label><strong>期限の表記</strong><textarea name="mineral[rewards_representation]" placeholder="期限の表記"></textarea></p>
        <p>
            <label>
                <strong>「キャンペーン商品はこちら」ボタンに設定するリンク先</strong>
                <input name="mineral[rewards_link]" type="url" placeholder="http:hogehoge.co.jp/">
            </label>
        </p>
    </fieldset>
</section>

<section>
    <div class="wrapper_product product1">
        <fieldset>
            <legend class="legend">商品紹介枠：1</legend>
            <p><label><strong class="title_strong">商品紹介枠：1</strong><input name="mineral[product][0][product_introduction]" type="checkbox">ON</label></p>
            <p><label><strong>商品説明（1行）</strong><input  name="mineral[product][0][product_description]" type="text" placeholder="商品説明（1行）"></label></label></p>
            <p><label><strong>商品名（複数行可）</strong><textarea name="mineral[product][0][product_name]" placeholder="商品名（複数行可）"></textarea></p>
            <p>
                <label>
                    <strong>商品画像</strong>
                    <input class="product_image" type="file" data-rand="0">
                    <input name="mineral[product][0][product_image]" type="hidden">
                </label>
            </p>
            <p>
                <label>
                    <strong>商品画像（HiDPI）</strong>
                    <span>※HiDPI設定OFF時は入力不要。</span><br />
                    <input class="product_image_hidpi" type="file" data-rand="0">
                    <input name="mineral[product][0][product_image_hidpi]" type="hidden">
                </label>
            </p>
            <p><label><strong>冒頭一言（1行）</strong><input name="mineral[product][0][product_begin_word]" type="text" placeholder="冒頭一言（1行）"></label></label></p>
            <p><label><strong>商品説明</strong><span>※改行可。太字は&lt;b&gt;〜&lt;/b&gt;で囲む。</span><br /><textarea name="mineral[product][0][product_description_item]" placeholder="商品説明"></textarea></p>
            <p><label><strong>注記文言（1行）</strong><input name="mineral[product][0][product_note]"  type="text" placeholder="注記文言（1行）"></label></p>
        </fieldset>
        <div class="wrapper_link">
            <fieldset>
                <legend>商品へのリンク：a</legend>
                <p><label><strong>商品へのリンク：a</strong><input name="mineral[product][0][link][0][product_display]" type="checkbox">ON</label></p>
                <p><label><strong>文言</strong><input name="mineral[product][0][link][0][product_word]" type="text" placeholder="いますぐ購入"></label></label></p>
                <p><label class="custom_link_0" style="margin-bottom: 3em"><strong>リンク先</strong><input name="mineral[product][0][link][0][product_link]" type="url" placeholder="http:hogehoge.co.jp/"></label></p>
            </fieldset>
        </div>
        <p class="wrapper_btn" style="position: relative"><button type="button" data-rand="b" data-number="1" data-product="0" class="btn add_link rand1">商品リンク枠追加ボタン</button></p>
    </div>
    <p class="wrapper_btn"><button type="button" class="btn add_product">商品枠追加ボタン</button></p>
</section>
<!-- ランキング枠 -->
<section>
    <fieldset>
        <legend>ランキング枠</legend>
        <p><label><strong>ランキング枠</strong><input name="mineral[frame_ranking]" type="checkbox">ON</label></p>
        <p><label><strong>ランキング日付（1行）</strong><input name="mineral[frame_index]" type="text" placeholder="ランキング日付（1行）"></label></label></p>
        <!-- ランキング 第1位 -->
        <div class="wrapper_frame">
            <fieldset >
                <legend>ランキング 第1位</legend>
                <p><label><strong>第1位：商品名</strong><input name="mineral[frame][0][product_name]" type="text" placeholder="第1位：商品名"></label></p>
                <p>
                    <label>
                        <strong>第1位：商品画像</strong>
                        <input type="file" class="image_frame" data-rand="0">
                        <input type="hidden" name="mineral[frame][0][image]" value="">
                    </label>
                </p>
                <p>
                    <label>
                        <strong>第1位：商品画像（HiDPI）</strong>
                        <span>※HiDPI設定OFF時は入力不要。</span><br />
                        <input type="file" class="image_frame_hipdi" data-rand="0">
                        <input type="hidden" name="mineral[frame][0][image_hipdi]" >
                    </label>
                </p>
                <p>
                    <label>
                        <strong>第1位：商品説明</strong>
                        <span>※改行可</span><br />
                        <textarea placeholder="第1位：商品説明" name="mineral[frame][0][product_description]"></textarea>
                    </label>
                </p>
                <h3>商品へのリンク</h3>
                <p><label><strong>文言</strong><input name="mineral[frame][0][link_text]" type="text" placeholder="いますぐ購入"></label></label></p>
                <p><label><strong>リンク先</strong><input type="url" name="mineral[frame][0][link_url]" placeholder="http:hogehoge.co.jp/"></label></p>
            </fieldset>
        </div>
        <p class="wrapper_btn"><button type="button" class="btn add_frame">ランキング枠追</button></p>
    </fieldset>
</section>

<section id="caution">
    <p class="wrapper_btn"><button type="button" class="btn add_social">臨時枠追加</button></p>
    <div class="wrapper_social">
        <fieldset>
            <legend>SNS等リンク設定 </legend>
            <p><label><strong>臨時枠①</strong><input type="checkbox" name="mineral[social][0][hiDpi1]" >ON</label></p>
            <label>画像（通常サイズ 横1200px x 縦154px、HiDPIサイズ　横2400px x 縦308px)</label>

            <p>
                <label>
                    <strong>通常サイズ</strong>
                    <input class="image_social" type="file" data-rand="0">
                    <input type="hidden" name="mineral[social][0][image_temp]" value="">
                </label>
            </p>
            <p>
                <label>
                    <strong>HiDPIサイズ</strong>
                    <input class="image_social_large" type="file" data-rand="0">
                    <input name="mineral[social][0][image_temp_large]" type="hidden" value="">
                </label>
            </p>
            <p>
                <label>
                    <strong>リンク先</strong>
                    <input name="mineral[social][0][link]" type="url" placeholder="http://hogehoge.co.jp/">
                </label>
            </p>
        </fieldset>
    </div>
</section>

<!-- ご注意事項 -->
<section>
    <fieldset>
        <legend>ご注意事項</legend>
        <p><label><strong>臨時追記事項.1</strong><input name="mineral[note1_display]" type="checkbox">ON</label></p>
        <p><label><input type="text" name="mineral[note1]"placeholder="臨時追記事項.1"></label></label></p>
        <p><label><strong>臨時追記事項.2</strong><input name="mineral[note2_display]" type="checkbox">ON</label></p>
        <p><label><input type="text" name="mineral[note2]" placeholder="臨時追記事項.2"></label></label></p>
        <p><label><strong>臨時追記事項.3</strong><input name="mineral[note3_display]" type="checkbox">ON</label></p>
        <p><label><input type="text" name="mineral[note3]" placeholder="臨時追記事項.3"></label></label></p>
        <p><label><strong>キャンペーン番号</strong><input name="mineral[note3_1]" type="text" placeholder="キャンペーン番号"></label></label></p>
        <p><label><strong>キャンペーン有効期限</strong><input name="mineral[note3_2]" type="text" placeholder="キャンペーン有効期限"></label></label></p>
        <p><label><strong>臨時追記事項.4</strong><input name="mineral[note4_display]" type="checkbox">ON</label></p>
        <p><label><input type="text" name="mineral[note4]" placeholder="臨時追記事項.4"></label></label></p>
        <p><label><strong>臨時追記事項.5</strong><input name="mineral[note5_display]" type="checkbox">ON</label></p>
        <p><label><input type="text" name="mineral[note5]" placeholder="臨時追記事項.5"></label></label></p>
        <p><label><strong>臨時追記事項.6</strong><input name="mineral[note6_display]" type="checkbox">ON</label></p>
        <p><label><input type="text" name="mineral[note6]" placeholder="臨時追記事項.6"></label></label></p>
    </fieldset>
</section>



<!-- 送信ボタンなど -->
<div id="submit-btn">
    <input type="button" value="プレビュー">
    <input type="button" value="保存" id="draft">
    <input type="submit" value="HTML生成">
</div>

<!-- 内容クリア・削除 -->
<div id="del-btn">
    <input type="reset" value="内容クリア">
    <a href="/onlyminerals"><input type="button" value="削除"></a>
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

        $(document).on('click','.image_social_large',function(){
            
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
    });
</script>