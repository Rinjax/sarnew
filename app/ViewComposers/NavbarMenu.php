<?php

namespace App\ViewComposers;

use Rinjax\Menu\Menu;
use Illuminate\View\View;

class NavbarMenu
{
    protected $menu;

    public function __construct()
    {
        $this->menu = new Menu('MainMenu');
    }
    public function compose(View $view)
    {
        if(!\Auth::check()){
            $view->with('MainMenu', null);
        }else{
            $this->menu->addLink('Dashboard', 'dashboard');

            $this->menu->addLink('Profile', 'profile');

            $this->menu->addLink('Dog', 'dog');

            $view->with('MainMenu', $this->menu->render());
        }


    }
}