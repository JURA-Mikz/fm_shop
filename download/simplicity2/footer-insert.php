<?php
//フッター部分に解析タグを挿入したいときはこのテンプレートに挿入
//子テーマのカスタマイズ部分を最小限に抑えたい場合に有効なテンプレートとなります。
//アクセス解析コードを挿入するにはanalytics.phpへの挿入を推奨
?>
<?php if (!is_user_logged_in()) :
//ログインユーザーをカウントしたくない場合は
//↓ここに挿入?>

<?php endif; ?>
<?php //ログインユーザーも含めてカウントする場合は以下に挿入 ?>

<script>
   jQuery(function(){
    jQuery(".cat-post-item a.cat-post-title").prepend('<i class="fa fa-thumbs-o-up"></i>');
  });
abc
</script>
