Gerenciamento de Usuários PHP

Um sistema de gerenciamento de usuários com funcionalidades de cadastro, atualização, exclusão e verificação de dados no banco de dados.

Funcionalidades:

Cadastro de novos usuários.
Inserção de dados no banco de dados (MySQL).
Atualização de informações de usuários.
Remoção de usuários.
Verificação de dados inseridos pelo usuário com os armazenados no banco de dados.

Requisitos:

PHP 7.4 ou superior.
Servidor Apache ou Nginx.
MySQL 5.7 ou superior.
Extensão PDO do PHP habilitada.
Composer (opcional, se usar pacotes externos).

Estrutura do Projeto:

index.php – Página inicial do sistema.
dados.php - Pagina pós login, possibilita acesso a outras paginas
verificar.php – Verificação de login e senha.
cadastrar.php – Script de cadastro de novos usuários.
inserir.php – Script para inserir dados no banco.
alterar.php – Página de atualização de dados.
minhaConta.php – Página de gerenciamento de conta do usuário.
conex.php - Estabelece a conexão com banco de dados.
loja.php - Página da loja utilizando a API FakeStore.
 
