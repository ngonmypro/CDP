<?
	session_start();
	date_default_timezone_set('Asia/Bangkok'); //set timezone ให้ตรงกับประเทศไทย
	
	include "Connections/create_new_db.php";
	include "Connections/create_new_tb.php";

?>
<!DOCTYPE html>
<html dir="ltr" lang="en-US">

<head><!-- Created by Artisteer v4.1.0.59688 -->
    <meta charset="utf-8">
    <title> Rewards Point </title>
    <meta name="viewport" content="initial-scale = 1.0, maximum-scale = 1.0, user-scalable = yes, width = device-width">

    <!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <link rel="stylesheet" href="style.css" media="screen">
    <!--[if lte IE 7]><link rel="stylesheet" href="style.ie7.css" media="screen" /><![endif]-->
    <link rel="stylesheet" href="style.responsive.css" media="all">
    
    <!-- // เรียกใช้ Bootstrap stylesheet -->
    <!--<link href="css/bootstrap.css" rel="stylesheet" />
     <link href="css/bootstrap-responsive.css" rel="stylesheet" />-->
    <link href="css/bootstrap.min.css" rel="stylesheet" />
	<link href="css/bootstrap-responsive.min.css" rel="stylesheet"  />
    
    <!-- // เรียกใช้ Bootstrap javascript -->
  	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>

    <!-- // เรียกใช้ Template javascript -->
	<script src="jquery.js"></script>
    <script src="script.js"></script>
    <script src="script.responsive.js"></script>
    
    <!-- // เรียกใช้ javascript ajax -->
    <script src="ajax/ajax_framework.js"></script>
    <script src="ajax/function.js"></script>
    
    <!--  // กำหนด favicon // -->
    <link rel="shortcut icon" href="images/favicon.ico">

<style>.art-content .art-postcontent-0 .layout-item-0 { padding-right: 10px;padding-left: 10px;  }
.ie7 .art-post .art-layout-cell {border:none !important; padding:0 !important; }
.ie6 .art-post .art-layout-cell {border:none !important; padding:0 !important; }

</style>

<style>
/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 130%; /* Full width */
    height: 130%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
    position: relative;
    background-color: #fefefe;
    margin: auto;
    padding: 0;
    border: 1px solid #888;
    width: 50%;
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
    -webkit-animation-name: animatetop;
    -webkit-animation-duration: 0.4s;
    animation-name: animatetop;
    animation-duration: 0.4s
}

/* Add Animation */
@-webkit-keyframes animatetop {
    from {top:-300px; opacity:0}
    to {top:0; opacity:1}
}

@keyframes animatetop {
    from {top:-300px; opacity:0}
    to {top:0; opacity:1}
}

/* The Close Button */
.close {
    color: white;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}

.modal-header {
    padding: 2px 16px;
    background-color: #5cb85c;
    color: white;
}

.modal-body {padding: 2px 16px;}

.modal-footer {
    padding: 2px 16px;
    background-color: #5cb85c;
    color: white;
}
</style>


<!-- //// --->


</head>

<body onLoad="maxWindow();">
<div id="art-main">
	<div class="art-sheet clearfix">
    	<!--
		<nav class="art-nav clearfix">
    		<ul class="art-hmenu">
            	<li><a href="javascript:loaddatatable()" class="active">Home</a></li>
                
              <!--  <li><a href="#">Events</a></li>
                <li><a href="#">Calendar</a></li>
                <li><a href="#">Members</a></li>
                <li><a href="#">Photos</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Location</a></li> -->
      <!--          
            </ul> 
    	</nav>
        -->
