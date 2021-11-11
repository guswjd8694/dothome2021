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
    <title>PHP class : 댓글 페이지</title>

    <!-- SEO -->
    <meta name="author" content="hyunjoying" />
    <meta name="description" content="PHP 포트폴리오 사이트입니다." />
    <meta name="keywords" content="PHP, 포트폴리오, 웹표준, 웹접근성, 사이트만들기, 포트폴리오, 현정" />
    <meta name="robots" content="all" />

    <!-- style -->
    <link rel="stylesheet" href="../assets/css/fonts.css">
    <link rel="stylesheet" href="../assets/css/var.css">
    <link rel="stylesheet" href="../assets/css/reset.css">
    <link rel="stylesheet" href="../assets/css/style.css">
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



        <main id="contents">
            <section id="mainCont">
                <h2 class="ir_so">메인 컨텐츠</h2>
                <article class="content_article">
                    <!-- Card Type01 -->
                    <section class="cardType">
                        <div class="cardType01">
                            <h2>행복한 달래의 세상</h2>
                            <p>좋아하는 것 김현정과 홍은지 그리고 소고기 간식 큐브 또 기린 인형이랑 초록상어 인형도 좋아하지롱 취미는 어깨 위에 올라가기랑 광합성하기 세상에서 제일 무서운 건 천둥번개</p>
                                <div class="card-wrap">
                                    <div class="card">
                                        <a href="#">
                                            <img src="../assets/img/card01.jpg" alt="김달래 귀엽다고 알려주는 이미지입니다." class="card-img">
                                            <strong class="card-title">뒹굴뒹굴 김달래</strong>
                                            <span class="card-desc">아 이뿌다</span>
                                            <span class="card-keyword">
                                                <span>#나도</span>
                                                <span>#누울래</span>
                                            </span>
                                        </a>
                                    </div>
                                    <div class="card">
                                        <a href="#">
                                            <img src="../assets/img/card02.jpg" alt="김달래 귀엽다고 알려주는 이미지입니다." class="card-img">
                                            <strong class="card-title">입이 삐뚤 김달래</strong>
                                            <span class="card-desc">아 기욥다</span>
                                            <span class="card-keyword">
                                                <span>#달랑구</span>
                                                <span>#사랑애</span>
                                            </span>
                                        </a>
                                    </div>
                                    <div class="card">
                                        <a href="#">
                                            <img src="../assets/img//card03.jpg" alt="김달래 귀엽다고 알려주는 이미지입니다." class="card-img">
                                            <strong class="card-title">응가에 집중하는 김달래</strong>
                                            <span class="card-desc">람머스 김달래 힘을내 ! ! !</span>
                                            <span class="card-keyword">
                                                <span>#쉿</span>
                                                <span>#응아중</span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- //Card Type01 -->
                </article>
                <article class="flow_article">
                    <h3 class="ir_so">강의 신청하기</h3>
                    <section id="comment" class="section-comment">
                        <h4>강의 신청하기</h4>
                        <p>수강을 원하시는 분께서는 댓글로 참여 신청을 해주세요.</p>
                        <div class="comment-form">
                            <form action="commentSave.php" method="post" name="comment">
                                <fieldset>
                                    <legend class="ir_so">댓글 영역</legend>
                                    <div class="comment-wrap">
                                        <div>
                                            <label for="youName" class="ir_so">이름</label>
                                            <input type="text" name="youName" class="input_write2" placeHolder="이름을 적어주세용 ^_^" autocomplete="off" maxlength="5" required>
                                        </div>
                                        <div>
                                            <label for="youName" class="ir_so">신청하기</label>
                                            <input type="text" name="youText" class="input_write2 w100" placeHolder="신청 과목을 적어주세용 ^_^" autocomplete="off" required>
                                        </div>
                                        <button class="btn_submit2" type="submit" value="신청하기">go</button>
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                        <div class="comment-list">
                            <?php
                                include "../connect/connect.php";

                                $sql = "SELECT * FROM myComment LIMIT 10";
                                $result = $connect -> query($sql);

                                // echo "<pre>";
                                // var_dump(mysqli_fetch_array($result));
                                // echo "</pre>";

                                while($info = mysqli_fetch_array($result)){
                            ?>
                                <div>
                                    <p><?=$info['youText']?></p>
                                    <div>
                                        <img src="/assets/img/dallae_mac2.png" alt="">
                                        <span><?=$info['youName']?></span>
                                        <span><?=date('Y-m-d H:i', $info['regTime'])?></span>
                                    </div>
                                </div>
                            <?php
                                }
                            ?>






                        </div>
                    </section>
                </article>
            </section>
        </main>
        <!-- //contents -->


        
    <footer id="footer">
        <?php
            include "../include/footer.php";
        ?>
    </footer>
    <!-- //footer -->


        
</body>
</html>