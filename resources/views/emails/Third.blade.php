<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Message</title>

    <style>
        body {
    padding: 0;
    margin: 0;
    background-color: #EEE;
}

.container {
    padding: 0 2rem 16px
}

.header img {
    width: 300px;
    background: transparent;
}

.header .box h1 {
    font-family: sans-serif;
    margin-bottom: 0;
    padding-bottom: 0;
    font-weight: bold;
}

.header .box p {
    margin-top: 5px;
    font-weight: 500;
    line-height: 1.7;
}

.content ul {
    list-style: none;
    padding-left: 0;
}

.content ul li:nth-child(odd) {
    padding: 8px;
}


.content .all .box-left p {
    color: #666;
    margin-top: 0;
    padding-top: 0;
}

.content .all .box-left h4 {
    margin-top: 0;
    padding-top: 0;
    margin-bottom: 10px;
    font-weight: bold;
}

.content ul li h4 {
    margin-bottom: 0;
}

.content ul li p {
    margin-top: 10px;
}

.content .blue {
    color: #0FA7DF;
    text-transform: uppercase;
    font-weight: 600;
}

.content .tap {
    padding: 20px;
    padding-bottom: 0;
    background-color: #FFF;
    box-shadow: 3px 4px 2px 0px #CCC;
    border-top-right-radius: 15px;
    border-bottom-right-radius: 15px;
}

.content .tap {
    position: relative;
}

.content .tap .boxs {
    position: absolute;
    right: 0;
    background-color: #0FA7DF;
    color: #FFF;
    font-size: 20px;
    padding: 40px;
    padding-top: 0;
    top: 0;
    bottom: 0;
    text-align: center;
    border-top-right-radius: 15px;
    border-bottom-right-radius: 15px;
}

.content .tap .boxs span {
    font-size: 15px;
    margin-top: 0;
}

.content .tap .boxs h3{ 
    margin-bottom: 0;
    margin-top: 15px;
}

.content li .all {
    display: flex;
}

.content li .all .box-right {
    text-align: center;
}

.content li .all .box-right h3 {
    color: #555;
    font-size: 17px;
    font-weight: 500;
    margin-top: 0;
    margin-bottom: 0;
}

.content li .all .box-right p { 
    color: #555;
    font-weight: 500;
}

.content li .all > div {
    width:50%;
}

td {
    padding-bottom: 10px;
}

.footer .foot .images {
    display: inline-block;
}

.footer {
    background-color: #FFF;
    padding-top: 20px;
}

.footer .foot .box {
    display: inline-block;
    margin-left: 50px;
    font-size: 20px;
}

.footer .foot .box h1 {
    margin-bottom: 10px;
    margin-top: 0;
}

.footer .foot .box p {
    margin-bottom: 10px;
    margin-top: 0;
    color: #555
}

.footer .foot .box a {
    color: #0FA7DF;
    text-decoration: none;
}

.footer .foot p {
    line-height: 1.7;
    margin-top: 30px;
    color: #555;
}

.footer .copyright {
    font-weight: bold;
    text-align: center;
}


@media  screen and (max-width: 768px) {
    .header img {
        width: 200px;
    }
    .content {
        margin-left: 0;
        width: 100%;
        box-shadow: 1px 3px 4px 0px #CCC;
        border-radius: 0;
        -webkit-border-radius: 0;
        -moz-border-radius: 0;
        -ms-border-radius: 0;
        -o-border-radius: 0;
    }
    .content li .all .box-right th {
        padding-left: 0;
    }
    .footer .foot .box {
        margin-top: 50px;
        margin-left: 0;
    }

    .content li .all > div {
        width: auto;
    }

    .content .tap .boxs {
        padding: 13px;
    }

    .content .tap .boxs h3 {
        margin-top: 0;
    }

}


@media screen and (max-width: 576px) {


    .content .tap .all > div {
        width: 70px;
    }

    .content .tap {
        box-shadow: none;
        padding: 12px;
    }

    .content .tap .boxs {
        right: -30px;
    }

    .content .tap .boxs {
        padding: 8px;
    }

    .content .tap .boxs h3 {
        margin-top: 15px;
    }

}



    </style>

</head>

