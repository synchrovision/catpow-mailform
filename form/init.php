<?php
$form->clear();
$res['uri']='/index.html';
?>
<div class="cmf-contents">
	<table class="cmf-table">
		<tbody>
<?php foreach($form->inputs as $name=>$input): ?>
			<tr class="<?=$input->required?'required':'optional'?>">
				<th><?=$input->label?></th>
				<td><?=$form->input($name)?></td>
			</tr>
<?php endforeach; ?>
		</tbody>
	</table>
	<ul class="cmf-buttons">
		<li class="cmf-buttons__item is-primary"><?=$form->button('確認','confirm','primary')?></li>
	</ul>
</div>