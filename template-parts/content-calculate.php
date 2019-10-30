<section class="calc" id="calculate">
	<div class="hint">
		<div class="hint__content">
			<div class="hint__close">×</div>
			<div class="hint__info">
				<div class="hint__info-foto">
					<img src="<?php echo SD_THEME_IMAGE_URI; ?>/photo.png" alt="">
				</div>
				<div class="hint__info-text">
					<p>Роман</p>
					<span>Менеджер</span>
				</div>
			</div>
			<div class="hint__text">
				<p><?php _e('Коли ви залишаєте приміщення, то за допомогою смартфону або брелоку Ви переводите систему в режим “Охорона”. Якщо якийсь з датчиків спрацює у вашу відсутність, то Вам прийде повідомлення на телефон, а на об’єкт вирушить Группа швидкого реагування (якщо така опція є у вашому тарифному плані). Додатково може бути ввімкнена сирена, що відлякає грабіжника, та встановлена камера відеонагляду.Коли ви залишаєте приміщення, то за допомогою смартфону або брелоку Ви переводите систему в режим “Охорона”. Якщо якийсь з датчиків спрацює у вашу відсутність, то Вам прийде повідомлення на телефон, а на об’єкт вирушить Группа швидкого реагування (якщо така опція є у вашому тарифному плані). Додатково може бути ввімкнена сирена, що відлякає грабіжника, та встановлена камера відеонагляду.', 'sequrity')?></p>
			</div>
		</div>
	</div>
	<form>
		<input type="hidden" name="action" value="applicant">
		<div class="container">
			<h2 class="calc__title"><?php _e('Калькулятор', 'sequrity')?></h2>
			<p class="calc__subtitle">
				<?php _e('Розрахуйте вартість комплексної охорони Вашого приміщення', 'sequrity')?>
				
			</p>
			<p class="calc__progress-text">
				 <?php _e('Готово', 'sequrity')?> <span>0 %</span>
			</p>
			<div class="calc__progress" role="progressbar" aria-valuemin="0" aria-valuemax="100">
				<span class="slider__label sr-only"></span>
					
				</div>
			<div class="bc-slider" id="b_step_slider">
				<?php 	
					require_once SD_THEME_DIR.'/template-parts/components/step-calculate/calc_step_1.php'; 
					require_once SD_THEME_DIR.'/template-parts/components/step-calculate/calc_step_2.php'; 
					require_once SD_THEME_DIR.'/template-parts/components/step-calculate/calc_step_3.php'; 
					require_once SD_THEME_DIR.'/template-parts/components/step-calculate/calc_step_4.php'; 
					require_once SD_THEME_DIR.'/template-parts/components/step-calculate/calc_step_5.php'; 
					require_once SD_THEME_DIR.'/template-parts/components/step-calculate/calc_step_6.php'; 
					require_once SD_THEME_DIR.'/template-parts/components/step-calculate/calc_step_7.php'; 
					require_once SD_THEME_DIR.'/template-parts/components/step-calculate/calc_step_8.php'; 
				?>
			</div>
		</div>
	</form>
</section>