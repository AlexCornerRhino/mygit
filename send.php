<html>
<head>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>Мыловаренная компания</title>
	<meta http-equiv="KEYWORDS" content="мыло детское туалетное хозяйственное от производителя с доставкой">
	<meta http-equiv="DESCRIPTION" content="продажа мыла и бытовой химии по всей России по низким ценам">
	<script src="js/jquery-2.1.0.min.js"></script>
    <script src="js/lightbox-2.6.min.js"></script>
	<link href="css/lightbox.css" rel="stylesheet" />
	<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
	<link rel="stylesheet" type="text/css" href="style.css" />
	<script type="text/javascript" src="script.js"></script>
</head>
<body>
<div id="mainbox">

<!--шапка сайта-->
    <header>
	
	<div>
				<video autoplay loop>
 <source src="video/Underwater - 5385.mp4" type="video/mp4" />

 </video>
			</div>
	<!--верхнее меню-->
	<div id="top-menu">
	    <a href="index.html">О компании</a>
		<a href="images/specexcelpdf.pdf" target="_blank">Продукция</a>
		<a href="index2.html">Сотрудничество</a>
		<a href="index4.html">Производство</a>
		<a id="last" href="index5.html">Контакты</a>
		<a id="last" href="index6.html">8(495)709-37-02</a>
	</div>
	 <!--/верхнее меню -->
	 <!--/социальные иконки справа в шапке-->
	
	<div id="soc-icons">
	     <a id="twitter" href="https://vk.com/id475188729"></a>
		 <a id="facebook" href="https://vk.com/id475188729"></a>
		 <a id="google" href="https://vk.com/id475188729"></a>
		 <a id="rss" href="http://www.мылохозяйственное.рф/"></a>
	</div>
	</header>
	<!--основное содержимое сайта с внутренними отступами -->
	<div id="wrapperr">
	     <!--логотип -->
		  <a href="index.html"><img src="design/logo.png"/></a>
		 
		 <!--форма поиска -->
		 <form id="search">
		 <input type="text" value="" />
		 <input type="submit" value="" />
		 </form>
		 
		 <div id="banner">
		 
		 
		    <!--слайдер-->
			
			
              <div id="sliderr">
			   <a href="send.php"><img src="images/adress1.png"/></a>
			         
			</div>
			<div id="last"><a>Отправка сообщения</a></div>
<style>	 
#last {
font-size: 20px;
color:#ffffff;
}
</style>


<?php

//проверяем, существуют ли переменные в массиве POST
if(!isset($_POST['fio']) and !isset($_POST['email'])){
 ?> <form action="send.php" method="post">
<input type="text" name="fio" placeholder="Укажите ФИО" required>
<input type="text" name="email" placeholder="Укажите e-mail" required>
<input type="submit" value="Отправить">
</form> <?php
} else {
 //показываем форму
 $fio = $_POST['fio'];
 $email = $_POST['email'];
 $fio = htmlspecialchars($fio);
 $email = htmlspecialchars($email);
 $fio = urldecode($fio);
 $email = urldecode($email);
 $fio = trim($fio);
 $email = trim($email);
 if (mail("Mkopt1@yandex.ru", "Заявка с сайта", "ФИО:".$fio.". E-mail: ".$email ,"From: Mkopt1@yandex.ru \r\n")){ 
 echo "Сообщение успешно отправлено"; 
 } else { 
 echo "При отправке сообщения возникли ошибки";
 }
}
?>


</div>   
		
<br/>
				
			
	<br/>
<div class="footer-main">
    	<div class="footer">
        	<div class="logo-ftr"><a href="/"><img src="images/logo3-ftr.png" alt="" /></a></div><br />
            <div class="copyr">© Copyright 2018 ООО “Мыловаренная компания” <br /> Газгольдерная улица, дом 10а Почта:Mkopt1@yandex.ru <br />Телефон:8(495)709-37-02 <br />
                Все права защищены.<br />
               
            </div>
       		</div>
       
   </div>
	
</div><!--/mainbox-->


</div>


</body>
</html>