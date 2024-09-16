<?php

namespace Dipesh79\LaravelNepalAddressSeeder\Data;

class LocalLevels
{
    /**
     * Get all local levels
     * @return array
     */

    public function getLocalLevels(): array
    {
        return array_merge(
            $this->getProvinceOneLocalLevels(),
            $this->getProvinceTwoLocalLevels(),
            $this->getProvinceThreeLocalLevels(),
            $this->getProvinceFourLocalLevels(),
            $this->getProvinceFiveLocalLevels(),
            $this->getProvinceSixLocalLevels(),
            $this->getProvinceSevenLocalLevels()


        );
    }

    /**
     * Get local levels of province one i.e., Koshi
     * @return array
     */
    public function getProvinceOneLocalLevels(): array
    {
        return array_merge(
            $this->getDistrictOneLocalLevels(),
            $this->getDistrictTwoLocalLevels(),
            $this->getDistrictThreeLocalLevels(),
            $this->getDistrictFourLocalLevels(),
            $this->getDistrictFiveLocalLevels(),
            $this->getDistrictSixLocalLevels(),
            $this->getDistrictSevenLocalLevels(),
            $this->getDistrictEightLocalLevels(),
            $this->getDistrictNineLocalLevels(),
            $this->getDistrictTenLocalLevels(),
            $this->getDistrictElevenLocalLevels(),
            $this->getDistrictTwelveLocalLevels(),
            $this->getDistrictThirteenLocalLevels(),
            $this->getDistrictFourteenLocalLevels(),
        );
    }

    /**
     * Get local levels of district one i.e., Bhojpur
     * @return array
     *
     */
    public function getDistrictOneLocalLevels(): array
    {
        return [
            ['name' => 'Bhojpur', 'wards' => 12, 'district_id' => 1, 'name_np' => 'भोजपुर'],
            ['name' => 'Shadanand', 'wards' => 14, 'district_id' => 1, 'name_np' => 'षडानन्द'],
            ['name' => 'Hatuwagadhi', 'wards' => 9, 'district_id' => 1, 'name_np' => 'हातुवागढी'],
            ['name' => 'Ramprasad Rai', 'wards' => 8, 'district_id' => 1, 'name_np' => 'रामप्रसाद राई'],
            ['name' => 'Aamchowk', 'wards' => 10, 'district_id' => 1, 'name_np' => 'आमचोक'],
            ['name' => 'Tyamke Maiyunm', 'wards' => 9, 'district_id' => 1, 'name_np' => 'ट्याम्के मयुङ'],
            ['name' => 'Arun', 'wards' => 7, 'district_id' => 1, 'name_np' => 'अरुण'],
            ['name' => 'Pauwadungma', 'wards' => 6, 'district_id' => 1, 'name_np' => 'पौवादुङमा'],
            ['name' => 'Salpasilichho', 'wards' => 6, 'district_id' => 1, 'name_np' => 'साल्पासिलिछो']
        ];

    }

    /**
     * Get local levels of district two i.e., Dhankuta
     * @return array
     *
     */

    public function getDistrictTwoLocalLevels(): array
    {
        return [
            ['name' => 'Dhankuta', 'wards' => 12, 'district_id' => 2, 'name_np' => 'धनकुटा'],
            ['name' => 'Pakhribas', 'wards' => 9, 'district_id' => 2, 'name_np' => 'पाख्रिबास'],
            ['name' => 'Mahalaxmi', 'wards' => 9, 'district_id' => 2, 'name_np' => 'महालक्ष्मी'],
            ['name' => 'Sangurigadhi', 'wards' => 10, 'district_id' => 2, 'name_np' => 'साङ्गुरीगढी'],
            ['name' => 'Chaubise', 'wards' => 8, 'district_id' => 2, 'name_np' => 'चौबिसे'],
            ['name' => 'Shahidbhumi', 'wards' => 7, 'district_id' => 2, 'name_np' => 'शहीदभूमि'],
            ['name' => 'Chhathar Jorpati', 'wards' => 6, 'district_id' => 2, 'name_np' => 'छथर जोरपाटी']
        ];
    }

    /**
     * Get local levels of district three i.e., Ilam
     * @return array
     */

    public function getDistrictThreeLocalLevels(): array
    {
        return [
            ['name' => 'Ilam', 'wards' => 1, 'district_id' => 3, 'name_np' => 'इलाम'],
            ['name' => 'Deumai', 'wards' => 1, 'district_id' => 3, 'name_np' => 'देउमाई'],
            ['name' => 'Mai', 'wards' => 1, 'district_id' => 3, 'name_np' => 'माई'],
            ['name' => 'Suryodaya', 'wards' => 1, 'district_id' => 3, 'name_np' => 'सूर्योदय'],
            ['name' => 'Phakphokthum', 'wards' => 1, 'district_id' => 3, 'name_np' => 'फा��फोकथुम'],
            ['name' => 'Mai Jogmai', 'wards' => 1, 'district_id' => 3, 'name_np' => 'माई जोगमाई'],
            ['name' => 'Chulachuli', 'wards' => 1, 'district_id' => 3, 'name_np' => 'चुलाचुली'],
            ['name' => 'Rong', 'wards' => 1, 'district_id' => 3, 'name_np' => 'रोङ'],
            ['name' => 'Mangsebung', 'wards' => 1, 'district_id' => 3, 'name_np' => 'माङसेबुङ'],
            ['name' => 'Sandakpur', 'wards' => 1, 'district_id' => 3, 'name_np' => 'सन्दकपुर']
        ];
    }

    /**
     * Get local levels of district four i.e., Jhapa
     * @return array
     */

    public function getDistrictFourLocalLevels(): array
    {
        return [
            ['name' => 'Mechinagar', 'wards' => 1, 'district_id' => 4, 'name_np' => 'मेचीनगर'],
            ['name' => 'Bhadrapur', 'wards' => 1, 'district_id' => 4, 'name_np' => 'भद्रपुर'],
            ['name' => 'Birtamod', 'wards' => 1, 'district_id' => 4, 'name_np' => 'बिर्तामोड'],
            ['name' => 'Arjundhara', 'wards' => 1, 'district_id' => 4, 'name_np' => 'अर्जुनधारा'],
            ['name' => 'Kankai', 'wards' => 1, 'district_id' => 4, 'name_np' => 'कन्काई'],
            ['name' => 'Shivasatakshi', 'wards' => 1, 'district_id' => 4, 'name_np' => 'शिवसताक्षी'],
            ['name' => 'Gauradaha', 'wards' => 1, 'district_id' => 4, 'name_np' => 'गौरादह'],
            ['name' => 'Damak', 'wards' => 1, 'district_id' => 4, 'name_np' => 'दमक'],
            ['name' => 'Buddhashanti', 'wards' => 1, 'district_id' => 4, 'name_np' => 'बुद्धशान्ति'],
            ['name' => 'Haldibari', 'wards' => 1, 'district_id' => 4, 'name_np' => 'हल्दीबारी'],
            ['name' => 'Kachankawal', 'wards' => 1, 'district_id' => 4, 'name_np' => 'कचनकवल'],
            ['name' => 'Barhadashi', 'wards' => 1, 'district_id' => 4, 'name_np' => 'बरडगिस'],
            ['name' => 'Jhapa', 'wards' => 1, 'district_id' => 4, 'name_np' => 'झापा'],
            ['name' => 'Gauriganj', 'wards' => 1, 'district_id' => 4, 'name_np' => 'गौरिगञ्ज'],
            ['name' => 'Kamal', 'wards' => 1, 'district_id' => 4, 'name_np' => 'कमल']
        ];
    }

    /**
     * Get local levels of district five i.e., Khotang
     * @return array
     */

    public function getDistrictFiveLocalLevels(): array
    {
        return [
            [
                'name' => 'Diktel Rupakot Majhuwagadhi',
                'wards' => 15,
                'district_id' => 5,
                'name_np' => 'दिक्तेल रुपाकोट मझुवागढी'
            ],
            ['name' => 'Halesi Tuwachung', 'wards' => 15, 'district_id' => 5, 'name_np' => 'हलेसी तुवाचुङ'],
            ['name' => 'Khotehang', 'wards' => 15, 'district_id' => 5, 'name_np' => 'खोटेहाङ'],
            ['name' => 'Diprung', 'wards' => 15, 'district_id' => 5, 'name_np' => 'दिप्रुङ'],
            ['name' => 'Aiselukharka', 'wards' => 15, 'district_id' => 5, 'name_np' => 'ऐसेलुखर्क'],
            ['name' => 'Jantedhunga', 'wards' => 15, 'district_id' => 5, 'name_np' => 'जन्तेढुङ्गा'],
            ['name' => 'Kepilasgadhi', 'wards' => 15, 'district_id' => 5, 'name_np' => 'केपिलासगढी'],
            ['name' => 'Barahpokhari', 'wards' => 15, 'district_id' => 5, 'name_np' => 'बराहपोखरी'],
            ['name' => 'Rawabesi', 'wards' => 15, 'district_id' => 5, 'name_np' => 'रावाबेसी'],
            ['name' => 'Sakela', 'wards' => 5, 'district_id' => 5, 'name_np' => 'साकेला']
        ];
    }

    /**
     * Get local levels of district six i.e., Morang
     * @return array
     */
    public function getDistrictSixLocalLevels(): array
    {
        return [
            ['name' => 'Biratnagar', 'wards' => 1, 'district_id' => 6, 'name_np' => 'विराटनगर'],
            ['name' => 'Sundar Haraicha', 'wards' => 1, 'district_id' => 6, 'name_np' => 'सुन्दर हरैचा'],
            ['name' => 'Belbari', 'wards' => 1, 'district_id' => 6, 'name_np' => 'बेलबारी'],
            ['name' => 'Pathari-Sanischare', 'wards' => 1, 'district_id' => 6, 'name_np' => 'पथरी-शनिश्चरे'],
            ['name' => 'Urlabari', 'wards' => 1, 'district_id' => 6, 'name_np' => 'उर्लाबारी'],
            ['name' => 'Rangeli', 'wards' => 1, 'district_id' => 6, 'name_np' => 'रङ्गेली'],
            ['name' => 'Letang Bhogateni', 'wards' => 1, 'district_id' => 6, 'name_np' => 'लेटाङ भोगटेनी'],
            ['name' => 'Ratuwamai', 'wards' => 1, 'district_id' => 6, 'name_np' => 'रतुवामाई'],
            ['name' => 'Sunawarshi', 'wards' => 1, 'district_id' => 6, 'name_np' => 'सुनवर्षी'],
            ['name' => 'Kerabari', 'wards' => 1, 'district_id' => 6, 'name_np' => 'केराबारी'],
            ['name' => 'Miklajung', 'wards' => 1, 'district_id' => 6, 'name_np' => 'मिक्लाजुङ'],
            ['name' => 'Kanepokhari', 'wards' => 1, 'district_id' => 6, 'name_np' => 'कानेपोखरी'],
            ['name' => 'Budhiganga', 'wards' => 1, 'district_id' => 6, 'name_np' => 'बुढीगंगा'],
            ['name' => 'Gramthan', 'wards' => 1, 'district_id' => 6, 'name_np' => 'ग्रामथान'],
            ['name' => 'Katahari', 'wards' => 1, 'district_id' => 6, 'name_np' => 'कटहरी'],
            ['name' => 'Dhanpalthan', 'wards' => 1, 'district_id' => 6, 'name_np' => 'धनपालथान'],
            ['name' => 'Jahada', 'wards' => 1, 'district_id' => 6, 'name_np' => 'जहदा']
        ];
    }

    /**
     * Get local levels of district seven i.e., Okhaldhunga
     * @return array
     */
    public function getDistrictSevenLocalLevels(): array
    {
        return [
            ['name' => 'Siddhicharan', 'wards' => 1, 'district_id' => 7, 'name_np' => 'सिद्धिचरण'],
            ['name' => 'Champadevi', 'wards' => 1, 'district_id' => 7, 'name_np' => 'चम्पादेवी'],
            ['name' => 'Sunkoshi', 'wards' => 1, 'district_id' => 7, 'name_np' => 'सुनकोशी'],
            ['name' => 'Likhu', 'wards' => 1, 'district_id' => 7, 'name_np' => 'लिखु'],
            ['name' => 'Chisankhugadhi', 'wards' => 1, 'district_id' => 7, 'name_np' => 'चिसंखुगढी'],
            ['name' => 'Molung', 'wards' => 1, 'district_id' => 7, 'name_np' => 'मोलुङ'],
            ['name' => 'Khijidemba', 'wards' => 1, 'district_id' => 7, 'name_np' => 'खिजिदेम्बा'],
            ['name' => 'Manebhanjyang', 'wards' => 1, 'district_id' => 7, 'name_np' => 'मानेभञ्ज्याङ']
        ];
    }

    /**
     * Get local levels of district eight i.e., Panchthar
     * @return array
     */

    public function getDistrictEightLocalLevels(): array
    {
        return [
            ['name' => 'Phidim', 'wards' => 1, 'district_id' => 8, 'name_np' => 'फिदिम'],
            ['name' => 'Hilihang', 'wards' => 1, 'district_id' => 8, 'name_np' => 'हिलिहाङ'],
            ['name' => 'Kummayak', 'wards' => 1, 'district_id' => 8, 'name_np' => 'कुम्मायक'],
            ['name' => 'Miklajung', 'wards' => 1, 'district_id' => 8, 'name_np' => 'मिक्लाजुङ'],
            ['name' => 'Phalelung', 'wards' => 1, 'district_id' => 8, 'name_np' => 'फालेलुङ'],
            ['name' => 'Phalgunanda', 'wards' => 1, 'district_id' => 8, 'name_np' => 'फाल्गुनन्द'],
            ['name' => 'Tumbewa', 'wards' => 1, 'district_id' => 8, 'name_np' => 'तुम्बेवा'],
            ['name' => 'Yangawarak', 'wards' => 1, 'district_id' => 8, 'name_np' => 'याङवरक']
        ];
    }

    /**
     * Get local levels of district nine i.e., Sankhuwasabha
     * @return array
     */
    public function getDistrictNineLocalLevels(): array
    {
        return [
            ['name' => 'Bhotkhola', 'wards' => 1, 'district_id' => 9, 'name_np' => 'भोटखोला'],
            ['name' => 'Chainpur', 'wards' => 1, 'district_id' => 9, 'name_np' => 'चैनपुर'],
            ['name' => 'Chichila', 'wards' => 1, 'district_id' => 9, 'name_np' => 'चिचिला'],
            ['name' => 'Dharmadevi', 'wards' => 1, 'district_id' => 9, 'name_np' => 'धर्मदेवी'],
            ['name' => 'Khandbari', 'wards' => 1, 'district_id' => 9, 'name_np' => 'खाँदबारी'],
            ['name' => 'Madi', 'wards' => 1, 'district_id' => 9, 'name_np' => 'मादी'],
            ['name' => 'Makalu', 'wards' => 1, 'district_id' => 9, 'name_np' => 'मकालु'],
            ['name' => 'Panchkhapan', 'wards' => 1, 'district_id' => 9, 'name_np' => 'पाँचखपन'],
            ['name' => 'Savapokhari', 'wards' => 1, 'district_id' => 9, 'name_np' => 'सभापोखरी'],
            ['name' => 'Silichong', 'wards' => 1, 'district_id' => 9, 'name_np' => 'सिलीचुङ']
        ];
    }

