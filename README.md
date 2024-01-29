## meu estudo de modernização Laravel

Na plyn eu pude desenvolver diversos projetos usando codeigniter, mas eu gostaria de
testar a produtividade do laravel, então estou passando uma revisão avançada, para eu ter um 
conhecimento geral, bem como analizar as mudanças e melhorias.

Depois de bastante tempo eu evoluí em banco de dados e php, bem como front end, 
agora vou poder voltar ao laravel com uma boa bagagem, e tendo a oportunidade de com
calma estudar com mais calma e seriedade o laravel


### temas já estudados ou revisados

blade: criar um template e usar as diretivas para reuso de código: include, yield, section
também usar if ou foreach dentro do blade com table


### fazer uso de seeds e migrations 

Me familiarizar com os comandos de migração e seed e preencher o banco de dados sempre que eu 
modifico as tabelas, atualmente eu existe duas entidades carro e detalhe no qual 
um carro poder ter para ele diversos carro_detalhes


### models Eloquent

Uso do eloquent que simplifica o relacinamento entre tabelas, e encapsula os recursos do sql
para php, assim eu não fico amarrado ao mysql ou sql server que tem sintaxe distinta...

E ainda tem o versionamento da estrutura de dados mantida junsto com o código da aplicação


### tem um bug que em alguns banco de dados precisa mudar no banco de dados o defaultStringLength

use Illuminate\Support\Facades\Schema;
Schema::defaultStringLength(191); 
