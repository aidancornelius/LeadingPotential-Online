<? /* @Mist Engine v4. This version is made for Mobile Safari Generation. AUT_NOTES: So this is the big nasty page that does a lot of stuff, but it's pretty convoluted. Don't make changes to it. Just don't. */ ?>

<? 
   ini_set("display_errors", 0);
   
   $pageGoTo = $_GET['go'];
   
   if(empty($pageGoTo)){
   	$pageGoTo = "home";
   	// echo "Notice: Defaulted: $pageGoTo for variable in /var/fog/apps/1498/genleadership.com/mobileapp/sora/visionbuilding/inc/index.php on line 10";
   }
   else {
   	$pageGoTo = $pageGoTo;
   }
   
   define("__ROOT__", $_SERVER['DOCUMENT_ROOT']."/mobileapp/sora/visionbuilding");
   
   require_once(__ROOT__."/inc/security.php");
   	// security();
   require_once(__ROOT__."/inc/header.php");
   require_once(__ROOT__."/inc/function_list.php");
	
	print(create("0",$pageGoTo));
	
   require_once(__ROOT__."/inc/footer.php"); 
   
    destroy();
   
?>