<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Event;
use App\Functions\Helpers as Help;


class EventsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $path = __DIR__ . "/events.csv";
        $data = Help::getCsvData($path);
    

        foreach ($data as $index => $event) {
            //dd($data);
            if ($index !== 0) {

                $new_event = new Event();
                $new_event->name = $event[0];
                $new_event->city = $event[1];
                $new_event->address = $event[2];
                $new_event->ticket_price = $event[3];
                $new_event->date_start_event = $event[4];
                $new_event->date_end_event = $event[5];
                $new_event->open_reservation = $event[6];
                $new_event->location_url = $event[7];
                $new_event->overview = $event[8];
                $new_event->save();
           }
       }
    }
}


