<?php
    /*  echo "<pre>";
      print_r(get_loaded_extensions());
      echo "<pre/>";
      */
require_once('flatdb.php');
$db = new FlatDB(__DIR__ . '/data');

// If table 'products' is not exist, it will be created on the fly
// The insert function returns the inserted object, note that it added an 'id' key
// The 'id' key is an integer automatically incremented every time an item is added to the table

$result = $db->table('products')->insert(array('name' => 'Cotton Hoodie', 'price' => 48, 'sizes' => array('S', 'L') ));
echo 'The id of the inserted object is: ' . $result['id']; // echoes "The id of the inserted object is: 1"

$db->table('products')->insert(array('name' => 'Knit Hooded Sweater', 'price' => 32, 'sizes' => array('M', 'L', 'XL') ));
$db->table('products')->insert(array('name' => 'Hooded Jacket', 'price' => 51, 'sizes' => array('S', 'M', 'L') ));
$db->table('products')->insert(array('name' => 'Premium Cotton T-Shirt', 'price' => 23, 'sizes' => array('S', 'L', 'XL') ));

$data = $db->table('products')->all();
var_dump($data);
?>
