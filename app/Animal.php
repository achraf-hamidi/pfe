<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use Chrisbjr\ApiGuard\Models\Mixins\Apikeyable;

class Animal extends Model
{
    //
    use SoftDeletes;
    use Apikeyable;
    protected $dates  =['deleted_at'];
}
