<template>
  <div class="bg-login">
    <div class="container">
      <div class="row justify-content-center align-items-center">
        <div class="col-md-6 align-middle inside">
          <p class="title">Ninweb - Sistema administrativo</p>
          <form>
            <label>Correo electrónico</label> <br>
            <input type="email" class="fields" v-model="form.email"/> <br>
            <label>Contraseña</label> <br>
            <input type="password" class="fields" v-model="form.password"/> <br>
            <input type="submit" value="Ingresar" @click="login()" class="btn btn-primary btn-login"/>

            <!-- <p>{{info}}</p> -->
          </form>
        </div>

        <div class="col-md-6 logo align-middle inside">
          <img src="../../images/logo-nin.png">
        </div>
      </div>
    </div>
  </div>
</template>

<script>
//import axios from 'axios'
import DashboardComponent from './dashboard/Dashboard.vue'

export default {
  name: 'login',

  components: {DashboardComponent},

  data() {
    return {
      // info: '',
      adminAccess: false,
      userAccess: false,

      form: {
        email: '',
        password: ''
      },

      admin: {
        email: 'admin@ninweb.net',
        password: '1234',
        access: 'admin'
      },

      user: {
        email: 'user@ninweb.net',
        password: '1234',
        access: 'user'
      }
    }
  },

  methods: {
    login() {
      if (this.form.email == this.admin.email && this.form.password == this.admin.password){
        this.$router.push('/dashboard/admin')
        // this.$emit('validate', this.admin.email)
      }else if (this.form.email == this.user.email && this.form.password == this.user.password){
        this.$router.push('/dashboard/user')
        // this.$emit('validate', this.admin.email)
      }
    }
  },

  props: {

  }

  /*mounted () {
    axios.get('https://api.coindesk.com/v1/bpi/currentprice.json').then(
      res => {
        this.info = res
        console.log(res)
      }, error => {
        console.log(error)
      }
    )
  }*/
}
</script>

<style scoped>
  .bg-login {
    height: 100vh;
    background:#222;
  }
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
    font-size: 30px;
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