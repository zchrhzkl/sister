<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class Dummy extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function run()
     {
         DB::table('users')->insert([
          'userID' => 0,
          'userCreatedAt' => Carbon::now()->format('Y-m-d H:i:s'),
         	'accessLevel' => 1,
         	'userPosition' => 'Developer',
         	'username' => 'zchrhzkl',
          'fullname' => 'Zachariah Ezekial',
          'email' => 'ezekiels.acc@gmail.com',
          // 'email_verified_at' => '',
          'password' => 'test'
         ]);

         DB::table('disposition')->insert([
         	'mailID' => 0,
          'userID' => 0,
         	'mailCreatedAt' => Carbon::now()->format('Y-m-d H:i:s'),
         	'mailDate' => '2020-02-20 23:59:00',
         	'mailClassification' => 'Biasa',
          'mailDegree' => 'Biasa'
         ]);

         DB::table('incoming')->insert([
         	'incomingID' => 'Zachariah Ezekial',
         	'mailID' => 1,
         	'senderIn' => 'Zachariah Ezekial',
         	'recipientIn' => 'KASUBBAG BEKLAT',
          'mailNumber' => '00001',
          'mailContent' => 'RAKERNIS',
          'mailAttch' => 'test',
          'mailStatus' => 'Lakasanakan',
          'archiveBool' => 'True',
          'printBool' => 'null'
         ]);
     }
}
