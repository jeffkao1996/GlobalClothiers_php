<!DOCTYPE HTML>
<html>

<head>
    <?php include 'header.php';?>
    
	<script>
        var digitalData = digitalData || {};
        digitalData = {
            page: {
                pageName: "Login Page",
                siteSection: "Login Section",
                siteSubsection: "",
                server: "USA Server"
            },
            customer: {
                loginStatus: "",
            },
        };
    </script>
	
<script>

function logIn() {
document.getElementById("loginStatus").innerHTML = "Welcome to Global Clothiers! You're logged in!";
}
</script>

<script>
function logOut() {
document.getElementById("loginStatus").innerHTML = "Happy trails! You're logged out.";
}

</script>


    <title>Global Clothiers</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="robots" content="noindex, nofollow">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script type="text/javascript" src="https://ats-sb.adobe.com/jjsite/include/scripts/menu.js"></script>
    <!--<script type="text/javascript" src="https://ats-sb.adobe.com/jjsite/include/scripts/searchfield.js"></script> -->
    <script type="text/javascript" src="https://ats-sb.adobe.com/jjsite/include/scripts/simpleCart.js"></script>
    <script language="JavaScript" type="text/javascript">
        window.onunload = function() {
            void(0)
        }
    </script>
    <script language="JavaScript">
        <!--if (document.images) {pic1= new Image(200,70); pic1.src="../images/gc_logo.png";}//-->
    </script>
    <style type="text/css">
        @import url(https://ats-sb.adobe.com/jjsite/include/css/jje.css);
        @import url(https://ats-sb.adobe.com/jjsite/include/css/menu.css);
    </style>
    <link rel="shortcut icon" href="https://ats-sb.adobe.com/jjsite/include/images/jj1.ico">
</head>

<body>
    <div id="superwrap">
        <div id="wrapper">
            <!--start logo and head-->
            <div class="head_logo">
                <a href="index.php" onmouseover="document.jj.src='../images/gc_logo.png'" onmouseout="document.jj.src='../images/gc_logo_black.png'"><img src="../images/gc_logo_black.png" border="0" name="jj" />
                </a>
                <br />
            </div>
            <!--start search box-->
            <div class="rightheader"><span class="search_box"><form action="search/searchresults.php"><input type="text" id="searchfield" name="q" /><input type="submit" Value="Go" class="button"><!--<form id="searchform" action="" method="post" name="cf"><input type="text" id="searchfield" name="searchfield" value="" /><input type="button" Value="Go" onClick="putCookie();parent.location='search/redirect.php'">--></form> </span>
                <div class="checkout"><a href="checkout/shoppingcart.php">shopping cart</a><a href="checkout/shipping1.php">checkout</a>
                </div>
            </div>
            <!--end search box-->
            <!--end logo and head-->
			
			
            <!--start top nav-->
            <table width=800>
                <tr>
                    <div class="head_tabs_bar">
                        <div id="menu">
                            <!--Menu Start-->
                            <ul id="sddm">
                                <li><a href="women/women.php" onmouseover="mopen('m2')" onmouseout="mclosetime()">WOMEN</a>
                                    <div id="m2" onmouseover="mcancelclosetime()" onmouseout="mclosetime()"><a href="women/activewear/activewear.php">Activewear</a><a href="women/fineapparel/fineapparel.php">Fine Apparel</a><a href="#">Footwear</a><a href="#">Handbags</a>
                                    </div>
                                </li>
                                <li><a href="men/men.php" onmouseover="mopen('m3')" onmouseout="mclosetime()">MEN</a>
                                    <div id="m3" onmouseover="mcancelclosetime()" onmouseout="mclosetime()"><a href="men/activewear/activewear.php">Activewear</a><a href="men/fineapparel/fineapparel.php">Fine Apparel</a><a href="#">Footwear</a><a href="#">Accessories</a>
                                    </div>
                                </li>
                                <li><a href="#" onmouseover="mopen('m4')" onmouseout="mclosetime()">JEWELRY</a>
                                    <div id="m4" onmouseover="mcancelclosetime()" onmouseout="mclosetime()"><a href="#">Anniversary</a> <a href="#">Broaches</a><a href="#">Forgive Me</a><a href="#">Necklaces</a><a href="#">Rings</a><a href="#">Watches</a> </div>
                                </li>
                                <li><a href="#" onmouseover="mopen('m5')" onmouseout="mclosetime()">HOME</a>
                                    <div id="m5" onmouseover="mcancelclosetime()" onmouseout="mclosetime()"><a href="#">Artwork</a><a href="#">Bed & Bath</a><a href="#">Chotskies</a><a href="#">Floor Clocks</a><a href="#">Furniture</a><a href="#">Gourmet Food</a><a href="#">Home Scents</a><a href="#">Kitchen</a><a href="#">Lighting</a><a href="#">Patio & Garden</a><a href="#">Wall Decor</a>
                                    </div>
                                </li>
                                <li><a href="#" onmouseover="mopen('m6')" onmouseout="mclosetime()">CHILDREN</a>
                                    <div id="m6" onmouseover="mcancelclosetime()" onmouseout="mclosetime()"><a href="#">Accessories</a><a href="#">Apparel</a><a href="#">Bed & Bath</a><a href="#">Shoes</a><a href="#">Toys</a>
                                    </div>
                                </li>
                                <li><a href="#" onmouseover="mopen('m7')" onmouseout="mclosetime()">ELECTRONICS</a>
                                    <div id="m7" onmouseover="mcancelclosetime()" onmouseout="mclosetime()"><a href="#">Audio</a><a href="#">Cameras</a><a href="#">Computers</a><a href="#">Gadgets</a><a href="#">Home Appliance</a><a href="#">Home Theater</a><a href="#">TV & Video</a>
                                    </div>
                                    <li>

                                        <a href="company/company.php" onmouseover="mopen('m8')" onmouseout="mclosetime()">COMPANY</a>
                                        <div id="m8" onmouseover="mcancelclosetime()" onmouseout="mclosetime()">
                                            <a href="company/chargecard_application1.php">GC Charge Card</a>
                                            <a href="company/travel1.php">GC Travel</a>
                                            <a href="company/newsletter1.php">GC Newsletter</a>
                                            <a href="company/activation.php">Activation</a>
                                            <a href="company/courselinks.php">Course Links</a>
                                        </div>
                                    </li>
                                </li>
                            </ul>
                            <!--Menu End-->
						
						
						
                        </div>
                    </div>
                    <br clear="all">
                </tr>
            </table>
            <!--end top nav-->
	
	
	
	
            <!---------------------->
            <!--start page content-->
            <!---------------------->
            <div style="margin:6px 0px 0px -3px;">
                <table border="0">
                    <td>
                        <!---Form Start--->
                        <td>
                            <table><span class="description">Log into Global Clothiers<br/><br/></span>
                                <div class="form">
                                    <form method="post" action="login.php">
                                        <tr>
                                            <td class="search_title">User Name:</td>
                                            <td>
                                                <input type="text" name="loginName" class="textinput" size="20" value="troosevelt">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="search_title">Password:</td>
                                            <td>
                                                <input type="text" name="loginPassword" class="textinput" size="20" value="*********">
                                            </td>
                                        </tr>
					</form>
                                        <tr>
                                            <td>&nbsp;&nbsp;&nbsp;</td>
                                        </tr>
					           
                                        <tr>
					    <td>
					    </td>		
                                            <td>
                                                <input type="button" value="Log In" class="button" onclick="logIn()" />
						<br/>
						<br/>			
						<input type="button" value="Log Out" class="button"  onclick="logOut()"/>
                                            </td>
                                        </tr>
					
                                </div>
                        </td>
                        </tr>
                        </table>
                    </td>
                </table>

                <!---Form End--->

                </td>
                </table>

                                <div style="font:16px Verdana;color:#F05A28;margin:50px 0px 0px 20px;"> 
                           <span id="loginStatus"></span>
                                </div>

                <br />
            </div>
        </div>
    </div>
	<?php include 'footer.php';?>

</body>

</html>