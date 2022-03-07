<?php


$menu = [
    1 => [
        'name' => 'Dashboard',
        'apName' => 'dashboard',
        'link' => 'index.php',
        'id_parent' => 0,
        'iconMenu' => 'fa fa-home',
        // 'menuActiveDashboard' => 'start active'
    ],

    2 => [
        'name' => 'Cadastro',
        'apName' => 'cadastro',
        'id_parent' => 0,
        'iconMenu' => 'fa fa-file-text',
        'iconSetaArrow' => 'arrow',
        // 'menuActiveCadastro' => 'start active'

    ],
    3 => [
        'name' => 'Cliente',
        'link' => 'cadastroCliente.php',         
        'id_parent' => 2
    ],
    4 => [
        'name' => 'Fornecedor',
        'link' => 'cadastroFornecedor.php',
        'id_parent' => 2
    ],
    5 => [
        'name' => 'Perfil de acesso',
        'link' => 'cadastroPerfilDeAcesso.php',
        'id_parent' => 2
    ],
    6 => [
        'name' => 'Produtos',
        'link' => 'cadastroProduto.php',
        'id_parent' => 2
    ],
    7 => [
        'name' => 'Usuário',
        'link' => 'cadastroUsuario.php',
        'id_parent' => 2
    ],
    8 => [
        'name' => 'Relatório',
        'apName' => 'relatorio',
        'id_parent' => 0,
        'iconMenu' => 'fa fa-bar-chart-o',
        'iconSetaArrow' => 'arrow',
        // 'menuActiveRelatorio' => 'start active'

    ],
    9 => [
        'name' => 'Cliente',
        'link' => 'relatorioCliente.php',
        'id_parent' => 8
    ],
    10 => [
        'name' => 'Faturamento',
        'link' => 'relatorioFaturamento.php',
        'id_parent' => 8
    ],
    11 => [
        'name' => 'Produto',
        'link' => 'relatorioProduto.php',
        'id_parent' => 8
    ]

];

function &find($needle, &$haystack)
{
    $return = false;

    if (isset($haystack[$needle])) {
        $return = &$haystack[$needle];
    } else {
        foreach ($haystack as &$item) {
            if (isset($item['child'])) {

                $return = &find($needle, $item['child']);
            }
        }
    }

    return $return;
}

function organize($menu)
{
    $organized = [];

    foreach ($menu as $index => &$item) {
        $item['child'] = [];

        $ref = &find($item['id_parent'], $organized);

        if ($ref !== false) {
            $ref['child'][$index] = $item;
        } else {
            $organized[$index] = $item;
        }
    }

    return $organized;
}

$organized = organize($menu);
