<?php

use yii\widgets\ActiveForm;
use yii\helpers\Html;

$this->title = 'Add Post';
?>

<div id="fh5co-contact">
    <div class="container">
        <div class="row">

            <?php

            $form = ActiveForm::begin();

            echo $form->field($model, 'title')->textInput(['autofocus' => true]);
            echo $form->field($model, 'content')->textarea(['rows' => 5]);

            echo Html::submitButton('Send', ['class' => 'btn btn-success']);

            ActiveForm::end();
            ?>

        </div>
    </div>
</div>
