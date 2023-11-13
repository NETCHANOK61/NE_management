<?php

namespace App\Enums;


enum RepairType: string
{
  case Program = 'ปัญหาโปรแกรม';
  case PENDING_REVIEW = 'pending-review';
  case DONE = 'done';
}
