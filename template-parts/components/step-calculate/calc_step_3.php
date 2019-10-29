<div class="bc-slide step">
	<h3 class="bc-slide__title">
		<?php _e('Який тип охоронної системи Вас цікавить?', 'sequrity')?>
	</h3>
	<div class="type i">
		<div class="type__item type__item--step">
			<input type="radio" class="f-radio-taryf" name="type-three" id="type1" data-class=".drit" value="Дротова  (від 5099 грн)">
			<label for="type1" class="type__label">
				<div class="type__img-wrap">
					<img src="<?php echo SD_THEME_IMAGE_URI; ?>/type1.png" alt="">
				</div>
				<p class="step__point"> . . . </p>
				<p class="type__name"><?php _e('Дротова  (від 5099 грн)', 'sequrity')?></p>
			</label>
		</div>
		<div class="type__item type__item--step">
			<input type="radio" class="f-radio-taryf" name="type-three" id="type2" data-class=".notdrit" value="Бездротова  (від 5599 грн)">
			<label for="type2" class="type__label">
				<div class="type__img-wrap">
					<img src="<?php echo SD_THEME_IMAGE_URI; ?>/type2.png" alt="">
				</div>	
					
				<p class="step__point"> . . . </p>
				<p class="type__name"><?php _e('Бездротова  (від 5599 грн)', 'sequrity')?></p>
			</label>
		</div>


		<div class="type__item type__container">
			<input type="radio" class="f-radio-taryf" name="type-three" id="type3" data-class="" value="Ще не визначився">
			<label for="type3" class="type__label">
				<div class="type__img-wrap">
					<img src="<?php echo SD_THEME_IMAGE_URI; ?>/type3.png" alt="">
				</div>
				<p class="step__point"> . . . </p>
				<p class="type__name"><?php _e('Ще не визначився', 'sequrity')?></p>
			</label>
		</div>


	</div>
	<div class="calc__btns">
		<button type="button" class="bc-btn--prev bc-btn"><?php _e('Назад', 'sequrity')?></button>
		<button  type="button" name="button3" class="bc-btn--next bc-btn btn-3"><?php _e('Далі', 'sequrity')?><span class="bc-blick"><i></i></span></button>
	</div>
</div>
