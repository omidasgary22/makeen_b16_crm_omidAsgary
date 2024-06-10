<?php

namespace Database\Seeders;

use App\Models\factor;
use App\Models\Label;
use App\Models\Message;
use App\Models\Note;
use App\Models\Order;
use App\Models\Product;
use App\Models\Reseller;
use App\Models\Task;
use App\Models\team;
use App\Models\Tiket;
use App\Models\User;
use App\Models\Warrenty;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Factoryseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Team::factory()->count(1)->hasUsers(10)->create();
        user::factory()->haslabels(3)->count(1)->hasorders(10)->create();
        //    Factor::factory()->count(1)->has(10)->create();
        //    Factor::factory()->count(1)->morphTo(10)->create();
        Product::factory(10)->hasAttached(Warrenty::factory(2))->hasAttached(label::factory(2))->create();
        Order::factory(10)->hasAttached(Product::factory(2))->create();
        factor::factory(10)->create();
        Reseller::factory(10)->create();
        // Task::factory(10)->count(3)->for(team::factory(),'taskable' )->create();
        Tiket::factory(10)->create();
        Message::factory(10)->create();
        Note::factory(10)->create();
        Warrenty::factory(11)->create();
        Label::factory(10)->create();
    }
}
