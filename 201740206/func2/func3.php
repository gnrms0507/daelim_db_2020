<?php
// 함수의 선언부
function daelim($num) {
    // $name = "대림";  // 지역 변수
    global $name;  // 전역 변수 사용하기 위해서 global 키워드를 붙임
    $name .= $num;
    echo $name."대학교";
    print "<hr>";
}

$name = "daelim";  // 전역 변수

for ($i=0; $i<5; $i++) {
    // 함수의 호출부
    daelim($i);
} 

echo $name . "을 5번 출력 하였습니다.";