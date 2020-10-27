<?php
    $hasError=false;

    $state = "";
	$error_state = "";

	$city = "";
	$error_city = "";

	$day = "";
	$error_day = "";

	$month = "";
	$error_month = "";

	$year = "";
	$error_year = "";
	$username="";
	$err_username="";
	
	
	$password="";
	$err_password="";
	
	$email = "";
	$error_email = "";
	
    $phone_no = "";
	$error_phone_no = "";
	
	$phone_code = "";
	$error_phone_code = "";
	

	$street_address = "";
	$error_street_address = "";

	$zip = "";
	$error_zip = "";

	

	$heard_about_us = "";
	$error_heard_about_us = "";

	$gender = "";
	$error_gender = "";

	$bio = "";
	$error_bio = "";

	
	
	
	if(isset($_POST["login"])){
		if(empty($_POST["username"])){
			$err_username="*Username required";
			$hasError = true;
		}
		elseif(strlen($_POST["username"]) < 6){
			$err_username="*Username must be 6 characters long";
			$hasError = true;
		}
		elseif(strpos($_POST["username"]," ")){
			$err_username="There shouldn't be no space";
			$hasError = true;
		}
	
		else{
			$username=htmlspecialchars($_POST["username"]);
		}
		if(empty($_POST["password"])){
			$err_password="*Password required";
			$hasError = true;
		}
	
		
		else{
			$password=htmlspecialchars($_POST["password"]);
		}
		if(empty($_POST["email"])){
			$error_email="Email is required";
			$hasError = true;
		}
		else{
			$email=$_POST["email"];
		}
		
	if (empty($_POST["phone_code"]))
    {
        $error_phone_code = "Phone code required";
        $hasError = true;
    }
    elseif (!is_numeric($_POST["phone_code"]))
    {
        $error_phone_code = "Phone code should be in neumeric";
        $hasError = true;
    }
    else
    {
        $phone_code = htmlspecialchars($_POST["phone_code"]);
    }
	 if (empty($_POST["month"]))
    {
        $error_month = "Select Month";
        $hasError = true;
    }
    else
    {
        $month = htmlspecialchars($_POST["month"]);
    }

    if (empty($_POST["year"]))
    {
        $error_year = "Select Year";
        $hasError = true;
    }
    else
    {
        $year = htmlspecialchars($_POST["year"]);
    }

    if (empty($_POST["zip"]))
    {
        $error_zip = "*Zip  required";
        $hasError = true;
    }
    else
    {
        $zip = htmlspecialchars($_POST["zip"]);
    }
	if (empty($_POST["heard_about_us"]))
    {
        $error_heard_about_us = "*This info is  required";
        $hasError = true;
    }
    else
    {
        $heard_about_us = $_POST["heard_about_us"];
    }
	

    if (empty($_POST["street_address"]))
    {
        $error_street_address = " is  required";
        $hasError = true;
    }
    else
    {
        $street_address = $_POST["$street_address"];
    }

    if (empty($_POST["bio"]))
    {
        $error_bio = "*Bio required";
        $hasError = true;
    }
    else
    {
        $bio = htmlspecialchars($_POST["bio"]);
    }
	 if (empty($_POST["gender"]))
    {
        $error_gender = "*Gender  required";
        $hasError = true;
    }
    else
    {
        $gender = htmlspecialchars($_POST["gender"]);
    }
	if (empty($_POST["city"]))
    {
        $error_city = "*city name is  required";
        $hasError = true;
    }
    else
    {
        $state = htmlspecialchars($_POST["city"]);
    }
		
		
		
	}
