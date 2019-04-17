<?php

/**
 * Lombardia Informatica S.p.A.
 * OPEN 2.0
 *
 *
 * @package    lispa\amos\upload
 * @category   CategoryName
 */

use yii\helpers\Html;
use kartik\widgets\ActiveForm;
use kartik\builder\Form;
use kartik\datecontrol\DateControl;
use yii\bootstrap\Tabs;

/**
* @var yii\web\View $this
* @var lispa\amos\upload\models\FilemanagerOwners $model
* @var yii\widgets\ActiveForm $form
*/


?>

<div class="filemanager-owners-form">

    <?php $form = ActiveForm::begin(['type'=>ActiveForm::TYPE_VERTICAL]);  ?>
    <div class="form-actions">

        <?=    Html::submitButton( $model->isNewRecord ?
        Yii::t('amosupload', 'Crea') :
        Yii::t('amosupload', 'Aggiorna'),
        [
        'class' => $model->isNewRecord ?
        'btn btn-success' :
        'btn btn-primary'
        ]); ?>

    </div>


    
        
        <?php  $this->beginBlock('generale'); ?>
        
                        <div class="col-lg-6 col-sm-6">
                
			<?= $form->field($model, 'owner')->textInput(['maxlength' => true]) ?>
            </div>
                <div class="clearfix"></div>
        <?php  $this->endBlock('generale'); ?>

        <?php   $itemsTab[] = [
        'label' => Yii::t('amosupload', 'Generale '),
        'content' => $this->blocks['generale'],
        ];
         ?>    

    <?=  Tabs::widget(
    [
    'encodeLabels' => false,
    'items' => $itemsTab
    ]
    );
     ?>
    <?php  ActiveForm::end();  ?>
</div>