    /**
     * Get local levels of district ten i.e., Solukhumbu
     * @return array
     */

    public function getDistrictTenLocalLevels(): array
    {
        return [
            ['name' => 'Solududhkunda', 'wards' => 1, 'district_id' => 10, 'name_np' => 'सोलुदुधकुण्ड'],
            ['name' => 'Dudhakaushika', 'wards' => 1, 'district_id' => 10, 'name_np' => 'दुधकौशिका'],
            ['name' => 'Necha Salyan', 'wards' => 1, 'district_id' => 10, 'name_np' => 'नेचा सल्यान'],
            ['name' => 'Dudhkoshi', 'wards' => 1, 'district_id' => 10, 'name_np' => 'दुधकोशी'],
            ['name' => 'Maha Kulung', 'wards' => 1, 'district_id' => 10, 'name_np' => 'माहा कुलुङ'],
            ['name' => 'Sotang', 'wards' => 1, 'district_id' => 10, 'name_np' => 'सोताङ'],
            ['name' => 'Likhu Pike', 'wards' => 1, 'district_id' => 10, 'name_np' => 'लिखु पिके'],
            ['name' => 'Khumbu Pasanglhamu', 'wards' => 1, 'district_id' => 10, 'name_np' => 'खुम्बु पासाङल्हामु']
        ];
    }

    /**
     * Get local levels of district eleven i.e., Sunsari
     * @return array
     */
    public function getDistrictElevenLocalLevels(): array
    {
        return [
            ['name' => 'Itahari', 'wards' => 1, 'district_id' => 11, 'name_np' => 'इटहरी'],
            ['name' => 'Dharan', 'wards' => 1, 'district_id' => 11, 'name_np' => 'धरान'],
            ['name' => 'Inaruwa', 'wards' => 1, 'district_id' => 11, 'name_np' => 'इनरुवा'],
            ['name' => 'Duhabi', 'wards' => 1, 'district_id' => 11, 'name_np' => 'दुहबी'],
            ['name' => 'Ramdhuni-Bhasi', 'wards' => 1, 'district_id' => 11, 'name_np' => 'रामधुनी-भासी'],
            ['name' => 'Barahachhetra', 'wards' => 1, 'district_id' => 11, 'name_np' => 'बराहक्षेत्र'],
            ['name' => 'Koshi', 'wards' => 1, 'district_id' => 11, 'name_np' => 'कोशी'],
            ['name' => 'Gadhi', 'wards' => 1, 'district_id' => 11, 'name_np' => 'गढी'],
            ['name' => 'Barju', 'wards' => 1, 'district_id' => 11, 'name_np' => 'बरजू'],
            ['name' => 'Bhokraha', 'wards' => 1, 'district_id' => 11, 'name_np' => 'भोक्राहा'],
            ['name' => 'Harinagara', 'wards' => 1, 'district_id' => 11, 'name_np' => 'हरिनगरा'],
            ['name' => 'Dewanganj', 'wards' => 1, 'district_id' => 11, 'name_np' => 'देवानगंज']
        ];
    }

    /**
     * Get local levels of district twelve i.e., Taplejung
     * @return array
     */

    public function getDistrictTwelveLocalLevels(): array
    {
        return [
            ['name' => 'Phungling', 'wards' => 1, 'district_id' => 12, 'name_np' => 'फुङलिङ'],
            ['name' => 'Aathrai Tribeni', 'wards' => 1, 'district_id' => 12, 'name_np' => 'आठराई त्रिवेणी'],
            ['name' => 'Sidingwa', 'wards' => 1, 'district_id' => 12, 'name_np' => 'सिदिङ्वा'],
            ['name' => 'Phaktanglung', 'wards' => 1, 'district_id' => 12, 'name_np' => 'फक्ताङलुङ'],
            ['name' => 'Mikkwakhola', 'wards' => 1, 'district_id' => 12, 'name_np' => 'मिक्वाखोला'],
            ['name' => 'Meringden', 'wards' => 1, 'district_id' => 12, 'name_np' => 'मेरिङदेन'],
            ['name' => 'Maiwakhola', 'wards' => 1, 'district_id' => 12, 'name_np' => 'मैवाखोला'],
            ['name' => 'Pathibhara Yangwarak', 'wards' => 1, 'district_id' => 12, 'name_np' => 'पाथीभरा याङवरक'],
            ['name' => 'Sirijangha', 'wards' => 1, 'district_id' => 12, 'name_np' => 'सिरीजङ्घा']
        ];
    }

    /**
     * Get local levels of district thirteen i.e., Terhathum
     * @return array
     */

    public function getDistrictThirteenLocalLevels(): array
    {
        return [
            ['name' => 'Aathrai', 'wards' => 1, 'district_id' => 13, 'name_np' => 'आठराई'],
            ['name' => 'Chhathar', 'wards' => 1, 'district_id' => 13, 'name_np' => 'छथर'],
            ['name' => 'Laligurans', 'wards' => 1, 'district_id' => 13, 'name_np' => 'लालीगुराँस'],
            ['name' => 'Menchhayayem', 'wards' => 1, 'district_id' => 13, 'name_np' => 'मेन्छयायेम'],
            ['name' => 'Myanglung', 'wards' => 1, 'district_id' => 13, 'name_np' => 'म्याङलुङ'],
            ['name' => 'Phedap', 'wards' => 1, 'district_id' => 13, 'name_np' => 'फेदाप']
        ];
    }

    /**
     * Get local levels of district fourteen i.e., Udayapur
     * @return array
     */

    public function getDistrictFourteenLocalLevels(): array
    {
        return [
            ['name' => 'Triyuga', 'wards' => 1, 'district_id' => 14, 'name_np' => 'त्रियुगा'],
            ['name' => 'Katari', 'wards' => 1, 'district_id' => 14, 'name_np' => 'कटारी'],
            ['name' => 'Chaudandigadhi', 'wards' => 1, 'district_id' => 14, 'name_np' => 'चौदण्डीगढी'],
            ['name' => 'Belaka', 'wards' => 1, 'district_id' => 14, 'name_np' => 'बेलका'],
            ['name' => 'Udayapurgadhi', 'wards' => 1, 'district_id' => 14, 'name_np' => 'उदयपुरगढी'],
            ['name' => 'Rautamai', 'wards' => 1, 'district_id' => 14, 'name_np' => 'रौतामाई'],
            ['name' => 'Tapli', 'wards' => 1, 'district_id' => 14, 'name_np' => 'ताप्ली'],
            ['name' => 'Limchungbung', 'wards' => 1, 'district_id' => 14, 'name_np' => 'लिम्चुङबुङ']
        ];
    }

    /**
     * Get local levels of province two i.e., Madhesh
     * @return array
     */

    public function getProvinceTwoLocalLevels(): array
    {
        return array_merge(
            $this->getDistrictFifteenLocalLevels(),
            $this->getDistrictSixteenLocalLevels(),
            $this->getDistrictSeventeenLocalLevels(),
            $this->getDistrictEighteenLocalLevels(),
            $this->getDistrictNineteenLocalLevels(),
            $this->getDistrictTwentyLocalLevels(),
            $this->getDistrictTwentyOneLocalLevels(),
            $this->getDistrictTwentyTwoLocalLevels(),
        );
    }

    /**
     * Get local levels of district fifteen i.e., Parsa
     * @return array
     */

    public function getDistrictFifteenLocalLevels(): array
    {
        return [
            ['name' => 'Birgunj', 'wards' => 1, 'district_id' => 15, 'name_np' => 'वीरगञ्ज'],
            ['name' => 'Bahudarmai', 'wards' => 1, 'district_id' => 15, 'name_np' => 'बहुदरमाई'],
            ['name' => 'Parsagadhi', 'wards' => 1, 'district_id' => 15, 'name_np' => 'पर्सागढी'],
            ['name' => 'Pokhariya', 'wards' => 1, 'district_id' => 15, 'name_np' => 'पोखरिया'],
            ['name' => 'Bindabasini', 'wards' => 1, 'district_id' => 15, 'name_np' => 'बिन्दबासिनी'],
            ['name' => 'Dhobini', 'wards' => 1, 'district_id' => 15, 'name_np' => 'धोबिनी'],
            ['name' => 'Chhipaharmai', 'wards' => 1, 'district_id' => 15, 'name_np' => 'छिपहरमाई'],
            ['name' => 'Jagarnathpur', 'wards' => 1, 'district_id' => 15, 'name_np' => 'जगरनाथपुर'],
            ['name' => 'Jirabhawani', 'wards' => 1, 'district_id' => 15, 'name_np' => 'जिराभवानी'],
            ['name' => 'Kalikamai', 'wards' => 1, 'district_id' => 15, 'name_np' => 'कालिकामाई'],
            ['name' => 'Pakaha Mainpur', 'wards' => 1, 'district_id' => 15, 'name_np' => 'पकाहा मैनपुर'],
            ['name' => 'Paterwa Sugauli', 'wards' => 1, 'district_id' => 15, 'name_np' => 'पतेर्वा स��गौली'],
            ['name' => 'Sakhuwa Prasauni', 'wards' => 1, 'district_id' => 15, 'name_np' => 'सखुवा प्रसौनी'],
            ['name' => 'Thori', 'wards' => 1, 'district_id' => 15, 'name_np' => 'ठोरी']
        ];
    }

    /**
     * Get local levels of district sixteen i.e., Bara
     * @return array
     */

    public function getDistrictSixteenLocalLevels(): array
    {
        return [
            ['name' => 'Kalaiya', 'wards' => 1, 'district_id' => 16, 'name_np' => 'कलैया'],
            ['name' => 'Jeetpur Simara', 'wards' => 1, 'district_id' => 16, 'name_np' => 'जीतपुर सिमरा'],
            ['name' => 'Kolhabi', 'wards' => 1, 'district_id' => 16, 'name_np' => 'कोल्हबी'],
            ['name' => 'Nijgadh', 'wards' => 1, 'district_id' => 16, 'name_np' => 'निजगढ'],
            ['name' => 'Mahagadhimai', 'wards' => 1, 'district_id' => 16, 'name_np' => 'महागढीमाई'],
            ['name' => 'Simraungadh', 'wards' => 1, 'district_id' => 16, 'name_np' => 'सिम्रौनगढ'],
            ['name' => 'Pacharauta', 'wards' => 1, 'district_id' => 16, 'name_np' => 'पचरौता'],
            ['name' => 'Pheta', 'wards' => 1, 'district_id' => 16, 'name_np' => '���ेटा'],
            ['name' => 'Bishrampur', 'wards' => 1, 'district_id' => 16, 'name_np' => 'बिश्रामपुर'],
            ['name' => 'Prasauni', 'wards' => 1, 'district_id' => 16, 'name_np' => 'प्रसौनी'],
            ['name' => 'Adarsh Kotwal', 'wards' => 1, 'district_id' => 16, 'name_np' => 'आदर्श कोटवाल'],
            ['name' => 'Karaiyamai', 'wards' => 1, 'district_id' => 16, 'name_np' => 'करैयामाई'],
            ['name' => 'Devtal', 'wards' => 1, 'district_id' => 16, 'name_np' => 'देवताल'],
            ['name' => 'Parwanipur', 'wards' => 1, 'district_id' => 16, 'name_np' => 'परवानीपुर'],
            ['name' => 'Baragadhi', 'wards' => 1, 'district_id' => 16, 'name_np' => 'बरागढी'],
            ['name' => 'Suwarna', 'wards' => 1, 'district_id' => 16, 'name_np' => 'सुवर्ण']
        ];
    }

    /**
     * Get local levels of district seventeen i.e., Rautahat
     * @return array
     */
    public function getDistrictSeventeenLocalLevels(): array
    {
        return [
            ['name' => 'Baudhimai', 'wards' => 1, 'district_id' => 17, 'name_np' => 'बौधीमाई'],
            ['name' => 'Brindaban', 'wards' => 1, 'district_id' => 17, 'name_np' => 'वृन्दावन'],
            ['name' => 'Chandrapur', 'wards' => 1, 'district_id' => 17, 'name_np' => 'चन्द्रपुर'],
            ['name' => 'Dewahi Gonahi', 'wards' => 1, 'district_id' => 17, 'name_np' => 'देवाही गोनाही'],
            ['name' => 'Gadhimai, Nepal', 'wards' => 1, 'district_id' => 17, 'name_np' => 'गढीमाई'],
            ['name' => 'Garuda', 'wards' => 1, 'district_id' => 17, 'name_np' => 'गरुडा'],
            ['name' => 'Gaur', 'wards' => 1, 'district_id' => 17, 'name_np' => 'गौर'],
            ['name' => 'Gujara', 'wards' => 1, 'district_id' => 17, 'name_np' => 'गुजरा'],
            ['name' => 'Ishanath', 'wards' => 1, 'district_id' => 17, 'name_np' => 'ईशनाथ'],
            ['name' => 'Katahariya', 'wards' => 1, 'district_id' => 17, 'name_np' => 'कटहरिया'],
            ['name' => 'Madhav Narayan', 'wards' => 1, 'district_id' => 17, 'name_np' => 'माधव नारायण'],
            ['name' => 'Maulapur', 'wards' => 1, 'district_id' => 17, 'name_np' => 'मौलापुर'],
            ['name' => 'Paroha', 'wards' => 1, 'district_id' => 17, 'name_np' => 'परोहा'],
            ['name' => 'Phatuwa Bijayapur', 'wards' => 1, 'district_id' => 17, 'name_np' => 'फतुवा बिजयपुर'],
            ['name' => 'Rajdevi', 'wards' => 1, 'district_id' => 17, 'name_np' => 'राजदेवी'],
            ['name' => 'Rajpur', 'wards' => 1, 'district_id' => 17, 'name_np' => 'राजपुर'],
            ['name' => 'Durga Bhagwati', 'wards' => 1, 'district_id' => 17, 'name_np' => 'दुर्गा भगवती'],
            ['name' => 'Yamunamai', 'wards' => 1, 'district_id' => 17, 'name_np' => 'यमुनामाई']
        ];
    }

    /**
     * Get local levels of district eighteen i.e., Sarlahi
     * @return array
     */

