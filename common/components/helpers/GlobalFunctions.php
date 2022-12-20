<?php declare(strict_types=1);

use yii\helpers\Url;
use yii\helpers\Html;
use yii\helpers\HtmlPurifier;
use yii\helpers\ArrayHelper;

function dd($data)
{
    echo "<pre>";
    print_r($data);
    die();
}

function api_pagination()
{
    $limit = 1;
    $offset = 0;

    $_page = input_get('page', 1);
    $_limit = input_get('limit', 10);
    $_offset = input_get('offset', 0);

    if (is_numeric($_limit) && $_limit > 0) {
        $limit = $_limit;
    }

    if (is_numeric($_offset) && $_offset > 0) {
        $offset = $_offset;
    }

    if (is_numeric($_page) && $_page > 1) {
        $offset = ($_page - 1) * $limit;
    }

    $output['limit'] = $limit;
    $output['offset'] = $offset;

    return $output;
}

// JSON output
function api_json_output($type = 'error', $array = array())
{
    $output = [
        'error' => true,
        'statusCode' => 404,
        'success' => false,
        'message' => t('An error occurred while processing your request.'),
        'data' => array(),
    ];

    if ($type == 'success') {
        $output = [
            'error' => false,
            'statusCode' => 200,
            'success' => true,
            'message' => '',
            'data' => array(),
        ];
    }

    if (isset($array['message'])) {
        $output['message'] = $array['message'];
    }

    return $output;
}

// passpot sera_raqami
function passera_num($model)
{
   $index = $model->sera_num;
   $sera = $index[2].$index[3].$index[4].$index[5].$index[6].$index[7].$index[8].$index[9];
   return $sera;
}
// passport serasi
function passera($model)
{
   $index = $model->sera_num;
   $sera = $index[0].$index[1];
   return $sera;
}


// passport malumotlarini olish api
function passport($sera, $sera_num, $data)
{
   $url = "https://api.online-mahalla.uz/api/v1/public/tax/passport?series=$sera&number=$sera_num&birth_date=$data";
   $curl = curl_init();
   curl_setopt($curl, CURLOPT_URL, $url);
   curl_setopt($curl,CURLOPT_RETURNTRANSFER, true);
   curl_setopt($curl, CURLOPT_ENCODING, '');
   curl_setopt($curl, CURLOPT_MAXREDIRS, 10);
   curl_setopt($curl, CURLOPT_TIMEOUT, 0);
   curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
   curl_setopt($curl, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);
   curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'GET');
   curl_setopt($curl, CURLOPT_POSTFIELDS, 'series=1');
   $result=curl_exec($curl);
   $result=json_decode($result);
   return $result->data->info->data;
}


// Not use because this does not work message extract
function t($message, $category = 'ui', $language = null, $params = [])
{
    return Yii::t($category, $message, $params, $language);
}

function url($url = '', $scheme = false): string
{
    return Url::to($url, $scheme);
}

function he($text): string
{
    return Html::encode($text);
}

function ph($text): string
{
    return HtmlPurifier::process($text);
}

function param($name, $default = null)
{
    return ArrayHelper::getValue(Yii::$app->params, $name, $default);
}

function nf($value, $decimals = 0)
{
    return number_format((float)$value, $decimals, '.', ' ');
}

function current_user()
{
    return \Yii::$app->user->identity;
}

// Get current user id
function current_user_id()
{
    $user = \Yii::$app->user;
    $user_id = $user->getId();
    return is_numeric($user_id) ? $user_id : 0;
}

function simplify_errors($errors)
{
    return $errors;
    $result = [];
    foreach ($errors as $lev1) {
        // foreach ($lev1 as $error) {
        $result[] = $lev1;
        // }
    }
    return array_unique($result);
}


// Check user logged in
function is_user_logged_in()
{
    $isGuest = Yii::$app->user->isGuest;
    return $isGuest ? false : true;
}

// Get cart hash
function get_card_hash()
{
    $cookies = \Yii::$app->request->cookies;
    $card_hash = $cookies->getValue('card_hash');

    if (is_string($card_hash) && $card_hash) {
        return $card_hash;
    }
}

// Model errors

function model_errors($errs)
{
    $res = [];
    foreach ($errs as $key => $val) {
        $res[$key] = $val;
    }
    return $res;
}

function double_errors($errs, $trErrs)
{
    $res = [];
    if (isset($errs)) {
        foreach ($errs as $val) {
            foreach ($val as $key => $valIn) {
                $res[$key] = $valIn;
            }
        }
    }

    if (isset($trErrs)) {
        foreach ($trErrs as $tval) {
            foreach ($tval as $tkey => $tvalIn) {
                $res[$tkey] = $tvalIn;
            }
        }
    }
    $result[] = $res;

    return $result;
}

// Api sortby
function api_sortby($sortby, $sort, $prefix = null)
{
    if (strtoupper($sort) == 'ASC') {
        $sort = SORT_ASC;
    } elseif (strtoupper($sort) == 'DESC') {
        $sort = SORT_DESC;
    }

    if ($prefix && is_string($prefix)) {
        $sortby = $prefix . '.' . $sortby;
    }

    return array($sortby => $sort);
}

function isJsonMK($string)
{
    json_decode($string);
    return json_last_error() === JSON_ERROR_NONE;
}


