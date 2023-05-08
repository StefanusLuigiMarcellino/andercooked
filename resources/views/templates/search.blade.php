<form action="/menu" class="search-bar" data-aos="fade-down">
    @if (request('category'))
        <input type="hidden" name="category" value="{{ request('category') }}">
    @endif
    @include('icons.search')
    <input class="search-font grey" type="search" name="search" placeholder="Search by food or drink name" value="{{ request('search') }}">
    <button class="search-button">Search</button>
</form>
