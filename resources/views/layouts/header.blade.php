<header>
    @if(!auth()->user())
    <div>
        <a href="login">login</a>
        <a href="register">register</a>
    </div>
    @elseif(auth()->user()->subscription == null or auth()->user()->subscription < \Carbon\Carbon::now())
        <a href="stripe">Оформить доступ к платным постам</a>

    @endif

</header>
</body>
