<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Педагог-психолог | Главная</title>
    <style>
        :root {
            --primary: #5D93E1;
            --primary-dark: #3A6FC8;
            --primary-light: #8BB3E8;
            --text: #2D3748;
            --text-light: #4A5568;
            --light: #F7FAFC;
            --white: #FFFFFF;
            --border: #E2E8F0;
            --shadow: 0 10px 15px -3px rgba(0,0,0,0.1);
            --shadow-sm: 0 4px 6px -1px rgba(0,0,0,0.05);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            line-height: 1.6;
            color: var(--text);
            background-color: var(--light);
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        h1, h2, h3, h4 {
            line-height: 1.2;
            font-weight: 600;
        }

        a {
            text-decoration: none;
            color: var(--primary);
            transition: all 0.2s;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 1.5rem;
            flex: 1;
        }

        header {
            background: var(--white);
            box-shadow: 0 1px 3px rgba(0,0,0,0.1);
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        .header-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1.2rem 0;
            flex-wrap: wrap;
            gap: 1rem;
        }

        .logo {
            font-size: 1.3rem;
            font-weight: 700;
            color: var(--primary);
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        nav ul {
            display: flex;
            list-style: none;
            gap: 2rem;
            flex-wrap: wrap;
        }

        nav ul li a {
            color: var(--text);
            font-weight: 500;
            transition: color 0.2s;
            position: relative;
        }

        nav ul li a:hover {
            color: var(--primary);
        }

        nav ul li a.active {
            color: var(--primary);
            border-bottom: 2px solid var(--primary);
            padding-bottom: 4px;
        }

        .hero {
            padding: 5rem 0;
            text-align: center;
            background: linear-gradient(135deg, #F7FAFC 0%, #EDF2F7 100%);
        }

        .hero h1 {
            font-size: 2.5rem;
            margin-bottom: 1.5rem;
            color: var(--text);
        }

        .hero p {
            font-size: 1.25rem;
            color: var(--text-light);
            max-width: 700px;
            margin: 0 auto 2rem;
        }

        .btn {
            display: inline-block;
            background: var(--primary);
            color: var(--white);
            padding: 0.75rem 1.75rem;
            border-radius: 50px;
            font-weight: 500;
            transition: all 0.3s;
            border: none;
            cursor: pointer;
        }

        .btn:hover {
            background: var(--primary-dark);
            transform: translateY(-2px);
            box-shadow: var(--shadow-sm);
        }

        .btn-outline {
            background: transparent;
            border: 2px solid var(--primary);
            color: var(--primary);
            margin-left: 1rem;
        }

        .btn-outline:hover {
            background: rgba(93, 147, 225, 0.1);
            transform: translateY(-2px);
        }

        .btn-small {
            padding: 0.5rem 1.2rem;
            font-size: 0.9rem;
        }

        .section {
            padding: 4rem 0;
        }

        .section-title {
            text-align: center;
            margin-bottom: 3rem;
        }

        .section-title h2 {
            font-size: 2rem;
            color: var(--text);
            position: relative;
            display: inline-block;
            padding-bottom: 0.8rem;
        }

        .section-title h2::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 60px;
            height: 3px;
            background: var(--primary);
            border-radius: 2px;
        }

        .section-title p {
            color: var(--text-light);
            max-width: 600px;
            margin: 1rem auto 0;
        }

        .about-content {
            display: flex;
            align-items: center;
            gap: 4rem;
            flex-wrap: wrap;
            justify-content: center;
        }

        .about-photo {
            width: 280px;
            height: 400px;
            border-radius: 20px;
            object-fit: cover;
            box-shadow: var(--shadow);
        }

        .about-text {
            flex: 1;
            min-width: 280px;
        }

        .about-text h3 {
            font-size: 1.6rem;
            margin-bottom: 1rem;
            color: var(--primary);
        }

        .about-details {
            margin-top: 1.5rem;
            display: grid;
            gap: 0.8rem;
        }

        .about-details p {
            display: flex;
            align-items: center;
            gap: 0.8rem;
            color: var(--text-light);
        }

        .about-details svg {
            color: var(--primary);
            flex-shrink: 0;
        }

        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 2rem;
        }

        .service-card {
            background: var(--white);
            border-radius: 16px;
            padding: 2rem;
            box-shadow: var(--shadow-sm);
            transition: all 0.3s ease;
            text-align: center;
        }

        .service-card:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow);
        }

        .service-card h3 {
            margin-bottom: 1rem;
            color: var(--text);
        }

        .service-card p {
            color: var(--text-light);
            margin-bottom: 1.5rem;
        }

        .tips-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 2rem;
            margin-top: 2rem;
        }

        .tip-card {
            background: var(--white);
            border-radius: 20px;
            overflow: hidden;
            box-shadow: var(--shadow-sm);
            transition: all 0.3s ease;
            display: flex;
            flex-direction: column;
            height: 100%;
        }

        .tip-card:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow);
        }

        .tip-header {
            background: linear-gradient(135deg, var(--primary) 0%, var(--primary-dark) 100%);
            padding: 1.2rem;
            color: white;
        }

        .tip-header h3 {
            font-size: 1.1rem;
            margin: 0;
            display: flex;
            align-items: center;
            gap: 0.8rem;
        }

        .tip-icon {
            width: 24px;
            height: 24px;
            flex-shrink: 0;
        }

        .tip-content-full {
            padding: 1.2rem;
            color: var(--text-light);
            line-height: 1.6;
            font-size: 0.95rem;
            flex: 1;
            max-height: 400px;
            overflow-y: auto;
        }

        .tip-content-full::-webkit-scrollbar {
            width: 6px;
        }

        .tip-content-full::-webkit-scrollbar-track {
            background: #f1f1f1;
            border-radius: 3px;
        }

        .tip-content-full::-webkit-scrollbar-thumb {
            background: var(--primary-light);
            border-radius: 3px;
        }

        .parent-container {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .reminder-card {
            background: linear-gradient(135deg, #FFFFFF 0%, #F7FAFC 100%);
            border-radius: 24px;
            padding: 2rem;
            margin-top: 3rem;
            box-shadow: var(--shadow);
            max-width: 900px;
            width: 100%;
            border: 1px solid rgba(93, 147, 225, 0.2);
        }

        .reminder-title {
            text-align: center;
            margin-bottom: 1rem;
            color: var(--primary);
            font-size: 1.6rem;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 0.8rem;
        }

        .reminder-subtitle {
            text-align: center;
            font-style: italic;
            margin-bottom: 2rem;
            color: var(--text-light);
        }

        .reminder-list {
            list-style-type: none;
            counter-reset: item;
            padding: 0;
        }

        .reminder-list li {
            margin-bottom: 1.2rem;
            position: relative;
            padding-left: 2.5rem;
            color: var(--text-light);
            line-height: 1.6;
        }

        .reminder-list li:before {
            content: counter(item) ".";
            counter-increment: item;
            position: absolute;
            left: 0;
            top: 0;
            color: var(--primary);
            font-weight: bold;
            font-size: 1.1rem;
        }

        .reminder-note {
            margin-top: 2rem;
            padding: 1.2rem;
            background: linear-gradient(135deg, rgba(93,147,225,0.1) 0%, rgba(93,147,225,0.05) 100%);
            border-left: 4px solid var(--primary);
            border-radius: 12px;
            font-style: italic;
        }

        .faq-item {
            background: var(--white);
            border-radius: 12px;
            margin-bottom: 1rem;
            overflow: hidden;
            box-shadow: var(--shadow-sm);
        }

        .faq-question {
            padding: 1.2rem 1.5rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
            cursor: pointer;
            font-weight: 600;
            background: var(--white);
        }

        .faq-question:hover {
            background: #F7FAFC;
        }

        .faq-answer {
            padding: 0 1.5rem;
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease;
            color: var(--text-light);
        }

        .faq-question.active + .faq-answer {
            padding-bottom: 1.2rem;
            max-height: 500px;
        }

        .events-list {
            display: grid;
            gap: 1rem;
        }

        .event-item {
            background: var(--white);
            border-radius: 16px;
            padding: 1.2rem;
            display: flex;
            align-items: center;
            flex-wrap: wrap;
            gap: 1.5rem;
            box-shadow: var(--shadow-sm);
            transition: all 0.3s;
        }

        .event-item:hover {
            transform: translateX(5px);
            box-shadow: var(--shadow);
        }

        .event-date {
            background: linear-gradient(135deg, var(--primary) 0%, var(--primary-dark) 100%);
            color: var(--white);
            padding: 0.8rem 1.2rem;
            border-radius: 12px;
            text-align: center;
            min-width: 140px;
        }

        .event-date .day {
            font-size: 0.85rem;
            font-weight: 700;
        }

        .event-info {
            flex: 1;
        }

        .event-info h3 {
            margin-bottom: 0.3rem;
        }

        .contact-container {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 3rem;
        }

        .contact-info, .contact-form {
            background: var(--white);
            border-radius: 20px;
            padding: 2rem;
            box-shadow: var(--shadow-sm);
        }

        .contact-details p {
            margin-bottom: 1rem;
            display: flex;
            align-items: center;
            gap: 0.8rem;
            color: var(--text-light);
        }

        .form-group {
            margin-bottom: 1.2rem;
        }

        .form-group label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 500;
        }

        .form-control {
            width: 100%;
            padding: 0.8rem 1rem;
            border: 2px solid var(--border);
            border-radius: 12px;
            font-size: 1rem;
            transition: all 0.2s;
        }

        .form-control:focus {
            outline: none;
            border-color: var(--primary);
            box-shadow: 0 0 0 3px rgba(93,147,225,0.2);
        }

        textarea.form-control {
            min-height: 120px;
            resize: vertical;
        }

        .alert {
            padding: 1rem;
            border-radius: 12px;
            margin-bottom: 1rem;
            display: none;
        }

        .alert-success {
            background: #C6F6D5;
            color: #22543D;
            border: 1px solid #9AE6B4;
        }

        .alert-error {
            background: #FED7D7;
            color: #742A2A;
            border: 1px solid #FC8181;
        }

        .scroll-top {
            position: fixed;
            bottom: 30px;
            right: 30px;
            width: 50px;
            height: 50px;
            background: var(--primary);
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            opacity: 0;
            visibility: hidden;
            transition: all 0.3s;
            z-index: 1000;
            box-shadow: var(--shadow);
        }

        .scroll-top.show {
            opacity: 1;
            visibility: visible;
        }

        .scroll-top:hover {
            background: var(--primary-dark);
            transform: translateY(-3px);
        }

        footer {
            background: var(--text);
            color: var(--white);
            padding: 3rem 0;
            margin-top: auto;
        }

        .footer-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 2rem;
        }

        .footer-col h3 {
            color: var(--white);
            margin-bottom: 1.2rem;
            font-size: 1.1rem;
        }

        .footer-col ul {
            list-style: none;
        }

        .footer-col ul li {
            margin-bottom: 0.6rem;
        }

        .footer-col ul li a {
            color: rgba(255,255,255,0.6);
            transition: color 0.2s;
        }

        .footer-col ul li a:hover {
            color: var(--white);
        }

        .footer-bottom {
            text-align: center;
            margin-top: 2rem;
            padding-top: 1.5rem;
            border-top: 1px solid rgba(255,255,255,0.1);
            color: rgba(255,255,255,0.5);
        }

        @media (max-width: 768px) {
            .contact-container {
                grid-template-columns: 1fr;
            }
            .services-grid {
                grid-template-columns: 1fr;
            }
            .tips-grid {
                grid-template-columns: 1fr;
            }
            .header-container {
                flex-direction: column;
            }
            .hero h1 {
                font-size: 1.8rem;
            }
            .btn-outline {
                margin-left: 0;
                margin-top: 1rem;
            }
            .event-item {
                flex-direction: column;
                text-align: center;
            }
            .event-date {
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <header>
        <div class="container header-container">
            <div class="logo">
<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 48 88">
    <text x="24" y="72" font-family="serif" font-size="72" fill="#5D93E1" text-anchor="middle" dominant-baseline="middle">Ψ</text>
</svg>
                Педагог-психолог МБДОУ д/с № 86
            </div>
            <nav>
                <ul>
                    <li><a href="index.html" class="active">Главная</a></li>
                    <li><a href="articles.html">Статьи</a></li>
                    <li><a href="test.html">Тест</a></li>
                    <li><a href="#about">Обо мне</a></li>
                    <li><a href="#services">Услуги</a></li>
                    <li><a href="#tips">Советы</a></li>
                    <li><a href="#contact">Контакты</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main>
        <section class="hero">
            <div class="container">
                <h1>Профессиональная психологическая помощь детям и родителям</h1>
                <p>Помогаю детям и их родителям находить общий язык, преодолевать трудности и создавать гармоничные отношения в семье</p>
                <div style="margin-top: 2rem;">
                    <a href="#contact" class="btn">Записаться на консультацию</a>
                    <a href="#services" class="btn btn-outline">Узнать об услугах</a>
                </div>
            </div>
        </section>

        <section id="about" class="section">
            <div class="container">
                <div class="section-title">
                    <h2>Обо мне</h2>
                    <p>Профессиональный подход к решению психологических проблем детей</p>
                </div>
                <div class="about-content">
                    <img src="C:\Users\79507\Desktop\КП 2025\Портрет.webp" alt="Фото психолога" class="about-photo" onerror="this.src='https://via.placeholder.com/280x400?text=Фото+психолога'">
                    <div class="about-text">
                        <h3>Тертова Анна Анатольевна</h3>
                        <p>Педагог-психолог детского сада №86. Работаю с детьми дошкольного возраста. Специализируюсь на эмоциональных и поведенческих проблемах.</p>
                        <div class="about-details">
                            <p><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path></svg> Образование: БелГУ, факультет психологии</p>
                            <p><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg> Помогаю детям и родителям с 2004 года</p>
                            <p><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg> Адрес: г. Белгород, ул. Чапаева, 3</p>
                            <p><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg> Телефон: +7(904) 531-25-35</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="services" class="section" style="background: #F7FAFC;">
            <div class="container">
                <div class="section-title">
                    <h2>Услуги</h2>
                    <p>Профессиональная помощь в различных направлениях детской психологии</p>
                </div>
                <div class="services-grid">
                    <div class="service-card">
                        <h3>Консультации для родителей</h3>
                        <p>Индивидуальные встречи по вопросам воспитания, развития и решения проблем поведения ребенка.</p>
                        <a href="#contact" class="btn btn-small">Записаться</a>
                    </div>
                    <div class="service-card">
                        <h3>Развитие межполушарных связей</h3>
                        <p>Для развития используют упражнения и игры, которые задействуют работу обоих полушарий мозга.</p>
                        <a href="#contact" class="btn btn-small">Записаться</a>
                    </div>
                    <div class="service-card">
                        <h3>Песочная терапия</h3>
                        <p>Песочная терапия — это метод психологической коррекции, один из видов арт-терапии, который используется в работе с детьми дошкольного возраста.</p>
                        <a href="#contact" class="btn btn-small">Записаться</a>
                    </div>
                    <div class="service-card">
                        <h3>Диагностика развития</h3>
                        <p>Комплексное обследование познавательной, эмоциональной и личностной сфер ребенка.</p>
                        <a href="#contact" class="btn btn-small">Записаться</a>
                    </div>
                    <div class="service-card">
                        <h3>Развитие эмоционального интеллекта</h3>
                        <p>Тренинги и занятия по развитию способности понимать и управлять своими эмоциями.</p>
                        <a href="#contact" class="btn btn-small">Записаться</a>
                    </div>
                    <div class="service-card">
                        <h3>Групповые занятия</h3>
                        <p>Развивающие программы для детей и совместные занятия для детей и родителей.</p>
                        <a href="#contact" class="btn btn-small">Записаться</a>
                    </div>
                    <div class="service-card">
                        <h3>Подготовка к школе</h3>
                        <p>Психологическая готовность к школе: мотивация, саморегуляция, коммуникативные навыки.</p>
                        <a href="#contact" class="btn btn-small">Записаться</a>
                    </div>
                </div>
            </div>
        </section>

        <section id="tips" class="section">
                 <div class="parent-container">
                    <div class="reminder-card">
                        <div class="reminder-content">
                            <h3 class="reminder-title">
                                <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                                    <polyline points="14 2 14 8 20 8"></polyline>
                                    <line x1="16" y1="13" x2="8" y2="13"></line>
                                    <line x1="16" y1="17" x2="8" y2="17"></line>
                                </svg>
                                Памятка для родителей
                            </h3>
                            <p class="reminder-subtitle">"Как подготовить ребенка к поступлению в дошкольное учреждение"</p>
                            <ol class="reminder-list">
                                <li>Купите с малышом все необходимые вещи, делайте акцент на том, что вот эту рубашку или платьице малыш оденет в ясельки. Купите маленький рюкзачок, куда малыш будет складывать любимые игрушки, книжки, можно положить туда мамину фотографию.</li>
                                <li>Проходя мимо детского сада, с радостью напоминайте ребенку, что он скоро сможет ходить сюда, познакомится с ребятками и у него будет настоящий друг.</li>
                                <li>Гуляя во дворе на детской площадке, поучите ребенка знакомиться с другими детьми, обращаться к ним по имени, поучите просить игрушки, а не отнимать.</li>
                                <li>Расскажите о режиме детского сада: что и в какой последовательности малыш будет делать в садике.</li>
                                <li>Разработайте с ребенком несложную систему прощальных знаков, чтобы ему было легче отпустить вас.</li>
                            </ol>
                            <div class="reminder-note">
                                Помните, что адаптация у ребенка может быть не только легкой, но и средней и тяжелой. Будьте снисходительны и терпимы.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section">
            <div class="container">
                <div class="section-title">
                    <h2>Частые вопросы</h2>
                    <p>Ответы на наиболее распространенные вопросы родителей</p>
                </div>
                <div class="faq-item">
                    <div class="faq-question" onclick="toggleAnswer(this)">
                        <span>С какого возраста можно обращаться к детскому психологу?</span>
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"></polyline></svg>
                    </div>
                    <div class="faq-answer">
                        <p>Консультация детского психолога может быть полезна в любом возрасте, начиная с младенчества. Для детей до 3 лет работа ведется преимущественно с родителями. С 3-4 лет возможны уже индивидуальные занятия с ребенком в игровой форме.</p>
                    </div>
                </div>
                <div class="faq-item">
                    <div class="faq-question" onclick="toggleAnswer(this)">
                        <span>Как подготовить ребенка к первому визиту к психологу?</span>
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"></polyline></svg>
                    </div>
                    <div class="faq-answer">
                        <p>Лучше всего представить психолога как нового друга, с которым можно играть и разговаривать. Избегайте фраз типа "тебя будут проверять". Скажите, что это место, где можно играть, рисовать и говорить о том, что интересно ребенку.</p>
                    </div>
                </div>
                <div class="faq-item">
                    <div class="faq-question" onclick="toggleAnswer(this)">
                        <span>Сколько сеансов обычно требуется для решения проблемы?</span>
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"></polyline></svg>
                    </div>
                    <div class="faq-answer">
                        <p>Количество необходимых встреч зависит от сложности проблемы. В среднем, для решения конкретной поведенческой или эмоциональной трудности требуется 5-10 встреч. Некоторые вопросы могут потребовать более длительной работы.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="section" style="background: #F7FAFC;">
            <div class="container">
                <div class="section-title">
                    <h2>Ближайшие мероприятия</h2>
                    <p>Тренинги, семинары и групповые занятия</p>
                </div>
                <div class="events-list">
                    <div class="event-item">
                        <div class="event-date">
                            <div class="day">Каждый первый вторник месяца</div>
                            <div class="month">11:00</div>
                        </div>
                        <div class="event-info">
                            <h3>Семинар "Детские страхи"</h3>
                            <p>Для родителей детей 3-7 лет. Разберем причины страхов и методы помощи.</p>
                        </div>
                        <a href="#contact" class="btn btn-small">Записаться</a>
                    </div>
                    <div class="event-item">
                        <div class="event-date">
                            <div class="day">Каждую вторую среду месяца</div>
                            <div class="month">13:00</div>
                        </div>
                        <div class="event-info">
                            <h3>Тренинг "Эмоциональный интеллект"</h3>
                            <p>Для детей 5-6 лет. Игровые упражнения для развития эмоциональной сферы.</p>
                        </div>
                        <a href="#contact" class="btn btn-small">Записаться</a>
                    </div>
                    <div class="event-item">
                        <div class="event-date">
                            <div class="day">Каждый третий четверг месяца</div>
                            <div class="month">14:00</div>
                        </div>
                        <div class="event-info">
                            <h3>Группа поддержки для родителей</h3>
                            <p>Обсуждение актуальных вопросов воспитания в кругу родителей и специалиста.</p>
                        </div>
                        <a href="#contact" class="btn btn-small">Записаться</a>
                    </div>
                </div>
            </div>
        </section>

        <section id="contact" class="section">
            <div class="container">
                <div class="section-title">
                    <h2>Записаться на консультацию</h2>
                    <p>Оставьте свои данные, и я свяжусь с вами для уточнения деталей</p>
                </div>
                <div class="contact-container">
                    <div class="contact-info">
                        <h3>Контактная информация</h3>
                        <div class="contact-details">
                            <p><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg> г. Белгород, ул. Чапаева, д. 3</p>
                            <p><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg> +7 (904) 531-25-35</p>
                            <p><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg> tertova80@mail.ru</p>
                            <p><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg> Пн-Пт: 7:00 - 19:00</p>
                        </div>
                        <div style="height: 160px; border-radius: 16px; margin-top: 1.8rem; background: linear-gradient(135deg, #EDF2F7, #E2E8F0); display: flex; align-items: center; justify-content: center; color: #718096;">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#718096" stroke-width="2" style="margin-right: 8px;">
                                <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                                <circle cx="12" cy="10" r="3"></circle>
                            </svg>
                            г. Белгород, ул. Чапаева, 3
                        </div>
                    </div>
                    <div class="contact-form">
                        <div id="formAlert" class="alert"></div>
                        <form id="contactForm" action="send.php" method="POST">
                            <div class="form-group">
                                <label for="name">Ваше имя</label>
                                <input type="text" id="name" name="name" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="phone">Телефон</label>
                                <input type="tel" id="phone" name="phone" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" id="email" name="email" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="service">Услуга</label>
                                <select id="service" name="service" class="form-control">
                                    <option value="consult">Консультация для родителей</option>
                                    <option value="diagnostics">Диагностика развития</option>
                                    <option value="correction">Коррекционные занятия</option>
                                    <option value="sand">Песочная терапия</option>
                                    <option value="school">Подготовка к школе</option>
                                    <option value="group">Групповые занятия</option>
                                    <option value="other">Другое</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="message">Сообщение</label>
                                <textarea id="message" name="message" class="form-control" rows="4"></textarea>
                            </div>
                            <div class="form-group" style="display: flex; align-items: center; gap: 0.6rem;">
                                <input type="checkbox" id="consent" required style="width: 16px; height: 16px; cursor: pointer;">
                                <label for="consent" style="margin: 0; font-size: 0.8rem; cursor: pointer;">Я согласен на обработку персональных данных</label>
                            </div>
                            <button type="submit" class="btn" id="submitBtn" style="width: 100%;">Отправить заявку</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer>
        <div class="container">
            <div class="footer-container">
                <div class="footer-col">
                    <h3>Услуги</h3>
                    <ul>
                        <li><a href="#services">Консультации</a></li>
                        <li><a href="#services">Диагностика</a></li>
                        <li><a href="#services">Коррекционные занятия</a></li>
                        <li><a href="#tips">Групповые тренинги</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h3>Родителям</h3>
                    <ul>
                        <li><a href="articles.html">Статьи</a></li>
                        <li><a href="test.html">Тест</a></li>
                        <li><a href="#tips">Советы</a></li>
                        <li><a href="#tips">Мероприятия</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h3>Контакты</h3>
                    <ul>
                        <li><a href="#contact">Адрес</a></li>
                        <li><a href="#contact">Телефон</a></li>
                        <li><a href="#contact">Email</a></li>
                        <li><a href="#contact">График работы</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h3>Соцсети</h3>
                    <ul>
                        <li><a href="https://vk.com/anechka270" target="_blank">VK</a></li>
                        <li><a href="https://max.ru/u/f9LHodD0cOLg8va9ISfnF4xzXvqZr27Ko747q60TPuCUZ3hJMpJYyjoRVQM" target="_blank">MAX</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom">© 2026 Сайт педагога-психолога МБДОУ д/с №86</div>
        </div>
    </footer>

    <div class="scroll-top" onclick="window.scrollTo({top:0, behavior:'smooth'})">
        ▲
    </div>

    <script>
        function toggleAnswer(question) {
            question.classList.toggle('active');
        }

        window.addEventListener('scroll', function() {
            const scrollBtn = document.querySelector('.scroll-top');
            if (window.scrollY > 300) {
                scrollBtn.classList.add('show');
            } else {
                scrollBtn.classList.remove('show');
            }
        });

        document.getElementById('contactForm')?.addEventListener('submit', async function(e) {
            e.preventDefault();
            const submitBtn = document.getElementById('submitBtn');
            const alertDiv = document.getElementById('formAlert');
            const name = document.getElementById('name').value.trim();
            const phone = document.getElementById('phone').value.trim();
            const consent = document.getElementById('consent').checked;
            
            if (!name || !phone) {
                alertDiv.textContent = 'Пожалуйста, заполните имя и телефон';
                alertDiv.className = 'alert alert-error';
                alertDiv.style.display = 'block';
                setTimeout(() => { alertDiv.style.display = 'none'; }, 5000);
                return;
            }
            if (!consent) {
                alertDiv.textContent = 'Подтвердите согласие на обработку данных';
                alertDiv.className = 'alert alert-error';
                alertDiv.style.display = 'block';
                setTimeout(() => { alertDiv.style.display = 'none'; }, 5000);
                return;
            }
            
            submitBtn.disabled = true;
            submitBtn.textContent = 'Отправка...';
            
            try {
                const formData = new FormData(this);
                const response = await fetch('send.php', { method: 'POST', body: formData });
                const result = await response.json();
                
                if (result.success) {
                    alertDiv.textContent = 'Заявка успешно отправлена! Я свяжусь с вами.';
                    alertDiv.className = 'alert alert-success';
                    alertDiv.style.display = 'block';
                    this.reset();
                    setTimeout(() => { alertDiv.style.display = 'none'; }, 5000);
                } else {
                    alertDiv.textContent = 'Ошибка: ' + result.message;
                    alertDiv.className = 'alert alert-error';
                    alertDiv.style.display = 'block';
                    setTimeout(() => { alertDiv.style.display = 'none'; }, 5000);
                }
            } catch (error) {
                alertDiv.textContent = 'Ошибка соединения. Попробуйте позже.';
                alertDiv.className = 'alert alert-error';
                alertDiv.style.display = 'block';
                setTimeout(() => { alertDiv.style.display = 'none'; }, 5000);
            } finally {
                submitBtn.disabled = false;
                submitBtn.textContent = 'Отправить заявку';
            }
        });
    </script>
</body>
</html>
