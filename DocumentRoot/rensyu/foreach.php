<p><input type="radio" name="meal" value="和食">和食</p>
<p><input type="radio" name="meal" value="洋食">洋食</p>
<p><input type="radio" name="meal" value="中華">中華</p>

<?php
  $m = ["和食", "洋食", "中華"];
  foreach($m as $key => $value){
  ?>
  <p><input type="radio" name="meal" value="<?=$value?>"><?=$value?></p>

<?php 
}