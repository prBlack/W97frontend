<?php
/* 
-----------------
Language Translation File for HOMEWEATHERSTATION Template
Language: DEFAULT ENGLISH LANGUAGE TEMPLATE CODE this is the master file
Code By : BRIAN UNDERDOWN
Developed By: Brian Underdown/Erik M Madsen
October/November 2016
-----------------
*/
# -----------------------------------------------------
# Day / Months do not edit
# -----------------------------------------------------
$day = date("l");
$day2 = date("l", time()+86400);
$daynum = date("j");
$monthtrans = date("F");
$year = date("Y");
# -----------------------------------------------------
# -----------------------------------------------------
setlocale(LC_TIME, "ru_RU");
$lang = array();

// Menu


$lang['Settings'] = 'Настройки';
$lang['Layout'] = 'Переключить раскладку';
$lang['Lighttheme'] = 'Светлый фон';
$lang['Darktheme'] = 'Темный фон';
$lang['Nonmetric'] = 'US (F) ';
$lang['Metric'] = 'Метрическая (C)';
$lang['UKmetric'] = 'UK (MPH - Metric) ';
$lang['Scandinavia'] = 'Scandinavia(M/S)';

$lang['Worldwideearthquakes'] = 'World Wide Earthquakes';
$lang['Toggle'] = 'Полный экран';
$lang['Contactinfo'] = 'Инфо о станции';
$lang['Templateinfo'] = 'Template Info';
$lang['language'] = 'Выбрать язык';
$lang['Weatherstationinfo'] = 'Weather Station Info';
$lang['Webdesigninfo'] = 'О шаблоне';
$lang['Contact'] = 'Контакты';



//temperature
$lang['Temperature'] = 'Температура';
$lang['Feelslike'] = 'Осадки';
$lang['Humidity'] = 'Влажность';
$lang['Dewpoint'] = 'Точка росы';
$lang['Trend'] = 'Графики';
$lang['Heatindex'] = 'Индекс теплоты';
$lang['Windchill'] = 'Коэф. охлаждения ветром';
$lang['Tempfactors'] = 'Тепловой фактор';
$lang['Nocautions'] = 'Без предупреждений';
$lang['Wetbulb'] = 'Влажн.термометр';
$lang['dry'] = '& Сухо';
$lang['verydry'] = '& Очень сухо';

//new feature temperature feels
$lang['FreezingCold'] = 'Заморозки';
$lang['FeelingVeryCold'] = 'Очень холодно';
$lang['FeelingCold'] = 'холодно';
$lang['FeelingCool'] = 'Прохладно';
$lang['FeelingComfortable'] = 'Комфортно ';
$lang['FeelingWarm'] = 'Тепло';
$lang['FeelingHot'] = 'Жарко';
$lang['FeelingUncomfortable'] = 'Жарко';
$lang['FeelingVeryHot'] = 'Очень жарко';
$lang['FeelingExtremelyHot'] = 'Очень жарко';



//wind
$lang['Windspeed'] = 'Скорость';
$lang['Gust'] = 'Порывы';
$lang['Direction'] = 'Направление';
$lang['Gusting'] = 'Порывистый в';
$lang['Blowing'] = 'Постоянный';
$lang['Wind'] = 'Ветер';

// Wind phrases for Beaufort scale for windspeed area
$lang['Calm'] = 'Штиль';
$lang['Lightair'] = 'Легкий ветер';
$lang['Lightbreeze'] = 'Легкий бриз';
$lang['Gentelbreeze'] = 'Умеренный ветер';
$lang['Moderatebreeze'] = 'Умеренный ветер';
$lang['Freshbreeze'] = 'Свежий ветер';
$lang['Strongbreeze'] = 'Сильный ветер';
$lang['Neargale'] = 'Штормовой ветер';
$lang['Galeforce'] = 'Шторм';
$lang['Stronggale'] = 'Сильный шторм';
$lang['Storm'] = 'Ураган';
$lang['Violentstorm'] = 'Сильный ураган';
$lang['Hurricane'] = 'Сильный ураган';


