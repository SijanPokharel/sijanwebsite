<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
 <div id="container">
	 	<form action="index2.php"id="contact-form" method="post"/>
    	 	<div id="head"><h2> Commission</h2><b style="font-size:15px"> Would you like to commission a custom piece by Sijan pokharel?</b><p style="font-size:10px">Art commissions are a collaboration between the artist and the client. It is important to be able to determine which photo will allow for the best possible reference material, and to be able to achieve the desired final result in the appropriate time frame as well as within the client’s budget. Commissions require a deposit and contractual agreement.<br><br>Please contact by email or fill out the form with as much detail as possible and  I will respond within 2 business days.</p> </div>
    <input type="text" name="username" placeholder=" Enter your full name"><br>
	<input type="email" name="uemail" placeholder=" Enter your email ID"><br>
	<input type="text" name="req" placeholder=" Topic for your artwork"><br>
	<input type="text" name="msg" placeholder=" Enter your message"><br>
	   <input id="btn" type="submit"value="Send"/>
	   </form>
	   </div>
</body>
 <style>
  input {
  width: 90%;
  text-align: center;
  box-align: center;
  background: transparent;
  border: none;
  border-bottom: 1px solid #fff;
  font-family: "Roboto", sans-serif;
  font-size: 2vw;
  padding: 2%;
  outline: none;
  color: #fff;
  font-weight: bold;
  padding-top: 1%;
  padding: 3%;
}
#btn{

  width: 45%;
  background-color: #4CAF50;
  font-size: 80%;
  font-weight: bold;
  padding: 3%;
  margin-top: 5%;
  border: 1px solid #ff4b2b;
  border-radius: 20px;
  cursor:pointer;
  margin-bottom: 3%;

}
h2 {
  font-size: 200%;
  font-weight: 800;
}
#head{
	font-family: "Roboto", sans-serif;
  color: #fff;
}
#contact-form{
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  text-align: center;
  width: 50%;
margin-left: 35%;
}

body {
 background: rgba(45, 52, 54, 1) ;
  justify-content: center;
  width: 80%;
} 
	          </style>
</html>