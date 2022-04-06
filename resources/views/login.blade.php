<style>
  * {
    margin: 0;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  }

  .login-page {
      height: 60%;
      /* width: 50%; */
      width: 50vw;
      background: #FDFDFD;
      /* filter: drop-shadow(0px 0px 10px rgba(0, 0, 0, 0.25)); */
      /* border-radius: 20px; */
      display: flex;
      flex-direction: row;
      padding: 0;
      margin: 0;
  }

  .container{
      margin: 0;
      width: 100%;
      height: 100%;
      /* min-height: 340px; */
      display: flex;
      flex-direction: column;
      /* align-content: center; */
      align-items: center;
      background: #009B97;
      justify-content: center;
  }

  .gambar-login {
    /* width: 50%; */
    /* background: yellow; */

    /* background: url({{ asset('img/login-image.png') }}); */
  }

  .gambar-login img {
    margin: 0;
    padding: 0;
  }

  .form-login {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
  }

  .form-login form {
    margin: 3rem;
    
  }

  .title {
    margin-bottom: 5vh;
    font-weight: 600;
    font-size: 5vh;
    text-align: center;
  }

  .input-form {
    margin-bottom: 8vh;
  }

  input {
    outline: none;
    background-color: white;
    border: 2px solid #009B97;
    border-radius: 50px;
    padding: 2vh;
    margin: 2vh 0px;
    width: 100%;
    font-size: 2vh;
    font-weight: 500;
  }

  button {
    cursor: pointer;
    font-size: 3.2vh;
    color: white;
    font-weight: 600;
    background: #009B97;
    padding: 2vh 0px;
    border: none;
    width: 100%;
    border-radius: 50px;
  }
  
</style>

<div class="container">
  <div class="login-page">
    <div class="gambar-login">
      <img src="{{ asset('img/login-image.png') }}" alt="" srcset=""  class="gambar-login" width="100%" height="100%">
    </div>
    
    <div class="form-login">
      <form action="/masuk" method="POST">
          @csrf
        <div class="title">
          Masuk Akun
        </div>
        <div class="input-form">
          <input type="text" placeholder="email" name="email"/>
          <input type="password" placeholder="password" name="password"/>
        </div>
        <button type="submit">Login</button>
        
        {{-- <p class="message">Not registered? <a href="#">Create an account</a></p> --}}
      </form>
    </div>
  </div>
</div>


  