    public function getDistrictEighteenLocalLevels(): array
    {
        return [
            ['name' => 'Bagmati', 'wards' => 1, 'district_id' => 18, 'name_np' => 'बागमती'],
            ['name' => 'Balara', 'wards' => 1, 'district_id' => 18, 'name_np' => 'बलरा'],
            ['name' => 'Barahathwa', 'wards' => 1, 'district_id' => 18, 'name_np' => 'बरहथवा'],
            ['name' => 'Godaita', 'wards' => 1, 'district_id' => 18, 'name_np' => 'गोडैता'],
            ['name' => 'Harion', 'wards' => 1, 'district_id' => 18, 'name_np' => 'हरिवन'],
            ['name' => 'Haripur', 'wards' => 1, 'district_id' => 18, 'name_np' => 'हरिपुर'],
            ['name' => 'Haripurwa', 'wards' => 1, 'district_id' => 18, 'name_np' => 'हरिपुर्वा'],
            ['name' => 'Ishworpur', 'wards' => 1, 'district_id' => 18, 'name_np' => 'ईश्वरपुर'],
            ['name' => 'Kabilasi', 'wards' => 1, 'district_id' => 18, 'name_np' => 'कविलासी'],
            ['name' => 'Lalbandi', 'wards' => 1, 'district_id' => 18, 'name_np' => 'लालबन्दी'],
            ['name' => 'Malangwa', 'wards' => 1, 'district_id' => 18, 'name_np' => 'मलंगवा'],
            ['name' => 'Basbariya', 'wards' => 1, 'district_id' => 18, 'name_np' => 'बसबरिया'],
            ['name' => 'Bishnu', 'wards' => 1, 'district_id' => 18, 'name_np' => 'विष्णु'],
            ['name' => 'Brahampuri', 'wards' => 1, 'district_id' => 18, 'name_np' => 'ब्रह्मपुरी'],
            ['name' => 'Chakraghatta', 'wards' => 1, 'district_id' => 18, 'name_np' => 'चक्रघट्टा'],
            ['name' => 'Chandranagar', 'wards' => 1, 'district_id' => 18, 'name_np' => 'चन्द्रनगर'],
            ['name' => 'Dhankaul', 'wards' => 1, 'district_id' => 18, 'name_np' => 'धनकौल'],
            ['name' => 'Kaudena', 'wards' => 1, 'district_id' => 18, 'name_np' => 'कौडेना'],
            ['name' => 'Parsa', 'wards' => 1, 'district_id' => 18, 'name_np' => 'पर्सा'],
            ['name' => 'Ramnagar', 'wards' => 1, 'district_id' => 18, 'name_np' => 'रामनगर']
        ];
    }


    /**
     * Get local levels of district nineteen i.e., Dhanusha
     * @return array
     */
    public function getDistrictNineteenLocalLevels(): array
    {
        return [
            ['name' => 'Janakpur', 'wards' => 1, 'district_id' => 19, 'name_np' => 'जनकपुर'],
            ['name' => 'Chhireshwarnath', 'wards' => 1, 'district_id' => 19, 'name_np' => 'छिरेश्वरनाथ'],
            ['name' => 'Ganeshman Charanath', 'wards' => 1, 'district_id' => 19, 'name_np' => 'गणेशमान चारनाथ'],
            ['name' => 'Dhanusadham', 'wards' => 1, 'district_id' => 19, 'name_np' => 'धनुषाधाम'],
            ['name' => 'Nagarain', 'wards' => 1, 'district_id' => 19, 'name_np' => 'नगराइन'],
            ['name' => 'Bideha', 'wards' => 1, 'district_id' => 19, 'name_np' => 'विदेह'],
            ['name' => 'Mithila', 'wards' => 1, 'district_id' => 19, 'name_np' => 'मिथिला'],
            ['name' => 'Sahidnagar', 'wards' => 1, 'district_id' => 19, 'name_np' => 'शहीदनगर'],
            ['name' => 'Sabaila', 'wards' => 1, 'district_id' => 19, 'name_np' => 'सबलिया'],
            ['name' => 'Kamala', 'wards' => 1, 'district_id' => 19, 'name_np' => 'कमला'],
            ['name' => 'Mithila Bihari', 'wards' => 1, 'district_id' => 19, 'name_np' => 'मिथिला बिहारी'],
            ['name' => 'Hansapur', 'wards' => 1, 'district_id' => 19, 'name_np' => 'हंसपुर'],
            ['name' => 'Janaknandani', 'wards' => 1, 'district_id' => 19, 'name_np' => 'जनकनन्दनी'],
            ['name' => 'Bateshwar', 'wards' => 1, 'district_id' => 19, 'name_np' => 'बटेश्वर'],
            [
                'name' => 'Mukhiyapatti Musharniya',
                'wards' => 1,
                'district_id' => 19,
                'name_np' => 'मुखियापट्टी मुशरनिया'
            ],
            ['name' => 'Lakshminya', 'wards' => 1, 'district_id' => 19, 'name_np' => 'लक्ष्मीनिया'],
            ['name' => 'Aurahi', 'wards' => 1, 'district_id' => 19, 'name_np' => 'औरही'],
            ['name' => 'Dhanauji', 'wards' => 1, 'district_id' => 19, 'name_np' => 'धनौजी']
        ];
    }


    /**
     * Get local levels of district twenty i.e., Siraha
     * @return array
     */
    public function getDistrictTwentyLocalLevels(): array
    {
        return [
            ['name' => 'Lahan', 'wards' => 1, 'district_id' => 20, 'name_np' => 'लहान'],
            ['name' => 'Dhangadhimai', 'wards' => 1, 'district_id' => 20, 'name_np' => 'धनगढीमाई'],
            ['name' => 'Siraha', 'wards' => 1, 'district_id' => 20, 'name_np' => 'सिराहा'],
            ['name' => 'Golbazar', 'wards' => 1, 'district_id' => 20, 'name_np' => 'गोलबजार'],
            ['name' => 'Mirchaiya', 'wards' => 1, 'district_id' => 20, 'name_np' => 'मिर्चैया'],
            ['name' => 'Kalyanpur', 'wards' => 1, 'district_id' => 20, 'name_np' => 'कल्याणपुर'],
            ['name' => 'Karjanha', 'wards' => 1, 'district_id' => 20, 'name_np' => 'कर्जन्हा'],
            ['name' => 'Sukhipur', 'wards' => 1, 'district_id' => 20, 'name_np' => 'सुखीपुर'],
            ['name' => 'Bhagwanpur', 'wards' => 1, 'district_id' => 20, 'name_np' => 'भगवानपुर'],
            ['name' => 'Aurahi', 'wards' => 1, 'district_id' => 20, 'name_np' => 'औरही'],
            ['name' => 'Bishnupur', 'wards' => 1, 'district_id' => 20, 'name_np' => 'विष्णुपुर'],
            ['name' => 'Bariyarpatti', 'wards' => 1, 'district_id' => 20, 'name_np' => 'बरियारपट्टी'],
            ['name' => 'Lakshmipur Patari', 'wards' => 1, 'district_id' => 20, 'name_np' => 'लक्ष्मीपुर पटरी'],
            ['name' => 'Naraha', 'wards' => 1, 'district_id' => 20, 'name_np' => 'नरहा'],
            ['name' => 'Sakhuwanankar Katti', 'wards' => 1, 'district_id' => 20, 'name_np' => 'सखुवानन्कर कट्टी'],
            ['name' => 'Arnama', 'wards' => 1, 'district_id' => 20, 'name_np' => 'अर्नमा'],
            ['name' => 'Navarajpur', 'wards' => 1, 'district_id' => 20, 'name_np' => 'नवराजपुर']
        ];
    }

    /**
     * Get local levels of district twenty-one i.e., Mahottari
     * @return array
     */

    public function getDistrictTwentyOneLocalLevels(): array
    {
        return [
            ['name' => 'Aurahi', 'wards' => 1, 'district_id' => 21, 'name_np' => 'औरही'],
            ['name' => 'Balawa', 'wards' => 1, 'district_id' => 21, 'name_np' => 'बलवा'],
            ['name' => 'Bardibas', 'wards' => 1, 'district_id' => 21, 'name_np' => 'बर्दिबास'],
            ['name' => 'Bhangaha', 'wards' => 1, 'district_id' => 21, 'name_np' => 'भंगाहा'],
            ['name' => 'Gaushala', 'wards' => 1, 'district_id' => 21, 'name_np' => 'गौशाला'],
            ['name' => 'Jaleshwor', 'wards' => 1, 'district_id' => 21, 'name_np' => 'जलेश्वर'],
            ['name' => 'Loharpatti', 'wards' => 1, 'district_id' => 21, 'name_np' => 'लोहर्पट्टी'],
            ['name' => 'ManaraShiswa', 'wards' => 1, 'district_id' => 21, 'name_np' => 'मनरा शिसवा'],
            ['name' => 'Matihani', 'wards' => 1, 'district_id' => 21, 'name_np' => 'मटिहानी'],
            ['name' => 'Ramgopalpur', 'wards' => 1, 'district_id' => 21, 'name_np' => 'र��मगोपालपुर'],
            ['name' => 'Ekdara', 'wards' => 1, 'district_id' => 21, 'name_np' => 'एकडारा'],
            ['name' => 'Mahottari', 'wards' => 1, 'district_id' => 21, 'name_np' => 'महोत्तरी'],
            ['name' => 'Pipara', 'wards' => 1, 'district_id' => 21, 'name_np' => 'पिपरा'],
            ['name' => 'Samsi', 'wards' => 1, 'district_id' => 21, 'name_np' => 'सम्सी'],
            ['name' => 'Sonama', 'wards' => 1, 'district_id' => 21, 'name_np' => 'सोनमा']
        ];
    }

    /**
     * Get local levels of district twenty-two i.e., Saptari
     * @return array
     */

    public function getDistrictTwentyTwoLocalLevels(): array
    {
        return [
            ['name' => 'Bodebarsain', 'wards' => 1, 'district_id' => 22, 'name_np' => 'बोदेबरसाइन'],
            ['name' => 'Dakneshwori', 'wards' => 1, 'district_id' => 22, 'name_np' => 'डाक्नेश्वरी'],
            ['name' => 'Hanumannagar Kankalini', 'wards' => 1, 'district_id' => 22, 'name_np' => 'हनुमाननगर कङ्कालिनी'],
            ['name' => 'Kanchanrup', 'wards' => 1, 'district_id' => 22, 'name_np' => 'कञ्चनरुप'],
            ['name' => 'Khadak', 'wards' => 1, 'district_id' => 22, 'name_np' => 'खडक'],
            ['name' => 'Sambhunath', 'wards' => 1, 'district_id' => 22, 'name_np' => 'शम्भुनाथ'],
            ['name' => 'Saptakoshi', 'wards' => 1, 'district_id' => 22, 'name_np' => 'सप्तकोशी'],
            ['name' => 'Surunga', 'wards' => 1, 'district_id' => 22, 'name_np' => 'सुरुङ्गा'],
            ['name' => 'Rajbiraj', 'wards' => 1, 'district_id' => 22, 'name_np' => 'राजविराज'],
            [
                'name' => 'Agnisaira Krishnasavaran',
                'wards' => 1,
                'district_id' => 22,
                'name_np' => 'अग्निसाइरा कृष्णसवरन'
            ],
            ['name' => 'Balan-Bihul', 'wards' => 1, 'district_id' => 22, 'name_np' => 'बलान-बिहुल'],
            ['name' => 'Rajgadh', 'wards' => 1, 'district_id' => 22, 'name_np' => 'राजगढ'],
            ['name' => 'Bishnupur', 'wards' => 1, 'district_id' => 22, 'name_np' => 'विष्णुपुर'],
            ['name' => 'Chhinnamasta', 'wards' => 1, 'district_id' => 22, 'name_np' => 'छिन्नमस्ता'],
            ['name' => 'Mahadeva', 'wards' => 1, 'district_id' => 22, 'name_np' => 'महादेवा'],
            ['name' => 'Rupani', 'wards' => 1, 'district_id' => 22, 'name_np' => 'रुपनी'],
            ['name' => 'Tilathi Koiladi', 'wards' => 1, 'district_id' => 22, 'name_np' => 'तिलाठी कोईलाडी'],
            ['name' => 'Tirhut', 'wards' => 1, 'district_id' => 22, 'name_np' => 'तिरहुत']
        ];
    }


    /**
     * Get local levels of province three i.e., Bagmati
     * @return array
     */

    public function getProvinceThreeLocalLevels(): array
    {
        return array_merge(
            $this->getDistrictTwentyThreeLocalLevels(),
            $this->getDistrictTwentyFourLocalLevels(),
            $this->getDistrictTwentyFiveLocalLevels(),
            $this->getDistrictTwentySixLocalLevels(),
            $this->getDistrictTwentySevenLocalLevels(),
            $this->getDistrictTwentyEightLocalLevels(),
            $this->getDistrictTwentyNineLocalLevels(),
            $this->getDistrictThirtyLocalLevels(),
            $this->getDistrictThirtyOneLocalLevels(),
            $this->getDistrictThirtyTwoLocalLevels(),
            $this->getDistrictThirtyThreeLocalLevels(),
            $this->getDistrictThirtyFourLocalLevels(),
            $this->getDistrictThirtyFiveLocalLevels(),
        );
    }


    /**
     * Get local levels of district twenty three i.e., Sindhuli
     * @return array
     */
    public function getDistrictTwentyThreeLocalLevels(): array
    {
        return [
            ['name' => 'Kamalamai', 'wards' => 1, 'district_id' => 23, 'name_np' => 'कमलामाई'],
            ['name' => 'Dudhauli', 'wards' => 1, 'district_id' => 23, 'name_np' => 'दुधौली'],
            ['name' => 'Sunkoshi', 'wards' => 1, 'district_id' => 23, 'name_np' => 'सुनकोशी'],
            ['name' => 'Hariharpurgadhi', 'wards' => 1, 'district_id' => 23, 'name_np' => 'हरिहरपुरगढी'],
            ['name' => 'Tinpatan', 'wards' => 1, 'district_id' => 23, 'name_np' => 'तिनपाटन'],
            ['name' => 'Marin', 'wards' => 1, 'district_id' => 23, 'name_np' => 'मरिन'],
            ['name' => 'Golanjor', 'wards' => 1, 'district_id' => 23, 'name_np' => 'गोलन्जोर'],
            ['name' => 'Phikkal', 'wards' => 1, 'district_id' => 23, 'name_np' => 'फिक्कल'],
            ['name' => 'Ghyanglekh', 'wards' => 1, 'district_id' => 23, 'name_np' => 'घ्���ाङलेख']
        ];
    }


