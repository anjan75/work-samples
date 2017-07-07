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
	 if(isset($_REQUEST['curcode'])&&$_REQUEST['curcode']!="")
    {	
	    $curcode = $_REQUEST['curcode'];
    }

    $qry = "select * from books where bid=$slno";
	//echo $qry;
    $rs=mysql_query($qry) or die("Error :" .mysql_error());
    $row=mysql_fetch_assoc($rs) or die(mysql_error());
	$bname=$row['bookname'];
	$desc=$row['desc'];
	
	if(isset($_REQUEST['id']))
	{
		//$free=0;
		$str_path="catalogue_image.php?id=".$row['bid'];
		//$str_path_free="free_image.php?id=".$row['bid'];	
	}
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
<h3> Product Details  <input type="button" value="Go Back" onclick="window.history.back()" style="float:right; color:#F00" /></h3>

<div class="prds1">
	<div class="prds_img1" style="margin-top:10px; float:left;">
    	<a href="#">
        
        <img src="<?php echo $str_path ?>" border="0" style="width:100%; height:100%;"  />
        </a>
    </div>
    <br /><br /><br />
  	<div class="prds_img1 prdtl">
    <h2> <?php echo $bname;?>  </h2>
        <!--<b>Attachments:</b><br />
        Backhoe<br />
        6 ft. tiller<br />
        6 ft. shredder<br />
        Hay Spear<br />
        Pallet Fork<br />
        6 ft. Disk<br />
        Box Blade<br />-->
        <?php echo $desc;?>
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
<!--
<a href="#"><img src="images/5321.png" style="position:absolute; bottom:0; left:0; top:800px; cursor:default;" /></a>
<a href="#"><img src="images/5321.png" style="position:absolute; bottom:0; right:0; top:800px; cursor:default;" /></a>

<a href="#"><img src="images/flwr.png" style="position:absolute; top:0; right:0; height: 600px;width: 132px;cursor:default;" /></a>
<a href="#"><img src="images/flwr.png" style="position:absolute; top:0; left:0; height: 600px;width: 132px;cursor:default;" /></a>-->