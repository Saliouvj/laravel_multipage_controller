<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function store(){
        $titre1='COME ON IN';
        $titre2='We re Open';
        $adres1= "1116 Orchard Street";
        $adres2= "Golden Valley, Minnesota";
        $adres3= "Call Anytime";
        $titre3= "STRONG COFFEE, STRONG ROOTS";
        $titre4= "ABOUT OUR CAFE";
        $text1= "Founded in 1987 by the Hernandez brothers, our establishment has been serving up rich coffee sourced from artisan farmers in various regions of South and Central America. We are dedicated to travelling the world, finding the best coffee, and bringing back to you here in our cafe.

        We guarantee that you will fall in lust with our decadent blends the moment you walk inside until you finish your last sip. Join us for your daily routine, an outing with friends, or simply just to enjoy some alone time.";
        $num= "(317) 585-8468";
        $tabl =[
            (object)['jour'=>'lundi', 'heur'=>'7h00 am to 8h00 pm'],
            (object)['jour'=>'mardi', 'heur'=>'7h00 am to 8h00 pm'],
            (object)['jour'=>'mercredi', 'heur'=>'7h00 am to 8h00 pm'],
            (object)['jour'=>'jeudi', 'heur'=>'7h00 am to 8h00 pm'],
            (object)['jour'=>'vendredi', 'heur'=>'7h00 am to 8h00 pm'],
        ];
        return view('/pages/store', compact('tabl', 'titre1', 'titre2', 'adres1', 'adres2', 'adres3', 'num', 'titre3', "titre4", 'text1'));
    }
}