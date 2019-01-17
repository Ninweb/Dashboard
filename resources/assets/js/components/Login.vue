<template>
  <div class="container">
    <div class="row justify-content-center align-items-center">
      <div class="col-md-6 align-middle inside">
        <p class="title">Ninweb - Sistema administrativo</p>
        <form>
          <label>Correo electrónico</label> <br>
          <input type="email" class="fields" v-model="form.email"/> <br>
          <label>Contraseña</label> <br>
          <input type="password" class="fields" v-model="form.password"/> <br>
          <input type="submit" value="Login" class="btn btn-primary btn-login"/>
        </form>
      </div>

      <div class="col-md-6 logo align-middle inside">
        <img src="../../images/logo-nin.png">
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: 'login',
  data() {
    return {
      form: {
        email: '',
        password: ''
      }
    }
  },

  methods: {
    authenticate() {
      this.$store.dispatch(login);
    }
  }
}
</script>

<style scoped>
  .container {
    color:white;
  }
  label {
    margin:0;
  }

  .inside {
    padding-top: 20%;
  }

  .title {
    color:white;
    font-weight: bold;
    font-size: 20px;
    margin-bottom: 30px;
  }

  .logo {
    text-align: center;
    top: 50%;
  }
  .logo img {
    width: 80%;
    position: relative;
  }

  .fields {
    background: none;
    border:none; 
    border-bottom: 2px solid white;
    margin: 15px 0;
    font-size: 18px;
    color: white;
  }
  .btn-login {
    margin: 10px auto;
    border:none;
    color:white;
    background: #cc3333;
    font-size: 20px;
    transition: .3s;
  }
  .btn-login:hover {
    background: #bf0a08;
  }
</style>