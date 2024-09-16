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
            ['name' => 'Koshi','name_np'=>'कोशी', 'capital' => 'Biratnagar', 'no_of_districts' => 14,],
            ['name' => 'Madhesh','name_np'=>'मधेश', 'capital' => 'Janakpur', 'no_of_districts' => 8,],
            ['name' => 'Bagmati','name_np'=>'बागमती', 'capital' => 'Hetauda', 'no_of_districts' => 13,],
            ['name' => 'Gandaki','name_np'=>'गण्डकी', 'capital' => 'Pokhara', 'no_of_districts' => 11,],
            ['name' => 'Lumbini','name_np'=>'लुम्बिनी', 'capital' => 'Deukhuri', 'no_of_districts' => 12,],
            ['name' => 'Karnali','name_np'=>'कर्णाली', 'capital' => 'Birendranagar', 'no_of_districts' => 10,],
            ['name' => 'Sudurpashchim','name_np'=>'सुदूरपश्चिम', 'capital' => 'Godawari', 'no_of_districts' => 9,]
        ];
    }

}
