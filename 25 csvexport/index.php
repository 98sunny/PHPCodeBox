<style> 
table {
    border-collapse: collapse;
    margin: 25px 0;
    font-size: 0.9em;
    font-family: sans-serif;
    min-width: 400px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
}
tr {
    background-color: #96e4fa;
    color: black;
    text-align: center;
}
td {
    padding: 12px 15px;
	font-weight: 900;
}
th{
padding-top: 12px;
  padding-bottom: 12px;
}

</style>
<?php


$tmp_name = $_FILES['fileUpload']['tmp_name'];	
           
			$file = fopen($tmp_name,'rb');
			
			$datasets = array();
			
			echo '<h1>CSV data in tabular format</h1><br><table border="3" id="table"><tr>';

			while(!feof($file)){
				
				
				$data = fgetcsv($file);
				if($data === false) continue;
				$datasets[] = $data;
				
				
				for ($y = 0; $y < count($data); $y++) {
						echo "<td>$data[$y] </td>";
				}
				echo '</tr>';
			}
			echo '</tbody></table></body><html>';
?>
