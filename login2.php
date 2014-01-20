<html>
  
  <head>
        <meta charset=utf-8 />
         <title></title>
          <link rel="stylesheet" type="text/css" href="http://sujuod_zoubi.dc7.us/aren/tst.css">
         
                <script src="http://code.jquery.com/jquery-latest.js"></script>
                <script src="http://sujuod_zoubi.dc7.us/aren/ajax.js"></script>
				<style>
		.styled-select {
		width: 228px;
		height: 34px;
		overflow: hidden;
		background: url(http://3.bp.blogspot.com/-8hquXopMWrY/UEOhmM4qIcI/AAAAAAAALcA/8uVJAMRs14s/s1600/Select.png) no-repeat ;
		border-radius: 10px;
		}
		.styled-select select {
		background: transparent;
		width: 228px;
		padding: 5px;
		border: 1px solid #CCC;
		font-size: 16px;
		height: 34px;
		font-weight: bold;
		outline:0px;
		-webkit-appearance: none;
		border-radius: 10px;
		}
		.styled-select option {
		background: lightgrey;
		width: 228px;
		padding: 5px;
		border: 1px solid #CCC;
		font-size: 16px;
		height: 34px;
		outline:0px;
		-webkit-appearance: none;
		}
        </style>
		
    </head>
	    <body> 
		<div class="styled-select">
            <select id="myList"  name="hihi" >
                 <option>Select..</option>
                <option>first_2013</option>
                <option>second_2013</option>  
                <option>summer_2013</option>  
            </select>
		</div>	
        <div id="output2">
        </div>
 <?php

        include_once('http://sujuod_zoubi.dc7.us/aren/confg.php');
          $sql_filter_01= mysql_real_escape_string($_POST["hihi"]);
          $sql_filter_02 = mysql_real_escape_string($_POST["my_name"]);
        
        $sql_txt_01  = "SELECT course_name, mark_first, mark_second,mark_other,mark_final,(mark_first+mark_second+mark_other) mark FROM stdinfo
                        WHERE course_semester = '" . $sql_filter_01 . "' AND student_id = '" . $sql_filter_02 . "'";
            $sql_result_01 =  mysql_query($sql_txt_01);

                if($sql_result_01 === FALSE)
                    {
                       die(mysql_error()); // TODO: better error handling
                   }
					
					while (   $row2 = mysql_fetch_array($sql_result_01))	
					{
						$sum = $row2["mark_first"]+$row2["mark_second"]+$row2["mark_other"];
						echo"<ul id='nav' class='accordion'>
							  <li><a href='#'>". $row2["course_name"]."<span>$sum</span></a>
								<ul class='sub-menu'>
								  <li><a href='#'><em>01</em>First<span>". $row2["mark_first"]."</span></a></li>
								  <li><a href='#'><em>02</em>Second<span>". $row2["mark_second"]."</span></a></li>
								  <li><a href='#'><em>03</em>Other<span>". $row2["mark_other"]."</span></a></li>
								  <li><a href='#'><em>04</em>Final<span>". $row2["mark_final"]."</span></a></li>
								</ul>
						</ul>";
					}
?>   
    </body>
</html>
