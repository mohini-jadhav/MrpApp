<!DOCTYPE html>
<html>
    <head>
        <title>PHP MySQL Stored Procedure Demo 1</title>
        <link rel="stylesheet" href="css/table.css" type="text/css" />
        <link rel="stylesheet" type="text/css" href="include/jquery-ui/smoothness/jquery-ui.css" />		
		<script type="text/javascript" src="include/jquery-ui/external/jquery/jquery.js"></script>
		<script type="text/javascript" src="include/jquery-ui/jquery-ui.js"></script>
		<script type="text/javascript" src= "include/jquery-ui/jquery-ui.min.js"></script>
	

        <script type="text/javascript">
			$(function(){
				$( "#startDate" ).datepicker({ dateFormat: "yy-mm-dd" });
				$("#show_allocation").on('click', function(){
					var date = $("#startDate").val();
					var weeksInterval = $("#weeksInterval").val();
					alert("date: "+date+" weeksInterval: "+weeksInterval);
				});
			});
        </script>
    </head>
    <body>
    	<form id="frm_alloc_details" method="post">
    		<div>
    			<label for="startDate">Start Date:</label>
    			<input type="text" id="startDate" name="StartDate" value=""/>
    			<label for="weeksInterval"> # of weeks</label>
    			<input type="number" id="weeksInterval" name="WeeksInterval" value=""/>
    		</div>
    		<div>
    			<input type="button" id="show_allocation" value="Show Allocation" />
    		</div>
    	</form>
        <?php
        require_once("include/dbcommon.php");
        try {
            $conn = new mysqli($host,$username, $password, $dbname);
            // execute the stored procedure
            $sql = 'CALL Alloc_dashboard9("2015/01/01", 8, @AllocDetails)';  
            $q = mysqli_query($conn, $sql);
            $result = mysqli_fetch_assoc($q);
        } catch (mysqli_sql_exception $pe) {
            die("Error occurred:" . $pe->getMessage());
        }
        
        
        if (($result)||(mysqli_errno == 0))
        {
        	echo "<table width='100%'><tr>";
        	if (mysqli_num_rows($q)>0)
        	{
        		//loop thru the field names to print the correct headers
        		$i = 0;
        		while ($i < mysqli_num_fields($q))
        		{
        			echo "<th>". mysqli_fetch_field_direct($q, $i)->name . "</th>";
        			$i++;
        		}
        		echo "</tr>";
        
        		//display the data
        		while ($rows = mysqli_fetch_assoc($q))
        		{
        			echo "<tr>";
        			foreach ($rows as $data)
        			{
        				echo "<td align='center'>". $data . "</td>";
        			}
        		}
        	}else{
        		echo "<tr><td colspan='" . ($i+1) . "'>No Results found!</td></tr>";
        	}
        	echo "</table>";
        }else{
        	echo "Error in running query :". mysqli_error();
        }
        ?>
        </table>
    </body>
</html>    