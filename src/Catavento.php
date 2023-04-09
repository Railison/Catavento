<?php

namespace Railison\Catavento;

class Catavento
{

    //------- AMBIENTE DA API
    private function url($ambiente = NULL)
    {
        switch ($ambiente) {
            case NULL:
                return false;
                break;
            case 'homologacao':
                return 'https://demo.api.winbooksweb.com.br';
                break;
            default:
                return 'http://catavento2.api.winbooksweb.com.br';
        }
    }



    //=======================================================================
    //==================== API CATALOGO DE PRODUTO =========================
    //=======================================================================

    //----- TODOS OS PRODUTOS
    public function todos_os_produtos($ambiente, $tamanho, $paginacao, $token)
    {

        $Client = new Client();
        $resposta = $Client->request(
            'GET',
            $this->url($ambiente) . '/BDIApi/Produto/Listar',
            [
                'verify' => false,
                'headers' => [
                    'API_TOKEN'           => $token,
                    'paginacao.tamanho'   => $tamanho,
                    'paginacao.comecarem' => $paginacao
                ],
            ]
        );

        return $resposta->getBody();
    }

    //---- PRODUTOS ULTIMOS ATUALIZADOS
    public function ultimos_atualizados($ambiente, $tempo, $tipodetempo, $tamanho, $paginacao, $token)
    {
        switch ($tipodetempo) {
            case 'horas':
                $tipo = '';
                break;
            case 'minutos':
                $tipo = '&tipo=m';
                break;
            default:
                $tipo = '';
        }

        $Client = new Client();
        $resposta = $Client->request(
            'GET',
            $this->url($ambiente) . '/BDIApi/Produto/TodosDesde?horas=' . $tempo . $tipo,
            [
                'verify' => false,
                'headers' => [
                    'API_TOKEN'           => $token,
                    'paginacao.tamanho'   => $tamanho,
                    'paginacao.comecarem' => $paginacao
                ],
            ]
        );

        return $resposta->getBody();
    }

    public function estoque_desde_x_horas($ambiente)
    {
    }

    public function buscar_pelo_codigo_de_barras($ambiente)
    {
    }

    public function situacao_pelo_codigo_de_barras($ambiente)
    {
    }

    public function buscar_varios_pelo_codigo_de_barras($ambiente)
    {
    }

    public function situacao_de_varios_pelo_codigo_de_barras($ambiente)
    {
    }

    //=======================================================================
    //==================== API DESCONTO PARA PRODUTOS =========================
    //=======================================================================

    public function todos_os_produtos_com_desconto()
    {
    }

    public function pesquisar_desconto_para_um_produto()
    {
    }

    //=======================================================================
    //==================== API PEDIDOS =========================
    //=======================================================================

    public function formas_de_pagamento()
    {
    }

    public function tipos_de_envios()
    {
    }

    public function enviar_um_pedido()
    {
    }

    public function enviar_varios_pedidos()
    {
    }

    public function consultar_situacao_por_codigo()
    {
    }

    public function consultar_um_pedido_por_codigo()
    {
    }

    //=======================================================================
    //==================== ETIQUETA RASTREIO E NOTA FISCAL ==================
    //=======================================================================

    public function enviar_etiqueta_de_rastreio()
    {
    }

    public function enviar_danfe_da_nota_fiscal()
    {
    }

    public function obter_xml_danfe_da_nota_fiscal()
    {
    }
}

?>