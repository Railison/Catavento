# Catavento

SDK para integração com API da Distribuidora Catavento, buscar produtos, enviar pedidos, e atualização de estoque.

## Instalação

Para instalar esta dependência basta executar o comando abaixo:
```shell
composer require railison/catavento:dev-main
```

## Utilização

Para usar este gerenciador basta seguir o exemplo abaixo:
```php
<?php
require __DIR__.'/vendor/autoload.php';

//DEPENDÊNCIAS
use Railison\Catavento\ApiCatavento;

//INSTÂNCIA
$catavento = new ApiCatavento;

//PRODUTOS

//---- TODOS PRODUTOS
$catavento->todos_os_produtos('producao|homologacao','tamanho da pagina', 'paginacao', 'token');
$catavento->todos_os_produtos('producao','1500', '1', 'token');



## Requisitos
- Necessário PHP 7.0 ou superior
- Necessário ter a lib SSH2 instalada e ativa