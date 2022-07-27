<?php

namespace App\ViewModels;


class CarReport
{
    public static function getReportData(): array
    {
        return [
            'Exterior'    => (new CarReport)->getExterior(),
            'TRUNK / BED' => (new CarReport)->getTrunkBed(),
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
                    'notes'    =>
                        [
                            'Notes',
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
                    'notes'    =>
                        [
                            'Notes',
                        ],

                ],
            'Collision Damage'                =>
                [
                    'label' => [
                        'text' => 'Is there any obvious collision damage?',
                    ],
                    'radio' =>
                        [
                            'Yes',
                            'No',
                            'Not',
                            'Applicable',
                            'See',
                            'Notes',
                        ],
                    'notes' =>
                        [
                            'Notes',
                        ],
                ],
        ];
    }

    public function getTrunkBed(): array
    {
        return [
            'Is there a jack?' =>
                [
                    'radio' =>
                        [
                            'Yes',
                            'No',
                            'Not',
                            'Applicable',
                            'See Notes',
                        ],
                    'notes' =>
                        [
                            'Notes',
                        ],
                ],

            'Is it the correct one for the car?' =>
                [
                    'radio' =>
                        [
                            'Yes',
                            'No',
                            'Not',
                            'Applicable',
                            'See Notes',
                        ],
                    'notes' =>
                        [
                            'Notes',
                        ],
                ],


            'Is there a lug wrench?' =>
                [
                    'radio' =>
                        [
                            'Yes',
                            'No',
                            'Not',
                            'Applicable',
                            'See Notes',
                        ],
                    'notes' =>
                        [
                            'Notes',
                        ],
                ],
        ];
    }
}