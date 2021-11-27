<?

$name = $_GET["recipeName"];
$list = $_GET["recipeList"];

if($name == "Best Chocolate Chip Cookies") {
  
  if($list == "ingredients"){
    include "ingredients.html";
    
  } elseif ($list == "equipment"){
    include "equipment.html";
    
  } elseif ($list == "directions"){
    include "directions.html";
    
  } else {
    echo "1";
  }
  
  
} elseif($name == "Mrs. Sigg's Snickerdoodles") {
  
  if($list == "ingredients"){
    include "ingredients.html";
    
  } elseif ($list == "equipment"){
    include "equipment.html";
    
  } elseif ($list == "directions"){
    include "directions.html";
    
  } else {
    echo "1";
  }
  
  
} elseif($name == "Lemon Bars") {
  
  if($list == "ingredients"){
    include "ingredients.html";
    
  } elseif ($list == "equipment"){
    include "equipment.html";
    
  } elseif ($list == "directions"){
    include "directions.html";
    
  } else {
    echo "1";
  }
  
  
} 