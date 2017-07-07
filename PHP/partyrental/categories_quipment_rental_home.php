<?php

session_start();

include 'connection.php';

		//echo $_SESSION['currency'];

//$_SESSION['currprice']=="";

    if(isset($_REQUEST['id'])&&$_REQUEST['id']!="")

    {	

	    $slno = $_REQUEST['id'];// here reading the book id

		

		//echo "Our requested id is :". $slno;

    }

	 if(isset($_REQUEST['cat'])&&$_REQUEST['cat']!="")

    {	

	    $cat = $_REQUEST['cat'];

    }

	 if(isset($_REQUEST['subcat'])&&$_REQUEST['subcat']!="")

    {	

	    $subcat = $_REQUEST['subcat'];

    }

	if(isset($_REQUEST['subsubcat'])&&$_REQUEST['subsubcat']!="")

    {	

	    $subcat_pro = $_REQUEST['subsubcat'];

    }

	$rowsPerPage = 27;

	$pageNum = 1;

	$countstart=0;

	if(isset($_REQUEST['pg']))

	{

		$pageNum=$_REQUEST['pg'];

		if(isset($_REQUEST['countstart']))

		$countstart=$_REQUEST['countstart'];

	}		

	$offset = (($pageNum - 1) * $rowsPerPage);



   /* $qry = "select * from books where subcat=$cat";

	//echo $qry;

    $rs=mysql_query($qry) or die("Error :" .mysql_error());

    $row=mysql_fetch_assoc($rs) or die(mysql_error());

	$bname=$row['bookname'];

	

	if(isset($_REQUEST['id']))

	{

		//$free=0;

		$str_path="catalogue_image.php?id=".$row['bid'];

		//$str_path_free="free_image.php?id=".$row['bid'];	

	}*/

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





<link rel="stylesheet" href="css/responsivemobilemenu.css" type="text/css"/>

<script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>

<script type="text/javascript" src="js/responsivemobilemenu.js"></script>

<link href="css/responsive.css" rel="stylesheet" type="text/css" />



</head>



<body>



<div id="main">







<!--header start-->



<?php include "header.php"; ?>



<!--header ends-->











<div id="body_main" style="float:none; margin:0 auto;">



<div id="welcome_main" style="background-color:#FFFFFF; min-height:400px;">



<div id="welcome_heading"><h1 class="welcome_text1">Our Categorys</h1> </div>



<div id="welcometext" class="detail_txt">



<div class="cnt-lft">

<h3> Our Categorys </h3>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>

	<script type="text/javascript">

	$(document).ready(function() {

		$("li").click(function(){

			$(this).toggleClass("active");

			$(this).next("div").stop('true','true').slideToggle("slow");

		});

	});

	</script>

	<style>

		#toggle ul{width:100%;}

		#toggle ul li:hover{background:#FFFFE0}

		#toggle ul li{list-style-type:none; cursor:pointer; -moz-border-radius:0 10px 0 10px; margin:2px; padding:5px 5px 5px 5px;}

		#toggle ul div{color: #666666; cursor: auto; display: none; font-size: 13px; padding: 5px 0 5px 20px; text-decoration: none; }

		#toggle ul div a{color:#000000; font-weight:bold;}

		#toggle ul li div:hover{text-decoration:none !important;}

		#toggle ul li:before {content: "+"; padding:10px 10px 10px 0; color:red; font-weight:bold;}

		#toggle ul li.active:before {content: "-"; padding:10px 10px 10px 0; color:red; font-weight:bold;}

		#toggle{margin:0 auto;}

	</style>

<div id="toggle">

<ul>

  <?php

$str1="select * from manage_category where currency='Equipment Rental' group by price";

$rs1=mysql_query($str1) or die("Q Error".mysql_error());

$num1=mysql_num_rows($rs1) or die("No Records In the Database");

$i=0;

while($row=mysql_fetch_assoc($rs1))

{

$subcat =$row['price'];

?>

<li><a><?php echo $row['price']?></a></li>



<div>

<?php

$str1_subcat="select * from manage_category where price='$subcat'";



$rs1_subcat=mysql_query($str1_subcat) or die("Q Error".mysql_error());

$num1_subcat=mysql_num_rows($rs1_subcat) or die("No Records In the Database");

$i=0;

while($row_subcat=mysql_fetch_assoc($rs1_subcat))

{

$subcat= $row_subcat['price2'];

?>

	<a href="categories_quipment_rental.php?subsubcat=<?php echo $row_subcat['price2'] ?>"> <?php echo $row_subcat['price2']?> </a>

    <hr> 

<?php

}

?>

</div>



<?php } ?>







</ul>

</div>



</div>



<div class="cnt-rgt">

<h3 class="ftf ftf1"> Party Rental </h3>

<h3 class="ftf ftf2"> click on image for product details <!--Click On Image For Product Details--> </h3>

<div class="prds">

<?php	

			$subcat = $_REQUEST['subcat'];	  	

			//$str_1="select * from books where status=0 order by bid desc LIMIT $offset, $rowsPerPage";

			$str_1="select * from books where subcat='$subcat' and catid ='Equipment Rental' order by bookname LIMIT $offset, $rowsPerPage";

			//echo $str_1;

			$rs_1=mysql_query($str_1) or die(mysql_error());

		  	$dbcount=mysql_num_rows($rs_1);

			$count=0;

          	while($row=mysql_fetch_assoc($rs_1))

          	{

             	

		  ?>

	<div class="prds_img">

    	<a href="product-details-equip.php?id=<?php echo $row['bid'] ?>">

        <img src="thumb_image.php?id=<?php echo $row['bid']?>" width="100%" class="mnt">

        </a>

        <a href="product-details.php?id=<?php echo $row['bid'] ?>">

        <h3 style="border:none;margin-left: 10px;margin-top: 4px;"> <?php echo $row['bookname'] ?> </h3></a>

    </div>

    

    

    

    <?php

			}

				$qryapp="where subcat='$subcat' and catid ='Equipment Rental'";

				$query   = "SELECT COUNT(*) AS numrows FROM books ".$qryapp;

				//$query   = "SELECT COUNT(*) AS numrows FROM books";

				$result  = mysql_query($query) or die('Error, query failed');

				$row     = mysql_fetch_array($result, MYSQL_ASSOC);

				$numrows = $row['numrows'];

				$maxPage = ceil($numrows/$rowsPerPage);

				$self = $_SERVER['PHP_SELF'];

				$nav  = '';

			?>

            

            

            <div style="width:150px; color:#930; margin-left:25px;margin-bottom: 8px; font-size:18px">page: 

            <?php

			

				if($countstart>0) 

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

					echo $nav;

			?>

		</div>

    

    

    

  

</div>







</div>







</div>





</div>



</div>



</div>



</div>



<div style="margin-top:20px;">

</div>

<?php include "footer.php"; ?>

</body>







</html>



<!--<a href="#"><img src="images/5321.png" style="position:absolute; bottom:0; left:0; top:700px; cursor:default;" /></a>

<a href="#"><img src="images/5321.png" style="position:absolute; bottom:0; right:0; top:700px; cursor:default;" /></a>



<a href="#"><img src="images/flwr.png" style="position:absolute; top:0; right:0; height: 600px;width: 132px;cursor:default;" /></a>

<a href="#"><img src="images/flwr.png" style="position:absolute; top:0; left:0; height: 600px;width: 132px;cursor:default;" /></a>-->