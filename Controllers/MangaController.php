<?php 
//  
require_once "./Models/Manga.php";

class MangaController
{
    public function __construct()
	{
		session_start();
	}
    public function index()
    {
        $db = new db();
		$data = $db->selectAll("mangas");
		require_once "./Views/addManga.php";
    }
    public function addManga()
    {
        $manga = new Manga();
		$data = $manga->selectAll("mangas");
		$dat = $manga->insert_Manga();
		header("Location: http://localhost/fileRougeMangaBest/Manga/index");
    }

	// get detail manga =======================================================

    public function detaills($id){
		$db = new db();
		$data = $db->selectOne("mangas" , ['id' => $id]);
		$data6 = $db->selectAll("typemanga" , ['id' => $data[0]['genre']]);
		$data0 = $db->selectAll("chapter" , ['id_manga' => $id]);

		$lastchapter = $db->selectLastChapter("chapter" , ['id_manga' => $id]);
		$_SESSION['last'] = $lastchapter[0]['max'];
		
		require_once "./Views/details.php";
	}
	//   read chapter   ======================================================

	public function read_chapitre($id=null){
		$db = new db();
		$previouschapter=null;
		$allchapters = $db->selectAll("chapter" , ['id_manga' => $_SESSION['id_manga']]);
		$data1 = $db->selectOne("chapter" , ['id'=>$id, 'id_manga' => $_SESSION['id_manga']]);

		if($id != null && $id != 1)
			$previouschapter=$id-1;

		$data = $db->selectAll("chapter_images" , ['id_manga' => $_SESSION['id_manga'],'id_chapter' =>  $id]);
		
		require_once "./Views/read.php";
	}
	
	// read chapter ===========================================================

	public function read($id){
		$db = new db();
		$_SESSION['id_manga'] = $id;
		$previouschapter=null;
		$allchapters = $db->selectAll("chapter" , ['id_manga' => $id]);
		$data = [];
		$data1 = $db->selectOne("chapter" , ['id'=>'1', 'id_manga' => $id]);
		if(isset($data1))
			{
				$data = $db->selectAll("chapter_images" , ['id_manga' => $id,'id_chapter' => $data1[0]['id']]);
				$previouschapter=$data1[0]['id'];
			}
		require_once "./Views/read.php";
	}

        //  get genres from database ============================================================

	public function genres(){
		$db = new db();
		$data = $db->selectAll("mangas" , []);
		
		require_once "./Views/genres.php";
	}

	// get all the genres of the manga with the id $id==============

	public function getGenre($id){

		$db = new db();
		$data = $db->selectAll("mangas" , ['genre' => $id]);
		
		require_once "./Views/genres.php";
	}

	// Delete Manga from database ===================================================

	public function delete($id){
		$db = new db();
		$db->delete("mangas" , 'id' , $id);
		$db->delete("chapter" , 'id_manga' , $id);
		$db->delete("chapter_images" , 'id_manga' , $id);
		header("Location: http://localhost/fileRougeMangaBest/User/index");
	}

	// update manga =============================================
	public function updateManga($id){
		$manga = new Manga();
		$data = $manga->selectOne("mangas" , ['id' => $id]);
		$col=array('title','date','genre','status','sous-title','image');
		$vals=array();
		if(isset($_POST["update_manga"]))
			{
				$title = $_POST['title'];
				$date = $_POST['date'];
				$genre = $_POST['genre'];
				$status = $_POST['status'];
				$sous = $_POST['sous-title'];
				$image_name = $_FILES['images']['name'];
				$extension = pathinfo($image_name,PATHINFO_EXTENSION);
				$randomno=rand(0,100000);
				$rename='upload'.date('Ymd').$randomno;
				$newname=$rename.'.'.$extension;


        
				$targetFilePath = "C:/xampp/htdocs/fileRougeMangaBest/Views/asset/image/Chapter1/".$newname;
				move_uploaded_file($_FILES['images']['tmp_name'],$targetFilePath);
				array_push($vals,$title,$date,$genre,$status,$sous,$newname);
				$manga->updateManga("mangas",$col,$vals,$_POST["id"]);
				header("Location: http://localhost/fileRougeMangaBest/User/index");

			}
		require_once "./Views/updateManga.php";
	}


	

	
}