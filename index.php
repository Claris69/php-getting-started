<?php
// //your code goes here
// $myName= "Ian Claris ";
// echo $myName;

// //Arrays
// $students= array("sheila","caleb","junior","virginia","emmanuel" ) ;
// echo $students [2];
// echo count($students);

$programMarks= array("assignment"=>25,"CAT"=>20,
                                     "Attendance"=>8,
                                     "Projects"=>45
                    );
echo "CAT" .$programMarks["CAT"];

//Multitdimentional Arrays
$webTechnilogies=array(
    "frontend"=>array("HTML","CSS","JS","Bootstrap"),
    "backend"=>array("PHP","JS","Python","Java"),
    "databases" =>array ("mySQL","postgreSQL","MongoDB","firebase")
);
echo $webTechnilogies["frontend"][2]; //js will our output
echo $webTechnilogies["backend"][0];
echo $webTechnilogies["databases"][2];
?>