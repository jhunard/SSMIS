<?php
$xmlDoc=new DOMDocument();
$xmlDoc->load("../osd/js/links.xml");

$x=$xmlDoc->getElementsByTagName('link');

//get the q parameter from URL
$q=$_GET["q"];

//lookup all links from the xml file if length of q>0
if (strlen($q)>0) {
  $hint="";
  for($i=0; $i<($x->length); $i++) {
    $y=$x->item($i)->getElementsByTagName('title');
    $z=$x->item($i)->getElementsByTagName('url');
    if ($y->item(0)->nodeType==1) {
      //find a link matching the search text
      if (stristr($y->item(0)->childNodes->item(0)->nodeValue,$q)) {
        if ($hint=="") {
          $hint="<a style='text-align:center; color:#fff;background-color:#8e8d8a;text-decoration:none;' href='" . 
          $z->item(0)->childNodes->item(0)->nodeValue . 
          "' >" . 
          $y->item(0)->childNodes->item(0)->nodeValue . "</a>";
        } else {
          $hint=$hint . "<br /><a style='text-align:center; color:#fff;background-color:#8e8d8a;text-decoration:none;' href='" . 
          $z->item(0)->childNodes->item(0)->nodeValue . 
          "'>" . 
          $y->item(0)->childNodes->item(0)->nodeValue . "</a>";
        }
      }
    }
  }
}

// Set output to "no suggestion" if no hint was found
// or to the correct values
if ($hint=="") {
  $response="<p style='background-color:#8e8d8a;'>No Result Found</p>";
} else {
  $response=$hint;
}

//output the response
echo $response;
?>