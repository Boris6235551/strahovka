<?php
/*
Template Name: calc
*/

get_header();
?>
        <div class='wrapper'>
            <div class='sidebar'>
                <div class='sidebar_block'>
                    <h2>Физическим лицам:</h2>
                    <h3>Авто</h3>
                    <ul class='sidebar_nav blue'>
                        <li>
                            <a class='active' href='/fiz/auto/kasko'>КАСКО</a>
                        </li>
                        <li>
                            <a href='/fiz/auto/osgo'>ОСГО</a>
                        </li>
                        <li>
                            <a href='/fiz/auto/green-card'>Зеленая карта</a>
                        </li>
                        <li>
                            <a href='/fiz/auto/accidents'>Несчастные случаи</a>
                        </li>
                    </ul>
                </div>
                <div class='sidebar_block'>
                    <h3>Жилье</h3>
                    <ul class='sidebar_nav orange'>
                        <li>
                            <a href='/fiz/house/house'>Строение</a>
                        </li>
                        <li>
                            <a href='/fiz/house/flats'>Квартиры</a>
                        </li>
                        <li>
                            <a href='/fiz/house/owners-responsibility'>Ответственность владельцев квартир</a>
                        </li>
                    </ul>
                </div>
                <div class='sidebar_block'>
                    <h3>Здоровье</h3>
                    <ul class='sidebar_nav red'>
                        <li>
                            <a href='/fiz/health/accidents'>Несчастные случаи</a>
                        </li>
                        <li>
                            <a href='/fiz/health/dms'>Добровольное медицинское</a>
                        </li>
                        <li>
                            <a href='/fiz/health/emigrants-assurance'>Для выезжающих</a>
                        </li>
                    </ul>
                </div>
                <div class='sidebar_block'>
                    <h2>Смотрите также:</h2>
                    <ul class='related'>
                        <li>
                            <a href='/corp'>Услуги для корпоративных клиентов</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class='content'>
                <div class='breadcrumbs'>
                    <a href="/">Главная</a>
                    <a href="/fiz/auto">Авто</a>
                    <a href="/fiz/auto/kasko">КАСКО</a>
                    Расчет стоимости и заказ
                </div>
                <h2>Калькулятор КАСКО</h2>
                <div class='request-description'>
                    <p>Приведенные ниже цифры стоимости КАСКО примерные, для того, чтобы вы могли ориентироваться в диапозоне цен. Точную цифру по стоимости полиса вам подскажут после того, как вы оставите заявку. В 90% случаев финальные цифры оказываются меньше, чем то, что показал калькулятор КАСКО.</p>
                    <p>&nbsp;</p>
                    <p>Если хотите получить <strong>точный</strong> расчет, можете ответить на несколько вопросов в нашем блоге&nbsp;<a href="/blog/post/48" target="_blank">Расчет КАСКО в Минске</a>, и мы ответим максимально быстро.</p>
                </div>
                <form name='calculate' class='calc'>
                    <div class='form_row'>
                        <label>Год выпуска:</label>
                        <select class='age_select' name='year'>
                            <option>2020</option>
                            <option>2019</option>
                            <option>2018</option>
                            <option>2017</option>
                            <option>2016</option>
                            <option>2015</option>
                            <option>2014</option>
                            <option>2013</option>
                            <option>2012</option>
                            <option>2011</option>
                            <option>2010</option>
                            <option>2009</option>
                            <option>2008</option>
                            <option>2007</option>
                            <option>2006</option>
                            <option>2005</option>
                            <option>2004</option>
                            <option>2003</option>
                            <option>2002</option>
                            <option>2001</option>
                            <option>2000</option>
                            <option>1999</option>
                            <option>1998</option>
                            <option>1997</option>
                            <option>1996</option>
                            <option>1995</option>
                            <option>1994</option>
                            <option>1993</option>
                            <option>1992</option>
                            <option>1991</option>
                            <option>1990</option>
                        </select>
                    </div>
                    <div class='form_row'>
                        <label>Стоимость автомобиля:</label>
                        <input class='input_cost' name='cost_auto' value='0' type='text'></input>
                        <select id='currency_select' class='age_select' name='currency'>
                        	<option>USD</option>
                        	<option>EUR</option>
                        	<option>RUB</option>
                        	<option>BYN</option>
                        </select>
                    </div>
                    <div class="payment">
                        <input class='calculate' type='button' value='Рассчитать стоимость' onclick="calc()"></input>
                        <div id="rezultatYear"></div>
                        <div id="currencyYear"></div>
                        <div id="rezultatQuarter"></div>
                        <div id="currencyQuarter"></div>
                    </div>
                </form>
                <form action='<?php echo get_permalink(113); ?>' method='post' class='calc order telefon' id='request-form'>
                    <div class='form_row'>
                        <h3>Оформить заказ</h3>
                    </div>
                    <div class='form_row'>
                        <label>Имя: <span class="required">*</span></label>
                        <input class='input_name' name='name_checkout' type='text'>
                        <span class='error_message' data-bind='visible: display_name_should_be_present' style='display: none'>Поле должно быть заполнено</span>
                    </div>
                    <div class='form_row'>
                        <label>Телефон: <span class="required">*</span></label>
                        <input class='input_name' name='phone_checkout' placeholder='+375-(__)-___-__-__' type='tel' pattern="+375-[0-9]{2}-[0-9]{3}-[0-9]{2}-[0-9]{2}">
                        <span class='error_message' style='display: none'>Поле должно быть заполнено</span>
                    </div>
                    <input class='calculate' type='submit' value='Отправить заказ'>
                </form>
            </div>
        </div>