    /**
     * Get local levels of district twenty four i.e., Ramechhap
     * @return array
     */
    public function getDistrictTwentyFourLocalLevels(): array
    {
        return [
            ['name' => 'Manthali', 'wards' => 1, 'district_id' => 24, 'name_np' => 'मन्थली'],
            ['name' => 'Ramechhap', 'wards' => 1, 'district_id' => 24, 'name_np' => 'रामेछाप'],
            ['name' => 'Umakunda', 'wards' => 1, 'district_id' => 24, 'name_np' => 'उमाकुण्ड'],
            ['name' => 'Khandadevi', 'wards' => 1, 'district_id' => 24, 'name_np' => 'खाँडादेवी'],
            ['name' => 'Gokulganga', 'wards' => 1, 'district_id' => 24, 'name_np' => 'गोकुलगंगा'],
            ['name' => 'Doramba', 'wards' => 1, 'district_id' => 24, 'name_np' => 'दोरम्बा'],
            ['name' => 'Likhu', 'wards' => 1, 'district_id' => 24, 'name_np' => 'लिखु'],
            ['name' => 'Sunapati', 'wards' => 1, 'district_id' => 24, 'name_np' => 'सुनापति']
        ];
    }

    /**
     * Get local levels of district twenty five i.e., Dolakha
     * @return array
     */

    public function getDistrictTwentyFiveLocalLevels(): array
    {
        return [
            ['name' => 'Bhimeswor', 'wards' => 1, 'district_id' => 25, 'name_np' => 'भिमेश्वर'],
            ['name' => 'Jiri', 'wards' => 1, 'district_id' => 25, 'name_np' => 'जिरी'],
            ['name' => 'Kalinchok', 'wards' => 1, 'district_id' => 25, 'name_np' => 'कालिञ्चोक'],
            ['name' => 'Melung', 'wards' => 1, 'district_id' => 25, 'name_np' => 'मेलुङ'],
            ['name' => 'Bigu', 'wards' => 1, 'district_id' => 25, 'name_np' => 'बिगु'],
            ['name' => 'Gaurishankar', 'wards' => 1, 'district_id' => 25, 'name_np' => 'गौरीशंकर'],
            ['name' => 'Baiteshwor', 'wards' => 1, 'district_id' => 25, 'name_np' => 'बैतेश्वर'],
            ['name' => 'Sailung', 'wards' => 1, 'district_id' => 25, 'name_np' => 'सैलुङ'],
            ['name' => 'Tamakoshi', 'wards' => 1, 'district_id' => 25, 'name_np' => 'तामाकोशी']
        ];
    }

    /**
     * Get local levels of district twenty six i.e., Bhaktapur
     * @return array
     */

    public function getDistrictTwentySixLocalLevels(): array
    {
        return [
            ['name' => 'Bhaktapur', 'wards' => 1, 'district_id' => 26, 'name_np' => 'भक्तपुर'],
            ['name' => 'Changunarayan', 'wards' => 1, 'district_id' => 26, 'name_np' => 'चाँगुनारायण'],
            ['name' => 'Madhyapur Thimi', 'wards' => 1, 'district_id' => 26, 'name_np' => 'मध्यपुर थि��ी'],
            ['name' => 'Suryabinayak', 'wards' => 1, 'district_id' => 26, 'name_np' => 'सूर्यविनायक']
        ];
    }

    /**
     * Get local levels of district twenty seven i.e., Dhading
     * @return array
     */

    public function getDistrictTwentySevenLocalLevels(): array
    {
        return [
            ['name' => 'Dhunibeshi', 'wards' => 1, 'district_id' => 27, 'name_np' => 'धुनीबेशी'],
            ['name' => 'Nilkantha', 'wards' => 1, 'district_id' => 27, 'name_np' => 'नीलकण्ठ'],
            ['name' => 'Khaniyabas', 'wards' => 1, 'district_id' => 27, 'name_np' => 'खनियाबास'],
            ['name' => 'Gajuri', 'wards' => 1, 'district_id' => 27, 'name_np' => 'गजुरी'],
            ['name' => 'Galchhi', 'wards' => 1, 'district_id' => 27, 'name_np' => 'गल्छी'],
            ['name' => 'Gangajamuna', 'wards' => 1, 'district_id' => 27, 'name_np' => 'गङ्गाजमुना'],
            ['name' => 'Jwalamukhi', 'wards' => 1, 'district_id' => 27, 'name_np' => 'ज्वालामुखी'],
            ['name' => 'Thakre', 'wards' => 1, 'district_id' => 27, 'name_np' => 'थाक्रे'],
            ['name' => 'Netrawati Dabjong', 'wards' => 1, 'district_id' => 27, 'name_np' => 'नेत्रावती डबजोङ'],
            ['name' => 'Benighat Rorang', 'wards' => 1, 'district_id' => 27, 'name_np' => 'बेनीघाट रोराङ'],
            ['name' => 'Rubi Valley', 'wards' => 1, 'district_id' => 27, 'name_np' => 'रुबी भ्याली'],
            ['name' => 'Siddhalek', 'wards' => 1, 'district_id' => 27, 'name_np' => 'सिद्धलेक'],
            ['name' => 'Tripurasundari', 'wards' => 1, 'district_id' => 27, 'name_np' => 'त्रिपुरासुन्दरी']
        ];
    }


    /**
     * Get local levels of district twenty eight i.e., Kathmandu
     * @return array
     */
    public function getDistrictTwentyEightLocalLevels(): array
    {
        return [
            ['name' => 'Kathmandu', 'wards' => 1, 'district_id' => 28, 'name_np' => 'काठमाडौं'],
            ['name' => 'Budhanilkantha', 'wards' => 1, 'district_id' => 28, 'name_np' => 'बुढानीलकण्ठ'],
            ['name' => 'Tarakeshwar', 'wards' => 1, 'district_id' => 28, 'name_np' => 'तारकेश्वर'],
            ['name' => 'Gokarneshwar', 'wards' => 1, 'district_id' => 28, 'name_np' => 'गोकर्णेश्वर'],
            ['name' => 'Chandragiri', 'wards' => 1, 'district_id' => 28, 'name_np' => 'चन्द्रागिरी'],
            ['name' => 'Tokha', 'wards' => 1, 'district_id' => 28, 'name_np' => 'टोखा'],
            ['name' => 'Kageshwari-Manohara', 'wards' => 1, 'district_id' => 28, 'name_np' => 'कागेश्वरी-मनोहरा'],
            ['name' => 'Nagarjun', 'wards' => 1, 'district_id' => 28, 'name_np' => 'नागार्जुन'],
            ['name' => 'Kirtipur', 'wards' => 1, 'district_id' => 28, 'name_np' => 'कीर्तिपुर']
        ];
    }

    /**
     * Get local levels of district twenty nine i.e., Kavrepalanchok
     * @return array
     */

    public function getDistrictTwentyNineLocalLevels(): array
    {
        return [
            ['name' => 'Banepa', 'wards' => 1, 'district_id' => 29, 'name_np' => 'बनेपा'],
            ['name' => 'Bethanchok', 'wards' => 1, 'district_id' => 29, 'name_np' => 'बेथानचोक'],
            ['name' => 'Bhumlu', 'wards' => 1, 'district_id' => 29, 'name_np' => 'भुम्लु'],
            ['name' => 'Chauri Deurali', 'wards' => 1, 'district_id' => 29, 'name_np' => 'चौरी देउराली'],
            ['name' => 'Dhulikhel', 'wards' => 1, 'district_id' => 29, 'name_np' => 'धुलिखेल'],
            ['name' => 'Khani Khola', 'wards' => 1, 'district_id' => 29, 'name_np' => 'खानी खोला'],
            ['name' => 'Mahabharat', 'wards' => 1, 'district_id' => 29, 'name_np' => 'महाभारत'],
            ['name' => 'Mandandeupur', 'wards' => 1, 'district_id' => 29, 'name_np' => 'मण्डनदेउपुर'],
            ['name' => 'Namobuddha', 'wards' => 1, 'district_id' => 29, 'name_np' => 'नमोबुद्ध'],
            ['name' => 'Panauti', 'wards' => 1, 'district_id' => 29, 'name_np' => 'पनौती'],
            ['name' => 'Panchkhal', 'wards' => 1, 'district_id' => 29, 'name_np' => 'पाँचखाल'],
            ['name' => 'Roshi', 'wards' => 1, 'district_id' => 29, 'name_np' => 'रोशी'],
            ['name' => 'Temal', 'wards' => 1, 'district_id' => 29, 'name_np' => 'तेमाल']
        ];
    }

    /**
     * Get local levels of district thirty i.e., Lalitpur
     * @return array
     */

    public function getDistrictThirtyLocalLevels(): array
    {
        return [
            ['name' => 'Lalitpur', 'wards' => 1, 'district_id' => 30, 'name_np' => 'ललितपुर'],
            ['name' => 'Mahalaxmi', 'wards' => 1, 'district_id' => 30, 'name_np' => 'महालक्ष्मी'],
            ['name' => 'Godawari', 'wards' => 1, 'district_id' => 30, 'name_np' => 'गोदावरी'],
            ['name' => 'Konjyoson', 'wards' => 1, 'district_id' => 30, 'name_np' => 'कोञ्ज्योसोम'],
            ['name' => 'Bagmati', 'wards' => 1, 'district_id' => 30, 'name_np' => 'बागमती'],
            ['name' => 'Mahankal', 'wards' => 1, 'district_id' => 30, 'name_np' => 'महांकाल']
        ];
    }

    /**
     * Get local levels of district thirty one i.e., Nuwakot
     * @return array
     */

    public function getDistrictThirtyOneLocalLevels(): array
    {
        return [
            ['name' => 'Bidur', 'wards' => 1, 'district_id' => 31, 'name_np' => 'बिदुर'],
            ['name' => 'Belkotgadhi', 'wards' => 1, 'district_id' => 31, 'name_np' => 'बेलकोटगढी'],
            ['name' => 'Kakani', 'wards' => 1, 'district_id' => 31, 'name_np' => 'ककनी'],
            ['name' => 'Panchakanya', 'wards' => 1, 'district_id' => 31, 'name_np' => 'पञ्चकन्या'],
            ['name' => 'Likhu', 'wards' => 1, 'district_id' => 31, 'name_np' => 'लिखु'],
            ['name' => 'Dupcheshwar', 'wards' => 1, 'district_id' => 31, 'name_np' => 'दुप्चेश्वर'],
            ['name' => 'Shivapuri', 'wards' => 1, 'district_id' => 31, 'name_np' => 'शिवपुरी'],
            ['name' => 'Tadi', 'wards' => 1, 'district_id' => 31, 'name_np' => 'तादी'],
            ['name' => 'Suryagadhi', 'wards' => 1, 'district_id' => 31, 'name_np' => 'सूर्यगढी'],
            ['name' => 'Tarkeshwar', 'wards' => 1, 'district_id' => 31, 'name_np' => 'तारकेश्वर'],
            ['name' => 'Kispang', 'wards' => 1, 'district_id' => 31, 'name_np' => 'किस्पाङ'],
            ['name' => 'Myagang', 'wards' => 1, 'district_id' => 31, 'name_np' => 'म्यागाङ']
        ];
    }

    /**
     * Get local levels of district thirty two i.e., Rasuwa
     * @return array
     */

    public function getDistrictThirtyTwoLocalLevels(): array
    {
        return [
            ['name' => 'Uttargaya', 'wards' => 1, 'district_id' => 32, 'name_np' => 'उत्तरगया'],
            ['name' => 'Kalika', 'wards' => 1, 'district_id' => 32, 'name_np' => 'कालिका'],
            ['name' => 'Gosaikunda', 'wards' => 1, 'district_id' => 32, 'name_np' => 'गोसाइकुण्ड'],
            ['name' => 'Naukunda', 'wards' => 1, 'district_id' => 32, 'name_np' => 'नौकुण्ड'],
            ['name' => 'Aamachhodingmo', 'wards' => 1, 'district_id' => 32, 'name_np' => 'आमाछोदिङमो']
        ];
    }

    /**
     * Get local levels of district thirty three i.e., Sindhupalchok
     * @return array
     */

    public function getDistrictThirtyThreeLocalLevels(): array
    {
        return [
            [
                'name' => 'Chautara Sangachowkgadhi',
                'wards' => 1,
                'district_id' => 33,
                'name_np' => 'चौतारा साँगाचोकगढी'
            ],
            ['name' => 'Bahrabise', 'wards' => 1, 'district_id' => 33, 'name_np' => 'बाह्रबिसे'],
            ['name' => 'Melamchi', 'wards' => 1, 'district_id' => 33, 'name_np' => 'मेलम्ची'],
            ['name' => 'Balephi', 'wards' => 1, 'district_id' => 33, 'name_np' => 'बलेफी'],
            ['name' => 'Sunkoshi', 'wards' => 1, 'district_id' => 33, 'name_np' => 'सुनकोशी'],
            ['name' => 'Indrawati', 'wards' => 1, 'district_id' => 33, 'name_np' => 'इन्द्रावती'],
            ['name' => 'Jugal', 'wards' => 1, 'district_id' => 33, 'name_np' => 'जुगल'],
            ['name' => 'Panchpokhari Thangpal', 'wards' => 1, 'district_id' => 33, 'name_np' => 'पाँचपोखरी थाङपाल'],
            ['name' => 'Bhotekoshi', 'wards' => 1, 'district_id' => 33, 'name_np' => 'भोटेकोशी'],
            ['name' => 'Lisankhu Pakhar', 'wards' => 1, 'district_id' => 33, 'name_np' => 'लिसंखु पाखर'],
            ['name' => 'Helambu', 'wards' => 1, 'district_id' => 33, 'name_np' => 'हेलम्बु'],
            ['name' => 'Tripurasundari', 'wards' => 1, 'district_id' => 33, 'name_np' => 'त्रिपुरासुन्दरी']
        ];
    }

    /**
     * Get local levels of district thirty four i.e., Chitwan
     * @return array
     */

    public function getDistrictThirtyFourLocalLevels(): array
    {
        return [
            ['name' => 'Bharatpur', 'wards' => 1, 'district_id' => 34, 'name_np' => 'भरतपुर'],
            ['name' => 'Kalika', 'wards' => 1, 'district_id' => 34, 'name_np' => 'कालिका'],
            ['name' => 'Khairahani', 'wards' => 1, 'district_id' => 34, 'name_np' => 'खैरहनी'],
            ['name' => 'Madi', 'wards' => 1, 'district_id' => 34, 'name_np' => 'माडी'],
            ['name' => 'Ratnanagar', 'wards' => 1, 'district_id' => 34, 'name_np' => 'रत्ननगर'],
            ['name' => 'Rapti', 'wards' => 1, 'district_id' => 34, 'name_np' => 'राप्ती'],
            ['name' => 'Ichchhakamana', 'wards' => 1, 'district_id' => 34, 'name_np' => 'इच्छाकामना']
        ];
    }