<div class="art-layout-wrapper clearfix">
	<div class="art-content-layout">
		<div class="art-content-layout-row">
			<div class="art-layout-cell art-content clearfix">
            	<article class="art-post art-article">                
                	<div class="art-postcontent art-postcontent-0 clearfix">
                		<div class="art-content-layout">
    						<div class="art-content-layout-row">
                            	<div id="dt1" class="art-layout-cell layout-item-0" style="width: 100%" >
                            	
                            <!-- ///// --->
                            	<div style="text-align:center; margin-top:30px;">
                                	<form action="index.php" method="post" enctype="multipart/form-data" name="from_syear" target="_parent" class="form-inline">		
                                    	<select name="syear" style="width:300px;">
                                        	<option value="59">1 พฤศจิกายน 2558 - 31 ตุลาคม 2559</option>
                                            <option value="60" selected>1 พฤศจิกายน 2559 - 31 ตุลาคม 2560</option>
                                        </select>
                                        <input name="b_syear" type="submit" value="ดูข้อมูลแต้มสะสม" class="btn-info">
                                    </form>
                                </div>
                            
    							<!--<div class="art-layout-cell layout-item-0" style="width: 60%" > <!--/// เริ่ม คอลัมน์ 1-->
        							<!--<p></p>
        							<p><span style="font-weight:bold;"></span></p>
        							<p></p>
        							<p></p>-->
    							<!--</div><!--/// จบ คอลัมน์ 1-->
    							<!--<div class="art-layout-cell layout-item-0" style="width: 40%" ><!--/// เริ่ม คอลัมน์ 2-->
        							<!--<h2></h2>
        							<p>
                                    <!--
                                    	<span style="font-style:italic;">
                                    		<img width="48" height="48" alt="" src="images/4_48x48.png">&nbsp;
                                    	</span>
                                    	<img width="48" height="48" alt="" src="images/44_48x48.png">&nbsp;
                                    	<img width="48" height="48" alt="" src="images/51_48x48.png">&nbsp;
                                    	<img width="48" height="48" alt="" src="images/591_48x48.png">&nbsp;
                                    	<img width="48" height="48" alt="" src="images/592_48x48.png" class="">
                                     -->
                                    <!--</p>
        							<br>
        							<h3></h3>
        							<h4></h4>
        							<p><span style="font-style: italic;"></span></p>
        							<p></p>
        							<h4></h4>
        							<p><span style="font-style: italic;"></span></p>
        							<p></p>
        							<h4></h4>
        							<p><span style="font-style: italic;"></span></p>
        							<p></p> -->
    							<!--</div><!--/// จบ คอลัมน์ 2-->
                                
                                
                                <!-- ///// --->
                                </div>
    						</div>
						</div>
					</div>
				</article>
          	</div>
       	</div>
    </div>
</div>

<footer class="art-footer clearfix">
<div class="art-content-layout">
    <div class="art-content-layout-row">
    <div class="art-layout-cell layout-item-0" style="width: 100%">
        <p>Copyright © 2016-2020, YongHouse Inc., All Rights Reserved. Icons by IT YongHouse</p>
    </div>
    </div>
</div>
</footer>

</div>
    <p class="art-page-footer">
        <span id="art-footnote-links"></span>
    </p>
</div>

<!-- //// --->


<!-- The Modal -->
<div id="myModal" class="modal">

<!-- Modal content -->
 	<div class="modal-content">
    <div class="modal-header" style="font-family:BrowalliaUPC, AngsanaUPC;">
      <span class="close" onClick="hidemd();">x</span>
      <h2><div id="hdmd">Modal Header</div></h2>
    </div>
    <div class="modal-body">
      <!--<p>Some text in the Modal Body</p>
      <p>Some other text...</p>-->
    </div>
    <div class="modal-footer" style="font-family:BrowalliaUPC, AngsanaUPC; text-align:center;">
      <h1>
      	<div id="ftmd" style="font-size:36px;">
        	<div id="ftmd1">Modal Footer</div>
            <div id="ftmd2"></div>
        </div>
      </h1>
    </div>
  </div>

</div>
<!-- The Modal -->

<!-- Trigger/Open The Modal 
<button id="myBtn" onClick="showmd();">Open Modal</button> -->

<script>
// Get the modal
var modal = document.getElementById('myModal');

function showmd(dt1,dt2,dt3,dt4){
	$("#hdmd").html("" + dt1 + " : " + dt2);
	$("#ftmd1").html("แต้มสะสม = " + dt4 + " คะแนน");
	$("#ftmd2").html("เปอร์เซนต์ยอดขายเปรียบเที่ยบกับปีก่อน = " + dt3 + "");
	modal.style.display = "block";
}

function hidemd(){
	modal.style.display = "none";
}
// Get the button that opens the modal
//var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
//var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal
//btn.onclick = function() {
  //  modal.style.display = "block";
//}

// When the user clicks on <span> (x), close the modal
//span.onclick = function() {
  //  modal.style.display = "none";
//}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

</script>

</body>
</html>