<?php

use Illuminate\Database\Seeder;
use App\Comic;

class ComicSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $comics = config('comics');
    foreach ($comics as $comic) {
      $comic = new Comic($comic);
      $comic->save();
    }
  }
}