<body>

    <div class="header">
        <div class="container">
            <img src="{{url('images/logo_preview_rev_1.png')}}" alt="logo">

            <div class="box">
                <h1>Dear Laith, </h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi, ad! Quisquam cum quae unde, dolores obcaecati eveniet quidem accusamus eaque eum tempora sit.
                    <br> dolores obcaecati eveniet quidem accusamus eaque eum tempora sit
                </p>
            </div>
        </div>
    </div>

    <div class="content">
      <div class="container">
        <ul>
            <li>
                <h4 class="blue">
                    1. alendronic acid's new prices:
                </h4>
                <p>a. 70MG Tablet</p>
            </li>
            <li class="tap">
                <div class="all">
                    <div class="box-left">
                        <h4>
                            Brand Name
                        </h4>
                        <p>AlEndro</p>
                    </div>

                    <div class="box-right">
                       <h3>Old Price : 56.1</h3>
                       <p>New Price : 70.8</p>
                    </div>
                </div>
                <div class="boxs">
                    <h3>-67 % </h3>
                    <span>Variation</span>
                </div>
            </li>
            <li>
                <h4 class="blue">
                    2. alendronic acid's new prices:
                </h4>
                <p>a. 150MG Tablet</p>
            </li>
            <li class="tap">
                <div class="all">
                    <div class="box-left">
                        <h4>
                            Brand Name
                        </h4>
                        <p>AlEndro</p>
                    </div>

                    <div class="box-right">
                       <h3>Old Price : 56.1</h3>
                       <p>New Price : 70.8</p>
                    </div>
                </div>
                <div class="boxs">
                    <h3>-28 % </h3>
                    <span>Variation</span>
                </div>
            </li>
            <li>
                <p>b. 400MG Tablet</p>
            </li>
            <li class="tap">
                <div class="all">
                    <div class="box-left">
                        <h4>
                            Brand Name
                        </h4>
                        <p>AlEndro</p>
                    </div>

                    <div class="box-right">
                       <h3>Old Price : 56.1</h3>
                       <p>New Price : 70.8</p>
                    </div>
                </div>
                <div class="boxs">
                    <h3>-28 % </h3>
                    <span>Variation</span>
                </div>
            </li>
            <li>
                <h4 class="blue">
                    3. alendronic acid's new prices:
                </h4>
                <p>a. 70MG Tablet</p>
            </li>

            <li class="tap">
                <div class="all">
                    <div class="box-left">
                        <h4>
                            Brand Name
                        </h4>
                        <p>AlEndro</p>
                    </div>

                    <div class="box-right">
                       <h3>Old Price : 56.1</h3>
                       <p>New Price : 70.8</p>
                    </div>
                </div>
                <div class="boxs">
                    <h3>-26 % </h3>
                    <span>Variation</span>
                </div>
            </li>
            <li>

                <li class="tap">
                    <div class="all">
                        <div class="box-left">
                            <h4>
                                Brand Name
                            </h4>
                            <p>AlEndro</p>
                        </div>
    
                        <div class="box-right">
                           <h3>Old Price : 56.1</h3>
                           <p>New Price : 70.8</p>
                        </div>
                    </div>
                    <div class="boxs">
                        <h3>-26 % </h3>
                        <span>Variation</span>
                    </div>
                </li>

                <p style="line-height: 1.7;">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa reiciendis optio dolorem adipisci debitis minus, porro, doloribus iusto nulla ipsum, repudiandae sed rerum incidunt impedit tenetur. Iure corporis soluta fuga!
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa reiciendis optio dolorem adipisci debitis minus, porro, doloribus iusto nulla ipsum, repudiandae sed rerum incidunt impedit tenetur. Iure corporis soluta fuga!
                </p>
            </li>
        </ul>
      </div>

    </div>

    <div class="footer">
        <div class="container">
            <div class="foot">
                <div class="images">
                    <img src="{{url('images/logo_preview_rev_1.png')}}" alt="logo" style="width: 200px;">
                </div>
                <div class="box">
                    <h1>Tariq Tayeb</h1>
                    <p>Solution Lorem Names </p>
                    <a href="#">ahmedgamlaalaraby@gmail.com</a>
                </div>
                <p> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Doloribus reprehenderit iusto sint omnis error, totam harum accusamus est facere cupiditate molestiae nisi, quod, voluptas dolorem natus. Fuga sunt veritatis tempore? Lorem ipsum
                    dolor sit amet consectetur adipisicing elit. Labore, laboriosam, delectus accusantium incidunt atque dolorum quo quae explicabo vel saepe voluptatibus dicta unde magni repellat placeat nulla nam praesentium eum. </p>
                </p>
            </div>
            <div class="copyright">
                <p>Copyright @ 2020 Business Solutions | Pi Phrame Intelligence , All Right reversed</p>
            </div>
        </div>
    </div>
</body>

</html>