<?php

namespace App\Http\Controllers;

class PersonController extends Controller
{
    public function __invoke()
    {
        $persons = [
          [
              'id' => 1,
              'name' => 'Ivan',
              'age' => 19,
              'job' => 'nurse'
          ],
            [
                'id' => 2,
                'name' => 'Petr',
                'age' => 29,
                'job' => 'mechanik'
            ],
            [
                'id' => 3,
                'name' => 'Masha',
                'age' => 39,
                'job' => 'driver'
            ],
            [
                'id' => 4,
                'name' => 'Oleg',
                'age' => 49,
                'job' => 'manager'
            ],
        ];

        return $persons;
    }
}
