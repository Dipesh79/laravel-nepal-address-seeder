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
            ['name' => 'Bhojpur', 'wards' => 12, 'district_id' => 1],
            ['name' => 'Shadanand', 'wards' => 14, 'district_id' => 1],
            ['name' => 'Hatuwagadhi', 'wards' => 9, 'district_id' => 1],
            ['name' => 'Ramprasad Rai', 'wards' => 8, 'district_id' => 1],
            ['name' => 'Aamchowk', 'wards' => 10, 'district_id' => 1],
            ['name' => 'Tyamke Maiyunm', 'wards' => 9, 'district_id' => 1],
            ['name' => 'Arun Gaunpalika', 'wards' => 7, 'district_id' => 1],
            ['name' => 'Pauwadungma', 'wards' => 6, 'district_id' => 1],
            ['name' => 'Salpasilichho', 'wards' => 6, 'district_id' => 1]
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
            ['name' => 'Dhankuta', 'wards' => 12, 'district_id' => 2],
            ['name' => 'Pakhribas', 'wards' => 9, 'district_id' => 2],
            ['name' => 'Mahalaxmi', 'wards' => 9, 'district_id' => 2],
            ['name' => 'Sangurigadhi', 'wards' => 1, 'district_id' => 2],
            ['name' => 'Chaubise', 'wards' => 1, 'district_id' => 2],
            ['name' => 'Shahidbhumi', 'wards' => 1, 'district_id' => 2],
            ['name' => 'Chhathar Jorpati', 'wards' => 1, 'district_id' => 2]
        ];
    }

    /**
     * Get local levels of district three i.e., Ilam
     * @return array
     */

    public function getDistrictThreeLocalLevels(): array
    {
        return [
            ['name' => 'Ilam', 'wards' => 1, 'district_id' => 3],
            ['name' => 'Deumai', 'wards' => 1, 'district_id' => 3],
            ['name' => 'Mai', 'wards' => 1, 'district_id' => 3],
            ['name' => 'Suryodaya', 'wards' => 1, 'district_id' => 3],
            ['name' => 'Phakphokthum', 'wards' => 1, 'district_id' => 3],
            ['name' => 'Mai Jogmai', 'wards' => 1, 'district_id' => 3],
            ['name' => 'Chulachuli', 'wards' => 1, 'district_id' => 3],
            ['name' => 'Rong', 'wards' => 1, 'district_id' => 3],
            ['name' => 'Mangsebung', 'wards' => 1, 'district_id' => 3],
            ['name' => 'Sandakpur', 'wards' => 1, 'district_id' => 3]
        ];
    }

    /**
     * Get local levels of district four i.e., Jhapa
     * @return array
     */

    public function getDistrictFourLocalLevels(): array
    {
        return [
            ['name' => 'Mechinagar', 'wards' => 1, 'district_id' => 4],
            ['name' => 'Bhadrapur', 'wards' => 1, 'district_id' => 4],
            ['name' => 'Birtamod', 'wards' => 1, 'district_id' => 4],
            ['name' => 'Arjundhara', 'wards' => 1, 'district_id' => 4],
            ['name' => 'Kankai', 'wards' => 1, 'district_id' => 4],
            ['name' => 'Shivasatakshi', 'wards' => 1, 'district_id' => 4],
            ['name' => 'Gauradaha', 'wards' => 1, 'district_id' => 4],
            ['name' => 'Damak', 'wards' => 1, 'district_id' => 4],
            ['name' => 'Buddhashanti', 'wards' => 1, 'district_id' => 4],
            ['name' => 'Haldibari', 'wards' => 1, 'district_id' => 4],
            ['name' => 'Kachankawal', 'wards' => 1, 'district_id' => 4],
            ['name' => 'Barhadashi', 'wards' => 1, 'district_id' => 4],
            ['name' => 'Jhapa', 'wards' => 1, 'district_id' => 4],
            ['name' => 'Gauriganj', 'wards' => 1, 'district_id' => 4],
            ['name' => 'Kamal', 'wards' => 1, 'district_id' => 4]
        ];
    }

    /**
     * Get local levels of district five i.e., Khotang
     * @return array
     */

    public function getDistrictFiveLocalLevels(): array
    {
        return [
            ['name' => 'Diktel Rupakot Majhuwagadhi', 'wards' => 15, 'district_id' => 5],
            ['name' => 'Halesi Tuwachung', 'wards' => 15, 'district_id' => 5],
            ['name' => 'Khotehang', 'wards' => 15, 'district_id' => 5],
            ['name' => 'Diprung', 'wards' => 15, 'district_id' => 5],
            ['name' => 'Aiselukharka', 'wards' => 15, 'district_id' => 5],
            ['name' => 'Jantedhunga', 'wards' => 15, 'district_id' => 5],
            ['name' => 'Kepilasgadhi', 'wards' => 15, 'district_id' => 5],
            ['name' => 'Barahpokhari', 'wards' => 15, 'district_id' => 5],
            ['name' => 'Rawabesi', 'wards' => 15, 'district_id' => 5],
            ['name' => 'Sakela', 'wards' => 5, 'district_id' => 5]
        ];
    }

    /**
     * Get local levels of district six i.e., Morang
     * @return array
     */
    public function getDistrictSixLocalLevels(): array
    {
        return [
            ['name' => 'Biratnagar', 'wards' => 1, 'district_id' => 6],
            ['name' => 'Sundar Haraicha', 'wards' => 1, 'district_id' => 6],
            ['name' => 'Belbari', 'wards' => 1, 'district_id' => 6],
            ['name' => 'Pathari-Sanischare', 'wards' => 1, 'district_id' => 6],
            ['name' => 'Urlabari', 'wards' => 1, 'district_id' => 6],
            ['name' => 'Rangeli', 'wards' => 1, 'district_id' => 6],
            ['name' => 'Letang Bhogateni', 'wards' => 1, 'district_id' => 6],
            ['name' => 'Ratuwamai', 'wards' => 1, 'district_id' => 6],
            ['name' => 'Sunawarshi', 'wards' => 1, 'district_id' => 6],
            ['name' => 'Kerabari', 'wards' => 1, 'district_id' => 6],
            ['name' => 'Miklajung', 'wards' => 1, 'district_id' => 6],
            ['name' => 'Kanepokhari', 'wards' => 1, 'district_id' => 6],
            ['name' => 'Budhiganga', 'wards' => 1, 'district_id' => 6],
            ['name' => 'Gramthan', 'wards' => 1, 'district_id' => 6],
            ['name' => 'Katahari', 'wards' => 1, 'district_id' => 6],
            ['name' => 'Dhanpalthan', 'wards' => 1, 'district_id' => 6],
            ['name' => 'Jahada', 'wards' => 1, 'district_id' => 6]
        ];
    }

    /**
     * Get local levels of district seven i.e., Okhaldhunga
     * @return array
     */
    public function getDistrictSevenLocalLevels(): array
    {
        return [
            ['name' => 'Siddhicharan', 'wards' => 1, 'district_id' => 7],
            ['name' => 'Champadevi', 'wards' => 1, 'district_id' => 7],
            ['name' => 'Sunkoshi', 'wards' => 1, 'district_id' => 7],
            ['name' => 'Likhu', 'wards' => 1, 'district_id' => 7],
            ['name' => 'Chisankhugadhi', 'wards' => 1, 'district_id' => 7],
            ['name' => 'Molung', 'wards' => 1, 'district_id' => 7],
            ['name' => 'Khijidemba', 'wards' => 1, 'district_id' => 7],
            ['name' => 'Manebhanjyang', 'wards' => 1, 'district_id' => 7]
        ];
    }

    /**
     * Get local levels of district eight i.e., Panchthar
     * @return array
     */

    public function getDistrictEightLocalLevels(): array
    {
        return [
            ['name' => 'Phidim', 'wards' => 1, 'district_id' => 8],
            ['name' => 'Hilihang', 'wards' => 1, 'district_id' => 8],
            ['name' => 'Kummayak', 'wards' => 1, 'district_id' => 8],
            ['name' => 'Miklajung', 'wards' => 1, 'district_id' => 8],
            ['name' => 'Phalelung', 'wards' => 1, 'district_id' => 8],
            ['name' => 'Phalgunanda', 'wards' => 1, 'district_id' => 8],
            ['name' => 'Tumbewa', 'wards' => 1, 'district_id' => 8],
            ['name' => 'Yangawarak', 'wards' => 1, 'district_id' => 8]
        ];
    }

    /**
     * Get local levels of district nine i.e., Sankhuwasabha
     * @return array
     */
    public function getDistrictNineLocalLevels(): array
    {
        return [
            ['name' => 'Bhotkhola', 'wards' => 1, 'district_id' => 9],
            ['name' => 'Chainpur', 'wards' => 1, 'district_id' => 9],
            ['name' => 'Chichila', 'wards' => 1, 'district_id' => 9],
            ['name' => 'Dharmadevi', 'wards' => 1, 'district_id' => 9],
            ['name' => 'Khandbari', 'wards' => 1, 'district_id' => 9],
            ['name' => 'Madi', 'wards' => 1, 'district_id' => 9],
            ['name' => 'Makalu', 'wards' => 1, 'district_id' => 9],
            ['name' => 'Panchkhapan', 'wards' => 1, 'district_id' => 9],
            ['name' => 'Savapokhari', 'wards' => 1, 'district_id' => 9],
            ['name' => 'Silichong', 'wards' => 1, 'district_id' => 9]
        ];
    }

    /**
     * Get local levels of district ten i.e., Solukhumbu
     * @return array
     */

    public function getDistrictTenLocalLevels(): array
    {
        return [
            ['name' => 'Solududhkunda', 'wards' => 1, 'district_id' => 10],
            ['name' => 'Dudhakaushika', 'wards' => 1, 'district_id' => 10],
            ['name' => 'Necha Salyan', 'wards' => 1, 'district_id' => 10],
            ['name' => 'Dudhkoshi', 'wards' => 1, 'district_id' => 10],
            ['name' => 'Maha Kulung', 'wards' => 1, 'district_id' => 10],
            ['name' => 'Sotang', 'wards' => 1, 'district_id' => 10],
            ['name' => 'Likhu Pike', 'wards' => 1, 'district_id' => 10],
            ['name' => 'Khumbu Pasanglhamu', 'wards' => 1, 'district_id' => 10]
        ];
    }

    /**
     * Get local levels of district eleven i.e., Sunsari
     * @return array
     */
    public function getDistrictElevenLocalLevels(): array
    {
        return [
            ['name' => 'Itahari', 'wards' => 1, 'district_id' => 11],
            ['name' => 'Dharan', 'wards' => 1, 'district_id' => 11],
            ['name' => 'Inaruwa', 'wards' => 1, 'district_id' => 11],
            ['name' => 'Duhabi', 'wards' => 1, 'district_id' => 11],
            ['name' => 'Ramdhuni-Bhasi', 'wards' => 1, 'district_id' => 11],
            ['name' => 'Barahachhetra', 'wards' => 1, 'district_id' => 11],
            ['name' => 'Koshi', 'wards' => 1, 'district_id' => 11],
            ['name' => 'Gadhi', 'wards' => 1, 'district_id' => 11],
            ['name' => 'Barju', 'wards' => 1, 'district_id' => 11],
            ['name' => 'Bhokraha', 'wards' => 1, 'district_id' => 11],
            ['name' => 'Harinagara', 'wards' => 1, 'district_id' => 11],
            ['name' => 'Dewanganj', 'wards' => 1, 'district_id' => 11]
        ];
    }

    /**
     * Get local levels of district twelve i.e., Taplejung
     * @return array
     */

    public function getDistrictTwelveLocalLevels(): array
    {
        return [
            ['name' => 'Phungling', 'wards' => 1, 'district_id' => 12],
            ['name' => 'Aathrai Tribeni', 'wards' => 1, 'district_id' => 12],
            ['name' => 'Sidingwa', 'wards' => 1, 'district_id' => 12],
            ['name' => 'Phaktanglung', 'wards' => 1, 'district_id' => 12],
            ['name' => 'Mikkwakhola', 'wards' => 1, 'district_id' => 12],
            ['name' => 'Meringden', 'wards' => 1, 'district_id' => 12],
            ['name' => 'Maiwakhola', 'wards' => 1, 'district_id' => 12],
            ['name' => 'Pathibhara Yangwarak', 'wards' => 1, 'district_id' => 12],
            ['name' => 'Sirijangha', 'wards' => 1, 'district_id' => 12]
        ];
    }

    /**
     * Get local levels of district thirteen i.e., Terhathum
     * @return array
     */

    public function getDistrictThirteenLocalLevels(): array
    {
        return [
            ['name' => 'Aathrai', 'wards' => 1, 'district_id' => 13],
            ['name' => 'Chhathar', 'wards' => 1, 'district_id' => 13],
            ['name' => 'Laligurans', 'wards' => 1, 'district_id' => 13],
            ['name' => 'Menchhayayem', 'wards' => 1, 'district_id' => 13],
            ['name' => 'Myanglung', 'wards' => 1, 'district_id' => 13],
            ['name' => 'Phedap', 'wards' => 1, 'district_id' => 13]
        ];
    }

    /**
     * Get local levels of district fourteen i.e., Udayapur
     * @return array
     */

    public function getDistrictFourteenLocalLevels(): array
    {
        //arrange the array the format as below


        return [
            ['name' => 'Triyuga', 'wards' => 1, 'district_id' => 14],
            ['name' => 'Katari', 'wards' => 1, 'district_id' => 14],
            ['name' => 'Chaudandigadhi', 'wards' => 1, 'district_id' => 14],
            ['name' => 'Belaka', 'wards' => 1, 'district_id' => 14],
            ['name' => 'Udayapurgadhi', 'wards' => 1, 'district_id' => 14],
            ['name' => 'Rautamai', 'wards' => 1, 'district_id' => 14],
            ['name' => 'Tapli', 'wards' => 1, 'district_id' => 14],
            ['name' => 'Limchungbung', 'wards' => 1, 'district_id' => 14]
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
            ['name' => 'Birgunj', 'wards' => 1, 'district_id' => 15],
            ['name' => 'Bahudarmai', 'wards' => 1, 'district_id' => 15],
            ['name' => 'Parsagadhi', 'wards' => 1, 'district_id' => 15],
            ['name' => 'Pokhariya', 'wards' => 1, 'district_id' => 15],
            ['name' => 'Bindabasini', 'wards' => 1, 'district_id' => 15],
            ['name' => 'Dhobini', 'wards' => 1, 'district_id' => 15],
            ['name' => 'Chhipaharmai', 'wards' => 1, 'district_id' => 15],
            ['name' => 'Jagarnathpur', 'wards' => 1, 'district_id' => 15],
            ['name' => 'Jirabhawani', 'wards' => 1, 'district_id' => 15],
            ['name' => 'Kalikamai', 'wards' => 1, 'district_id' => 15],
            ['name' => 'Pakaha Mainpur', 'wards' => 1, 'district_id' => 15],
            ['name' => 'Paterwa Sugauli', 'wards' => 1, 'district_id' => 15],
            ['name' => 'Sakhuwa Prasauni', 'wards' => 1, 'district_id' => 15],
            ['name' => 'Thori', 'wards' => 1, 'district_id' => 15]
        ];
    }

    /**
     * Get local levels of district sixteen i.e., Bara
     * @return array
     */

    public function getDistrictSixteenLocalLevels(): array
    {
        return [
            ['name' => 'Kalaiya', 'wards' => 1, 'district_id' => 16],
            ['name' => 'Jeetpur Simara', 'wards' => 1, 'district_id' => 16],
            ['name' => 'Kolhabi', 'wards' => 1, 'district_id' => 16],
            ['name' => 'Nijgadh', 'wards' => 1, 'district_id' => 16],
            ['name' => 'Mahagadhimai', 'wards' => 1, 'district_id' => 16],
            ['name' => 'Simraungadh', 'wards' => 1, 'district_id' => 16],
            ['name' => 'Pacharauta', 'wards' => 1, 'district_id' => 16],
            ['name' => 'Pheta', 'wards' => 1, 'district_id' => 16],
            ['name' => 'Bishrampur', 'wards' => 1, 'district_id' => 16],
            ['name' => 'Prasauni', 'wards' => 1, 'district_id' => 16],
            ['name' => 'Adarsh Kotwal', 'wards' => 1, 'district_id' => 16],
            ['name' => 'Karaiyamai', 'wards' => 1, 'district_id' => 16],
            ['name' => 'Devtal', 'wards' => 1, 'district_id' => 16],
            ['name' => 'Parwanipur', 'wards' => 1, 'district_id' => 16],
            ['name' => 'Baragadhi', 'wards' => 1, 'district_id' => 16],
            ['name' => 'Suwarna', 'wards' => 1, 'district_id' => 16]
        ];
    }

    /**
     * Get local levels of district seventeen i.e., Rautahat
     * @return array
     */
    public function getDistrictSeventeenLocalLevels(): array
    {
        return [
            ['name' => 'Baudhimai', 'wards' => 1, 'district_id' => 17],
            ['name' => 'Brindaban', 'wards' => 1, 'district_id' => 17],
            ['name' => 'Chandrapur', 'wards' => 1, 'district_id' => 17],
            ['name' => 'Dewahi Gonahi', 'wards' => 1, 'district_id' => 17],
            ['name' => 'Gadhimai, Nepal', 'wards' => 1, 'district_id' => 17],
            ['name' => 'Garuda', 'wards' => 1, 'district_id' => 17],
            ['name' => 'Gaur', 'wards' => 1, 'district_id' => 17],
            ['name' => 'Gujara', 'wards' => 1, 'district_id' => 17],
            ['name' => 'Ishanath', 'wards' => 1, 'district_id' => 17],
            ['name' => 'Katahariya', 'wards' => 1, 'district_id' => 17],
            ['name' => 'Madhav Narayan', 'wards' => 1, 'district_id' => 17],
            ['name' => 'Maulapur', 'wards' => 1, 'district_id' => 17],
            ['name' => 'Paroha', 'wards' => 1, 'district_id' => 17],
            ['name' => 'Phatuwa Bijayapur', 'wards' => 1, 'district_id' => 17],
            ['name' => 'Rajdevi', 'wards' => 1, 'district_id' => 17],
            ['name' => 'Rajpur', 'wards' => 1, 'district_id' => 17],
            ['name' => 'Durga Bhagwati', 'wards' => 1, 'district_id' => 17],
            ['name' => 'Yamunamai', 'wards' => 1, 'district_id' => 17]
        ];
    }

    /**
     * Get local levels of district eighteen i.e., Sarlahi
     * @return array
     */

    public function getDistrictEighteenLocalLevels(): array
    {
        return [
            ['name' => 'Bagmati', 'wards' => 1, 'district_id' => 18],
            ['name' => 'Balara', 'wards' => 1, 'district_id' => 18],
            ['name' => 'Barahathwa', 'wards' => 1, 'district_id' => 18],
            ['name' => 'Godaita', 'wards' => 1, 'district_id' => 18],
            ['name' => 'Harion', 'wards' => 1, 'district_id' => 18],
            ['name' => 'Haripur', 'wards' => 1, 'district_id' => 18],
            ['name' => 'Haripurwa', 'wards' => 1, 'district_id' => 18],
            ['name' => 'Ishworpur', 'wards' => 1, 'district_id' => 18],
            ['name' => 'Kabilasi', 'wards' => 1, 'district_id' => 18],
            ['name' => 'Lalbandi', 'wards' => 1, 'district_id' => 18],
            ['name' => 'Malangwa', 'wards' => 1, 'district_id' => 18],
            ['name' => 'Basbariya', 'wards' => 1, 'district_id' => 18],
            ['name' => 'Bishnu', 'wards' => 1, 'district_id' => 18],
            ['name' => 'Brahampuri', 'wards' => 1, 'district_id' => 18],
            ['name' => 'Chakraghatta', 'wards' => 1, 'district_id' => 18],
            ['name' => 'Chandranagar', 'wards' => 1, 'district_id' => 18],
            ['name' => 'Dhankaul', 'wards' => 1, 'district_id' => 18],
            ['name' => 'Kaudena', 'wards' => 1, 'district_id' => 18],
            ['name' => 'Parsa', 'wards' => 1, 'district_id' => 18],
            ['name' => 'Ramnagar', 'wards' => 1, 'district_id' => 18]
        ];
    }


    /**
     * Get local levels of district nineteen i.e., Dhanusha
     * @return array
     */
    public function getDistrictNineteenLocalLevels(): array
    {
        return [
            ['name' => 'Janakpur ', 'wards' => 1, 'district_id' => 19],
            ['name' => 'Chhireshwarnath', 'wards' => 1, 'district_id' => 19],
            ['name' => 'Ganeshman Charanath', 'wards' => 1, 'district_id' => 19],
            ['name' => 'Dhanusadham', 'wards' => 1, 'district_id' => 19],
            ['name' => 'Nagarain', 'wards' => 1, 'district_id' => 19],
            ['name' => 'Bideha', 'wards' => 1, 'district_id' => 19],
            ['name' => 'Mithila', 'wards' => 1, 'district_id' => 19],
            ['name' => 'Sahidnagar', 'wards' => 1, 'district_id' => 19],
            ['name' => 'Sabaila', 'wards' => 1, 'district_id' => 19],
            ['name' => 'Kamala', 'wards' => 1, 'district_id' => 19],
            ['name' => 'Mithila Bihari', 'wards' => 1, 'district_id' => 19],
            ['name' => 'Hansapur', 'wards' => 1, 'district_id' => 19],
            ['name' => 'Janaknandani', 'wards' => 1, 'district_id' => 19],
            ['name' => 'Bateshwar', 'wards' => 1, 'district_id' => 19],
            ['name' => 'Mukhiyapatti Musharniya', 'wards' => 1, 'district_id' => 19],
            ['name' => 'Lakshminya', 'wards' => 1, 'district_id' => 19],
            ['name' => 'Aurahi', 'wards' => 1, 'district_id' => 19],
            ['name' => 'Dhanauji', 'wards' => 1, 'district_id' => 19]
        ];
    }


    /**
     * Get local levels of district twenty i.e., Siraha
     * @return array
     */
    public function getDistrictTwentyLocalLevels(): array
    {
        return [
            ['name' => 'Lahan', 'wards' => 1, 'district_id' => 20],
            ['name' => 'Dhangadhimai', 'wards' => 1, 'district_id' => 20],
            ['name' => 'Siraha', 'wards' => 1, 'district_id' => 20],
            ['name' => 'Golbazar', 'wards' => 1, 'district_id' => 20],
            ['name' => 'Mirchaiya', 'wards' => 1, 'district_id' => 20],
            ['name' => 'Kalyanpur', 'wards' => 1, 'district_id' => 20],
            ['name' => 'Karjanha', 'wards' => 1, 'district_id' => 20],
            ['name' => 'Sukhipur', 'wards' => 1, 'district_id' => 20],
            ['name' => 'Bhagwanpur', 'wards' => 1, 'district_id' => 20],
            ['name' => 'Aurahi', 'wards' => 1, 'district_id' => 20],
            ['name' => 'Bishnupur', 'wards' => 1, 'district_id' => 20],
            ['name' => 'Bariyarpatti', 'wards' => 1, 'district_id' => 20],
            ['name' => 'Lakshmipur Patari', 'wards' => 1, 'district_id' => 20],
            ['name' => 'Naraha', 'wards' => 1, 'district_id' => 20],
            ['name' => 'Sakhuwanankar Katti', 'wards' => 1, 'district_id' => 20],
            ['name' => 'Arnama', 'wards' => 1, 'district_id' => 20],
            ['name' => 'Navarajpur', 'wards' => 1, 'district_id' => 20]
        ];
    }

    /**
     * Get local levels of district twenty-one i.e., Mahottari
     * @return array
     */

    public function getDistrictTwentyOneLocalLevels(): array
    {
        return [
            ['name' => 'Aurahi', 'wards' => 1, 'district_id' => 21],
            ['name' => 'Balawa', 'wards' => 1, 'district_id' => 21],
            ['name' => 'Bardibas', 'wards' => 1, 'district_id' => 21],
            ['name' => 'Bhangaha', 'wards' => 1, 'district_id' => 21],
            ['name' => 'Gaushala', 'wards' => 1, 'district_id' => 21],
            ['name' => 'Jaleshwor', 'wards' => 1, 'district_id' => 21],
            ['name' => 'Loharpatti', 'wards' => 1, 'district_id' => 21],
            ['name' => 'ManaraShiswa', 'wards' => 1, 'district_id' => 21],
            ['name' => 'Matihani', 'wards' => 1, 'district_id' => 21],
            ['name' => 'Ramgopalpur', 'wards' => 1, 'district_id' => 21],
            ['name' => 'Ekdara', 'wards' => 1, 'district_id' => 21],
            ['name' => 'Mahottari', 'wards' => 1, 'district_id' => 21],
            ['name' => 'Pipara', 'wards' => 1, 'district_id' => 21],
            ['name' => 'Samsi', 'wards' => 1, 'district_id' => 21],
            ['name' => 'Sonama', 'wards' => 1, 'district_id' => 21]
        ];
    }

    /**
     * Get local levels of district twenty-two i.e., Saptari
     * @return array
     */

    public function getDistrictTwentyTwoLocalLevels(): array
    {
        return [
            ['name' => 'Bodebarsain', 'wards' => 1, 'district_id' => 22],
            ['name' => 'Dakneshwori', 'wards' => 1, 'district_id' => 22],
            ['name' => 'Hanumannagar Kankalini', 'wards' => 1, 'district_id' => 22],
            ['name' => 'Kanchanrup', 'wards' => 1, 'district_id' => 22],
            ['name' => 'Khadak', 'wards' => 1, 'district_id' => 22],
            ['name' => 'Sambhunath', 'wards' => 1, 'district_id' => 22],
            ['name' => 'Saptakoshi', 'wards' => 1, 'district_id' => 22],
            ['name' => 'Surunga', 'wards' => 1, 'district_id' => 22],
            ['name' => 'Rajbiraj', 'wards' => 1, 'district_id' => 22],
            ['name' => 'Agnisaira Krishnasavaran', 'wards' => 1, 'district_id' => 22],
            ['name' => 'Balan-Bihul', 'wards' => 1, 'district_id' => 22],
            ['name' => 'Rajgadh', 'wards' => 1, 'district_id' => 22],
            ['name' => 'Bishnupur', 'wards' => 1, 'district_id' => 22],
            ['name' => 'Chhinnamasta', 'wards' => 1, 'district_id' => 22],
            ['name' => 'Mahadeva', 'wards' => 1, 'district_id' => 22],
            ['name' => 'Rupani', 'wards' => 1, 'district_id' => 22],
            ['name' => 'Tilathi Koiladi', 'wards' => 1, 'district_id' => 22],
            ['name' => 'Tirhut', 'wards' => 1, 'district_id' => 22]
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
            ['name' => 'Kamalamai', 'wards' => 1, 'district_id' => 23],
            ['name' => 'Dudhauli', 'wards' => 1, 'district_id' => 23],
            ['name' => 'Sunkoshi', 'wards' => 1, 'district_id' => 23],
            ['name' => 'Hariharpurgadhi', 'wards' => 1, 'district_id' => 23],
            ['name' => 'Tinpatan', 'wards' => 1, 'district_id' => 23],
            ['name' => 'Marin', 'wards' => 1, 'district_id' => 23],
            ['name' => 'Golanjor', 'wards' => 1, 'district_id' => 23],
            ['name' => 'Phikkal', 'wards' => 1, 'district_id' => 23],
            ['name' => 'Ghyanglekh', 'wards' => 1, 'district_id' => 23]
        ];
    }


    /**
     * Get local levels of district twenty four i.e., Ramechhap
     * @return array
     */
    public function getDistrictTwentyFourLocalLevels(): array
    {
        return [
            ['name' => 'Manthali', 'wards' => 1, 'district_id' => 24],
            ['name' => 'Ramechhap', 'wards' => 1, 'district_id' => 24],
            ['name' => 'Umakunda', 'wards' => 1, 'district_id' => 24],
            ['name' => 'Khandadevi', 'wards' => 1, 'district_id' => 24],
            ['name' => 'Gokulganga', 'wards' => 1, 'district_id' => 24],
            ['name' => 'Doramba', 'wards' => 1, 'district_id' => 24],
            ['name' => 'Likhu', 'wards' => 1, 'district_id' => 24],
            ['name' => 'Sunapati', 'wards' => 1, 'district_id' => 24]
        ];
    }

    /**
     * Get local levels of district twenty five i.e., Dolakha
     * @return array
     */

    public function getDistrictTwentyFiveLocalLevels(): array
    {
        return [
            ['name' => 'Bhimeswor', 'wards' => 1, 'district_id' => 25],
            ['name' => 'Jiri', 'wards' => 1, 'district_id' => 25],
            ['name' => 'Kalinchok', 'wards' => 1, 'district_id' => 25],
            ['name' => 'Melung', 'wards' => 1, 'district_id' => 25],
            ['name' => 'Bigu', 'wards' => 1, 'district_id' => 25],
            ['name' => 'Gaurishankar', 'wards' => 1, 'district_id' => 25],
            ['name' => 'Baiteshwor', 'wards' => 1, 'district_id' => 25],
            ['name' => 'Sailung', 'wards' => 1, 'district_id' => 25],
            ['name' => 'Tamakoshi', 'wards' => 1, 'district_id' => 25]
        ];
    }

    /**
     * Get local levels of district twenty six i.e., Bhaktapur
     * @return array
     */

    public function getDistrictTwentySixLocalLevels(): array
    {
        return [
            ['name' => 'Bhaktapur', 'wards' => 1, 'district_id' => 26],
            ['name' => 'Changunarayan', 'wards' => 1, 'district_id' => 26],
            ['name' => 'Madhyapur Thimi', 'wards' => 1, 'district_id' => 26],
            ['name' => 'Suryabinayak', 'wards' => 1, 'district_id' => 26]
        ];
    }

    /**
     * Get local levels of district twenty seven i.e., Dhading
     * @return array
     */

    public function getDistrictTwentySevenLocalLevels(): array
    {
        return [
            ['name' => 'Dhunibeshi', 'wards' => 1, 'district_id' => 27],
            ['name' => 'Nilkantha', 'wards' => 1, 'district_id' => 27],
            ['name' => 'Khaniyabas', 'wards' => 1, 'district_id' => 27],
            ['name' => 'Gajuri', 'wards' => 1, 'district_id' => 27],
            ['name' => 'Galchhi', 'wards' => 1, 'district_id' => 27],
            ['name' => 'Gangajamuna', 'wards' => 1, 'district_id' => 27],
            ['name' => 'Jwalamukhi', 'wards' => 1, 'district_id' => 27],
            ['name' => 'Thakre', 'wards' => 1, 'district_id' => 27],
            ['name' => 'Netrawati Dabjong', 'wards' => 1, 'district_id' => 27],
            ['name' => 'Benighat Rorang', 'wards' => 1, 'district_id' => 27],
            ['name' => 'Rubi Valley', 'wards' => 1, 'district_id' => 27],
            ['name' => 'Siddhalek', 'wards' => 1, 'district_id' => 27],
            ['name' => 'Tripurasundari', 'wards' => 1, 'district_id' => 27]
        ];
    }


    /**
     * Get local levels of district twenty eight i.e., Kathmandu
     * @return array
     */
    public function getDistrictTwentyEightLocalLevels(): array
    {
        return [
            ['name' => 'Kathmandu', 'wards' => 1, 'district_id' => 28],
            ['name' => 'Budhanilkantha', 'wards' => 1, 'district_id' => 28],
            ['name' => 'Tarakeshwar', 'wards' => 1, 'district_id' => 28],
            ['name' => 'Gokarneshwar', 'wards' => 1, 'district_id' => 28],
            ['name' => 'Chandragiri', 'wards' => 1, 'district_id' => 28],
            ['name' => 'Tokha', 'wards' => 1, 'district_id' => 28],
            ['name' => 'Kageshwari-Manohara', 'wards' => 1, 'district_id' => 28],
            ['name' => 'Nagarjun', 'wards' => 1, 'district_id' => 28],
            ['name' => 'Kirtipur', 'wards' => 1, 'district_id' => 28]
        ];
    }

    /**
     * Get local levels of district twenty nine i.e., Kavrepalanchok
     * @return array
     */

    public function getDistrictTwentyNineLocalLevels(): array
    {
        return [
            ['name' => 'Banepa', 'wards' => 1, 'district_id' => 29],
            ['name' => 'Bethanchok', 'wards' => 1, 'district_id' => 29],
            ['name' => 'Bhumlu', 'wards' => 1, 'district_id' => 29],
            ['name' => 'Chauri Deurali', 'wards' => 1, 'district_id' => 29],
            ['name' => 'Dhulikhel', 'wards' => 1, 'district_id' => 29],
            ['name' => 'Khani Khola', 'wards' => 1, 'district_id' => 29],
            ['name' => 'Mahabharat', 'wards' => 1, 'district_id' => 29],
            ['name' => 'Mandandeupur', 'wards' => 1, 'district_id' => 29],
            ['name' => 'Namobuddha', 'wards' => 1, 'district_id' => 29],
            ['name' => 'Panauti', 'wards' => 1, 'district_id' => 29],
            ['name' => 'Panchkhal', 'wards' => 1, 'district_id' => 29],
            ['name' => 'Roshi', 'wards' => 1, 'district_id' => 29],
            ['name' => 'Temal', 'wards' => 1, 'district_id' => 29]
        ];
    }

    /**
     * Get local levels of district thirty i.e., Lalitpur
     * @return array
     */

    public function getDistrictThirtyLocalLevels(): array
    {
        return [
            ['name' => 'Lalitpur', 'wards' => 1, 'district_id' => 30],
            ['name' => 'Mahalaxmi', 'wards' => 1, 'district_id' => 30],
            ['name' => 'Godawari', 'wards' => 1, 'district_id' => 30],
            ['name' => 'Konjyoson', 'wards' => 1, 'district_id' => 30],
            ['name' => 'Bagmati', 'wards' => 1, 'district_id' => 30],
            ['name' => 'Mahankal', 'wards' => 1, 'district_id' => 30]
        ];
    }

    /**
     * Get local levels of district thirty one i.e., Nuwakot
     * @return array
     */

    public function getDistrictThirtyOneLocalLevels(): array
    {
        return [
            ['name' => 'Bidur', 'wards' => 1, 'district_id' => 31],
            ['name' => 'Belkotgadhi', 'wards' => 1, 'district_id' => 31],
            ['name' => 'Kakani', 'wards' => 1, 'district_id' => 31],
            ['name' => 'Panchakanya', 'wards' => 1, 'district_id' => 31],
            ['name' => 'Likhu', 'wards' => 1, 'district_id' => 31],
            ['name' => 'Dupcheshwar', 'wards' => 1, 'district_id' => 31],
            ['name' => 'Shivapuri', 'wards' => 1, 'district_id' => 31],
            ['name' => 'Tadi', 'wards' => 1, 'district_id' => 31],
            ['name' => 'Suryagadhi', 'wards' => 1, 'district_id' => 31],
            ['name' => 'Tarkeshwar', 'wards' => 1, 'district_id' => 31],
            ['name' => 'Kispang', 'wards' => 1, 'district_id' => 31],
            ['name' => 'Myagang', 'wards' => 1, 'district_id' => 31]
        ];
    }

    /**
     * Get local levels of district thirty two i.e., Rasuwa
     * @return array
     */

    public function getDistrictThirtyTwoLocalLevels(): array
    {
        return [
            ['name' => 'Uttargaya', 'wards' => 1, 'district_id' => 32],
            ['name' => 'Kalika', 'wards' => 1, 'district_id' => 32],
            ['name' => 'Gosaikunda', 'wards' => 1, 'district_id' => 32],
            ['name' => 'Naukunda', 'wards' => 1, 'district_id' => 32],
            ['name' => 'Aamachhodingmo', 'wards' => 1, 'district_id' => 32]
        ];
    }

    /**
     * Get local levels of district thirty three i.e., Sindhupalchok
     * @return array
     */

    public function getDistrictThirtyThreeLocalLevels(): array
    {
        return [
            ['name' => 'Chautara Sangachowkgadhi', 'wards' => 1, 'district_id' => 33],
            ['name' => 'Bahrabise', 'wards' => 1, 'district_id' => 33],
            ['name' => 'Melamchi', 'wards' => 1, 'district_id' => 33],
            ['name' => 'Balephi', 'wards' => 1, 'district_id' => 33],
            ['name' => 'Sunkoshi', 'wards' => 1, 'district_id' => 33],
            ['name' => 'Indrawati', 'wards' => 1, 'district_id' => 33],
            ['name' => 'Jugal', 'wards' => 1, 'district_id' => 33],
            ['name' => 'Panchpokhari Thangpal', 'wards' => 1, 'district_id' => 33],
            ['name' => 'Bhotekoshi', 'wards' => 1, 'district_id' => 33],
            ['name' => 'Lisankhu Pakhar', 'wards' => 1, 'district_id' => 33],
            ['name' => 'Helambu', 'wards' => 1, 'district_id' => 33],
            ['name' => 'Tripurasundari', 'wards' => 1, 'district_id' => 33]
        ];
    }

    /**
     * Get local levels of district thirty four i.e., Chitwan
     * @return array
     */

    public function getDistrictThirtyFourLocalLevels(): array
    {
        return [
            ['name' => 'Bharatpur', 'wards' => 1, 'district_id' => 34],
            ['name' => 'Kalika', 'wards' => 1, 'district_id' => 34],
            ['name' => 'Khairahani', 'wards' => 1, 'district_id' => 34],
            ['name' => 'Madi', 'wards' => 1, 'district_id' => 34],
            ['name' => 'Ratnanagar', 'wards' => 1, 'district_id' => 34],
            ['name' => 'Rapti', 'wards' => 1, 'district_id' => 34],
            ['name' => 'Ichchhakamana', 'wards' => 1, 'district_id' => 34]
        ];
    }

    /**
     * Get local levels of district thirty five i.e., Makwanpur
     * @return array
     */

    public function getDistrictThirtyFiveLocalLevels(): array
    {
        return [
            ['name' => 'Hetauda', 'wards' => 1, 'district_id' => 35],
            ['name' => 'Thaha', 'wards' => 1, 'district_id' => 35],
            ['name' => 'Bhimphedi', 'wards' => 1, 'district_id' => 35],
            ['name' => 'Makawanpurgadhi', 'wards' => 1, 'district_id' => 35],
            ['name' => 'Manahari', 'wards' => 1, 'district_id' => 35],
            ['name' => 'Raksirang', 'wards' => 1, 'district_id' => 35],
            ['name' => 'Bakaiya', 'wards' => 1, 'district_id' => 35],
            ['name' => 'Bagmati', 'wards' => 1, 'district_id' => 35],
            ['name' => 'Kailash', 'wards' => 1, 'district_id' => 35],
            ['name' => 'Indrasarowar', 'wards' => 1, 'district_id' => 35]
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
            ['name' => 'Baglung', 'wards' => 1, 'district_id' => 36],
            ['name' => 'Dhorpatan', 'wards' => 1, 'district_id' => 36],
            ['name' => 'Galkot', 'wards' => 1, 'district_id' => 36],
            ['name' => 'Jaimuni', 'wards' => 1, 'district_id' => 36],
            ['name' => 'Bareng', 'wards' => 1, 'district_id' => 36],
            ['name' => 'Khathekhola', 'wards' => 1, 'district_id' => 36],
            ['name' => 'Taman Khola', 'wards' => 1, 'district_id' => 36],
            ['name' => 'Tara Khola', 'wards' => 1, 'district_id' => 36],
            ['name' => 'Nisikhola', 'wards' => 1, 'district_id' => 36],
            ['name' => 'Badigad', 'wards' => 1, 'district_id' => 36]
        ];
    }

    /**
     * Get local levels of district thirty seven i.e., Gorkha
     * @return array
     */

    public function getDistrictThirtySevenLocalLevels(): array
    {
        return [
            ['name' => 'Gorkha', 'wards' => 1, 'district_id' => 37],
            ['name' => 'Palungtar', 'wards' => 1, 'district_id' => 37],
            ['name' => 'Sulikot', 'wards' => 1, 'district_id' => 37],
            ['name' => 'Siranchowk', 'wards' => 1, 'district_id' => 37],
            ['name' => 'Ajirkot', 'wards' => 1, 'district_id' => 37],
            ['name' => 'Tsum Nubri', 'wards' => 1, 'district_id' => 37],
            ['name' => 'Dharche', 'wards' => 1, 'district_id' => 37],
            ['name' => 'Bhimsen Thapa', 'wards' => 1, 'district_id' => 37],
            ['name' => 'Sahid Lakhan', 'wards' => 1, 'district_id' => 37],
            ['name' => 'Aarughat', 'wards' => 1, 'district_id' => 37],
            ['name' => 'Gandaki', 'wards' => 1, 'district_id' => 37]
        ];
    }

    /**
     * Get local levels of district thirty eight i.e., Kaski
     * @return array
     */
    public function getDistrictThirtyEightLocalLevels(): array
    {
        return [
            ['name' => 'Pokhara', 'wards' => 1, 'district_id' => 38],
            ['name' => 'Annapurna', 'wards' => 1, 'district_id' => 38],
            ['name' => 'Machhapuchchhre', 'wards' => 1, 'district_id' => 38],
            ['name' => 'Madi', 'wards' => 1, 'district_id' => 38],
            ['name' => 'Rupa', 'wards' => 1, 'district_id' => 38]
        ];
    }

    /**
     * Get local levels of district thirty nine i.e., Lamjung
     * @return array
     */

    public function getDistrictThirtyNineLocalLevels(): array
    {
        return [
            ['name' => 'Besisahar', 'wards' => 1, 'district_id' => 39],
            ['name' => 'Dordi', 'wards' => 1, 'district_id' => 39],
            ['name' => 'Dudhpokhari', 'wards' => 1, 'district_id' => 39],
            ['name' => 'Kwhlosothar', 'wards' => 1, 'district_id' => 39],
            ['name' => 'Madhya Nepal', 'wards' => 1, 'district_id' => 39],
            ['name' => 'Marsyandi', 'wards' => 1, 'district_id' => 39],
            ['name' => 'Rainas', 'wards' => 1, 'district_id' => 39],
            ['name' => 'Sundarbazar', 'wards' => 1, 'district_id' => 39]
        ];
    }

    /**
     * Get local levels of district forty i.e., Manang
     * @return array
     */
    public function getDistrictFortyLocalLevels(): array
    {
        return [
            ['name' => 'Chame', 'wards' => 1, 'district_id' => 40],
            ['name' => 'Nason', 'wards' => 1, 'district_id' => 40],
            ['name' => 'Narpa Bhumi', 'wards' => 1, 'district_id' => 40],
            ['name' => 'Manang Ngisyang', 'wards' => 1, 'district_id' => 40]
        ];
    }

    /**
     * Get local levels of district forty one i.e., Mustang
     * @return array
     */

    public function getDistrictFortyOneLocalLevels(): array
    {
        return [
            ['name' => 'Gharapjhong', 'wards' => 1, 'district_id' => 41],
            ['name' => 'Thasang', 'wards' => 1, 'district_id' => 41],
            ['name' => 'Barhagaun Muktichhetra', 'wards' => 1, 'district_id' => 41],
            ['name' => 'Lomanthang', 'wards' => 1, 'district_id' => 41],
            ['name' => 'Lo-Ghekar Damodarkunda', 'wards' => 1, 'district_id' => 41]
        ];
    }

    /**
     * Get local levels of district forty two i.e., Myagdi
     * @return array
     */
    public function getDistrictFortyTwoLocalLevels(): array
    {
        return [
            ['name' => 'Beni', 'wards' => 1, 'district_id' => 42],
            ['name' => 'Annapurna', 'wards' => 1, 'district_id' => 42],
            ['name' => 'Dhaulagiri', 'wards' => 1, 'district_id' => 42],
            ['name' => 'Mangala', 'wards' => 1, 'district_id' => 42],
            ['name' => 'Malika', 'wards' => 1, 'district_id' => 42],
            ['name' => 'Raghuganga', 'wards' => 1, 'district_id' => 42]
        ];
    }

    /**
     * Get local levels of district forty three i.e., Nawalpur
     * @return array
     */

    public function getDistrictFortyThreeLocalLevels(): array
    {
        return [
            ['name' => 'Kawasoti', 'wards' => 1, 'district_id' => 43],
            ['name' => 'Gaindakot', 'wards' => 1, 'district_id' => 43],
            ['name' => 'Devachuli', 'wards' => 1, 'district_id' => 43],
            ['name' => 'Madhyabindu', 'wards' => 1, 'district_id' => 43],
            ['name' => 'Baudikali', 'wards' => 1, 'district_id' => 43],
            ['name' => 'Bulingtar', 'wards' => 1, 'district_id' => 43],
            ['name' => 'Binayi Tribeni', 'wards' => 1, 'district_id' => 43],
            ['name' => 'Hupsekot', 'wards' => 1, 'district_id' => 43]
        ];
    }

    /**
     * Get local levels of district forty four i.e., Parbat
     * @return array
     */
    public function getDistrictFortyFourLocalLevels(): array
    {
        return [
            ['name' => 'Kushma', 'wards' => 1, 'district_id' => 44],
            ['name' => 'Phalewas', 'wards' => 1, 'district_id' => 44],
            ['name' => 'Jaljala', 'wards' => 1, 'district_id' => 44],
            ['name' => 'Paiyun', 'wards' => 1, 'district_id' => 44],
            ['name' => 'Mahashila', 'wards' => 1, 'district_id' => 44],
            ['name' => 'Modi', 'wards' => 1, 'district_id' => 44],
            ['name' => 'Bihadi', 'wards' => 1, 'district_id' => 44]
        ];
    }

    /**
     * Get local levels of district forty five i.e., Syangja
     * @return array
     */
    public function getDistrictFortyFiveLocalLevels(): array
    {
        return [
            ['name' => 'Galyang', 'wards' => 1, 'district_id' => 45],
            ['name' => 'Chapakot', 'wards' => 1, 'district_id' => 45],
            ['name' => 'Putalibazar', 'wards' => 1, 'district_id' => 45],
            ['name' => 'Bheerkot', 'wards' => 1, 'district_id' => 45],
            ['name' => 'Waling', 'wards' => 1, 'district_id' => 45],
            ['name' => 'Arjun Chaupari', 'wards' => 1, 'district_id' => 45],
            ['name' => 'Aandhikhola', 'wards' => 1, 'district_id' => 45],
            ['name' => 'Kaligandaki', 'wards' => 1, 'district_id' => 45],
            ['name' => 'Phedikhola', 'wards' => 1, 'district_id' => 45],
            ['name' => 'Harinas', 'wards' => 1, 'district_id' => 45],
            ['name' => 'Biruwa', 'wards' => 1, 'district_id' => 45]
        ];
    }

    /**
     * Get local levels of district forty six i.e., Tanahun
     * @return array
     */
    public function getDistrictFortySixLocalLevels(): array
    {
        return [
            ['name' => 'Bhanu', 'wards' => 1, 'district_id' => 46],
            ['name' => 'Bhimad', 'wards' => 1, 'district_id' => 46],
            ['name' => 'Byas', 'wards' => 1, 'district_id' => 46],
            ['name' => 'Shuklagandaki', 'wards' => 1, 'district_id' => 46],
            ['name' => 'Anbu Khaireni', 'wards' => 1, 'district_id' => 46],
            ['name' => 'Devghat', 'wards' => 1, 'district_id' => 46],
            ['name' => 'Bandipur', 'wards' => 1, 'district_id' => 46],
            ['name' => 'Rishing', 'wards' => 1, 'district_id' => 46],
            ['name' => 'Ghiring', 'wards' => 1, 'district_id' => 46],
            ['name' => 'Myagde', 'wards' => 1, 'district_id' => 46]
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
            ['name' => 'Kapilvastu', 'wards' => 1, 'district_id' => 47],
            ['name' => 'Banganga', 'wards' => 1, 'district_id' => 47],
            ['name' => 'Buddhabhumi', 'wards' => 1, 'district_id' => 47],
            ['name' => 'Shivaraj', 'wards' => 1, 'district_id' => 47],
            ['name' => 'Krishnanagar', 'wards' => 1, 'district_id' => 47],
            ['name' => 'Maharajgunj', 'wards' => 1, 'district_id' => 47],
            ['name' => 'Mayadevi', 'wards' => 1, 'district_id' => 47],
            ['name' => 'Yashodhara', 'wards' => 1, 'district_id' => 47],
            ['name' => 'Suddhodhan', 'wards' => 1, 'district_id' => 47],
            ['name' => 'Bijaynagar', 'wards' => 1, 'district_id' => 47]
        ];
    }

    /**
     * Get local levels of district forty eight i.e., Parasi
     * @return array
     */
    public function getDistrictFortyEightLocalLevels(): array
    {
        return [
            ['name' => 'Bardaghat', 'wards' => 1, 'district_id' => 48],
            ['name' => 'Ramgram', 'wards' => 1, 'district_id' => 48],
            ['name' => 'Sunwal', 'wards' => 1, 'district_id' => 48],
            ['name' => 'Susta', 'wards' => 1, 'district_id' => 48],
            ['name' => 'Palhinandan', 'wards' => 1, 'district_id' => 48],
            ['name' => 'Pratappur', 'wards' => 1, 'district_id' => 48],
            ['name' => 'Sarawal', 'wards' => 1, 'district_id' => 48]
        ];
    }

    /**
     * Get local levels of district forty nine i.e., Rupandehi
     * @return array
     */

    public function getDistrictFortyNineLocalLevels(): array
    {
        return [
            ['name' => 'Butwal', 'wards' => 1, 'district_id' => 49],
            ['name' => 'Devdaha', 'wards' => 1, 'district_id' => 49],
            ['name' => 'Lumbini Sanskritik', 'wards' => 1, 'district_id' => 49],
            ['name' => 'Sainamaina', 'wards' => 1, 'district_id' => 49],
            ['name' => 'Siddharthanagar', 'wards' => 1, 'district_id' => 49],
            ['name' => 'Tilottama', 'wards' => 1, 'district_id' => 49],
            ['name' => 'Gaidahawa', 'wards' => 1, 'district_id' => 49],
            ['name' => 'Kanchan', 'wards' => 1, 'district_id' => 49],
            ['name' => 'Kotahimai', 'wards' => 1, 'district_id' => 49],
            ['name' => 'Marchawari', 'wards' => 1, 'district_id' => 49],
            ['name' => 'Mayadevi', 'wards' => 1, 'district_id' => 49],
            ['name' => 'Omsatiya', 'wards' => 1, 'district_id' => 49],
            ['name' => 'Rohini', 'wards' => 1, 'district_id' => 49],
            ['name' => 'Sammarimai', 'wards' => 1, 'district_id' => 49],
            ['name' => 'Siyari', 'wards' => 1, 'district_id' => 49],
            ['name' => 'Suddodhan', 'wards' => 1, 'district_id' => 49]
        ];
    }

    /**
     * Get local levels of district fifty i.e., Arghakhanchi
     * @return array
     */
    public function getDistrictFiftyLocalLevels(): array
    {
        return [
            ['name' => 'Sandhikharka', 'wards' => 1, 'district_id' => 50],
            ['name' => 'Sitganga', 'wards' => 1, 'district_id' => 50],
            ['name' => 'Bhumikasthan', 'wards' => 1, 'district_id' => 50],
            ['name' => 'Chhatradev', 'wards' => 1, 'district_id' => 50],
            ['name' => 'Panini', 'wards' => 1, 'district_id' => 50],
            ['name' => 'Malarani', 'wards' => 1, 'district_id' => 50]
        ];
    }

    /**
     * Get local levels of district fifty one i.e., Gulmi
     * @return array
     */
    public function getDistrictFiftyOneLocalLevels(): array
    {
        return [
            ['name' => 'Musikot', 'wards' => 1, 'district_id' => 51],
            ['name' => 'Resunga', 'wards' => 1, 'district_id' => 51],
            ['name' => 'Ishma', 'wards' => 1, 'district_id' => 51],
            ['name' => 'Kaligandaki', 'wards' => 1, 'district_id' => 51],
            ['name' => 'Gulmi Darbar', 'wards' => 1, 'district_id' => 51],
            ['name' => 'Satyawati', 'wards' => 1, 'district_id' => 51],
            ['name' => 'Chandrakot', 'wards' => 1, 'district_id' => 51],
            ['name' => 'Rurukshetra', 'wards' => 1, 'district_id' => 51],
            ['name' => 'Chhatrakot', 'wards' => 1, 'district_id' => 51],
            ['name' => 'Dhurkot', 'wards' => 1, 'district_id' => 51],
            ['name' => 'Madane', 'wards' => 1, 'district_id' => 51],
            ['name' => 'Malika', 'wards' => 1, 'district_id' => 51]
        ];
    }

    /**
     * Get local levels of district fifty two i.e., Palpa
     * @return array
     */
    public function getDistrictFiftyTwoLocalLevels(): array
    {
        return [
            ['name' => 'Tansen', 'wards' => 1, 'district_id' => 52],
            ['name' => 'Rampur', 'wards' => 1, 'district_id' => 52],
            ['name' => 'Rainadevi Chhahara', 'wards' => 1, 'district_id' => 52],
            ['name' => 'Ripdikot', 'wards' => 1, 'district_id' => 52],
            ['name' => 'Bagnaskali', 'wards' => 1, 'district_id' => 52],
            ['name' => 'Rambha', 'wards' => 1, 'district_id' => 52],
            ['name' => 'Purbakhola', 'wards' => 1, 'district_id' => 52],
            ['name' => 'Nisdi', 'wards' => 1, 'district_id' => 52],
            ['name' => 'Mathagadi', 'wards' => 1, 'district_id' => 52],
            ['name' => 'Tinahu', 'wards' => 1, 'district_id' => 52]
        ];
    }

    /**
     * Get local levels of district fifty three i.e., Dang
     * @return array
     */
    public function getDistrictFiftyThreeLocalLevels(): array
    {
        return [
            ['name' => 'Ghorahi', 'wards' => 1, 'district_id' => 53],
            ['name' => 'Tulsipur', 'wards' => 1, 'district_id' => 53],
            ['name' => 'Lamahi', 'wards' => 1, 'district_id' => 53],
            ['name' => 'Gadhawa', 'wards' => 1, 'district_id' => 53],
            ['name' => 'Rajpur', 'wards' => 1, 'district_id' => 53],
            ['name' => 'Shantinagar', 'wards' => 1, 'district_id' => 53],
            ['name' => 'Rapti', 'wards' => 1, 'district_id' => 53],
            ['name' => 'Banglachuli', 'wards' => 1, 'district_id' => 53],
            ['name' => 'Dangisharan', 'wards' => 1, 'district_id' => 53],
            ['name' => 'Babai', 'wards' => 1, 'district_id' => 53]
        ];
    }

    /**
     * Get local levels of district fifty four i.e., Pyuthan
     * @return array
     */
    public function getDistrictFiftyFourLocalLevels(): array
    {
        return [
            ['name' => 'Pyuthan', 'wards' => 1, 'district_id' => 54],
            ['name' => 'Sworgadwari', 'wards' => 1, 'district_id' => 54],
            ['name' => 'Gaumukhi', 'wards' => 1, 'district_id' => 54],
            ['name' => 'Mandavi', 'wards' => 1, 'district_id' => 54],
            ['name' => 'Sarumarani', 'wards' => 1, 'district_id' => 54],
            ['name' => 'Mallarani', 'wards' => 1, 'district_id' => 54],
            ['name' => 'Naubahini', 'wards' => 1, 'district_id' => 54],
            ['name' => 'Jhimruk', 'wards' => 1, 'district_id' => 54],
            ['name' => 'Airawati', 'wards' => 1, 'district_id' => 54]
        ];
    }

    /**
     * Get local levels of district fifty five i.e., Rolpa
     * @return array
     */
    public function getDistrictFiftyFiveLocalLevels(): array
    {
        return [
            ['name' => 'Rolpa', 'wards' => 1, 'district_id' => 55],
            ['name' => 'Runtigadhi', 'wards' => 1, 'district_id' => 55],
            ['name' => 'Triveni', 'wards' => 1, 'district_id' => 55],
            ['name' => 'Sunilsmiriti', 'wards' => 1, 'district_id' => 55],
            ['name' => 'Lungri', 'wards' => 1, 'district_id' => 55],
            ['name' => 'Sunchhahari', 'wards' => 1, 'district_id' => 55],
            ['name' => 'Thabang', 'wards' => 1, 'district_id' => 55],
            ['name' => 'Madi', 'wards' => 1, 'district_id' => 55],
            ['name' => 'Gangadev', 'wards' => 1, 'district_id' => 55],
            ['name' => 'Paribartan', 'wards' => 1, 'district_id' => 55]
        ];
    }

    /**
     * Get local levels of district fifty six i.e., Eastern Rukum
     * @return array
     */
    public function getDistrictFiftySixLocalLevels(): array
    {
        return [
            ['name' => 'Bhume', 'wards' => 1, 'district_id' => 56],
            ['name' => 'Putha Uttarganga', 'wards' => 1, 'district_id' => 56],
            ['name' => 'Sisne', 'wards' => 1, 'district_id' => 56]
        ];
    }

    /**
     * Get local levels of district fifty seven i.e., Banke
     * @return array
     */
    public function getDistrictFiftySevenLocalLevels(): array
    {
        return [
            ['name' => 'Nepalgunj', 'wards' => 1, 'district_id' => 57],
            ['name' => 'Kohalpur', 'wards' => 1, 'district_id' => 57],
            ['name' => 'Rapti-Sonari', 'wards' => 1, 'district_id' => 57],
            ['name' => 'Narainapur', 'wards' => 1, 'district_id' => 57],
            ['name' => 'Duduwa', 'wards' => 1, 'district_id' => 57],
            ['name' => 'Janaki', 'wards' => 1, 'district_id' => 57],
            ['name' => 'Khajura', 'wards' => 1, 'district_id' => 57],
            ['name' => 'Baijanath', 'wards' => 1, 'district_id' => 57]
        ];
    }

    /**
     * Get local levels of district fifty eight i.e., Bardiya
     * @return array
     */
    public function getDistrictFiftyEightLocalLevels(): array
    {
        return [
            ['name' => 'Gulariya', 'wards' => 1, 'district_id' => 58],
            ['name' => 'Rajapur', 'wards' => 1, 'district_id' => 58],
            ['name' => 'Madhuwan', 'wards' => 1, 'district_id' => 58],
            ['name' => 'Thakurbaba', 'wards' => 1, 'district_id' => 58],
            ['name' => 'Basgadhi', 'wards' => 1, 'district_id' => 58],
            ['name' => 'Barbardiya', 'wards' => 1, 'district_id' => 58],
            ['name' => 'Badhaiyatal', 'wards' => 1, 'district_id' => 58],
            ['name' => 'Geruwa', 'wards' => 1, 'district_id' => 58]
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
            ['name' => 'Musikot', 'wards' => 1, 'district_id' => 59],
            ['name' => 'Chaurjahari', 'wards' => 1, 'district_id' => 59],
            ['name' => 'Aathbiskot', 'wards' => 1, 'district_id' => 59],
            ['name' => 'Banphikot', 'wards' => 1, 'district_id' => 59],
            ['name' => 'Tribeni', 'wards' => 1, 'district_id' => 59],
            ['name' => 'Sani Bheri', 'wards' => 1, 'district_id' => 59]
        ];
    }

    /**
     * Get local levels of district sixty i.e., Salyan
     * @return array
     */
    public function getDistrictSixtyLocalLevels(): array
    {
        return [
            ['name' => 'Shaarda', 'wards' => 1, 'district_id' => 60],
            ['name' => 'Bagchaur', 'wards' => 1, 'district_id' => 60],
            ['name' => 'Bangad Kupinde', 'wards' => 1, 'district_id' => 60],
            ['name' => 'Kalimati', 'wards' => 1, 'district_id' => 60],
            ['name' => 'Tribeni', 'wards' => 1, 'district_id' => 60],
            ['name' => 'Kapurkot', 'wards' => 1, 'district_id' => 60],
            ['name' => 'Chatreshwari', 'wards' => 1, 'district_id' => 60],
            ['name' => 'Kumakh', 'wards' => 1, 'district_id' => 60],
            ['name' => 'Siddha Kumakh', 'wards' => 1, 'district_id' => 60],
            ['name' => 'Darma', 'wards' => 1, 'district_id' => 60]
        ];
    }

    /**
     * Get local levels of district sixty one i.e., Dolpa
     * @return array
     */
    public function getDistrictSixtyOneLocalLevels(): array
    {
        return [
            ['name' => 'Thuli Bheri', 'wards' => 1, 'district_id' => 61],
            ['name' => 'Tripurasundari', 'wards' => 1, 'district_id' => 61],
            ['name' => 'Dolpo Buddha', 'wards' => 1, 'district_id' => 61],
            ['name' => 'She Phoksundo', 'wards' => 1, 'district_id' => 61],
            ['name' => 'Jagadulla', 'wards' => 1, 'district_id' => 61],
            ['name' => 'Mudkechula', 'wards' => 1, 'district_id' => 61],
            ['name' => 'Kaike', 'wards' => 1, 'district_id' => 61],
            ['name' => 'Chharka Tangsong', 'wards' => 1, 'district_id' => 61]
        ];
    }

    /**
     * Get local levels of district sixty two i.e., Humla
     * @return array
     */
    public function getDistrictSixtyTwoLocalLevels(): array
    {
        return [
            ['name' => 'Simkot', 'wards' => 1, 'district_id' => 62],
            ['name' => 'Namkha', 'wards' => 1, 'district_id' => 62],
            ['name' => 'Kharpunath', 'wards' => 1, 'district_id' => 62],
            ['name' => 'Sarkegad', 'wards' => 1, 'district_id' => 62],
            ['name' => 'Chankheli', 'wards' => 1, 'district_id' => 62],
            ['name' => 'Adanchuli', 'wards' => 1, 'district_id' => 62],
            ['name' => 'Tajakot', 'wards' => 1, 'district_id' => 62]
        ];
    }

    /**
     * Get local levels of district sixty three i.e., Jumla
     * @return array
     */
    public function getDistrictSixtyThreeLocalLevels(): array
    {
        return [
            ['name' => 'Chandannath', 'wards' => 1, 'district_id' => 63],
            ['name' => 'Kankasundari', 'wards' => 1, 'district_id' => 63],
            ['name' => 'Sinja', 'wards' => 1, 'district_id' => 63],
            ['name' => 'Hima', 'wards' => 1, 'district_id' => 63],
            ['name' => 'Tila', 'wards' => 1, 'district_id' => 63],
            ['name' => 'Guthichaur', 'wards' => 1, 'district_id' => 63],
            ['name' => 'Tatopani', 'wards' => 1, 'district_id' => 63],
            ['name' => 'Patarasi', 'wards' => 1, 'district_id' => 63]
        ];
    }

    /**
     * Get local levels of district sixty four i.e., Kalikot
     * @return array
     */
    public function getDistrictSixtyFourLocalLevels(): array
    {
        return [
            ['name' => 'Khandachakra', 'wards' => 1, 'district_id' => 64],
            ['name' => 'Raskot', 'wards' => 1, 'district_id' => 64],
            ['name' => 'Tilagufa', 'wards' => 1, 'district_id' => 64],
            ['name' => 'Pachaljharana', 'wards' => 1, 'district_id' => 64],
            ['name' => 'Sanni Triveni', 'wards' => 1, 'district_id' => 64],
            ['name' => 'Narharinath', 'wards' => 1, 'district_id' => 64],
            ['name' => 'Shubha Kalika', 'wards' => 1, 'district_id' => 64],
            ['name' => 'Mahawai', 'wards' => 1, 'district_id' => 64],
            ['name' => 'Palata', 'wards' => 1, 'district_id' => 64]
        ];
    }

    /**
     * Get local levels of district sixty five i.e., Mugu
     * @return array
     */
    public function getDistrictSixtyFiveLocalLevels(): array
    {
        return [
            ['name' => 'Chhayanath Rara', 'wards' => 1, 'district_id' => 65],
            ['name' => 'Mugum Karmarong', 'wards' => 1, 'district_id' => 65],
            ['name' => 'Soru', 'wards' => 1, 'district_id' => 65],
            ['name' => 'Khatyad', 'wards' => 1, 'district_id' => 65]
        ];
    }

    /**
     * Get local levels of district sixty six i.e., Surkhet
     * @return array
     */
    public function getDistrictSixtySixLocalLevels(): array
    {
        return [
            ['name' => 'Birendranagar', 'wards' => 1, 'district_id' => 66],
            ['name' => 'Chaukune', 'wards' => 1, 'district_id' => 66],
            ['name' => 'Bheriganga', 'wards' => 1, 'district_id' => 66],
            ['name' => 'Barahatal', 'wards' => 1, 'district_id' => 66],
            ['name' => 'Gurbha Kot', 'wards' => 1, 'district_id' => 66],
            ['name' => 'Chingad', 'wards' => 1, 'district_id' => 66],
            ['name' => 'Panchapuri', 'wards' => 1, 'district_id' => 66],
            ['name' => 'Simta', 'wards' => 1, 'district_id' => 66],
            ['name' => 'Lekbesi', 'wards' => 1, 'district_id' => 66]
        ];
    }

    /**
     * Get local levels of district sixty seven i.e., Dailekh
     * @return array
     */
    public function getDistrictSixtySevenLocalLevels(): array
    {
        return [
            ['name' => 'Narayan Urban', 'wards' => 1, 'district_id' => 67],
            ['name' => 'Dullu Urban', 'wards' => 1, 'district_id' => 67],
            ['name' => 'Aathbis Urban', 'wards' => 1, 'district_id' => 67],
            ['name' => 'Chamunda Bindrasaini', 'wards' => 1, 'district_id' => 67],
            ['name' => 'Thantikandh', 'wards' => 1, 'district_id' => 67],
            ['name' => 'Bhairabi', 'wards' => 1, 'district_id' => 67],
            ['name' => 'Mahabu', 'wards' => 1, 'district_id' => 67],
            ['name' => 'Naumule', 'wards' => 1, 'district_id' => 67],
            ['name' => 'Dungeshwar', 'wards' => 1, 'district_id' => 67],
            ['name' => 'Gurans', 'wards' => 1, 'district_id' => 67],
            ['name' => 'Bhagawatimai', 'wards' => 1, 'district_id' => 67]
        ];
    }

    /**
     * Get local levels of district sixty eight i.e., Jajarkot
     * @return array
     */
    public function getDistrictSixtyEightLocalLevels(): array
    {
        return [
            ['name' => 'Bheri', 'wards' => 1, 'district_id' => 68],
            ['name' => 'Chhedagad', 'wards' => 1, 'district_id' => 68],
            ['name' => 'Tribeni Nalgad', 'wards' => 1, 'district_id' => 68],
            ['name' => 'Junichande', 'wards' => 1, 'district_id' => 68],
            ['name' => 'Kushe', 'wards' => 1, 'district_id' => 68],
            ['name' => 'Barekot', 'wards' => 1, 'district_id' => 68],
            ['name' => 'Shivalaya', 'wards' => 1, 'district_id' => 68]
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
            ['name' => 'Dhangadhi', 'wards' => 1, 'district_id' => 69],
            ['name' => 'Lamki Chuha', 'wards' => 1, 'district_id' => 69],
            ['name' => 'Tikapur', 'wards' => 1, 'district_id' => 69],
            ['name' => 'Ghodaghodi', 'wards' => 1, 'district_id' => 69],
            ['name' => 'Bhajani', 'wards' => 1, 'district_id' => 69],
            ['name' => 'Godawari', 'wards' => 1, 'district_id' => 69],
            ['name' => 'Gauriganga', 'wards' => 1, 'district_id' => 69],
            ['name' => 'Janaki', 'wards' => 1, 'district_id' => 69],
            ['name' => 'Bardagoriya', 'wards' => 1, 'district_id' => 69],
            ['name' => 'Mohanyal', 'wards' => 1, 'district_id' => 69],
            ['name' => 'Kailari', 'wards' => 1, 'district_id' => 69],
            ['name' => 'Joshipur', 'wards' => 1, 'district_id' => 69],
            ['name' => 'Chure', 'wards' => 1, 'district_id' => 69]
        ];
    }

    /**
     * Get local levels of district seventy i.e., Achham
     * @return array
     */
    public function getDistrictSeventyLocalLevels(): array
    {
        return [
            ['name' => 'Mangalsen', 'wards' => 1, 'district_id' => 70],
            ['name' => 'Kamalbazar', 'wards' => 1, 'district_id' => 70],
            ['name' => 'Sanfebagar', 'wards' => 1, 'district_id' => 70],
            ['name' => 'Panchadewal Binayak', 'wards' => 1, 'district_id' => 70],
            ['name' => 'Ramaroshan', 'wards' => 1, 'district_id' => 70],
            ['name' => 'Chaurpati', 'wards' => 1, 'district_id' => 70],
            ['name' => 'Turmakhand', 'wards' => 1, 'district_id' => 70],
            ['name' => 'Mellekh', 'wards' => 1, 'district_id' => 70],
            ['name' => 'Dhakari', 'wards' => 1, 'district_id' => 70],
            ['name' => 'Bannigadi Jayagad', 'wards' => 1, 'district_id' => 70]
        ];
    }

    /**
     * Get local levels of district seventy one i.e., Doti
     * @return array
     */
    public function getDistrictSeventyOneLocalLevels(): array
    {
        return [
            ['name' => 'Dipayal Silgadhi', 'wards' => 1, 'district_id' => 71],
            ['name' => 'Shikhar', 'wards' => 1, 'district_id' => 71],
            ['name' => 'Purbichauki', 'wards' => 1, 'district_id' => 71],
            ['name' => 'Badikedar', 'wards' => 1, 'district_id' => 71],
            ['name' => 'Jorayal', 'wards' => 1, 'district_id' => 71],
            ['name' => 'Sayal', 'wards' => 1, 'district_id' => 71],
            ['name' => 'Aadarsha', 'wards' => 1, 'district_id' => 71],
            ['name' => 'Dr. K. I. Singh', 'wards' => 1, 'district_id' => 71],
            ['name' => 'Bogatan', 'wards' => 1, 'district_id' => 71]
        ];
    }

    /**
     * Get local levels of district seventy two i.e., Bajhang
     * @return array
     */
    public function getDistrictSeventyTwoLocalLevels(): array
    {
        return [
            ['name' => 'Jaya Prithvi', 'wards' => 1, 'district_id' => 72],
            ['name' => 'Bungal', 'wards' => 1, 'district_id' => 72],
            ['name' => 'Talkot', 'wards' => 1, 'district_id' => 72],
            ['name' => 'Masta', 'wards' => 1, 'district_id' => 72],
            ['name' => 'Khaptadchhanna', 'wards' => 1, 'district_id' => 72],
            ['name' => 'Thalara', 'wards' => 1, 'district_id' => 72],
            ['name' => 'Bitthadchir', 'wards' => 1, 'district_id' => 72],
            ['name' => 'Surma', 'wards' => 1, 'district_id' => 72],
            ['name' => 'Chhabis Pathibhera', 'wards' => 1, 'district_id' => 72],
            ['name' => 'Durgathali', 'wards' => 1, 'district_id' => 72],
            ['name' => 'Kedarsyu', 'wards' => 1, 'district_id' => 72],
            ['name' => 'Saipal', 'wards' => 1, 'district_id' => 72]
        ];
    }

    /**
     * Get local levels of district seventy three i.e., Bajura
     * @return array
     */
    public function getDistrictSeventyThreeLocalLevels(): array
    {
        return [
            ['name' => 'Badimalika', 'wards' => 1, 'district_id' => 73],
            ['name' => 'Triveni', 'wards' => 1, 'district_id' => 73],
            ['name' => 'Budhiganga', 'wards' => 1, 'district_id' => 73],
            ['name' => 'Budhinanda', 'wards' => 1, 'district_id' => 73],
            ['name' => 'Gaumul', 'wards' => 1, 'district_id' => 73],
            ['name' => 'Jagnnath', 'wards' => 1, 'district_id' => 73],
            ['name' => 'Swamikartik Khapar', 'wards' => 1, 'district_id' => 73],
            ['name' => 'Chhededaha', 'wards' => 1, 'district_id' => 73],
            ['name' => 'Himali', 'wards' => 1, 'district_id' => 73]
        ];
    }

    /**
     * Get local levels of district seventy four i.e., Kanchanpur
     * @return array
     */
    public function getDistrictSeventyFourLocalLevels(): array
    {
        return [
            ['name' => 'Bedkot', 'wards' => 1, 'district_id' => 74],
            ['name' => 'Belauri', 'wards' => 1, 'district_id' => 74],
            ['name' => 'Bhimdatta', 'wards' => 1, 'district_id' => 74],
            ['name' => 'Mahakali', 'wards' => 1, 'district_id' => 74],
            ['name' => 'Shuklaphanta', 'wards' => 1, 'district_id' => 74],
            ['name' => 'Krishnapur', 'wards' => 1, 'district_id' => 74],
            ['name' => 'Punarbas', 'wards' => 1, 'district_id' => 74],
            ['name' => 'Laljhadi', 'wards' => 1, 'district_id' => 74],
            ['name' => 'Beldandi', 'wards' => 1, 'district_id' => 74]
        ];
    }

    /**
     * Get local levels of district seventy five i.e., Dadeldhura
     * @return array
     */
    public function getDistrictSeventyFiveLocalLevels(): array
    {
        return [
            ['name' => 'Amargadhi', 'wards' => 1, 'district_id' => 75],
            ['name' => 'Parshuram', 'wards' => 1, 'district_id' => 75],
            ['name' => 'Aalitaal', 'wards' => 1, 'district_id' => 75],
            ['name' => 'Bhageshwar', 'wards' => 1, 'district_id' => 75],
            ['name' => 'Navadurga', 'wards' => 1, 'district_id' => 75],
            ['name' => 'Ajaymeru', 'wards' => 1, 'district_id' => 75],
            ['name' => 'Ganyapadhura', 'wards' => 1, 'district_id' => 75]
        ];
    }

    /**
     * Get local levels of district seventy six i.e., Baitadi
     * @return array
     */
    public function getDistrictSeventySixLocalLevels(): array
    {
        return [
            ['name' => 'Dasharathchand', 'wards' => 1, 'district_id' => 76],
            ['name' => 'Patan', 'wards' => 1, 'district_id' => 76],
            ['name' => 'Melauli', 'wards' => 1, 'district_id' => 76],
            ['name' => 'Purchaudi', 'wards' => 1, 'district_id' => 76],
            ['name' => 'Sunarya', 'wards' => 1, 'district_id' => 76],
            ['name' => 'Sigas', 'wards' => 1, 'district_id' => 76],
            ['name' => 'Shivanath', 'wards' => 1, 'district_id' => 76],
            ['name' => 'Pancheshwor', 'wards' => 1, 'district_id' => 76],
            ['name' => 'Dogdakedar', 'wards' => 1, 'district_id' => 76],
            ['name' => 'Dilasaini', 'wards' => 1, 'district_id' => 76]
        ];
    }

    /**
     * Get local levels of district seventy seven i.e., Darchula
     * @return array
     */
    public function getDistrictSeventySevenLocalLevels(): array
    {
        return [
            ['name' => 'Mahakali', 'wards' => 1, 'district_id' => 77],
            ['name' => 'Shailyasikhar', 'wards' => 1, 'district_id' => 77],
            ['name' => 'Malikarjun', 'wards' => 1, 'district_id' => 77],
            ['name' => 'Apihimal', 'wards' => 1, 'district_id' => 77],
            ['name' => 'Duhun', 'wards' => 1, 'district_id' => 77],
            ['name' => 'Naugad', 'wards' => 1, 'district_id' => 77],
            ['name' => 'Marma', 'wards' => 1, 'district_id' => 77],
            ['name' => 'Lekam', 'wards' => 1, 'district_id' => 77],
            ['name' => 'Vyans', 'wards' => 1, 'district_id' => 77]
        ];
    }
}
