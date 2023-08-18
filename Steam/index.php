<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta password="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    body {
        margin: 0;
        padding: 0;
    }
    .globalheader{
        
        background: #171d25;
        width: 100%;
        height: 104px;
        font-family: "Motiva Sans",sans-serif;
        font-weight: normal;
        display: flex;
        justify-content: center;
        align-items: center;

        
    }
    .header-right a {
        
        /* margin: auto; */
        margin-left: 7px;
        
        font-size: 18px;
        
    }
    
    .logo,.header-right {
        /* padding: 35px; */
        /* padding-left: 20px; */
        padding-left: 12px;
        
        
        
        
        
        
    }
    
    .con {
        /* position: absolute; */
         padding-left: 60px; 
         padding-bottom: 60px;
         top: 6px; 
        /* height: 21px; */
        /* line-height: 21px; */
        color: #b8b6b4;
        font-size: 11px;
        /* z-index: 401; */
        
        
    }
    .active{
        text-decoration: none;
        color: #c7d5e0;
        
        
    }
    .store{
        color: #1a9fff;
        border-bottom: 1px solid;
        border-width: 2px;
        border-color: #1a9fff;
        text-decoration: none;

        
    }
    .container{
        display: flex;
        align-items: center;
        
    }
    .menu{
        /* line-height: 24px; */
        vertical-align: top;
        display: inline-block;
    }
    .instaletion{
        display: inline-block;
        position: relative;
        height: 21px;
        line-height: 24px;
        margin-right: 3px;
        text-decoration: none;
        
        
    }
    .log_in{
        padding-bottom: 67px;
        color: #b8b6b4;
        text-decoration: none;
        font-size: 11px;
        padding-left: 3px;
        
    }
    .lenguage{
        
        
        
        appearance: none;  
        outline:0; 
        width: 60px;
        border: 0px;
        background-color:#171d25 ;
        color: #b8b6b4;
        font-size: 11px;
        margin-bottom:67px ;
        outline: none;
        
        


    }
    .steam{
        color: #b8b6b4;
    }
    .back{
        /* height:679.2px;
        width:614.25px; */
        background-image:url(stee.jpg);
        background-color: #cccccc;
        height: 670px;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        
        
        
        
        
    }
    .login{
        padding-top: 80px;
        
        margin-right:570px;
        display: flex;
        flex-direction: column;
        align-items: center; 
        color:white;
        
        font-size: 32px;
        
        text-transform: uppercase;
        letter-spacing: .055em;
        font-weight: 200;
        font-family: "Motiva Sans",sans-serif;
    }
    .box-log{
        position: relative;
        display: flex;
        flex-direction: column;

    }
    .uvi{
        display: flex;
        flex-direction: column;
        gap: 8px;
        margin: 8px 16px;
    }
    .uvii{
        color:white;
        
        font-size: 32px;
        
        text-transform: uppercase;
        letter-spacing: .055em;
        font-weight: 200;
        font-family: "Motiva Sans",sans-serif;
        
    }
    .bb{
        background-color: #181a21;
        width: 791.76px;
        height: 354.8px;
        border-radius: 4px;
        position: relative;
        top: 30%;
        left: 50%;
        transform: translate(-47%,-50%);
        
        
        
        
        
        
        
    }
    .vlad{
        left: 50%;
        
        
        color:white;
        
        font-size: 32px;
        
        text-transform: uppercase;
        letter-spacing: .055em;
        font-weight: 200;
        font-family: "Motiva Sans",sans-serif;
    }
    .log-form{
        flex: 1;
        display: grid;
        gap: 12px;
        grid-template-columns: 1fr;
    }
    .logg{
        display: grid;
        grid-template-areas: "label hint" "input input";
        grid-template-columns: 1fr min-content;
        gap: 2px;
    }
    .visite{
        color: #1999ff;
        font-weight: 500;
        font-size: 12px;
        letter-spacing: .02em;
        font-family: "Motiva Sans",sans-serif;
        text-transform: uppercase;
        padding-top: 35px;
        padding-left: 25px;
    }
    .int{
        border-radius: 2px;
        color: #fff;
        padding: 10px;
        background-color: #32353c;
        outline: none;
        font-size: 15px;
        grid-area: input;
        border: 1px solid #32353c;
        margin-left: 25px;
        margin-top: 3px;
        width: 480px;
    }
    .password{
        font-size: 12px;
        color: #afafaf;
        text-transform: uppercase;
        letter-spacing: .02em;
        font-family: "Motiva Sans",sans-serif;
        user-select: none;
        padding-top: 5px;
        padding-left: 25px;
    }
    .ch{
        display: flex;
        flex-direction: row; 
        width: 480px;
        align-items: center;
        
        
        /* fill: #32323c;
        overflow: visible;
        width: 100%;
        height: 100%;
        max-width: 320px;
        max-height: 320px;  */
    }
    .check{
        width: 14px;
        height: 14px;
        padding: 3px;
        
        border-radius: 2px;
        background-color: #32323c;
        cursor: pointer;  
    }
    .kl{
        width: 100%;
        height: 100%;
        display: flex; 
    }
    .che{
        accent-color: #32353c;
        margin-left: 25px;
        width:20px ;
        height: 20px;
        color: #32353c;
        background-color: #32353c;
        
        
        
        
    }
    .title{
        color: #afafaf;
        font-size: 12px;
        user-select: none;
        padding-left: 6px;
        letter-spacing: .02em;
        font-family: "Motiva Sans",sans-serif;
        cursor:pointer;
    }
    title{
        background-color:#1999ff;
        border: 1px solid gray;
    }
    .tooltip {
    position: relative;
    
    cursor: pointer;
    }

    .tooltip::after {
    content: attr(data-title); /* Use the title attribute content as the tooltip text */
    visibility: hidden;
    font-family: "Motiva Sans",sans-serif;
    background-color:#696774; /* Green color */
    color:#fff;
    padding: 10px;
    border-radius: 3px;
    margin-left: 115px;
    margin-top: 30px;
    position: absolute;
    z-index: 2;
    width: 280px;
    
    transform: translateX(-50%);
    opacity: 0;
    transition: opacity 0.5s;
    }

    .tooltip:hover::after {
    visibility: visible;
    opacity: 1;
    }

    .but{
        display: flex;
        flex-direction: column;
        align-items: center;
        padding-right: 238px;
    }
    .butt{
        padding-bottom: 10px;
        width: 270px;
        height: 47.2px;
        position: relative;
        background: linear-gradient(90deg,#06BFFF 0%,#2D73FF 100%);
        border-radius: 2px;
        border: none;
        outline: none;
        padding: 12px;
        color: #fff;
        font-size: 16px;
        font-weight: 400;
        font-family:"Motiva Sans", inherit;
        text-align: center;
        cursor: pointer;

        
    }
    .problem{
        color: #c15755;
        font-size: 12px;
        font-weight:500 ;
        text-align: center;
    }
    .link{
        text-align: center;
        padding-right: 238px;
        color: #afafaf;
        font-size:12px;
        text-decoration: underlin;
        cursor: pointer;
        font-family: "Motiva Sans",sans-serif;
    }
    .qr-block{
        flex: 0;
        display: grid;
        gap: 4px;
        margin-left: 550px;
        top: 0;
        padding: 20px;
        margin-bottom: 30px;
        position: absolute;
        color: #1999ff;
        font-weight: 500;
        font-family: "Motiva Sans",sans-serif;
        font-size: 12px;
        text-transform: uppercase;
        letter-spacing: .02em;
        user-select: none;
    }
    .ll{
        /* color: #1999ff;
        font-weight: 500;
        font-family: "Motiva Sans",sans-serif;
        font-size: 12px;
        text-transform: uppercase;
        letter-spacing: .02em;
        user-select: none; */
        
        

    }
    .qr{
        aspect-ratio: 1;
        border-radius: 2px;
        margin-top: 2px;
        margin-bottom: 8px;
    }
    .qrr{
        display: flex;
        flex-direction: column;
        align-items: center;
    }
    .qred{
        /* filter: blur(5px); */
    }
    .wh{
       width: 200px;
       height: 200px;
       background-color: #fff;
       position: absolute;
       right:0;
       top: 0;
       border-radius: 10px;
       margin-top: 70px;
       margin-right:25px ;
       
    }
    .fg{
        right:0;
        top: 0;
        position: absolute;
        margin-top: 80px;
        margin-right:35px ;
    }
    .kom{
        text-align: center;
        font-size: 12px;
        color: #afafaf;
        right:0;
        top: 0;
        user-select: none;
        position: absolute;
        padding-right: 34px;
        margin-top: 280px;
        width: 190.8px;
        height: 52.8px;
        font-family: "Motiva Sans",sans-serif;
        
    }
    .newl{
        padding: 12px 0px;
        text-decoration: underline;
        color: #afafaf;
        cursor: pointer;
        font-family: "Motiva Sans",sans-serif;
    }
    .bot{
        display: flex;
        flex-direction: row;
        padding-top: 48px;
        align-items: center;
        margin-right: auto;
        margin-left: auto;
        width: 100%;
        justify-content: center;
        background-color: #181a21;
    }
    .mage{
        flex: 1;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        text-align: center;
        max-width: 200px;
        width: 320px;
    }
    .you{
        flex: 1;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        text-align: center;
        max-width: 200px;
    }
    .subt{
        padding-top: 20px;
        font-size: 14px;
        color: #b8b6b4;
        font-family: "Motiva Sans",sans-serif;
        font-weight: normal;
        width: 190px;
        height: 100px;
    }
    .linka{
        max-width: 60%;
        text-align: center;
        font-size: 14px;
        top: 0;
        position: absolute;
        margin-top: 915px;
        color: #FFFFFF;
        text-decoration: none;
        font-family: "Motiva Sans",sans-serif;
        font-weight: normal;
    }
    .op{
        flex: 1;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        text-align: center;
        max-width: 200px;
        margin-top: 20px;
    }
    .come{
        margin: 20px 0px 10px 30px;
        display: block;
        text-align: center;
        border-radius: 2px;
        border-color: #b8b6b4;
        border-style: solid ;
        border-width: 1px;
        padding-top: 10px;
       
        font-family: "Motiva Sans",sans-serif;
        width: 200px;
        height: 30px;
        
        cursor: pointer;
        text-decoration: none !important;
        color: #fff !important;
        background: transparent;
        
    }
    .go{
        font-size: 14px;
        color: #b8b6b4;
        font-family: "Motiva Sans",sans-serif;
        margin-left: 40px;
        width: 200px;
    }
    .footer{
        background-color: #181a21;
        height: 290px;
        width: 100%;
        color: #e9e9e9;
        font-family: "Motiva Sans",sans-serif;

    }
    .foter-con{
        width: 940px;
        margin: 0px auto;
        padding-top: 16px;
    }
    .fo-to{
        float: right;
        padding-top: 2px;
    }
    .ris{
        margin-top: 70px;
        height: 8px;
        border-top: 1px solid #363c44;
    }
    .fo-to.va{
        text-decoration: none;
        color: #FFFFFF;
        cursor: pointer;
        
    }
    .imega{
        height: 25px;
        width: auto;
    }
    .down{
        float: left;
        margin-left: 12px;
        color: #8f98a0;
        font-size: 12px;
        line-height: 16px;
        

    }
    .fiv{
        text-decoration: none;
        color:#c6d4df;
    }
    .downe{
        display: none;
    }
    .qwe{
        border-radius: 2px;
        border: none;
        padding:1px;
        display: inline-block;
        cursor: pointer;
        text-decoration: none !important;
        color: #66c0f4;
        background-color: #212c3d;
    }
    .rule{
        height: 8px;
        border-top: 1px solid #363c44;
    }
    .valve_link{
        margin-top: 8px;
        float: left;
        font-family: "Motiva Sans",sans-serif;
        font-weight: normal;
        font-size: 13px;
        color: #61686D;
    }
    .linkers{
        color: #c6d4df;
        text-decoration: none;
    }
    </style>
</head>
<body>
    <div class="globalheader">
        <div class="container">
            <div class="logo">
                <a href="https://store.steampowered.com" >
                    <img class="steam" src="stem.jpg" alt="STEAM"  height="50px"  >
                </a>
            </div> 
            <div class="header-right"> 
                <a href="https://store.steampowered.com" class="store">КРАМНИЦЯ</a>
                <a href="https://steamcommunity.com" class="active" >СПІЛЬНОТА</a>
                <a href="https://store.steampowered.com/about/" class="active">ІНФОРМАЦІЯ</a>
                <a href="https://help.steampowered.com/uk/" class="active">ПІДТРИМКА</a>
            </div>
            <div class="con">
                <div class="menu">
                    <a class="instaletion" href="https://store.steampowered.com/about/">
                        <img src="ste.jpg" alt="" height="25px">
                        <!-- <div class="log_in">Інтсалювати Steam</div> -->
                    </a>
                    


                </div>
            </div>
            <a  class="log_in" href="https://store.steampowered.com/login/?redir=app%2F1937500%2FLets_School%2F%3Futm_source%3DGoogle%26utm_medium%3Dcpc%26utm_campaign%3Dsearch%26utm_content%3DLS%26gclid%3DCj0KCQjwoeemBhCfARIsADR2QCsEe3_4f_MLPWJqR6F2D0rt6y9N-cbajOsa_KufIplCDRMczHm_VZIaApgIEALw_wcB&redir_ssl=1&snr=1_5_9__global-header">увійти</a>
            <p class="log_in">&nbsp;|&nbsp;</p>
            <select class="lenguage">
                <option>мова</option>
                <option >简体中文 (спрощена китайська)</option>
                <option >繁體中文 (традиційна китайська)</option>
                <option >日本語 (японська)</option>
                <option >한국어 (корейська)</option>
                <option>ไทย (тайська)</option>
                <option>Български (болгарська)</option>
                <option>Čeština (чеська)</option>
                <option>Dansk (данська)</option>
                <option>Deutsch (німецька)</option>
                <option>English (англійська)</option>
                <option>Español - España (іспанська — Іспанія)</option>
                <option>Español - Latinoamérica (іспанська — Латинська Америка)</option>
                <option>Ελληνικά (грецька)</option>
                <option>Français (французька)</option>
                <option>Italiano (італійська)</option>
                <option>Magyar (угорська)</option>
                <option>Nederlands (нідерландська)</option>
                <option>Norsk (норвезька)</option>
                <option>Polski (польська)</option>
                <option>Português (португальська — Португалія)</option>
                <option>Português - Brasil (португальська — Бразилія)</option>
                <option>Română (румунська)</option>
                <option>Русский (російська)</option>
                <option>Suomi (фінська)</option>
                <option>Svenska (шведська)</option>
                <option>Türkçe (турецька)</option>
                <option>Tiếng Việt (в’єтнамська)</option>
                <option>Повідомити про проблему з перекладом</option>

            </select>
            
        </div>
    </div>
    <div class="back">
        <div class="login">
            Увійти
            
        </div>
        <div class="bb">
            <div class="log-form">
                <div class="logg">
                    <div class="visite">
                        Увійти за допомогою логіна
                    </div>
                    <input type="text" class="int">
                </div>
                <div class="logg">
                    <div class="password">
                        Пароль
                    </div>
                    <input type="text" class="int">


                </div>
                <div class="ch">
                    <input type="checkbox" class="che" checked>
                    <!-- <div class="check"></div> -->
                    <div class="title">
                        <p class="tooltip" data-title="Під час наступного запуску Steam вам не потрібно буде вводити пароль чи підтверджувати вхід до акаунта.">Запам'ятати мене</p>
                    </div>
                    
                </div>
                <div class="but">
                    <button class="butt" type="submit">Увійти</button>


                </div>
                <div class="problem">&nbsp;</div>
                <a class="link" href="https://help.steampowered.com/wizard/HelpWithLogin?redir=https%3A%2F%2Fstore.steampowered.com%2Flogin%2F%3Fredir%3D%26redir_ssl%3D1%26snr%3D1_4_4__global-header">Я не можу увійти</a>
           
            </div>

            <div class="qr-block">
            Увійти за допомогою QR-коду
            </div>
            <div class="wh"></div>
            <div class="fg"> <img src="ins.jpeg" alt=""></div>
            <div class="kom">Відкрийте <a  class="newl" href="https://store.steampowered.com/mobile">мобільний застосунок Steam</a>, щоб увійти за допомогою QR-коду</div>
        </div> 
        
        
    </div>
    <div class="bot">
        <div class="you">
            <div class="subt">Приєднайтеся до Steam та відкрийте для себе безліч ігор.</div>
            <a class="linka" href="https://store.steampowered.com/about">Дізнатися більше</a>
        </div>
        <img src="https://store.cloudflare.steamstatic.com/public/shared/images/login/join_pc.png?v=1" alt="" class="mage">
        <div class="op">
            <a class="come" href="https://store.steampowered.com/join/?redir=app%2F1937500%2FLets_School%2F%3Futm_source%3DGoogle%26utm_medium%3Dcpc%26utm_campaign%3Dsearch%26utm_content%3DLS%26gclid%3DCj0KCQjwoeemBhCfARIsADR2QCsEe3_4f_MLPWJqR6F2D0rt6y9N-cbajOsa_KufIplCDRMczHm_VZIaApgIEALw_wcB&snr=1_60_4__62">
                <span>Приєднатися до Steam</span>
                
            </a>
            <div class="go" >Це безкоштовно й дуже легко.</div>
        </div>



    </div>
    <div class="footer">
        <div class="foter-con">
            <div class="ris"></div>
            <div class="fo-to">
                <img src="https://store.cloudflare.steamstatic.com/public/images/v6/logo_steam_footer.png" alt="" >
            </div>
            <div class="fo-to-va">
                <a href="http://www.valvesoftware.com"><img class="imega" src="https://store.cloudflare.steamstatic.com/public/images/footerLogo_valve_new.png" alt=""></a>
            </div>
            <div class="down">
                <div>© 2023 Valve Corporation. Усі права захищено. Усі торговельні марки є власністю відповідних власників у США та інших країнах.</div>
                <div class="aa">
                Усі ціни вказані з урахуванням ПДВ (за потреби).  
                    <a class="fiv" href="https://store.steampowered.com/privacy_agreement/?snr=1_44_44_">Політика конфіденційності</a>
                    &nbsp;|&nbsp;
                    <a class="fiv" href="https://store.steampowered.com/legal/?snr=1_44_44_">Юридична інформація</a>
                    &nbsp;|&nbsp;
                    <a class="fiv" href="https://store.steampowered.com/subscriber_agreement/?snr=1_44_44_">Угода підписника Steam</a>
                    &nbsp;|&nbsp;
                    <a class="fiv" href="https://store.steampowered.com/steam_refunds/?snr=1_44_44_">Повернення грошей</a>
                    &nbsp;|&nbsp;
                    <a  class="fiv" href="https://store.steampowered.com/account/cookiepreferences/?snr=1_44_44_">Файли cookie</a>
                </div>
                <div class="downe">
                    <div class="qwe">
                        <span>Переглянути мобільну версію</span>

                    </div>
                </div>
                <div style="clear: left;"></div>
                <br>
                <div class="rule"></div>
                <div class="valve_link">
                    <a class="linkers" href="http://www.valvesoftware.com/about">Про Valve</a>
                    &nbsp;|&nbsp;
                    <a class="linkers" href="http://www.valvesoftware.com">Вакансії</a>
                    &nbsp;|&nbsp;
                    <a  class="linkers"href="http://www.steampowered.com/steamworks/">Steamworks</a>
                    &nbsp;|&nbsp;
                    <a class="linkers" href="https://partner.steamgames.com/steamdirect">Видання у Steam</a>
                    &nbsp;|&nbsp;
                    <a class="linkers" href="https://help.steampowered.com/uk/?snr=1_44_44_">Підтримка</a>
                    &nbsp;|&nbsp;
                    <a class="linkers" href="https://store.steampowered.com/digitalgiftcards/?snr=1_44_44_">Подарункові карти</a>
                    &nbsp;|&nbsp;
                    <a class="linkers" href="https://steamcommunity.com/linkfilter/?url=http://www.facebook.com/Steam"> <img style="vertical-align: bottom;" src="https://store.cloudflare.steamstatic.com/public/images/ico/ico_facebook.gif" alt="">Steam</a>
                    &nbsp;|&nbsp;
                    <a class="linkers" href="http://twitter.com/steam"><img style="vertical-align: bottom;" src="https://store.cloudflare.steamstatic.com/public/images/ico/ico_twitter.gif" alt="">@steam</a>
                </div>
            </div>
        </div>
    </div>
    


</body>
</html>