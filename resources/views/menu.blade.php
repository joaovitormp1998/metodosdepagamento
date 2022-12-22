<style>
    a {
        color: black !important;
        text-decoration: none;
    }
    a:hover{
        color: #fff;
    }
    .header {
        display: flex;
        align-items: center;
        justify-content: space-between;
        height: 4.6875rem;
        padding: 1rem;
    }

    .logo {
        font-size: 1.5rem;
        font-weight: bold;
    }

    .menu {
        list-style: none;
        display: flex;
        gap: 0.5rem;

    }

    .menu a {
        display: block;
        padding: 1rem;
        border-radius: 0.5rem;
        color:#fff;
    }

    .menu a:hover {
        background:#ff0084;
        text-color:#fff !important;
    }

    .btn-menu {
        display: none;
    }
  .ul{

  }
    @media (max-width: 600px) {
        h2{
            text-align: center!important;
        }
        .list-group{
            text-align: center!important;
        }
        .menu {
            display: block;
            position: absolute;
            top: 4.6875rem;
            left: 0;
            text-align: center;
            width: 100%;
            height: max-content!important;
            z-index: 10;
            visibility: hidden;
            overflow-y: hidden;
            transition: 0.5s;
            background: #d3d3d3;

        }
        .menu a {
            padding: 1rem 0;
            margin-inline: 1rem;
            border-bottom: 0.0625rem solid rgba(0, 0, 0, 0.24);
            border-radius: 0;
        }
        .btn-menu {
            background: none;
            border: none;
            font: inherit;
            display: flex;
            align-items: center;
            gap: 0.5rem;
            color: var(--white);
            padding: 1rem 0;
            cursor: pointer;
        }
        .hamburger {
            border-top: 0.125rem solid;
            width: 1.25rem;
        }
        .hamburger::after,
        .hamburger::before {
            content: " ";
            display: block;
            width: 1.25rem;
            height: 0.125rem;
            background: currentColor;
            margin-top: 0.3125rem;
            position: relative;
            transition: 0.3s;
        }
        .nav.active .menu {
            height: calc(100vh - 4.6875rem);
            visibility: visible;
            overflow-y: auto;
        }
        .nav.active .hamburger {
            border-top-color: transparent;
        }
        .nav.active .hamburger::before {
            transform: rotate(135deg);
        }
        .nav.active .hamburger::after {
            transform: rotate(-135deg);
            top: -0.4375rem;
        }
    }
</style>
<header class="header">
        <a href="{{ route('home') }}" class="logo">
        <img src="https://cdn-icons-png.flaticon.com/512/3594/3594363.png" width="36" height="36">Loja L9</a>
    <nav class="nav">
            <button
                class="btn-menu"
                aria-label="Abrir Menu"
                aria-haspopup="true"
                aria-controls="menu"
                aria-expanded="false"
            >
                Menu<span class="hamburger"></span>
            </button>
            <ul id="menu" class="menu">
                <li><a href="{{ route('home') }}" id="home">Home</a></li>
                <li><a href="{{ route('categoria') }}" id="categorias">Categorias</a></li>
                <li><a href="{{ route('cadastrar') }}" id="cadastrar">Cadastrar</a></li>
            </ul>
    <a href="{{route('ver_carrinho')}}" class="btn"><i class="fa fa-shopping-cart" style="color:#ff0084;font-size:24px; margin-right: 10px; margin-top: 10px;"></i></a>
</nav>
</header>
<script>
    const nav = document.querySelector(".nav");
    const btnMenu = document.querySelector(".btn-menu");
    const menu = document.querySelector(".menu");
    function handleButtonClick(event) {
        if (event.type === "touchstart") event.preventDefault();
        nav.classList.toggle("active");
    }
    btnMenu.addEventListener("click",handleButtonClick)
    btnMenu.addEventListener("touchstart",handleButtonClick)
</script>
