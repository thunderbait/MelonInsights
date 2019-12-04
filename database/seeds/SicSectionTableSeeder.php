<?php

use Illuminate\Database\Seeder;

use Carbon\Carbon;

use App\SicSection;

class SicSectionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * 
     * 
     *  Source: https://www.ons.gov.uk/methodology/classificationsandstandards/ukstandardindustrialclassificationofeconomicactivities/uksic2007
     *
     *
     * @return void
     */
    
    public function run()
    {
        DB::table('sic_sections')->insert([
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'name' => 'AGRICULTURE, FORESTRY AND FISHING',
            'code' => 'A',
            'image' => 'https://image.flaticon.com/icons/svg/1555/1555558.svg'
        ]);

        DB::table('sic_sections')->insert([
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'name' => 'MINING AND QUARRYING',
            'code' => 'B',
            'image' => 'https://image.flaticon.com/icons/svg/1258/1258530.svg'
        ]);

        DB::table('sic_sections')->insert([
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'name' => 'MANUFACTURING',
            'code' => 'C',
            'image' => 'https://image.flaticon.com/icons/svg/2082/2082148.svg'
        ]);

        DB::table('sic_sections')->insert([
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'name' => 'ELECTRICITY, GAS, STEAM AND AIR CONDITIONING SUPPLY',
            'code' => 'D',
            'image' => 'https://image.flaticon.com/icons/svg/702/702797.svg'
        ]);

        DB::table('sic_sections')->insert([
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'name' => 'WATER SUPPLY; SEWERAGE, WASTE MANAGEMENT AND REMEDIATION ACTIVITIES',
            'code' => 'E',
            'image' => 'https://image.flaticon.com/icons/svg/1283/1283656.svg'
        ]);

        DB::table('sic_sections')->insert([
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'name' => 'CONSTRUCTION',
            'code' => 'F',
            'image' => 'https://image.flaticon.com/icons/svg/2051/2051508.svg'
        ]);

        DB::table('sic_sections')->insert([
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'name' => 'WHOLESALE AND RETAIL TRADE; REPAIR OF MOTOR VEHICLES AND MOTORCYCLES',
            'code' => 'G',
            'image' => 'https://image.flaticon.com/icons/svg/1186/1186985.svg'
        ]);

        DB::table('sic_sections')->insert([
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'name' => 'TRANSPORTATION AND STORAGE',
            'code' => 'H',
            'image' => 'https://image.flaticon.com/icons/svg/2047/2047980.svg'
        ]);

        DB::table('sic_sections')->insert([
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'name' => 'ACCOMMODATION AND FOOD SERVICE ACTIVITIES',
            'code' => 'I',
            'image' => 'https://image.flaticon.com/icons/svg/675/675181.svg'
        ]);

        DB::table('sic_sections')->insert([
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'name' => 'INFORMATION AND COMMUNICATION',
            'code' => 'J',
            'image' => 'https://image.flaticon.com/icons/svg/942/942745.svg'
        ]);

        DB::table('sic_sections')->insert([
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'name' => 'FINANCIAL AND INSURANCE ACTIVITIES',
            'code' => 'K',
            'image' => 'https://image.flaticon.com/icons/svg/959/959901.svg'
        ]);

        DB::table('sic_sections')->insert([
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'name' => 'REAL ESTATE ACTIVITIES',
            'code' => 'L',
            'image' => 'https://image.flaticon.com/icons/svg/959/959901.svg'
        ]);

        DB::table('sic_sections')->insert([
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'name' => 'PROFESSIONAL, SCIENTIFIC AND TECHNICAL ACTIVITIES',
            'code' => 'M',
            'image' => 'https://image.flaticon.com/icons/svg/791/791072.svg'
        ]);

        DB::table('sic_sections')->insert([
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'name' => 'ADMINISTRATIVE AND SUPPORT SERVICE ACTIVITIES',
            'code' => 'N',
            'image' => 'https://image.flaticon.com/icons/svg/2055/2055799.svg'
        ]);

        DB::table('sic_sections')->insert([
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'name' => 'PUBLIC ADMINISTRATION AND DEFENCE; COMPULSORY SOCIAL SECURITY',
            'code' => 'O',
            'image' => 'https://image.flaticon.com/icons/svg/2051/2051962.svg'
        ]);

        DB::table('sic_sections')->insert([
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'name' => 'EDUCATION',
            'code' => 'P',
            'image' => 'https://image.flaticon.com/icons/svg/2069/2069664.svg'
        ]);

        DB::table('sic_sections')->insert([
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'name' => 'HUMAN HEALTH AND SOCIAL WORK ACTIVITIES',
            'code' => 'Q',
            'image' => 'https://image.flaticon.com/icons/svg/2069/2069884.svg'
        ]);

        DB::table('sic_sections')->insert([
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'name' => 'ARTS, ENTERTAINMENT AND RECREATION',
            'code' => 'R',
            'image' => 'https://image.flaticon.com/icons/svg/2139/2139382.svg'
        ]);

        DB::table('sic_sections')->insert([
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'name' => 'OTHER SERVICE ACTIVITIES',
            'code' => 'S',
            'image' => 'https://image.flaticon.com/icons/svg/2055/2055867.svg'
        ]);

        DB::table('sic_sections')->insert([
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'name' => 'ACTIVITIES OF HOUSEHOLDS AS EMPLOYERS; UNDIFFERENTIATED GOODS-AND SERVICES-PRODUCING ACTIVITIES OF HOUSEHOLDS FOR OWN USE',
            'code' => 'T',
            'image' => 'https://image.flaticon.com/icons/svg/1241/1241773.svg'
        ]);

        DB::table('sic_sections')->insert([
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'name' => 'ACTIVITIES OF EXTRATERRITORIAL ORGANISATIONS AND BODIES',
            'code' => 'U',
            'image' => 'https://image.flaticon.com/icons/svg/2086/2086487.svg'
        ]);
    }
}

