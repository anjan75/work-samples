<?php
session_start();
include("connection.php"); 

global $cat;
    if(isset($_REQUEST['cat'])&&$_REQUEST['cat']!="")
	{	
		$cat=$_REQUEST['cat'];
	}
	$rowsPerPage = 12;
	$pageNum = 1;
	$countstart=0;
	if(isset($_REQUEST['pg']))
	{
		$pageNum=$_REQUEST['pg'];
		if(isset($_REQUEST['countstart']))
		$countstart=$_REQUEST['countstart'];
	}		
	$offset = (($pageNum - 1) * $rowsPerPage);
	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<title>Green Acres Rental</title>
<script type="text/javascript" src="js/portfolio/jquery-1.6.2.min.js"></script>

<link rel="stylesheet" type="text/css" href="css/demo.css" />

<link rel="stylesheet" type="text/css" href="css/tabstyle.css" />

<link href="css/stylesheet.css" rel="stylesheet" type="text/css" />

<link href="css/style.css" rel="stylesheet" type="text/css" />

<link href="css/skins/green.css" rel="stylesheet" type="text/css" />

<link href="css/main.css" rel="stylesheet" type="text/css" />

<script src="js/tab/jquery-1.js" type="text/javascript"></script>

<script src="js/create-element.js" type="text/javascript"></script>

<script type='text/javascript' src='js/jquery.hoverIntent.minified.js'></script>

<script type='text/javascript' src='js/jquery.dcmegamenu.1.3.3.js'></script>

<script type="text/javascript" src="js/servicestab.js"></script>

<script type="text/javascript" src="js/functions.js"></script>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.js"></script>
<script type="text/javascript">

$(function() {

    //here you have the control over the body of the iframe document
    var iBody = $("#iView").contents().find("body");

    //here you have the control over any element (#myContent)
    var myContent = iBody.find("#myContent");

});

</script>



<script type="text/javascript">

$(document).ready(function($){
	
	$('#mega-menu-7').dcMegaMenu({
		rowItems: '5',
		speed: 'fast',
		effect: 'slide'
	});
});
function clearText(field){
if (field.defaultValue == field.value) field.value = '';
else if (field.value == '') field.value = field.defaultValue;
} 
</script>

<script type="text/javascript">
var path = "index.html";
</script>

<script type="text/javascript" src="js/jquery-ui.min.js" ></script>

<script type="text/javascript">
	$(document).ready(function(){
		$("#featured > ul").tabs({fx:{opacity: "toggle"}}).tabs("rotate", 5000, true);
	});
</script>

<link href="css/main.css" rel="stylesheet" type="text/css" />

<link rel="stylesheet" type="text/css" href="js/portfolio/style.css"/>

<link rel="stylesheet" type="text/css" href="js/portfolio/prettyPhoto.css"/>

<script type="text/javascript" src="js/portfolio/jquery.prettyPhoto.js"></script> 

<script type="text/javascript" src="js/portfolio/jquery.quicksand.js"></script> 

<script type="text/javascript" src="js/portfolio/jquery.easing.1.3.js"></script> 

<script type="text/javascript" src="js/portfolio/script.js"></script>

<style type="text/css">

.detail_txt {

color: #666666;

    font-family: Arial,Helvetica,sans-serif;

    font-size: 12px;

    line-height: 20px;

    text-align: justify;

}

</style>


<link href="css/responsive.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="css/responsivemobilemenu.css" type="text/css"/>
<script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>
<script type="text/javascript" src="js/responsivemobilemenu.js"></script>


</head>

<body>

<div id="main">



<!--header start-->

<?php include "header.php"; ?>

<!--header ends-->



<div id="main">

<div id="body_main">

<div id="welcome_main">

<div id="welcome_heading"><h1 class="welcome_text1">Party Rental</h1> </div>

<div id="welcometext" class="detail_txt">

<div class="cnt-lft">
<h3> Our Categorys </h3>

<ul>
  <?php
