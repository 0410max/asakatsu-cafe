<!DOCTYPE HTML>
<html>
<head>

<!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-MCZ5M62M');</script>
<!-- End Google Tag Manager -->

<!-- URF-8 -->
<meta charset="UTF-8">

<!-- タイトル -->
<title>朝活カフェ｜朝を制し人生を制するコミュニティ</title>

<!-- CSSの読み込み -->
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">

<!-- ビューポート -->
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- メタディスクリプション -->
<meta name="description" content="朝活カフェは毎朝5:30-7:30までZoomを2時間繋ぎ、共に目標に向かって努力をするオンラインコミュニティです。1日2時間の努力を1年続ければ人生は180度変わります。「時間がない」「仕事で忙しい」と思っている方は毎朝一緒に活動しましょう！" />

<!-- OGPタグ・Twitterカード -->
<meta property="og:url" content="〇〇" />
<meta property="og:title" content="朝活カフェ" />
<meta property="og:type" content="website">
<meta property="og:description" content="朝活カフェは毎朝5:30-7:30までZoomを2時間繋ぎ、共に目標に向かって努力をするオンラインコミュニティです。1日2時間の努力を1年続ければ人生は180度変わります。「時間がない」「仕事で忙しい」と思っている方は毎朝一緒に活動しましょう！" />
<meta property="og:image" content="〇〇" />
<meta name="twitter:card" content="summary" />
<meta name="twitter:site" content="@okawatech21" />
<meta property="og:site_name" content="朝活カフェ" />
<meta property="og:locale" content="ja_JP" />

<!-- サイトアイコンの指定 -->
<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico"/> 

<!-- Internet Explorer用の設定 -->
<meta http-equiv="X-UA-Compatible" content="IE=edge" />

<!-- slick_css -->
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>

<!-- noindex -->
<meta name="robots" content="noindex">

<!-- canonical -->
<link rel="canonical" href="https://asakatsu-cafe.com/" />

</head>
<body>
<!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MCZ5M62M" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->


<header class="header">
    <nav class="header__left">
        <a href="/">
            <img src="<?php echo get_template_directory_uri(); ?>/images/logo.webp" alt="朝活カフェ" class="header__left__image">
        </a>
    </nav>
    <nav class="header__right">
        <a href="#about" class="header__right__link">朝活カフェとは？</a>
        <a href="#feature" class="header__right__link">特徴</a>
        <a href="#merit" class="header__right__link">メリット</a>
        <a href="#action" class="header__right__link">朝活の過ごし方</a>
        <a href="#flow" class="header__right__link">朝活参加までの流れ</a>
        <a href="#thought" class="header__right__link">想い</a>
        <a href="#faq" class="header__right__link">よくある質問</a>
        <a href="" class="header__right__link">朝活カフェに入会する</a>
    </nav>
    <nav class="header__button">
        <div class="header__button__top">
            毎日参加で<br>
            月額<span class="header__button__top__st">０</span>円
        </div>
        <div class="header__button__bottom">
            入会する
        </div>
    </nav>
    <nav class="header__modal">
        <div class="header__modal__content">
            <a href="#about" class="header__modal__content__link">朝活カフェとは？</a>
            <a href="#feature" class="header__modal__content__link">特徴</a>
            <a href="#merit" class="header__modal__content__link">メリット</a>
            <a href="#action" class="header__modal__content__link">朝活の過ごし方</a>
            <a href="#flow" class="header__modal__content__link">朝活参加までの流れ</a>
            <a href="#thought" class="header__modal__content__link">想い</a>
            <a href="#faq" class="header__modal__content__link">よくある質問</a>
            <a href="" class="header__modal__content__link">朝活カフェに入会する</a>
        </div>
    </nav>
    <div class="header__icon">
        <span class="header__icon__bar1"></span>
        <span class="header__icon__bar2"></span>
        <span class="header__icon__bar3"></span>
    </div>
    <script>
        $(document).ready(function() {
            $(".header__icon,.header__modal__content__link").click(function() {
                $(".header__modal").toggleClass("header__modal__block");
                $(".header__icon__bar1").toggleClass("header__icon__bar1__rotate");
                $(".header__icon__bar2").toggleClass("header__icon__bar2__rotate");
                $(".header__icon__bar3").toggleClass("header__icon__bar3__rotate");
                $(".header__modal__content__link").toggleClass("header__modal__content__link__show");
            });
        });
    </script>
    
    <script>
        $(window).scroll(function() {
            var scroll = $(window).scrollTop();

            if (scroll >= 150) {
                $(".header__button").css(
                    'bottom','40px'
                );
            } else {
                $(".header__button").css(
                    'bottom','-150px'
                );
            }
        });
    </script>
