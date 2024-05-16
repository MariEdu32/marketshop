<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class produtoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('produtos')->insert(
            [
                [
                    'nome' => 'Camiseta vermelha',
                    'descricao' => 'Camiseta para sair',
                    'preco' => 129,
                    'foto' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQb4WDoJfZt93EnMZKA6faSpdDXT_SyaAivFvML-OPhKQ&s',
                    'user_id' => 1,
                ],
                [
                    'nome' => 'Calça jeans',
                    'descricao' => 'Calça jeans azul escuro',
                    'preco' => 100,
                    'foto' => 'https://global.cdn.magazord.com.br/bmix/img/2022/05/produto/481/img-9915.JPEG?ims=fit-in/475x650/filters:fill(white)',
                    'user_id' => 2,
                ],
                [
                    'nome' => 'Tênis Branco',
                    'descricao' => 'Tênis Branco feminino',
                    'preco' => 250,
                    'foto' => 'https://sangashop.com.br/cdn/shop/products/H0b0b608430bf4cd7bd7b9cf988a94b1eL_800x.jpg?v=1681771250',
                    'user_id' => 3,
                ],
                [
                    'nome' => 'Tênis',
                    'descricao' => 'Tênis preto feminino',
                    'preco' => 300,
                    'foto' => 'https://sistema.sistemawbuy.com.br/arquivos/0cf59bd3b2c14ed16aaf7331fb7f5b9d/produtos/VIO2WEI6/img-20220705-wa0016-62c45784a6c8d.jpg',
                    'user_id' => 4,
                ],
               
            ]);
    }
}
