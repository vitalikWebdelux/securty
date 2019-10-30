<div class="bc-slide step">
	<h3 class="bc-slide__title">
		<?php _e('Оберіть Ваш тарифний план', 'sequrity')?>
	</h3>
	<div class="taryf i">
	<?php for($i = 1; $i <= 72; $i++){ ?>
		<?php if($i <= 8){ 
			$name = 'STANDART';
			$fromPrice = '299';
			$item1 =  __('Центральний блок', 'sequrity');
			$item2 =  __('Датчик руху', 'sequrity');
			$item3 =  __('Датчик відкриття дверей', 'sequrity');
			$item4 =  __('Тривожна кнопка', 'sequrity');
			if( $i == 1 ){ $price = 5099; $cssRoom = "apartment"; $cssVariant = "equipment"; $cssdrit = "drit";}
			if( $i == 2 ){ $price = 5999; $cssRoom = "apartment"; $cssVariant = "equipment-install"; $cssdrit = "drit";}
			if( $i == 3 ){ $price = 6199; $cssRoom = "apartment"; $cssVariant = "equipment-install-pult"; $cssdrit = "drit";}
			if( $i == 4 ){ $price = 1490; $cssRoom =   "apartment"; $cssVariant = "abonprice"; $cssdrit = "drit";}

			if( $i == 5 ){ $price = 5599; $cssRoom = "apartment"; $cssVariant = "equipment"; $cssdrit = "notdrit";}
			if( $i == 6 ){ $price = 6199; $cssRoom = "apartment"; $cssVariant = "equipment-install"; $cssdrit = "notdrit";}
			if( $i == 7 ){ $price = 6399; $cssRoom = "apartment"; $cssVariant = "equipment-install-pult"; $cssdrit = "notdrit";}
			if( $i == 8 ){ $price = 990; $cssRoom =  "apartment"; $cssVariant = "abonprice"; $cssdrit = "notdrit";}
		} ?>

		<?php if($i >= 9 && $i <= 16){
			$name = 'STANDART+';
			$item1 =  __('Центральний блок', 'sequrity');
			$item2 =  __('Датчик руху', 'sequrity');
			$item3 =  __('Датчик відкриття дверей', 'sequrity');
			$item4 =  __('Тривожна кнопка', 'sequrity');
			if( $i == 9 ){ $price = 6399; $cssRoom =  "apartment"; $cssVariant = "equipment"; $cssdrit = "drit";}
			if( $i == 10 ){ $price = 6999; $cssRoom = "apartment"; $cssVariant = "equipment-install"; $cssdrit = "drit"; }
			if( $i == 11 ){ $price = 7199; $cssRoom = "apartment"; $cssVariant = "equipment-install-pult"; $cssdrit = "drit"; }
			if( $i == 12 ){ $price = 1490; $cssRoom =   "apartment"; $cssVariant = "abonprice"; $cssdrit = "drit";}

			if( $i == 13 ){ $price = 6899; $cssRoom = "apartment"; $cssVariant = "equipment"; $cssdrit = "notdrit";}
			if( $i == 14 ){ $price = 7499; $cssRoom = "apartment"; $cssVariant = "equipment-install"; $cssdrit = "notdrit";}
			if( $i == 15 ){ $price = 7699; $cssRoom = "apartment"; $cssVariant = "equipment-install-pult"; $cssdrit = "notdrit";}
			if( $i == 16 ){ $price = 990; $cssRoom =  "apartment"; $cssVariant = "abonprice"; $cssdrit = "notdrit";}
		} ?>
			
		<?php if($i >= 17 && $i <= 24){
			$name = 'STANDART++';
			$item1 =  __('Центральний блок', 'sequrity');
			$item2 =  __('Датчик руху', 'sequrity');
			$item3 =  __('Датчик відкриття дверей', 'sequrity');
			$item4 =  __('Тривожна кнопка', 'sequrity');
			if( $i == 17 ){ $price = 7699; $cssRoom = "apartment"; $cssVariant = "equipment"; $cssdrit = "drit";} 
			if( $i == 18 ){ $price = 8799; $cssRoom = "apartment"; $cssVariant = "equipment-install"; $cssdrit = "drit"; } 
			if( $i == 19 ){ $price = 8999; $cssRoom = "apartment"; $cssVariant = "equipment-install-pult"; $cssdrit = "drit";} 
			if( $i == 20 ){ $price = 1490; $cssRoom =   "apartment"; $cssVariant = "abonprice"; $cssdrit = "drit";}

			if( $i == 21 ){ $price = 8199; $cssRoom = "apartment"; $cssVariant = "equipment"; $cssdrit = "notdrit";}
			if( $i == 22 ){ $price = 8999; $cssRoom = "apartment"; $cssVariant = "equipment-install"; $cssdrit = "notdrit";}
			if( $i == 23 ){ $price = 9199; $cssRoom = "apartment"; $cssVariant = "equipment-install-pult"; $cssdrit = "notdrit";}
			if( $i == 24 ){ $price = 990; $cssRoom =  "apartment"; $cssVariant = "abonprice"; $cssdrit = "notdrit";}
		} ?>
		<?php if($i >= 25 && $i <= 32){
			$name = 'BUSINESS';
			$fromPrice = '399';
			$item1 =  __('Центральний блок', 'sequrity');
			$item2 =  __('Датчик руху', 'sequrity');
			$item3 =  __('Датчик відкриття дверей', 'sequrity');
			$item4 =  __('Тривожна кнопка', 'sequrity');
			if( $i == 25 ){ $price = 5099; $cssRoom = ["home", "office", "shop"]; $cssVariant = "equipment"; $cssdrit = "drit"; }
			if( $i == 26 ){ $price = 5999; $cssRoom = ["home", "office", "shop"]; $cssVariant = "equipment-install"; $cssdrit = "drit"; }
			if( $i == 27 ){ $price = 6199; $cssRoom = ["home", "office", "shop"]; $cssVariant = "equipment-install-pult"; $cssdrit = "drit"; }
			if( $i == 28 ){ $price = 1490; $cssRoom =   ["home", "office", "shop"]; $cssVariant = "abonprice"; $cssdrit = "drit";}

			if( $i == 29 ){ $price = 5599; $cssRoom = ["home", "office", "shop"]; $cssVariant = "equipment"; $cssdrit = "notdrit"; }
			if( $i == 30 ){ $price = 6199; $cssRoom = ["home", "office", "shop"]; $cssVariant = "equipment-install"; $cssdrit = "notdrit"; }
			if( $i == 31 ){ $price = 6399; $cssRoom = ["home", "office", "shop"]; $cssVariant = "equipment-install-pult"; $cssdrit = "notdrit"; }
			if( $i == 32 ){ $price = 990; $cssRoom =  ["home", "office", "shop"]; $cssVariant = "abonprice"; $cssdrit = "notdrit"; }
		} ?>

		<?php if($i >= 33 && $i <= 40){
			$name = 'BUSINESS+';
			$item1 =  __('Центральний блок', 'sequrity');
			$item2 =  __('Датчик руху', 'sequrity');
			$item3 =  __('Датчик відкриття дверей', 'sequrity');
			$item4 =  __('Тривожна кнопка', 'sequrity');
			if( $i == 33 ){ $price = 6399; $cssRoom = ["home", "office", "shop", "storage"]; $cssVariant = "equipment"; $cssdrit = "drit"; } 
			if( $i == 34 ){ $price = 6999; $cssRoom = ["home", "office", "shop", "storage"]; $cssVariant = "equipment-install"; $cssdrit = "drit"; } 
			if( $i == 35 ){ $price = 7199; $cssRoom = ["home", "office", "shop", "storage"]; $cssVariant = "equipment-install-pult"; $cssdrit = "drit"; }
			if( $i == 36 ){ $price = 1490; $cssRoom =   ["home", "office", "shop", "storage"]; $cssVariant = "abonprice"; $cssdrit = "drit";} 

			if( $i == 37 ){ $price = 6899; $cssRoom = ["home", "office", "shop", "storage"]; $cssVariant = "equipment"; $cssdrit = "notdrit"; }
			if( $i == 38 ){ $price = 7499; $cssRoom = ["home", "office", "shop", "storage"]; $cssVariant = "equipment-install"; $cssdrit = "notdrit"; }
			if( $i == 39 ){ $price = 7699; $cssRoom = ["home", "office", "shop", "storage"]; $cssVariant = "equipment-install-pult"; $cssdrit = "notdrit"; }
			if( $i == 40 ){ $price = 990; $cssRoom =  ["home", "office", "shop", "storage"]; $cssVariant = "abonprice"; $cssdrit = "notdrit"; }
		} ?>

		<?php if($i >= 41 && $i <= 48){
			$name = 'BUSINESS++';
			$cssRoom = ["home", "office", "shop", "storage"];
			$item1 =  __('Центральний блок', 'sequrity');
			$item2 =  __('Датчик руху', 'sequrity');
			$item3 =  __('Датчик відкриття дверей', 'sequrity');
			$item4 =  __('Тривожна кнопка', 'sequrity');
			if( $i == 41 ){ $price = 7699; $cssRoom = ["home", "office", "shop", "storage"]; $cssVariant = "equipment"; $cssdrit = "drit"; } 
			if( $i == 42 ){ $price = 8799; $cssRoom = ["home", "office", "shop", "storage"]; $cssVariant = "equipment-install"; $cssdrit = "drit"; } 
			if( $i == 43 ){ $price = 8999; $cssRoom = ["home", "office", "shop", "storage"]; $cssVariant = "equipment-install-pult"; $cssdrit = "drit";} 
			if( $i == 44 ){ $price = 1490;  $cssRoom = ["home", "office", "shop", "storage"];$cssVariant =   "abonprice"; $cssdrit = "drit";} 

			if( $i == 45 ){ $price = 8199; $cssRoom = ["home", "office", "shop", "storage"]; $cssVariant = "equipment"; $cssdrit = "notdrit";}
			if( $i == 46 ){ $price = 8999; $cssRoom = ["home", "office", "shop", "storage"]; $cssVariant = "equipment-install"; $cssdrit = "notdrit"; }
			if( $i == 47 ){ $price = 9199; $cssRoom = ["home", "office", "shop", "storage"]; $cssVariant = "equipment-install-pult"; $cssdrit = "notdrit"; }
			if( $i == 48 ){ $price = 990; $cssRoom = ["home", "office", "shop", "storage"]; $cssVariant =  "abonprice"; $cssdrit = "notdrit";} 
		} ?>
		<?php if($i >= 49 && $i <= 56){
			$name = 'PREMIUM';
			$fromPrice = '499';
			$cssRoom = ["home", "office", "shop", "storage", "apartment"];
			$item1 =  __('Центральний блок', 'sequrity');
			$item2 =  __('Датчик руху', 'sequrity');
			$item3 =  __('Датчик відкриття дверей', 'sequrity');
			$item4 =  __('Тривожна кнопка', 'sequrity');
			if( $i == 49 ){ $price = 8799; $cssVariant = "equipment"; $cssdrit = "drit";}
			if( $i == 50 ){ $price = 9699; $cssVariant = "equipment-install"; $cssdrit = "drit";}
			if( $i == 51 ){ $price = 9799; $cssVariant = "equipment-install-pult"; $cssdrit = "drit";}
			if( $i == 52 ){ $price = 1490; $cssVariant =   "abonprice"; $cssdrit = "drit";} 

			if( $i == 53 ){ $price = 9299; $cssVariant =  "equipment"; $cssdrit = "notdrit";} 
			if( $i == 54 ){ $price = 10199; $cssVariant = "equipment-install"; $cssdrit = "notdrit"; } 
			if( $i == 55 ){ $price = 10299; $cssVariant = "equipment-install-pult"; $cssdrit = "notdrit";} 
			if( $i == 56 ){ $price = 990; $cssVariant =   "abonprice"; $cssdrit = "notdrit";}
		} ?>
		<?php if($i >= 57 && $i <= 64){
			$name = 'ABONPLATA';
			$fromPrice = '499';
			$cssRoom = ["home", "office", "apartment"];
			$item1 =  __('Центральний блок', 'sequrity');
			$item2 =  __('Датчик руху', 'sequrity');
			$item3 =  __('Датчик відкриття дверей', 'sequrity');
			$item4 =  __('Тривожна кнопка', 'sequrity');
			if( $i == 57 ){ $price = 1490; $cssVariant = "equipment"; $cssdrit = "drit"; }
			if( $i == 58 ){ $price = 1490; $cssVariant = "equipment-install"; $cssdrit = "drit";}
			if( $i == 59 ){ $price = 1490; $cssVariant = "equipment-install-pult"; $cssdrit = "drit"; }
			if( $i == 60 ){ $price = 1490; $cssVariant =   "abonprice"; $cssdrit = "drit";} 

			if( $i == 61 ){ $price = 990; $cssVariant =  "equipment"; $cssdrit = "notdrit";}
			if( $i == 62 ){ $price = 990; $cssVariant = "equipment-install"; $cssdrit = "notdrit";}
			if( $i == 63 ){ $price = 990; $cssVariant = "equipment-install-pult"; $cssdrit = "notdrit";}
			if( $i == 64 ){ $price = 990; $cssVariant =   "abonprice"; $cssdrit = "notdrit";} 
		} ?>
		<?php if($i >= 65 && $i <= 72){
			$name = 'ABONPLATA+';
			$fromPrice = '599';
			$cssRoom = ["home", "office", "apartment"];
			$item1 =  __('Центральний блок', 'sequrity');
			$item2 =  __('Датчик руху', 'sequrity');
			$item3 =  __('Датчик відкриття дверей', 'sequrity');
			$item4 =  __('Тривожна кнопка', 'sequrity');
			if( $i == 65 ){ $price = 1490; $cssVariant = "equipment"; $cssdrit = "drit";} 
			if( $i == 66 ){ $price = 1490; $cssVariant = "equipment-install"; $cssdrit = "drit";} 
			if( $i == 67 ){ $price = 1490; $cssVariant = "equipment-install-pult"; $cssdrit = "drit";} 
			if( $i == 68 ){ $price = 1490; $cssRoom = "apartment"; $cssVariant = "abonprice"; $cssdrit = "drit";} 

			if( $i == 69 ){ $price = 990; $cssVariant = "equipment"; $cssdrit = "notdrit";} 
			if( $i == 70 ){ $price = 990; $cssVariant = "equipment-install"; $cssdrit = "notdrit";} 
			if( $i == 71 ){ $price = 990; $cssVariant = "equipment-install-pult"; $cssdrit = "notdrit";} 
			if( $i == 72 ){ $price = 990; $cssVariant = "abonprice"; $cssdrit = "notdrit";}
		} ?>
			<div class="taryf__item f-radio-taryf 
			<?php if(is_array($cssRoom)){
				foreach($cssRoom as $values){
					echo $values.' ';
				}
			} else {
				echo $cssRoom.' ';
			}; ?> 
			<?php echo $cssVariant.' '.$cssdrit; ?>">
				<input type="radio" name="taryf" id="taryf-<?php echo $i; ?>" value="<?php echo $name; ?>">
				<div class="taryf__linkr">
					<label class="taryf__overlay" for="taryf-<?php echo $i; ?>">

						<h4 class="taryf__header">
							<?php echo $name; ?>
							<?php if($name == "ABONPLATA" || $name == "ABONPLATA+"){ ?>
								<p class="taryf__tooltip">
									<span><?php _e('Оборудование передается в аренду. Аренда включена в стоимость абонплаты', 'sequrity'); ?></span>
								</p>
							<?php } ?>
						</h4>

						<div class="taryf__body">
							<p class="taryf__text">від <b><?php echo $fromPrice; ?></b></p>
							<p class="taryf__text"><?php _e('Вартість в міс.', 'sequrity')?></p>
							<p class="taryf__text taryf__text--primary"><?php _e('В комплекті', 'sequrity')?></p>
							<ul>
								<li><span><?php echo $item1; ?></span><span class="taryf__dashed"></span><span>1шт</span></li>
								<li><span><?php echo $item2; ?></span><span class="taryf__dashed"></span><span>1шт</span></li>
								<li><span><?php echo $item3; ?></span><span class="taryf__dashed"></span><span>1шт</span></li>
								<li><span><?php echo $item4; ?></span><span class="taryf__dashed"></span><span>1шт</span></li>
							</ul>
						</div>
						<div class="taryf__footer">
							<div class="taryf__prize-wrap">
								<?php _e('<p>Вартість<br> обладнання </p> ', 'sequrity')?><b><?php echo $price; ?></b>
							</div>
							<?php _e('<p>установка, налаштування, <br> підключення</p>', 'sequrity')?>
							<button type="button" class="bc-btn bc-btn--taryf">Залишити заявку</button>
						</div>
					</label>
				</div>
			</div>
			<?php } ?>
	</div>
	<div class="calc__btns">
		<button type="button" class="bc-btn--prev bc-btn"><?php _e('Назад', 'sequrity')?></button>
		<button type="button" class="bc-btn--next bc-btn btn-4" enabled><?php _e('Далі', 'sequrity')?><span class="bc-blick"><i></i></span></button>
	</div>
	<blockquote><?php _e('* За бажанням базовий набір може бути змінено чи розширено додатковими пристроями', 'sequrity')?></blockquote>
</div>
