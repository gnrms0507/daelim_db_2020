##1. 출력될 문자열은?

```
$a = "HI";
echo $a;

$b = &$a;
$b = "안녕";
echo $a;

답: HI 안녕
이유: b는 a의 번지를 참조하고 있기 때문에 b에 값을 지정하면 a의 번지에 값이 저장된다.

```

##2. 출력될 값은?
```
$a = 1;
echo $a++;
echo ++$a;

답: 1 3
이유: a++는 a를 출력후 a의 값을 1올려주고 
      ++a는 a의 값을 1올려주고 출력하기 때문에
      1이 출력후 a++로 2가 저장된 상태에서 ++a로 3을 을 출력
```

##3. 파일을 읽어서 해당 파일의 내용을 결과값으로 반환하는 함수는?
```
답: file_get_contents()
```
