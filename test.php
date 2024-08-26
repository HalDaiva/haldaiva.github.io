<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        /* GLOBAL STYLES */
        body {
            background: #333;
            padding-top: 5em;
            display: flex;
            justify-content: center;
        }

        /* DEMO-SPECIFIC STYLES */
        .typewriter h1 {
            color: #fff;
            font-family: monospace;
            overflow: hidden; /* Ensures the content is not revealed until the animation */
            /*border-right: .15em solid orange; !* The typwriter cursor *!*/
            white-space: nowrap; /* Keeps the content on a single line */
            margin: 0 auto; /* Gives that scrolling effect as the typing happens */
            letter-spacing: .15em; /* Adjust as needed */
            animation:
                    typing 1.0s steps(20, end);
                    /*blink-caret .5s step-end infinite;*/
        }

        /* The typing effect */
        @keyframes typing {
            from { width: 0 }
            to { width: 100% }
        }

        /* The typewriter cursor effect */
        /*@keyframes blink-caret {*/
        /*    from, to { border-color: transparent }*/
        /*    50% { border-color: orange }*/
        /*}*/
    </style>
</head>
<body>
<div class="typewriter">
    <h1>The cat and the hat.</h1>
</div>
</body>
</html>
