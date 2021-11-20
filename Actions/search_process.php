<?php

require('../Controllers/product_Controller.php');
if(isset($_POST['search'])){
$kword= $_POST['search'];
//searches if any of any of the keywords matches entered term
$keywords= select_product_by_keyword_controller($kword);
// return array of all rows, or false (if it failed)
//searches by title 
$titles = select_product_by_title_controller($kword);
//searches by description
$desc = select_product_by_desc_controller($kword);
function results(){
    global $keywords, $titles, $desc;
    $kword_len = count( $keywords);
    $title_len = count($titles);
    $desc_len  = count($desc);
    if ($kword_len != 0 || $title_len != 0 || $desc_len != 0){
      return 'results' ;
     
    } else {
      return 'no results';
    }
  }

if (results()==='results'){
    echo "yass";
} else {
  echo "weeellll";
}

  


  

}


