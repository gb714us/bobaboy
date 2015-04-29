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
            <form id = "profileForm" action="" onsubmit="processForm()">
              <fieldset>
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
                        <form id="orderSelection" action="order">
                          <div class="drink" align="left">
                            <input type="checkbox" name="drink" value="Almond" />Almond Milk Tea<br>
                            <input type="checkbox" name="drink" value="Caramel" />Caramel Milk Tea<br> 
                            <input type="checkbox" name="drink" value="Chocolate" />Chocolate Milk Tea<br>
                            <input type="checkbox" name="drink" value="Coconut" />Coconut Milk Tea<br>
                            <input type="checkbox" name="drink" value="Coffee" />Coffee Milk Tea<br>
                            <input type="checkbox" name="drink" value="Honeydew" />Honeydew Milk Tea<br>
                            <input type="checkbox" name="drink" value="HoneyGreen" />Honey Green Milk Tea<br>
                            <input type="checkbox" name="drink" value="Honey" />Honey Milk Tea<br>
                            <input type="checkbox" name="drink" value="Tapioca" />Tapioca Milk Tea<br>
                            <input type="checkbox" name="drink" value="Jasmine" />Jasmine Green Milk Tea<br> 
                            <input type="checkbox" name="drink" value="Matcha" />Matcha Milk Tea<br>
                            <input type="checkbox" name="drink" value="Red Bean" />Red Bean Milk Tea<br> 
                            <input type="checkbox" name="drink" value="Strawberry" />Strawberry Milk Tea<br>
                            <input type="checkbox" name="drink" value="Taro" />Taro Milk Tea<br>
                            <input type="checkbox" name="drink" value="Thai" />Thai Milk Tea
                            </div>
                      </form>
                      </td>
                      </tr>
                      <tr>
                      <td>Rating: </td>
                      <td><fieldset class="rating">
                        <input type="radio" id="star5" name="rating" value="star5" />
                        <label for="star5"></label>
                        <input type="radio" id="star4" name="rating" value="star4" />
                        <label for="star4"></label>
                        <input type="radio" id="star3" name="rating" value="star3" />
                        <label for="star3"></label>
                        <input type="radio" id="star2" name="rating" value="star2" />
                        <label for="star2"></label>
                        <input type="radio" id="star1" name="rating" value="star1" />
                        <label for="star1"></label>
                      </fieldset></td>
                      </tr>
                      <tr>
                      <td align="right"><input type="reset" value="Reset" /></td>
                      <td><input type="submit" value="Submit" /></td>
                    </tr>
                </tr>     
                  
                </table>

              </fieldset>
          </form>

          <script type="text/javascript" src="scripts/feedback.js"></script>
        </div>
        <h2 style="margin: 25px;">Comments</h2>
                <input type="text" name ="comments" size="500" style="width: 300px; height:300px" />
    </div>
</body>

</html>
