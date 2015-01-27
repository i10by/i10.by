<form class="new-ord" method="post" id="send-mail">
    <div id="send-mail-success">
        <div class="in">
            <div class="text">Спасибо!</div>
            <div id="zak-ag">Подать ещё одну заявку</div>
        </div>
    </div>
    <div id="send-mail-content">
        <div class="title">Оформление заявки</div>
        <div class="content">
            <div class="section">
                <div class="name">Имя:</div>
                <input name="name" id="bid-name" autofocus>
            </div>
            <div class="section">
                <div class="name">Телефон<span class="red">*</span>:</div>
                <input name="phone" id="bid-phone" placeholder="Обязательное поле" required>
            </div>
            <div class="section">
                <div class="name">Подробности заказа:</div>
                <textarea name="deals" id="bid-deals" rows="5"><? echo $_POST['q']; ?></textarea>
            </div>
        </div>
        <button>Отправить</button>
    </div>
</form>
<div class="line-block">
    <div class="cont-men">
        <div class="men-pic mess"></div>
        <div class="men-content">
            <h1 class="men-name">Хотите подать заявку?</h1>
            <div class="men">
                <h2>Для этого не обязательно заполнять все поля.</h2>
                <h2>Минимальная заявка состоит лишь из номера телефона, на который мы перезвоним вам в течении нескольких минут.</h2>
                <h2>Спасибо!</h2>
            </div>
        </div>
    </div>
</div>