<?php

return [
    /**
     * Province Model.
     *
     * This is the model that will be used to seed the provinces.
     */
    'province' => '\Dipesh79\LaravelNepalAddressSeeder\Models\Province',

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
    'district' => '\Dipesh79\LaravelNepalAddressSeeder\Models\District',

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
    'local_level' => '\Dipesh79\LaravelNepalAddressSeeder\Models\LocalLevel',

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
