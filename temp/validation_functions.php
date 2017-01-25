  <?php 
  function has_presence($value){
      return isset($value) && $value !== "";
    }  
  
  function has_max_len($value, $max){
    return strlen($value)<=$max;
  }

  function has_inclusion_in($value, $set){
    return in_array($value, $set);
   
  }
?>