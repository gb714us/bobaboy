<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang='en'>

<head>
    <meta charset="utf-8">
    <!-- This is all the metadata required for a website-->
    <meta title="description" content="description">
    <meta title="contents" content="contents">
    <meta name="viewport" content="width=device-width" initial-scale="1.0">
    <link rel="stylesheet" type="text/css" href="boba_style.css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,300' rel='stylesheet' type='text/css'>
    <script src="calculate.js"></script>
    <title>Moba Boba</title>

</head>

<body>
    <?php include 'include/nav.php';?>
    <div id="main">

        <div class="statement" style="text-align: center; height:auto; width:70%; margin: 0 auto; ">
        <p>ALL DRINKS ARE $3.00. BOBA IS ADDITIONAL 50&cent;.</p>
        <div style="display:block; margin-left: auto; margin-right: auto">
            <input type="button" name="DONE" value="DONE" onclick="calculate()" style="margin: 30px;">
        </div>
        </div>
        <div id="content" style="width:70%; margin: 0 auto;">
            <table id="products">
                <tr>
                    <td class="data">
                        <img src="images/almondmilktea.jpeg" alt="Almond Milk Tea" /> 
                        Almond Milk Tea
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
                        <td >
                            Quantity:
                            <select id="select-1" name="" >
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
                            Boba? <input type="checkbox" name="" value="">
                        </td>
                        <td style="display: block">
                            
                        <br />
                        <button type="submit" onclick="addToCart(1)">Add to cart</button>
                        </td>
                    </tr>
            </table>  
        </div>   
    </td>
    <td colspan="1" rowspan="1" headers="">
        <div class="form-container">
            <table class="order">
                    <tr>
                        <td >
                            Quantity:
                            <select id="select-2" name="" >
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
                            Boba? <input type="checkbox" name="" value="">
                        </td>
                        <td style="display: block">
                            
                        <br />
                        <button type="submit" onclick="addToCart(2)">Add to cart</button>
                        </td>
                    </tr>
            </table>  
        </div>   
    </td>
    <td colspan="1" rowspan="1" headers="">
        <div class="form-container">
            <table class="order">
                    <tr>
                        <td >
                            Quantity:
                            <select id="select-3" name="" >
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
                            Boba? <input type="checkbox" name="" value="">
                        </td>
                        <td style="display: block">
                            
                        <br />
                        <button type="submit" onclick="addToCart(3)">Add to cart</button>
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
                        <td >
                            Quantity:
                            <select id="select-4" name="" >
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
                            Boba? <input type="checkbox" name="" value="">
                        </td>
                        <td style="display: block">
                            
                        <br />
                        <button type="submit" onclick="addToCart(4)">Add to cart</button>
                        </td>
                    </tr>
            </table>  
        </div>   
    </td>
    <td colspan="1" rowspan="1" headers="">
        <div class="form-container">
            <table class="order">
                    <tr>
                        <td >
                            Quantity:
                            <select id="select-5" name="" >
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
                            Boba? <input type="checkbox" name="" value="">
                        </td>
                        <td style="display: block">
                            
                        <br />
                        <button type="submit" onclick="addToCart(5)">Add to cart</button>
                        </td>
                    </tr>
            </table>  
        </div>   
    </td>
    <td colspan="1" rowspan="1" headers="">
        <div class="form-container">
            <table class="order">
                    <tr>
                        <td >
                            Quantity:
                            <select id="select-6" name="" >
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
                            Boba? <input type="checkbox" name="" value="">
                        </td>
                        <td style="display: block">
                            
                        <br />
                        <button type="submit" onclick="addToCart(6)">Add to cart</button>
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
                        <td >
                            Quantity:
                            <select id="select-7" name="" >
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
                            Boba? <input type="checkbox" name="" value="">
                        </td>
                        <td style="display: block">
                            
                        <br />
                        <button type="submit" onclick="addToCart(7)">Add to cart</button>
                        </td>
                    </tr>
            </table>  
        </div>   
    </td>
    <td colspan="1" rowspan="1" headers="">
        <div class="form-container">
            <table class="order">
                    <tr>
                        <td >
                            Quantity:
                            <select id="select-8" name="" >
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
                            Boba? <input type="checkbox" name="" value="">
                        </td>
                        <td style="display: block">
                            
                        <br />
                        <button type="submit" onclick="addToCart(8)">Add to cart</button>
                        </td>
                    </tr>
            </table>  
        </div>   
    </td>
    <td colspan="1" rowspan="1" headers="">
        <div class="form-container">
            <table class="order">
                    <tr>
                        <td >
                            Quantity:
                            <select id="select-9" name="" >
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
                            Boba? <input type="checkbox" name="" value="">
                        </td>
                        <td style="display: block">
                            
                        <br />
                        <button type="submit" onclick="addToCart(9)">Add to cart</button>
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
                        <td >
                            Quantity:
                            <select id="select-10" name="" >
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
                            Boba? <input type="checkbox" name="" value="">
                        </td>
                        <td style="display: block">
                            
                        <br />
                        <button type="submit" onclick="addToCart(10)">Add to cart</button>
                        </td>
                    </tr>
            </table>  
        </div>   
    </td>
    <td colspan="1" rowspan="1" headers="">
        <div class="form-container">
            <table class="order">
                    <tr>
                        <td >
                            Quantity:
                            <select id="select-11" name="" >
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
                            Boba? <input type="checkbox" name="" value="">
                        </td>
                        <td style="display: block">
                            
                        <br />
                        <button type="submit" onclick="addToCart(11)">Add to cart</button>
                        </td>
                    </tr>
            </table>  
        </div>   
    </td>
    <td colspan="1" rowspan="1" headers="">
        <div class="form-container">
            <table class="order">
                    <tr>
                        <td >
                            Quantity:
                            <select id="select-12" name="" >
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
                            Boba? <input type="checkbox" name="" value="">
                        </td>
                        <td style="display: block">
                            
                        <br />
                        <button type="submit" onclick="addToCart(12)">Add to cart</button>
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
                        <td >
                            Quantity:
                            <select id="select-13" name="" >
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
                            Boba? <input type="checkbox" name="" value="">
                        </td>
                        <td style="display: block">
                            
                        <br />
                        <button type="submit" onclick="addToCart(13)">Add to cart</button>
                        </td>
                    </tr>
            </table>  
        </div>   
    </td>
    <td colspan="1" rowspan="1" headers="">
        <div class="form-container">
            <table class="order">
                    <tr>
                        <td >
                            Quantity:
                            <select id="select-14" name="" >
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
                            Boba? <input type="checkbox" name="" value="">
                        </td>
                        <td style="display: block">
                            
                        <br />
                        <button type="submit" onclick="addToCart(14)">Add to cart</button>
                        </td>
                    </tr>
            </table>  
        </div>   
    </td>
    <td colspan="1" rowspan="1" headers="">
        <div class="form-container">
            <table class="order">
                    <tr>
                        <td >
                            Quantity:
                            <select id="select-15" name="" >
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
                            Boba? <input type="checkbox" name="" value="">
                        </td>
                        <td style="display: block">
                            
                        <br />
                        <button type="submit" onclick="addToCart(15)">Add to cart</button>
                        </td>
                    </tr>
            </table>  
        </div>   
    </td>
</tr>
            </table>
        </div>
    </div>

</body>

</html>
