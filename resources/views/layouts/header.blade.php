<header>
    @if(!auth()->user())
    <div>
        <a href="login">login</a>
        <a href="register">register</a>
    </div>
    @endif
</header>
