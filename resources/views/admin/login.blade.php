<html lang="en"><head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>부산대길의전</title>
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>

<style>
    *{padding:0;  margin: 0;}
    a{text-decoration: none; color: #333;}
    li{ list-style: none;}
    body {font-family: 'Noto Sans KR', sans-serif; }
    #back {
        width: 100%;
        height: 100vh;
        background: linear-gradient(to bottom, #1BA197, #356B98);
    }
    .log-wrap {
        width: 414px;
        height: 450px;
        background-color: #404B8F;
        position: absolute;
        top: 50%;
        left: 50%;
        margin: -207px 0 0 -225px;
        box-shadow: 0 5px 10px rgba(0,0,0,.3);
        border-radius: 5px;
    }
    .tit {
        color: #fff;
        text-align: center;
        font-size: 22px;
        font-weight: thin;
        padding: 30px 0 70px 0;
    }
    .log-box {
        width: 340px;
        height: auto;
        margin: 0 auto;
    }
    input[type="text"],input[type="password"]{
        width: 330px;
        height: 50px;
        line-height: 50px;
        display: inline-block;
        border-radius: 5px;
        outline: none;
        border: 2px solid #5d6598;
        outline-style: none;
        appearance: none;
        cursor: text;
        padding-left: 10px;
        margin-bottom: 20px;

    }
    input[type="text"]::placeholder,input[type="password"]::placeholder{
        padding-left: 10px;
        color: #ccc;
    }

    #id {
        margin-bottom:35px;
    }
    button {
        display: block;
        width: 130px;
        height: 50px;
        border-radius: 5px;
        border: 0;
        outline: none;
        background-color: #7b82ae;
        color: #fff;
        margin-left: 37px;
        margin-top: 60px;
        cursor: pointer;
        font-size: 18px;
        letter-spacing: 1.2px;
    }


</style></head>

<body>
<div id="back">
    <div class="log-wrap">
        <p class="tit">ADMIN LOGIN</p>
        <!-- <form action="{!! route('admLogin') !!}" method="post"> -->
            @csrf
            <div class="log-box">
                <input type="text" id="email" name="email" placeholder="ID">
                <input type="password" id="password" name="password" placeholder="PASSWORD">
            </div>
            <button type="submit">Login</button>
        </form>
    </div>
</div> 



</body></html>