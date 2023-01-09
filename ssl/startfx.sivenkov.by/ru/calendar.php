<?php include_once 'header.php'; ?>
<link rel="stylesheet" href="../common/css/calendar.css">
<div class="section section-calendar">
    <div class="container">
        <h1 class="section-calendar-title section-title title">Экономический календарь</h1>
        <div class="calendar-content js-scroll-block">
            <div class="square"></div>
            <iframe class= "calendar-iframe" scrolling="no" allowtransparency="true" frameborder="0" src="https://s.tradingview.com/eventswidgetembed/?locale=ru#%7B%22width%22%3A%22510%22%2C%22height%22%3A%22600%22%2C%22importanceFilter%22%3A%22-1%2C0%2C1%22%2C%22utm_source%22%3A%22ru.tradingview.com%22%2C%22utm_medium%22%3A%22widget_new%22%2C%22utm_campaign%22%3A%22events%22%7D"></iframe>
        </div>
    </div>
</div>
<?php include_once 'btn-call.php'; ?>
<?php include_once 'footer.php'; ?>
