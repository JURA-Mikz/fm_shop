<?php include 'header.php' ?>
<h1>メルマガ登録</h1>
<div class="row">

		<div>
				<p>当店の新商品やお得な情報を配信するメールマガジンの会員を募集しています。<br>ご希望の方は、下記フォームよりご登録をお願いします。</p>
				<ul>
					<li>必要事項を記入し、「登録する」をクリックしてください。</li>
					<li>個人情報は、メールマガジンの配信にのみ使用します。</li>
					<li>現在、登録特典として、当店のすべての商品にお使いいただける100円券を発行しています。</li>
				</ul>
				
				<form action="#">
					<p><label>お名前（必須）<br><input type="text" name="name" required></label></p>
					<p><label>メールアドレス（必須）<br><input type="email" name="mail" required></label></p>
					<p>洋菓子店でよく購入するものはなんですか？<br>
					<label class="checklabel"><input type="checkbox" name="buy" value="cake">ケーキ</label>
					<label class="checklabel"><input type="checkbox" name="buy" value="bake">焼き菓子</label></p>
					<p><label>ご意見・ご要望など<br><textarea name="content"></textarea></label></p>
					<p><input type="image" src="images/entry.png" alt="登録する"></p>
				</form>
		</div>

	<?php include 'footer.php' ?>