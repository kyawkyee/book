<!DOCTYPE html>
<html>
    <head>
        <title>Download file using PHP from HTML Link</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <center>
            <h2 style="color:#d7385e">Welcome to MM Online Book Store</h2>
            <h3>ကျနော်တို့ Myanmar Online Book Store ကနေကြိုဆိုလိုက်ပါတယ်။ </h3>
            <p><b>အောက်မှာ လူကြီးမင်းဖတ်ရှုလိုတဲ့ စာအုပ်တွေကို ဒေါင်းယူနိုင်ပါတယ် ခင်ဗျာ။ </b></p>
        </center> 
        <div class="wrap">
            <div class="card">
                <img src = "images/hacker.png" alt="book1" style = width:100%>
                <div class="container">
                    <h4><b>နည်းပညာ စာစဉ် (၁)</b></h4>
                    <p>စာရေးသူ - ဆရာကျော်  </p>
                    <a href="download.php?file=books/hacker" target="__thapa">Download PDF </a>
                </div>
            </div>
            <div class="card">
                <img src = "images/php.png" alt="book1" style = width:100%>
                <div class="container">
                    <h4><b>နည်းပညာ စာစဉ်(၂)</b></h4>
                    <p>စာရေးသူ - ဆရာကျော်  </p>
                    <a href="download.php?file=books/php" target="__thapa">Download PDF </a>
                </div>
            </div>
            <div class="card">
                <img src = "images/python.png" alt="book1" style = width:100%>
                <div class="container">
                    <h4><b>နည်းပညာ စာစဉ်(၃)</b></h4>
                    <p>စာရေးသူ - ဆရာကျော် </p>
                    <a href="download.php?file=books/python" target="__thapa">Download PDF </a>
                </div>
            </div>
        </div>
    </body>
</html> 