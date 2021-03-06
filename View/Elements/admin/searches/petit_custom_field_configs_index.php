<?php
/**
 * [ADMIN] PetitCustomField
 *
 * @link			http://www.materializing.net/
 * @author			arata
 * @package			PetitCustomField
 * @license			MIT
 */
?>
<?php echo $this->BcForm->create('PetitCustomFieldConfig', array('url' => array('action' => 'index'))) ?>
<p>
	<span>
		<?php echo $this->BcForm->label('PetitCustomFieldConfig.content_id', 'ブログ') ?>
		&nbsp;<?php echo $this->BcForm->input('PetitCustomFieldConfig.content_id', array('type' => 'select', 'options' => $blogContentDatas)) ?>
	</span>
	<span>
		<?php echo $this->BcForm->label('PetitCustomFieldConfig.status', '利用状態') ?>
		&nbsp;<?php echo $this->BcForm->input('PetitCustomFieldConfig.status', array('type' => 'select', 'options' => $this->BcText->booleanMarkList(), 'empty' => '指定なし')) ?>
	</span>
</p>
<div class="button">
	<?php echo $this->BcForm->submit('admin/btn_search.png', array('alt' => '検索', 'class' => 'btn'), array('div' => false, 'id' => 'BtnSearchSubmit')) ?>
</div>
<?php echo $this->BcForm->end() ?>
