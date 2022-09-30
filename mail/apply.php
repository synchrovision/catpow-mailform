<?php
$to="{$form->values['name']}<{$form->values['email']}>";
$subject=$form->values['name']."様 よりお問合せ";
?>
下記の内容でお問い合わせがありました。

<?php foreach($form->config['inputs'] as $name=>$conf): ?>
<?=$conf['label']?>：<?=$form->values[$name]?> 
<?php endforeach; ?>

送信日時：<?=date("Y/m/d (D) H:i:s",time())?> 
送信者のIPアドレス：<?=$_SERVER["REMOTE_ADDR"]?> 
問い合わせのページURL：<?=$_SERVER['HTTP_REFERER']?> 