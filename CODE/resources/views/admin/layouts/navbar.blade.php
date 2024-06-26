<style>
    .model-tog {
        position: fixed;
        z-index: 999999;
        display: flex;
        justify-content: center;
        align-items: center;
        width: 100%;
        height: 100vh;
        display: none;
    }

    .model-tog img {
        position: absolute;
        top: 3px;
        right: 3px;
    }

    #show:hover {
        cursor: pointer;
    }

    .main {
        width: 350px;
        height: 500px;
        background: red;
        overflow: hidden;
        background-color: #f7f7f7;
        border-radius: 10px;
        box-shadow: 5px 20px 40px #000;
        position: relative;
    }

    #chk {
        display: none;
    }

    .signup {
        position: relative;
        width: 100%;
        height: 100%;
    }

    .main label {
        color: #f48840;
        font-size: 2.3em;
        justify-content: center;
        display: flex;
        margin: 60px;
        font-weight: bold;
        cursor: pointer;
        transition: .5s ease-in-out;
    }

    .main input {
        width: 60%;
        height: 40px;
        background: #e0dede;
        justify-content: center;
        display: flex;
        margin: 20px auto;
        padding: 10px;
        border: none;
        outline: none;
        border-radius: 5px;
    }

    .main button {
        width: 60%;
        height: 40px;
        margin: 10px auto;
        justify-content: center;
        display: block;
        color: #fff;
        background: #f48840;
        font-size: 1em;
        font-weight: bold;
        margin-top: 20px;
        outline: none;
        border: none;
        border-radius: 5px;
        transition: .2s ease-in;
        cursor: pointer;
    }

    .main button:hover {
        background: #f48840ed;
    }

    .login {
        height: 460px;
        background: #eee;
        border-radius: 60% / 10%;
        transform: translateY(-180px);
        transition: .8s ease-in-out;
    }

    .login label {
        color: #f48840;
        transform: scale(.6);
    }

    #chk:checked~.login {
        transform: translateY(-500px);
    }

    #chk:checked~.login label {
        transform: scale(1);
    }

    #chk:checked~.signup label {
        transform: scale(.6);
    }
</style>

<header class="">
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="/">
                <h2>UP Blog<em>.</em></h2>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item  {{request()->path() == 'dashboard' ? 'active':''}}">
                        <a class="nav-link" href="/dashboard">Articles</a>
                    </li>
                    <li class="nav-item {{request()->path() == 'categorie' ? 'active':''}}">
                        <a class="nav-link" href="{{route('categorie')}}">Categories</a>
                    </li>
                    @if(Auth::check())
                    <div class="dropdown show">
                        <a class="btn dropdown-toggle" style="color: #fff;background-color: #f48840;border-color: #f27420c2;" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Hi {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="/">Accueil</a>
                            <a class="dropdown-item" href="{{route('logout')}}">Logout</a>
                        </div>
                    </div>
                    @else
                    <li class="nav-item">
                        <a class="nav-link" id="show">Login</a>
                    </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
</header>

<div class="model-tog">
    <div class="main">
        <input type="checkbox" id="chk" aria-hidden="true">

        <div class="signup">
            <form class="" action="{{route('register')}}" method="post"> @csrf
                <label for="chk" aria-hidden="true">Sign up</label>
                <input type="text" class="searchText" name="name" placeholder="User name" required="">
                <input type="email" name="email" placeholder="email" required="">
                <input type="password" name="password" placeholder="Password" required="">
                <button>Sign up</button>
            </form>
        </div>

        <div class="login">
            <form action="{{route('login')}}" method="post"> @csrf

                <label for="chk" aria-hidden="true">Login</label>
                <input type="email" name="email" placeholder="Email" required="">
                <input type="password" name="password" placeholder="Password" required="">
                <button>Login</button>
            </form>
        </div>
        <img src="img/retirer.png" id="close" />
    </div>
</div>
{{-- <div class="datshBorad">
    <form action="{{route('datshBorad')}}" method="post"> @csrf
<table class="table">
    <thead>
        <tr>
            <th class="text-center">ID</th>
            <th>Name</th>
            <th>title</th>
            <th>date</th>
            <th class="text-right">Actions</th>
        </tr>
    </thead>
    <tbody>
        <tr>

            <td class="td-actions text-right">
                <button type="button" rel="tooltip" class="btn btn-info btn-sm btn-icon">
                    <i class="tim-icons icon-single-02"></i>
                </button>
                <button type="button" rel="tooltip" class="btn btn-success btn-sm btn-icon">
                    <i class="tim-icons icon-settings"></i>
                </button>
                <button type="button" rel="tooltip" class="btn btn-danger btn-sm btn-icon">
                    <i class="tim-icons icon-simple-remove"></i>
                </button>
            </td>
        </tr>


    </tbody>
</table>
</form>

</div> --}}






<script>
    document.getElementById('close').addEventListener('click', function() {
        document.getElementsByClassName('model-tog')[0].style.display = "none";
    });
    document.getElementById('show').addEventListener('click', function() {
        document.getElementsByClassName('model-tog')[0].style.display = "flex";
    });
</script>