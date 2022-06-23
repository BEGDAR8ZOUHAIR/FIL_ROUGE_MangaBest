<!-- link font awsome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<?php 

$params=explode("/", $_GET['p']);
if (isset($params[0])&&!empty($params[0])) 
{
	$controller=ucfirst($params[0])."Controller";
	if (file_exists("Controllers/".$controller.".php")) 
	{
		require_once "Controllers/".$controller.".php";
		$obj=new $controller();
		if (isset($params[1])&&!empty($params[1])) 
		{
			$action=$params[1];
			if(method_exists($obj,$action))
			{
				if (isset($params[2])&&!empty($params[2])) 
				{
					$obj->$action($params[2]);

				}
				else
				{
					$obj->$action();
				}
			}else
			{
				echo "Test ";
				exit();
			}
		}else
		{
			$action="index";
			$obj->$action();
		}
	}else
	{
		echo "page  0";
	}
}