</header>


<section class="fv">
    <div class="fv__text">
        <div class="fv__text__top">
            朝型ライフで
        </div>
        <div class="fv__text__bottom">
            生産的な1日を。
        </div>
        <div class="fv__text__button">
            <div class="fv__text__button__top">
                朝活<span class="fv__text__button__top__st">毎日</span>参加で<span class="fv__text__button__top__st">全額</span>キャッシュバック
            </div>
            <div class="fv__text__button__bottom">
                <div class="fv__text__button__bottom__left">
                    <span class="fv__text__button__bottom__left__normal">簡単</span><br>
                    <span class="fv__text__button__bottom__left__st">1分</span>
                </div>
                <div class="fv__text__button__bottom__right">
                    <div class="fv__text__button__bottom__right__top">
                        月額3,600円
                    </div>
                    <div class="fv__text__button__bottom__right__bottom">
                        <h1>朝活カフェ</h1>に入会する
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="fv__image">
        <div class="fv__image__cover"></div>
        <div class="slider2">
            <div><img src="<?php echo get_template_directory_uri(); ?>/images/fv1.webp" alt="男性がパソコンで作業をしている画像" class="fv__image__size"></div>
            <div><img src="<?php echo get_template_directory_uri(); ?>/images/fv2.webp" alt="女性がパソコンで作業をしている画像" class="fv__image__size"></div>
        </div>
    </div>
    <script>
        $(document).ready(function(){
            $('.slider2').slick({
            autoplay: true,
            autoplaySpeed: 3000, 
            fade: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            initialSlide: 1,
            });
        });
    </script>
</section>

<section class="about" id="about">
    <h2 class="about__top">
        朝活カフェとは？
    </h2>
    <div class="about__middle">
        <div class="about__middle__right">
            <img src="<?php echo get_template_directory_uri(); ?>/images/about.webp" alt="男性と女性がパソコンで作業をしている画像" class="about__middle__right__image">
        </div>
        <div class="about__middle__left">
            <ul>
                <li>何かを成し遂げたいと思っている人</li>
                <li>何かに挑戦したいと思っている人</li>
                <li>生活習慣を整えて生産的な1日を過ごしたい人</li>
                <li>毎朝一緒に活動をする仲間が欲しい人</li>
            </ul>
        </div>
    </div>
    <div class="about__bottom">
        が朝活を通して人生を変えていくための<span class="about__bottom__st">オンラインサロン</span>です。
    </div>
</section>

<section class="feature" id="feature">
    <h2 class="feature__top">
        朝活カフェの特徴
    </h2>
    <div class="feature__content">
        <div class="feature__content__image">
            <h3 class="feature__content__image__title">
                毎朝5:30~7:30まで朝活
            </h3>
            <img src="<?php echo get_template_directory_uri(); ?>/images/feature1.webp" alt="女性がパソコンで作業をしている画像" class="feature__content__image__size">
        </div>
        <div class="feature__content__text">
            <div class="feature__content__text__title">
                毎朝5:30~7:30まで朝活
            </div>
            <div class="feature__content__text__description">
                毎朝5:00に起きる習慣をつけてほしいという想いから5:30から朝活を行なっております。5:30-Zoomをつなぎ一緒に作業をしましょう。毎朝やること、やったことをチャットで報告することで朝の2時間を有意義に過ごすことができます。
            </div>
        </div>
    </div>
    <div class="feature__content">
        <div class="feature__content__image">
            <h3 class="feature__content__image__title">
                メンバー同士でのイベント・情報共有多数
            </h3>
            <img src="<?php echo get_template_directory_uri(); ?>/images/feature2.webp" alt="会社員が話し合っている画像" class="feature__content__image__size">
        </div>
        <div class="feature__content__text">
            <div class="feature__content__text__title">
                メンバー同士でのイベント・情報共有多数
            </div>
            <div class="feature__content__text__description">
                当サロンでは、一人一人の繋がりを大切にしています。定期的にメンバー同士が交流できるように様々な参加型のイベントを開催しています。独りではなかなか踏み出せない一歩、仲間と一緒に踏み出しましょう。
            </div>
        </div>
    </div>
    <div class="feature__content">
        <div class="feature__content__image">
            <h3 class="feature__content__image__title">
                毎日朝活に出席すると、月額料金を全額キャッシュバック
            </h3>
            <img src="<?php echo get_template_directory_uri(); ?>/images/feature3.webp" alt="計算機と貯金箱の画像" class="feature__content__image__size">
        </div>
        <div class="feature__content__text">
            <div class="feature__content__text__title">
                毎日朝活に出席すると月額料金を<br />全額キャッシュバック
            </div>
            <div class="feature__content__text__description">
                毎日朝活に出席された方には月額費用を全額返金するキャッシュバックキャンペーンを行なっております。<br>参加条件は5:35までに固定のZoomリンクに入室することになります。是非、毎日出席して月額0円で朝活カフェをご利用くださいませ。
            </div>
        </div>
    </div>