    /**
     * Get local levels of district thirty five i.e., Makwanpur
     * @return array
     */

    public function getDistrictThirtyFiveLocalLevels(): array
    {
        return [
            ['name' => 'Hetauda', 'wards' => 1, 'district_id' => 35, 'name_np' => 'हेटौंडा'],
            ['name' => 'Thaha', 'wards' => 1, 'district_id' => 35, 'name_np' => 'थाहा'],
            ['name' => 'Bhimphedi', 'wards' => 1, 'district_id' => 35, 'name_np' => 'भीमफेदी'],
            ['name' => 'Makawanpurgadhi', 'wards' => 1, 'district_id' => 35, 'name_np' => 'मकवानपुरगढी'],
            ['name' => 'Manahari', 'wards' => 1, 'district_id' => 35, 'name_np' => 'मनहरी'],
            ['name' => 'Raksirang', 'wards' => 1, 'district_id' => 35, 'name_np' => 'राक्सिराङ'],
            ['name' => 'Bakaiya', 'wards' => 1, 'district_id' => 35, 'name_np' => 'बकैया'],
            ['name' => 'Bagmati', 'wards' => 1, 'district_id' => 35, 'name_np' => 'बागमती'],
            ['name' => 'Kailash', 'wards' => 1, 'district_id' => 35, 'name_np' => 'कैलाश'],
            ['name' => 'Indrasarowar', 'wards' => 1, 'district_id' => 35, 'name_np' => 'इन्द्रसरोवर']
        ];
    }

    /**
     * Get local levels of province four i.e., Gandaki
     * @return array
     */
    public function getProvinceFourLocalLevels(): array
    {
        return array_merge(
            $this->getDistrictThirtySixLocalLevels(),
            $this->getDistrictThirtySevenLocalLevels(),
            $this->getDistrictThirtyEightLocalLevels(),
            $this->getDistrictThirtyNineLocalLevels(),
            $this->getDistrictFortyLocalLevels(),
            $this->getDistrictFortyOneLocalLevels(),
            $this->getDistrictFortyTwoLocalLevels(),
            $this->getDistrictFortyThreeLocalLevels(),
            $this->getDistrictFortyFourLocalLevels(),
            $this->getDistrictFortyFiveLocalLevels(),
            $this->getDistrictFortySixLocalLevels(),
        );
    }

    /**
     * Get local levels of district thirty six i.e., Baglung
     * @return array
     */
    public function getDistrictThirtySixLocalLevels(): array
    {
        return [
            ['name' => 'Baglung', 'wards' => 1, 'district_id' => 36, 'name_np' => 'बागलुङ'],
            ['name' => 'Dhorpatan', 'wards' => 1, 'district_id' => 36, 'name_np' => 'ढोरपाटन'],
            ['name' => 'Galkot', 'wards' => 1, 'district_id' => 36, 'name_np' => 'गल्कोट'],
            ['name' => 'Jaimuni', 'wards' => 1, 'district_id' => 36, 'name_np' => 'जैमूनी'],
            ['name' => 'Bareng', 'wards' => 1, 'district_id' => 36, 'name_np' => 'बरेङ'],
            ['name' => 'Khathekhola', 'wards' => 1, 'district_id' => 36, 'name_np' => 'खथेखोला'],
            ['name' => 'Taman Khola', 'wards' => 1, 'district_id' => 36, 'name_np' => 'तमान खोला'],
            ['name' => 'Tara Khola', 'wards' => 1, 'district_id' => 36, 'name_np' => 'तारा खोला'],
            ['name' => 'Nisikhola', 'wards' => 1, 'district_id' => 36, 'name_np' => 'निसी खोला'],
            ['name' => 'Badigad', 'wards' => 1, 'district_id' => 36, 'name_np' => 'बडिगाड']
        ];
    }

    /**
     * Get local levels of district thirty seven i.e., Gorkha
     * @return array
     */

    public function getDistrictThirtySevenLocalLevels(): array
    {
        return [
            ['name' => 'Gorkha', 'wards' => 1, 'district_id' => 37, 'name_np' => 'गोरखा'],
            ['name' => 'Palungtar', 'wards' => 1, 'district_id' => 37, 'name_np' => 'पालुङटार'],
            ['name' => 'Sulikot', 'wards' => 1, 'district_id' => 37, 'name_np' => 'सुलीकोट'],
            ['name' => 'Siranchowk', 'wards' => 1, 'district_id' => 37, 'name_np' => 'सिरानचोक'],
            ['name' => 'Ajirkot', 'wards' => 1, 'district_id' => 37, 'name_np' => 'अजिरकोट'],
            ['name' => 'Tsum Nubri', 'wards' => 1, 'district_id' => 37, 'name_np' => 'चुम नुब्री'],
            ['name' => 'Dharche', 'wards' => 1, 'district_id' => 37, 'name_np' => 'धार्चे'],
            ['name' => 'Bhimsen Thapa', 'wards' => 1, 'district_id' => 37, 'name_np' => 'भिमसेन थापा'],
            ['name' => 'Sahid Lakhan', 'wards' => 1, 'district_id' => 37, 'name_np' => 'सहिद लखन'],
            ['name' => 'Aarughat', 'wards' => 1, 'district_id' => 37, 'name_np' => 'आरुघाट'],
            ['name' => 'Gandaki', 'wards' => 1, 'district_id' => 37, 'name_np' => 'गण्डकी']
        ];
    }

    /**
     * Get local levels of district thirty eight i.e., Kaski
     * @return array
     */
    public function getDistrictThirtyEightLocalLevels(): array
    {
        return [
            ['name' => 'Pokhara', 'wards' => 1, 'district_id' => 38, 'name_np' => 'पोखरा'],
            ['name' => 'Annapurna', 'wards' => 1, 'district_id' => 38, 'name_np' => 'अन्नपूर्ण'],
            ['name' => 'Machhapuchchhre', 'wards' => 1, 'district_id' => 38, 'name_np' => 'माछापुच्छ्रे'],
            ['name' => 'Madi', 'wards' => 1, 'district_id' => 38, 'name_np' => 'मादी'],
            ['name' => 'Rupa', 'wards' => 1, 'district_id' => 38, 'name_np' => 'रूपा']
        ];
    }

    /**
     * Get local levels of district thirty nine i.e., Lamjung
     * @return array
     */

    public function getDistrictThirtyNineLocalLevels(): array
    {
        return [
            ['name' => 'Besisahar', 'wards' => 1, 'district_id' => 39, 'name_np' => 'बेसीसहर'],
            ['name' => 'Dordi', 'wards' => 1, 'district_id' => 39, 'name_np' => 'दोरदी'],
            ['name' => 'Dudhpokhari', 'wards' => 1, 'district_id' => 39, 'name_np' => 'दूधपोखरी'],
            ['name' => 'Kwhlosothar', 'wards' => 1, 'district_id' => 39, 'name_np' => 'क्व्ह्लोसोथार'],
            ['name' => 'Madhya Nepal', 'wards' => 1, 'district_id' => 39, 'name_np' => 'मध्य नेपाल'],
            ['name' => 'Marsyandi', 'wards' => 1, 'district_id' => 39, 'name_np' => 'मर्स्याङ्दी'],
            ['name' => 'Rainas', 'wards' => 1, 'district_id' => 39, 'name_np' => 'राइनास'],
            ['name' => 'Sundarbazar', 'wards' => 1, 'district_id' => 39, 'name_np' => 'सुन्दरबजार']
        ];
    }

    /**
     * Get local levels of district forty i.e., Manang
     * @return array
     */
    public function getDistrictFortyLocalLevels(): array
    {
        return [
            ['name' => 'Chame', 'wards' => 1, 'district_id' => 40, 'name_np' => 'चामे'],
            ['name' => 'Nason', 'wards' => 1, 'district_id' => 40, 'name_np' => 'नासों'],
            ['name' => 'Narpa Bhumi', 'wards' => 1, 'district_id' => 40, 'name_np' => 'नार्पा भूमि'],
            ['name' => 'Manang Ngisyang', 'wards' => 1, 'district_id' => 40, 'name_np' => 'मनाङ ङिस्याङ']
        ];
    }

    /**
     * Get local levels of district forty one i.e., Mustang
     * @return array
     */

    public function getDistrictFortyOneLocalLevels(): array
    {
        return [
            ['name' => 'Gharapjhong', 'wards' => 1, 'district_id' => 41, 'name_np' => 'घरपझोङ'],
            ['name' => 'Thasang', 'wards' => 1, 'district_id' => 41, 'name_np' => 'थासाङ'],
            [
                'name' => 'Barhagaun Muktichhetra',
                'wards' => 1,
                'district_id' => 41,
                'name_np' => 'बर्हागाउँ मुक्तिक्षेत्र'
            ],
            ['name' => 'Lomanthang', 'wards' => 1, 'district_id' => 41, 'name_np' => 'लोमन्थाङ'],
            ['name' => 'Lo-Ghekar Damodarkunda', 'wards' => 1, 'district_id' => 41, 'name_np' => 'लो-घेकर दामोदरकुण्ड']
        ];
    }

    /**
     * Get local levels of district forty two i.e., Myagdi
     * @return array
     */
    public function getDistrictFortyTwoLocalLevels(): array
    {
        return [
            ['name' => 'Beni', 'wards' => 1, 'district_id' => 42, 'name_np' => 'बेनी'],
            ['name' => 'Annapurna', 'wards' => 1, 'district_id' => 42, 'name_np' => 'अन्नपूर्ण'],
            ['name' => 'Dhaulagiri', 'wards' => 1, 'district_id' => 42, 'name_np' => 'धौलागिरी'],
            ['name' => 'Mangala', 'wards' => 1, 'district_id' => 42, 'name_np' => 'मंगला'],
            ['name' => 'Malika', 'wards' => 1, 'district_id' => 42, 'name_np' => 'मालिका'],
            ['name' => 'Raghuganga', 'wards' => 1, 'district_id' => 42, 'name_np' => 'रघुगंगा']
        ];
    }

    /**
     * Get local levels of district forty three i.e., Nawalpur
     * @return array
     */

    public function getDistrictFortyThreeLocalLevels(): array
    {
        return [
            ['name' => 'Kawasoti', 'wards' => 1, 'district_id' => 43, 'name_np' => 'कावासोती'],
            ['name' => 'Gaindakot', 'wards' => 1, 'district_id' => 43, 'name_np' => 'गैडाकोट'],
            ['name' => 'Devachuli', 'wards' => 1, 'district_id' => 43, 'name_np' => 'देवचुली'],
            ['name' => 'Madhyabindu', 'wards' => 1, 'district_id' => 43, 'name_np' => 'मध्यबिन्दु'],
            ['name' => 'Baudikali', 'wards' => 1, 'district_id' => 43, 'name_np' => 'बौदीकाली'],
            ['name' => 'Bulingtar', 'wards' => 1, 'district_id' => 43, 'name_np' => 'बुलिङटार'],
            ['name' => 'Binayi Tribeni', 'wards' => 1, 'district_id' => 43, 'name_np' => 'बिनयी त्रिवेणी'],
            ['name' => 'Hupsekot', 'wards' => 1, 'district_id' => 43, 'name_np' => 'हुप्सेकोट']
        ];
    }

    /**
     * Get local levels of district forty four i.e., Parbat
     * @return array
     */
    public function getDistrictFortyFourLocalLevels(): array
    {
        return [
            ['name' => 'Kushma', 'wards' => 1, 'district_id' => 44, 'name_np' => 'कुश्मा'],
            ['name' => 'Phalewas', 'wards' => 1, 'district_id' => 44, 'name_np' => 'फलेवास'],
            ['name' => 'Jaljala', 'wards' => 1, 'district_id' => 44, 'name_np' => 'जलजला'],
            ['name' => 'Paiyun', 'wards' => 1, 'district_id' => 44, 'name_np' => 'पैयुँ'],
            ['name' => 'Mahashila', 'wards' => 1, 'district_id' => 44, 'name_np' => 'महाशिला'],
            ['name' => 'Modi', 'wards' => 1, 'district_id' => 44, 'name_np' => 'मोदी'],
            ['name' => 'Bihadi', 'wards' => 1, 'district_id' => 44, 'name_np' => 'बिहादी']
        ];
    }

    /**
     * Get local levels of district forty five i.e., Syangja
     * @return array
     */
    public function getDistrictFortyFiveLocalLevels(): array
    {
        return [
            ['name' => 'Galyang', 'wards' => 1, 'district_id' => 45, 'name_np' => 'गल्याङ'],
            ['name' => 'Chapakot', 'wards' => 1, 'district_id' => 45, 'name_np' => 'चापाकोट'],
            ['name' => 'Putalibazar', 'wards' => 1, 'district_id' => 45, 'name_np' => 'पुतलीबजार'],
            ['name' => 'Bheerkot', 'wards' => 1, 'district_id' => 45, 'name_np' => 'भीरकोट'],
            ['name' => 'Waling', 'wards' => 1, 'district_id' => 45, 'name_np' => 'वालिङ'],
            ['name' => 'Arjun Chaupari', 'wards' => 1, 'district_id' => 45, 'name_np' => 'अर्जुन चौपारी'],
            ['name' => 'Aandhikhola', 'wards' => 1, 'district_id' => 45, 'name_np' => 'आँधिखोला'],
            ['name' => 'Kaligandaki', 'wards' => 1, 'district_id' => 45, 'name_np' => 'काल��गण्डकी'],
            ['name' => 'Phedikhola', 'wards' => 1, 'district_id' => 45, 'name_np' => 'फेदीखोला'],
            ['name' => 'Harinas', 'wards' => 1, 'district_id' => 45, 'name_np' => 'हरिनास'],
            ['name' => 'Biruwa', 'wards' => 1, 'district_id' => 45, 'name_np' => 'बिरुवा']
        ];
    }

    /**
     * Get local levels of district forty six i.e., Tanahun
     * @return array
     */
    public function getDistrictFortySixLocalLevels(): array
    {
        return [
            ['name' => 'Bhanu', 'wards' => 1, 'district_id' => 46, 'name_np' => 'भानु'],
            ['name' => 'Bhimad', 'wards' => 1, 'district_id' => 46, 'name_np' => 'भिमाद'],
            ['name' => 'Byas', 'wards' => 1, 'district_id' => 46, 'name_np' => 'व्याँस'],
            ['name' => 'Shuklagandaki', 'wards' => 1, 'district_id' => 46, 'name_np' => 'शुक्लागण्डकी'],
            ['name' => 'Anbu Khaireni', 'wards' => 1, 'district_id' => 46, 'name_np' => 'आँबुखैरेनी'],
            ['name' => 'Devghat', 'wards' => 1, 'district_id' => 46, 'name_np' => 'देवघाट'],
            ['name' => 'Bandipur', 'wards' => 1, 'district_id' => 46, 'name_np' => 'बन्दीपुर'],
            ['name' => 'Rishing', 'wards' => 1, 'district_id' => 46, 'name_np' => 'ऋषिङ'],
            ['name' => 'Ghiring', 'wards' => 1, 'district_id' => 46, 'name_np' => 'घिरिङ'],
            ['name' => 'Myagde', 'wards' => 1, 'district_id' => 46, 'name_np' => 'म्याग्दे']
        ];
    }

