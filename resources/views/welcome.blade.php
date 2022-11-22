<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel Bootstrap Task</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    </head>
    <body>
         <section class="container-fluid">
             <div class="container">
                <div class="row errors">
                    <div class="col-md-12 mt-5">
                            @if($errors->any())
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif
                    </div>
                </div> 
                <div class="row">
                    <div class="col-md-4">
                        @if(session('success'))
                            <div class="alert-primary" role="alert">
                                <p>{{ session('success') }}</p>
                            </div>
                        @endif
                        <form class="row" action="{{ url('/') }}" method="post">
                            @csrf
                            <div class="form-group mb-3">
                                <input type="text" name="name" id="name" placeholder="Nome da tarefa" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <input type="text" name="category" id="category" placeholder="Nome da categoria" class="form-control">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Cadastrar</button>
                            </div>
                        </form>
                    </div>
                </div>
             </div>
         </section>        
    </body>
</html>
