<div class="bc-slide step">
	<h3 class="bc-slide__title">
		<?php _e('Оберіть свій варіант', 'sequrity')?>
	</h3>
	<div class=" version i">
		<div class="version__container">
			<input type="radio" class="f-radio-taryf" name="version-two" id="version1" data-class=".equipment" value="Тільки обладнання">
			<label for="version1" class="version__label">
				<p class="step__name version__name"><?php _e('Тільки обладнання', 'sequrity')?></p>
			</label>
		</div>
		<div class="version__container">
			<input type="radio" class="f-radio-taryf" name="version-two" id="version2" data-class=".equipment-install" value="Обладнання з установкою">
			<label for="version2" class="version__label">
				<p class="step__name version__name"><?php _e('Обладнання з установкою', 'sequrity')?></p>
			</label>
		</div>
		<div class="version__container">
			<input type="radio" class="f-radio-taryf" name="version-two" id="version4" data-class=".equipment-install-pult" value="Обладнання з установкою і пультом">
			<label for="version4" class="version__label">
				<p class="step__name version__name">
					<?php _e('Обладнання з установкою і підключенням на пульт охорони', 'sequrity')?>
				</p>
			</label>
		</div>
		<div class="version__container">
			<input type="radio" class="f-radio-taryf" name="version-two" id="version3" data-class=".abonprice" value="Абонплата без покупки обладнання">
			<label for="version3" class="version__label">
				<p class="step__name version__name">
					<?php _e('Абонплата без покупки обладнання', 'sequrity')?>
					
				</p>
			</label>
		</div>
		<div class="version__container">
			<input type="radio" class="f-radio-taryf" name="version-two" id="version5" data-class="" value="Ще не визначились">
			<label for="version5" class="version__label">
				<p class="step__name version__name">
					<?php _e('Ще не визначився', 'sequrity')?>
					
				</p>
			</label>
		</div>
	</div>

	<div class="calc__btns">
		<button type="button" class="bc-btn--prev bc-btn"><?php _e('Назад', 'sequrity')?></button>
		<button type="button"  class="bc-btn--next bc-btn bc-btn-2"><?php _e('Далі', 'sequrity')?><span class="bc-blick"><i></i></span></button>
	</div>
</div> 