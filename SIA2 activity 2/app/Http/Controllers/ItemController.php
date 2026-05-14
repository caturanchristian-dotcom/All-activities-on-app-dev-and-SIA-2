<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ItemController extends Controller
{
    private function getItems()
    {
        return [
            [
                'id' => 1,
                'name' => 'Barbarian',
                'image' => 'https://tse3.mm.bing.net/th/id/OIP.sJqJjCAU_5TVwleFJfG8MgHaHY?rs=1&pid=ImgDetMain&o=7&rm=3',
                'housing_space' => 1,
                'dps' => '12-450',
                'rarity' => 'Common',
                'role' => 'Tank/Melee DPS'
            ],
            [
                'id' => 2,
                'name' => 'Archer',
                'image' => 'https://th.bing.com/th/id/R.3a4fa16aee797a21275af106dea040e2?rik=YEknBIZ%2b4EYLbg&riu=http%3a%2f%2fclash-wiki.com%2fimages%2farmy%2farcher%2farcher_level1_rendering.jpg&ehk=XyTh5kdZasp8FS7AIDSWXUS6WfoVHFtE512Ke4K55L4%3d&risl=&pid=ImgRaw&r=0',
                'housing_space' => 1,
                'dps' => '10-380',
                'rarity' => 'Common',
                'role' => 'Ranged DPS'
            ],
            [
                'id' => 3,
                'name' => 'Giant',
                'image' => 'https://png.pngitem.com/pimgs/s/14-141489_how-to-draw-a-clash-royale-giant-clash.png',
                'housing_space' => 5,
                'dps' => '15-240',
                'rarity' => 'Common',
                'role' => 'Tank'
            ],
            [
                'id' => 4,
                'name' => 'Goblin',
                'image' => 'https://tse2.mm.bing.net/th/id/OIP.IBzQyK3Dsj1_nFTQ-urSPwHaGD?rs=1&pid=ImgDetMain&o=7&rm=3',
                'housing_space' => 1,
                'dps' => '20-520',
                'rarity' => 'Common',
                'role' => 'Resource Raider'
            ],
            [
                'id' => 5,
                'name' => 'Wall Breaker',
                'image' => 'https://i.pinimg.com/736x/27/60/1d/27601dc8fd1d13d5c705132ceb945675.jpg',
                'housing_space' => 2,
                'dps' => '8 (Explosion)',
                'rarity' => 'Epic',
                'role' => 'Wall Destroyer'
            ],
            [
                'id' => 6,
                'name' => 'Balloon',
                'image' => 'https://png.pngitem.com/pimgs/s/334-3348170_clash-of-clans-characters-balloon-balloon-star-level.png',
                'housing_space' => 5,
                'dps' => '40-320',
                'rarity' => 'Rare',
                'role' => 'Air Siege'
            ]
        ];
    }

    public function index()
    {
        $items = $this->getItems();
        return view('items.index', compact('items'));
    }

    public function show($id)
    {
        $items = $this->getItems();
        $item = collect($items)->firstWhere('id', $id);

        // 404 if item not found
        if (!$item) {
            abort(404, 'Troop not found!');
        }

        return view('items.show', compact('item'));
    }
}