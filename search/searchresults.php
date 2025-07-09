DOCTYPE HTML>
<html>

<head>

    <?php include '../header.php';?>

    <script type="text/javascript"></script>
    <script type="text/javascript">
        function getParameterByName(name) {
            name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
            var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
                results = regex.exec(location.search);
            return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
        }

        var searchTerm = getParameterByName('q');
	searchTerm = searchTerm.toLowerCase();
    </script>




    <script>
        var digitalData = digitalData || {};
        digitalData = {
            page: {
                pageName: "Search Results Page",
                siteSection: "Search Results Section",
                siteSubsection: "",
                server: "USA Server",
                searchTerm: searchTerm
            },
        };
    </script>




    <title>Global Clothiers|Search Results</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="robots" content="noindex, nofollow">
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
                <a href="../index.php" onmouseover="document.jj.src='../images/gc_logo.png'" onmouseout="document.jj.src='../images/gc_logo_black.png'">
                    <img src="../images/gc_logo_black.png" border="0" name="jj" />
                </a>
                <br />
            </div>
            <!--start search box-->
            <div class="rightheader">
                <div class="search_box">
                    <form action="../search/searchresults.php">
                        <input type="text" id="searchfield" name="q" />
                        <input type="submit" Value="Go" class="button">
                    </form>
                </div>
                <div class="checkout">
                    <a href="../checkout/shoppingcart.php">shopping cart</a>
                    <a href="../checkout/shipping1.php">checkout</a>
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
                                <li>
                                    <a href="../women/women.php" onmouseover="mopen('m2')" onmouseout="mclosetime()">WOMEN</a>
                                    <div id="m2" onmouseover="mcancelclosetime()" onmouseout="mclosetime()">
                                        <a href="../women/activewear/activewear.php">Activewear</a>
                                        <a href="../women/fineapparel/fineapparel.php">Fine Apparel</a>
                                        <a href="#">Footwear</a>
                                        <a href="#">Handbags</a>
                                    </div>
                                </li>
                                <li>
                                    <a href="../men/men.php" onmouseover="mopen('m3')" onmouseout="mclosetime()">MEN</a>
                                    <div id="m3" onmouseover="mcancelclosetime()" onmouseout="mclosetime()">
                                        <a href="../men/activewear/activewear.php">Activewear</a>
                                        <a href="../men/fineapparel/fineapparel.php">Fine Apparel</a>
                                        <a href="#">Footwear</a>
                                        <a href="#">Accessories</a>
                                    </div>
                                </li>
                                <li>
                                    <a href="#" onmouseover="mopen('m4')" onmouseout="mclosetime()">JEWELRY</a>
                                    <div id="m4" onmouseover="mcancelclosetime()" onmouseout="mclosetime()">
                                        <a href="#">Anniversary</a>
                                        <a href="#">Broaches</a>
                                        <a href="#">Forgive Me</a>
                                        <a href="#">Necklaces</a>
                                        <a href="#">Rings</a>
                                        <a href="#">Watches</a>
                                    </div>
                                </li>
                                <li>
                                    <a href="#" onmouseover="mopen('m5')" onmouseout="mclosetime()">HOME</a>
                                    <div id="m5" onmouseover="mcancelclosetime()" onmouseout="mclosetime()">
                                        <a href="#">Artwork</a>
                                        <a href="#">Bed & Bath</a>
                                        <a href="#">Chotskies</a>
                                        <a href="#">Floor Clocks</a>
                                        <a href="#">Furniture</a>
                                        <a href="#">Gourmet Food</a>
                                        <a href="#">Home Scents</a>
                                        <a href="#">Kitchen</a>
                                        <a href="#">Lighting</a>
                                        <a href="#">Patio & Garden</a>
                                        <a href="#">Wall Decor</a>
                                    </div>
                                </li>
                                <li>
                                    <a href="#" onmouseover="mopen('m6')" onmouseout="mclosetime()">CHILDREN</a>
                                    <div id="m6" onmouseover="mcancelclosetime()" onmouseout="mclosetime()">
                                        <a href="#">Accessories</a>
                                        <a href="#">Apparel</a>
                                        <a href="#">Bed & Bath</a>
                                        <a href="#">Shoes</a>
                                        <a href="#">Toys</a>
                                    </div>
                                </li>
                                <li>
                                    <a href="#" onmouseover="mopen('m7')" onmouseout="mclosetime()">ELECTRONICS</a>
                                    <div id="m7" onmouseover="mcancelclosetime()" onmouseout="mclosetime()">
                                        <a href="#">Audio</a>
                                        <a href="#">Cameras</a>
                                        <a href="#">Computers</a>
                                        <a href="#">Gadgets</a>
                                        <a href="#">Home Appliance</a>
                                        <a href="#">Home Theater</a>
                                        <a href="#">TV & Video</a>
                                    </div>
                                    <li>
                                        <a href="../company/company.php" onmouseover="mopen('m8')" onmouseout="mclosetime()">COMPANY</a>
                                        <div id="m8" onmouseover="mcancelclosetime()" onmouseout="mclosetime()">
                                            <a href="../company/chargecard_application1.php">GC Charge Card</a>
                                            <a href="../company/travel1.php">GC Travel</a>
                                            <a href="../company/newsletter1.php">GC Newsletter</a>
                                            <a href="../company/activation.php">Activation</a>
                                            <a href="../company/courselinks.php">Course Links</a>
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
            <br />
            <table border="0" height="250" width="800">
                <!---Form Start--->
                <td>
                    <table>
                        <tr>
                            <td>
                                <span style="font:20px Verdana;color:#F05A28;">Your search results for 
                           <span id="term" style="color:#0000ff;font-style:italic;"></span> are listed below
                                </span>
                            </td>
                        </tr>
                        <script type="text/javascript">
                            document.getElementById("term").innerHTML = searchTerm;
                        </script>
                        <div style="font:14px Verdana;color:cc9900;">
                            <tr>
                                <td>
                                    <span>
                              <a href="../women/activewear/fur_trim_ski_jacket.php">
                              <img src="https://ats-sb.adobe.com/jjsite/include/images/active2.jpg" height="100px" border="0" />
                              </span>
                                    <span>Fur Trim Ski Jacket
                              </a>
                              </span>
                                    <br />
                                    <br />
                                    <span>
                              <a href="../women/activewear/waist_puffer_jacket.php">
                              <img src="https://ats-sb.adobe.com/jjsite/include/images/active1.jpg" height="100px" border="0" />
                              </span>
                                    <span>Tie-Waist Puffer Jacket
                              </a>
                              </span>
                                    <br />
                                    <br />
                                    <span>
                              <a href="../women/activewear/frontzip_ski_jacket.php">
                              <img src="https://ats-sb.adobe.com/jjsite/include/images/active3.jpg" height="100px" border="0" />
                              </span>
                                    <span>Zip-Front Ski Jacket
                              </a>
                              </span>
                                </td>
                            </tr>
                        </div>
                    </table>
                </td>
            </table>
            <!---Form End--->
        </div>
        <!--start footer-->
        <span class="footer">
        </span>
    </div>
    <!--End footer-->
	<?php include '../footer.php';?>
</body>

</html>