<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang"em">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
    <title>Sorting Multidimensional Arrays</title>
  </head>
  <body>
    <?php
      /* This pge creates a multidimensional Array
       * of name and grades
       * The array is then sorted twice:
       * once by name and once by grades
       */

       //create the Array
       //array structure:
       // studentID => array ('name' => 'Name', 'grade' => XX.X)
       $students = array(
         '256' => array('name' => 'Jon', 'grade' => 98.5),
         '2' => array('name' => 'Vance', 'grade' => 85.1),
         '9' => array('name' => 'Stephen', 'grade' => 94.0),
         '364' => array('name' => 'Steve', 'grade' => 85.1),
         '68' => array('name' => 'Rob', 'grade' => 74.6),
        );

        // Name sorting function:
        function name_sort($x, $y) {
          return strcasecmp($x['name'], $y['name']);
          // for a Case sensative sort use the following
          // return strcmp($x['name'], $y['name']);
        }

        // Grade sorting function
        // Sort in DESCENDING order
        function grade_sort($x, $y) {
          return ($x['grade'] < $y['grade']);
          // for a sort in ASCENDING order use the following
          // return ($x['grade'] > $y['grade']);
        }

        //  Print the array as in:
        echo '<h3>Array As Is</h3><pre>' . print_r($students, 1) . '</pre>';

        // Sort by name:
        uasort($students, 'name_sort');
        // the following sort would strip away the index
        // usort($students, 'name_sort');

        // print the array now:
        echo '<h3>Array Sorted By Name</h3><pre>' . print_r($students, 1) . '</pre>';

        // sort by grade
        uasort($students, 'grade_sort');

        // print the array now:
        echo '<h3>Array Sorted By Grade</h3><pre>' . print_r($students, 1) . '</pre>';

        ?>
  </body>
</html>
