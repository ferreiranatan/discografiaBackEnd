# Documentação da API do Backend

## Visão Geral

Este backend foi desenvolvido com o framework Laravel e oferece uma API REST para gerenciar álbuns e faixas. A API permite realizar operações CRUD em álbuns e criar e excluir faixas associadas a esses álbuns.

#### Endpoints da API

### Álbuns

## Listar Álbuns

- **Método:** `GET`
- **Endpoint:** `/api/albums`
- **Descrição:** Retorna uma lista de todos os álbuns.
- **Resposta de Sucesso:**

  ```json
  [
    {
      "id": 1,
      "title": "Título do Álbum",
      "created_at": "2024-07-31T00:00:00.000000Z",
      "updated_at": "2024-07-31T00:00:00.000000Z"
    }
  ]
  ```
  ## Criar um Novo Álbum

- **Método:** POST

- **Endpoint:** /api/albums

- **Descrição:** Cria um novo álbum.

### Parâmetros:

- **title (string, obrigatório):** O título do álbum.

**Corpo da Requisição:**
```json

{
  "title": "Título do Novo Álbum"
}
````

**Resposta de Sucesso:**

```json

{
  "id": 2,
  "title": "Título do Novo Álbum",
  "created_at": "2024-07-31T00:00:00.000000Z",
  "updated_at": "2024-07-31T00:00:00.000000Z"
}
```
## Obter Detalhes de um Álbum
**Método:** GET

**Endpoint:** /api/albums/{id}

**Descrição:** Retorna os detalhes de um álbum específico.

**Parâmetros:**

**id (integer, obrigatório):** O ID do álbum.

**Resposta de Sucesso:**

```json
  {
    "id": 1,
    "title": "Título do Álbum",
    "tracks": [
      {
        "id": 1,
        "name": "Nome da Faixa",
        "created_at": "2024-07-31T00:00:00.000000Z",
        "updated_at": "2024-07-31T00:00:00.000000Z"
      }
    ],
  "created_at": "2024-07-31T00:00:00.000000Z",
  "updated_at": "2024-07-31T00:00:00.000000Z"
}
```
## Atualizar um Álbum

-   **Método:** `PUT`
 
-   **Endpoint:** `/api/albums/{id}`
 
-   **Descrição:** Atualiza um álbum existente.
 
-   **Parâmetros:**
 
-   `id` (integer, obrigatório): O ID do álbum.

   **Corpo da Requisição:**

  ```json
     {
   "title": "Título Atualizado do Álbum"
     } 
   ```

  **Resposta de Sucesso:**
- ```json
     {
      "id": 1,
      "title": "Título Atualizado do Álbum",
      "created_at": "2024-07-31T00:00:00.000000Z",
      "updated_at": "2024-07-31T00:00:00.000000Z"
       }
  ```

## Excluir um Álbum

-   **Método:** `DELETE`
 
-   **Endpoint:** `/api/albums/{id}`
 
-   **Descrição:** Exclui um álbum específico.
 
-   **Parâmetros:**
 
 -   `id` (integer, obrigatório): O ID do álbum.

-   **Resposta de Sucesso:**
- ``` json
   {
       "message": "Álbum excluído com sucesso"
   } 
  ```

### Faixas

## Adicionar uma Faixa a um Álbum

-   **Método:** `POST`
 
-   **Endpoint:** `/api/tracks`
 
-   **Descrição:** Adiciona uma nova faixa a um álbum.
 
-   **Parâmetros:**
 
 -   `name` (string, obrigatório): O nome da faixa.
 -   `album_id` (integer, obrigatório): O ID do álbum ao qual a faixa será adicionada.
-   **Corpo da Requisição:** 
   ```json 
 {
   "name": "Nome da Faixa",
   "album_id": 1
 } 
 ```
 
-   **Resposta de Sucesso:**
    ```json
     {
      "id": 2,
      "name": "Nome da Faixa",
      "album_id": 1,
      "created_at": "2024-07-31T00:00:00.000000Z",
      "updated_at": "2024-07-31T00:00:00.000000Z"
      } 
     ```
#### Excluir uma Faixa

-   **Método:** `DELETE`
 
-   **Endpoint:** `/api/tracks/{id}`
 
-   **Descrição:** Exclui uma faixa específica.
 
-   **Parâmetros:**
 
 -   `id` (integer, obrigatório): O ID da faixa.
-   **Resposta de Sucesso:**
       ```json
          {
             "message": "Faixa excluída com sucesso"
            }
       ```

#### Configuração do Backend

### Pré-requisitos

-   PHP 8.0 ou superior
-   Composer
-   MySQL ou outro banco de dados compatível

### Instalação

1.  **Clone o Repositório:**
 
  ```bash
 git clone https://github.com/seu-usuario/seu-repositorio.git
 cd seu-repositorio
 ```
      
   **Instale as Dependências:**
   ```bash
 composer install 
   ```
  
   **Configure o `.env`:**
  Copie o arquivo `'.env.example` para `.env'`
  e ajuste as configurações do banco de dados.
 
 ```bash
    cp .env.example .env` 
 ```
 ### Configure as variáveis de ambiente no arquivo `.env`:
   ```
   DB_CONNECTION=mysql,
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=discografiadb
   DB_USERNAME=root
   DB_PASSWORD=1234 
 ```
4.  **Gere a Chave de Aplicação:**
 
   ```bash
   php artisan key:generate
 ```
5.  **Execute as Migrações:**
 
``` bash
 php artisan migrate` 
 ```
6.  **Inicie o Servidor:**
 
``` bash
 php artisan serve` 
```

*Agora, o backend está rodando em  http://localhost:8000. Você pode usar essa URL para se conectar ao backend a partir do frontend.**