</section>

<section class="cta">
    <div class="cta__wrapper">
        <div class="cta__top">
            <span class="cta__top__st">朝活</span>で<span class="cta__top__st">人生</span>を変えよう！
        </div>
        <div class="cta__button">
            <div class="cta__button__left">
                <span class="cta__button__left__normal">簡単</span><br>
                <span class="cta__button__left__st">1分</span>
            </div>
            <div class="cta__button__right">
                <div class="cta__button__right__top">
                    月額3,600円
                </div>
                <div class="cta__button__right__bottom">
                    朝活カフェに入会する
                </div>
            </div>
        </div>
        <div class="cta__bottom">
            <img src="<?php echo get_template_directory_uri(); ?>/images/cta2.webp" alt="朝の街の画像" class="cta__bottom__image">
        </div>
    </div>
</section>

<section class="merit" id="merit">
    <h2 class="merit__top">
        朝活のメリット
    </h2>
    <div class="feature__content">
        <div class="feature__content__image">
            <h3 class="feature__content__image__title">
                朝は頭が冴えている
            </h3>
            <img src="<?php echo get_template_directory_uri(); ?>/images/merit1.webp" alt="男性がパソコンで作業をしている画像" class="feature__content__image__size">
        </div>
        <div class="feature__content__text">
            <div class="feature__content__text__title">
                朝は頭が冴えている
            </div>
            <div class="feature__content__text__description">
                朝の1時間は、夜の3時間に匹敵すると言われています。夜は疲れ果てて頭がぼんやりとしておりクタクタの状態であるのに対して、朝はエネルギーに満ちストレスのないクリアな状態です。毎日の仕事や飲み会、SNSのチェックで新しいことを始める時間が取れない方は、朝早く起きて新しいことにチャレンジしましょう。
            </div>
        </div>
    </div>
    <div class="feature__content">
        <div class="feature__content__image">
            <h3 class="feature__content__image__title">
                朝は誰にも邪魔されない
            </h3>
            <img src="<?php echo get_template_directory_uri(); ?>/images/merit2.webp" alt="女性がパソコンで作業をしている画像" class="feature__content__image__size">
        </div>
        <div class="feature__content__text">
            <div class="feature__content__text__title">
                朝は誰にも邪魔されない
            </div>
            <div class="feature__content__text__description">
                夜は
                <ul>
                    <li>・友達、会社から連絡が来る</li>
                    <li>・道が帰宅ラッシュで渋滞している</li>
                    <li>・恋人、家族から食事に誘われる</li>
                </ul>
                などの不確定要素が多く、予定通りに行動することが難しいことが多いです。朝は他人に邪魔されずに自分のために100%の時間を使うことができます。
            </div>
        </div>
    </div>
    <div class="feature__content">
        <div class="feature__content__image">
            <h3 class="feature__content__image__title">
                1日を気持ちよくスタートできる
            </h3>
            <img src="<?php echo get_template_directory_uri(); ?>/images/merit3.webp" alt="7時をさしている置き時計の画像" class="feature__content__image__size">
        </div>
        <div class="feature__content__text">
            <div class="feature__content__text__title">
                1日を気持ちよくスタートできる
            </div>
            <div class="feature__content__text__description">
                1日の最初の1時間を充実して過ごすことができれば、その1日はずっと高い集中力と生産性を維持したまま過ごすことができます。最初の1時間がその日1日の方向性を決めると言われているので、朝の時間を有意義に使って、毎日気持ちよく1日をスタートしましょう。
            </div>
        </div>
    </div>
