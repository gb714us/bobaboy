<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang='en'>

<head>
    <meta charset="utf-8">
    <!-- This is all the metadata required for a website-->
    <meta title="description" content="description">
    <meta title="contents" content="contents">
    <meta name="viewport" content="width=device-width" initial-scale="1.0">
    <link rel="stylesheet" type="text/css" href="styles/boba_style.css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,300' rel='stylesheet' type='text/css'>
    <script src="scripts/calculate.js"></script>
    <title>Moba Boba</title>
</head>

<body>
    <?php include 'include/nav.php';?>
    <div id="main">
        <div id="content">
            <form id="orderForm" action="scripts/processOrder.php" method="post">
                <fieldset>
                    <div class="statement" style="text-align: center; height:auto; width:70%; margin: 0 auto; ">
                        <p>ALL DRINKS ARE $3.00. BOBA IS ADDITIONAL 50&cent;.</p>
                        <div style="display:block; margin-left: auto; margin-right: auto">
                            Email: <input type="text" name ="email" size="30" />
                            <input type="submit" value="DONE" style="margin: 30px;"/>
                        </div>
                        <input type="hidden" id="order-result" name="order-result" value="<?php echo $messageToBusiness;?>"/>
                    </div>
                        <div id="content" style="width:70%; margin: 0 auto;">
                            <table id="products">
                                <tr>
                                    <td class="data">
                                        <img src="images/almondmilktea.jpeg" alt="Almond Milk Tea" /> Almond Milk Tea
                                    </td>
                                    <td class="data">
                                        <img src="images/caramelmilktea.jpeg" alt="Caramel Milk Tea" /> Caramel Milk Tea
                                    </td>
                                    <td class="data">
                                        <img src="images/chocolatemilktea.jpeg" alt="Chocolate Milk Tea" /> Chocolate Milk Tea
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="1" rowspan="1" headers="">
                                        <div class="form-container">
                                            <table class="order">
                                                <tr>
                                                    <td>
                                                        Quantity:
                                                        <select id="select-1" name="quantity-1" value="Almond Milk Tea">
                                                            <option value="0">0</option>
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
                                                            <option value="5">5</option>
                                                            <option value="6">6</option>
                                                            <option value="7">7</option>
                                                            <option value="8">8</option>
                                                        </select>
                                                    </td>
                                                    <td>
                                                        Boba?
                                                        <input type="checkbox" name="boba" value="boba">
                                                    </td>
                                                    <td style="display: block">
                                                        <br />
                                                        <input id="submitButton" type="button" value="Add to Cart" onclick="addToCart(1)">
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </td>
                                    <td colspan="1" rowspan="1" headers="">
                                        <div class="form-container">
                                            <table class="order">
                                                <tr>
                                                    <td>
                                                        Quantity:
                                                        <select id="select-2" name="quantity-2" value="Caramel Milk Tea">
                                                            <option value="0">0</option>
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
                                                            <option value="5">5</option>
                                                            <option value="6">6</option>
                                                            <option value="7">7</option>
                                                            <option value="8">8</option>
                                                        </select>
                                                    </td>
                                                    <td>
                                                        Boba?
                                                        <input type="checkbox" name="boba" value="boba">
                                                    </td>
                                                    <td style="display: block">
                                                        <br />
                                                        <input id="submitButton" type="button" value="Add to Cart" onclick="addToCart(2)">
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </td>
                                    <td colspan="1" rowspan="1" headers="">
                                        <div class="form-container">
                                            <table class="order">
                                                <tr>
                                                    <td>
                                                        Quantity:
                                                        <select id="select-3" name="quantity-3" value="Chocolate Milk Tea">
                                                            <option value="0">0</option>
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
                                                            <option value="5">5</option>
                                                            <option value="6">6</option>
                                                            <option value="7">7</option>
                                                            <option value="8">8</option>
                                                        </select>
                                                    </td>
                                                    <td>
                                                        Boba?
                                                        <input type="checkbox" name="boba" value="boba">
                                                    </td>
                                                    <td style="display: block">
                                                        <br />
                                                        <input id="submitButton" type="button" value="Add to Cart" onclick="addToCart(3)">
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="data">
                                        <img src="images/coconutmilktea.jpeg" alt="Coconut Milk Tea" /> Coconut Milk Tea
                                    </td>
                                    <td class="data">
                                        <img src="images/coffeemilktea.jpeg" alt="Coffee Milk Tea" /> Coffee Milk Tea
                                    </td>
                                    <td class="data">
                                        <img src="images/honeydewmilktea.jpeg" alt="Honeydew Milk Tea" /> Honeydew Milk Tea
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="1" rowspan="1" headers="">
                                        <div class="form-container">
                                            <table class="order">
                                                <tr>
                                                    <td>
                                                        Quantity:
                                                        <select id="select-4" name="quantity-4" value="Coconut Milk Tea">
                                                            <option value="0">0</option>
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
                                                            <option value="5">5</option>
                                                            <option value="6">6</option>
                                                            <option value="7">7</option>
                                                            <option value="8">8</option>
                                                        </select>
                                                    </td>
                                                    <td>
                                                        Boba?
                                                        <input type="checkbox" name="boba" value="boba">
                                                    </td>
                                                    <td style="display: block">
                                                        <br />
                                                        <input id="submitButton" type="button" value="Add to Cart" onclick="addToCart(4)">
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </td>
                                    <td colspan="1" rowspan="1" headers="">
                                        <div class="form-container">
                                            <table class="order">
                                                <tr>
                                                    <td>
                                                        Quantity:
                                                        <select id="select-5" name="quantity-5" value="Coffee Milk Tea">
                                                            <option value="0">0</option>
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
                                                            <option value="5">5</option>
                                                            <option value="6">6</option>
                                                            <option value="7">7</option>
                                                            <option value="8">8</option>
                                                        </select>
                                                    </td>
                                                    <td>
                                                        Boba?
                                                        <input type="checkbox" name="boba" value="boba">
                                                    </td>
                                                    <td style="display: block">
                                                        <br />
                                                        <input id="submitButton" type="button" value="Add to Cart" onclick="addToCart(5)">
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </td>
                                    <td colspan="1" rowspan="1" headers="">
                                        <div class="form-container">
                                            <table class="order">
                                                <tr>
                                                    <td>
                                                        Quantity:
                                                        <select id="select-6" name="quantity-6" value="Honeydew Milk Tea">
                                                            <option value="0">0</option>
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
                                                            <option value="5">5</option>
                                                            <option value="6">6</option>
                                                            <option value="7">7</option>
                                                            <option value="8">8</option>
                                                        </select>
                                                    </td>
                                                    <td>
                                                        Boba?
                                                        <input type="checkbox" name="boba" value="boba">
                                                    </td>
                                                    <td style="display: block">
                                                        <br />
                                                        <input id="submitButton" type="button" value="Add to Cart" onclick="addToCart(6)">
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="data">
                                        <img src="images/honeygreenmilktea.jpeg" alt="Honey Green Milk Tea" /> Honey Green Milk Tea
                                    </td>
                                    <td class="data">
                                        <img src="images/honeymilktea.jpeg" alt="Honey Milk Tea" /> Honey Milk Tea
                                    </td>
                                    <td class="data">
                                        <img src="images/tapiocamilktea.jpeg" alt="Tapioca Milk Tea" /> Tapioca Milk Tea
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="1" rowspan="1" headers="">
                                        <div class="form-container">
                                            <table class="order">
                                                <tr>
                                                    <td>
                                                        Quantity:
                                                        <select id="select-7" name="quantity-7" value="Honey Green Tea Milk Tea">
                                                            <option value="0">0</option>
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
                                                            <option value="5">5</option>
                                                            <option value="6">6</option>
                                                            <option value="7">7</option>
                                                            <option value="8">8</option>
                                                        </select>
                                                    </td>
                                                    <td>
                                                        Boba?
                                                        <input type="checkbox" name="boba" value="boba">
                                                    </td>
                                                    <td style="display: block">
                                                        <br />
                                                        <input id="submitButton" type="button" value="Add to Cart" onclick="addToCart(7)">
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </td>
                                    <td colspan="1" rowspan="1" headers="">
                                        <div class="form-container">
                                            <table class="order">
                                                <tr>
                                                    <td>
                                                        Quantity:
                                                        <select id="select-8" name="quantity-8" value="Honey Milk Tea">
                                                            <option value="0">0</option>
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
                                                            <option value="5">5</option>
                                                            <option value="6">6</option>
                                                            <option value="7">7</option>
                                                            <option value="8">8</option>
                                                        </select>
                                                    </td>
                                                    <td>
                                                        Boba?
                                                        <input type="checkbox" name="boba" value="boba">
                                                    </td>
                                                    <td style="display: block">
                                                        <br />
                                                        <input id="submitButton" type="button" value="Add to Cart" onclick="addToCart(8)">
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </td>
                                    <td colspan="1" rowspan="1" headers="">
                                        <div class="form-container">
                                            <table class="order">
                                                <tr>
                                                    <td>
                                                        Quantity:
                                                        <select id="select-9" name="quantity-9" value="Tapioca Milk Tea">
                                                            <option value="0">0</option>
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
                                                            <option value="5">5</option>
                                                            <option value="6">6</option>
                                                            <option value="7">7</option>
                                                            <option value="8">8</option>
                                                        </select>
                                                    </td>
                                                    <td>
                                                        Boba?
                                                        <input type="checkbox" name="boba" value="boba">
                                                    </td>
                                                    <td style="display: block">
                                                        <br />
                                                        <input id="submitButton" type="button" value="Add to Cart" onclick="addToCart(9)">
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="data">
                                        <img src="images/jasminemilktea.jpeg" alt="Jasmine Green Milk Tea" /> Jasmine Green Milk Tea
                                    </td>
                                    <td class="data">
                                        <img src="images/matchamilktea.jpeg" alt="Matcha Milk Tea" /> Matcha Milk Tea
                                    </td>
                                    <td class="data">
                                        <img src="images/redbeanmilktea.jpeg" alt="Red Bean Milk Tea" /> Red Bean Milk Tea
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="1" rowspan="1" headers="">
                                        <div class="form-container">
                                            <table class="order">
                                                <tr>
                                                    <td>
                                                        Quantity:
                                                        <select id="select-10" name="quantity-10" value="Jasmine Green Milk Tea">
                                                            <option value="0">0</option>
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
                                                            <option value="5">5</option>
                                                            <option value="6">6</option>
                                                            <option value="7">7</option>
                                                            <option value="8">8</option>
                                                        </select>
                                                    </td>
                                                    <td>
                                                        Boba?
                                                        <input type="checkbox" name="boba" value="boba">
                                                    </td>
                                                    <td style="display: block">
                                                        <br />
                                                        <input id="submitButton" type="button" value="Add to Cart" onclick="addToCart(10)">
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </td>
                                    <td colspan="1" rowspan="1" headers="">
                                        <div class="form-container">
                                            <table class="order">
                                                <tr>
                                                    <td>
                                                        Quantity:
                                                        <select id="select-11" name="quantity-11" value="Matcha Milk Tea">
                                                            <option value="0">0</option>
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
                                                            <option value="5">5</option>
                                                            <option value="6">6</option>
                                                            <option value="7">7</option>
                                                            <option value="8">8</option>
                                                        </select>
                                                    </td>
                                                    <td>
                                                        Boba?
                                                        <input type="checkbox" name="boba" value="boba">
                                                    </td>
                                                    <td style="display: block">
                                                        <br />
                                                       <input id="submitButton" type="button" value="Add to Cart" onclick="addToCart(11)">
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </td>
                                    <td colspan="1" rowspan="1" headers="">
                                        <div class="form-container">
                                            <table class="order">
                                                <tr>
                                                    <td>
                                                        Quantity:
                                                        <select id="select-12" name="quantity-12" value="Red Bean Milk Tea">
                                                            <option value="0">0</option>
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
                                                            <option value="5">5</option>
                                                            <option value="6">6</option>
                                                            <option value="7">7</option>
                                                            <option value="8">8</option>
                                                        </select>
                                                    </td>
                                                    <td>
                                                        Boba?
                                                        <input type="checkbox" name="boba" value="boba">
                                                    </td>
                                                    <td style="display: block">
                                                        <br />
                                                        <input id="submitButton" type="button" value="Add to Cart" onclick="addToCart(12)">
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="data">
                                        <img src="images/strawberrymilktea.jpeg" alt="Strawberry Milk Tea" /> Strawberry Milk Tea
                                    </td>
                                    <td class="data">
                                        <img src="images/taromilktea.jpg" alt="Taro Milk Tea" /> Taro Milk Tea
                                    </td>
                                    <td class="data">
                                        <img src="images/thaimilktea.jpeg" alt="Thai Milk Tea" /> Thai Milk Tea
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="1" rowspan="1" headers="">
                                        <div class="form-container">
                                            <table class="order">
                                                <tr>
                                                    <td>
                                                        Quantity:
                                                        <select id="select-13" name="quantity-13" value="Strawberry Milk Tea">
                                                            <option value="0">0</option>
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
                                                            <option value="5">5</option>
                                                            <option value="6">6</option>
                                                            <option value="7">7</option>
                                                            <option value="8">8</option>
                                                        </select>
                                                    </td>
                                                    <td>
                                                        Boba?
                                                        <input type="checkbox" name="boba" value="boba">
                                                    </td>
                                                    <td style="display: block">
                                                        <br />
                                                        <input id="submitButton" type="button" value="Add to Cart" onclick="addToCart(13)">
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </td>
                                    <td colspan="1" rowspan="1" headers="">
                                        <div class="form-container">
                                            <table class="order">
                                                <tr>
                                                    <td>
                                                        Quantity:
                                                        <select id="select-14" name="quantity-14" value="Taro Milk Tea">
                                                            <option value="0">0</option>
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
                                                            <option value="5">5</option>
                                                            <option value="6">6</option>
                                                            <option value="7">7</option>
                                                            <option value="8">8</option>
                                                        </select>
                                                    </td>
                                                    <td>
                                                        Boba?
                                                        <input type="checkbox" name="boba" value="boba">
                                                    </td>
                                                    <td style="display: block">
                                                        <br />
                                                        <input id="submitButton" type="button" value="Add to Cart" onclick="addToCart(14)">
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </td>
                                    <td colspan="1" rowspan="1" headers="">
                                        <div class="form-container">
                                            <table class="order">
                                                <tr>
                                                    <td>
                                                        Quantity:
                                                        <select id="select-15" name="quantity-15" value="Thai Milk Tea">
                                                            <option value="0">0</option>
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
                                                            <option value="5">5</option>
                                                            <option value="6">6</option>
                                                            <option value="7">7</option>
                                                            <option value="8">8</option>
                                                        </select>
                                                    </td>
                                                    <td>
                                                        Boba?
                                                        <input type="checkbox" name="boba" value="boba">
                                                    </td>
                                                    <td style="display: block">
                                                        <br />
                                                        <input id="submitButton" type="button" value="Add to Cart" onclick="addToCart(15)">
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
</body>
</html>
