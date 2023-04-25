<!DOCTYPE html>
<html lang="en">
<head>
	<title>Document</title>
</head>
<body>
	<h1>XAMPP</h1>
	<p></p>
	<?php
	echo "<p>Hello World from PHP ...</p>\n";
	echo "date : " . date('j-m-y-h-i-s');

	// Connect to the MySQL database
$connect = mysqli_connect('localhost', 'root', '', 'sandbox');

// If the connection did not work, display an error message
if (!$connect) 
{
    echo 'Error Code: ' . mysqli_connect_errno() . '<br>';
    echo 'Error Message: ' . mysqli_connect_error() . '<br>';
    exit;
}

// Create a query
        $query = 'SELECT *
            FROM colors
            ORDER BY name';

        // Execute the query
        $result = mysqli_query($connect, $query);

        // If there is no result, display an error message
        if (!$result)
        {
            echo 'Error Message: ' . mysqli_error($connect) . '<br>';
            exit;
        }

        // Display the number of recirds found
        echo '<p>The query found ' . mysqli_num_rows($result) . ' rows:</p>';
 while ($record = mysqli_fetch_assoc($result))
        {

            // Output the record using if statements and echo
            echo '<hr>';

            if ($record['Name'])
            {
                echo '<h2>' . $record['Name'] . '</h2>';
            }
            if ($record['ID'])
            {
                echo '<h2>' . $record['ID'] . '</h2>';
            }

            if ($record['rgb'])
            {
                echo '<p>' . $record['rgb'] . '</p>';
            }
 // This code will help with debugging
          //  echo '<pre>';
          //  print_r($record);
          //  echo '</pre>';

        }
	?>
</body>
</html>