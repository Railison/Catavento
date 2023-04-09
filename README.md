# Catavento

SDK para integração com API da Distribuidora Catavento, buscar produtos, enviar pedidos, e atualização de estoque.

Facilitando integração de sistemas com a distribuidora Catavento.

## Instalação

Para instalar esta dependência basta executar o comando abaixo:

```shell
composer require railison/catavento:dev-main
```
## Atualização

Para atualizar o pacote.
```shell
composer update railison/catavento
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

//---- EXEMPLO DE USO
$catavento->todos_os_produtos('producao','1500', '1', 'token'); 

//PRODUTOS
$catavento->todos_os_produtos('producao|homologacao','tamanho da pagina', 'paginacao', 'token');
$catavento->ultimos_atualizados();
$catavento->estoque_desde_x_horas();
$catavento->buscar_pelo_codigo_de_barras();
$catavento->situacao_pelo_codigo_de_barras();
$catavento->buscar_varios_pelo_codigo_de_barras();
$catavento->situacao_de_varios_pelo_codigo_de_barras();
$catavento->todos_os_produtos_com_desconto();
$catavento->pesquisar_desconto_para_um_produto();

//API PEDIDOS
$catavento->formas_de_pagamento();
$catavento->tipos_de_envios();
$catavento->enviar_um_pedido();
$catavento->enviar_varios_pedidos();
$catavento->consultar_situacao_por_codigo();
$catavento->consultar_um_pedido_por_codigo();

//ETIQUETA RASTREIO E NOTA FISCA
$catavento->enviar_etiqueta_de_rastreio();
$catavento->enviar_danfe_da_nota_fiscal();
$catavento->obter_xml_danfe_da_nota_fiscal();

## Requisitos
- Necessário PHP 7.0 ou superior
- Necessário Guzzle para chamadas.