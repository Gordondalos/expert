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

		<form action="http://localhost/wp/wordpress/ru/step2/"  class="cart" method="POST" enctype='multipart/form-data'>

			<label for="avtor">Имя автора (авторов) (обязательное поле)*</label>
			<input id="avtor" name="avtor" type="text" required>

			<label for="customer">Заказчик (обязательное поле)*</label>
			<input id="customer" name="customer" type="text" required>

			<label for="adress">Адрес (улица, дом, квартира)</label>
			<input id="adress" name="adress" type="text">

			<label for="city">Город</label>
			<input id="city" name="city" type="text">

			<label for="country">Страна / область / район</label>
			<input id="country" name="country" type="text">

			<label for="index_post_mail">Почтовый индекс</label>
			<input id="index_post_mail" name="index_post_mail" type="text">

			<label for="phone_customer">Контактный телефон</label>
			<input id="phone_customer" name="phone_customer" type="text">

			<label for="mail">Электронная почта*</label>
			<input id="mail" name="mail" type="text" required>

			<label for="name_scenario">Название сценария*</label>
			<input id="name_scenario" name="name_scenario" type="text" required>

			<label for="page_count">Количество страниц</label>
			<input id="page_count" name="page_count" type="text">

			<label for="genre">Жанр</label>
			<input id="genre" name="genre" type="text">

			<label for="question">Как вы узнали о нашей экспертной службе</label>
			<textarea rows="5" cols="45" name="question"></textarea>


			<label for="service">Пожалуйста, выберите интересующий вас сервис* </label>
			<select name="service" id="service">
				<option value="20 первых страниц за 4.000 руб">- 20 первых страниц за 4.000 руб.</option>
				<option value="6000">- Стандартная экспертиза за 6.000 руб.</option>
				<option value="Стандартная экспертиза за 6.000 руб.">- Расширенная экспертиза за 10.000 руб.</option>
				<option value="Стандартная экспертиза 2-мя экспертами за 10.000 руб.">- Стандартная экспертиза 2-мя экспертами за 10.000 руб.</option>
				<option value="Расширенная экспертиза 2-мя экспертами за 12.500 руб.">- Расширенная экспертиза 2-мя экспертами за 12.500 руб.</option>
				<option value="Стандартная экспертиза 3-мя экспертами за 15.000 руб.">- Стандартная экспертиза 3-мя экспертами за 15.000 руб.</option>
				<option value="Расширенная экспертиза 3-мя экспертами за 19.000 руб.">- Расширенная экспертиза 3-мя экспертами за 19.000 руб.</option>
				<option value="РК2Я за 8.000 руб.">- РК2Я за 8.000 руб.</option>
				<option value="Полный комплект подготовки сценария для кинопроизводства за 25.000 руб.">- Полный комплект подготовки сценария для кинопроизводства за 25.000 руб.</option>
				<option value="Выверка текста за 6.000 руб.">- Выверка текста за 6.000 руб.</option>
			</select>

			<label for="fast">Срочный заказ (дополнительная оплата 1.500 - Услуга предоставляется в течение 7 дней)</label>
			<input id="fast" name="fast" type="checkbox" >
			<br>
			<label for="filename">Пожалуйста, прикрепите ваш сценарий*</label>
			<input id="filename" type="file" name="filename" required><br>


			<label for="licinse">Я Согласен <a href="#">лицензионное соглашение</a></label>
			<input id="licinse" name="licinse" type="checkbox" required>

			<input type="submit" value="Заказать">

			</form>



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
