<html>
<head>
        <title>Search results</title>
</head>
<body>
        <h1>Results </h1>
		<p>
		<?php foreach($results as $row)
		{
			echo  'ID:'.$row->id . '<br />';
			echo  'Name:'.$row->ob_name . '<br />';
			echo  'Category:'.$row->category . '<br />';
		}
		?>	
	</p>
</body>
</html>