<template>
  <div>
    <h2>Cadastro</h2>
    <v-form 
      ref="form"
      v-model="valid"
      lazy-validation
      class="mt-5"
    >
      <v-text-field
        v-model="user.name"
        :rules="[rules.required]"
        label="Nome"
        required
      ></v-text-field>
      <v-text-field
        v-model="user.email"
        :rules="[rules.required, rules.email]"
        label="Email"
        required
      ></v-text-field>
      <v-text-field
        v-model="user.password"
        :rules="[rules.required, rules.min]"
        label="Senha"
        type="password"
        required
      ></v-text-field>
      <v-text-field
        v-model="user.password_confirmation"
        :rules="[rules.required, rules.min]"
        label="Repita sua senha"
        type="password"
        required
      ></v-text-field>
      <v-btn
        color="primary"
        @click="submit"
      >
        Cadastrar
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
      min: value => (value && value.length >= 8) || 'Senha deve ter pelo menos 8 caracteres'
    }
  }),
  methods: {
    submit() {
      if (this.$refs.form.validate() && this.valid) {
        axios.post('/api/register', {
          name: this.user.name,
          email: this.user.email,
          password: this.user.password,
          password_confirmation: this.user.password_confirmation,
        })
        .then(response => {
          this.$router.push('/users')
        })
        .catch(error => {
          console.error('Erro ao criar usuário:', error)
        })
      }
    }
  }
};
</script>

<style scoped>
/* Adicione seus estilos aqui */
</style>
