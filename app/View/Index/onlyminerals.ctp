<article>

    <!-- 新規作成 -->
    <section>
        <p id="btn-create-new"><a href="/create_onlyminerals" title="ONLY MINERALS メールマガジン 新規作成">新規作成</a></p>
    </section>

    <!-- 作成したメールマガジン一覧 -->
    <section>
        <h2>作成したメールマガジン一覧</h2>

        <!-- 作成年月を選択 -->
        <form>
            <select id="list-time" style="float:left">
                <?php
                if (0 < count($data['dates'])) {
                    asort($data['dates'],1);
                    foreach ($data['dates'] as $key => $value) {
                        echo '<option '. (($key == date('Ym'))?'selected':'') . ' value="' . $key . '">' . substr($key, 0, 4) . '年' . substr($key, 4, 5) . '</option>' ;
                    }
                }else{
                    echo '<option>'. 'No result ' .'</option>';
                }
                ?>
            </select>
			<div style="float:left"><button id="read-file" style="margin: 10px 0;max-width: 300px;margin-left: 10px;">内容を引き継いで新規作成</button></div>
        </form>

        <!-- 作成したメールマガジンを選択 -->
        <ul id="mm-list" style="clear:both;">
            <?php
            if (0 < count($data['files'])) {
                foreach ($data['files'] as $key => $value) {
                    if($value != NULL){
                        $arr = explode("/", $value);
                        $last = $arr[count($arr) - 1];
                        ?>
                        <li>
                            <input type="radio" name="copy_yahman_mail" value="<?php echo $value; ?>" />
                            <a href="<?php echo $value; ?>" title="<?php echo substr($last, 0, -5); ?>"><?php echo substr($last, 0, -5);; ?></a>
                        </li>
                    <?php
                    }
                }
            }
            ?>
        </ul>

    </section>

</article>
<script type="text/javascript">
    $(document).ready(function(){
        $('#list-time').change(function(){
            var time = $(this).val();
            $.ajax({
                type: 'GET',
                async: false,
                url: "index/ajax_load_html?type=om&time="+ time,
                success: function(result){
                    $("#mm-list").html(result);
                }
            });
        });

        $('#read-file').click(function(){
            var copy_yahman_mail = $("input[name=copy_yahman_mail]:checked").val();
            if(typeof copy_yahman_mail != 'undefined'){
                $.ajax({
                    type: 'GET',
                    async: false,
                    url: "index/read_html?path="+ copy_yahman_mail,
                    success: function(result){
                        console.log(result);
                    }
                });
            }else{
                alert('Please select file');
            }
            return false;
        })
    })
</script>