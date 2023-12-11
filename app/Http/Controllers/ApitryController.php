<?php

namespace App\Http\Controllers;

class ApitryController
{
  public function alice()
  {
    echo 'called alice()<br>';
    return 'alice';
  }

  public function bob()
  {
    echo 'called bob()<br>';
    return 'bob';
  }
}
