
<h2>Sort Array by Country Name: </h2>
<table border="5">
<tr>
	<th>Country</th>
    <th>Capital</th>
</tr>

<?
$result = array("Bangladesh"=>"Dhaka","Pakistan"=>"Islamabad","India"=>"Dilhi","Afghanisthan"=>"Kabul","Srilanka"=>"Colombo" );

ksort($result);
foreach($result as $country=>$capital){
	//echo "Country: $country ---Capital: $capital .<br>";?>
  <tr>
  		<td><? echo $country; ?></td>
        <td><? echo $capital; ?></td>
  </tr>
 
    
 <? 
	}

?>
</table>