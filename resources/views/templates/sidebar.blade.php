{{-- SIDEBAR --}}
<div class="sidebar" data-aos="fade-right">
    <div class="position-fixed">
        <a href="/home"><div class="logo margin-30"><img src="/assets/logo/full-logo.svg" alt="" width="90%"></div></a>

        <div class="menu-item">
            <div class="sidebar-heading black margin-30">Quick Menu</div>
            <div class="list-menu">
                <a href="/home"><div class="menu-content" id="menu-content">
                    @include('icons.home')
                    <div class="{{ ($title === "Home") ? 'subhead-active' : '' }} sidebar-subheading grey ">Home</div>
                </div></a>
                <a href="/menu"><div class="menu-content" id="menu-content">
                    @include('icons.menu')
                    <div class="{{ ($title === "Menu") ? 'subhead-active' : '' }} sidebar-subheading grey ">Menu</div>
                </div></a>
                <a href="/favorite"><div class="menu-content" id="menu-content">
                    @include('icons.favorite')
                    <div class="{{ ($title === "Favorite") ? 'subhead-active' : '' }} sidebar-subheading grey ">Favorite</div>
                </div></a>
                <a href="/history"><div class="menu-content" id="menu-content">
                    @include('icons.history')
                    <div class="{{ ($title === "History") ? 'subhead-active' : '' }} sidebar-subheading grey ">History</div>
                </div></a>
                <a href="/recipe"><div class="menu-content" id="menu-content">
                    @include('icons.recipe')
                    <div class="{{ ($title === "Recipe") ? 'subhead-active' : '' }} sidebar-subheading grey ">Recipe</div>
                </div></a>
                <a href="/add-nutrient"><div class="menu-content" id="menu-content">
                    @include('icons.information')
                    <div class="{{ ($title === "User Nutrient") ? 'subhead-active' : '' }} sidebar-subheading grey ">Nutrient</div>
                </div></a>
            </div>
        </div>

        <div class="menu-item">
            <div class="sidebar-heading black margin-30">Category</div>
            <div class="list-menu">
                <a href="/menu?category=foodies"><div class="menu-content" id="menu-content">
                    @include('icons.food')
                    <div class="{{ request('category') === 'foodies' ? 'subhead-active' : '' }} sidebar-subheading grey ">Food</div>
                </div></a>
                <a href="/menu?category=beverages"><div class="menu-content" id="menu-content">
                    @include('icons.drink')
                    <div class="{{ request('category') === 'beverages' ? 'subhead-active' : '' }} sidebar-subheading grey ">Drink</div>
                </div></a>
            </div>
        </div>
    </div>
</div>