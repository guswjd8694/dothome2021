<?php
    include "../connect/connect.php";
    include "../connect/session.php";
    include "../connect/sessionCheck.php";
?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>게시판</title>

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
                    <div class="boardType">
                        <h3>게시판</h3>
                        <p>가장 빠른 새소식 업데이트</p>
                        <div class="board">
                            <div class="board-table mt30">
                                <table>
                                    <colgroup>
                                        <col style="width: 30%" />
                                        <col style="width: 70%" />
                                    </colgroup>
                                    <tbody>
                                        <?php
                                            $boardID = $_GET['boardID'];

                                            $sql = "SELECT b.boardTitle, b.boardContent, b.boardView, m.youName, b.regTime FROM myBoard b JOIN myMember m ON (b.myMemberID = m.myMemberID) WHERE b.myBoardID = {$boardID}";
                                            $result = $connect -> query($sql);

                                            $view = "UPDATE myBoard SET boardView = boardView+1 WHERE b.myBoardID = {$boardID}";
                                            $connect -> query($view);
                                            
                                            if($result){
                                                $info = $result -> fetch_array(MYSQLI_ASSOC);
                                                echo "<tr><th>제목</th><td class='left'>".$info['boardTitle']."</td></tr>";
                                                echo "<tr><th>글쓴이</th><td class='left'>".$info['youName']."</td></tr>";
                                                echo "<tr><th>등록일</th><td class='left'>".date('Y-m-d H:i', $info['regTime'])."</td></tr>";
                                                echo "<tr><th>조회수</th><td class='left'>".$info['boardView']."</td></tr>";
                                                echo "<tr><th class='height'>내용</th><td class='height left'>".$info['boardContent']."</td></tr>";
                                            }
                                        ?>
                                        <!-- <tr>
                                            <th>제목</th>
                                            <td class="left">----</td>
                                        </tr>
                                        <tr>
                                            <th>글쓴이</th>
                                            <td class="left">----</td>
                                        </tr>
                                        <tr>
                                            <th>등록일</th>
                                            <td class="left">----</td>
                                        </tr>
                                        <tr>
                                            <th>조회수</th>
                                            <td class="left">----</td>
                                        </tr>
                                        <tr>
                                            <th class="height">내용</th>
                                            <td class="height left">----</td>
                                        </tr> -->
                                    </tbody>
                                </table>
                                <div class="btn">
                                    <a href="boardModify.php?boardID=<?=$_GET['boardID']?>">수정하기</a>
                                    <a href="boardRemove.php?boardID=<?=$_GET['boardID']?>" onclick="confirm('정말 삭제하시겠습니까?')">삭제하기</a>
                                    <a href="board.php">목록보기</a>
                                </div>
                            </div>
                        </div>
                    </div>
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