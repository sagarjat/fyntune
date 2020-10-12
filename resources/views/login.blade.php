<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<h1>form</h1>
@if($errors->any())
    <div class="alert alert-danger" >
        <ul>
        @foreach($errors->all() as $error)
            <li> {{ print_r($error)}} </li>
        @endforeach
        </ul>
    </div>
@endif


<form action="login" method="post">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
    <input type="text" name="uname" id="uname" > <!--class=" @error is-invalid @enderror" -->
    <input type="password" name="password" id="password">
    <input type="email" name="email" id="email">
    <button type="submit">Submit Form </button>
</form>
<!-- @error('uname')
    <div class="alert alert-danger" > {{ "required field." }} </div>
@enderror -->