</section>

<section class="action" id="action">
    <h2 class="action__top">朝活カフェでの活動は自由です</h2>
    <div class="slider">
        <div class="slider-item">
            <div class="action__content">
                <div class="action__content__left">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/action1.webp" alt="ギターを弾いている女性の画像" class="action__content__left__image">
                </div>
                <div class="action__content__right">
                    <h3 class="action__content__right__top">
                        趣味
                    </h3>
                    <div class="action__content__right__bottom">
                        朝の静かな時間帯には誰にも邪魔されず、自分だけの贅沢なひとときを過ごすことができます。好きなことに没頭する朝の時間が、人生の幸福度を向上させます。
                    </div>
                </div>
            </div>
        </div>
        <div class="slider-item">
            <div class="action__content">
                <div class="action__content__left">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/action3.webp" alt="男性がパソコンで作業をしている画像" class="action__content__left__image">
                </div>
                <div class="action__content__right">
                    <h3 class="action__content__right__top">
                        副業
                    </h3>
                    <div class="action__content__right__bottom">
                        「会社から独立したい」「将来的は起業をしたい」と考えている方は、頭が冴えている朝に活動することで新しいアイデアを発見しやすくなります。
                    </div>
                </div>
            </div>
        </div>
        <div class="slider-item">
            <div class="action__content">
                <div class="action__content__left">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/action4.webp" alt="女性が本を読んでいる画像" class="action__content__left__image">
                </div>
                <div class="action__content__right">
                    <h3 class="action__content__right__top">
                        読書
                    </h3>
                    <div class="action__content__right__bottom">
                        朝の読書は脳を刺激し、思考力や判断力が向上することで前向きな気持ちで新しい一日を迎えることができます。また朝の読書タイムは日常のストレスから解放されます。
                    </div>
                </div>
            </div>
        </div>
        <div class="slider-item">
            <div class="action__content">
                <div class="action__content__left">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/action5.webp" alt="学生が勉強をしている画像" class="action__content__left__image">
                </div>
                <div class="action__content__right">
                    <h3 class="action__content__right__top">
                        勉強
                    </h3>
                    <div class="action__content__right__bottom">
                        朝は外部の騒音が少なく、深い集中力を維持しやすくなります。また朝に学習した内容を日中に復習することでより効果的に学習を進めることができます。
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script>
        $(document).ready(function(){
            $('.slider').slick({
            slidesToShow: 2,
            autoplay: true,
            autoplaySpeed: 3000,
            dots: true,
            centerMode: true,
            centerPadding: '0',
            responsive: [
                {
                    breakpoint: 550,
                    settings: {
                    slidesToShow: 1,
                    }
                }
            ]
            });
        });
    </script>
</section>

<section class="cta">
    <div class="cta__wrapper">
        <div class="cta__top">
            <span class="cta__top__st">朝活</span>で<span class="cta__top__st">人生</span>を変えよう！
        </div>
        <div class="cta__button">
            <div class="cta__button__left">
                <span class="cta__button__left__normal">簡単</span><br>
                <span class="cta__button__left__st">1分</span>
            </div>
            <div class="cta__button__right">
                <div class="cta__button__right__top">
                    月額3,600円
                </div>
                <div class="cta__button__right__bottom">
                    朝活カフェに入会する
                </div>
            </div>
        </div>
        <div class="cta__bottom">
            <img src="<?php echo get_template_directory_uri(); ?>/images/cta2.webp" alt="朝の街の画像" class="cta__bottom__image">
        </div>
    </div>
</section>

