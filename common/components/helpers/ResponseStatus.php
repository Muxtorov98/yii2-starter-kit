<?php
namespace common\components\helpers;
class ResponseStatus
{
    const OK = 200;
    const CREATED = 201;
    const NO_CONTENT = 204;
    const NOT_MODIFIED = 304;
    const BAD_REQUEST = 400;
    const UNAUTHORIZED = 401;
    const FORBIDDEN = 403;
    const NOT_FOUND = 404;
    const METHOD_NOT_ALLOWED = 405;
    const GONE = 410;
    const UNSOPPORTED_MEDIA_TYPE = 415;
    const UPROCESSABLE_ENTITY = 422;
    const TOO_MANY_REQUESTS = 422;

}