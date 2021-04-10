# PHP 학습

생활코딩 강좌를 보고 있음.[인프런으로 보고 있음(별 의미 없음)]

생활코딩 사이트에 자세히 나와있음.
https://opentutorials.org/course/1

2021-03-21일
현재 섹션 7까지 완료 후 커밋

2021-03-28일
현재 섹션 11까지 완료 후 커밋
 
2021-04-03일
현재 섹션 13까지 완료 후 커밋

2021-04-11일
현재 섹션 15까지 완료 후 커밋









==================================================================================


php 문법정리


echo - 출력 print 와 똑같 ㅇㅇ 
ex) echo "hello world";

<?php  - php문법을 사용한다는 정의
문법등 내용
?>

[생활코딩 php - 문자와 숫자 - 문자]
var_dump : 형식 출력

"string" . "string" : .이 string 문자열 더해주는 php 고유문법

""를 출력하려면 앞에 |역슬래쉬 쓰던지 아니면 ''안에 넣던지 등등

# - 주석처리
// - 주석처리
/* */ - 주석처리

[생활코딩 php - 상수]
define - 상수 정의 하기(즉 한번 정의 하면 값을 바꿀수 없음.)
define('TITLE', 'PHP Tutorial');

[생활코딩 php - 고급주제]
gettype - 데이터형식 체크 즉 데이터형식 가져오기
settype - 데이터형식 정의 하기

echo gettype($a);
settype($a, 'double');

$title = 'subject';
$$title = 'PHP tutorial';
 즉 $$title 가 $($title)처럼 작동해서
$subject = 'PHP tutorial'; 처럼 작동함 php의 특징임
그래서 echo로 $subject를 찍으면
php totorial이 찍힘


[생활코딩 php - 비교]

[생활코딩 php - 입력과출력]
echo $_GET['id'];
 $_GET['id']; - 출력(id 라는 인덱스를 출력함)

[생활코딩 php - POST GET]
fiddler web debugger - 네트워크 보여주는거. 걍 크롬 f12 네트워크 보면될듯.

배열

배열크기 - count
배열 끝에 추가 - array_push()  
ex) array_push($arr, 'f');
ex) array_merge($li, ['f','g']);

array_unshift($li,'z');
array_splice($li, 2, 0, 'B');


배열의 첫번째 요소 제거 - array_shift($li);
배열의 마지막 요소 제거 -array_pop($li);

배열의 정렬 - sort($li);
배열의 역정렬 - rsort($li);

include 와 require - 외부의 php파일을 가져올때 사용 하는 명령어
(즉 js파일을 jsp에 연결하듯 사용함)
include 'greeting.php';

밑에 once 달린건 한번만 불러올때
require와 include의 차이는 require는 더 강력하게?(더 엄격하게) 불러와서 에러가 뜨면 치명적에러가 발생 include는 warning만 일으키게 적당한 로드임

include
include_once
require
require_once


파일복사, 삭제
[복사]
copy($file, $newfile))
$file = 'readme.txt';
$newfile = 'example.txt.bak';

[삭제]
unlink('deleteme.txt');


file_get_contents -텍스트로 이루어진 파일을 읽어서 문자열을 리턴한다.
file_get_contents($file)

파일다루는데 잘 발생할수 있는문제
-리눅스 계통 - 권한 문제
is_readable($filename) - 읽기권한이 있는지
writable($filename) - 쓰기권한이 있는지
file_exists($filename) - 파일이 존재 하는지 아닌지

디렉토리 제어
getcwd() - 디텍토리 주소얻기

scandir() - 디텍토리 검색

mkdir() - 디텍토리 생성 mkdir("1/2/3/4", 0700, true);
1 아래 2 아래 3 아래 4 라는 폴더 구조 만들고
0700은 권한주는것


파일업로드

$_FILES - 파일을 가져와서 쓰는 정의된 문자.

ini_set - php.ini 설정을 변경해서 사용하는것
basename - 경로를 제거 하고 파일의 이름만 가져옴 (보안)
