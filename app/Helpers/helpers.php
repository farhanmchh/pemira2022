<?php

function thousand_format($value)
{
  return number_format($value, 0, ',', '.');
}
