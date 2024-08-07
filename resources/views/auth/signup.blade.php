<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>ثبت نام حساب کاربری - برکینگ</title>
{{--    <link--}}
{{--        href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"--}}
{{--        rel="stylesheet"--}}
{{--    />--}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.rtl.min.css" integrity="sha384-dpuaG1suU0eT09tx5plTaGMLBsfDLzUCCUXOY2j/LSvXYuG6Bqs43ALlhIqAJVRb" crossorigin="anonymous">
    <link
        href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        rel="stylesheet"
    />
    <script type="text/javascript">
        !function(){
            var i="vHb9MV",a=window,d=document;
            function g(){
                var g=d.createElement("script"),s="https://www.goftino.com/widget/"+i,l=localStorage.getItem("goftino_"+i);
                g.async=!0,
                    g.src=l?s+"?o="+l:s;
                d.getElementsByTagName("head")[0].appendChild(g);
            }"complete"===d.readyState?g():a.attachEvent?a.attachEvent("onload",g):a.addEventListener("load",g,!1);
        }();
    </script>
    <link href="/galeb/css/style.css" rel="stylesheet" />
</head>
<body oncontextmenu="return false" class="snippet-body">
<div class="container">
    <div class="row">
        <div class="offset-md-2 col-lg-5 col-md-7 offset-lg-4 offset-md-3">
            <div class="panel border bg-white">
                <div class="panel-heading">
                    <h3 class="pt-3 font-weight-bold">ثبت نام حساب کاربری</h3>
                </div>
                <div class="panel-body p-3">
                    <form action="/register1" method="post">
                        @csrf
                        <div class="form-group py-2">
                            <div class="input-field">
                                <span class="far fa-user p-2"></span>
                                <input type="email" name="email" placeholder="ایمیل را وارد کنید" required />
                            </div>
                        </div>
                        <div class="form-group py-1 pb-2">
                            <div class="input-field">
                                <span class="fas fa-lock px-2"></span>
                                <input type="password" name="password" placeholder="رمز خود را وارد کنید" required />
                                <button class="btn bg-white text-muted">
                                    <span class="far fa-eye-slash"></span>
                                </button>
                            </div>

                        </div>
                        <div class="form-inline">
                            <input type="checkbox" name="remember" id="remember" />
                            <label for="remember" class="text-muted">من را بخاطر بسپار</label>
                        </div>
                        <input class="btn btn-primary btn-block mt-3" type="submit" value="ثبت نام">
                        <div class="text-center pt-4 text-muted">
                            حساب کاربری دارید ؟ <a href="/login">ورود به حساب کاربری </a>
                        </div>
                    </form>
                </div>
                <div class="mx-3 my-2 py-2 bordert">
                    <div class="text-center py-3">
                        <a href="https://90426364197.apps.googleusercontent.com" target="_blank" class="px-2">
                            <img
                                src="https://www.freepnglogos.com/uploads/google-logo-png/google-logo-png-suite-everything-you-need-know-about-google-newest-0.png"
                                alt=""
                            />
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript"></script>
</body>
</html>
