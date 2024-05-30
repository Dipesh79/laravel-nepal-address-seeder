<?php

namespace Dipesh79\LaravelNepalAddressSeeder\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;


class LocalLevel extends Model
{
    use SoftDeletes;

    public $timestamps = true;

    protected $guarded = [];

    protected $table = 'local_levels';

    public function district(): BelongsTo
    {
        return $this->belongsTo(District::class, 'district_id');
    }


}
