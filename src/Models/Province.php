<?php

namespace Dipesh79\LaravelNepalAddressSeeder\Models;

use bootstrap\LaravelNepalAddressSeeder\src\Models\District;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Province extends Model
{
    use SoftDeletes;

    public $timestamps = true;

    protected $guarded = [];

    protected $table = 'provinces';

    public function districts(): HasMany
    {
        return $this->hasMany(District::class);
    }
}
