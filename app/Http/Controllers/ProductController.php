<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function prod(){
        $titre1= 'BLENDED TO PERFECTION';
        $titre2= 'COFFEES & TEAS';
        $text1= "We take pride in our work, and it shows. Every time you order a beverage from us, we guarantee that it will be an experience worth having. Whether it's our world famous Venezuelan Cappuccino, a refreshing iced herbal tea, or something as simple as a cup of speciality sourced black coffee, you will be coming back fo more.";
        $titre3= 'DELICIOUS TREATS, GOOD EATS';
        $titre4= 'BAKERY & KITCHEN';
        $text2= 'Our seasonal menu features delicious snacks, baked goods, and even full meals perfect for breakfast or lunchtime. We source our ingredients from local, oragnic farms whenever possible, alongside premium vendors for specialty goods.';
        $titre5= 'FROM AROUND THE WORLD';
        $titre6= 'BULK SPECIALITY BLENDS';
        $text3= "Travelling the world for the very best quality coffee is something take pride in. When you visit us, you'll always find new blends from around the world, mainly from regions in Central and South America. We sell our blends in smaller to large bulk quantities. Please visit us in person for more details.";
        return view('/pages/products', compact('titre1','titre2','titre3','titre4','titre5','titre6','text1','text2','text3',));
    }
}