<section class="flow" id="flow">
    <h2 class="flow__top">
        朝活参加までの流れ
    </h2>
    <div class="flow__content">
        <div class="flow__content__left">
            <div class="flow__content__left__top">
                STEP01
            </div>
            <div class="flow__content__left__bottom">
                <img src="<?php echo get_template_directory_uri(); ?>/images/flow1.webp" alt="握手のアイコン" class="flow__content__left__bottom__image">
            </div>
        </div>
        <div class="flow__content__right">
            <h3 class="flow__content__right__top">
                入会手続き
            </h3>
            <div class="flow__content__right__bottom">
                サイト内の「朝活カフェに入会する」のボタンをクリックし、決済をお済ませください。
            </div>
        </div>
    </div>
    <div class="flow__content">
        <div class="flow__content__left">
            <div class="flow__content__left__top">
                STEP02
            </div>
            <div class="flow__content__left__bottom">
                <img src="<?php echo get_template_directory_uri(); ?>/images/flow2.webp" alt="LINEのアイコン" class="flow__content__left__bottom__image2">
            </div>
        </div>
        <div class="flow__content__right">
            <h3 class="flow__content__right__top">
                LINEオープンチャットに参加
            </h3>
            <div class="flow__content__right__bottom">
                入会手続きが完了したら1営業日以内に招待制LINEオープンチャットに招待します。
            </div>
        </div>
    </div>
    <div class="flow__content">
        <div class="flow__content__left2">
            <div class="flow__content__left__top">
                STEP03
            </div>
            <div class="flow__content__left__bottom">
                <img src="<?php echo get_template_directory_uri(); ?>/images/flow3.webp" alt="パソコンのアイコン" class="flow__content__left__bottom__image">
            </div>
        </div>
        <div class="flow__content__right">
            <h3 class="flow__content__right__top">
                朝活参加
            </h3>
            <div class="flow__content__right__bottom">
                朝5:30になりましたら、固定のZoomに入室してください。顔出しの有無は問いません。
            </div>
        </div>
    </div>
</section>

<section class="thought" id="thought">
    <div class="thought__wrapper">
        <h2 class="thought__top">
            朝活カフェ創設者の想い
        </h2>
        <div class="thought__bottom">
            <div class="thought__bottom__right">
                <img src="<?php echo get_template_directory_uri(); ?>/images/thought.webp" alt="朝活カフェ創設者の画像" class="thought__bottom__right__image">
                <div class="thought__bottom__right__name">
                    <div class="thought__bottom__left__top__sub">
                        朝活カフェ創設
                    </div>
                    <div class="thought__bottom__left__top__main">
                        <div class="thought__bottom__left__top__main__ja">
                            橋本 大河
                        </div>
                        <div class="thought__bottom__left__top__main__en">
                            Hashimoto Taiga
                        </div>
                    </div>
                </div>
            </div>
            <div class="thought__bottom__left">
                <div class="thought__bottom__left__top">
                    <div class="thought__bottom__left__top__sub">
                        朝活カフェ創設
                    </div>
                    <div class="thought__bottom__left__top__main">
                        <div class="thought__bottom__left__top__main__ja">
                            橋本 大河
                        </div>
                        <div class="thought__bottom__left__top__main__en">
                            Hashimoto Taiga
                        </div>
                    </div>
                </div>
                <div class="thought__bottom__left__bottom">
                    私は一昨年までずっと夜型でした。<br>
                    生活習慣も乱れており、夜はダラダラスマホを見て夜更かしをして、次の日は睡眠不足で集中できいないという日が続いていました。<br><br>

                    ところが朝活を始めると、生活習慣が整うことで朝にしっかり学習の時間を確保することができました。頭がクリアなので学習にも集中でき、効率的に取り組むことができました。<br><br>

                    この経験から私は全人類に朝活をお薦めしたいと本気で思っています。<br><br>

                    朝早起きできないという人もいるでしょう。しかしそれは単に早く眠れていないだけです。生活習慣を整え、早く眠れば早く起きられます。<br><br>

                    習慣は人格を変え、人格は運命を変えます。<br>
                    ぜひみなさんも朝活を習慣にして、理想の未来へ一歩踏み出して見ませんか？<br>
                    「何かを成し遂げたい！」「一歩踏み出して行動したい！」という志の高い人をお待ちしております。<br>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="faq" id="faq">
    <h2 class="faq__top">
        よくある質問
    </h2>
    <div class="faq__content">
        <div class="faq__content__q">
            <div class="faq__content__q__left">
                Q
            </div>
            <h3 class="faq__content__q__right">
                どうすれば入会できますか？
            </h3>
        </div>
        <div class="faq__content__a">
            <div class="faq__content__a__wrapper">
                <div class="faq__content__a__left2">
                    A
                </div>
                <div class="faq__content__a__right">
                    サイト内の「朝活カフェに入会する」のボタンをクリックし、決済をお済ませください。決済が完了すると、その後の手続きが記載されている画面へ遷移しますので、そちらの指示に従ってください。
                </div>
            </div>
        </div>
    </div>
    <div class="faq__content">
        <div class="faq__content__q">
            <div class="faq__content__q__left">
                Q
            </div>
            <h3 class="faq__content__q__right">
                退会したいのですが、どうすれば良いですか？
            </h3>
        </div>
        <div class="faq__content__a">
            <div class="faq__content__a__wrapper">
                <div class="faq__content__a__left2">
                    A
                </div>
                <div class="faq__content__a__right">
                    退会を希望される方は、公式LINEからそちらの旨をご連絡ください。ご連絡いただき次第、それ以降の請求を停止いたします。また、情報流出を防ぐため退会後の再入会はお断りさせていただいております。<br>
                    ※日割り分等での返金は承っておりません。
                </div>
            </div>
        </div>
    </div>
    <div class="faq__content">
        <div class="faq__content__q">
            <div class="faq__content__q__left">
                Q
            </div>
            <h3 class="faq__content__q__right">
                月の途中から入会した場合のキャッシュバックはどのようになりますか？
            </h3>
        </div>
        <div class="faq__content__a">
            <div class="faq__content__a__wrapper">
                <div class="faq__content__a__left2">
                    A
                </div>
                <div class="faq__content__a__right">
                    キャッシュバックキャンペーンには入会した月の翌月から参加可能です。例えば1月15日に入会した場合は2月以降のキャッシュバックキャンペーンに参加できます。
                </div>
            </div>
            
        </div>
    </div>
    <div class="faq__content">
        <div class="faq__content__q">
            <div class="faq__content__q__left">
                Q
            </div>
            <h3 class="faq__content__q__right">
                海外在住なのですが、入会できますか？
            </h3>
        </div>
        <div class="faq__content__a">
            <div class="faq__content__a__wrapper">
                <div class="faq__content__a__left2">
                    A
                </div>
                <div class="faq__content__a__right">
                    もちろん入会可能です。
                </div>
            </div>
            
        </div>
    </div>
    <div class="faq__content">
        <div class="faq__content__q">
            <div class="faq__content__q__left">
                Q
            </div>
            <h3 class="faq__content__q__right">
                途中退会の場合、返金はありますか？
            </h3>
        </div>
        <div class="faq__content__a">
            <div class="faq__content__a__wrapper">
                <div class="faq__content__a__left2">
                    A
                </div>
                <div class="faq__content__a__right">
                    決済処理完了後、会員都合での退会に関しては一切返金できません。規約違反などによる強制退会も返金しかねます。予めご了承ください。
                </div>
            </div>
            
        </div>
    </div>
    <script>
        jQuery(document).ready(function($) {
            $(function () {
                $(".faq__content__q").click(function(){
                    $(this).next().slideToggle(300);
                    $(this).find(".faq__content__q__right__image").toggleClass("rotate", !$(this).find(".faq__content__q__right__image").hasClass("rotate"));
                });
            });
        });
    </script>
