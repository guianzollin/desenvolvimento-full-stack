# Projeto Laravel + Vue/Vuetify

## Requisitos

- **PHP**: 8.2+
- **MySQL**: 8+
- **Node.js**: 16+

## Setup

### Backend (Laravel)

1. **Instalar dependências do PHP:**
   ```sh
   composer install
   ```

2. **Criar o arquivo `.env`:**
   
   Copie o arquivo `.env.example` e renomeie para `.env`.
   ```sh
   cp .env.example .env
   ```

3. **Criar chave da aplicação:**
   ```sh
   php artisan key:generate
   ```

4. **Configurar as variáveis de ambiente:**
   
   Edite o arquivo `.env` para configurar a conexão com o banco de dados.

5. **Criar a base de dados e rodar as migrações:**
   ```sh
   php artisan migrate
   ```

6. **Instalar o Laravel Passport:**
   ```sh
   php artisan install:api --passport
   ```

7. **Inicializar o servidor de desenvolvimento:**
   ```sh
   php artisan serve
   ```

### Frontend (Vue/Vuetify)

1. **Instalar dependências do Node.js:**
   ```sh
   npm install
   # ou
   yarn install
   ```

2. **Compilar os assets do frontend:**
   
   Para desenvolvimento (com hot-reload):
     ```sh
     npm run dev
     # ou
     yarn dev
     ```
   Para produção:
     ```sh
     npm run build
     # ou
     yarn build
     ```

## Links Úteis

- [Documentação do Laravel](https://laravel.com/)
- [Documentação do Vue.js](https://vuejs.org/)
- [Documentação do Vue Router](https://router.vuejs.org/)
- [Documentação do Vuetify](https://vuetifyjs.com/)

## Problemas Comuns

- **Erro ao instalar dependências do PHP:** Verifique se você tem o Composer instalado e configurado corretamente.
- **Erro ao instalar dependências do Node.js:** Verifique se você tem o Node.js e npm/yarn instalados e atualizados.
