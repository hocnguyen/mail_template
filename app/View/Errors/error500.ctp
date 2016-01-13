<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Errors
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
?>
<div class="wrapper" id="boxscroll">
    <div class="row">
        <div class="col-md-12">
            <div class="box_section box_text">
								<div class="text-center ms-alert">
										<p>申し訳ありません<br><br>お探しのページが見つかりませんでした。(Error:404)</p>
										<a href="<?php echo $this->webroot;?>" class="btn btn-large btn-entry"><?php echo __('TOPページへ戻る') ?></a>
								</div>
					</div>
				</div>
		</div>
</div>