// Wind phrases from Beaufort scale for current conditions area
$lang['CalmConditions'] = 'Безветренная погода';
$lang['LightBreezeattimes'] = 'Легкий ветер временами';
$lang['MildBreezeattimes'] = 'Умеренный ветер временами';
$lang['ModerateBreezeattimes'] = 'Свежий ветер временами';
$lang['FreshBreezeattimes'] = 'Свежий ветер временами';
$lang['StrongBreezeattimes'] = 'Сильный ветер временами';
$lang['NearGaleattimes'] = 'Штормовое предупреждение';
$lang['GaleForceattimes'] = 'Шторм временами';
$lang['StrongGaleattimes'] = 'Сильный шторм временами';
$lang['StormConditions'] = 'Ураган';
$lang['ViolentStormConditions'] = 'Сильный ураган';
$lang['HurricaneConditions'] = 'Сильный ураган';

$lang['Avg'] = '<span2> Среднее: </span2>';

//wind direction compass
$lang['Northdir'] = 'Due <span>North<br></span>';
$lang['NNEdir'] = 'North North <br><span>East</span>';
$lang['NEdir'] = 'North <span> East<br></span>';
$lang['ENEdir'] = 'East North<br><span>East</span>';
$lang['Eastdir'] = "Due <span> East<br></span>";
$lang['ESEdir'] = 'East South<br><span>East</span>';
$lang['SEdir'] = 'South <span> East</span>';
$lang['SSEdir'] = 'South South<br><span>East</span>';
$lang['Southdir'] = 'Due <span> South</span>';
$lang['SSWdir'] = 'South South<br><span>West</span>';
$lang['SWdir'] = 'South <span> West</span>';
$lang['Westdir'] = 'Due <span>West<br></span>';
$lang['WSWdir'] = 'West South<br><span>West</span>';
$lang['Westdir'] = 'Due <span> West</span>';
$lang['WNWdir'] = 'West North<br><span>West</span>';
$lang['NWdir'] = 'North <span> West</span>';
$lang['NWNdir'] = 'North North<br><span>West</span>';




//wind direction avg
$lang['North'] = 'North';
$lang['NNE'] = 'NNE';
$lang['NE'] = 'NE';
$lang['ENE'] = 'ENE';
$lang['East'] = 'Easterly ';
$lang['ESE'] = 'ESE';
$lang['SE'] = 'SE';
$lang['SSE'] = 'SSE';
$lang['South'] = 'South';
$lang['SSW'] = 'SSW';
$lang['SW'] = 'SW';
$lang['WSW'] = 'WSW';
$lang['West'] = 'West';
$lang['WNW'] = 'WNW';
$lang['NW'] = 'NW';
$lang['NWN'] = 'NWN';

//rain
$lang['raintoday'] = 'Осадки сегодня';
$lang['Rate'] = 'Норма';
$lang['Rainfall'] = 'Rainfall';
$lang['Precip'] = 'Дождь'; // must be short name do not use full precipatation !!!! ///
$lang['Rain'] = 'Дождь';
$lang['Heavyrain'] = 'Ливень';
$lang['Flooding'] = 'Возможность затопления';
$lang['Rainbow'] = 'Радуга';
$lang['Windy'] = 'Ветренно';


//sun -moon-daylight-darkness
$lang['Sun'] = 'Солнце';
$lang['Moon'] = 'Луна';
$lang['Sunrise'] = 'Восход';
$lang['Sunset'] = 'Закат';
$lang['Moonrise'] = 'Восход луны';
$lang['Moonset'] = 'Заход луны';
$lang['Night'] = 'Ночью';
$lang['Day'] = 'Днем';
$lang['Nextnewmoon'] = 'След. новолуние';
$lang['Nextfullmoon'] = 'След. полнолуние';
$lang['Luminance'] = 'Luminance';
$lang['Moonphase'] = 'Фаза луны';
$lang['Estimated'] = 'Ожидается';
$lang['Daylight'] = 'Астономический альманах';
$lang['Darkness'] = 'Темно';
$lang['Daysold'] = 'Дней прошло';
$lang['Belowhorizon'] = 'below<br>horizon';
$lang['Till'] = ' через';
$lang['Minago'] = ' мин. прошло';
$lang['Hrs'] = ' час.';
$lang['Min'] = ' мин.';
$lang['TotalDarkness'] = 'Долгота дня';
$lang['TotalDaylight'] = 'Долгота ночи';
$lang['Below'] = 'ниже горизонта';

