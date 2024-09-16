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
            ['province_id' => 1, 'name' => 'Bhojpur', 'name_np' => 'भोजपुर', 'headquarter' => 'Bhojpur'],
            ['province_id' => 1, 'name' => 'Dhankuta', 'name_np' => 'धनकुटा', 'headquarter' => 'Dhankuta'],
            ['province_id' => 1, 'name' => 'Ilam', 'name_np' => 'इलाम', 'headquarter' => 'Ilam'],
            ['province_id' => 1, 'name' => 'Jhapa', 'name_np' => 'झापा', 'headquarter' => 'Bhadrapur'],
            ['province_id' => 1, 'name' => 'Khotang', 'name_np' => 'खोटाङ', 'headquarter' => 'Diktel'],
            ['province_id' => 1, 'name' => 'Morang', 'name_np' => 'मोरङ', 'headquarter' => 'Biratnagar'],
            ['province_id' => 1, 'name' => 'Okhaldhunga', 'name_np' => 'ओखलढुङ्गा', 'headquarter' => 'Siddhicharan'],
            ['province_id' => 1, 'name' => 'Panchthar', 'name_np' => 'पाँचथर', 'headquarter' => 'Phidim'],
            ['province_id' => 1, 'name' => 'Sankhuwasabha', 'name_np' => 'सङ्खुवासभा', 'headquarter' => 'Khandbari'],
            ['province_id' => 1, 'name' => 'Solukhumbu', 'name_np' => 'सोलुखुम्बु', 'headquarter' => 'Solududhkunda'],
            ['province_id' => 1, 'name' => 'Sunsari', 'name_np' => 'सुनसरी', 'headquarter' => 'Inaruwa'],
            ['province_id' => 1, 'name' => 'Taplejung', 'name_np' => 'ताप्लेजुङ', 'headquarter' => 'Phungling'],
            ['province_id' => 1, 'name' => 'Terhathum', 'name_np' => 'तेह्रथुम', 'headquarter' => 'Myanglung'],
            ['province_id' => 1, 'name' => 'Udayapur', 'name_np' => 'उदयपुर', 'headquarter' => 'Triyuga']
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
            ['province_id' => 2, 'name' => 'Parsa', 'name_np' => 'पर्सा', 'headquarter' => 'Birgunj'],
            ['province_id' => 2, 'name' => 'Bara', 'name_np' => 'बारा', 'headquarter' => 'Kalaiya'],
            ['province_id' => 2, 'name' => 'Rautahat', 'name_np' => 'रौतहट', 'headquarter' => 'Gaur'],
            ['province_id' => 2, 'name' => 'Sarlahi', 'name_np' => 'सर्लाही', 'headquarter' => 'Malangwa'],
            ['province_id' => 2, 'name' => 'Dhanusha', 'name_np' => 'धनुषा', 'headquarter' => 'Janakpur'],
            ['province_id' => 2, 'name' => 'Siraha', 'name_np' => 'सिराहा', 'headquarter' => 'Siraha'],
            ['province_id' => 2, 'name' => 'Mahottari', 'name_np' => 'महोत्तरी', 'headquarter' => 'Jaleshwar'],
            ['province_id' => 2, 'name' => 'Saptari', 'name_np' => 'सप्तरी', 'headquarter' => 'Rajbiraj']
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
            ['province_id' => 3, 'name' => 'Sindhuli', 'name_np' => 'सिन्धुली'],
            ['province_id' => 3, 'name' => 'Ramechhap', 'name_np' => 'रामेछाप'],
            ['province_id' => 3, 'name' => 'Dolakha', 'name_np' => 'दोलखा'],
            ['province_id' => 3, 'name' => 'Bhaktapur', 'name_np' => 'भक्तपुर'],
            ['province_id' => 3, 'name' => 'Dhading', 'name_np' => 'धादिङ'],
            ['province_id' => 3, 'name' => 'Kathmandu', 'name_np' => 'काठमाडौं'],
            ['province_id' => 3, 'name' => 'Kavrepalanchok', 'name_np' => 'काभ्रेपलाञ्चोक'],
            ['province_id' => 3, 'name' => 'Lalitpur', 'name_np' => 'ललितपुर'],
            ['province_id' => 3, 'name' => 'Nuwakot', 'name_np' => 'नुवाकोट'],
            ['province_id' => 3, 'name' => 'Rasuwa', 'name_np' => 'रसुवा'],
            ['province_id' => 3, 'name' => 'Sindhupalchok', 'name_np' => 'सिन्धुपाल्चोक'],
            ['province_id' => 3, 'name' => 'Chitwan', 'name_np' => 'चितवन'],
            ['province_id' => 3, 'name' => 'Makawanpur', 'name_np' => 'मकवानपुर']
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
            ['province_id' => 4, 'name' => 'Baglung', 'name_np' => 'बागलुङ'],
            ['province_id' => 4, 'name' => 'Gorkha', 'name_np' => 'गोरखा'],
            ['province_id' => 4, 'name' => 'Kaski', 'name_np' => 'कास्की'],
            ['province_id' => 4, 'name' => 'Lamjung', 'name_np' => 'लमजुङ'],
            ['province_id' => 4, 'name' => 'Manang', 'name_np' => 'मनाङ'],
            ['province_id' => 4, 'name' => 'Mustang', 'name_np' => 'मुस्ताङ'],
            ['province_id' => 4, 'name' => 'Myagdi', 'name_np' => 'म्याग्दी'],
            ['province_id' => 4, 'name' => 'Nawalpur', 'name_np' => 'नवलपरासी'],
            ['province_id' => 4, 'name' => 'Parbat', 'name_np' => 'पर्वत'],
            ['province_id' => 4, 'name' => 'Syangja', 'name_np' => 'स्याङ्जा'],
            ['province_id' => 4, 'name' => 'Tanahu', 'name_np' => 'तनहुँ']
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
            ['province_id' => 5, 'name' => 'Kapilvastu', 'name_np' => 'कपिलवस्तु'],
            ['province_id' => 5, 'name' => 'Parasi', 'name_np' => 'परासी'],
            ['province_id' => 5, 'name' => 'Rupandehi', 'name_np' => 'रुपन्देही'],
            ['province_id' => 5, 'name' => 'Arghakhanchi', 'name_np' => 'अर्घाखाँची'],
            ['province_id' => 5, 'name' => 'Gulmi', 'name_np' => 'गुल्मी'],
            ['province_id' => 5, 'name' => 'Palpa', 'name_np' => 'पाल्पा'],
            ['province_id' => 5, 'name' => 'Dang', 'name_np' => 'दा��'],
            ['province_id' => 5, 'name' => 'Pyuthan', 'name_np' => 'प्युठान'],
            ['province_id' => 5, 'name' => 'Rolpa', 'name_np' => 'रोल्पा'],
            ['province_id' => 5, 'name' => 'Eastern Rukum', 'name_np' => 'पूर्वी रुकुम'],
            ['province_id' => 5, 'name' => 'Banke', 'name_np' => 'बाँके'],
            ['province_id' => 5, 'name' => 'Bardiya', 'name_np' => 'बर्दिया']
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
            ['province_id' => 6, 'name' => 'Western Rukum', 'name_np' => 'पश्चिमी रुकुम'],
            ['province_id' => 6, 'name' => 'Salyan', 'name_np' => 'सल्यान'],
            ['province_id' => 6, 'name' => 'Dolpa', 'name_np' => 'डोल्पा'],
            ['province_id' => 6, 'name' => 'Humla', 'name_np' => 'हुम्ला'],
            ['province_id' => 6, 'name' => 'Jumla', 'name_np' => 'जुम्ला'],
            ['province_id' => 6, 'name' => 'Kalikot', 'name_np' => 'कालिकोट'],
            ['province_id' => 6, 'name' => 'Mugu', 'name_np' => 'मुगु'],
            ['province_id' => 6, 'name' => 'Surkhet', 'name_np' => 'सुर्खेत'],
            ['province_id' => 6, 'name' => 'Dailekh', 'name_np' => 'दैलेख'],
            ['province_id' => 6, 'name' => 'Jajarkot', 'name_np' => 'जाजरकोट']
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
            ['province_id' => 7, 'name' => 'Kailali', 'name_np' => 'कैलाली'],
            ['province_id' => 7, 'name' => 'Achham', 'name_np' => 'अछाम'],
            ['province_id' => 7, 'name' => 'Doti', 'name_np' => 'डोटी'],
            ['province_id' => 7, 'name' => 'Bajhang', 'name_np' => 'बझाङ'],
            ['province_id' => 7, 'name' => 'Bajura', 'name_np' => 'बाजुरा'],
            ['province_id' => 7, 'name' => 'Kanchanpur', 'name_np' => 'कञ्चनपुर'],
            ['province_id' => 7, 'name' => 'Dadeldhura', 'name_np' => 'डडेल्धुरा'],
            ['province_id' => 7, 'name' => 'Baitadi', 'name_np' => 'बैतडी'],
            ['province_id' => 7, 'name' => 'Darchula', 'name_np' => 'दार्चुला']
        ];
    }
}
