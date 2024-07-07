

<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
require_once 'abstract-wc-data.php';


// Crea una instancia de WC_Data
$wc_data = new WC_Data();
$wc_data->data['shipping_class_id']=4;
$wc_data->changes['shipping_class_id']='';
$wc_data->set_object_read(true);

$wc_data->set_prop('shipping_class_id',4 ); 
print_r( $wc_data->data);
print_r( $wc_data->changes);
?>