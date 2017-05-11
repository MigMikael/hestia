<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'student_id' => '07560550',
                'name' => 'ชนะไชย พุทธรักษา',
                'email' => 'Chanachai_mig@hotmail.com',
                'password' => '$2y$10$nUO5tseXHiAe/tYC5JqQ7etN7.rkIXVPLt9T2RM2WMVjAS7mK8wv2',
                'mac_address' => 'bc:6e:64:50:1c:ee',
                'os' => 'android',
                'remember_token' => 'ADB4hGkuNm7GPKOSvSX7Mtcr7NapnJyIX1czBFPtWQEVoeW0MVFMKGOgnD8V',
                'created_at' => '2017-05-07 19:26:25',
                'updated_at' => '2017-05-07 19:26:25',
            ),
            1 => 
            array (
                'id' => 2,
                'student_id' => '07570682',
                'name' => 'ศิริรัตน์',
                'email' => 'kmsuju@hotmail.com',
                'password' => '$2y$10$p8DSSEpZrOrrnl6mWUJmguu4CoVsblR5rK6jASLwWQlEKnclNaT/O',
                'mac_address' => '34:E2:FD:78:7C:33',
                'os' => 'ios',
                'remember_token' => NULL,
                'created_at' => '2017-05-08 11:03:15',
                'updated_at' => '2017-05-08 11:03:15',
            ),
            2 => 
            array (
                'id' => 3,
                'student_id' => '07560595',
                'name' => 'วัลลภ โอภาสะคุณ',
                'email' => 'champbassist159@gmail.com',
                'password' => '$2y$10$y0iZKvyd7YG0cxAbTww3VuyXxZeZZTdWKlUoML.dGxkTH7KyAnWG2',
                'mac_address' => '68:3e:34:11:ca:8f',
                'os' => 'android',
                'remember_token' => NULL,
                'created_at' => '2017-05-08 11:03:19',
                'updated_at' => '2017-05-08 11:03:19',
            ),
            3 => 
            array (
                'id' => 4,
                'student_id' => '07570678',
                'name' => 'ลีลาวดี อุไพศิลป์สถาพร',
                'email' => 'sanookleelawadee@outlook.co.th',
                'password' => '$2y$10$WC0bSSS6KC3MffacphQAiecod2kVl5Gjqp9q43l/b/1TiVRVVPajO',
                'mac_address' => '54:72:4F:68:A8:D6',
                'os' => 'ios',
                'remember_token' => NULL,
                'created_at' => '2017-05-08 11:03:37',
                'updated_at' => '2017-05-08 11:03:37',
            ),
            4 => 
            array (
                'id' => 5,
                'student_id' => '07580453',
                'name' => 'พัชรภรณ์ พานเงิน',
                'email' => 'pompuenn@outlook.com',
                'password' => '$2y$10$x0GtWYx2VqL2fi7P537e4eu4G5y4aGCUQGXR3ybitOxDxxbEs1zkm',
                'mac_address' => 'BC:92:6B:10:25:EC',
                'os' => 'ios',
                'remember_token' => NULL,
                'created_at' => '2017-05-08 11:04:56',
                'updated_at' => '2017-05-08 11:04:56',
            ),
            5 => 
            array (
                'id' => 6,
                'student_id' => '07580458',
                'name' => 'Yodsawat Worakeartchaitana',
                'email' => 'worakeartchai_y@silpakorn.edu',
                'password' => '$2y$10$ajNpH8K7w4Hf3X/MKZT1nOOtUBQvpIwSoTin8KjbOjlGT6apQz5XK',
                'mac_address' => '70:70:0D:A1:B5:67',
                'os' => 'ios',
                'remember_token' => NULL,
                'created_at' => '2017-05-08 11:05:17',
                'updated_at' => '2017-05-08 11:05:17',
            ),
            6 => 
            array (
                'id' => 7,
                'student_id' => '07580449',
                'name' => 'ปุณณภา บุณสนอง',
                'email' => 'bsn.male@live.com',
                'password' => '$2y$10$avwBoIqLFroX426oirbEgu5lQ9ZIrBWgjk0zsQDgUutX9tI6UMNtS',
                'mac_address' => 'CC:29:F5:19:6C:61',
                'os' => 'ios',
                'remember_token' => NULL,
                'created_at' => '2017-05-08 11:05:32',
                'updated_at' => '2017-05-08 11:05:32',
            ),
            7 => 
            array (
                'id' => 8,
                'student_id' => '07580441',
                'name' => 'นภาภรณ์ ก้อนทอง',
                'email' => 'vanilla_famui@hotmail.com',
                'password' => '$2y$10$A0fgy8n9Lp.gOyENsjK01eYirOEGdB7RwuQGPCakuk22Ah1fAl9V.',
                'mac_address' => 'f8:32:e4:3b:39:b1',
                'os' => 'android',
                'remember_token' => NULL,
                'created_at' => '2017-05-08 11:06:07',
                'updated_at' => '2017-05-08 11:06:07',
            ),
            8 => 
            array (
                'id' => 9,
                'student_id' => '07570633',
                'name' => 'Yanee',
                'email' => 'Yaneefuno@gmail.com',
                'password' => '$2y$10$kwX/emr12t/Vuwqtlr5CJOvAaNP4.IU7hTNkzOt9hnTjPlku9kMB6',
                'mac_address' => '00:CD:FE:92:26:DC',
                'os' => 'ios',
                'remember_token' => '8UG0vzCXstouUe6G8MEmzGsQfe9ISOr5p1c0EInUSshHP3XXV5kyzRSMbBgA',
                'created_at' => '2017-05-08 11:07:42',
                'updated_at' => '2017-05-08 11:07:42',
            ),
            9 => 
            array (
                'id' => 10,
                'student_id' => '07570676',
                'name' => 'รุจิรัตน์ จันทร์สุขเจริญจินดา',
                'email' => 'ruchirat_r@hotmail.com',
                'password' => '$2y$10$3kWuN.i9w.ZXBlXytBSCDOBShHHIE86AUyEyB5vdjQ4yB9XnbY4CK',
                'mac_address' => 'BC:6C:21:C8:CB:7C',
                'os' => 'ios',
                'remember_token' => NULL,
                'created_at' => '2017-05-08 11:08:00',
                'updated_at' => '2017-05-08 11:08:00',
            ),
            10 => 
            array (
                'id' => 11,
                'student_id' => '07580432',
                'name' => 'Thanagit  Thongkham',
                'email' => 'thanagit.tk@gmail.com',
                'password' => '$2y$10$IqWJ3Rd0DQm3NA0H/VGC2ewARlgnsAuGYPXmvsTRiaeqhw./d5xlS',
                'mac_address' => 'dc:1a:c5:f9:54:3d',
                'os' => 'android',
                'remember_token' => NULL,
                'created_at' => '2017-05-08 11:08:05',
                'updated_at' => '2017-05-08 11:08:05',
            ),
            11 => 
            array (
                'id' => 12,
                'student_id' => '07580462',
                'name' => 'Lalita Panitpongsri',
                'email' => 'yuriyuripps@gmail.com',
                'password' => '$2y$10$fAVgsxuBdPLXQoloTWF4VuEtsNi8lSQ9jv/xYDGKncKyLfvyLHQWe',
                'mac_address' => '10:D3:8A:C9:68:52',
                'os' => 'android',
                'remember_token' => NULL,
                'created_at' => '2017-05-08 11:08:09',
                'updated_at' => '2017-05-08 11:08:09',
            ),
            12 => 
            array (
                'id' => 13,
                'student_id' => '07570686',
                'name' => 'สัณหณัฐ สุขสมวงค์',
                'email' => 'lizm_mii@hotmail.co.th',
                'password' => '$2y$10$mkxUgIe9gOa8sSJZSeTQuu6Astoh/LDyPXNBxbP3xHHHldWhXIsC2',
                'mac_address' => '84:38:38:66:8D:AA',
                'os' => 'android',
                'remember_token' => NULL,
                'created_at' => '2017-05-08 11:08:22',
                'updated_at' => '2017-05-08 11:08:22',
            ),
            13 => 
            array (
                'id' => 14,
                'student_id' => '07580412',
                'name' => 'Kieatanun Jitwiriyanon',
                'email' => 'nun555nun@gmail.com',
                'password' => '$2y$10$OgrI0GW87cgfHo61kC.03Ok5MRAZ.1Te9/2gh/Ap.uI7K/7O48Gxm',
                'mac_address' => 'd4:0b:1a:89:57:83',
                'os' => 'android',
                'remember_token' => NULL,
                'created_at' => '2017-05-08 11:08:38',
                'updated_at' => '2017-05-08 11:08:38',
            ),
            14 => 
            array (
                'id' => 15,
                'student_id' => '07570643',
                'name' => 'ธนัญญา  จิตอ่ำ',
                'email' => 'tananya_1996@hotmail.com',
                'password' => '$2y$10$8g2btOvddr671jBPqbSCOuKqZuvkIYBMMrEVrhndbJD.3J1TphcB.',
                'mac_address' => '00:5A:13:B5:56:87',
                'os' => 'android',
                'remember_token' => NULL,
                'created_at' => '2017-05-08 11:10:05',
                'updated_at' => '2017-05-08 11:10:05',
            ),
            15 => 
            array (
                'id' => 16,
                'student_id' => '07580404',
                'name' => 'Kanokphon Setsitthichoke',
                'email' => 'micky_milkka@hotmail.com',
                'password' => '$2y$10$BSFTGgcMK0wbK7dXK/CRx.JzGTjK07cXgaBezuAS844ywmYY8g63S',
                'mac_address' => 'B0:47:BF:0A:C2:5A',
                'os' => 'android',
                'remember_token' => NULL,
                'created_at' => '2017-05-08 11:10:36',
                'updated_at' => '2017-05-08 11:10:36',
            ),
        ));
        
        
    }
}