<?php
session_start();
ob_flush();
require 'admin/dbconfig.php';
if(isset($_SESSION['user_id'])) {


$strSQL = mysqli_query($connection, " select * from questions " );
        $Results = mysqli_fetch_array($strSQL);
		$_SESSION['question_id']= $Results['question_id'];



?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>instruction</title>

	<link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
	<link rel="stylesheet" href="css/bootstrap.mini.css" type="text/css" />
	<link rel="stylesheet" href="css/style.css" media="screen" type="text/css" />


</head>


<body style="background-color: #FFF">

<h2><p class="head-card" style="height:100"><b>Instructions</b></p></h2>
<br />
<div class="instruction-card">
<ul style="list-style-type: square">
  <li>রক্তের সুগার লেভেল সঠিকভাবে পরীক্ষা করার জন্য এই পদক্ষেপ গ্রহণ করা প্রয়োজন ।</li>
  <li>পরিষ্কার, ধোয়া, শুকনো হাত দিয়ে শুরু করুন ।</li>
  <!-- <img src="/image/ins.png" alt="exam page" style="width:804px;height:448px"> -->
  
  <li>নির্মাতার নির্দেশনা অনুযায়ী তৈরি গ্লুকোজ মিটার নিন ।</li>
  <li>ব্যথা এড়ানোর জন্য বা তলপেটের জন্য প্রতিবার আলাদা করে আঙুল তুলুন, এবং ওপরের দিকের দিকে পরীক্ষা করে ধীরস্থির করে নিন ।</li>
  <li>আপনার আঙ্গুল-খোঁচানো বা lancet ডিভাইসের জন্য নির্দেশাবলী চেক করুন এবং তারপর একটি ফোঁটা রক্ত আঁকতে বাটন চাপুন ।</li>
  <li>যদি আপনার রক্তের ফোঁটা পেতে সমস্যা হয়, তাহলে হাত নীচে নামাও, মাথা ঘোরা, এবং ঝাঁকি দিন । এছাড়া রক্ত প্রবাহ পেতে গরম পানিতে হাত ধোয়ার চেষ্টা করতে পারেন ।</li>
  <li>আপনার টেস্ট স্ট্রিপ রক্তে ডট করুন এবং তারপর মিটারে রাখুন । সঠিক ফলাফল পেতে সতর্কভাবে সতর্কতা অনুসরণ করুন ।</li>
  <li>আপনার লগ-ইন বইয়ের ফলাফল লক্ষ্যণীয় । এই ধাপটি খুবই গুরুত্বপূর্ণ কারণ এটি আপনাকে এবং আপনার ডাক্তারকে কতটা ইনসুলিন বা অন্যান্য medications প্রয়োজন তা জানার জন্য সাহায্য করবে । এছাড়াও এটি আপনাকে যেকোন প্রবণতা পর্যবেক্ষণ এবং আপনার ডায়েটে মানিয়ে নিতে সাহায্য করে ।</li>
  <li> No malpractises are supported. If any is found,the admin of the software to remove you</li>
  <li>You will not be able to continue the exam after you press the finish button"</li>
</ul>

<div class="" align="center">
<a class="btn btn-primary" href="exam.php"> Submit</a>
</div>
</body>



<div class="footer-copyright navbar-fixed-bottom" align="center">
	<div class="container">
		<div class="span 12">
				
				<p>&#169; Created By Fahim Khan</p>
				
		</div>
	</div>
</div>


</html>
<?php
}
else
{
	?>
    <META HTTP-EQUIV="refresh" CONTENT="1;URL=index.php">
    <?php
}
?>
