<?php

use Illuminate\Database\Seeder;

class ActivitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Activitie::truncate();

        $dates = [

            [
                'date' => "2019-05-22"
            ],
            [
                'date' => "2019-12-30",
            ],

            [
                'date' => "2020-01-07",
            ],

            [
                'date' => "2020-02-05",
            ],

            [
                'date' => "2020-03-12",
            ],
            [
                'date' => "2020-04-09",
            ],
            [
                'date' => "2020-05-08",
            ],
            [
                'date' => "2020-06-20",
            ],
            [
                'date' => "2020-07-26",
            ],
            [
                'date' => "2020-08-12",
            ],
            [
                'date' => "2020-09-13",
            ],
            [
                'date' => "2020-10-08",
            ],
            [
                'date' => "2020-11-27",
            ],
            [
                'date' => "2021-01-18",
            ],
            [
                'date' => "2021-01-25",
            ],

        ];

        foreach ($dates as $date_template) {
            $activity = new \App\Activitie();
            $activity->title = "Wedstrijdzwemmen";
            $activity->location = "Wedstrijdbad";
            $activity->description = "We gaan wedstrijdzwemmen, want dat is goed voor de conditie.";
            $activity->date = $date_template["date"];
            $activity->start_time = "19:00";
            $activity->end_time = "20:00";
            $activity->save();
        }
    }
}
