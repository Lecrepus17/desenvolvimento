<form method="post" action="{{route('create.user')}}">
    @csrf

  <input type="email" required="required" name="email"/>

  <input type="text" required="required" name="name"/>
  <input type="password" required="required" name="password"/>

    <input type="submit" value="Criar conta" class="submit-button">

</form>
