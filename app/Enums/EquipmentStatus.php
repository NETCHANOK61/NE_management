<?php

namespace App\Enums;

enum EquipmentStatus: string
{
  case IN_USED = 'in-use';
  case TERMINATED = 'terminated';
}