<?php

namespace App\Enums;

enum TicketUrgency: string
{
  case LOW = 'low';
  case NORMAL = 'normal';
  case HIGH = 'high';
}