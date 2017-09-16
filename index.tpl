<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,700&subset=latin,Cyrillic" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/skeleton.css">
  <link rel="stylesheet" href="css/custom.css">
  <title>{{TITLE}}</title>
</head>
<body>
<!-- основной раздел -->
<div class="section header">
  <div class="container">
    <div class="row">
      <div class="four columns">
        <p class="logo">{{COMPANY}}</p>
      </div>
      <div class="eight columns nav">
        <a class="button button-primary" href="#">Главная</a>
        <a class="button" href="#">Клиенты</a>
        <a class="button" href="#">О нас</a>
        <a class="button" href="#">Вакансии</a>
      </div>
    </div>
    <div class="row action">
      <h1>Мы творим великие дела</h1>
      <h2>Свежая выпечка в {{TODAY}}!!</h2>
	  <h2>Текущее время {{TIME}}</h2>
      <a href="#" class="button button-primary">Сделать заказ</a>
    </div>
  </div>
</div>
<!-- раздел контента -->
<div class="container">
  <div class="row">
    <h2>{{NEWS}}</h2>
	<p>{{CONTENT}}</p>
	<p>{{TASKS}}</p>
  </div>
</div>
<!-- колонтитул -->
<div class="container">
  <div class="row">
    <div class="eight columns">
      <p>© {{COMPANY}} {{YEAR}}. {{COMPANY}} - это вымышленное название. Любое сходство с реальными компаниями случайно.</p>
    </div>
    <div class="four columns">
      <form>
        <label for="exampleEmailInput">Подпишитесь на рассылку</label>
        <input class="u-full-width" type="email" placeholder="test@mailbox.com" id="exampleEmailInput">
        <input class="button-primary" type="submit" value="OK">
      </form>
    </div>
  </div>
</div>
</body>
</html>