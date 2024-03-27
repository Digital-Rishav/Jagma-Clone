<?php
function get_safe_value($con, $str){
    if($str!=''){
        $str = trim($str);
    }
    return mysqli_real_escape_string($con, $str);
}

function insert($con, $table,$param=array()){
    $table_column = implode(',',array_keys($param));
    $table_value = implode("','", $param);
    $sql = "insert into $table($table_column) values('$table_value')";
    mysqli_query($con, $sql);
}
function select($con, $table1='',$table2='',$jtable1='',$jtable2='',$value='',$where='',$data='', $order='',$offset='',$limit=''){
    if($table1!='' && $table2!=''){
            $sql = "select $table1.*, $table2.* from $table1 left join $table2 on $table1.$jtable1 = $table2.$jtable2";
     
    }
   if($table1!='' && $table2==''){
        $sql = "select * from $table1";
    }
    if($value!=''){
        $sql .=" where $value = $where";
    }
    if($order!=''){
        $sql .= " order by $data desc";
    }
    if($offset!=''){
        $sql .=" $offset LIMIT,";
    }
    if($limit!=''){
        $sql .=" $limit";
    }
    $result = mysqli_query($con, $sql);
    $data = array();
    while($row = mysqli_fetch_assoc($result)){
        $data[] = $row;
    }
    return $data;
}
?>