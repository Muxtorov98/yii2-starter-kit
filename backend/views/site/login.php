<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

$this->title = Yii::t('app', 'Login');
?>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');
    body{
        font-family: 'Poppins', sans-serif;
        background-color: #fff;
    }
    .contents {
        margin: 8%;
        margin-top: 20%;
        margin-left: auto;
        margin-right: auto;
        border-radius: 4px;
        background-color: #fff;
        padding: 4rem 1rem 4rem 1rem;
        box-shadow: rgba(0, 0, 0, 0.15) 0px 5px 15px 0px;
    }
    .signin-text{
        font-style: normal;
        font-weight: 600 !important;

    }
    .form-control{
        display: block;
        width:100%;
        font-weight: 400;
        line-height:1.5;
        border-color: #246EB3 !important;
        border-style: solid !important;
        border-width: 0 0 1px 0 !important;

        color:#495057;
        height: auto;
        border-radius: 0;
        background-color: #fff;
        background-clip: padding-box;
    }


    .form-control:focus{
        color: #246EB3;
        background-color: #fff;
        border-color: #fff;
        outline: 0;
        box-shadow: none;
    }
    .birthday-section{
        padding: 15px;
    }
    .btn-class{
        background: #33b5e5;
        border:none;
        color: #fff;
        width: 100%;
    }

    .btn-class:hover{
        background: #33b5e5;
        box-shadow: rgba(136, 165, 191, 0.48) 6px 2px 16px 0px, rgba(255, 255, 255, 0.8) -6px -2px 16px 0px;
        color: #fff;
        width: 100%;
    }

</style>

<body style="background: #fff">
<div class="container">
    <div class="row contents">
        <div class="col-md-6 mb-3">
            <img width="100%" src="/admin/img/yii.jpeg" class="img-flud" alt="image">
        </div>
        <div class="col-md-6">
            <h1 style="text-align: center" class="signin-text mb-3">Yii2 <span style="color: #33b5e5"> project </span></h1>
            <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>
            <div class="form-group">
                <label>Login</label>
                <?= $form->field($model, 'username')->textInput(['id' => 'login'])->label(false) ?>
            </div>
            <div class="form-group">
                <label>Parol</label>
                <?= $form->field($model, 'password')->passwordInput(['id' => 'password'])->label(false) ?>
            </div>
            <br>
            <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="checkbox" name="LoginForm[rememberMe]" value="1"  aria-invalid="false">
                <label class="form-check-label" for="checkbox">Meni eslab qol</label>
            </div>
            <br>
            <button type="submit" class="btn btn-class w-100 py-2">Krish</button>
            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
</body>









