<?
if($INCLUDE_FROM_CACHE!='Y')return false;
$datecreate = '001676877012';
$dateexpire = '001679469012';
$ser_content = 'a:2:{s:7:"CONTENT";s:0:"";s:4:"VARS";a:2:{s:7:"results";a:5:{i:0;a:5:{s:5:"title";s:66:"Символы пароля к БД в одном регистре";s:8:"critical";s:5:"HIGHT";s:6:"detail";s:142:"Пароль слишком простой, что повышает риск взлома учетной записи в базе данных";s:14:"recommendation";s:91:"Использовать различный регистр символов в пароле";s:15:"additional_info";s:0:"";}i:1;a:5:{s:5:"title";s:102:"Пароль к БД не содержит спецсимволов(знаков препинания)";s:8:"critical";s:5:"HIGHT";s:6:"detail";s:138:"Пароль слишком прост, что повышает риск взлома учетной записи в базе данных";s:14:"recommendation";s:57:"Добавить спецсимволов в пароль";s:15:"additional_info";s:0:"";}i:2;a:5:{s:5:"title";s:105:"Ограничен список потенциально опасных расширений файлов";s:8:"critical";s:5:"HIGHT";s:6:"detail";s:377:"Текущий список расширений файлов, которые считаются потенциально опасными, не содержит всех рекомендованных значений. Список расширений исполняемых файлов всегда должен находится в актуальном состоянии";s:14:"recommendation";s:264:"Вы всегда можете изменить список расширений исполняемых файлов в настройках сайта: <a href="/bitrix/admin/settings.php?mid=fileman" target="_blank">Управление структурой</a>";s:15:"additional_info";s:344:"Текущие: php,php3,php4,php5,php6,phtml,pl,asp,aspx,cgi,exe,ico,shtm,shtml<br>
Рекомендованные (без учета настроек вашего сервера): php,php3,php4,php5,php6,phtml,pl,asp,aspx,cgi,dll,exe,ico,shtm,shtml,fcg,fcgi,fpl,asmx,pht,py,psp<br>
Отсутствующие: dll,fcg,fcgi,fpl,asmx,pht,py,psp";}i:3;a:5:{s:5:"title";s:101:"Не удалось проверить доступность обновлений платформы";s:8:"critical";s:5:"HIGHT";s:6:"detail";s:193:"Возможно доступно обновление системы SiteUpdate или у вашей копии продукта истек период получения обновлений";s:14:"recommendation";s:143:"Подробнее на странице: <a href="/bitrix/admin/update_system.php" target="_blank">Обновление платформы</a>";s:15:"additional_info";s:0:"";}i:4;a:5:{s:5:"title";s:113:"Разрешено отображение сайта во фрейме с произвольного домена";s:8:"critical";s:6:"MIDDLE";s:6:"detail";s:307:"Запрет отображения фреймов сайта со сторонних доменов способен предотвратить целый класс атак, таких как <a href="https://www.owasp.org/index.php/Clickjacking" target="_blank">Clickjacking</a>, Framesniffing и т.д.";s:14:"recommendation";s:1875:"Скорее всего, вам будет достаточно разрешения на просмотр сайта в фреймах только на страницах текущего сайта.
Сделать это достаточно просто, достаточно добавить заголовок ответа "X-Frame-Options: SAMEORIGIN" в конфигурации вашего frontend-сервера.
</p><p>В случае использования nginx:<br>
1. Найти секцию server, отвечающую за обработку запросов нужного сайта. Зачастую это файлы в /etc/nginx/site-enabled/*.conf<br>
2. Добавить строку:
<pre>
add_header X-Frame-Options SAMEORIGIN;
</pre>
3. Перезапустить nginx<br>
Подробнее об этой директиве можно прочесть в документации к nginx: <a href="http://nginx.org/ru/docs/http/ngx_http_headers_module.html" target="_blank">Модуль ngx_http_headers_module</a>
</p><p>В случае использования Apache:<br>
1. Найти конфигурационный файл для вашего сайта, зачастую это файлы /etc/apache2/httpd.conf, /etc/apache2/vhost.d/*.conf<br>
2. Добавить строки:
<pre>
&lt;IfModule headers_module&gt;
	Header set X-Frame-Options SAMEORIGIN
&lt;/IfModule&gt;
</pre>
3. Перезапустить Apache<br>
4. Убедиться, что он корректно обрабатывается Apache и этот заголовок никто не переопределяет<br>
Подробнее об этой директиве можно прочесть в документации к Apache: <a href="http://httpd.apache.org/docs/2.2/mod/mod_headers.html" target="_blank">Apache Module mod_headers</a>
</p>";s:15:"additional_info";s:2277:"Адрес: <a href="https://hv01-terenteva.study.mcart.ru/?rnd=0.6092835404868149&t=T022" target="_blank">https://hv01-terenteva.study.mcart.ru/?rnd=0.6092835404868149&t=T022</a><br>Запрос/Ответ: <pre>GET /?rnd=0.6092835404868149&amp;t=T022 HTTP/1.1
Host: hv01-terenteva.study.mcart.ru
User-Agent: BitrixCloud BitrixSecurityScanner/Robin-Scooter rnd28
Accept: */*
Accept-Encoding: gzip, deflate

HTTP/1.1 200 OK
server: nginx
date: Mon, 20 Feb 2023 07:08:50 GMT
content-type: text/html; charset=UTF-8
transfer-encoding: chunked
vary: Accept-Encoding
p3p: policyref=&quot;/bitrix/p3p.xml&quot;, CP=&quot;NON DSP COR CUR ADM DEV PSA PSD OUR UNR BUS UNI COM NAV INT DEM STA&quot;
x-powered-cms: Bitrix Site Manager (a0c3dc27ee255adae3e87a1e03b46a1a)
set-cookie: PHPSESSID=abq5t9ldteu8pdgq25lm8j9akk; path=/; HttpOnly
expires: Thu, 19 Nov 1981 08:52:00 GMT
cache-control: no-store, no-cache, must-revalidate
pragma: no-cache
x-content-type-options: nosniff
strict-transport-security: max-age=31536000
content-encoding: gzip

&lt;!DOCTYPE html&gt;
&lt;html lang=&quot;en&quot;&gt;
  &lt;head&gt;
  &lt;meta http-equiv=&quot;Content-Type&quot; content=&quot;text/html; charset=UTF-8&quot; /&gt;
&lt;meta name=&quot;robots&quot; content=&quot;index, follow&quot; /&gt;
&lt;meta name=&quot;keywords&quot; content=&quot;мягкая мебель, офисная мебель, мебель для кухни, детская мебель&quot; /&gt;
&lt;meta name=&quot;description&quot; content=&quot;Мебельная компания осуществляет производство мебели на высококлассном оборудовании с применением минимальной доли ручного труда, что позволяет обеспечить высокое качество нашей продукции.&quot; /&gt;
&lt;link href=&quot;/bitrix/cache/css/s1/home/template_bebb0624540bdfcc08505b6fd23618b9/template_bebb0624540bdfcc08505b6fd23618b9_v1.css?167664092736945&quot; type=&quot;text/css&quot;  data-template-style=&quot;true&quot; rel=&quot;stylesheet&quot; /&gt;
&lt;script type=&quot;text/javascript&quot;&gt;var _ba = _ba || []; _ba.push([&quot;aid&quot;, &quot;a0c3dc27ee255adae3e87a1e03b46a1a&quot;]); _ba.</pre>";}}s:9:"test_date";s:10:"20.02.2023";}}';
return true;
?>