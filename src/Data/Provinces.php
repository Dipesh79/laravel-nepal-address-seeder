<?php

namespace Dipesh79\LaravelNepalAddressSeeder\Data;

class Provinces
{
    /**
     * Get all provinces
     *
     * @return array
     */
    public function getProvinces(): array
    {
        return [
            ['name' => 'Koshi', 'capital' => 'Biratnagar', 'no_of_districts' => 14,],
            ['name' => 'Madhesh', 'capital' => 'Janakpur', 'no_of_districts' => 8,],
            ['name' => 'Bagmati', 'capital' => 'Hetauda', 'no_of_districts' => 13,],
            ['name' => 'Gandaki', 'capital' => 'Pokhara', 'no_of_districts' => 11,],
            ['name' => 'Lumbini', 'capital' => 'Deukhuri', 'no_of_districts' => 12,],
            ['name' => 'Karnali', 'capital' => 'Birendranagar', 'no_of_districts' => 10,],
            ['name' => 'Sudurpashchim', 'capital' => 'Godawari', 'no_of_districts' => 9,]
        ];
    }

}
