<?php

namespace App\Enums;


enum TicketStatus: string
{
  case OPEN = 'open';
  case PENDING_REVIEW = 'pending-review';
  case DONE = 'done';
}
