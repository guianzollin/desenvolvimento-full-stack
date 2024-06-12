<template>
  <div>
    <h2>
      Incluir Usuário
    </h2>
    <v-form
      v-model="valid"
      ref="form"
      lazy-validation
      class="my-5"
    >
      <v-text-field
        v-model="user.name"
        :rules="[v => !!v || 'Nome é obrigatório']" label="Nome"
        required
      ></v-text-field>
      <v-text-field
        v-model="user.email"
        :rules="[v => !!v || 'E-mail é obrigatório', v => /.+@.+\..+/.test(v) || 'E-mail deve ser válido']"
        label="E-mail"
        required
      ></v-text-field>
      <v-btn
        color="primary"
        @click="submitForm"
      >
        Salvar
      </v-btn>
      <v-btn
        class="ml-1"
        color="text"
        to="/users"
      >
        Voltar
      </v-btn>
    </v-form>
  </div>
</template>

<script>

export default {
  data: () => ({
    user: {},
    valid: false,
  }),
  methods: {
    submitForm() {
      if (this.$refs.form.validate() && this.valid) {
        axios.post('/api/users', {
          name: this.user.name,
          email: this.user.email,
        })
        .then(response => {
          this.$router.push('/users')
        })
        .catch(error => {
          console.error('Erro ao criar usuário:', error)
        })
      }
    },
  },
};
</script>

<style scoped>
/* Adicione seus estilos aqui */
</style>