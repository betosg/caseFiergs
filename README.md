## Case: Sistema de Gerenciamento de Produtos e Categorias - Laravel 8

O Sistema de Gerenciamento de Produtos e Categorias é uma aplicação web desenvolvida em Laravel 8.83.27, com suporte ao banco de dados MySQL 8.0. Esse sistema proporciona um ambiente completo para controle eficiente de produtos e categorias associadas, oferecendo funcionalidades como listagem, cadastro, atualização e deleção tanto para produtos quanto para categorias. Além disso, foi implementada uma funcionalidade de login que restringe o acesso a usuários não cadastrados, com a opção de criar uma nova conta para obter acesso.

### Funcionalidades Principais:

1. **Listagem de Produtos:** O sistema permite visualizar uma lista completa de todos os produtos cadastrados, exibindo informações relevantes para cada item.

2. **Cadastro de Produtos:** Usuários autenticados podem adicionar novos produtos ao sistema, informando o nome, descrição, preço, custo, quantidade em estoque e a categoria associada.

3. **Atualização de Produtos:** Os produtos existentes podem ser editados a qualquer momento, permitindo a modificação de suas informações para manter os registros atualizados.

4. **Deleção de Produtos:** Caso seja necessário, os produtos podem ser removidos do sistema de forma segura, evitando exclusões acidentais.

5. **Listagem de Categorias:** O sistema fornece uma lista de todas as categorias cadastradas, exibindo informações relevantes para cada uma.

6. **Cadastro de Categorias:** Usuários autenticados podem adicionar novas categorias ao sistema, fornecendo nome e descrição.

7. **Atualização de Categorias:** As categorias existentes podem ser editadas, permitindo a modificação de suas informações conforme necessário.

8. **Inativação de Categorias:** Em vez de excluir categorias, é possível inativá-las, preservando a integridade dos dados relacionados.

9. **Pesquisa de Produtos:** A funcionalidade de busca permite que os usuários encontrem rapidamente produtos específicos, pesquisando por texto nos campos de nome do produto, descrição do produto e categoria do produto.

### Configuração do Banco de Dados:

- **Nome da Base de Dados:** produto_api

- **Usuário:** api_produto

- **Senha:** !BB*si3@AT)h5!

### Instalação e Configuração:

1. Clone o repositório para o seu ambiente local.

2. Verifique se possui o PHP 7.4 ou superior instalado, juntamente com o Composer.

3. Crie um arquivo .env na raiz do projeto com as configurações do banco de dados:

```dotenv
DB_CONNECTION=mysql
DB_HOST=seu_host
DB_PORT=seu_port
DB_DATABASE=produto_api
DB_USERNAME=api_produto
DB_PASSWORD=!BB*si3@AT)h5!
```

4. Instale as dependências do projeto executando o comando:

```bash
composer install
```

5. Execute as migrações do banco de dados para criar as tabelas necessárias:

```bash
php artisan migrate
```
6. Execute a população inicial dos produtos:

```bash
php artisan db:seed --class=ProdutosTableSeeder
```

7. Execute a população inicial das categorias:

```bash
php artisan db:seed --class=CategoriasTableSeeder
```

8. Inicie o servidor de desenvolvimento:

```bash
php artisan serve
```

### Funcionalidade de Login:

- Acesse o sistema através do link fornecido e clique em "Novo Usuário" caso ainda não possua uma conta.

- Preencha os campos necessários para se registrar no sistema.

- Após o registro, faça o login utilizando suas credenciais.

- Usuários não autenticados serão redirecionados para a página de login ao tentarem acessar as funcionalidades protegidas.

### Backlog:

- Atualizar para PHP 8.x
- Atualizar para Laravel 9x