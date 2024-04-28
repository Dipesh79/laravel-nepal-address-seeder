# Laravel Nepal Address Seeder

[![Latest Stable Version](http://poser.pugx.org/dipesh79/laravel-nepal-address-seeder/v)](https://packagist.org/packages/dipesh79/laravel-user-logs)
[![Total Downloads](http://poser.pugx.org/dipesh79/laravel-nepal-address-seeder/downloads)](https://packagist.org/packages/dipesh79/laravel-user-logs)
[![License](http://poser.pugx.org/dipesh79/laravel-nepal-address-seeder/license)](https://packagist.org/packages/dipesh79/laravel-user-logs)

This Laravel package allows you to add Province, District and Local Levels of Nepal.
## Usage/Examples
### Install Using Composer
```bash
composer require dipesh79/laravel-nepal-address-seeder
```
### Publish Vendor File For Migration And Configuration File
```bash
php artisan vendor:publish
```
And publish `Dipesh79\LaravelNepalAddressSeeder\NepalAddressServiceProvider`
### Run Migration
```bash
php artisan migrate
```
## Config File

Set the configuration in the `nepal_address_seeder.php` file in the config directory.

```php
<?php

return [
    /**
     * Province Model.
     *
     * This is the model that will be used to seed the provinces.
     */
    'province' => '\Dipesh79\LaravelNepalAddressSeeder\src\Models\Province',

    /**
     * Province Name in the database.
     *
     * This is the column name in the database where the province name will be stored.
     */
    'province_name' => 'name',

    /**
     * Opt in if you want to add capital in the database.
     *
     * This will add the capital of the province in the database.
     */
    'add_province_capital' => false,

    /**
     * Province Capital in the database.
     *
     * This is the column name in the database where the province capital will be stored.
     */
    'province_capital' => 'capital',

    /**
     * Opt in if you want to add no of districts in the database.
     *
     * This will add the no of districts in the province in the database.
     */
    'add_province_no_of_districts' => false,

    /**
     * Province No Of District in the database.
     *
     * This is the column name in the database where the province no of districts will be stored.
     */
    'province_no_of_districts' => 'no_of_districts',

    /**
     * District Model.
     *
     * This is the model that will be used to seed the districts.
     */
    'district' => '\Dipesh79\LaravelNepalAddressSeeder\src\Models\District',

    /**
     * District Name in the database.
     *
     * This is the column name in the database where the district name will be stored.
     */
    'district_name' => 'name',

    /**
     * Local Level Model.
     *
     * This is the model that will be used to seed the local levels.
     */
    'local_level' => '\Dipesh79\LaravelNepalAddressSeeder\src\Models\LocalLevel',

    /**
     * Local Level Name in the database.
     *
     * This is the column name in the database where the local level name will be stored.
     */
    'local_level_name' => 'name',

    /**
     * Opt in if you want to add wards in the database.
     * 
     * This will add the wards in the local level in the database.
     */
    'add_local_level_wards' => false,

    /**
     * Local Level Wards in the database.
     * 
     * This is the column name in the database where the local level wards will be stored.
     */
    'local_level_wards' => 'wards',

];


```
## Model
You can use your own model, or you can model from our package.

### Province Model
NOTE: If you are using our model, make sure you have soft delete column in your migration. If you are using our published migration, then we already have it.

```php
<?php

namespace Dipesh79\LaravelNepalAddressSeeder\Models;

use bootstrap\LaravelNepalAddressSeeder\src\Models\District;use Illuminate\Database\Eloquent\Model;
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
```
### District Model

```php
<?php

namespace Dipesh79\LaravelNepalAddressSeeder\Models;

use bootstrap\LaravelNepalAddressSeeder\src\Models\LocalLevel;use bootstrap\LaravelNepalAddressSeeder\src\Models\Province;use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class District extends Model
{
    use SoftDeletes;

    public $timestamps = true;

    protected $guarded = [];

    protected $table = 'districts';

    public function localLevels(): HasMany
    {
        return $this->hasMany(LocalLevel::class);
    }

    public function province(): BelongsTo
    {
        return $this->belongsTo(Province::class, 'province_id');
    }
}
```

### Local Level Model

```php
<?php

namespace Dipesh79\LaravelNepalAddressSeeder\Models;

use bootstrap\LaravelNepalAddressSeeder\src\Models\District;use Illuminate\Database\Eloquent\Model;
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

```

## Database Seeding

You can seed the database using the following command. Before seeding, make sure you have the correct model in your configuration file.

```bash
php artisan nepal-address:seed
```

Now you can use the data in your database.

### TODOS

* Wards Count

## License

[MIT](https://choosealicense.com/licenses/mit/)


## Author

- [@Dipesh79](https://www.github.com/Dipesh79)


## Support

For support, email dipeshkhanal79@gmail.com.

