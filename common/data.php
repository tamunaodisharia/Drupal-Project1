<?php

// Global variable containing the path to the data file.
$data_file = 'data.json';

/**
 * Get all players from the data file.
 *
 * @return array
 *   An array of players.
 */
function get_players(): array {
    global $data_file;

    $data_json = file_get_contents(dirname(__DIR__) . '/' . $data_file);
    $data_array = json_decode($data_json, true);

    return $data_array['players'];
}