<?php

namespace App\Enums;


// Preventive Mantanence
enum PMStatus: string
{
  case DONE = 'done';
  case IN_PROGRESS = 'in-progress';
}