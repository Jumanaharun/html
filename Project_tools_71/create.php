
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style">
	<title>Add books</title>
</head>
<body>
	
	<div class="container"> <!--container is a bootstrap-->
	<header>
		<h1>Add a new book</h1>
		<a href="">Back</a>
	</header>
		<form action="" method="post"> 
			<!-- my-4 is bootstrap, used to put margin top and bottom  -->
			<div class="form-element my-4"> 
				<table>
					<tr>
					<td>Title</td>
					<td>
						<input type="text" class="form-control" name="title" placeholder="Enter the title of the book.">
					</td>
				</tr>

				<tr>
					<td>Author</td>
					<td><input type="text" class="form-control" name="author" placeholder="Enter the name of the author.">
					</td>
						
				</tr>

				<tr>
					<td>Genre</td>
					<td>
						<select name="type">
							<option>Adventure</option>
							<option>Crime</option>
							<option>Comedy</option>
							<option>Thriller</option>
							<option>Psychological</option>
							<option>Sci-fi</option>
						</select>
					</td>
				</tr>

				<tr>
					<td>Book Description</td>
					<td>
						<input type="text" class="form-control" name="description" placeholder="Enter the title of the book.">
					</td>
						
				</tr>
					
				</table>

				<button>Submit</button>
				
			</div>
			
		</form>
	</div>


</body>
</html>