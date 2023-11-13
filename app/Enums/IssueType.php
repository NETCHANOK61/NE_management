<?php

namespace App\Enums;


enum IssueType: string
{
  case Program = 'ประเภทปัญหา';
  case PENDING_REVIEW = 'pending-review';
  case DONE = 'done';
}
