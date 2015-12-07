
<?php
/**
 * Simple product add to cart
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.1.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $product;


if ( ! $product->is_purchasable() ) {
	return;
}

?>

<?php
	// Availability
	$availability      = $product->get_availability();
	$availability_html = empty( $availability['availability'] ) ? '' : '<p class="stock ' . esc_attr( $availability['class'] ) . '">' . esc_html( $availability['availability'] ) . '</p>';

	echo apply_filters( 'woocommerce_stock_html', $availability_html, $availability['availability'], $product );
?>


<?php if ( $product->is_in_stock() ) : ?>



	<?php do_action( 'woocommerce_before_add_to_cart_form' );

	?>

	<form avtion="cart"  class="cart" method="POST" enctype='multipart/form-data'>

		<label for="avtor">Имя автора (авторов) (обязательное поле)*</label>
		<input id="avtor" name="avtor" type="text" required>

		<label for="adress">Адрес (улица, дом, квартира)</label>
		<input id="adress" name="adress" type="text">

		<label for="cyti">Город</label>
		<input id="cyti" name="cyti" type="text">

		<label for="country">Страна / область / район</label>
		<input id="country" name="country" type="text">

		<label for="index_post_mail">Почтовый индекс</label>
		<input id="index_post_mail" name="index_post_mail" type="text">

		<label for="phone">Контактный телефон</label>
		<input id="phone" name="phone" type="text">

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
			<option value="4000">- 20 первых страниц за 4.000 руб.</option>
			<option value="6000">- Стандартная экспертиза за 6.000 руб.</option>
			<option value="10000">- Расширенная экспертиза за 10.000 руб.</option>
			<option value="10000">- Стандартная экспертиза 2-мя экспертами за 10.000 руб.</option>
			<option value="12500">- Расширенная экспертиза 2-мя экспертами за 12.500 руб.</option>
			<option value="15000">- Стандартная экспертиза 3-мя экспертами за 15.000 руб.</option>
			<option value="19000">- Расширенная экспертиза 3-мя экспертами за 19.000 руб.</option>
			<option value="8000">- РК2Я за 8.000 руб.</option>
			<option value="25000">- Полный комплект подготовки сценария для кинопроизводства за 25.000 руб.</option>
			<option value="6000">- Выверка текста за 6.000 руб.</option>
		</select>

			<label for="fast">Срочный заказ (дополнительная оплата 1.500 - Услуга предоставляется в течение 7 дней)</label>
			<input id="fast" type="checkbox" >
		<br>
		<label for="file">Пожалуйста, прикрепите ваш сценарий*</label>
			<input id="file" type="file" name="filename" required><br>


		<label for="licinse">Я Согласен <a href="#">лицензионное соглашение</a></label>
		<input id="licinse" type="checkbox" required>

		<br>

	 	<?php do_action( 'woocommerce_before_add_to_cart_button' ); ?>

<!--	 	--><?php
//	 		if ( ! $product->is_sold_individually() ) {
//	 			woocommerce_quantity_input( array(
//	 				'min_value'   => apply_filters( 'woocommerce_quantity_input_min', 1, $product ),
//	 				'max_value'   => apply_filters( 'woocommerce_quantity_input_max', $product->backorders_allowed() ? '' : $product->get_stock_quantity(), $product ),
//	 				'input_value' => ( isset( $_POST['quantity'] ) ? wc_stock_amount( $_POST['quantity'] ) : 1 )
//	 			) );
//	 		}
//	 	?>

	 	<input type="hidden" name="add-to-cart" value="<?php echo esc_attr( $product->id ); ?>" />

	 	<button type="submit" class="single_add_to_cart_button button alt"><?php echo esc_html( $product->single_add_to_cart_text() ); ?></button>

		<?php do_action( 'woocommerce_after_add_to_cart_button' ); ?>
	</form>

	<?php do_action( 'woocommerce_after_add_to_cart_form' ); ?>

<?php endif; ?>
