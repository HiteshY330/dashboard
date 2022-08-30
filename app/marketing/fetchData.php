<?php
$dbDetails = array(
    'host' => 'localhost',
    'user' => 'root',
    'pass' => '',
    'db' => 'techcrm'
);


$table ='member';

$primaryKey ='id';

$columns = array(
    array('db' => 'first_name','dt' => 0),
    array('db' => 'last_name','dt' => 1),
    array('db' => 'company','dt' => 2),
    array('db' => 'email','dt' => 3),
    array('db' => 'phone','dt' => 4),
    array('db' => 'website','dt' => 5),
    array('db' => 'assigned_to','dt' => 6),
    array(
        'db' => 'created',
        'dt' => 7,
        'formatter' => function($d, $row){
            return date('js M Y', strtotime($d));
        }
    ),
    array(
        'db' => 'status',
        'dt' => 8,
        'formatter' => function($d, $row){
            return($d == 1)?'Active':'Inactive';
        }
    )  
    
    
);

require 'ssp.class.php';

echo json_encode(
    SSP::simple($_GET, $dbDetails, $table, $primaryKey, $columns)
);
?>