<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class Places {

    public function getPlaceData($reference)
    {
        $url = 'https://maps.googleapis.com/maps/api/place/details/json?reference='.$reference. '&sensor=true&key=AIzaSyCsjrmFW0bjXRJfRaLZdukRmkxTKUxzT3I';
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_URL, $url);
        $result = curl_exec($ch);
        curl_close($ch);

        return json_decode($result, true);
    }

    public function search($query)
    {
        $url = 'https://maps.googleapis.com/maps/api/place/textsearch/json?query='.$query.'&sensor=true&key=AIzaSyCsjrmFW0bjXRJfRaLZdukRmkxTKUxzT3I';
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_URL, $url);
        $result = curl_exec($ch);
        curl_close($ch);

        return json_decode($result, true);
    }
}

/* End of file Places.php */
