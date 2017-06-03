<html>
	<head>
		<title>Dates and Times: Formatting</title>
	</head>
	<body>
	<?php
		$timestamp = time();
    echo strftime("today is %m/%d/%y" , $timestamp);


      echo strftime("today is *%m/*%d/%y" , $timestamp);

        function strip_zeros_from_date ($marked_strinmgs="")
        {
          $no_zeros = str_replace('*0', '', $marked_strinmgs);

          $cleaned_string = str_replace ('*', '', $no_zeros);
          return $cleaned_string;

        }
          echo strip_zeros_from_date(strftime("today is *%m/*%d/%y" , $timestamp));

          $dt = time();
          $my_sql_datetime = strftime("%Y=%m-%d %h:M%:%S", $dt);
	?>

	</body>
</html>
