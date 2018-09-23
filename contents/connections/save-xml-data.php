<?php 
  include 'conn.php';
  $students = array(); 
  $sql7 = "SELECT * FROM student_record";
    $result7 = $conn->query($sql7);

if ($result7->num_rows > 0) {
    // output data of each row
    while($row7 = $result7->fetch_assoc()) {

        $students [] = array( 
        'title' => $row7["sr_code"] ,
        'url' => "student-information-sheet-form-view.php?sr-code=".  $row7["sr_code"]
        ); 
      
    }
} else {
    echo "0 results";
}

   
  $doc = new DOMDocument(); 
  $doc->formatOutput = true; 
   
  $r = $doc->createElement( "pages" ); 
  $doc->appendChild( $r ); 
   
  foreach( $students as $student ) 
  { 
  $b = $doc->createElement( "link" ); 
   
  $name = $doc->createElement( "title" ); 
  $name->appendChild( 
  $doc->createTextNode( $student['title'] ) 
  ); 
  $b->appendChild( $name ); 
   
   
  $url = $doc->createElement( "url" ); 
  $url->appendChild( 
  $doc->createTextNode( $student['url'] ) 
  ); 
  $b->appendChild( $url ); 
   
  $r->appendChild( $b ); 
  } 
   
  echo $doc->saveXML(); 
  $doc->save("../guidance/js/links.xml") 
  ?>