<?php
    include "../connect/connect.php";
    include "../connect/session.php";
?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP class</title>

    <!-- SEO -->
    <meta name="author" content="webstoryboy" />
    <meta name="description" content="PHP 포트폴리오 사이트입니다." />
    <meta name="keywords" content="PHP, 포트폴리오, 웹표준, 웹접근성, 사이트만들기, 포트폴리오, 웹스토리보이" />
    <meta name="robots" content="all" />

    <!-- style -->
    <link rel="stylesheet" href="../assets/css/fonts.css">
    <link rel="stylesheet" href="../assets/css/var.css">
    <link rel="stylesheet" href="../assets/css/reset.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/main.css">
</head>
<body>

    <div id="skip">
        <a href="#contents">컨텐츠 바로가기</a>
        <a href="#footer">푸터 바로가기</a>
    </div>
    <!-- //skip -->


    <header id="header">
        <?php
            include "../include/header.php";
        ?>
    </header>
    <!-- //header -->


    <main id="main">
        <section id="mainContent">
            <h2 class="ir_so">메인 컨텐츠</h2>

            <article class="content-article">
                <h3>행복한 달래의 세상</h3>
                <p>귀여운 달래</p>
                <section class="section-card">
                    <h4 class="ir_so">카드 컨텐츠</h4>
                    <ul class="card-list">
                        <li>
                            <a href="#">
                                <img src="../assets/img/card01.jpg" alt="ff">
                            </a>
                            <div class="item">
                                <strong>뒹굴뒹굴 김달래</strong>
                                <span>좋아하는 것 김현정과 홍은지 그리고 소고기 간식 큐브</span>
                                <span class="keyword">
                                    <span>#나도</span><span>#누울래</span>
                                </span>
                            </div>
                        </li>
                        <li>
                            <a href="#">
                                <img src="../assets/img/card02.jpg" alt="dd">
                            </a>
                            <div class="item">
                                <strong>달래는 입이 삐뚤</strong>
                                <span>또 기린 인형이랑 초록상어 인형도 좋아하지롱</span>
                                <span class="keyword">
                                    <span>#달랑구</span><span>#사랑애</span>
                                </span>
                            </div>
                        </li>
                        <li>
                            <a href="#">
                                <img src="../assets/img/card03.jpg" alt="dd">
                            </a>
                            <div class="item">
                                <strong>응가에 집중하는 김달래</strong>
                                <span>취미는 어깨 위에 올라가기랑 광합성하기 세상에서 제일 무서운 건 천둥번개</span>
                                <span class="keyword">
                                    <span>#쉿</span><span>#응아중</span>
                                </span>
                            </div>
                        </li>
                    </ul>
                </section>
            </article>
            <article class="flow-article">
                <h3 class="ir_so">동영상</h3>
                <section class="section-intro container">
                    <h4 class="ir_so">동영상 소개</h4>
                    <div class="youtube-intro">
                        <div>
                            <iframe src="https://youtu.be/7yNP30R05_w" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <div>
                            <h5>고양이</h5>
                            <p>말하는 야통이를 인터뷰 합니다. 힘들었던 점과 좋았던 점 등을 얘기하며, 
                                야통이 목소리의 노하우를 공유합니다.
                            </p>
                            <div class="interview">
                                <div class="icon">
                                    <a href="#" target="_blank">
                                        <img src="#" alt="야통">
                                        <span>#야통</span>
                                    </a>
                                </div>
                                <div class="icon">
                                    <a href="#" target="_blank">
                                        <img src="#" alt="고양이">
                                        <span>#고양이</span>
                                    </a>
                                </div> 
                                <div class="icon">
                                    <a href="#" target="_blank">
                                        <img src="#" alt="대화">
                                        <span>#대화</span>
                                    </a>
                                </div> 
                                <div class="icon">
                                    <a href="#" target="_blank">
                                        <img src="#" alt="일상">
                                        <span>#일상</span>
                                    </a>
                                </div> 
                                <div class="icon">
                                    <a href="#" target="_blank">
                                        <img src="#" alt="강아지">
                                        <span>#강아지</span>
                                    </a>
                                </div> 
                            </div>
                        </div>
                    </div>
                </section>
            </article>
            <article class="content-article content-sub">
                <h3>스크립트 강의</h3>
                <p>제이쿼리와 자바스크립트를 동시에 배우는 스크립트 강의입니다.</p>
                <section class="section-card">
                    <h4 class="ir_so">카드 컨텐츠</h4>
                    <ul class="card-list2">
                        <li>
                            <a href="#">
                                <img src="assets/img/post01.jpg" alt="dd">
                            </a>
                            <div class="item">
                                <strong>포트폴리오를 만드는 가장 쉬운 방법입니다.</strong>
                                <span class="keyword">
                                    <span>#초보</span><span>#mysql</span><span>#사이트</span>
                                </span>
                            </div>
                        </li>
                        <li>
                            <a href="#">
                                <img src="assets/img/post02.jpg" alt="dd">
                            </a>
                            <div class="item">
                                <strong>변화를 만드는 AI, 카카오 i</strong>
                                <span class="keyword">
                                    <span>#초보</span><span>#mysql</span><span>#사이트</span>
                                </span>
                            </div>
                        </li>
                        <li>
                            <a href="#">
                                <img src="assets/img/post03.jpg" alt="dd">
                            </a>
                            <div class="item">
                                <strong>학원을 선택할 때 가장 중요한 것은?</strong>
                                <span class="keyword">
                                    <span>#학원</span><span>#국비지원</span><span>#사이트</span>
                                </span>
                            </div>
                        </li>
                        <li>
                            <a href="#">
                                <img src="assets/img/post04.jpg" alt="dd">
                            </a>
                            <div class="item">
                                <strong>내가 퍼블리셔를 하는 이유는? 프론트앤드 개발자를 하는 이유는?</strong>
                                <span class="keyword">
                                    <span>#퍼블리셔</span><span>#mysql</span><span>#사이트</span>
                                </span>
                            </div>
                        </li>
                        <li>
                            <a href="#">
                                <img src="assets/img/post02.jpg" alt="dd">
                            </a>
                            <div class="item">
                                <strong>내가 퍼블리셔를 하는 이유는? 프론트앤드 개발자를 하는 이유는?</strong>
                                <span class="keyword">
                                    <span>#퍼블리셔</span><span>#mysql</span><span>#사이트</span>
                                </span>
                            </div>
                        </li>
                        <li>
                            <a href="#">
                                <img src="assets/img/post01.jpg" alt="dd">
                            </a>
                            <div class="item">
                                <strong>내가 퍼블리셔를 하는 이유는? 프론트앤드 개발자를 하는 이유는?</strong>
                                <span class="keyword">
                                    <span>#퍼블리셔</span><span>#mysql</span><span>#사이트</span>
                                </span>
                            </div>
                        </li>
                        <li>
                            <a href="#">
                                <img src="assets/img/post03.jpg" alt="dd">
                            </a>
                            <div class="item">
                                <strong>내가 퍼블리셔를 하는 이유는? 프론트앤드 개발자를 하는 이유는?</strong>
                                <span class="keyword">
                                    <span>#퍼블리셔</span><span>#mysql</span><span>#사이트</span>
                                </span>
                            </div>
                        </li>
                        <li>
                            <a href="#">
                                <img src="assets/img/post04.jpg" alt="dd">
                            </a>
                            <div class="item">
                                <strong>내가 퍼블리셔를 하는 이유는? 프론트앤드 개발자를 하는 이유는?</strong>
                                <span class="keyword">
                                    <span>#퍼블리셔</span><span>#mysql</span><span>#사이트</span>
                                </span>
                            </div>
                        </li>
                    </ul>
                </section>
            </article>
            <article class="flow-article content-sub">
                <h3>최신 소식</h3>
                <p>최신 소식을 바로 확인 할 수 있습니다.</p>
                <section class="section-news container">
                    <div class="news">
                        <h4>게시판 업데이트</h4>
                        <ul>
                            <li><a href="#">스크립트 강의 업데이트 예정입니다.</a><span>2021.02.02</span></li>
                            <li><a href="#">유튜브에 강의 업데이트할 예정입니다.</a><span>2021.02.02</span></li>
                            <li><a href="#">스터디 참여에 대해서 자세히 알려드립니다.</a><span>2021.02.02</span></li>
                            <li><a href="#">스터디 강의와 면접 잘 보는 법에 대해서 알려드릴께요~</a><span>2021.02.02</span></li>
                        </ul>
                        <a href="board.html" title="더보기" class="more">더보기</a>
                    </div>
                    <div class="news">
                        <h4>댓글 업데이트</h4>
                        <ul>
                            <li><a href="#">감사합니다. 잘 보고 있어요^^</a><span>2021.02.02</span></li>
                            <li><a href="#">앞으로도 좋은 영상 부탁드령요~</a><span>2021.02.02</span></li>
                            <li><a href="#">여기가 짱인듯.. 너무 좋아요~~ 너무 필요한 거였어요~ 여기가 짱인듯.. 너무 좋아요~~ </a><span>2021.02.02</span></li>
                            <li><a href="#">앞으로도 좋은 영상 부탁드령요~</a><span>2021.02.02</span></li>
                        </ul>
                        <a href="comment.html" title="더보기" class="more">더보기</a>
                    </div>
                </section>
            </article>
        </section>
    </main>
    <!-- //main -->

    
    <footer id="footer">
        <?php
            include "../include/footer.php";
        ?>
    </footer>
    <!-- //footer -->


        
</body>
</html>