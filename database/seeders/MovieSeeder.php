<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Movie;

class MovieSeeder extends Seeder
{
public function run(): void
{
    Movie::create([
        'title' => 'Interstellar',
        'synopsis' => 'Un grupo de astronautas viaja a través de un agujero de gusano en busca de un nuevo hogar para la humanidad.',
        'year' => 2014,
        'cover' => 'interstellar.jpg',
        'genres' => json_encode(['Ciencia ficción', 'Drama', 'Aventura']),
        'trailer' => 'https://www.youtube.com/watch?v=zSWdZVtXT7E'
    ]);

    Movie::create([
        'title' => 'La La Land',
        'synopsis' => 'Un músico de jazz y una aspirante a actriz se enamoran mientras persiguen sus sueños en Los Ángeles.',
        'year' => 2016,
        'cover' => 'la_la_land.jpg',
        'genres' => json_encode(['Musical', 'Romance', 'Drama']),
        'trailer' => 'https://www.youtube.com/watch?v=0pdqf4P9MB8'
    ]);

    Movie::create([
        'title' => 'Get Out',
        'synopsis' => 'Un joven afroamericano descubre un oscuro secreto cuando visita a la familia de su novia.',
        'year' => 2017,
        'cover' => 'get_out.jpg',
        'genres' => json_encode(['Terror', 'Suspenso', 'Misterio']),
        'trailer' => 'https://www.youtube.com/watch?v=DzfpyUB60YY'
    ]);

    Movie::create([
        'title' => 'Black Panther',
        'synopsis' => 'El príncipe T\'Challa regresa a Wakanda para asumir el trono y enfrentar a un enemigo que amenaza su reino.',
        'year' => 2018,
        'cover' => 'black_panther.jpg',
        'genres' => json_encode(['Acción', 'Aventura', 'Ciencia ficción']),
        'trailer' => 'https://www.youtube.com/watch?v=xjDjIWPwcPU'
    ]);

    Movie::create([
        'title' => 'Parasite',
        'synopsis' => 'Una familia pobre se infiltra en la vida de una familia rica con consecuencias inesperadas.',
        'year' => 2019,
        'cover' => 'parasite.jpg',
        'genres' => json_encode(['Drama', 'Suspenso', 'Comedia negra']),
        'trailer' => 'https://www.youtube.com/watch?v=5xH0HfJHsaY'
    ]);

    Movie::create([
        'title' => 'Tenet',
        'synopsis' => 'Un agente secreto manipula el tiempo para evitar una guerra mundial.',
        'year' => 2020,
        'cover' => 'tenet.jpg',
        'genres' => json_encode(['Acción', 'Ciencia ficción', 'Suspenso']),
        'trailer' => 'https://www.youtube.com/watch?v=L3pk_TBkihU'
    ]);

    Movie::create([
        'title' => 'Dune',
        'synopsis' => 'Un joven noble lucha por el control de un planeta desértico clave para el futuro del imperio.',
        'year' => 2021,
        'cover' => 'dune.jpg',
        'genres' => json_encode(['Ciencia ficción', 'Aventura', 'Drama']),
        'trailer' => 'https://www.youtube.com/watch?v=n9xhJrPXop4'
    ]);

    Movie::create([
        'title' => 'Top Gun: Maverick',
        'synopsis' => 'Pete "Maverick" Mitchell regresa para entrenar a una nueva generación de pilotos de élite.',
        'year' => 2022,
        'cover' => 'top_gun_maverick.jpg',
        'genres' => json_encode(['Acción', 'Drama']),
        'trailer' => 'https://www.youtube.com/watch?v=giXco2jaZ_4'
    ]);

    Movie::create([
        'title' => 'Oppenheimer',
        'synopsis' => 'La historia del físico J. Robert Oppenheimer y su papel en la creación de la bomba atómica.',
        'year' => 2023,
        'cover' => 'oppenheimer.jpg',
        'genres' => json_encode(['Drama', 'Histórica', 'Biografía']),
        'trailer' => 'https://www.youtube.com/watch?v=uYPbbksJxIg'
    ]);
}
}