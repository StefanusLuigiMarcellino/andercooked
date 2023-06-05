<body>
    <style>
        body{
            display: flex !important;
            justify-content: center !important;
            align-items: center;

        }
        .heart{
            height: 18px;
            width: 21px;
            background: #86817F;
            display: flex;
            justify-content: center;
            text-align: center;
            border-radius: 0 0 0 10px;
            transform: rotate(-45deg);
            cursor: pointer;
        }
        .heart.fill-color{
            background-color: red;

        }
        .heart::before{
            position: absolute;
            content: "";
            top: -50%;
            left: 0;
            width: 100%;
            height: 100%;
            background: inherit;
            border-radius: 50%;
        }   
        .heart::after{
            position: absolute;
            content: "";
            right: -50%;
            top: 0;
            width: 100%;
            height: 100%;
            background: inherit;
            border-radius: 50%;
        }
        .animation-heart{
            position: absolute;
            display: flex;
            justify-content: center;
            align-items: center;
            width: 18px;
            height: 21px;
            background: red;
            transform: rotate(-45deg);
            border-radius: 0 0 0 10px;  
            cursor: pointer;
            visibility: hidden;
        }
        .animation-heart.animation{
            animation: popup .8s linear;
            visibility: visible;
        }
        .animation-heart::after{
            position: absolute;
            content: "";
            height: 100%;
            width: 100%;
            top: -50%;
            right: 0;
            background: inherit;
            border-radius: 50%;
        }
        .animation-heart::before{
            position: absolute;
            content: "";
            height: 100%;
            width: 100%;
            top: 0;
            right: -50%;
            background: inherit;
            border-radius: 50%;
        }

        @keyframes popup {
            100% {
                transform: scale(1.5) rotate(-45deg);
                opacity: 0;
            }
        }
    </style>
</body>

<div class="heart"></div>
<div class="animation-heart"></div>

<script>
    const heart = document.querySelector(".heart");
    const animationHeart = document.querySelector(".animation-heart");

    heart.addEventListener('click', function() {
        animationHeart.classList.add('animation');
        heart.classList.add('fill-color');
    });

    animationHeart.addEventListener('click', function() {
        animationHeart.classList.remove('animation');
        heart.classList.remove('fill-color');
    })
</script>