?>
<html>
	<head>
		<title>Php Task</title>
	</head>
	<body>
		
		<form action="" method="post">
			<fieldset>
				<legend><h1>Club Member Registation</h1></legend>
				<table>
				<tr>
					<td style="text-align: right;"  >Username:</td>
					<td><input type="text" name="username" value="<?php echo $username;?>" placeholder="Write your username">
						<span><?php echo $err_username;?></span>
					</td>
				</tr>
				<tr>
					<td style="text-align:right;" >Password:</td>
					<td><input name="password" type="password" value="<?php echo $password;?>" placeholder="Write your password">
						<span><?php echo $err_password;?></span>
					</td>
				</tr>
				
				<tr>
					<td>Confirm Password:</td>
					<td><input name="password" type="password" value="<?php echo $password;?>" placeholder="Confirm your password">
						<span><?php echo $err_password;?></span>
					</td>
					</tr>
					<tr>
						<td style="text-align:right;">Email:</td>
						<td><input name="email"value="<?php echo $email;?>" placeholder="Write your email">
						<span><?php echo $error_email;?></span></td>
					</tr>
					
			         
				<tr>
                <td style="text-align: right;">Phone:</td>
                <td style="text-align: left;"><input type="text" name="phone_code" placeholder="code" size="4" value=<?php echo $phone_code; ?> > -
                  <input type="text" name="phone_no"  placeholder="Number" size="9" value=<?php echo $phone_no; ?>> <span><?php echo $error_phone_no; ?></span><span><?php echo $error_phone_code; ?></span>

                </td>
             </tr>
			  <tr>
					 <tr>
                <td style="text-align: right;">Address:</td>
                <td style="text-align: left;"><input type="text" name="street_address" placeholder="Street Adderss" value=<?php echo $street_address; ?> ><span><?php echo $error_street_address; ?></span> </td>
              </tr>
              <tr>
                 <td></td>
                 <td style="text-align: left;">  <input type="text" name="city" placeholder="City" size="7" value=<?php echo $city; ?>> -
                   <input type="text" name="state" placeholder="State" size="6" value=<?php echo $state; ?> ><span><?php echo $error_city; ?></span><span><?php echo $error_state; ?></span>
               </tr>
               <tr>
                  <td ></td>
                  <td style="text-align: left; "><input type="text" name="zip" placeholder="Postal/Zip Code" value=<?php echo $zip; ?> > <span><?php echo $error_zip; ?></span> </td>
                </tr>
                <tr>
                <td style="text-align: right;">Birthdate: </td>
                <td style="text-align: left; ">
               <select name="day" >
                 <option disabled selected> Day</option>
                 <?php
                 for ($x = 1;$x <= 31;$x++)
                     {

                                echo "<option> $x</option><br>";
                            }

                            ?>
                          </select>

                            <select name="month"  >
                            <option disabled selected> Month</option>
                            <?php
                            $month = array(
                                "January",
                                "February",
                                "March",
                                "April",
                                "May",
                                "Jun",
                                "July",
                                "August",
                                "September",
                                "October",
                                "November",
                                "December"
                            );
                            for ($m = 0;$m < 12;$m++)
                            {
                                echo "<option>  $month[$m] </option>";
                            }
                            ?>
                        </select>

                        <select name="year" >
                         <option disabled selected> Year</option>

                                                                <?php
                            for ($x = 1997;$x <= 2020;$x++)
                            {

                              echo "<option> $x</option><br>";
                            }

                            ?>
                           </select>

                            <span><?php echo $error_day; ?></span><span><?php echo $error_month; ?></span><span><?php echo $error_year; ?></span>
                 </td>
                 </tr>

                 <tr>

                 <td  style="text-align: right;" >Gender:</td>

                     <td><input type="radio" name="gender" value="Male">Male
                         <input type="radio" name="gender" value="Female">Female
                         <span><?php echo $error_gender; ?></span>
                     </td>
                 </tr>

                 <tr>
                       <td  style="text-align: right;" >Where did you hear <br>about us? </td>
                   <td>  <input type="checkbox" value="A friend or Colleague" name="heard_about_us[]">A friend or Colleague   <br>
                      <input type="checkbox" value="A friend or Colleague" name="heard_about_us[]">Google   <br>
                       <input type="checkbox" value="A friend or Colleague" name="heard_about_us[]">Blog Post  <br>
                        <input type="checkbox" value="A friend or Colleague" name="heard_about_us[]">New Article <span><?php echo $error_heard_about_us; ?></span> <br>




                   </td>
                 </tr>
                 <tr>

                 <td style="text-align: right;"> Bio:</td>

                    <td>
                   <textarea name="bio"  ><?php echo $bio; ?></textarea><span><?php echo $error_bio; ?></span>
                    </td>
                </tr>


            <tr>

                <td colspan="2" align="center">   <input type="submit" value="register" name="register"> </td>
            </tr>


			</table>
		</form>
	
	</body>
</html>
