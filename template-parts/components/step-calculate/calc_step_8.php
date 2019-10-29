<div class="bc-slide">
	<h3 class="bc-slide__title bc-slide__title--form">
		<?php _e('Залишився останній крок', 'sequrity')?>
		
	</h3>
	<div class="bc-form__wrap">
		<div class="bc-form">
			<input type="hidden" name="form-sub" value="ok">
			<div class="bc-form__input-wrap">
				<div class="bc-form__input-item">
					<input type="text" autocomplete="off" maxlength="50" class="bc-form__name" name="name" placeholder="<?php _e("Ваше ім'я", 'sequrity')?>" required>
				</div>
				<div class="bc-form__input-item">
					<input type="tell" autocomplete="off" maxlength="50" class="bc-form__phone" name="phone" placeholder="<?php _e('Ваш телефон', 'sequrity')?>" required>
				</div>
				<div class="bc-form__input-item">
					<input type="email" autocomplete="off" maxlength="50" class="bc-form__email" name="email" placeholder="<?php _e('Ваш email', 'sequrity')?>" required>
				</div>
			</div>
			<div class="bc-form__submit-wrap">
				<button type="submit"  class="bc-form__submit bc-btn bc-btn--shadow-white" disabled><?php _e('Отримати розрахунок', 'sequrity')?></button>
			</div>
		</div>
	</div>
</div>