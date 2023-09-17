<?php

namespace App\Traits;

use App\Models\Chat;
use App\Models\JobGaurds;
use App\Models\Notification;
use Carbon\Carbon;

/*
|--------------------------------------------------------------------------
| Api Responser Trait
|--------------------------------------------------------------------------
|
| This trait will be used for any response we sent to clients.
|
*/

trait ApiResponser
{
    /**
     * Return a success JSON response.
     *
     * @param  array|string  $data
     * @param  string  $message
     * @param  int|null  $code
     * @return \Illuminate\Http\JsonResponse
     */
    protected function success($data, string $message = null, int $code = 200, $is_array = null)
    {
        $data1 = json_encode($data, JSON_FORCE_OBJECT);
        $data2 = json_decode($data1);

        if ($is_array != null) {
            return response()->json([
                'status' => 'Success',
                'message' => $message,
                'data' => $data
            ], $code);
        }
        return response()->json([
            'status' => 'Success',
            'message' => $message,
            'data' => $data2
        ], $code);
    }

    /**
     * Return an error JSON response.
     *
     * @param  string  $message
     * @param  int  $code
     * @param  array|string|null  $data
     * @return \Illuminate\Http\JsonResponse
     */
    protected function error(string $message = null, int $code, $data = null)
    {
        $data1 = json_encode($data, JSON_FORCE_OBJECT);
        $data2 = json_decode($data1);
        return response()->json([
            'status' => 'Error',
            'message' => $message,
            'data' => $data2
        ], $code);
    }
}
