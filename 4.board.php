<?php include  $_SERVER['DOCUMENT_ROOT']."/test-schema/db.php"; ?>
<!doctype html>
<head>
<meta charset="UTF-8">
<title>게시판</title>

</head>
<body>
<div id="board_area"> 
  <h1>자유게시판</h1>
  
    <table class="list-table">
      <thead>
          <tr>
              <th width="70">번호</th>
                <th width="500">제목</th>
                <th width="120">글쓴이</th>
                <th width="100">작성일</th>
                
            </tr>
        </thead>
        <?php
        // board테이블에서 idx를 기준으로 내림차순해서 10개까지 표시
          $sql = query("select * from board order by idx desc limit 0,10"); 
          ?>
          <tbody></tbody>


</table>
<?php  ?>
    </table>
    <div id="write_btn">
      <a href="/page/board/write.php"><button>글쓰기</button></a>
    </div>
  </div>
</body>
</html>
    
    