    /**
     * Get local levels of province five i.e., Lumbini
     * @return array
     */
    public function getProvinceFiveLocalLevels(): array
    {
        return array_merge(
            $this->getDistrictFortySevenLocalLevels(),
            $this->getDistrictFortyEightLocalLevels(),
            $this->getDistrictFortyNineLocalLevels(),
            $this->getDistrictFiftyLocalLevels(),
            $this->getDistrictFiftyOneLocalLevels(),
            $this->getDistrictFiftyTwoLocalLevels(),
            $this->getDistrictFiftyThreeLocalLevels(),
            $this->getDistrictFiftyFourLocalLevels(),
            $this->getDistrictFiftyFiveLocalLevels(),
            $this->getDistrictFiftySixLocalLevels(),
            $this->getDistrictFiftySevenLocalLevels(),
            $this->getDistrictFiftyEightLocalLevels()
        );
    }

    /**
     * Get local levels of district forty seven i.e., Kapilvastu
     * @return array
     */
    public function getDistrictFortySevenLocalLevels(): array
    {
        return [
            ['name' => 'Kapilvastu', 'wards' => 1, 'district_id' => 47, 'name_np' => 'कपिलवस्तु'],
            ['name' => 'Banganga', 'wards' => 1, 'district_id' => 47, 'name_np' => 'बाणगंगा'],
            ['name' => 'Buddhabhumi', 'wards' => 1, 'district_id' => 47, 'name_np' => 'बुद्धभूमि'],
            ['name' => 'Shivaraj', 'wards' => 1, 'district_id' => 47, 'name_np' => 'शिवराज'],
            ['name' => 'Krishnanagar', 'wards' => 1, 'district_id' => 47, 'name_np' => 'कृष्णनगर'],
            ['name' => 'Maharajgunj', 'wards' => 1, 'district_id' => 47, 'name_np' => 'महाराजगञ्ज'],
            ['name' => 'Mayadevi', 'wards' => 1, 'district_id' => 47, 'name_np' => 'मायादेवी'],
            ['name' => 'Yashodhara', 'wards' => 1, 'district_id' => 47, 'name_np' => 'यशोधरा'],
            ['name' => 'Suddhodhan', 'wards' => 1, 'district_id' => 47, 'name_np' => 'सुद्धोधन'],
            ['name' => 'Bijaynagar', 'wards' => 1, 'district_id' => 47, 'name_np' => 'विजयनगर']
        ];
    }

    /**
     * Get local levels of district forty eight i.e., Parasi
     * @return array
     */
    public function getDistrictFortyEightLocalLevels(): array
    {
        return [
            ['name' => 'Bardaghat', 'wards' => 1, 'district_id' => 48, 'name_np' => 'बर्दघाट'],
            ['name' => 'Ramgram', 'wards' => 1, 'district_id' => 48, 'name_np' => 'रामग्राम'],
            ['name' => 'Sunwal', 'wards' => 1, 'district_id' => 48, 'name_np' => 'सुनवल'],
            ['name' => 'Susta', 'wards' => 1, 'district_id' => 48, 'name_np' => 'सुस्ता'],
            ['name' => 'Palhinandan', 'wards' => 1, 'district_id' => 48, 'name_np' => 'पल्हीनन्दन'],
            ['name' => 'Pratappur', 'wards' => 1, 'district_id' => 48, 'name_np' => 'प्रतापपुर'],
            ['name' => 'Sarawal', 'wards' => 1, 'district_id' => 48, 'name_np' => 'सरावल']
        ];
    }

    /**
     * Get local levels of district forty nine i.e., Rupandehi
     * @return array
     */

    public function getDistrictFortyNineLocalLevels(): array
    {
        return [
            ['name' => 'Butwal', 'wards' => 1, 'district_id' => 49, 'name_np' => 'बुटवल'],
            ['name' => 'Devdaha', 'wards' => 1, 'district_id' => 49, 'name_np' => 'देवदह'],
            ['name' => 'Lumbini Sanskritik', 'wards' => 1, 'district_id' => 49, 'name_np' => 'लुम्बिनी सांस्कृतिक'],
            ['name' => 'Sainamaina', 'wards' => 1, 'district_id' => 49, 'name_np' => 'सैनामैना'],
            ['name' => 'Siddharthanagar', 'wards' => 1, 'district_id' => 49, 'name_np' => 'सिद्धार्थनगर'],
            ['name' => 'Tilottama', 'wards' => 1, 'district_id' => 49, 'name_np' => 'तिलोत्तमा'],
            ['name' => 'Gaidahawa', 'wards' => 1, 'district_id' => 49, 'name_np' => 'गैडहवा'],
            ['name' => 'Kanchan', 'wards' => 1, 'district_id' => 49, 'name_np' => 'कञ्चन'],
            ['name' => 'Kotahimai', 'wards' => 1, 'district_id' => 49, 'name_np' => 'कोटहीमाई'],
            ['name' => 'Marchawari', 'wards' => 1, 'district_id' => 49, 'name_np' => 'मर्चवारी'],
            ['name' => 'Mayadevi', 'wards' => 1, 'district_id' => 49, 'name_np' => 'मायादेवी'],
            ['name' => 'Omsatiya', 'wards' => 1, 'district_id' => 49, 'name_np' => 'ओमसतिया'],
            ['name' => 'Rohini', 'wards' => 1, 'district_id' => 49, 'name_np' => 'रोहिणी'],
            ['name' => 'Sammarimai', 'wards' => 1, 'district_id' => 49, 'name_np' => 'सम्मरीमा��'],
            ['name' => 'Siyari', 'wards' => 1, 'district_id' => 49, 'name_np' => 'सियारी'],
            ['name' => 'Suddodhan', 'wards' => 1, 'district_id' => 49, 'name_np' => 'सुद्धोधन']
        ];
    }

    /**
     * Get local levels of district fifty i.e., Arghakhanchi
     * @return array
     */
    public function getDistrictFiftyLocalLevels(): array
    {
        return [
            ['name' => 'Sandhikharka', 'wards' => 1, 'district_id' => 50, 'name_np' => 'सन्धिखर्क'],
            ['name' => 'Sitganga', 'wards' => 1, 'district_id' => 50, 'name_np' => 'सितगंगा'],
            ['name' => 'Bhumikasthan', 'wards' => 1, 'district_id' => 50, 'name_np' => 'भूमिकास्थान'],
            ['name' => 'Chhatradev', 'wards' => 1, 'district_id' => 50, 'name_np' => 'छत्रदेव'],
            ['name' => 'Panini', 'wards' => 1, 'district_id' => 50, 'name_np' => 'पाणिनी'],
            ['name' => 'Malarani', 'wards' => 1, 'district_id' => 50, 'name_np' => 'मालारानी']
        ];
    }

    /**
     * Get local levels of district fifty one i.e., Gulmi
     * @return array
     */
    public function getDistrictFiftyOneLocalLevels(): array
    {
        return [
            ['name' => 'Musikot', 'wards' => 1, 'district_id' => 51, 'name_np' => 'मुसिकोट'],
            ['name' => 'Resunga', 'wards' => 1, 'district_id' => 51, 'name_np' => 'रेसुङ्गा'],
            ['name' => 'Ishma', 'wards' => 1, 'district_id' => 51, 'name_np' => 'इश्मा'],
            ['name' => 'Kaligandaki', 'wards' => 1, 'district_id' => 51, 'name_np' => 'कालिगण्डकी'],
            ['name' => 'Gulmi Darbar', 'wards' => 1, 'district_id' => 51, 'name_np' => 'गुल्मी दरबार'],
            ['name' => 'Satyawati', 'wards' => 1, 'district_id' => 51, 'name_np' => 'सत्यवती'],
            ['name' => 'Chandrakot', 'wards' => 1, 'district_id' => 51, 'name_np' => 'चन्द्रकोट'],
            ['name' => 'Rurukshetra', 'wards' => 1, 'district_id' => 51, 'name_np' => 'रुरुक्षेत्र'],
            ['name' => 'Chhatrakot', 'wards' => 1, 'district_id' => 51, 'name_np' => 'छत्रकोट'],
            ['name' => 'Dhurkot', 'wards' => 1, 'district_id' => 51, 'name_np' => 'धुर्कोट'],
            ['name' => 'Madane', 'wards' => 1, 'district_id' => 51, 'name_np' => 'मदाने'],
            ['name' => 'Malika', 'wards' => 1, 'district_id' => 51, 'name_np' => 'मालिका']
        ];
    }

    /**
     * Get local levels of district fifty two i.e., Palpa
     * @return array
     */
    public function getDistrictFiftyTwoLocalLevels(): array
    {
        return [
            ['name' => 'Tansen', 'wards' => 1, 'district_id' => 52, 'name_np' => 'तानसेन'],
            ['name' => 'Rampur', 'wards' => 1, 'district_id' => 52, 'name_np' => 'रामपुर'],
            ['name' => 'Rainadevi Chhahara', 'wards' => 1, 'district_id' => 52, 'name_np' => 'रैनादेवी छहरा'],
            ['name' => 'Ripdikot', 'wards' => 1, 'district_id' => 52, 'name_np' => 'रिप्दीकोट'],
            ['name' => 'Bagnaskali', 'wards' => 1, 'district_id' => 52, 'name_np' => 'बगनासकाली'],
            ['name' => 'Rambha', 'wards' => 1, 'district_id' => 52, 'name_np' => 'रम्भा'],
            ['name' => 'Purbakhola', 'wards' => 1, 'district_id' => 52, 'name_np' => 'पूर्वखोला'],
            ['name' => 'Nisdi', 'wards' => 1, 'district_id' => 52, 'name_np' => 'निस्दी'],
            ['name' => 'Mathagadi', 'wards' => 1, 'district_id' => 52, 'name_np' => 'माथागढी'],
            ['name' => 'Tinahu', 'wards' => 1, 'district_id' => 52, 'name_np' => 'तिनाहु']
        ];
    }

    /**
     * Get local levels of district fifty three i.e., Dang
     * @return array
     */
    public function getDistrictFiftyThreeLocalLevels(): array
    {
        return [
            ['name' => 'Ghorahi', 'wards' => 1, 'district_id' => 53, 'name_np' => 'घोराही'],
            ['name' => 'Tulsipur', 'wards' => 1, 'district_id' => 53, 'name_np' => 'तुलसीपुर'],
            ['name' => 'Lamahi', 'wards' => 1, 'district_id' => 53, 'name_np' => 'लमही'],
            ['name' => 'Gadhawa', 'wards' => 1, 'district_id' => 53, 'name_np' => 'गढवा'],
            ['name' => 'Rajpur', 'wards' => 1, 'district_id' => 53, 'name_np' => 'राजपुर'],
            ['name' => 'Shantinagar', 'wards' => 1, 'district_id' => 53, 'name_np' => 'शान्तिन���र'],
            ['name' => 'Rapti', 'wards' => 1, 'district_id' => 53, 'name_np' => 'राप्ती'],
            ['name' => 'Banglachuli', 'wards' => 1, 'district_id' => 53, 'name_np' => 'बंगलाचुली'],
            ['name' => 'Dangisharan', 'wards' => 1, 'district_id' => 53, 'name_np' => 'दंगीशरण'],
            ['name' => 'Babai', 'wards' => 1, 'district_id' => 53, 'name_np' => 'बबई']
        ];
    }

    /**
     * Get local levels of district fifty four i.e., Pyuthan
     * @return array
     */
    public function getDistrictFiftyFourLocalLevels(): array
    {
        return [
            ['name' => 'Pyuthan', 'wards' => 1, 'district_id' => 54, 'name_np' => 'प्युठान'],
            ['name' => 'Sworgadwari', 'wards' => 1, 'district_id' => 54, 'name_np' => 'स्वर्गद्वारी'],
            ['name' => 'Gaumukhi', 'wards' => 1, 'district_id' => 54, 'name_np' => 'गौमुखी'],
            ['name' => 'Mandavi', 'wards' => 1, 'district_id' => 54, 'name_np' => 'माण्डवी'],
            ['name' => 'Sarumarani', 'wards' => 1, 'district_id' => 54, 'name_np' => 'सरुमारानी'],
            ['name' => 'Mallarani', 'wards' => 1, 'district_id' => 54, 'name_np' => 'मल्लरानी'],
            ['name' => 'Naubahini', 'wards' => 1, 'district_id' => 54, 'name_np' => 'नौबहिनी'],
            ['name' => 'Jhimruk', 'wards' => 1, 'district_id' => 54, 'name_np' => 'झिमरुक'],
            ['name' => 'Airawati', 'wards' => 1, 'district_id' => 54, 'name_np' => 'ऐरावती']
        ];
    }

    /**
     * Get local levels of district fifty five i.e., Rolpa
     * @return array
     */
    public function getDistrictFiftyFiveLocalLevels(): array
    {
        return [
            ['name' => 'Rolpa', 'wards' => 1, 'district_id' => 55, 'name_np' => 'रोल्पा'],
            ['name' => 'Runtigadhi', 'wards' => 1, 'district_id' => 55, 'name_np' => 'रुन्टीगढी'],
            ['name' => 'Triveni', 'wards' => 1, 'district_id' => 55, 'name_np' => 'त्रिवेणी'],
            ['name' => 'Sunilsmiriti', 'wards' => 1, 'district_id' => 55, 'name_np' => 'सुनिलस्मृति'],
            ['name' => 'Lungri', 'wards' => 1, 'district_id' => 55, 'name_np' => 'लुङ्ग्री'],
            ['name' => 'Sunchhahari', 'wards' => 1, 'district_id' => 55, 'name_np' => 'सुनछहरी'],
            ['name' => 'Thabang', 'wards' => 1, 'district_id' => 55, 'name_np' => 'थबाङ'],
            ['name' => 'Madi', 'wards' => 1, 'district_id' => 55, 'name_np' => 'माडी'],
            ['name' => 'Gangadev', 'wards' => 1, 'district_id' => 55, 'name_np' => 'गंगादेव'],
            ['name' => 'Paribartan', 'wards' => 1, 'district_id' => 55, 'name_np' => 'परिवर्तन']
        ];
    }

