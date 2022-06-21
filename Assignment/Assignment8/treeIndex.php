<?php
$gcesstaffs=[
    "non-academics" => [
        [
            "name"=> "Ram Bahadur Thapa",
            "address"=> "Lamachaur",
            "phone"=>[ "9876509876","9812345668"]
        ],
        [
            "name"=>"Ram Krishna Mandal" ,
            "address"=> "Birauta" ,
            "phone"=>["9811111111","9843210000"]
        ],
    ],
    "academics" => [
        [
            "name"=> "Rajendra Yadav" ,
            "address"=> "Bagar",
            "phone"=>["9855555555","9866666666"],
            "subjects"=> ["Physics", "Chemistry"]
        ],
        [
            "name"=> "Krishna Bahadur Thapa" ,
            "address"=>"Simpani" ,
            "phone"=>[ "9899999999","9856666666","986000000"],
            "subjects"=> [ "Logic Circuit","Micro Processor"]
        ],
        [
            "name"=> "Dhan Bahadur Thapa" ,
            "address"=>"Matepani" ,
            "phone"=>["9846161616","9856565656" ],
            "subjects"=> ["MathsI","MathsII" ]
        ]
    ]
];
echo"<table border='1' cellspacing='0' width=80% height=60% text>";
echo'<tr>
    <th>Job Type</th>
    <th>Name</th>
    <th>Address</th>
    <th>Phone</th>
    <th>Subject</th></tr>';
    foreach($gcesstaffs as $type => $details){
        foreach($details as $info => $moreinfo ){
          echo "<tr>";
          echo "<td>";
          echo "&nbsp&nbsp&nbsp&nbsp";
          echo ucfirst($type);
          echo"</td>";
          echo "<td>&nbsp&nbsp&nbsp&nbsp $moreinfo[name]</td>";
          echo "<td>&nbsp&nbsp&nbsp&nbsp$moreinfo[address]</td>";
          echo "<td>";
        foreach ($moreinfo["phone"] as $phone){
          echo "&nbsp&nbsp&nbsp&nbsp $phone  ";
        }
        echo "</td>";
        echo "<td>";
        if($type=="academics"){
          foreach ($moreinfo["subjects"] as $subject){
            echo "&nbsp&nbsp&nbsp&nbsp $subject  ";
          }
        }
        echo "</td>";
        echo "</tr>";
      }
    }
echo"</table>";
?>