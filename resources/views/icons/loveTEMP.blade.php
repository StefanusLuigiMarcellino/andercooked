<style>
    button {
        background-color: transparent;
        border: none;
        color: inherit;
        cursor: pointer;
        outline: none;
        appearance: none;
    }

    i{
        /* font-weight: 22px; */
        /* height: 18px; */
        font-size: 19px;
        transition: .3s;
        transition: transform 500ms;
        transition-timing-function: cubic-bezier(.75, -3, .25, 4);
    }

    i:hover{
        color: #f50057;
        transform: scale(1.1);
    }

    .fas{
        color: #f50057;
    }

</style>

<form action="/favorite/{{ $menu->id }}" method="post">
    @csrf
    <button>
        <i onclick="Toggle({{ $menu }})" id="like-btn{{ $menu }}" class="fa-regular fa-heart"></i>
    </button>
</form>

<script>
    function Toggle(a){
        var btn = document.getElementById('like-btn'+ a);
            if (btn.classList.contains("fa-regular")){
                btn.classList.remove("fa-regular");
                btn.classList.add("fas");
            }else{
                btn.classList.remove("fas");
                btn.classList.add("fa-regular");
            }
        }
</script>
<script src="https://kit.fontawesome.com/1e23f5acef.js" crossorigin="anonymous"></script>