    /**
     * Get local levels of district fifty six i.e., Eastern Rukum
     * @return array
     */
    public function getDistrictFiftySixLocalLevels(): array
    {
        return [
            ['name' => 'Bhume', 'wards' => 1, 'district_id' => 56, 'name_np' => 'भुमे'],
            ['name' => 'Putha Uttarganga', 'wards' => 1, 'district_id' => 56, 'name_np' => 'पुथा उत्तरगंगा'],
            ['name' => 'Sisne', 'wards' => 1, 'district_id' => 56, 'name_np' => 'सिस्ने']
        ];
    }

    /**
     * Get local levels of district fifty seven i.e., Banke
     * @return array
     */
    public function getDistrictFiftySevenLocalLevels(): array
    {
        return [
            ['name' => 'Nepalgunj', 'wards' => 1, 'district_id' => 57, 'name_np' => 'नेपालगञ्ज'],
            ['name' => 'Kohalpur', 'wards' => 1, 'district_id' => 57, 'name_np' => 'कोहलपुर'],
            ['name' => 'Rapti-Sonari', 'wards' => 1, 'district_id' => 57, 'name_np' => 'राप्ती-सोनारी'],
            ['name' => 'Narainapur', 'wards' => 1, 'district_id' => 57, 'name_np' => 'नरैनापुर'],
            ['name' => 'Duduwa', 'wards' => 1, 'district_id' => 57, 'name_np' => 'दुधुवा'],
            ['name' => 'Janaki', 'wards' => 1, 'district_id' => 57, 'name_np' => 'जानकी'],
            ['name' => 'Khajura', 'wards' => 1, 'district_id' => 57, 'name_np' => 'खजुरा'],
            ['name' => 'Baijanath', 'wards' => 1, 'district_id' => 57, 'name_np' => 'बैजनाथ']
        ];
    }

    /**
     * Get local levels of district fifty eight i.e., Bardiya
     * @return array
     */
    public function getDistrictFiftyEightLocalLevels(): array
    {
        return [
            ['name' => 'Gulariya', 'wards' => 1, 'district_id' => 58, 'name_np' => 'गुलरिया'],
            ['name' => 'Rajapur', 'wards' => 1, 'district_id' => 58, 'name_np' => 'राजापुर'],
            ['name' => 'Madhuwan', 'wards' => 1, 'district_id' => 58, 'name_np' => 'मधुवन'],
            ['name' => 'Thakurbaba', 'wards' => 1, 'district_id' => 58, 'name_np' => 'ठाकुरबाबा'],
            ['name' => 'Basgadhi', 'wards' => 1, 'district_id' => 58, 'name_np' => 'बसगढी'],
            ['name' => 'Barbardiya', 'wards' => 1, 'district_id' => 58, 'name_np' => 'बर्बर्दिया'],
            ['name' => 'Badhaiyatal', 'wards' => 1, 'district_id' => 58, 'name_np' => 'बढैयाताल'],
            ['name' => 'Geruwa', 'wards' => 1, 'district_id' => 58, 'name_np' => 'गेरुवा']
        ];
    }

    /**
     * Get local levels of province six i.e., Karnali
     * @return array
     */
    public function getProvinceSixLocalLevels(): array
    {
        return array_merge(
            $this->getDistrictFiftyNineLocalLevels(),
            $this->getDistrictSixtyLocalLevels(),
            $this->getDistrictSixtyOneLocalLevels(),
            $this->getDistrictSixtyTwoLocalLevels(),
            $this->getDistrictSixtyThreeLocalLevels(),
            $this->getDistrictSixtyFourLocalLevels(),
            $this->getDistrictSixtyFiveLocalLevels(),
            $this->getDistrictSixtySixLocalLevels(),
            $this->getDistrictSixtySevenLocalLevels(),
            $this->getDistrictSixtyEightLocalLevels()
        );
    }

    /**
     * Get local levels of district fifty nine i.e., Western Rukum
     * @return array
     */
    public function getDistrictFiftyNineLocalLevels(): array
    {
        return [
            ['name' => 'Musikot', 'wards' => 1, 'district_id' => 59, 'name_np' => 'मुसिकोट'],
            ['name' => 'Chaurjahari', 'wards' => 1, 'district_id' => 59, 'name_np' => 'चौरजहारी'],
            ['name' => 'Aathbiskot', 'wards' => 1, 'district_id' => 59, 'name_np' => 'आठबिसकोट'],
            ['name' => 'Banphikot', 'wards' => 1, 'district_id' => 59, 'name_np' => 'बाँफिकोट'],
            ['name' => 'Tribeni', 'wards' => 1, 'district_id' => 59, 'name_np' => 'त्रिवेणी'],
            ['name' => 'Sani Bheri', 'wards' => 1, 'district_id' => 59, 'name_np' => 'सानी भेरी']
        ];
    }

    /**
     * Get local levels of district sixty i.e., Salyan
     * @return array
     */
    public function getDistrictSixtyLocalLevels(): array
    {
        return [
            ['name' => 'Shaarda', 'wards' => 1, 'district_id' => 60, 'name_np' => 'शारदा'],
            ['name' => 'Bagchaur', 'wards' => 1, 'district_id' => 60, 'name_np' => 'बागचौर'],
            ['name' => 'Bangad Kupinde', 'wards' => 1, 'district_id' => 60, 'name_np' => 'बाङ्गाड कुपिण्डे'],
            ['name' => 'Kalimati', 'wards' => 1, 'district_id' => 60, 'name_np' => 'कालिमाटी'],
            ['name' => 'Tribeni', 'wards' => 1, 'district_id' => 60, 'name_np' => 'त्रिवेणी'],
            ['name' => 'Kapurkot', 'wards' => 1, 'district_id' => 60, 'name_np' => 'कपुरकोट'],
            ['name' => 'Chatreshwari', 'wards' => 1, 'district_id' => 60, 'name_np' => 'छत्रेश्वरी'],
            ['name' => 'Kumakh', 'wards' => 1, 'district_id' => 60, 'name_np' => 'कुमाख'],
            ['name' => 'Siddha Kumakh', 'wards' => 1, 'district_id' => 60, 'name_np' => 'सिद्ध कुमाख'],
            ['name' => 'Darma', 'wards' => 1, 'district_id' => 60, 'name_np' => 'दार्मा']
        ];
    }

    /**
     * Get local levels of district sixty one i.e., Dolpa
     * @return array
     */
    public function getDistrictSixtyOneLocalLevels(): array
    {
        return [
            ['name' => 'Thuli Bheri', 'wards' => 1, 'district_id' => 61, 'name_np' => 'ठूली भेरी'],
            ['name' => 'Tripurasundari', 'wards' => 1, 'district_id' => 61, 'name_np' => 'त्रिपुरासुन्दरी'],
            ['name' => 'Dolpo Buddha', 'wards' => 1, 'district_id' => 61, 'name_np' => 'डोल्पो बुद्ध'],
            ['name' => 'She Phoksundo', 'wards' => 1, 'district_id' => 61, 'name_np' => 'शे फोक्सुन्डो'],
            ['name' => 'Jagadulla', 'wards' => 1, 'district_id' => 61, 'name_np' => 'जगदुल्ला'],
            ['name' => 'Mudkechula', 'wards' => 1, 'district_id' => 61, 'name_np' => 'मुड्केचुला'],
            ['name' => 'Kaike', 'wards' => 1, 'district_id' => 61, 'name_np' => 'कैके'],
            ['name' => 'Chharka Tangsong', 'wards' => 1, 'district_id' => 61, 'name_np' => 'छार्का ताङसोङ']
        ];
    }

    /**
     * Get local levels of district sixty two i.e., Humla
     * @return array
     */
    public function getDistrictSixtyTwoLocalLevels(): array
    {
        return [
            ['name' => 'Simkot', 'wards' => 1, 'district_id' => 62, 'name_np' => 'सिमकोट'],
            ['name' => 'Namkha', 'wards' => 1, 'district_id' => 62, 'name_np' => 'नाम्खा'],
            ['name' => 'Kharpunath', 'wards' => 1, 'district_id' => 62, 'name_np' => 'खार्पुनाथ'],
            ['name' => 'Sarkegad', 'wards' => 1, 'district_id' => 62, 'name_np' => 'सर्केगाड'],
            ['name' => 'Chankheli', 'wards' => 1, 'district_id' => 62, 'name_np' => 'चंखेली'],
            ['name' => 'Adanchuli', 'wards' => 1, 'district_id' => 62, 'name_np' => 'अदानचुली'],
            ['name' => 'Tajakot', 'wards' => 1, 'district_id' => 62, 'name_np' => 'ताजाकोट']
        ];
    }

    /**
     * Get local levels of district sixty three i.e., Jumla
     * @return array
     */
    public function getDistrictSixtyThreeLocalLevels(): array
    {
        return [
            ['name' => 'Chandannath', 'wards' => 1, 'district_id' => 63, 'name_np' => 'चन्दननाथ'],
            ['name' => 'Kankasundari', 'wards' => 1, 'district_id' => 63, 'name_np' => 'कनकासुन्दरी'],
            ['name' => 'Sinja', 'wards' => 1, 'district_id' => 63, 'name_np' => 'सिंजा'],
            ['name' => 'Hima', 'wards' => 1, 'district_id' => 63, 'name_np' => 'हिमा'],
            ['name' => 'Tila', 'wards' => 1, 'district_id' => 63, 'name_np' => 'तिला'],
            ['name' => 'Guthichaur', 'wards' => 1, 'district_id' => 63, 'name_np' => 'गुठीचौर'],
            ['name' => 'Tatopani', 'wards' => 1, 'district_id' => 63, 'name_np' => 'तातोपानी'],
            ['name' => 'Patarasi', 'wards' => 1, 'district_id' => 63, 'name_np' => 'पातारासी']
        ];
    }

    /**
     * Get local levels of district sixty four i.e., Kalikot
     * @return array
     */
    public function getDistrictSixtyFourLocalLevels(): array
    {
        return [
            ['name' => 'Khandachakra', 'wards' => 1, 'district_id' => 64, 'name_np' => 'खाँडाचक्र'],
            ['name' => 'Raskot', 'wards' => 1, 'district_id' => 64, 'name_np' => 'रास्कोट'],
            ['name' => 'Tilagufa', 'wards' => 1, 'district_id' => 64, 'name_np' => 'तिलागुफा'],
            ['name' => 'Pachaljharana', 'wards' => 1, 'district_id' => 64, 'name_np' => 'पचालझरना'],
            ['name' => 'Sanni Triveni', 'wards' => 1, 'district_id' => 64, 'name_np' => 'सानी त्रिवेणी'],
            ['name' => 'Narharinath', 'wards' => 1, 'district_id' => 64, 'name_np' => 'नरहरिनाथ'],
            ['name' => 'Shubha Kalika', 'wards' => 1, 'district_id' => 64, 'name_np' => 'शुभा कालिका'],
            ['name' => 'Mahawai', 'wards' => 1, 'district_id' => 64, 'name_np' => 'महावै'],
            ['name' => 'Palata', 'wards' => 1, 'district_id' => 64, 'name_np' => 'पालाता']
        ];
    }

    /**
     * Get local levels of district sixty five i.e., Mugu
     * @return array
     */
    public function getDistrictSixtyFiveLocalLevels(): array
    {
        return [
            ['name' => 'Chhayanath Rara', 'wards' => 1, 'district_id' => 65, 'name_np' => 'छायानाथ रारा'],
            ['name' => 'Mugum Karmarong', 'wards' => 1, 'district_id' => 65, 'name_np' => 'मुगुम कार्मारोङ'],
            ['name' => 'Soru', 'wards' => 1, 'district_id' => 65, 'name_np' => 'सोरु'],
            ['name' => 'Khatyad', 'wards' => 1, 'district_id' => 65, 'name_np' => 'खत्याड']
        ];
    }

    /**
     * Get local levels of district sixty six i.e., Surkhet
     * @return array
     */
    public function getDistrictSixtySixLocalLevels(): array
    {
        return [
            ['name' => 'Birendranagar', 'wards' => 1, 'district_id' => 66, 'name_np' => 'वीरेन्द्रनगर'],
            ['name' => 'Chaukune', 'wards' => 1, 'district_id' => 66, 'name_np' => 'चौकुने'],
            ['name' => 'Bheriganga', 'wards' => 1, 'district_id' => 66, 'name_np' => 'भेरीगंगा'],
            ['name' => 'Barahatal', 'wards' => 1, 'district_id' => 66, 'name_np' => 'बराहताल'],
            ['name' => 'Gurbha Kot', 'wards' => 1, 'district_id' => 66, 'name_np' => 'गुर्भाकोट'],
            ['name' => 'Chingad', 'wards' => 1, 'district_id' => 66, 'name_np' => 'चिङ्गाड'],
            ['name' => 'Panchapuri', 'wards' => 1, 'district_id' => 66, 'name_np' => 'पञ्चपुरी'],
            ['name' => 'Simta', 'wards' => 1, 'district_id' => 66, 'name_np' => 'सिम्ता'],
            ['name' => 'Lekbesi', 'wards' => 1, 'district_id' => 66, 'name_np' => 'लेकबेशी']
        ];
    }

    /**
     * Get local levels of district sixty seven i.e., Dailekh
     * @return array
     */
    public function getDistrictSixtySevenLocalLevels(): array
    {
        return [
            ['name' => 'Narayan Urban', 'wards' => 1, 'district_id' => 67, 'name_np' => 'नारायण नगर'],
            ['name' => 'Dullu Urban', 'wards' => 1, 'district_id' => 67, 'name_np' => 'दुल्लु नगर'],
            ['name' => 'Aathbis Urban', 'wards' => 1, 'district_id' => 67, 'name_np' => 'आठबीस नगर'],
            ['name' => 'Chamunda Bindrasaini', 'wards' => 1, 'district_id' => 67, 'name_np' => 'चामुण्डा बिन्द्रासैनी'],
            ['name' => 'Thantikandh', 'wards' => 1, 'district_id' => 67, 'name_np' => 'थानटीकाँध'],
            ['name' => 'Bhairabi', 'wards' => 1, 'district_id' => 67, 'name_np' => 'भैरवी'],
            ['name' => 'Mahabu', 'wards' => 1, 'district_id' => 67, 'name_np' => 'महाबु'],
            ['name' => 'Naumule', 'wards' => 1, 'district_id' => 67, 'name_np' => 'नौमुले'],
            ['name' => 'Dungeshwar', 'wards' => 1, 'district_id' => 67, 'name_np' => 'डुंगेश्वर'],
            ['name' => 'Gurans', 'wards' => 1, 'district_id' => 67, 'name_np' => 'गुराँस'],
            ['name' => 'Bhagawatimai', 'wards' => 1, 'district_id' => 67, 'name_np' => 'भगवतीमाई']
        ];
    }

