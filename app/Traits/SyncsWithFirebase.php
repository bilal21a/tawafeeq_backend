<?php

namespace App\Traits;

use App\libs\FirebaseInterface;
use App\libs\FirebaseLib;


/*
|--------------------------------------------------------------------------
| Api Responser Trait
|--------------------------------------------------------------------------
|
| This trait will be used for saving Workorder.
|
*/

trait SyncsWithFirebase
{

    protected $firebaseClient;

    /**
     * Boot the trait and add the model events to synchronize with firebase
     */
    public static function bootSyncsWithFirebase()
    {
        static::created(function ($model) {
            $model->saveToFirebase('set');
        });
        static::updated(function ($model) {
            $model->saveToFirebase('update');
        });
        static::deleted(function ($model) {
            $model->saveToFirebase('delete');
        });
    }


    public function setFirebaseClient($firebaseClient)
    {
        $this->firebaseClient = $firebaseClient;
    }


    protected function saveToFirebase($mode)
    {
        if (is_null($this->firebaseClient)) {
            $this->firebaseClient = new FirebaseLib(config('services.firebase.database_url'), config('services.firebase.secret'));
        }
        $path = $this->getTable() . '/' . $this->getKey();

        if ($mode === 'set' && $fresh = $this->fresh()) {
            $this->firebaseClient->set($path, $fresh->toArray());
        } elseif ($mode === 'update' && $fresh = $this->fresh()) {
            $this->firebaseClient->update($path, $fresh->toArray());
        } elseif ($mode === 'delete') {
            $this->firebaseClient->delete($path);
        }
    }


}
