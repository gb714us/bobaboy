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
    <title>Moba Boba</title>
</head>

<body>
    <?php include 'include/nav.php';?>
    <div id="main">
        <div id="content" style="float: left;">
            <form id = "profileForm" onsubmit="return processForm();" action="scripts/processFeedback.php" method="post">
              <fieldset>
                <table id="formStructure">
                    <tr><td>
                <table id="formOrder">
                  <tr>
                    <th colspan="2"><h1>Review Us!</h1></th>
                  </tr>
                  <tr>
                      <td>Name:</td>
                      <td><input type="text" name ="name" size="30" /></td>
                      <tr>
                      <td>Email:</td>
                      <td><input type="text" name ="email" size="30" /></td>
                      </tr>
                      <tr>
                      <td>Phone Number:</td>
                      <td><input type="text" name ="phone" size="30" /></td>
                      </tr>
                      <tr>
                      <td>Your Order:</td>
                      <td>
                        <form id="orderSelection" action="">
                          <div class="drink" align="left">
                            <input type="checkbox" name="drink[]" value="Almond Milk Tea" />Almond Milk Tea<br>
                            <input type="checkbox" name="drink[]" value="Caramel Milk Tea" />Caramel Milk Tea<br> 
                            <input type="checkbox" name="drink[]" value="Chocolate Milk Tea" />Chocolate Milk Tea<br>
                            <input type="checkbox" name="drink[]" value="Coconut Milk Tea" />Coconut Milk Tea<br>
                            <input type="checkbox" name="drink[]" value="Coffee Milk Tea" />Coffee Milk Tea<br>
                            <input type="checkbox" name="drink[]" value="Honeydew Milk Tea" />Honeydew Milk Tea<br>
                            <input type="checkbox" name="drink[]" value="Honey Green Milk Tea" />Honey Green Milk Tea<br>
                            <input type="checkbox" name="drink[]" value="Honey Milk Tea" />Honey Milk Tea<br>
                            <input type="checkbox" name="drink[]" value="Tapioca Milk Tea" />Tapioca Milk Tea<br>
                            <input type="checkbox" name="drink[]" value="Jasmine Milk Tea" />Jasmine Green Milk Tea<br> 
                            <input type="checkbox" name="drink[]" value="Matcha Milk Tea" />Matcha Milk Tea<br>
                            <input type="checkbox" name="drink[]" value="Red Bean Milk Tea" />Red Bean Milk Tea<br> 
                            <input type="checkbox" name="drink[]" value="Strawberry Milk Tea" />Strawberry Milk Tea<br>
                            <input type="checkbox" name="drink[]" value="Taro Milk Tea" />Taro Milk Tea<br>
                            <input type="checkbox" name="drink[]" value="Thai Milk Tea" />Thai Milk Tea
                            </div>
                      </form>
                      </td>
                      </tr>
                      <tr>
                      <td>Rating: </td>
                      <td><fieldset class="rating">
                        <input type="radio" id="star5" name="rating" value="5 stars" />
                        <label for="star5"></label>
                        <input type="radio" id="star4" name="rating" value="4 stars" />
                        <label for="star4"></label>
                        <input type="radio" id="star3" name="rating" value="3 stars" />
                        <label for="star3"></label>
                        <input type="radio" id="star2" name="rating" value="2 stars" />
                        <label for="star2"></label>
                        <input type="radio" id="star1" name="rating" value="1 star" />
                        <label for="star1"></label>
                      </fieldset></td>
                      </tr>
                      <tr>
                      <td align="right"><input type="reset" value="Reset" /></td>
                      <td><input type="submit" value="Submit" /></td>
                    </tr>
                </tr>     
                  
                </table></td>
                <td>
    	             <h2 style="margin: 25px;">Comments</h2>
                     <input type="text" name ="comments" size="500" style="width: 300px; height:300px" /></td>
                </tr></table>
              </fieldset>
              
          </form>

          <script type="text/javascript" src="scripts/feedback.js"></script>
        </div>
    </div>
</body>

</html>
