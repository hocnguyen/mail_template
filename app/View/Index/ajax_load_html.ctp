<?php 
    if (0 < count($data)) {
        foreach ($data as $key => $value) {
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