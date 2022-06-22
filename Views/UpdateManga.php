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
<!-- style css -->
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

<!-- navbar -->
	
	<?php include './includs/header.php';?>

	<div style="padding: 30px 0;" class="row container mx-auto">
	    
	    <div class="col-sm">

	        <!-- update MANGAA -->
    		<h1>Update Manga</h1>
    		
    		<form action="" method="POST" enctype="multipart/form-data">
					<input type="text" class="form-control " name="id" value="<?=$data[0]["id"]?>" hidden/>

    		    <div class="form-group">
    		        <label for="title">Title <span class="require"></span></label>
    		        <input type="text" class="form-control " name="title" value="<?=$data[0]["title"]?>" required/>
    		    </div>
				<div class="form-group">
				<select class="form-select" name="genre" aria-label="Default select example">
					<option > select Genre manga </option>
					<option value="1" <?php if($data[0]["genre"]==1) echo "selected"?>>Complete </option>
					<option value="2" <?php if($data[0]["genre"]==2) echo "selected"?>> Drama</option>
					<option value="3" <?php if($data[0]["genre"]==3) echo "selected"?>>Action</option>
					<option value="4" <?php if($data[0]["genre"]==4) echo "selected"?>>Comedy</option>
					<option value="5" <?php if($data[0]["genre"]==5) echo "selected"?>>Ecchi</option>
					<option value="6" <?php if($data[0]["genre"]==6) echo "selected"?>>Fantasy</option>
					<option value="7" <?php if($data[0]["genre"]==7) echo "selected"?>>Horror</option>
					<option value="8" <?php if($data[0]["genre"]==8) echo "selected"?>>Mystery</option>
					<option value="9" <?php if($data[0]["genre"]==9) echo "selected"?>>Sci-fi</option>
					<option value="10" <?php if($data[0]["genre"]==10) echo "selected"?>>Shoujo</option>
					<option value="11" <?php if($data[0]["genre"]==11) echo "selected"?>>Shoujo Ai</option>
					</select>
    		    </div>
				<div class="form-group">
    		        <label for="title">date <span class="require"></span></label>
    		        <input type="date" class="form-control" name="date" value="<?=$data[0]["date"]?>" required/>
    		    </div>
				<div class="form-group">
    		        <label for="title">status <span class="require"></span></label>
    		        <input type="text" class="form-control" name="status" value="<?=$data[0]["status"]?>" required/>
    		    </div>
				<div class="form-group">
    		        <label for="title">sous-title <span class="require"></span></label>
    		        <input type="text" class="form-control" name="sous-title" value="<?=$data[0]["sous-title"]?>" required/>
    		    </div>
			    <div class="form-group">
					<label>Image</label>
					<!-- <input type="file" name="image"  class="text-input"> -->
					<input type="file" name="images" class='multi-input' value="<?=$data[0]["image"]?>" required/>
                 </div>
               
    		    <div class="form-group">
    		        <button  name="update_manga"  type="submit" class="btn btn-primary special-btn">Update</button>  
    		    </div>
    		    
    		</form>
		</div>
		
				<!-- Update chapter -->

		<div class="col-sm">
	        
    		<h1>Add Chapter</h1>
    		
    		<form action="updateChapter" method="POST" enctype="multipart/form-data">
    		    
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
    		        <button  name="update_chapter"  type="submit" class="btn btn-primary special-btn">Update</button>  
    		    </div>
    		    
    		</form>
		</div>
		
	</div>
</div>
<?php include './includs/footer.php';?>
</body>
</html>




