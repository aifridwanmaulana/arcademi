<?php 

function biodata($nama,$age)
{      

        $biodata = [];
        $biodata["nama"] = $nama;
        $biodata["age"] = $age;
        $biodata["address"] = "jl.labuhan haji rt 02/04 jatiasih bekasi";
        $biodata["hobbies"] = array("hiking");
        $biodata["is_married "] = true;
        $biodata["list_school"] = (object) array(
                                        ["name"=>"MI Nurul Islam","year_in" => "2004","year_out" => "2009"],
                                        ["name"=>"SMPN 23 Bekasi","year_in" => "2009","year_out" => "2012"],
                                        ["name"=>"SMKN 4 Bekasi","year_in" => "2012","year_out" => "2015"],
                                        ["name"=>"STMIK MERCUSUAR","year_in" => "2015","year_out" => "2019"]
                                         );
        $biodata["skill"] = (object) array(
                                        ["skill_name "=>"futsal","level" => "expert"],

            );;
        $biodata["interest_in_coding"] = true;


        return json_encode($biodata);
}


echo biodata("Arif Ridwan Maulana","22");
?>