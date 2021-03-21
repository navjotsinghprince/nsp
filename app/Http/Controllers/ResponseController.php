<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Response;
use Carbon\Carbon;

class ResponseController extends Controller
{
   #HTTP status codes
   static $HTTP_NOT_FOUND = 404;
   static $HTTP_OK = 200;
   static $HTTP_UNPROCESSABLE_ENTITY = 422;
   static $HTTP_UNAUTHORIZED = 401;
   static $HTTP_BAD_REQUEST = 400;
   static $HTTP_FORBIDDEN = 403;
   static $HTTP_CONFLICT = 409;


   protected function currentTime()
   {
       $carbon = Carbon::now();
       $info = [
           "status" => 'success',
           "response" => self::$HTTP_OK,
           'message' => 'Current Time',
           "data" => [
               'currentTime' => $carbon->format('l, jS F Y'),
               'currentYear' => $carbon->format('Y')
           ]
       ];
       return Response::json($info, self::$HTTP_OK);
   }

   /**
    * Returns a json when data is not found
    *
    * @param [string] $message
    * @param [array] $errors
    * @return JsonResponse
    */
   protected function notFound($message, $errors = null)
   {
       $error_message = is_null($errors) ? 'not specified' : $errors;
       $info = [
           "status" =>
           self::$HTTP_NOT_FOUND,
           "response" => self::$HTTP_NOT_FOUND,
           'message' => $message,
           'data' => $error_message,
       ];
       return Response::json($info, self::$HTTP_NOT_FOUND);
   }


   /**
    * Executes and returns well formatted json of errors
    * that occured during validation
    *
    * @param [string] $message
    * @param [collection] $errors
    * @return json
    */
   protected function validationFailed($message, $errors)
   {

       $info = [
           "status" => self::$HTTP_UNPROCESSABLE_ENTITY,
           "response" => self::$HTTP_UNPROCESSABLE_ENTITY,
           'message' => $message,
           'data' => $errors,
       ];
       return Response::json($info, self::$HTTP_UNPROCESSABLE_ENTITY);
   }


   /**
    * Returns json stating why a request is unauthorized
    * @param [string] $message
    * @return JsonResponse
    */
   protected function unauthorized($message)
   {
       $info = [
           "status" =>
           self::$HTTP_UNAUTHORIZED,
           "response" => self::$HTTP_UNAUTHORIZED,
           'message' => $message,
           'data' => [$message]
       ];
       return Response::json($info, self::$HTTP_UNAUTHORIZED);
   }

   /**
    * Returns json stating why data creation failed
    * @param [string] $message
    * @return JsonResponse
    */
   protected function dataCreationFailed($message)
   {
       $info = [
           "status" => self::$HTTP_BAD_REQUEST,
           "response" => self::$HTTP_BAD_REQUEST,
           'message' => $message,
           'data' => [$message]
       ];
       return Response::json($info, self::$HTTP_BAD_REQUEST);
   }

   /**
    * Returns json when data fetch successfull
    * @param $message
    * @param null $data
    * @return JsonResponse
    */
   public function actionSuccess($message, $data = null)
   {
       $info = [
           "status" => self::$HTTP_OK,
           "response" => self::$HTTP_OK,
           'message' => $message,
       ];
       if ($data != null) {
           $info['data'] = $data;
       }
       return Response::json($info, self::$HTTP_OK);
   }

   /**
    * Returns json when data fetch failed
    * @param [string] $message
    * @return JsonResponse
    */
   protected function actionFailure($message)
   {
       $info = [
           "status" => self::$HTTP_CONFLICT,
           "response" => self::$HTTP_CONFLICT,
           'message' => $message,
       ];
       return Response::json($info, self::$HTTP_CONFLICT);
   }


   /**
    * Returns json
    * @param [string] $message
    * @return JsonResponse
    */
   protected function forbidden($message)
   {
       $info = [
           "status" => 'failed',
           "response" => self::$HTTP_FORBIDDEN,
           'message' => $message,
       ];
       return Response::json($info, self::$HTTP_FORBIDDEN);
   }
}
