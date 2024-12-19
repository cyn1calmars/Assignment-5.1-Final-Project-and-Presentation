<?php
    // this 2-d array holds sample data
    $arrData = [
        ['name' => 'Witches', 'value' => 352],
        ['name' => 'Fairies', 'value' => 153],
        ['name' => 'Vampires', 'value' => 157],
        ['name' => 'Werewolves', 'value' => 64],
        ['name' => 'Ogres', 'value' => 120],
        ['name' => 'Goblins', 'value' => 32],
        ['name' => 'Other', 'value' => 300],
    ];

    // set the header to JSON
    header(header: 'Content-Type: application/json');

    // return the 2-d array in JSON format
    echo json_encode($arrData);
?>