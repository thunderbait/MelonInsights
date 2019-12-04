<?php

use Illuminate\Database\Seeder;

use Carbon\Carbon;

class SicDivisionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Section 01 - AGRICULTURE, FORESTRY AND FISHING
        DB::table('sic_divisions')->insert([
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'name' => 'Crop and animal production, hunting and related service activities',
            'code' => 1,
            'sic_section_id' => 1,
        ]);

        DB::table('sic_divisions')->insert([
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'name' => 'Forestry and logging',
            'code' => 2,
            'sic_section_id' => 1,
        ]);

        DB::table('sic_divisions')->insert([
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'name' => 'Fishing and aquaculture',
            'code' => 3,
            'sic_section_id' => 1,
        ]);

        //Section 02 - MINING AND QUARRYING
        DB::table('sic_divisions')->insert([
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'name' => 'Mining of coal and lignite',
            'code' => 5,
            'sic_section_id' => 2,
        ]);

        DB::table('sic_divisions')->insert([
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'name' => 'Extraction of crude petroleum and natural gas',
            'code' => 6,
            'sic_section_id' => 2,
        ]);

        DB::table('sic_divisions')->insert([
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'name' => 'Mining of metal ores',
            'code' => 7,
            'sic_section_id' => 2,
        ]);

        DB::table('sic_divisions')->insert([
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'name' => 'Other mining and quarrying',
            'code' => 8,
            'sic_section_id' => 2,
        ]);

        DB::table('sic_divisions')->insert([
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'name' => 'Mining support service activities',
            'code' => 9,
            'sic_section_id' => 2,
        ]);

        //Section 03 - MANUFACTURING
        DB::table('sic_divisions')->insert([
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'name' => 'Manufacture of food products',
            'code' => 10,
            'sic_section_id' => 3,
        ]);

        DB::table('sic_divisions')->insert([
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'name' => 'Manufacture of beverages',
            'code' => 11,
            'sic_section_id' => 3,
        ]);

        DB::table('sic_divisions')->insert([
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'name' => 'Manufacture of tobacco products',
            'code' => 12,
            'sic_section_id' => 3,
        ]);

        DB::table('sic_divisions')->insert([
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'name' => 'Manufacture of textiles',
            'code' => 13,
            'sic_section_id' => 3,
        ]);

        DB::table('sic_divisions')->insert([
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'name' => 'Manufacture of wearing apparel',
            'code' => 14,
            'sic_section_id' => 3,
        ]);

        DB::table('sic_divisions')->insert([
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'name' => 'Manufacture of leather and related products',
            'code' => 15,
            'sic_section_id' => 3,
        ]);

        DB::table('sic_divisions')->insert([
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'name' => 'Manufacture of wood and of products of wood and cork, except furniture; manufacture of articles of straw and plaiting materials',
            'code' => 16,
            'sic_section_id' => 3,
        ]);

        DB::table('sic_divisions')->insert([
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'name' => 'Manufacture of paper and paper products',
            'code' => 17,
            'sic_section_id' => 3,
        ]);

        DB::table('sic_divisions')->insert([
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'name' => 'Printing and reproduction of recorded media',
            'code' => 18,
            'sic_section_id' => 3,
        ]);

        DB::table('sic_divisions')->insert([
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'name' => 'Manufacture of coke and refined petroleum products',
            'code' => 19,
            'sic_section_id' => 3,
        ]);

        DB::table('sic_divisions')->insert([
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'name' => 'Manufacture of chemicals and chemical products',
            'code' => 20,
            'sic_section_id' => 3,
        ]);

        DB::table('sic_divisions')->insert([
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'name' => 'Manufacture of basic pharmaceutical products and pharmaceutical preparations',
            'code' => 21,
            'sic_section_id' => 3,
        ]);

        DB::table('sic_divisions')->insert([
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'name' => 'Manufacture of rubber and plastic products',
            'code' => 22,
            'sic_section_id' => 3,
        ]);

        DB::table('sic_divisions')->insert([
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'name' => 'Manufacture of other non-metallic mineral products',
            'code' => 23,
            'sic_section_id' => 3,
        ]);

        DB::table('sic_divisions')->insert([
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'name' => 'Manufacture of basic metals',
            'code' => 24,
            'sic_section_id' => 3,
        ]);

        DB::table('sic_divisions')->insert([
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'name' => 'Manufacture of fabricated metal products, except machinery and equipment',
            'code' => 25,
            'sic_section_id' => 3,
        ]);

        DB::table('sic_divisions')->insert([
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'name' => 'Manufacture of computer, electronic and optical products',
            'code' => 26,
            'sic_section_id' => 3,
        ]);

        DB::table('sic_divisions')->insert([
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'name' => 'Manufacture of electrical equipment',
            'code' => 27,
            'sic_section_id' => 3,
        ]);

        DB::table('sic_divisions')->insert([
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'name' => 'Manufacture of machinery and equipment n.e.c.',
            'code' => 28,
            'sic_section_id' => 3,
        ]);

        DB::table('sic_divisions')->insert([
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'name' => 'Manufacture of motor vehicles, trailers and semi-trailers',
            'code' => 29,
            'sic_section_id' => 3,
        ]);

        DB::table('sic_divisions')->insert([
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'name' => 'Manufacture of other transport equipment',
            'code' => 30,
            'sic_section_id' => 3,
        ]);

        DB::table('sic_divisions')->insert([
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'name' => 'Manufacture of furniture',
            'code' => 31,
            'sic_section_id' => 3,
        ]);

        DB::table('sic_divisions')->insert([
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'name' => 'Other manufacturing',
            'code' => 32,
            'sic_section_id' => 3,
        ]);

        DB::table('sic_divisions')->insert([
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'name' => 'Repair and installation of machinery and equipment',
            'code' => 33,
            'sic_section_id' => 3,
        ]);


        //Section 04 - ELECTRICITY, GAS, STEAM AND AIR CONDITIONING SUPPLY
        DB::table('sic_divisions')->insert([
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'name' => 'Electricity, gas, steam and air conditioning supply',
            'code' => 35,
            'sic_section_id' => 4,
        ]);

        //Section 05 - WATER SUPPLY; SEWERAGE, WASTE MANAGEMENT AND REMEDIATION ACTIVITIES
        DB::table('sic_divisions')->insert([
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'name' => 'Water collection, treatment and supply',
            'code' => 36,
            'sic_section_id' => 5,
        ]);

        DB::table('sic_divisions')->insert([
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'name' => 'Sewerage',
            'code' => 37,
            'sic_section_id' => 5,
        ]);

        DB::table('sic_divisions')->insert([
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'name' => 'Waste collection, treatment and disposal activities; materials recovery',
            'code' => 38,
            'sic_section_id' => 5,
        ]);

        DB::table('sic_divisions')->insert([
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'name' => 'Remediation activities and other waste management services.',
            'code' => 39,
            'sic_section_id' => 5,
        ]);


        //Section 06 - CONSTRUCTION
        DB::table('sic_divisions')->insert([
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'name' => 'Construction of buildings',
            'code' => 41,
            'sic_section_id' => 6,
        ]);

        DB::table('sic_divisions')->insert([
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'name' => 'Civil engineering',
            'code' => 42,
            'sic_section_id' => 6,
        ]);

        DB::table('sic_divisions')->insert([
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'name' => 'Specialised construction activities',
            'code' => 43,
            'sic_section_id' => 6,
        ]);


        //Section 07 - WHOLESALE AND RETAIL TRADE; REPAIR OF MOTOR VEHICLES AND MOTORCYCLES
        DB::table('sic_divisions')->insert([
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'name' => 'Wholesale and retail trade and repair of motor vehicles and motorcycles',
            'code' => 45,
            'sic_section_id' => 7,
        ]);

        DB::table('sic_divisions')->insert([
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'name' => 'Wholesale trade, except of motor vehicles and motorcycles',
            'code' => 46,
            'sic_section_id' => 7,
        ]);

        DB::table('sic_divisions')->insert([
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'name' => 'Retail trade, except of motor vehicles and motorcycles',
            'code' => 47,
            'sic_section_id' => 7,
        ]);



        //Section 08 - TRANSPORTATION AND STORAGE
        DB::table('sic_divisions')->insert([
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'name' => 'Land transport and transport via pipelines',
            'code' => 49,
            'sic_section_id' => 8,
        ]);

        DB::table('sic_divisions')->insert([
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'name' => 'Water transport',
            'code' => 50,
            'sic_section_id' => 8,
        ]);

        DB::table('sic_divisions')->insert([
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'name' => 'Air transport',
            'code' => 51,
            'sic_section_id' => 8,
        ]);

        DB::table('sic_divisions')->insert([
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'name' => 'Warehousing and support activities for transportation',
            'code' => 52,
            'sic_section_id' => 8,
        ]);

        DB::table('sic_divisions')->insert([
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'name' => 'Postal and courier activities',
            'code' => 53,
            'sic_section_id' => 8,
        ]);


        //Section 09 - ACCOMMODATION AND FOOD SERVICE ACTIVITIES
        DB::table('sic_divisions')->insert([
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'name' => 'Accommodation',
            'code' => 55,
            'sic_section_id' => 9,
        ]);

        DB::table('sic_divisions')->insert([
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'name' => 'Food and beverage service activities',
            'code' => 56,
            'sic_section_id' => 9,
        ]);



        //Section 10 - INFORMATION AND COMMUNICATION
        DB::table('sic_divisions')->insert([
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'name' => 'Publishing activities',
            'code' => 58,
            'sic_section_id' => 10,
        ]);

        DB::table('sic_divisions')->insert([
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'name' => 'Motion picture, video and television programme production, sound recording and music publishing activities',
            'code' => 59,
            'sic_section_id' => 10,
        ]);

        DB::table('sic_divisions')->insert([
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'name' => 'Programming and broadcasting activities',
            'code' => 60,
            'sic_section_id' => 10,
        ]);

        DB::table('sic_divisions')->insert([
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'name' => 'Telecommunications',
            'code' => 61,
            'sic_section_id' => 10,
        ]);

        DB::table('sic_divisions')->insert([
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'name' => 'Computer programming, consultancy and related activities',
            'code' => 62,
            'sic_section_id' => 10,
        ]);

        DB::table('sic_divisions')->insert([
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'name' => 'Information service activities',
            'code' => 63,
            'sic_section_id' => 10,
        ]);



        //Section 11 - FINANCIAL AND INSURANCE ACTIVITIES
        DB::table('sic_divisions')->insert([
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'name' => 'Financial service activities, except insurance and pension funding',
            'code' => 64,
            'sic_section_id' => 11,
        ]);

        DB::table('sic_divisions')->insert([
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'name' => 'Insurance, reinsurance and pension funding, except compulsory social security',
            'code' => 65,
            'sic_section_id' => 11,
        ]);

        DB::table('sic_divisions')->insert([
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'name' => 'Activities auxiliary to financial services and insurance activities',
            'code' => 66,
            'sic_section_id' => 11,
        ]);


        //Section 12 - REAL ESTATE ACTIVITIES
        DB::table('sic_divisions')->insert([
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'name' => 'Real estate activities',
            'code' => 68,
            'sic_section_id' => 12,
        ]);


        //Section 13 - PROFESSIONAL, SCIENTIFIC AND TECHNICAL ACTIVITIES
        DB::table('sic_divisions')->insert([
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'name' => 'Legal and accounting activities',
            'code' => 69,
            'sic_section_id' => 13,
        ]);

        DB::table('sic_divisions')->insert([
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'name' => 'Activities of head offices; management consultancy activities',
            'code' => 70,
            'sic_section_id' => 13,
        ]);

        DB::table('sic_divisions')->insert([
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'name' => 'Architectural and engineering activities; technical testing and analysis',
            'code' => 71,
            'sic_section_id' => 13,
        ]);

        DB::table('sic_divisions')->insert([
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'name' => 'Scientific research and development',
            'code' => 72,
            'sic_section_id' => 13,
        ]);

        DB::table('sic_divisions')->insert([
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'name' => 'Advertising and market research',
            'code' => 73,
            'sic_section_id' => 13,
        ]);

        DB::table('sic_divisions')->insert([
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'name' => 'Other professional, scientific and technical activities',
            'code' => 74,
            'sic_section_id' => 13,
        ]);

        DB::table('sic_divisions')->insert([
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'name' => 'Veterinary activities',
            'code' => 75,
            'sic_section_id' => 13,
        ]);


        //Section 14 - ADMINISTRATIVE AND SUPPORT SERVICE ACTIVITIES
        DB::table('sic_divisions')->insert([
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'name' => 'Rental and leasing activities',
            'code' => 77,
            'sic_section_id' => 14,
        ]);

        DB::table('sic_divisions')->insert([
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'name' => 'Employment activities',
            'code' => 78,
            'sic_section_id' => 14,
        ]);

        DB::table('sic_divisions')->insert([
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'name' => 'Travel agency, tour operator and other reservation service and related activities',
            'code' => 79,
            'sic_section_id' => 14,
        ]);

        DB::table('sic_divisions')->insert([
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'name' => 'Security and investigation activities',
            'code' => 80,
            'sic_section_id' => 14,
        ]);

        DB::table('sic_divisions')->insert([
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'name' => 'Services to buildings and landscape activities',
            'code' => 81,
            'sic_section_id' => 14,
        ]);

        DB::table('sic_divisions')->insert([
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'name' => 'Office administrative, office support and other business support activities',
            'code' => 82,
            'sic_section_id' => 14,
        ]);



        //Section 15 - PUBLIC ADMINISTRATION AND DEFENCE; COMPULSORY SOCIAL SECURITY
        DB::table('sic_divisions')->insert([
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'name' => 'Public administration and defence; compulsory social security',
            'code' => 84,
            'sic_section_id' => 15,
        ]);




        //Section 16 - EDUCATION
        DB::table('sic_divisions')->insert([
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'name' => 'Education',
            'code' => 85,
            'sic_section_id' => 16,
        ]);


        //Section 17 - HUMAN HEALTH AND SOCIAL WORK ACTIVITIES
        DB::table('sic_divisions')->insert([
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'name' => 'Human health activities',
            'code' => 86,
            'sic_section_id' => 17,
        ]);

        DB::table('sic_divisions')->insert([
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'name' => 'Residential care activities',
            'code' => 87,
            'sic_section_id' => 17,
        ]);

        DB::table('sic_divisions')->insert([
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'name' => 'Social work activities without accommodation',
            'code' => 88,
            'sic_section_id' => 17,
        ]);


        //Section 18 - ARTS, ENTERTAINMENT AND RECREATION
        DB::table('sic_divisions')->insert([
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'name' => 'Creative, arts and entertainment activities',
            'code' => 90,
            'sic_section_id' => 18,
        ]);

        DB::table('sic_divisions')->insert([
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'name' => 'Libraries, archives, museums and other cultural activities',
            'code' => 91,
            'sic_section_id' => 18,
        ]);

        DB::table('sic_divisions')->insert([
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'name' => 'Gambling and betting activities',
            'code' => 92,
            'sic_section_id' => 18,
        ]);

        DB::table('sic_divisions')->insert([
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'name' => 'Sports activities and amusement and recreation activities',
            'code' => 93,
            'sic_section_id' => 18,
        ]);


        //Section 19 - OTHER SERVICE ACTIVITIES
        DB::table('sic_divisions')->insert([
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'name' => 'Activities of membership organisations',
            'code' => 94,
            'sic_section_id' => 19,
        ]);

        DB::table('sic_divisions')->insert([
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'name' => 'Repair of computers and personal and household goods',
            'code' => 95,
            'sic_section_id' => 19,
        ]);

        DB::table('sic_divisions')->insert([
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'name' => 'Other personal service activities',
            'code' => 96,
            'sic_section_id' => 19,
        ]);


        //Section 20 - ACTIVITIES OF HOUSEHOLDS AS EMPLOYERS; UNDIFFERENTIATED GOODS-AND SERVICES-PRODUCING ACTIVITIES OF HOUSEHOLDS FOR OWN USE
        DB::table('sic_divisions')->insert([
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'name' => 'Activities of households as employers of domestic personnel',
            'code' => 97,
            'sic_section_id' => 20,
        ]);

        DB::table('sic_divisions')->insert([
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'name' => 'Undifferentiated goods- and services-producing activities of private households for own use',
            'code' => 98,
            'sic_section_id' => 20,
        ]);


        //Section 21 - ACTIVITIES OF EXTRATERRITORIAL ORGANISATIONS AND BODIES
        DB::table('sic_divisions')->insert([
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'name' => 'Activities of extraterritorial organisations and bodies',
            'code' => 99,
            'sic_section_id' => 21,
        ]);
    }
}
