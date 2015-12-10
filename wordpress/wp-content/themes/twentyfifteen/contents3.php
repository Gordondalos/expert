<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php
		// Post thumbnail.
		twentyfifteen_post_thumbnail();
	?>

	<header class="entry-header">

		<?php
			if ( is_single() ) :
				the_title( '<h1 class="entry-title">', '</h1>' );
			else :
				the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );
			endif;
		?>
	</header>
	<!-- .entry-header -->

	<div class="entry-content">


		<?php


		$myval = $_POST['post'];
		$myval = str_replace("\\","",$myval);
		$myval =unserialize($myval);

		//print_r($myval);

//обрабатываем контент, лодим в бд и предлогаем оплатить.

//Складываю в бд
if(!empty($myval)){

	$host = "localhost";
	$user = 'root';
	$password = "";
	$database = "wordpress";


$link = mysql_connect($host, $user, $password);
	mysql_set_charset('utf8',$link);
	mysql_select_db($database);
	//echo "Соединение установлено";
if (!$link) {
	die('Ошибка соединения: ' . mysql_error());
}

	$adress = $myval['adress'];
	$city = $myval['city'];
	$country = $myval['country'];
	$index_post_mail = $myval['index_post_mail'];
	$phone_customer = $myval['phone_customer'];
	$mail = $myval['mail'];
	$name_scenario = $myval['name_scenario'];
	$page_count = $myval['page_count'];
	$genre = $myval['genre'];
	$guestion = $myval['guestion'];
	$price = $myval['service'];
	$fast = $myval['fast'];
	$license = $myval['license'];
	$customer = $myval['customer'];
	$path_to_the_file = $myval['path_to_the_file'];
	$avtor = $myval['avtor'];

	$date = date(DATE_RFC2822);


$query = "INSERT INTO `_wpsales` SET
			`adress`= '{$adress}',
			`avtor`= '{$avtor}',
			`city` = '{$city}',
			`country` = '{$country}',
			`index_post_mail` = '{$index_post_mail}',
			`phone_customer` = '{$phone_customer}',
			`mail` = '{$mail}',
			`name_scenario` = '{$name_scenario}',
			`page_count` = '{$page_count}',
			`genre` = '{$genre}',
			`question` = '{$guestion}',
			`price` = '{$price}',
			`fast` = '{$fast}',
			`licinse` = '{$license}',
			`date` = '{$date}',
			`customer` = '{$customer}',
			`path_to_the_file` = '{$path_to_the_file}'
			";

	//var_dump($query);
$res = mysql_query($query) or die(mysql_error());

	if($res){

		$id = mysql_insert_id();

		//var_dump($id);



		mysql_close($link);


				// отправляю

		// 2.
		// Оплата заданной суммы с выбором валюты на сайте ROBOKASSA
		// Payment of the set sum with a choice of currency on site ROBOKASSA

		// регистрационная информация (логин, пароль #1)
		// registration info (login, password #1)
		$mrh_login = "demo";
		$mrh_pass1 = "password_1";

		// номер заказа
		// number of order
		$inv_id = $id;

		// описание заказа
		// order description
		// кодировка
		// encoding
		$encoding = "utf-8";

echo "<h2>Описание платежа</h2>";
		$inv_desc =
			"Сумма заказа: ".$price."р.".
			",<br> Заказчик: ".$customer.
			",<br> Автор: ".$avtor.
			",<br>  Email: ".$mail.
			",<br>  Телефон: ".$phone_customer.
			",<br>  Название сценария: ".$name_scenario.
			",<br>  Количество страниц: ".$page_count.
			",<br>  Срочное обращение (on - да, off - нет): ".$fast.
			",<br>  Физический адрес файла на сервере: ".$path_to_the_file.
			",<br>  Номер заказа: ".$id.
			",<br>  Дата заказа: ". $date;

		echo $inv_desc. "<br><br>";

		// сумма заказа
		// sum of order
		$out_summ = $myval['service'];

		// тип товара
		// code of goods
		$shp_item = $id; // подтянул последний id в бд

		// предлагаемая валюта платежа
		// default payment e-currency
		$in_curr = "RUR";

		// язык
		// language
		$culture = "ru";


		// Адрес электронной почты покупателя
		// E-mail
		$Email = "gordondalos@gmail.com";

		// Срок действия счёта
		// Expiration Date
		$ExpirationDate = "";

		// формирование подписи
		// generate signature
		$crc  = md5("$mrh_login:$out_summ:$inv_id:$mrh_pass1:Shp_item=$shp_item");

		// форма оплаты товара
		// payment form
		print
			"<html>".
			"<form action='https://auth.robokassa.ru/Merchant/Index.aspx' method=POST>".
			"<input type=hidden name=MrchLogin value=$mrh_login>".
			"<input type=hidden name=OutSum value=$out_summ>".
			"<input type=hidden name=InvId value=$inv_id>".
			"<input type=hidden name=Desc value='$inv_desc'>".
			"<input type=hidden name=SignatureValue value=$crc>".
			"<input type=hidden name=Shp_item value='$shp_item'>".
			"<input type=hidden name=IncCurrLabel value=$in_curr>".
			"<input type=hidden name=Culture value=$culture>".
			"<input type=hidden name=Email value=$Email>".
			"<input type=hidden name=ExpirationDate value=$ExpirationDate>".
			"<input type=hidden name=OutSumCurrency value=$OutSumCurrency>".
			"<input type=submit value='Оплатить'>".
			"</form></html>";


	}


}else{
	?>
	<h4 style="background-color: indianred; padding: 10px  20px; border-radius: 4px">Ошибка, сервис временно не доступен! обратитесь к администратору <?php $mail?> </h4>
	<?php
}





		?>






	</div><!-- .entry-content -->

	<?php
		// Author bio.
		if ( is_single() && get_the_author_meta( 'description' ) ) :
			get_template_part( 'author-bio' );
		endif;
	?>

	<footer class="entry-footer">
		<?php twentyfifteen_entry_meta(); ?>
		<?php edit_post_link( __( 'Edit', 'twentyfifteen' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
