<template>
  <div>
    <h2>
      Usuários
    </h2>
    <v-btn
      class="my-5"
      color="primary"
      to="/users/create"
    >
      Novo usuário
    </v-btn>
    <v-table>
      <thead>
        <tr>
          <th>
            Nome
          </th>
          <th>
            E-mail
          </th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <tr
          v-for="item in users"
          :key="item.id"
        >
          <td>
            {{ item.name }}
          </td>
          <td>
            {{ item.email }}
          </td>
          <td
            class="text-right"
          >
            <v-btn
              class="mr-1"
              color="primary"
              :to="`/users/${item.id}`"
            >
              editar
            </v-btn>
            <v-btn
              color="red"
              @click="deleteUser(item.id)"
            >
              excluir
            </v-btn>
          </td>
        </tr>
      </tbody>
    </v-table>
  </div>
</template>

<script>

export default {
  data: () => ({
    users: []
  }),
  created() {
    this.getUsers()
  },
  methods: {
    getUsers() {
      axios.get('/api/users')
      .then(response => {
        this.users = response.data
      })
      .catch(error => {
        console.error('Erro ao buscar usuários:', error)
      })
    },
    async deleteUser(userId) {
      if (confirm('Tem certeza que deseja excluir este usuário?')) {
        axios.delete(`/api/users/${userId}`)
        .then(response => {
          this.users = this.users.filter(user => user.id !== userId)
        })
        .catch(error => {
          console.error('Erro ao excluir usuário:', error)
        })
      }
    }
  }
};
</script>

<style scoped>
/* Adicione seus estilos aqui */
</style>