<?php
//fetch.php
if(isset($_POST["query"]))
{
 $connect = mysqli_connect("localhost", "root", "", "shop_db");
 $request = mysqli_real_escape_string($connect, $_POST["query"]);
 $query = "
 SELECT * FROM products 
 WHERE name LIKE '%".$request."%' 


 ";
 $result = mysqli_query($connect, $query);
 $data =array();
 $html = '';
 $html .= '
  <table class="table " >
   <tr>
   <th>name</th>
   <th>price</th>
   <th>image</th>
   </tr>
  ';
 if(mysqli_num_rows($result) > 0)
 {
  while($row = mysqli_fetch_array($result))
  {
   $data[] = $row["product_name"];
   $data[] = $row["product_price"];
   $data[] = $row["product_image"];
   $html .= '
   <tr>
    <td>'.$row["product_name"].'</td>
    <td>'.$row["product_name"].'</td>
    <td>'.$row[""].'</td>
   </tr>
   ';
  }
 }
 
 $html .= '</table>';
 if(isset($_POST['typehead_search']))
 {
  echo $html;
 }
 else
 {
  $data = array_unique($data);
  echo json_encode($data);
 }
}

?>
