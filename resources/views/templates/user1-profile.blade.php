<div class="user-profile" id="toggle-btn">
    <img class="image" src="{{ auth()->user()->profile_picture }}" alt="">
    {{-- <div class="image"></div> --}}
    <p class="profile-font ml-2 white">{{ auth()->user()->username }}</p>
    <svg class="mr-2 rotate-normal" id="rotate" width="10" height="4" viewBox="0 0 10 4" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M5 4L9.33013 0.25H0.669873L5 4Z" fill="white"/>
    </svg>
</div>

<div class="user-profile-setting hidden" id="content" style="margin-top: 10px;" aria-labelledby="dropdownMenuButton">
    <a href="/profile" class="profile-list"><div class="menu white">Profile</div></a>
    {{-- <a href="/" class="profile-list"><div class="menu white">Setting</div></a> --}}
    {{-- <div class="line"></div> --}}
    <form action="/logout" method="post">
        @csrf
        <button class="profile-list p-0"> <div class="menu white">Log out</div></button>
    </form>
</div>

<script>
    const toggleBtn = document.querySelector("#toggle-btn");
    const content = document.querySelector("#content");
    const iconSVG = document.querySelector("#rotate");

    toggleBtn.addEventListener("click", function() {
    if (content.classList.contains("hidden")) {
        content.classList.remove("hidden");
    } else {
        content.classList.add("hidden");
    }

    if (iconSVG.classList.contains("rotate-normal")) {
        iconSVG.classList.remove("rotate-normal");
        iconSVG.classList.add("rotate-upside-down");
    } else {
        iconSVG.classList.remove("rotate-upside-down");
        iconSVG.classList.add("rotate-normal");
    }
    });

    document.addEventListener('click', function(event) {
        if (!toggleBtn.contains(event.target)) {
            //   dropdownMenu.style.display = 'none';
            content.classList.add("hidden");
        }
    });
</script>
