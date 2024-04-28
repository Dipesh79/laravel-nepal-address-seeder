<?php

namespace Dipesh79\LaravelNepalAddressSeeder\Commands;

use Dipesh79\LaravelNepalAddressSeeder\Data\Districts;
use Dipesh79\LaravelNepalAddressSeeder\Data\LocalLevels;
use Dipesh79\LaravelNepalAddressSeeder\Data\Provinces;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class SeedAddressCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'nepal-address:seed {--province} {--district} {--local-level}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Seeds the address table with data.';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        $provinces = new Provinces();
        $districts = new Districts();
        $localLevels = new LocalLevels();
        // Count the number of provinces, districts and local levels
        $provinceCount = count($provinces->getProvinces());
        $districtCount = count($districts->getDistricts());
        $localLevelCount = count($localLevels->getLocalLevels());

        $this->info('You are about to seed the address. Please make sure you have the configuration set up correctly.');
        $option = $this->anticipate('Do you want to continue?', ['Yes', 'No'], 'Yes');
        DB::beginTransaction();
        try {
            if ($option === 'Yes') {

                if ($this->option('province')) {
                    $this->provinceSeeder($provinceCount,$provinces);
                }
                if ($this->option('district')) {
                    $this->districtSeeder($districtCount,$districts);
                }
                if ($this->option('local-level')) {
                    $this->localLevelSeeder($localLevelCount,$localLevels);
                }
                if (!($this->option('province') || $this->option('district') || $this->option('local-level'))) {
                    $this->info('Seeding the province table...');

                    $this->provinceSeeder($provinceCount,$provinces);

                    $this->districtSeeder($districtCount,$districts);

                    $this->localLevelSeeder($localLevelCount,$localLevels);
                }
            } else {
                $this->warn('Seeding the address table aborted.');
            }
        } catch (\Exception $e) {
            DB::rollBack();
            $this->line('');
            $this->error('An error occurred while seeding the address table.');
            $this->error($e->getMessage());
            $this->warn('Rolling back the transaction.');
        }
        DB::commit();
    }

    /**
     * @param array $province
     * @return array
     */
    private function createProvinceFormat(array $province): array
    {
        $province_array = [
            config('nepal-address.province_name') => $province['name'],
        ];
        if (config('nepal-address.add_province_capital')) {
            $province_array[config('nepal-address.province_capital')] = $province['capital'];
        }
        if (config('nepal-address.add_province_no_of_districts')) {
            $province_array[config('nepal-address.province_no_of_districts')] = $province['no_of_districts'];
        }
        return $province_array;
    }

    /**
     * @param array $district
     * @return array
     */
    private function createDistrictFormat(array $district): array
    {
        return [
            config('nepal-address.district_name') => $district['name'],
            'province_id' => $district['province_id'],
        ];
    }

    /**
     * @param array $localLevel
     * @return array
     */
    private function createLocalLevelFormat(array $localLevel): array
    {
        $local_level_array = [
            config('nepal-address.local_level_name') => $localLevel['name'],
            'district_id' => $localLevel['district_id'],
        ];
        if (config('nepal-address.add_local_level_wards')) {
            $local_level_array[config('nepal-address.local_level_wards')] = $localLevel['wards'];
        }
        return $local_level_array;
    }

    private function provinceSeeder($provinceCount, $provinces): void
    {
        $provinceBar = $this->output->createProgressBar($provinceCount);
        foreach ($provinces->getProvinces() as $province) {
            $province_array = $this->createProvinceFormat($province);
            config('nepal-address.province')::firstOrCreate($province_array);
            $provinceBar->advance();
        }
        $provinceBar->finish();
        $this->line('');
        $this->info('Province seeded successfully.');
    }

    private function districtSeeder($districtCount,$districts): void
    {
        $this->info('Seeding the district table...');
        $districtBar = $this->output->createProgressBar($districtCount);
        foreach ($districts->getDistricts() as $district) {
            $district_array = $this->createDistrictFormat($district);
            config('nepal-address.district')::firstOrCreate($district_array);
            $districtBar->advance();
        }
        $districtBar->finish();
        $this->line('');
        $this->info('District seeded successfully.');
    }

    private function localLevelSeeder($localLevelCount,$localLevels): void
    {
        $this->info('Seeding the local level table...');
        $localLevelBar = $this->output->createProgressBar($localLevelCount);
        foreach ($localLevels->getLocalLevels() as $localLevel) {
            $local_level_array = $this->createLocalLevelFormat($localLevel);
            config('nepal-address.local_level')::firstOrCreate($local_level_array);
            $localLevelBar->advance();
        }
        $localLevelBar->finish();
        $this->line('');
        $this->info('Local Level seeded successfully.');
    }


}
