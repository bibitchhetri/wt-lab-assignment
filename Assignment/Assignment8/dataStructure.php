<?php
require './tree.php';
$gcesStaffs =
[

    [
        'name' => 'Abisheek',
        'address' => 'Birauta',
        'phoneno' => [ '9811111111', '9822222222' ],
        'subject' => [ 'PST', 'MFCS', 'DSA' ]
    ],
    [
        'name' => 'Janam',
        'address' => 'Kunwar Tole',
        'phoneno' => [ '9833333333', '9844444444' ],
        'subject' => [ 'C', 'C++', 'Java' ]
    ],

    [
        'name' => 'Rahul',
        'address' => 'Malepatan',
        'phoneno' => [ '9855555555', '9866666666' ]
    ],
    [
        'name' => 'Sudip',
        'address' => 'Chauthe',
        'phoneno' => [ '9877777777', '9888888888' ]
    ]

];

echo treeOut( $gcesStaffs );
