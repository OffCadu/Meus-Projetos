## Descrição do projeto

🏨 Pousada Larentis 


Planejar o gerenciamento do projeto, e implementar um Sistema Web para gerenciar todos os processos internos de uma pousada. O Sistema Web deve ser projetado na linguagem PHP e deverá ser usado juntamente com o framework Laravel. O sistema deverá ter funcionalidades para, CRUD de usuário, reserva de quartos, serviços da administração do hotel.

## Status do Projeto

✅  🚀 Concluído...  ✅

## Pré-requisitos
🛠 Listamos aqui, todos os pré-requisitos para a execução do projeto 🛠

É obrigatório para o bom funcionamento do projeto os seguintes softwares:

- Composer
- MySQL
- NodeJS
- PHP


⌨️ Comandos do php.ini:

Primeiramente devemos tirar o " ; " de duas linhas dentro deste arquivo .ini, com este processo estaremos descomentando as extensões abaixo:

;extension=fileinfo   

;extension=pdo_mysql  


📁 Instalação do composer:

Após baixarmos configurarmos o php e baixarmos o composer, devemos ir diretamente no nosso CMD e executar os seguintes códigos:

composer install
composer update

⚙️ Configurações dentro do projeto no arquivo .env:

Já no arquivo .env para a conexão do banco de dados (MySQL) deve-se colocar o nome do banco de dados(DB_DATABASE) e a password (DB_PASSWORD), que será encontrada da seguinte maneira no arquivo:

DB_DATABASE= (Nome do banco de dados)
DB_PASSWORD= (Password) 

🖥️ Executando o projeto:

Para inicialização do projeto, usaremos dois comandos, um para a inicialização do banco de dados:

php artisan migrate --seed

E o segundo comando para a inicialização do servidor de desenvolvimento do Laravel:

php artisan serve

⚠️ Obs: Após abrir o link fornecido pelo comando acima, você estará em nossa página home, com o projeto iniciado corretamente e totalmente funcional.

## Login/registro

🔒 Após a inicialização do site, clique em login para entrar com as credenciais fornecidas aqui:

- Para login como gerente

email: gerente.larentis@gmail.com
senha: gerente123

- Para login como Atendente

email: atendente.larentis@gmail.com
senha: atendente123

- Para login como hóspede

email: hospede.larentis@gmail.com
senha: hospede123

⚠️ Obs: O registro será totalmente destinado aos hóspedes, podendo criar contas diferentes para a utilização do site como cliente.

## Funcionalidades

Nosso sistema WEB será composto pelas funcionalidades:

- Realização de Login de usuário (cliente ou administrador)
- CRUD dos Hóspedes
- Realização das reservas
- Check-In/Check-Out
- Disponibilidade de quartos
- Controle de consumo
- Emitir relatórios 
- Controle financeiro
- Avaliações do hotel
- Exibir localização do hotel
- Exibir contatos do hotel

## Contribuições

👨🏾‍💻 CAIO DUARTE SILVA
👩🏻‍💻 GABRIELLA SOARES RODRIGUES
👨🏻‍💻 LUCAS PEREIRA LEITE DE SOUSA
👨‍💻 MATHEUS FRAGELLI DE OLIVEIRA