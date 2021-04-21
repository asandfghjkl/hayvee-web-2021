<!DOCTYPE html>
<html>
<head>
    <title>Registration Form</title>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!--Bootsrap 4 CDN-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <link rel="stylesheet" type="text/css" href="{{url('style.css')}}">
    
</head>
<body>
    <div class="signup-form">

        <form action="{{ route('register') }}" method="post">
        @csrf
            @if(session('errors'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    Something it's wrong:
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                    <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                    </ul>
                </div>
            @endif
            <h2>Register Admin</h2>
            <div class="form-group">
                <div class="input-group">
				    <span class="input-group-addon"><i class="fa fa-user"></i></span>
				    <input type="text" class="form-control" name="name" placeholder="Name">
			    </div>
                {{-- <label for=""><strong>Nama</strong></label>
                <input type="text" name="name" class="form-control" placeholder="Name"> --}}
            </div>
            <div class="form-group">
                <div class="input-group">
				    <span class="input-group-addon"><i class="fa fa-paper-plane"></i></span>
				    <input type="text" class="form-control" name="email" placeholder="Email">
			    </div>
                {{-- <label for=""><strong>E-mail</strong></label>
                <input type="text" name="email" class="form-control" placeholder="Email"> --}}
            </div>
            <div class="form-group">
                <div class="input-group">
				    <span class="input-group-addon"><i class="fa fa-lock"></i></span>
				    <input type="password" class="form-control" name="password" placeholder="Password">
			    </div>
                {{-- <label for=""><strong>Password</strong></label>
                <input type="password" name="password" class="form-control" placeholder="Password"> --}}
            </div>
            <div class="form-group">
                <div class="input-group">
				    <span class="input-group-addon"><i class="fa fa-lock"></i></span>
				    <input type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password">
			    </div>
                {{-- <label for=""><strong>Konfirmasi Password</strong></label>
                <input type="password" name="password_confirmation" class="form-control" placeholder="Password"> --}}
            </div>

            <button type="submit" class="btn btn-primary btn-block btn-lg">Register</button>

        </form>
        <div class="text-center">Already have an account? <a href="{{ route('login') }}">Login</a> now!</p>
        
      </div>

    {{-- <div class="signup-form">	
        <form action="{{ route('register') }}" method="POST">
        @csrf
        @if(session('errors'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                Something it's wrong:
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
                <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
                </ul>
            </div>
        @endif
            <h2>Register Admin</h2>
            <div class="form-group">
			    <div class="input-group">
				    <span class="input-group-addon"><i class="fa fa-user"></i></span>
				    <input type="text" class="form-control" name="name" placeholder="Name">
			    </div>
            </div>
            <div class="form-group">
			    <div class="input-group">
				    <span class="input-group-addon"><i class="fa fa-paper-plane"></i></span>
				    <input type="text" class="form-control" name="email" placeholder="Email">
			    </div>
            </div>
		    <div class="form-group">
			    <div class="input-group">
				    <span class="input-group-addon"><i class="fa fa-lock"></i></span>
				    <input type="password" class="form-control" name="password" placeholder="Password">
			    </div>
            </div>       
                
            <button type="submit" class="btn btn-primary btn-block btn-lg">Register</button>
            
		</form>
	    <div class="text-center">Already have an account? <a href="{{url('login')}}">Login here</a>.</div>
    </div> --}}
</body>
</html>