    /**
     * Get local levels of district sixty eight i.e., Jajarkot
     * @return array
     */
    public function getDistrictSixtyEightLocalLevels(): array
    {
        return [
            ['name' => 'Bheri', 'wards' => 1, 'district_id' => 68, 'name_np' => 'भेरी'],
            ['name' => 'Chhedagad', 'wards' => 1, 'district_id' => 68, 'name_np' => 'छेडागाड'],
            ['name' => 'Tribeni Nalgad', 'wards' => 1, 'district_id' => 68, 'name_np' => 'त्रिवेणी नलगाड'],
            ['name' => 'Junichande', 'wards' => 1, 'district_id' => 68, 'name_np' => 'जुनीचाँदे'],
            ['name' => 'Kushe', 'wards' => 1, 'district_id' => 68, 'name_np' => 'कुशे'],
            ['name' => 'Barekot', 'wards' => 1, 'district_id' => 68, 'name_np' => 'बारेकोट'],
            ['name' => 'Shivalaya', 'wards' => 1, 'district_id' => 68, 'name_np' => 'शिवालय']
        ];
    }

    /**
     * Get local levels of province seven i.e., Sudurpashchim
     * @return array
     */
    public function getProvinceSevenLocalLevels(): array
    {
        return array_merge(
            $this->getDistrictSixtyNineLocalLevels(),
            $this->getDistrictSeventyLocalLevels(),
            $this->getDistrictSeventyOneLocalLevels(),
            $this->getDistrictSeventyTwoLocalLevels(),
            $this->getDistrictSeventyThreeLocalLevels(),
            $this->getDistrictSeventyFourLocalLevels(),
            $this->getDistrictSeventyFiveLocalLevels(),
            $this->getDistrictSeventySixLocalLevels(),
            $this->getDistrictSeventySevenLocalLevels()
        );
    }

    /**
     * Get local levels of district sixty nine i.e., Kailali
     * @return array
     */
    public function getDistrictSixtyNineLocalLevels(): array
    {
        return [
            ['name' => 'Dhangadhi', 'wards' => 1, 'district_id' => 69, 'name_np' => 'धनगढी'],
            ['name' => 'Lamki Chuha', 'wards' => 1, 'district_id' => 69, 'name_np' => 'लम्की चुहा'],
            ['name' => 'Tikapur', 'wards' => 1, 'district_id' => 69, 'name_np' => 'टीकापुर'],
            ['name' => 'Ghodaghodi', 'wards' => 1, 'district_id' => 69, 'name_np' => 'घोडाघोडी'],
            ['name' => 'Bhajani', 'wards' => 1, 'district_id' => 69, 'name_np' => 'भजनी'],
            ['name' => 'Godawari', 'wards' => 1, 'district_id' => 69, 'name_np' => 'गोदावरी'],
            ['name' => 'Gauriganga', 'wards' => 1, 'district_id' => 69, 'name_np' => 'गौरीगंगा'],
            ['name' => 'Janaki', 'wards' => 1, 'district_id' => 69, 'name_np' => 'जानकी'],
            ['name' => 'Bardagoriya', 'wards' => 1, 'district_id' => 69, 'name_np' => 'बर्दगोरिया'],
            ['name' => 'Mohanyal', 'wards' => 1, 'district_id' => 69, 'name_np' => 'मोहन्याल'],
            ['name' => 'Kailari', 'wards' => 1, 'district_id' => 69, 'name_np' => 'कैलारी'],
            ['name' => 'Joshipur', 'wards' => 1, 'district_id' => 69, 'name_np' => 'जोशीपुर'],
            ['name' => 'Chure', 'wards' => 1, 'district_id' => 69, 'name_np' => 'चुरे']
        ];
    }

    /**
     * Get local levels of district seventy i.e., Achham
     * @return array
     */
    public function getDistrictSeventyLocalLevels(): array
    {
        return [
            ['name' => 'Mangalsen', 'wards' => 1, 'district_id' => 70, 'name_np' => 'मंगलसेन'],
            ['name' => 'Kamalbazar', 'wards' => 1, 'district_id' => 70, 'name_np' => 'कमलबजार'],
            ['name' => 'Sanfebagar', 'wards' => 1, 'district_id' => 70, 'name_np' => 'साँफेबगर'],
            ['name' => 'Panchadewal Binayak', 'wards' => 1, 'district_id' => 70, 'name_np' => 'पञ्चदेवल विनायक'],
            ['name' => 'Ramaroshan', 'wards' => 1, 'district_id' => 70, 'name_np' => 'रामारोशन'],
            ['name' => 'Chaurpati', 'wards' => 1, 'district_id' => 70, 'name_np' => 'चौरपाटी'],
            ['name' => 'Turmakhand', 'wards' => 1, 'district_id' => 70, 'name_np' => 'तुर्माखाँद'],
            ['name' => 'Mellekh', 'wards' => 1, 'district_id' => 70, 'name_np' => 'मेल्लेख'],
            ['name' => 'Dhakari', 'wards' => 1, 'district_id' => 70, 'name_np' => 'ढकारी'],
            ['name' => 'Bannigadi Jayagad', 'wards' => 1, 'district_id' => 70, 'name_np' => 'बान्नीगढी जयगढ']
        ];
    }

    /**
     * Get local levels of district seventy one i.e., Doti
     * @return array
     */
    public function getDistrictSeventyOneLocalLevels(): array
    {
        return [
            ['name' => 'Dipayal Silgadhi', 'wards' => 1, 'district_id' => 71, 'name_np' => 'दिपायल सिलगढी'],
            ['name' => 'Shikhar', 'wards' => 1, 'district_id' => 71, 'name_np' => 'शिखर'],
            ['name' => 'Purbichauki', 'wards' => 1, 'district_id' => 71, 'name_np' => 'पूर्वीचौकी'],
            ['name' => 'Badikedar', 'wards' => 1, 'district_id' => 71, 'name_np' => 'बडीकेदार'],
            ['name' => 'Jorayal', 'wards' => 1, 'district_id' => 71, 'name_np' => 'जोरायल'],
            ['name' => 'Sayal', 'wards' => 1, 'district_id' => 71, 'name_np' => 'सायल'],
            ['name' => 'Aadarsha', 'wards' => 1, 'district_id' => 71, 'name_np' => 'आदर्श'],
            ['name' => 'Dr. K. I. Singh', 'wards' => 1, 'district_id' => 71, 'name_np' => 'ड��. के. आई. सिंह'],
            ['name' => 'Bogatan', 'wards' => 1, 'district_id' => 71, 'name_np' => 'बोगटान']
        ];
    }

    /**
     * Get local levels of district seventy two i.e., Bajhang
     * @return array
     */
    public function getDistrictSeventyTwoLocalLevels(): array
    {
        return [
            ['name' => 'Jaya Prithvi', 'wards' => 1, 'district_id' => 72, 'name_np' => 'जय पृथ्वी'],
            ['name' => 'Bungal', 'wards' => 1, 'district_id' => 72, 'name_np' => 'बुंगल'],
            ['name' => 'Talkot', 'wards' => 1, 'district_id' => 72, 'name_np' => 'तलकोट'],
            ['name' => 'Masta', 'wards' => 1, 'district_id' => 72, 'name_np' => 'मष्टा'],
            ['name' => 'Khaptadchhanna', 'wards' => 1, 'district_id' => 72, 'name_np' => 'खप्तडछान्ना'],
            ['name' => 'Thalara', 'wards' => 1, 'district_id' => 72, 'name_np' => 'थलारा'],
            ['name' => 'Bitthadchir', 'wards' => 1, 'district_id' => 72, 'name_np' => 'बित्थडचिर'],
            ['name' => 'Surma', 'wards' => 1, 'district_id' => 72, 'name_np' => 'सुरमा'],
            ['name' => 'Chhabis Pathibhera', 'wards' => 1, 'district_id' => 72, 'name_np' => 'छबिस पाथिभेरा'],
            ['name' => 'Durgathali', 'wards' => 1, 'district_id' => 72, 'name_np' => 'दुर्गाथली'],
            ['name' => 'Kedarsyu', 'wards' => 1, 'district_id' => 72, 'name_np' => 'केदारस्यु'],
            ['name' => 'Saipal', 'wards' => 1, 'district_id' => 72, 'name_np' => 'सैपाल']
        ];
    }

    /**
     * Get local levels of district seventy three i.e., Bajura
     * @return array
     */
    public function getDistrictSeventyThreeLocalLevels(): array
    {
        return [
            ['name' => 'Badimalika', 'wards' => 1, 'district_id' => 73, 'name_np' => 'बडीमालिका'],
            ['name' => 'Triveni', 'wards' => 1, 'district_id' => 73, 'name_np' => 'त्रिवेणी'],
            ['name' => 'Budhiganga', 'wards' => 1, 'district_id' => 73, 'name_np' => 'बुढीगंगा'],
            ['name' => 'Budhinanda', 'wards' => 1, 'district_id' => 73, 'name_np' => 'बुढीनन्दा'],
            ['name' => 'Gaumul', 'wards' => 1, 'district_id' => 73, 'name_np' => 'गौमुल'],
            ['name' => 'Jagnnath', 'wards' => 1, 'district_id' => 73, 'name_np' => 'जगन्नाथ'],
            ['name' => 'Swamikartik Khapar', 'wards' => 1, 'district_id' => 73, 'name_np' => 'स्वामीकार्तिक खापर'],
            ['name' => 'Chhededaha', 'wards' => 1, 'district_id' => 73, 'name_np' => 'छेडेदह'],
            ['name' => 'Himali', 'wards' => 1, 'district_id' => 73, 'name_np' => 'हिमाली']
        ];
    }

    /**
     * Get local levels of district seventy four i.e., Kanchanpur
     * @return array
     */
    public function getDistrictSeventyFourLocalLevels(): array
    {
        return [
            ['name' => 'Bedkot', 'wards' => 1, 'district_id' => 74, 'name_np' => 'बेदकोट'],
            ['name' => 'Belauri', 'wards' => 1, 'district_id' => 74, 'name_np' => 'बेलौरी'],
            ['name' => 'Bhimdatta', 'wards' => 1, 'district_id' => 74, 'name_np' => 'भीमदत्त'],
            ['name' => 'Mahakali', 'wards' => 1, 'district_id' => 74, 'name_np' => 'महाकाली'],
            ['name' => 'Shuklaphanta', 'wards' => 1, 'district_id' => 74, 'name_np' => 'शुक्लाफाँटा'],
            ['name' => 'Krishnapur', 'wards' => 1, 'district_id' => 74, 'name_np' => 'कृष्णपुर'],
            ['name' => 'Punarbas', 'wards' => 1, 'district_id' => 74, 'name_np' => 'पुनर्वास'],
            ['name' => 'Laljhadi', 'wards' => 1, 'district_id' => 74, 'name_np' => 'लालझाडी'],
            ['name' => 'Beldandi', 'wards' => 1, 'district_id' => 74, 'name_np' => 'बेलडाँडी']
        ];
    }

    /**
     * Get local levels of district seventy five i.e., Dadeldhura
     * @return array
     */
    public function getDistrictSeventyFiveLocalLevels(): array
    {
        return [
            ['name' => 'Amargadhi', 'wards' => 1, 'district_id' => 75, 'name_np' => 'अमरगढी'],
            ['name' => 'Parshuram', 'wards' => 1, 'district_id' => 75, 'name_np' => 'परशुराम'],
            ['name' => 'Aalitaal', 'wards' => 1, 'district_id' => 75, 'name_np' => 'आलिताल'],
            ['name' => 'Bhageshwar', 'wards' => 1, 'district_id' => 75, 'name_np' => 'भागेश्वर'],
            ['name' => 'Navadurga', 'wards' => 1, 'district_id' => 75, 'name_np' => 'नवदुर्गा'],
            ['name' => 'Ajaymeru', 'wards' => 1, 'district_id' => 75, 'name_np' => 'अजयमेरु'],
            ['name' => 'Ganyapadhura', 'wards' => 1, 'district_id' => 75, 'name_np' => 'गन्यापधुरा']
        ];
    }

    /**
     * Get local levels of district seventy six i.e., Baitadi
     * @return array
     */
    public function getDistrictSeventySixLocalLevels(): array
    {
        return [
            ['name' => 'Dasharathchand', 'wards' => 1, 'district_id' => 76, 'name_np' => 'दशरथचन्द'],
            ['name' => 'Patan', 'wards' => 1, 'district_id' => 76, 'name_np' => 'पाटन'],
            ['name' => 'Melauli', 'wards' => 1, 'district_id' => 76, 'name_np' => 'मेलौली'],
            ['name' => 'Purchaudi', 'wards' => 1, 'district_id' => 76, 'name_np' => 'पुर्चौडी'],
            ['name' => 'Sunarya', 'wards' => 1, 'district_id' => 76, 'name_np' => 'सुनार्या'],
            ['name' => 'Sigas', 'wards' => 1, 'district_id' => 76, 'name_np' => 'सिगास'],
            ['name' => 'Shivanath', 'wards' => 1, 'district_id' => 76, 'name_np' => 'शिवनाथ'],
            ['name' => 'Pancheshwor', 'wards' => 1, 'district_id' => 76, 'name_np' => 'पञ्चेश्वर'],
            ['name' => 'Dogdakedar', 'wards' => 1, 'district_id' => 76, 'name_np' => 'डोगडाकेदार'],
            ['name' => 'Dilasaini', 'wards' => 1, 'district_id' => 76, 'name_np' => 'डिलासैनी']
        ];
    }

    /**
     * Get local levels of district seventy seven i.e., Darchula
     * @return array
     */
    public function getDistrictSeventySevenLocalLevels(): array
    {
        return [
            ['name' => 'Mahakali', 'wards' => 1, 'district_id' => 77, 'name_np' => 'महाकाली'],
            ['name' => 'Shailyasikhar', 'wards' => 1, 'district_id' => 77, 'name_np' => 'शैल्यशिखर'],
            ['name' => 'Malikarjun', 'wards' => 1, 'district_id' => 77, 'name_np' => 'मालिकार्जुन'],
            ['name' => 'Apihimal', 'wards' => 1, 'district_id' => 77, 'name_np' => 'अपिहिमाल'],
            ['name' => 'Duhun', 'wards' => 1, 'district_id' => 77, 'name_np' => 'दुहुँ'],
            ['name' => 'Naugad', 'wards' => 1, 'district_id' => 77, 'name_np' => 'नौगाड'],
            ['name' => 'Marma', 'wards' => 6, 'district_id' => 77, 'name_np' => 'मार्मा'],
            ['name' => 'Lekam', 'wards' => 6, 'district_id' => 77, 'name_np' => 'लेकम'],
            ['name' => 'Vyans', 'wards' => 6, 'district_id' => 77, 'name_np' => 'ब्याँस']
        ];
    }
}