</section>

<section class="cta">
    <div class="cta__wrapper">
        <div class="cta__top">
            <span class="cta__top__st">朝活</span>で<span class="cta__top__st">人生</span>を変えよう！
        </div>
        <div class="cta__button">
            <div class="cta__button__left">
                <span class="cta__button__left__normal">簡単</span><br>
                <span class="cta__button__left__st">1分</span>
            </div>
            <div class="cta__button__right">
                <div class="cta__button__right__top">
                    月額3,600円
                </div>
                <div class="cta__button__right__bottom">
                    朝活カフェに入会する
                </div>
            </div>
        </div>
        <div class="cta__bottom">
            <img src="<?php echo get_template_directory_uri(); ?>/images/cta2.webp" alt="朝の街の画像" class="cta__bottom__image">
        </div>
    </div>
</section>

<section class="alert" id="alert">
    <div class="alert__wrapper">
        <div class="alert__top">
            注意事項
        </div>
        <div class="alert__content">
            <div class="alert__content__left"></div>
            <div class="alert__content__right">
                決済完了後に追加していただく公式LINEからの通知は届く状態にしておいてください。
            </div>
        </div>
        <div class="alert__content">
            <div class="alert__content__left"></div>
            <div class="alert__content__right">
                コミュニティの秩序をみだす行為があった場合、強制退会とします。
            </div>
        </div>
        <div class="alert__content">
            <div class="alert__content__left"></div>
            <div class="alert__content__right">
                オープンチャットでの営業行為はお断りさせていただいております。
            </div>
        </div>
    </div>

</section>


<?php get_footer(); ?>


