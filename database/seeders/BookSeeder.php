<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Book;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Book $book)
    {
        $book->create([
            'titulo'=>'Harry Potter e a Pedra Filosofal',
            'pages'=>'300',
            'price'=>'99.99',
            'id_user'=>'1'
        ]);
        $book->create([
            'titulo'=>'O Hobbit',
            'pages'=>'280',
            'price'=>'129.99',
            'id_user'=>'2'
        ]);
        $book->create([
            'titulo'=>'Don Quixote',
            'pages'=>'150',
            'price'=>'89.99',
            'id_user'=>'3'
        ]);
        $book->create([
            'titulo'=>'Harry Potter e a Pedra Filosofal',
            'pages'=>'300',
            'price'=>'99.99',
            'id_user'=>'4'
        ]);
        $book->create([
            'titulo'=>'O Hobbit',
            'pages'=>'280',
            'price'=>'129.99',
            'id_user'=>'5'
        ]);
        $book->create([
            'titulo'=>'Don Quixote',
            'pages'=>'150',
            'price'=>'89.99',
            'id_user'=>'6'
        ]);
        $book->create([
            'titulo'=>'Harry Potter e a Pedra Filosofal',
            'pages'=>'300',
            'price'=>'99.99',
            'id_user'=>'7'
        ]);
        $book->create([
            'titulo'=>'O Hobbit',
            'pages'=>'280',
            'price'=>'129.99',
            'id_user'=>'8'
        ]);
        $book->create([
            'titulo'=>'Don Quixote',
            'pages'=>'150',
            'price'=>'89.99',
            'id_user'=>'9'
        ]);
        $book->create([
            'titulo'=>'Don Quixote',
            'pages'=>'150',
            'price'=>'89.99',
            'id_user'=>'10'
        ]);
    }
}
