<div class="form">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'yl-team-form',
	'enableAjaxValidation'=>true,
	'htmlOptions' => array('enctype' => 'multipart/form-data','onsubmit'=>'setData()'), 
)); ?>
<table width="100%" class="table_form table">
      <thead>
        <tr class="title">
          <th colspan="2"> <?php echo $formTatle;?> </th>
        </tr>
      </thead>
      <tbody>
	<tr>
          <th width="100" align="right"><span style="float:left;">*</span>
		<?php echo $form->labelEx($model,'title'); ?>
        </th>
        <td >
        <div class="row">
		<?php echo $form->textField($model,'title',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'title'); ?>
        </div>
        </td>
	</tr>
	<tr>
          <th width="100" align="right"><span style="float:left;">*</span>
		<?php echo $form->labelEx($model,'uname'); ?>
        </th>
        <td >
        <div class="row">
		<?php echo $form->textField($model,'uname',array('size'=>60,'maxlength'=>200,'id'=>'txt_uname')); ?>
		<input type="button" id="ylArea" value="请选择">
     
        </div>
        </td>
	</tr>


	<tr>
          <th width="100" align="right"><span style="float:left;">*</span>
		<?php echo $form->labelEx($model,'imgurl'); ?>
        </th>
        <td >
        <div class="row">
        <?php echo $form->fileField($model,'imgurl',array('size'=>50)); 
			 if(!empty($model->imgurl))
			  	echo $model->imgurl;
		?>
		<?php echo $form->error($model,'imgurl'); ?>
        </div>
        </td>
	</tr>
    <tr>
          <th width="100" align="right"><span style="float:left;">*</span>
		<?php echo $form->labelEx($model,'pdf'); ?>
        </th>
        <td >
        <div class="row">
		 <?php echo $form->fileField($model,'pdf',array('size'=>50)); 
			 if(!empty($model->pdf))
			  	echo $model->pdf;
		?>
		<?php echo $form->error($model,'pdf'); ?>
        </div>
        </td>
	</tr>
   	
	<tr style="display:none;">
          <th width="100" align="right">
		<?php echo $form->labelEx($model,'content'); ?>
        </th>
        <td >
        <div class="row">
		<?php echo $form->textArea($model,'content',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'content'); ?>
        </div>
        </td>
	</tr>




</tbody>
      <tfoot>
        <tr class="title">
          <td colspan="2"><a buttype="submit" href="javascript:void(0)" class="button"><span>提交</span></a><a url="<?php echo $this->createUrl('index');?>" buttype="link" href="javascript:void(0)" class="button"><span>返回</span></a></td>
        </tr>
      </tfoot>
    </table>
	
<?php echo $form->hiddenField($model,'uid',array('id'=>'hid_uid')); ?>
<?php $this->endWidget(); ?>

</div>
<script language="javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/common.js"></script>

<script language="javascript">
$(document).ready(function() {
	loadCssAndJs(jsUrl+'/fancybox/jquery.fancybox-1.3.4.pack.js','js');
	loadCssAndJs(jsUrl+'/fancybox/jquery.fancybox-1.3.4.css','css');
	setTimeout(function (){
		bindiframe("ylArea");
	},1000);	

});

</script>
<script language="javascript">
 	var editor;
	KindEditor.ready(function(K) {
		editor = K.create('#YlTeam_content', {
					width:'800px',
					height:'500px',
					resizeType : 2,
					uploadJson : '<?php echo $this->module->assetsUrl;?>/js/plugins/kindeditor/php/upload_json.php' // 相对于当前页面的路径
		});
	});
	function setData()
	{
		editor.sync(); 
	}
</script>