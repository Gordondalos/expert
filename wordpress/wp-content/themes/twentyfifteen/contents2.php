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
	</header><!-- .entry-header -->

	<div class="entry-content">

	<?php //print_r($_POST)?>
<!--		echo "<br>";-->
<!--	--><?php //print_r($_FILES)?>


		<?php
		if($_FILES["filename"]["size"] > 1024*10*1024)
		{
			echo ("Размер файла превышает три мегабайта");
			exit;
		}
		// Проверяем загружен ли файл
		if(is_uploaded_file($_FILES["filename"]["tmp_name"]))
		{
			//echo" фаил загружен, начинаю перемещать";
			// Если файл загружен успешно, перемещаем его
			// из временной директории в конечную
			if (move_uploaded_file($_FILES["filename"]["tmp_name"], ROOT_DIR . '/uploads/' .$_FILES["filename"]["name"])){
			$_POST['path_to_the_file'] =  str_replace("\\","/",ROOT_DIR . '/uploads/' .$_FILES["filename"]["name"]);
				?>

				<h3>Убедитесь в правильности данных заполненных на предыдущей странице,
					если где-то ошиблись нажмите на эту ссылку <a href="#" onclick="history.back();">Назад</a></h3>

				<h4 style="background-color: greenyellow; padding: 10px  20px; border-radius: 4px">Файл успешно загружен!</h4>

				<h4>Общая сумма заказа <?php echo $_POST['service']?> p.</h4>

				<ol>
					<li>Платеж <?php echo $_POST['service']?> p.</li>

					<li>Название сценария : <?php echo $_POST['name_scenario']?> </li>
					<li>Название загруженного файла : <?php echo $_FILES['filename']['name']?> </li>

					<li>Количество страниц: <?php echo $_POST['page_count']?> </li>
					<li>Срочное выполнение работ: <?php if($_POST['fast']){
							echo "Да";
						}else{
							echo "Нет" ;
						} ?>
					</li>
				</ol>

<!--				<form method="post" action="http://localhost/wp/wordpress/ru/checkout/">-->
				<form method="post" action="http://localhost/wp/wordpress/ru/cart/">
					<input type="submit" value="Перейти к оплате">

					<?php
					$inform =  serialize($_POST);
					//print_r($_POST);
					//echo htmlspecialchars($inform);
					?>
					<input type="hidden" name="post" value='<?php echo htmlspecialchars($inform) ?>'>
				</form>
				<br>
				<p>Спасибо за обращение в Сценарный Эксперт!</p>
		<?php


			}

		} else {
			?>
			<h4 style="background-color: indianred; padding: 10px  20px; border-radius: 4px">Файл не загружен!</h4>
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
