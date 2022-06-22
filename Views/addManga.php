<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- bootstrap -->
    <link rel="stylesheet" href="http://localhost/fileRougeMangaBest/Views/asset/css/bootstrap.min.css">
<!-- style -->
    <link rel="stylesheet" href="http://localhost/fileRougeMangaBest/Views/asset/css/navbar.css">
<!-- caoussel -->
    <link rel="stylesheet" href="http://localhost/fileRougeMangaBest/Views/asset/dist/theme.css">
    <link rel="stylesheet" href="http://localhost/fileRougeMangaBest/Views/asset/dist/caoussel.min.css">
<!-- font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<style>
		.grid {
  display: grid;
  grid-template-columns: 2;
  grid-template-rows: 2;
}
.special-btn {
	width: 100%;
}
form .form-group {
	margin-bottom: 14px;
}
.multi-input {
	display: block;
	margin-top: 14px;
}

	</style>
</head>
<body>
	
	<?php include './includs/header.php';?>

	<div style="padding: 30px 0;" class="row container mx-auto">
	    
	    <div class="col-sm">
	        <!-- ADD MANGAA -->
    		<h1>Add Manga</h1>
    		
    		<form action="addManga" method="POST" enctype="multipart/form-data">
    		    
    		   
    		    
    		    <div class="form-group">
    		        <label for="title">Title <span class="require"></span></label>
    		        <input type="text" class="form-control " name="title" />
    		    </div>
				<div class="form-group">
				<select class="form-select" name="genre" aria-label="Default select example">
					<option selected> select Genre manga </option>
					<option value="1">Complete </option>
					<option value="2"> Drama</option>
					<option value="3">Action</option>
					<option value="4">Comedy</option>
					<option value="5">Ecchi</option>
					<option value="6">Fantasy</option>
					<option value="7">Horror</option>
					<option value="8">Mystery</option>
					<option value="9">Sci-fi</option>
					<option value="10">Shoujo</option>
					<option value="11">Shoujo Ai</option>

					</select>
    		       
    		    </div>
				<div class="form-group">
    		        <label for="title">date <span class="require"></span></label>
    		        <input type="date" class="form-control" name="date" />
    		    </div>
				<div class="form-group">
    		        <label for="title">status <span class="require"></span></label>
    		        <input type="text" class="form-control" name="status" />
    		    </div>
				<div class="form-group">
    		        <label for="title">sous-title <span class="require"></span></label>
    		        <input type="text" class="form-control" name="sous-title" />
    		    </div>
			    <div class="form-group">
					<label>Image</label>
					<!-- <input type="file" name="image"  class="text-input"> -->
					<input type="file" name="images" class='multi-input' multiple/>
                 </div>
               
    		    <div class="form-group">
    		        <button  name="submit_manga"  type="submit" class="btn btn-primary special-btn">Create</button>  
    		    </div>
    		    
    		</form>
		</div>
		
				<!-- Add chapter -->

		<div class="col-sm">
	        
    		<h1>Add Chapter</h1>
    		
    		<form action="addManga" method="POST" enctype="multipart/form-data">
    		    
				<div class="form-group">
    		        <label for="title">Chapter <span class="require"></span></label>
    		        <input type="text" class="form-control" name="Chapter" required/>
    		    </div>
				<div class="form-group">
    		        <label for="title">  Manga_name <span class="require"></span></label>    		    
					<select onmousedown="this.size=3;"  name="id_manga" id="" class="form-control outline-none bg-transparent text-secondary">
                            <?php foreach ($data as $manga) { ?>
                            <option value="<?php echo $manga['id']; ?>"><?php echo $manga['title'];?></option>
                            <?php } ?>
                    </select>
				</div>
				<div class="form-group">
    		        <label for="title">Title Chapter <span class="require"></span></label>
    		        <input type="text" class="form-control" name="title" required/>
    		    </div>
				
				<div class="form-group">
					<label>Image of chapter</label>
					<!-- <input type="file" name="image"  class="text-input"> -->
					<input type="file" name="img[]" multiple class='multi-input' required />
                 </div>
    		    <div class="form-group">
    		        <button  name="submit_chapter"  type="submit" class="btn btn-primary special-btn">Create</button>  
    		    </div>
    		    
    		</form>
		</div>
		
	</div>
</div>
<?php include './includs/footer.php';?>
</body>
</html>