/*$str1="select * from manage_category price";
$rs1=mysql_query($str1) or die("Q Error".mysql_error());
$num1=mysql_num_rows($rs1) or die("No Records In the Database");
$i=0;
while($row=mysql_fetch_assoc($rs1))
{
*/
?>
<li><a href="categories.php?cat=<?php //echo $row['price'] ?>"><?php //echo $row['price']?></a></li>
<?php //} ?>



</ul>


</div>

<div class="cnt-rgt">
<h3 class="ftf ftf1">Used Equipment</h3>
<h3 class="ftf ftf2"> <!--Click On Image For Product Details--> </h3>


<div class="prds">
<iframe src="used-equip-inline.php" id="iView" style="width:700px;height:700px;border:dotted 1px red" frameborder="0"></iframe>
<?php		  	
			//$str_1="select * from books where status=0 order by bid desc LIMIT $offset, $rowsPerPage";
/*			$str_1="select * from books where catid ='Used Equipment' order by bid desc LIMIT $offset, $rowsPerPage";
			//echo $str_1;
			$rs_1=mysql_query($str_1) or die(mysql_error());
		  	$dbcount=mysql_num_rows($rs_1);
			$count=0;
          	while($row=mysql_fetch_assoc($rs_1))
          	{*/
             	
		  ?>



	<!--<div class="prds_img">
    	<a href="product-details.php?id=<?php //echo $row['bid'] ?>">
        <img src="thumb_image.php?id=<?php //echo $row['bid']?>" width="100%" class="mnt">
        </a>
        <a href="product-details.php?id=<?php //echo $row['bid'] ?>">
        <h3 style="border:none;margin-left: 10px;margin-top: 4px;"> <?php //echo $row['bookname'] ?> </h3></a>
    </div>-->
    
    
    
    <?php
			//}
				/*$qryapp="where catid ='Party Rental'";
				$query   = "SELECT COUNT(*) AS numrows FROM books ".$qryapp;
				//$query   = "SELECT COUNT(*) AS numrows FROM books";
				$result  = mysql_query($query) or die('Error, query failed');
				$row     = mysql_fetch_array($result, MYSQL_ASSOC);
				$numrows = $row['numrows'];
				$maxPage = ceil($numrows/$rowsPerPage);
				$self = $_SERVER['PHP_SELF'];
				$nav  = '';*/
			?>
            
            
            <div style="width:150px; color:#930; margin-left:25px;margin-bottom: 8px; font-size:18px">page: 
            <?php
			
				/*if($countstart>0) 
				{
					$tt=(($countstart-10)+1);
					$tt1=$countstart-10;
					$nav.="<a class='paging' href=\"$self?pg=1&countstart=0&curcode=$curcode\">|<<</a>";
					$nav.="&nbsp;<a class='paging' href=\"$self?pg=$tt&countstart=$tt1&cat=$cat&curcode=$curcode\"><<</a>&nbsp;";
				}
			  	if($pageNum<=$maxPage)
				{
					for($j=$countstart+1;$j<=$countstart+10;$j++)
					{
					if($j!=$pageNum&&$j<=$maxPage)
					{
						$nav.=" <a class='paging' href=\"$self?pg=$j&countstart=$countstart&cat=$cat&curcode=$curcode\">
					            <font style='color: #ff0000; font-weight: bold;'>$j</font></a> ";
					}
					else if($j<=$maxPage)
					{
						$nav.=$j;
					}
				}
				}			  
				if($j<=$maxPage)
				{
					$temp=($j-1);
					$temp1=($maxPage/10)*10;
					$nav.="&nbsp;<a  href=\"$self?pg=$j&countstart=$temp&cat=$cat&curcode=$curcode\">>></a>&nbsp;";
					$nav.="&nbsp;<a  href=\"$self?pg=$maxPage&countstart=$temp1&cat=$cat&curcode=$curcode\">>|</a>&nbsp;";
					if($pageNum=1&&$countstart==0&&$maxPage<1)
					$nav="";
				}
					echo $nav;*/
			?>
		</div>
    
    
    
  
</div>



</div>

</div>

</div>

</div>

</div></div>

<?php include "footer.php"; ?>
</body>

</html>
