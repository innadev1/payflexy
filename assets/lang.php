<?php

    $language = [];    

    $language['en'] = [];
    $language['ru'] = [];

    $SiteUrl = 'http://localhost/www/payflexydem/';
    $language;

    if (isset($_GET['lang'])&&!empty($_GET['lang'])) {
        if ($_GET['lang']=='en'||$_GET['lang']=='ru') {
            $_SESSION['lang'] = $_GET['lang'];
        }
    }

    if (isset($_SESSION['lang'])) {
        $lang = $_SESSION['lang'];
    }else{
        $lang = 'en';
    }

// ----------START!
    // EN
    // HEADER
    $language['en']['about company'] = 'about company';
    $language['en']['services'] = 'services';
    $language['en']['contacts'] = 'contacts';

    $language['en']['login'] = 'login';
    $language['en']['register'] = 'register';

    $language['en']['payflexy'] = 'payflexy';
    $language['en']['team_experi'] = 'team of experianced professionals in the';
    $language['en']['field_ecomerce'] = 'field of e-commerce';

        // INDEX
    $language['en']['payflexy'] = 'payflexy';
    $language['en']['team_of_exp1'] = 'We are a team of';
    $language['en']['team_of_exp2'] = 'experienced professionals';
    $language['en']['team_of_exp3'] = 'in the field of e-commerce';

    // 

    $language['en']['today'] = 'Today, most ICO projects accept payments only in crypto currencies. But the possibility to accept fiat money will significantly increase the number of your investors – as not all of potential clients have possibility to transfer crypto currency. Thus, it is very important for any ICO project to provide investors with the choice of payment method: crypto currency or fiat money, payment card or bank transfer, e-wallet or by cash (for example, Western Union). All these payment methods are offered by PAYFLEXY. ';
    $language['en']['so_what'] = 'So, what are the <br> advantages of PAYFLEXY? ';
    $language['en']['we_offer'] = 'We offer package solutions for clients with business activities of different risk levels, and ICO projects are not an exception. The choice of payment solution is an important decision for development of your business. We are proud of the fact that several ICO projects have chosen PAYFLEXY and already work with our payment solution.';

    // 
    $language['en']['with_us_get'] = 'Working with us, you get:';
    $language['en']['payment_solution'] = '- payment solution for accepting fiat money for realization of your project';
    $language['en']['monitoring'] = '- monitoring payments in order to minimize risks';
    $language['en']['anti'] = '- anti-fraud system for protection from fraud transactions';
    $language['en']['24'] = '- 24 h support for questions regarding the system';
    $language['en']['all'] = 'All you need to do is to choose the payment method which is most convenient for you and fill in the form on our website. Our experienced specialists will be glad to consult you and to assist you in integration of the payment solution on your website for realization of your ideas, which is indeed the base of any ICO project, in shortest possible time.';

    $language['en']['c_pay'] = 'Card payments';
    $language['en']['carts'] = 'VISA and MasterCard ';
    $language['en']['carts_t'] = 'Multi-currency processing allows to accept payments online from all over the world, in a currency which is most convenient for you and your customer. For the customer it is convenient most of all because they can make a payment on your website in their national currency with no conversion. And it is convenient for you, because as an owner of our multi-currency payment solution you will get the possibility to make settlements with your clients, partners and suppliers in several currencies.';

    $language['en']['multi'] = 'Multi-currency processing ';
    $language['en']['multi_t'] = 'Multi-currency processing allows to accept payments online from all over the world, in a currency which is most convenient for you and your customer. For the customer it is convenient most of all because they can make a payment on your website in their national currency with no conversion. And it is convenient for you, because as an owner of our multi-currency payment solution you will get the possibility to make settlements with your clients, partners and suppliers in several currencies.';

    $language['en']['c_verification'] = 'verification';
    $language['en']['c_verification_t'] = ' Card verification is necessary in order to eliminate the possibility of fraud transactions. One of customer authorization methods is 3-D secure technology. This method is used in order to protect cards from unsanctioned operations. <br><br>
        <b>3-D secure protocol is:</b><br><br>
        Security of personal data – the card is protected with personal password, which is known only to the card owner and is valid only for one transaction in real time; <br><br>
        Simplicity – 3-D secure is activated automatically at the moment of transaction. After filling in all the data, the webpage of the bank (the card issuer) appears, where a one-time code is applied (it may be received by different means depending on the bank’s technology).';
    
    $language['en']['anti_module'] = 'Anti-fraud module';
    $language['en']['anti_module_t'] = 'Anti-fraud module is a special software, developed in order to prevent fraud usage of payment cards. The settings of the module provide monitoring and analysis of transactions for detecting possible inconsistencies in transactions.';
    
    $language['en']['pays'] = 'Payments monitoring departments';
    $language['en']['pays_t'] = 'Payments monitoring department assesses the payments according to established criteria according to international requirements in order to prevent fraudulent transactions and minimize risks in card payments. ';

    
    $language['en']['read_more'] = 'read more';
    $language['en']['e-wallets'] = 'E-wallets';
    $language['en']['e-wallets_t'] = 'With the development of e-commerce, many users prefer electronic wallets as a solution for settlements online both for private transfers <s>and for their business activity, refusing from bank services, because working with e-wallets takes less time and expenses. We offer integration of the system of accepting payments through e-wallets for your ICO project. You will be able to receive payments from the clients of most famous e-wallets, such as PayPal, Skrill, Neteller, Qiwi, etc. Such transfers take less time and money, and investors can make payments directly from their e-wallets to your account.</s>';
    $language['en']['western_transfers'] = 'Western Union transfers';
    $language['en']['western_transfers_t'] = 'PAYFLEXY offers a unique possibility to accept investments for your ICO project through the famous payment system Western Union. It is <s> simple, convenient and accessible all over the world – as an alternative to bank accounts, cards and electronic. With Western Union you will be able to receive investments in various popular currencies. Western Union transfers are characterized by the high security level – you and your customer can be sure in safety of your funds.</s>';
    $language['en']['b_tranfers'] = 'services';
    $language['en']['b_tranfers_t'] = 'For investors, who do not have the possibility to take part in the ICO project with a payment card, we offer bank transfers  Bank transfer <s>(Wire-transfer) is a reliable and verified method of transfer of fiat money, using which both the sender and the recipient can be sure of the safety of their funds. ntegrating the possibility to receive investments by bank transfers, you get an additional method of receiving funds for your ICO project, thus increasing the number of your clients. Investors will have the possibility to transfer funds directly from their internet-banking to your account according to your bank details. The funds, transferred by investors, will be credited to your account in the shortest possible time. </s>';
    

        // FOOTER 
    $language['en']['enter'] = 'Please enter email!';
    $language['en']['there'] = 'Your e-mails are already there!';
    $language['en']['reg'] = 'Your email is registered!';
    
    $language['en']['Our_experienced'] = 'Our experienced specialists will be glad to answer your questions!';
    $language['en']['contact_us'] = 'please contact us';
    $language['en']['email'] = 'Email';
    $language['en']['phone'] = 'Phone';
    $language['en']['click_here'] = 'or click here';
    $language['en']['fill1'] = 'and fill the form below and one of our managers';
    $language['en']['fill2'] = 'will contact you as soon as possible.';
    $language['en']['name'] = 'name';
    $language['en']['proj.name'] = 'Website/project name';
    $language['en']['phone_number1'] = 'Phone number';
    $language['en']['phone_number2'] = 'in intertnational format';
    $language['en']['message'] = 'Message';



