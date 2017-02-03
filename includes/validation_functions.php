  <?php 
    function has_presence($value){
        return isset($value) && $value !== "";
      }  
    
    function has_max_length($value, $max){
      return strlen($value)<=$max;
    }

    function has_inclusion_in($value, $set){
      return in_array($value, $set);     
    }

    function validate_max_lengths($fields_with_max_lengths) 
    {
      global $errors;
      foreach ($fields_with_max_lengths as $field => $max) {
        $value = trim($_POST[$field]);
        if (!has_max_length($value, $max)) {
          $errors[$field] = ucfirst($field) . " is too long";
        }
      }
    }
?>