<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Мой сайт</title>
</head>

<body>
    <div class="full-screen-video">
        <video src="video.mp4" loop preload="auto" autoplay muted></video>
    </div>

    <div class="full-screen-darckness"></div>

    <div class="center-block">
        <div class="label">
            <?php
            $filename = 'label.txt';
            $file = fopen($filename, 'r');
            $label = fread($file, filesize($filename));
            fclose($file);

            echo $label;
            ?>
        </div>
        <div class="question">
            <div class="text">Есть вопросы? Задайте их нам!</div>
            <form class="form" id="form" action="https://www.google.com/search">
                <input type="text" class="input" placeholder="Ваш вопрос" name="q" id="input">
                <a class="submit-button" id="submit-button"><img src="arrow.svg"></a>
            </form>
        </div>
    </div>



    <style>
        html,
        body {
            height: 100%;
            width: 100%;
            margin: 0;
            padding: 0;
            position: relative;
            overflow: hidden;
        }

        .full-screen-video {
            width: 100%;
            height: 100%;
        }

        .full-screen-video video {
            object-fit: cover;
            width: 100%;
            height: 100%;
        }

        .full-screen-darckness {
            position: absolute;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, .5);
            z-index: 1;
            top: 0;
            left: 0;
        }

        .center-block {
            position: absolute;
            top: 50%;
            left: 50%;
            z-index: 2;
            transform: translate(-50%, -50%);
            color: #FFFFFF;
            font-family: 'Arial';
            font-size: 30px;
            text-transform: uppercase;
            font-weight: 700;
        }

        .label {
            position: relative;
            z-index: 2;
            color: #FFFFFF;
            font-family: 'Arial';
            font-size: 30px;
            text-transform: uppercase;
            font-weight: 700;
        }

        .question {
            position: absolute;
            top: 200%;
            left: 0;
            font-family: Arial;
            font-weight: 500;
            font-size: 16px;
            width: 100%;
        }

        .form {
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            align-items: center;
            width: 100%;
        }

        .text {
            margin-bottom: 10px;
        }

        .input {
            padding: 10px 5px;
            border: none;
            border-bottom: 2px solid #FFFFFF;
            background-color: rgba(0, 0, 0, 0) !important;
            color: #FFFFFF !important;
            font-family: Arial;
            font-weight: 500;
            font-size: 16px;
            /* width: 300px; */
            flex: 300px 0 1;
            text-align: center;
        }

        .input:focus {
            outline: none;
        }

        .input::placeholder {
            color: rgba(255, 255, 255, .8);
            font-style: italic;
        }

        .submit-button {
            width: 39px;
            height: 39px;
            background-color: rgba(0, 0, 0, 0);
            border-radius: 5px;
            border: 2px solid #FFFFFF;
            user-select: none;
            margin-left: 10px;
            display: flex;
            justify-content: center;
            align-items: center;
            cursor: pointer;
            transition: transform .1s;
        }

        .submit-button:hover {
            transform: scale(.9);
        }

        .submit-button img {
            display: block;
            max-width: 62%;
            max-height: 62%;
            padding-right: 1px;
        }
    </style>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            let submitButton = document.getElementById('submit-button');
            submitButton.addEventListener('click', () => {
                let form = document.getElementById('form');
                form.submit();
            })

            try {
                removeBanner();
            } catch {}

            try {
                removeDisclaimer();
            } catch {}
        })

        function removeBanner() {
            let hostingImage = document.querySelector('[style]');
            hostingImage.remove();
        }

        function removeDisclaimer() {
            let disclaimer = document.querySelector('.disclaimer');
            disclaimer.remove();
        }
    </script>

</body>

</html>