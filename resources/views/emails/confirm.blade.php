<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>注册邮件确认</title>
</head>
<body>
  <h1>感谢您的注册,请点击下面链接激活您的账号!</h1>

  <p>
    请点击:
    <a href="{{route('confirm_email',$user->activation_token)}}">
      {{route('confirm_email',$user->activation_token)}}
    </a>
  </p>

  <p>
    若非本人操作,请忽略本邮件!
  </p>
</body>
</html>