$lang['Newmoon'] = 'Новолуние';
$lang['Waxingcrescent'] = 'Молодая луна';
$lang['Firstquarter'] = 'Первая четверь';
$lang['Waxinggibbous'] = 'Растущая луна';
$lang['Fullmoon'] = 'Полнолуние';
$lang['Waninggibbous'] = 'Убывающая луна';
$lang['Lastquarter'] = 'Последняя четверь';
$lang['Waningcrescent'] = 'Старая луна';


//trends

$lang['Falling'] = 'падает';
$lang['Rising'] = 'возрастает';
$lang['Steady'] = 'стабильно';
$lang['Rapidly'] = 'быстро';
$lang['Temp'] = 'Temp';


//Solar-UV

//uv
$lang['Nocaution'] = 'No <color>caution</color> required';
$lang['Wearsunglasses'] = 'Оденьте <color>солнечные очки</color> ';
$lang['Stayinshade'] = 'Оставайтесь в тени <color>Опасность</color> солнечного удара';
$lang['Reducetime'] = 'Reduce time in the <color>sun</color> between 10am-4pm ';
$lang['Minimize'] = 'Minimize <color>sun</color> exposure between 10am-4pm ';
$lang['Trytoavoid'] = 'Try to avoid <color>sun</color> exposure between 10am-4pm ';

//solar

$lang['Poor'] = 'Poor<color> <br>Radiation</color>';
$lang['Low'] = 'Low <br><color>Radiation</color>';
$lang['Moderate'] = 'Moderate <br><color>Radiation</color>';
$lang['Good'] = 'Good <br><color>Radiation</color>';
$lang['Solarradiation']= 'Solar Radiation';

//Contact Form Info
$lang['Name']  = 'Владислав';
$lang['Email']  = 'vlad.v.master@gmail.com';
$lang['Message'] = 'Message';
$lang['Submit']  = 'Отправить';
$lang['Security']  = 'Код подтверждения';
$lang['Refresh'] = 'Обновить';
$lang['Cantread'] = 'Не могу прочитать код';
$lang['Completeform']  = 'Пожалуста заполните форму ...';
$lang['Itemscomplete'] = 'поля отмеченные * обязательны для заполнения....';
$lang['Noname'] = '<div class="vpb_info" align="left">Please enter your name in the required field to proceed. Thanks.</div>';
$lang['Noemail']  = '<div class="vpb_info" align="left">Please enter your email in the required field to proceed. Thanks.</div>';
$lang['Nomessage'] = '<div class="vpb_info" align="left">Please enter your message in the required message field to proceed. Thanks.</div>';
$lang['Nosecurity'] = '<div class="vpb_info" align="left">Please enter the security code in its field to send us your message. Thanks.</div>';
$lang['Sorrysecurity']  = '<div class="vpb_info" align="left">Sorry, the security code you provided was incorrect, try again.</div>';
$lang['Success'] = '<div class="vpb_info" align="left">Success your email message has been sent successfully! Thanks.</div>';
$lang['Sorrynotsent']  = '<div class="vpb_info" align="left">Sorry, your email could not be sent at the moment. Please try again.</div>';


//current sky
$lang['Currentsky'] = 'Текущее состояние';
$lang['Currently'] = 'Текущее';
$lang['Cloudcover'] = 'Облачный покров';

