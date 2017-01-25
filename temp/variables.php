<!DOCTYPE html>
<html>
  <head>
    <title>Hello World</title>
  </head>
  <body>
    <?php
      $number = 99;
      $string = "Bug?";
      $array = array(1=>"bumping",2=>"good",3=>"Services");
      var_dump($number);
      var_dump($string);
      var_dump($array);
    ?>
    <br>
    <pre>
    <?php
      function output($word){
        echo "something".$word;
      }
      // print_r(get_defined_vars());
     ?>
     </pre>
     <br>
     <?php
     output("haha");
      var_dump(debug_backtrace());
      ?>
  </body>
</html>