// ----------------------------------------------------------------------------------->

    // RU
        // HEADER
    $language['ru']['about company'] = 'о компании';
    $language['ru']['services'] = 'Сервисы';
    $language['ru']['contacts'] = 'контакты';

    $language['ru']['login'] = 'войти';
    $language['ru']['register'] = 'регистрироваться';
    $language['ru']['payflexy'] = 'payflexy';
    $language['ru']['team_experi'] = 'команда опытных профессионалов в';
    $language['ru']['field_ecomerce'] = 'области электронной коммерции';

    $language['ru']['payflexy'] = 'payflexy';
    $language['ru']['team_of_exp1'] = 'Мы являемся командой';
    $language['ru']['team_of_exp2'] = 'профессионалов в области';
    $language['ru']['team_of_exp3'] = 'электронной коммерции';

    // INDEX

    $language['ru']['today'] = 'На данный момент, большинство ICO проектов принимают платежи только в криптовалюте. Но возможность приема фиатных средств значительно расширит аудиторию Ваших инвесторов – так как не у всех потенциальных клиентов есть возможность перечислить виртуальную валюту. Таким образом, для любого ICO проекта важно предоставить инвестору выбор способа вложения средств: виртуальной валютой или фиатной, платежной картой или банковским перечислением, переводом с электронного кошелька или наличными (например, Western Union). Все эти способы оплаты предлагает PAYFLEXY.';
    $language['ru']['so_what'] = 'В чем <br> преимущество PAYFLEXY? ';
    $language['ru']['we_offer'] = 'Мы предлагаем комплексные решения для клиентов с деятельностью различной степени риска, и ICO проекты – не исключение. Важным решением в развитии Вашего проекта является выбор платежного решения, и мы гордимся тем, что несколько ICO проектов выбрали PAYFLEXY и уже работают с нашим платежным решением.';

    $language['ru']['with_us_get'] = 'Работая с нами, Вы получаете:';
    $language['ru']['payment_solution'] = '- платежное решение для приема фиатных средств на реализацию Вашего проекта';
    $language['ru']['monitoring'] = '- мониторинг платежей для минимизации рисков';
    $language['ru']['anti'] = '- система антифрода, которая обеспечивает защиту от мошенничества';
    $language['ru']['24'] = '- круглосуточную поддержку для решения вопросов касательно работы системы';
    $language['ru']['all'] = 'Всё, что Вам нужно сделать – выбрать наиболее подходящий для Вас способ приема платежей и заполнить заявку на нашем сайте. Наши опытные специалисты будут рады проконсультировать Вас и помочь в интеграции платежного решения на Вашем сайте для реализации Ваших идей, чтобы Вы могли начать работу в кратчайшие сроки.';


    $language['ru']['c_pay'] = 'Карточные платежи';
    $language['ru']['carts'] = 'VISA и MasterCard ';
    $language['ru']['carts_t'] = 'VISA и MasterCard – самые известные и популярные системы платежных карт. Подключая платежную страницу для приема платежей по картам Visa и MasterCard, Вы получаете возможность принимать платежи в фиатной валюте практически со всего мира прямо на Ваш счет. При подключении процессинга платежных карт важно учитывать, что данные системы имеют собственные требования и условия для приема платежей, контролируют транзакции и выполнение установленных международных правил относительно финансовых операций.';
    
    $language['ru']['multi'] = 'Мультивалютный процессинг ';
    $language['ru']['multi_t'] = 'Мультивалютный процессинг позволяет принимать платежи онлайн со всего мира, в удобной валюте как для Вас, так и для клиента. Для клиента - это очень удобно, так как он может производить оплату с Вашего сайта в своей национальной валюте и не думать о конвертации. Это выгодно для Вас – ведь у владельца нашего мультивалютного платежного решения появляется возможность проводить валютные транзакции со своими клиентами, партнерами и поставщиками сразу в нескольких валютах.';


    $language['ru']['c_verification'] = 'Верификация карт ';
    $language['ru']['c_verification_t'] = 'Верификация карт необходима для того, чтобы исключить возможность использования данных карты мошенниками. Одним из способов авторизации пользователя является подключение к технологии 3-D Secure. Данный метод используется с целью защиты карты от несанкционированных операций. <br><br>
        <b>Протокол 3-D Secure это: </b><br><br>
        • Сохранность персональных данных и средств – карта защищена персональным паролем, который известен только ее владельцу и действителен лишь для одной операции в текущем времени; <br><br>
        • Простота – 3-D Secure активируется автоматически в момент совершения транзакции. После заполнения всех данных, появляется страница банка, карту которого Вы используете для оплаты, где необходимо ввести одноразовый код, который возможно получить разными способами в зависимости от используемых банком технологий.
        ';

    $language['ru']['anti_module'] = 'Модуль антифрод ';
    $language['ru']['anti_module_t'] = 'Модуль антифрод - специальное программное обеспечение, созданное для предотвращения мошенничества с платежными картами. Настройки модуля обеспечивают мониторинг и анализ транзакций для определения возможных несоответствий в проводимых транзакциях.';


    $language['ru']['pays'] = 'Отдел мониторинга платежей ';
    $language['ru']['pays_t'] = 'Отдел мониторинга платежей оценивает платежи по установленным критериям согласно международным требованиям с целью предотвратить мошеннические операции и минимизировать риски при работе с карточными платежами.';

    $language['ru']['read_more'] = 'читать больше';
    $language['ru']['e-wallets'] = 'Электронные кошельки';
    $language['ru']['e-wallets_t'] = 'Электронные кошельки С развитием электронной коммерции, многие предпочитают электронные кошельки в качестве решения для расчетов онлайн как в личных, так и в целях своей предпринимательской деятельности, отказавшись от услуг банков, так как работа с электронными кошельками сокращает время и затраты на перечисления средств. Мы предлагаем интеграцию системы приема платежей посредством электронных кошельков для Вашего ICO проекта. Вы сможете получать платежи от клиентов самых известных электронных кошельков, как, например, PayPal, Skrill, Neteller, Qiwi и др. Такие перечисления занимают минимальное количество времени и средств – инвесторы смогут осуществлять переводы средств прямо из системы своего э-кошелька на Ваш счет по указанным реквизитам.';
    $language['ru']['western_transfers'] = 'Переводы Western Union';
    $language['ru']['western_transfers_t'] = 'PAYFLEXY предлагает уникальную возможность приема инвестиций для Вашего ICO проекта с помощью известной платежной системы Western Union. Это просто, удобно и доступно по всему миру – как альтернатива банковским счетам, картам и электронным кошелькам. С помощью системы Western Union Вы сможете получать инвестиции в различных популярных валютах. Переводы Western Union отличаются высоким уровнем безопасности – Вы и Ваш клиент можете быть уверены в сохранности своих средств. ';
    $language['ru']['b_tranfers'] = 'tulkojums';
    $language['ru']['b_tranfers_t'] = 'tulkojums';


    // FOOTER 
    $language['ru']['enter'] = 'Пожалуйста, введите адрес электронной почты!';
    $language['ru']['there'] = 'Ваш адрес электронной почты уже есть!';
    $language['ru']['reg'] = 'Ваш электронный адрес зарегистрирован!';
    
    $language['ru']['Our_experienced'] = 'Наши опытные специалисты будут рады ответить на ваши вопросы!';
    $language['ru']['contact_us'] = 'пожалуйста свяжитесь с нами';
    $language['ru']['email'] = 'Эл. адрес';
    $language['ru']['phone'] = 'Телефон';
    $language['ru']['click_here'] = 'или нажмите здесь';
    $language['ru']['fill1'] = 'и заполните форму ниже и один из наших менеджеров';
    $language['ru']['fill2'] = 'свяжется с вами как можно скорее.';
    $language['ru']['name'] = 'имя';
    $language['ru']['proj.name'] = 'Название сайта / проекта';
    $language['ru']['phone_number1'] = 'Номер телефона';
    $language['ru']['phone_number2'] = 'в международном формате';
    $language['ru']['message'] = 'Сообщение';
    $language['ru']['ОТПРАВИТЬ'] = 'ОТПРАВИТЬ';

    
  
// ----------------------------------------------------------------------------------->
?>