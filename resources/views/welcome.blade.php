<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>deblauwe.be - home</title>

    <style>
        * { margin: 0; padding: 0; }

        html {
            background: url({{ asset('img/magnifying_glass.jfif') }}) no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }

        #page-wrap {
            width: 300px;
            margin: 390px 50px auto auto;
            padding: 20px;
            background: white;
            -moz-box-shadow: 0 0 20px black;
            -webkit-box-shadow: 0 0 20px black;
            box-shadow: 0 0 20px black;
        }
        h1 {font: 25px/2 Calibri; margin: 0 0 10px 20px;}
        p { font: 15px Calibri; margin: 0 0 5px 35px;}

        #footer {
            position: absolute;
            bottom: 15px;
            right: 15px;
            color: white;
            font: 15px Calibri;
        }

    </style>
</head>

<body>

<div id="page-wrap">
    <h1>nico deblauwe</h1>
    <p><b>phone</b> +32 486 84 08 93</p>
    <p><b>e-mail</b> <a href="mailto:nico@deblauwe.be" style="color: #41B3DA;">nico@deblauwe.be</a></p>
    <p>
        visit <a href="https://be.linkedin.com/in/nicodeblauwe" style="color: #41B3DA;">my LinkedIn profile</a>
        or
        <a href="https://bluepundit.eu" style="color: #41B3DA;">bluePundit.eu</a> for more information.</p>
</div>

<div id="footer">
    &copy; Image <a style="color: white;" href="https://unsplash.com/photos/afW1hht0NSs" target="_blank" rel="nofollow">Markus Winkler</a>
</div>

</body>

</html>
