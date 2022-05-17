<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LatihanJson extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function latihansatu()
    {
        return response()->json([
            "name" => "Dimas Aji Setiawan",
            "url" => "https://www.google.com",
            "rank" => 1,
            "socialmedia" => [
                "facebook" => "Dimas Aji Setiawan",
                "twitter" => "-",
                "instagram" => "dimas.ajisetyawan",
                "youtube" => "-",
                "github" => "dimasajisetiawan"
            ]
        ]);
    }

    public function latihandua()
    {
        return response()->json([
            "first_name"=>"dimas",
            "last_name" => "setiawan",
            "location" => "Yogyakarta",
            "online" => true,
            "followers" => 987
        ]);
    }

    public function latihantiga()
    {

      $test = [["description"=>"work","URL"=>"https://www.digitalocean.com/"],["description"=>"tutorials","URL"=>"https://www.digitalocean.com/community/tutorials"]];
      $test2 = [["description"=>"twitter","link"=>"https://twitter.com/digitalocean"],
      ["description"=>"facebook","URL"=>"https://www.facebook.com/DigitalOceanCloudHosting"]
      ,["description"=>"github","URL"=>"https://github.com/digitalocean"]];



        $arr_first = array(
            "first_name" => "Sammy",
            "last_name" => "Shark",
            "location" => "Ocean",
        );
        $arr_sosmed = array(
            "description" => ["twitter"],["facebook"],["github"],
            "link" => ["https://twitter.com/digitalocean"],["https://www.facebook.com/DigitalOceanCloudHosting"],["https://github.com/digitalocean"]
        );
    //    foreach ($arrtest as $keyweb => $valueweb) {
    //        $arr_first["website"][] = $arrtest;
    //    }
      $arr_first["website"]=$test;
      $arr_first["social_media"]=$test2;

       return response()->json($arr_first);


    }
}
