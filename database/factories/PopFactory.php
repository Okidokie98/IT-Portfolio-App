<?php

namespace Database\Factories;

use App\Models\Pop;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Pop>
 */
class PopFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $categories = [
            'Pop! Vinyl',
            'Pop! Movies',
            'Pop! Television',
            'Pop! Animation',
            'Pop! Games',
            'Pop! Heroes',
            'Pop! Rides',
            'Pop! Ad Icons',
            'Pop! Music',
            'Pop! Sports',
            'Pop! Disney',
            'Pop! Marvel',
            'Pop! Star Wars',
            'Pop! DC Comics',
            'Pop! Harry Potter',
            'Pop! Anime',
            'Pop! Rocks',
            'Pop! Icons',
            'Pop! 8-Bit',
            'Pop! Deluxe',
            'Pop! Moments',
            'Pop! Town',
            'Pop! PEZ',
            'Pop! Pin',
            'Pop! Keychain',
            'Pop! Soda',
            'Pop! Albums',
            'Pop! Art Series',
            'Pop! Retro Toys',
            'Pop! Classics',
            'Pop! Flocked',
            'Pop! Metallic'
        ];

        $series = [
            'Marvel', 'Star Wars', 'Disney', 'Harry Potter', 'DC Comics',
            'The Walking Dead', 'Game of Thrones', 'Stranger Things', 'Rick and Morty', 'Dragon Ball Z',
            'Naruto', 'My Hero Academia', 'Overwatch', 'Fortnite', 'Pokemon',
            'Avengers', 'Justice League', 'Batman', 'Spider-Man', 'Iron Man',
            'Captain America', 'Thor', 'Black Panther', 'Guardians of the Galaxy', 'X-Men',
            'Deadpool', 'Wonder Woman', 'The Flash', 'Superman', 'Aquaman',
            'Teen Titans Go!', 'Arrow', 'Supernatural', 'Doctor Who', 'Sherlock',
            'Friends', 'The Office', 'Parks and Recreation', 'Brooklyn Nine-Nine', 'Breaking Bad',
            'Better Call Saul', 'The Big Bang Theory', 'Toy Story', 'Frozen', 'Aladdin',
            'The Lion King', 'Beauty and the Beast', 'Cinderella', 'Mulan', 'Moana',
            'Lilo & Stitch', 'Wreck-It Ralph', 'Zootopia', 'Tangled', 'The Little Mermaid',
            'Monsters Inc.', 'Finding Nemo', 'Cars', 'Inside Out', 'Coco',
            'Up', 'Ratatouille', 'Brave', 'Wall-E', 'The Incredibles',
            'Shrek', 'How to Train Your Dragon', 'Kung Fu Panda', 'Despicable Me', 'Madagascar',
            'The Simpsons', 'South Park', 'Family Guy', "Bob's Burgers", 'Futurama'
];

        $funkoPopNames = [
            'Iron Man', 'Captain America', 'Thor', 'Hulk', 'Black Widow',
            'Hawkeye', 'Spider-Man', 'Doctor Strange', 'Black Panther', 'Ant-Man',
            'Wasp', 'Star-Lord', 'Gamora', 'Rocket Raccoon', 'Groot',
            'Drax', 'Scarlet Witch', 'Vision', 'Falcon', 'Winter Soldier',
            'Loki', 'Thanos', 'Captain Marvel', 'Shuri', 'Okoye',
            'Nick Fury', 'Phil Coulson', 'Maria Hill', 'Pepper Potts', 'War Machine',
            'Nebula', 'Yondu', 'Mantis', 'Quicksilver', 'Wong',
            'Hela', 'Odin', 'Heimdall', 'Valkyrie', 'Korg',
            'Deadpool', 'Wolverine', 'Cyclops', 'Jean Grey', 'Storm',
            'Beast', 'Rogue', 'Gambit', 'Professor X', 'Magneto',
            'Mystique', 'Sabretooth', 'Nightcrawler', 'Colossus', 'Juggernaut',
            'Mystique', 'Phoenix', 'Kitty Pryde', 'Iceman', 'Angel',
            'Batman', 'Superman', 'Wonder Woman', 'The Flash', 'Aquaman',
            'Cyborg', 'Green Lantern', 'Shazam', 'Martian Manhunter', 'Green Arrow',
            'Black Canary', 'Harley Quinn', 'Joker', 'Catwoman', 'Lex Luthor'
        ];


        return [
            'name' => fake()->randomElement($funkoPopNames),
            'series' => fake()->randomElement($series),
            'number' => fake()->numberBetween(1, 1450),
            'category' => fake()->randomElement($categories),
        ];
    }
}
