<?php

namespace App\ViewModels;


class CarReport
{
    public static function getReportData(): array
    {
        return [
            'Exterior' => (new CarReport)->getExterior(),
        ];
    }


    public function getExterior(): array
    {
        return [
            'Body Type'                       =>
                [
                    'radio' =>
                        [
                            'Sedan',
                            'Coupe',
                            'Convertible',
                            'Other',
                        ],
                    'input' =>
                        [
                            'Number of Doors',
                            'Number of Passengers',
                            'Number of Cylinders',
                        ],
                ],
            'Condition of Paint'              =>
                [
                    'checkbox' =>
                        [
                            'Excellent',
                            'Very Good',
                            'Good',
                            'Fair',
                            'Poor',
                            'Chipped',
                            'Scratched',
                            'Cracked',
                            'Dull',
                            'Orange Peel',
                            'Poor Preparation',
                            'Polishing Req',
                            'Part Re-spray Req',
                            'Full Re-spray Req',
                        ],
                    'notice'   =>
                        [
                            'Notice',
                        ],
                ],
            'Alignment of Body Panels (gaps)' =>
                [
                    'radio' =>
                        [
                            'Regular',
                            'Irregular',
                        ],
                ],
            'Upper Body Dents/Dings/Cracks'   =>
                [
                    'checkbox' =>
                        [
                            'F/DS Fender',
                            'F/DS Door',
                            'DS Rocker (Sill)',
                            'Hood',
                            'F/PS Fender',
                            'F/PS Door',
                            'PS Rocker (Sill)',
                            'Engine Bay',
                            'R/DS Quarter',
                            'R/DS Door',
                            'F Valence',
                            'Trunk',
                            'R/PS Quarter',
                            'R/PS Door',
                            'R Valence',
                            'Roof',
                        ],
                    'notice'   =>
                        [
                            'Notice',
                        ],

                ],
            'Collision Damage'                =>
                [
                    'label'  => [
                        'text' => 'Is there any obvious collision damage?'
                    ],
                    'radio'  =>
                        [
                            'Yes',
                            'No',
                            'Not',
                            'Applicable',
                            'See',
                            'Notes',
                        ],
                    'notice' =>
                        [
                            'Notice',
                        ],
                ],
        ];
    }
}