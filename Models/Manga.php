<?php 

require './database/db.php';

class Manga extends db
{

	function __construct()
	{	
		parent::__construct();
	}

    
    public function insert_Manga()
    {
        // add manga ======================================================

        if(isset($_POST['submit_manga'])){
            $targetDir = "upload/";
            $allowTypes = array('jpg','png','jpeg','gif');
            $title = $_POST['title'];
            $genre = $_POST['genre'];
            $date = $_POST['date'];
            $status = $_POST['status'];
            $sous = $_POST['sous-title'];
            $fileName = basename($_FILES['images']['name']);
            $targetFilePath = "C:/xampp/htdocs/fileRougeMangaBest/Views/asset/image/Chapter1/".$fileName;
            $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
                if(in_array($fileType, $allowTypes)){   
                    $count=0;

                    if(move_uploaded_file($_FILES['images']['tmp_name'],$targetFilePath)){

                        $insert = "INSERT INTO `mangas`(`title`, `genre`, `date`, `sous-title`, `status`, `image`) VALUES ('$title','$genre', '$date', '$sous', '$status', '$fileName')";
                        $stm = $this->conn->query($insert);
                    }else{
                        $statusMsg = "Sorry, there was an error uploading your file.";
                    }
                }else{
                    $statusMsg = 'Please Upload a Valid File';
                }
        }

        // add CHapter ======================================================

        if(isset($_POST['submit_chapter'])){
            $count=1;
            $targetDir = "upload/";
            $allowTypes = array('jpg','png','jpeg','gif');
            $chapter = $_POST['Chapter'];
            $id_manga = $_POST['id_manga'];
            $stm=$this->conn->query("SELECT Max(id) as max FROM chapter where id_manga=$id_manga");
            $row = $stm->fetch_assoc();
            $id = $row["max"]+1;
            $title = $_POST['title'];
            // insert Chapter ==============================================
            $insert = "INSERT INTO `chapter`(`id`,`chapter`, `id_manga`, `title`) VALUES ('$id' ,'$chapter', '$id_manga', '$title')";
            $stm = $this->conn->query($insert);
            $images_arr = array();

            $fileNames = array_filter($_FILES['img']['name']);
            if(!empty($fileNames)){
                foreach($_FILES['img']['name'] as $key=>$val)
                {
                    $image_name = $_FILES['img']['name'][$key];
                    $fileName = basename($_FILES['img']['name'][$key]); 
            //  function of rename image ===========================
                    $extension = pathinfo($image_name,PATHINFO_EXTENSION);
                    $randomno=rand(0,100000);
                    $rename=$_POST['title'].date('Ymd').$randomno;
                    $newname=$rename.'.'.$extension;

                //  storage image in dossier Chapter1=========================
                    $targetFilePath = "C:/xampp/htdocs/fileRougeMangaBest/Views/asset/image/Chapter1/".$newname;
                    $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
                    if(in_array($fileType, $allowTypes))
                    {   

                    if(move_uploaded_file($_FILES['img']['tmp_name'][$key],$targetFilePath))
                        {
                            $insert2 = "INSERT INTO `chapter_images`(`number`, `image`, `id_chapter`, `id_manga`) VALUES ('$count',' $newname', '$id', '$id_manga')";
                            $count++;
                            $stm2 = $this->conn->query($insert2);
                        }
                    else{
                        $statusMsg = "Sorry, there was an error uploading your file.";
                        }
                    }
                    else
                    {
                    $statusMsg = 'Please Upload a Valid File';
                    }
                }
            }
        }
    }
}


