<?php

namespace Styde;

require '../vendor/autoload.php';

// Translator::set([
//     'BasicBowAttack' => ':unit dispara una flecha a :opponent',
//     'BasicSwordAttack' => ':unit ataca con la espada a :opponent',
//     'CrossBowAttack' => ':unit dispara una flecha a :opponent',
//     'FireBowAttack' => ':unit dispara una flecha de fue a :opponent',
// ]);
//
// Log::setLogger(new HtmlLogger());
//
// $ramm = Unit::createSoldier()
//             ->setWeapon(new Weapons\BasicSword())
//             ->setArmor(new Armors\SilverArmor())
//             ->setShield();
//
//
// $silence = new Unit('Silence', new Weapons\FireBow);
//
// $silence->attack($ramm);
//
// $silence->attack($ramm);
//
// $ramm->attack($silence);


// $node = new HtmlNode('input', ['name' => 'first_name', 'type' => 'text']);
// $gender = new HtmlNode('input', ['name' => 'gender', 'type' => 'checkbox', 'value'=> 'F']);
// $textArea = (new HtmlNode('textarea', 'Styde'))
//     ->name('content')
//     ->id('description');

$node = HtmlNode::textarea('Styde')
    ->name('content')
    ->id('contenido');

var_dump($node('name'), $node('width', 100));

// echo $node;
