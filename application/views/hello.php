<!DOCTYPE html>
<html>
<head>
	<title>Hello</title>
</head>
<body>
<h1>hello</h1>

	<!-- <?php 

		//print_r($student_data);

	 ?> -->
	 <table border="1">
	 	<tr>
	 		<td>Id</td>
	 		<td>Title</td>
	 		<td>Content</td>
	 		<td>Author</td>

	 	</tr>
	 <?php 


	 	foreach ($data as $key => $value) {
	 		echo "<tr>

	 				<td>".$value['id'] ."</td>
	 				<td>".$value['title'] ."</td>
	 				<td style='width:300px;'>".$value['content'] ."</td>
	 		        <td>".$value['author'] ."</td>


	 			  </tr>
	 		";
	 	}
	 	// print_r($data);


	  ?>
	</table>
</body>
</html>