<?php

namespace App\Enums;

// Preventive Mantanence Detail
enum PMDetailStatus: string
{
  case PASS = 'pass';
  case FAILED = 'failed';
}