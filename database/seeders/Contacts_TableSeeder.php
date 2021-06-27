<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use App\Models\Contact;
use Faker\Factory as Faker;

class Contacts_TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $addata=Faker::create();
        for($i=0;$i<12;$i++){
        Contact::create([
            'first_name'=>$addata->firstName,
            'second_name'=>$addata->firstName,
            'first_lastname'=>$addata->lastName,
            'second_lastname'=>$addata->lastName,
            'email'=>$addata->email,
            'mobile'=>$addata->phoneNumber,
            'message'=>$addata->text($maxNbChars = 80)
        ]);
        }
    }
}
