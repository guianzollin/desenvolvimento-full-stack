<template>
  <div>
    <h2>
      Detalhes do Usuário
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
        @click="saveUser"
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
  created() {
    const userId = this.$route.params.id;
    if (userId) {
      this.getUser(userId)
    }
  },
  methods: {
    getUser(userId) {
      axios.get(`/api/users/${userId}`)
      .then(response => {
        this.user = response.data
      })
      .catch(error => {
        console.error('Erro ao buscar usuário:', error)
      })
    },
    saveUser() {
      if (this.$refs.form.validate() && this.valid) {
        axios.put(`/api/users/${this.user.id}`, {
          name: this.user.name,
          email: this.user.email,
        })
        .then(response => {
          this.$router.push('/users')
        })
        .catch(error => {
          console.error('Erro ao atualizar usuário:', error)
        })
      }
    },
  },
};
</script>

<style scoped>
/* Adicione seus estilos aqui */
</style>