//Notifications
$lang['Nocurrentalert'] = 'Уведомлений <span>нет</span>';
$lang['Windalert'] = 'Порывы ветра в ';
$lang['Tempalert'] = 'Высокая температура';
$lang['Heatindexalert'] = 'Предупреждение по индексу тепла ';
$lang['Windchillalert'] = 'Предупреждение ветроохлаждения';
$lang['Dewpointalert'] = 'Некомфортная влажность';
$lang['Dewpointcolderalert'] = 'Предупреждение точки росы|замерзания';
$lang['Feelslikecolderalert'] = 'Похолодание';
$lang['Feelslikewarmeralert'] = 'Потепление';
$lang['Rainratealert'] = 'ближайший час<span> сильные осадки ';


//Earthquake Notifications
$lang['Regional'] = 'Regional Earthquake';
$lang['Significant'] = 'Significant Earthquake';
$lang['Nosignificant'] = 'No Significant Earthquakes';


//Main page
$lang['Barometer'] = 'Давление';
$lang['UVSOLAR'] = 'Солнечная активность';
$lang['Earthquake'] = 'Землетрясение';
$lang['Daynight'] = 'Инфо по суткам';

$lang['Location'] = 'Местонахождение';
$lang['Hardware'] = 'Оборудование';
$lang['Rainfalltoday'] = 'Осадки';
$lang['Windspeed'] = 'Ветер';
$lang['Winddirection'] = 'Направление';
$lang['Measured'] = 'Измерения';
$lang['Forecast'] = 'Прогноз';
$lang['Forecastahead'] = 'Прогноз';
$lang['Forecastsummary'] = 'Общий прогноз';
$lang['WindGust'] = 'Ветер | Порывы';

$lang['Hourlyforecast'] = 'На ближайший час ';
$lang['Significantearthquake'] = 'Significant Earthquake';
$lang['Regionalearthquake'] = 'Regional Earthquake';
$lang['Average'] = 'Среднее';
$lang['Notifications'] = 'Метео <span>уведомления</span>';
$lang['Indoor'] = 'В помещении';
$lang['Today'] = 'Днем';
$lang['Tonight'] = 'Ночью';
$lang['Tomorrow'] = 'Завтра';
$lang['Tomorrownight'] 		 = 'Завтра ночью';
$lang['Updated'] 		 = 'Обновлено';
$lang['Meteor'] 		 = 'Информация по метеорам';
$lang['WeatherStationNotifications'] = 'Напоминания';  
$lang['Firerisk'] = 'Опасность пожара'; 
$lang['Localtime'] = 'Локальное <span2>время</span2>';
$lang['Nometeor'] = 'No Meteor Showers';
$lang['LiveWebCam'] = 'Видео';
$lang['Online'] = 'Online';
$lang['Offline'] = 'Отключено';
$lang['Weatherstation'] = 'Метеостанция';
$lang['Cloudbase'] = 'Облачность';
$lang['uvalert'] = 'Caution High UVINDEX';
$lang['Rainbow'] = 'Радуга';
$lang['Windy'] = 'Ветренно';
$lang['Max'] = 'Макс.';
$lang['Min'] = 'Мин.';

//earthquake TOP MODULE 10 July 2017
$lang['ModerateE'] = 'Moderate Earthquake';
$lang['MinorE'] = 'Minor Earthquake';
$lang['StrongE'] = 'Strong Earthquake';
$lang['RegionalE'] = 'Regional';

$lang['Conditions'] = '.';
$lang['Cloudbase Height'] = 'Высота облачности';
$lang['Station'] = 'Станция';

$lang['Detailed Forecast'] = 'Подробный прогноз';
$lang['Summary Outlook'] = 'Общий';

//Air Quality
$lang['Hazordous']= 'Опасный';
$lang['VeryUnhealthy']= 'Очень неблагоприятное';
$lang['Unhealthy']= 'Неблагоприятное';
$lang['UnhealthyFS']= 'Неблагоприятное для некоторых';
$lang['Moderate']= 'Приемлемое';
$lang['Good']= 'Хорошее качество';
?>
