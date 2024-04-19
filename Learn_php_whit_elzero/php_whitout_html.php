<?php 

// how to print in php

echo "hello echo";
echo "</br>";
print "hello print";
//  ; est obligatoir
// quand vout ecrire une balise dans un echo il envoi direct ou html
echo "</br>";
// Il n'y a pas de problème pour écrire en majuscules.
// ex :
echo "helloo world";

/* short tag for <?php ?>  <?= >*/
/* if youve just php file for good practice dont write ?> end balise */
// ------------type of comment --------------
// Single ligne Comment

#single ligne comment 

/* multipe comment 
ligne1 ligne 2
*/

//====================================== Video number #06=============================================
/* 
=======Data types==========
___________________________
Boolean
integer
float or double
string
array
others type
-----to get type of varible or data----
gettype()
*/
// creation table :
/*
Methode 1 = array("zak"=>"zakaria","kha"=>"khalid","a"=>"anas");
Methode 2 = array("zakaria","khalid","anas");
Methode 3 = ["zakaria","khalid","anas"];
 */


echo "<br/>";
echo gettype(true);
echo "<br/>";
echo gettype(false);
echo "<br/>";
echo gettype(22);
echo "<br/>";
echo gettype(array("zak"=>"zakaria","kha"=>"khalid","a"=>"anas"));
echo "<br/>";
echo gettype(array("zakaria","khalid","anas"));
echo "<br/>";
echo gettype(["zakaria","khalid","anas"]);
echo "<br/>";
echo "<br/>";
echo "<br/>";

//====================================== Video number #07=============================================

// Type Junggling + Automatice type conversion 

// =====================================

echo 1+"2"; // 3;
echo "<br>";
echo gettype(1+"2"); // intger 
// NB : just result type change 
echo "<br>";
echo true+true;//2
echo "<br>";
echo gettype(true+true);//intiger
echo "<br>";
echo 5+'5 pieces'; //10 ==> show warning
echo "<br>";
echo 10+10.5;//20.5
echo "<br>";
echo gettype(10+10.5);//double
echo "<br>";
echo 10.5+10.5;//21
echo "<br>";
echo gettype(10.5+10.5);//double

//====================================== Video number #08=============================================

// 

// =====================================


