<template>
  <div>
    <h2>Login</h2>
    <v-form 
      ref="form"
      v-model="valid"
      lazy-validation
      class="mt-5"
    >
      <v-text-field
        v-model="user.email"
        :rules="[rules.required, rules.email]"
        label="Email"
        required
      ></v-text-field>
      <v-text-field
        v-model="user.password"
        :rules="[rules.required]"
        label="Senha"
        type="password"
        required
      ></v-text-field>
      <v-btn
        color="primary"
        @click="submit"
      >
        Login
      </v-btn>
    </v-form>
  </div>
</template>

<script>
import axios from 'axios';

export default {
  data: () => ({
    user: {},
    valid: false,
    rules: {
      required: value => !!value || 'Campo obrigatório',
      email: value => {
        const pattern = /^[^@]+@[^@]+\.[^@]+$/;
        return pattern.test(value) || 'Email inválido';
      },
    }
  }),
  methods: {
    submit() {
      if (this.$refs.form.validate() && this.valid) {
        axios.post('/api/login', {
          email: this.user.email,
          password: this.user.password,
        })
        .then(response => {
          this.$router.push('/users')
        })
        .catch(error => {
          console.error('Erro ao fazer login:', error)
        })
      }
    }
  }
};
</script>

<style scoped>
/* Adicione seus estilos aqui */
</style>