<script type="text/javascript">
	function calc() {
 		let costCar = Number(document.forms.calculate.elements.cost_auto.value); // строка ввода клиентом стоимости машины
 		let url;
 		let costCarEuro;
		// API нацбанка по курсам валют и приведение к одной валюте - евро

		if (document.forms.calculate.elements.currency.value == 'USD') {
			url = 'http://www.nbrb.by/API/ExRates/Rates/145';
		} else if (document.forms.calculate.elements.currency.value == 'EUR') {
			url = 'http://www.nbrb.by/API/ExRates/Rates/292';
		} else if (document.forms.calculate.elements.currency.value == 'RUB') {
			url = 'http://www.nbrb.by/API/ExRates/Rates/298';
		} else {
			url = 'http://www.nbrb.by/API/ExRates/Rates/292';
		}
        let kurs = 1;
		let c;
		let d;
		let a = fetch(url);
		let b = fetch('http://www.nbrb.by/API/ExRates/Rates/292');
		a.then(response => response.json())
			.then(Rate => c = (Rate.Cur_OfficialRate))
		b.then(response => response.json())
			.then(Rate => d = Rate.Cur_OfficialRate)
			.then( function() {
                
                if (c == undefined) { calc(); }

				if (document.forms.calculate.elements.currency.value == 'USD' && isNaN(costCar) != true && costCar != '0') {
					costCar = Math.round(costCar * c / d);
                    kurs = (c/d);
					return (costCar);
				} else if (document.forms.calculate.elements.currency.value == 'EUR' && isNaN(costCar) != true && costCar != '0') {
					costCar = costCar;
					return (costCar);
				} else if (document.forms.calculate.elements.currency.value == 'RUB' && isNaN(costCar) != true && costCar != '0') {
					costCar = Math.round(costCar * c / 100 / d);
                    kurs = (c / 100 / d);
					return (costCar);
				} else if (document.forms.calculate.elements.currency.value == 'BYN' && isNaN(costCar) != true && costCar != '0') {
					costCar = Math.round(costCar / d);
                    kurs = (1 / d);
					return (costCar);
				} else if (isNaN(costCar) == true || costCar == '0') { 
		 			alert('Введите правильную стоимость автомобиля!');
				}
			})
			.then(function(costCar){


                tarif(costCar);
 
                if (rate == 0) {
                    alert('Тариф для Вашего автомобиля будет согласован в индивидуальном порядке, пожалуйста, обратитесь в офис нашей компании');
                } else if (costCar != undefined) {

				    document.getElementById('rezultatYear').innerHTML = Math.round(rate*costCar/100/kurs);
                    document.getElementById('currencyYear').innerHTML = document.getElementById('currency_select').value + ' в год';
                    document.getElementById('rezultatQuarter').innerHTML = Math.round(rate*costCar/400/kurs);
                    document.getElementById('currencyQuarter').innerHTML = document.getElementById('currency_select').value + ' в квартал';
                }
			})
			.catch(console.log.bind(console));
		
		function tarif(costCar) {

			// расчет возраста машины

			let date = new Date();
			let month = date.getMonth();
			let age_auto = date.getFullYear() - document.forms.calculate.elements.year.value;

			if (month > 5) {
				age_auto = age_auto + 1;
			}
		
			// расчёт тарифа
	
			if ( age_auto <= 3 ) {
				if ( costCar <= 10000 ) {
					rate = 3.9;
				} else if (costCar > 10000 && costCar <= 15000 ) {
					rate = 3.5;
				} else if (costCar > 15000 && costCar <= 20000 ) {
					rate = 3;
				} else {
					rate = 2.6;
				}
			} else if ( age_auto > 3 && age_auto <= 5) {
				if ( costCar <= 10000) {
					rate = 5.42;
				} else if (costCar > 10000 && costCar <= 15000 ) {
					rate = 4.87;
				} else if (costCar > 15000 && costCar <= 20000 ) {
					rate = 4.18;
				} else {
					rate = 3.66;
				}
			} else if ( age_auto > 5 && age_auto <= 7) {
				if ( costCar <= 10000) {
					rate = 5.89;
				} else if (costCar > 10000 && costCar <= 15000 ) {
					rate = 5.29;
				} else if (costCar > 15000 && costCar <= 20000 ) {
					rate = 4.54;
				} else {
					rate = 3.99;
				}
			} else {
					rate = 0;
			}
		}	
	}

</script>

<?php
get_footer();