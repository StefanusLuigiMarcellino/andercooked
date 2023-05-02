<body>
    <style>
        .no-result-display{
            width: 100%;
            /* height: 25vh; */
            /* background-color: black; */
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: center;
            
        }
        .height1{
            height: 35vh;
        }
        .height2{
            height: 60vh;
        }
        .no-result-font{
            font-family: var(--sansserif-font);
            font-weight: 500;
            font-size: 16px;
        }
        .border{
            background-color: #C3C3C3;
            padding: 5px 10px;
            border-radius: 5px;
        }
        .animation{
            letter-spacing: 1px;
            border-right: 2px solid;
            width: 100%;
            white-space: nowrap;
            overflow: hidden;
            animation: 
                typing 2.5s steps(25),
                cursor .4s step-end infinite alternate;
        }
        @keyframes cursor{
            50% { border-color: transparent}
        }
        @keyframes typing{
            from { width: 0 }
        }
    </style>
</body>

{{-- No Result Display --}}
<div class="no-result-display {{ ($title === 'Home') ? 'height1' : 'height2'}}">
    <div class="no-result-font"><div class="animation">Sorry! No result found :&#40</div></div>
</div>