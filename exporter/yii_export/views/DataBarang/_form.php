<?php
/* @var $this NamaControlerController */
/* @var $model namaModel */
/* @var $form CActiveForm */
?>

<div class="form">
<?php if(false){ ?>
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'nama-model-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>
<?php }; ?>
	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

		

				<div class="form-group">
				<label>Nama Barang</label>
				<input type="text" class="form-control" required='required' name="namabarang1" value="">
				<p class="help-block"></p>
				</div>
				

				<div class="form-group">
				<label>Jumlah</label>
				<input type="number" class="form-control" required='required' name="jumlah2" value="">
				<p class="help-block"></p>
				</div>
				


	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->