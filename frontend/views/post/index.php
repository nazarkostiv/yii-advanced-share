<?php

use yii\widgets\ActiveForm;
use yii\helpers\Html;
?>

<div id="fh5co-contact">
    <div class="container">
        <div class="row">

            <?php

            $form = ActiveForm::begin();

            echo $form->field($model, 'name')->textInput(['autofocus' => true]);
            echo $form->field($model, 'content')->textarea(['rows' => 5]);
            echo $form->field($model, 'icon');

            echo Html::submitButton('Send', ['class' => 'btn btn-success']);

            ActiveForm::end();
            ?>

        </div>
    </div>
</div>
