<!DOCTYPE HTML>
<html>

<head>

    <?php include '../header.php';?>


    <script>
        var digitalData = digitalData || {};
        digitalData = {
            page: {
                pageName:"Payment Page",
                siteSection:"Checkout Section",
                server:"USA Server"
            },
			product: {
				productEvent:"Shipping",
				productID:"201233",
				productName:"Tuxedo"
			},
        };
    </script>


    <title>GlobalClothiers|Checkout|Payment Step 2</title>
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

                <div class="checkout"><a href="../checkout/shoppingcart.php">shopping cart</a>
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

                                <li><a href="../women/women.php" onmouseover="mopen('m2')" onmouseout="mclosetime()">WOMEN</a>
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
                                <li><a href="#" onmouseover="mopen('m4')" onmouseout="mclosetime()">JEWELRY</a>

                                    <div id="m4" onmouseover="mcancelclosetime()" onmouseout="mclosetime()">
                                        <a href="#">Anniversary</a>
                                        <a href="#">Broaches</a>
                                        <a href="#">Forgive Me</a>
                                        <a href="#">Necklaces</a>
                                        <a href="#">Rings</a>
                                        <a href="#">Watches</a>
                                    </div>

                                </li>
                                <li><a href="#" onmouseover="mopen('m5')" onmouseout="mclosetime()">HOME</a>
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
                                <li><a href="#" onmouseover="mopen('m7')" onmouseout="mclosetime()">ELECTRONICS</a>
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
                                            <a href="../company/activation_dtm.php">Activation (DTM)</a>
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
            <table border="0" height="250" width="700" style="margin-left:30px;">
                <td>
                    <table>
                        <tr>
                            <td>
                                <img src="https://ats-sb.adobe.com/jjsite/include/images/currency.jpg" class="photo" height="450" width="299">
                            </td>
                        </tr>
                    </table>
                </td>

                <!---Form Start--->
                <td class="search_title">
                    <table>
                        <form action="orderreview3.php">
                            <tr>
                                <td>
                                    Payment Method:
                                </td>
                                <td>
                                    <select name="creditcard" size="1" class="textinput">
                                        <option>American Express</option>
                                        <option>BC Card</option>
                                        <option>BCA Card</option>
                                        <option>Carte Bleue</option>
                                        <option>China UnionPay</option>

                                        <option>Dankort</option>
                                        <option>Diners Club</option>
                                        <option>Discover Card</option>
                                        <option>EFTPOS</option>
                                        <option>GiroCard</option>
                                        <option>Interac</option>
                                        <option>JCB</option>
                                        <option>Laser</option>
                                        <option>Maestro</option>
                                        <option>MasterCard</option>
                                        <option>NETS</option>
                                        <option>RuPay</option>
                                        <option>Solo</option>
                                        <option>Visa</option>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    Card Number:
                                </td>
                                <td>
                                    <input type="text" name="cardnumber" class="textinput" size="20" value="44441112223333">
                                </td>
                            </tr>


                            <tr>
                                <td>
                                    Security Code:
                                </td>
                                <td>
                                    <input type="text" name="security" class="textinput" size="4" value="2420">
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    Name on Card:
                                </td>
                                <td>
                                    <input type="text" name="cardname" class="textinput" size="20" value="Col Douglas">
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    Expiration:
                                </td>
                                <td>
                                    <select name="month" size="1" class="textinput">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>

                                        <option>6</option>
                                        <option>7</option>
                                        <option>8</option>
                                        <option>9</option>
                                        <option>10</option>
                                        <option>11</option>
                                        <option selected="selected">10</option>
                                </td>
                                <td>
                                    <select name="year" size="1" class="textinput">

                                        <option>2010</option>
                                        <option>2011</option>
                                        <option>2012</option>
                                        <option>2013</option>
                                        <option>2014</option>
                                        <option>2015</option>
                                        <option>2016</option>
                                        <option>2017</option>
                                        <option selected="selected">2020</option>

                                        <option>2019</option>
										<option>2020</option>
										<option>2021</option>
										<option>2022</option>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    &nbsp; &nbsp;
                                </td>
                            </tr>


                            <tr>
                                <td>
                                    <input type="submit" value="Next" class="button">
                                </td>

                            </tr>

                        </form>

                </td>
                </tr>
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