<?php

namespace Dipesh79\LaravelNepalAddressSeeder\Data;

class Districts
{
    /**
     * Get all districts of Nepal
     *
     * @return array
     */
    public function getDistricts(): array
    {
        return array_merge(
            $this->getProvinceOneDistricts(),
            $this->getProvinceTwoDistricts(),
            $this->getProvinceThreeDistricts(),
            $this->getProvinceFourDistricts(),
            $this->getProvinceFiveDistricts(),
            $this->getProvinceSixDistricts(),
            $this->getProvinceSevenDistricts()
        );
    }

    /**
     * Get districts of Koshi Province
     *
     * @return array
     */
    public function getProvinceOneDistricts(): array
    {
        return [
            ['province_id' => 1, 'name' => 'Bhojpur', 'headquarter' => 'Bhojpur'],
            ['province_id' => 1, 'name' => 'Dhankuta', 'headquarter' => 'Dhankuta'],
            ['province_id' => 1, 'name' => 'Ilam', 'headquarter' => 'Ilam'],
            ['province_id' => 1, 'name' => 'Jhapa', 'headquarter' => 'Bhadrapur'],
            ['province_id' => 1, 'name' => 'Khotang', 'headquarter' => 'Diktel'],
            ['province_id' => 1, 'name' => 'Morang', 'headquarter' => 'Biratnagar'],
            ['province_id' => 1, 'name' => 'Okhaldhunga', 'headquarter' => 'Siddhicharan'],
            ['province_id' => 1, 'name' => 'Panchthar', 'headquarter' => 'Phidim'],
            ['province_id' => 1, 'name' => 'Sankhuwasabha', 'headquarter' => 'Khandbari'],
            ['province_id' => 1, 'name' => 'Solukhumbu', 'headquarter' => 'Solududhkunda'],
            ['province_id' => 1, 'name' => 'Sunsari', 'headquarter' => 'Inaruwa'],
            ['province_id' => 1, 'name' => 'Taplejung', 'headquarter' => 'Phungling'],
            ['province_id' => 1, 'name' => 'Terhathum', 'headquarter' => 'Myanglung'],
            ['province_id' => 1, 'name' => 'Udayapur', 'headquarter' => 'Triyuga']
        ];
    }

    /**
     * Get districts of Madesh Province
     *
     * @return array
     */
    public function getProvinceTwoDistricts(): array
    {
        return [
            ['province_id' => 2, 'name' => 'Parsa', 'headquarter' => 'Birgunj'],
            ['province_id' => 2, 'name' => 'Bara', 'headquarter' => 'Kalaiya'],
            ['province_id' => 2, 'name' => 'Rautahat', 'headquarter' => 'Gaur'],
            ['province_id' => 2, 'name' => 'Sarlahi', 'headquarter' => 'Malangwa'],
            ['province_id' => 2, 'name' => 'Dhanusha', 'headquarter' => 'Janakpur'],
            ['province_id' => 2, 'name' => 'Siraha', 'headquarter' => 'Siraha'],
            ['province_id' => 2, 'name' => 'Mahottari', 'headquarter' => 'Jaleshwar'],
            ['province_id' => 2, 'name' => 'Saptari', 'headquarter' => 'Rajbiraj']
        ];
    }

    /**
     * Get districts of Bagmati Province
     *
     * @return array
     */
    public function getProvinceThreeDistricts(): array
    {
        return [
            ['province_id' => 3, 'name' => 'Sindhuli'],
            ['province_id' => 3, 'name' => 'Ramechhap'],
            ['province_id' => 3, 'name' => 'Dolakha'],
            ['province_id' => 3, 'name' => 'Bhaktapur'],
            ['province_id' => 3, 'name' => 'Dhading'],
            ['province_id' => 3, 'name' => 'Kathmandu'],
            ['province_id' => 3, 'name' => 'Kavrepalanchok'],
            ['province_id' => 3, 'name' => 'Lalitpur'],
            ['province_id' => 3, 'name' => 'Nuwakot'],
            ['province_id' => 3, 'name' => 'Rasuwa'],
            ['province_id' => 3, 'name' => 'Sindhupalchok'],
            ['province_id' => 3, 'name' => 'Chitwan'],
            ['province_id' => 3, 'name' => 'Makawanpur']
        ];
    }

    /**
     * Get districts of Gandaki Province
     *
     * @return array
     */
    public function getProvinceFourDistricts(): array
    {
        return [
            ['province_id' => 4, 'name' => 'Baglung'],
            ['province_id' => 4, 'name' => 'Gorkha'],
            ['province_id' => 4, 'name' => 'Kaski'],
            ['province_id' => 4, 'name' => 'Lamjung'],
            ['province_id' => 4, 'name' => 'Manang'],
            ['province_id' => 4, 'name' => 'Mustang'],
            ['province_id' => 4, 'name' => 'Myagdi'],
            ['province_id' => 4, 'name' => 'Nawalpur'],
            ['province_id' => 4, 'name' => 'Parbat'],
            ['province_id' => 4, 'name' => 'Syangja'],
            ['province_id' => 4, 'name' => 'Tanahun']
        ];
    }

    /**
     * Get districts of Lumbini Province
     *
     * @return array
     */
    public function getProvinceFiveDistricts(): array
    {
        return [
            ['province_id' => 5, 'name' => 'Kapilvastu'],
            ['province_id' => 5, 'name' => 'Parasi'],
            ['province_id' => 5, 'name' => 'Rupandehi'],
            ['province_id' => 5, 'name' => 'Arghakhanchi'],
            ['province_id' => 5, 'name' => 'Gulmi'],
            ['province_id' => 5, 'name' => 'Palpa'],
            ['province_id' => 5, 'name' => 'Dang'],
            ['province_id' => 5, 'name' => 'Pyuthan'],
            ['province_id' => 5, 'name' => 'Rolpa'],
            ['province_id' => 5, 'name' => 'Eastern Rukum'],
            ['province_id' => 5, 'name' => 'Banke'],
            ['province_id' => 5, 'name' => 'Bardiya']
        ];
    }

    /**
     * Get districts of Karnali Province
     *
     * @return array
     */
    public function getProvinceSixDistricts(): array
    {
        return [
            ['province_id' => 6, 'name' => 'Western Rukum'],
            ['province_id' => 6, 'name' => 'Salyan'],
            ['province_id' => 6, 'name' => 'Dolpa'],
            ['province_id' => 6, 'name' => 'Humla'],
            ['province_id' => 6, 'name' => 'Jumla'],
            ['province_id' => 6, 'name' => 'Kalikot'],
            ['province_id' => 6, 'name' => 'Mugu'],
            ['province_id' => 6, 'name' => 'Surkhet'],
            ['province_id' => 6, 'name' => 'Dailekh'],
            ['province_id' => 6, 'name' => 'Jajarkot']
        ];
    }

    /**
     * Get districts of Sudurpashchim Province
     *
     * @return array
     */
    public function getProvinceSevenDistricts(): array
    {
        return [
            ['province_id' => 7, 'name' => 'Kailali'],
            ['province_id' => 7, 'name' => 'Achham'],
            ['province_id' => 7, 'name' => 'Doti'],
            ['province_id' => 7, 'name' => 'Bajhang'],
            ['province_id' => 7, 'name' => 'Bajura'],
            ['province_id' => 7, 'name' => 'Kanchanpur'],
            ['province_id' => 7, 'name' => 'Dadeldhura'],
            ['province_id' => 7, 'name' => 'Baitadi'],
            ['province_id' => 7, 'name' => 'Darchula']
        ];
    }
}
